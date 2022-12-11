// Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

// Create the chart
axios.post("http://localhost//itjobs/admin/dashboard/company_statistics")
.then((result) => {
   
    const series_data=Object.values(result.data[0]);
    const drilldown_data=[]
    Object.values(result.data[1]).forEach(each=>{
        each.data=Object.values(each.data);
        drilldown_data.push(each)
    })
    console.log(drilldown_data);
    Highcharts.chart('container', {
        chart: {
          type: 'column'
        },
        title: {
          align: 'left',
          text: 'Thống kê bài đăng của từng công ty'
        },
        subtitle: {
          align: 'left',
          text: ''
        },
        accessibility: {
          announceNewData: {
            enabled: true
          }
        },
        xAxis: {
          type: 'category'
        },
        yAxis: {
          title: {
            text: ''
          }
      
        },
        legend: {
          enabled: false
        },
        plotOptions: {
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: '{point.y:.1f}'
            }
          }
        },
      
        tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat: '<span style="color:{point.color}">{point.name} </span>: <b>{point.y:.2f}</b> <br/>'
        },
      
        series: [
            {
              name: "Số lượng bài đăng ",
              colorByPoint: true,
              data:series_data
            }
          ],
          
        drilldown: {

          breadcrumbs: {
            position: {
              align: 'right'
            }
          },
          series: drilldown_data
        }
      });
})
