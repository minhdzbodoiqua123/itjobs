<link rel="stylesheet" href="<?= _WEB_ROOT."/app/public/assets/employer/css/dashboard.css" ?>">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script defer src="<?= _WEB_ROOT."/app/public/assets/employer/js/dashboard.js"?>"></script>

<style>
 .highcharts-figure,
.highcharts-data-table table {
  min-width: 800px;
  max-width: 1000px;
  margin: 1em auto;
}

#container {
  height: 400px;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #ebebeb;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}

.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}

.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
  padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}

.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
.highcharts-title{
    font-family: Roboto;
}
</style>
<section class="employer-navbar-2-1">
  <div class="container">
    <div class="category-nav">
      <p>Danh Mục</p>
      <em class="mdi mdi-chevron-down"></em> </div>
    <div class="main-wrap">
    <div class="left-wrap">
                        <ul class="list-menu">
                            <li class="active"> <a href="<?= _WEB_ROOT.'/employer/dashboard' ?>" title="Dashboard">Dashboard</a> </li>
                            <li> <a href="<?= _WEB_ROOT.'/employer/hrcentral/posting' ?>" title="Quản Lý Đăng Tuyển">Quản Lý Đăng Tuyển</a> </li>
                            <li class=""> <a href="<?= _WEB_ROOT.'/employer/hrcentral/manageresume' ?>" class="active" title="Quản Lý  Ứng Viên">Quản Lý  Ứng Viên</a> </li>
                           
                           
                            <li>
                                    
          <a href="<?= _WEB_ROOT.'/employer/hrcentral/accounts/edit_employer"'?>" title=" Tài Khoản"> Tài Khoản</a>
                            </li>
                   
                        </ul>
                    </div>
      <div class="right-wrap">
        <ul class="list-menu">
          <li> <a href="https://careerbuilder.vn/vi/tim-ung-vien.html"> <em class="material-icons">find_in_page</em> Tìm Hồ Sơ </a> </li>
          <li> <a class="but-createjob" href="https://careerbuilder.vn/vi/employers/postjobs"> <em class="material-icons">assignment_ind</em> Đăng Tuyển Dụng </a> </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="employer-dasboard cb-section bg-manage">
            <div class="container">
                <div class="main-dasboard-top">
                    <div class="row">
                    

                        <div class="col-sm-6 col-xl-12">
                            <div class="box-dasboard-top">
                                <div class="head">
                                    <h2 class="title-dashboard">Quản Lý Đăng Tuyển</h2>
                                </div>
                                <div class="body">
                                    <ul class="list-post-management">
                                        <li>
                                            <a href="https://careerbuilder.vn/vi/employers/hrcentral/posting/user_id/lop7cttnq.1667207375">
                                        <span class="number green">0</span>
                                        <span class="title">Việc làm đang đăng</span>
                                    </a>
                                        </li>
                                        <li>
                                            <a href="https://careerbuilder.vn/vi/employers/hrcentral/waitposting/user_id/lop7cttnq.1667207375">
                                        <span class="number blue">6</span>
                                        <span class="title">Việc làm chờ đăng</span>
                                    </a>
                                        </li>
                                        <li>
                                            <a href="https://careerbuilder.vn/vi/employers/hrcentral/unposting/user_id/lop7cttnq.1667207375">
                                        <span class="number ">0</span>
                                        <span class="title">Việc làm tạm dừng đăng</span>
                                    </a>
                                        </li>
                                        <li>
                                            <a href="https://careerbuilder.vn/vi/employers/hrcentral/expireposting/user_id/lop7cttnq.1667207375">
                                        <span class="number ">0</span>
                                        <span class="title">Việc làm hết hạn</span>
                                    </a>
                                        </li>
                                        <li>
                                            <a href="https://careerbuilder.vn/vi/employers/hrcentral/manageresume/followers">
                                        <span class="number ">0</span>
                                        <span class="title">Followers</span>
                                    </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <!-- <div class="main-dasboard-bottom">
                    <div class="row">
             
                        <div class="col-lg-6">
                            <div class="box-dasboard-bottom topresume-list">
                                <div class="topresume-list-head">
                                    Top
                                    <span class="swiper-pagination" style="position: inherit;"></span> hồ sơ mới
                                    <a href="">
                                
                            </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="main-dasboard-middle">
                    <div class="row">
                        <div class="col-lg-12">
           <div style="
    height: 550px;
"class="box-dasboard-middle">
                                <div class="head">
                                    <h3 class="title">Biểu Đồ Tuyển Dụng</h3>
                                    <div class="toollips"><em class="material-icons">infomation</em>
                                        <div class="toolip">
                                            <p>Thông kê chỉ số tuyển dụng trong vòng 1 tháng gần nhất.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="body">
                                    <div class="form-wrap">
                                        <!-- <div class="form-group form-date">
                                            <input class="dates_range" id="date_mychart1" readonly value="22/10/2022 - 22/11/2022">
                                        </div>
                                        <div class="form-group form-submit">
                                            <button class="btn-gradient btn-submit" id="btn_chart1" type="button" onclick="actChart1(this);">Áp dụng</button>
                                        </div> -->
                                    </div>
                                    <div class="chart">
                                    <figure class="highcharts-figure">
                                    <div id="container"></div>
                                    
                                    </figure>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="
    height: 550px;
"class="col-lg-6">
                            <!-- <div class="box-dasboard-middle">
                                <div class="head">
                                    <h3 class="title">Biểu Đồ Ứng Viên</h3>
                                    <div class="toollips"><em class="material-icons">infomation</em>
                                        <div class="toolip">
                                            <p>Thống kê số hồ sơ ứng tuyển nhận được theo ngày.</p>
                                        </div>
                                    </div>
                                </div>
                                <div style="height:500px;"class="body">
                                    <div class="form-wrap">
                                        <div class="form-group form-date">
                                            <input class="dates_range" id="date_mychart2" readonly value="22/10/2022 - 22/11/2022">
                                        </div>
                                        <div class="form-group form-submit">
                                            <button class="btn-gradient btn-submit" id="btn_chart2" type="button" onclick="actChart2(this);">Áp dụng</button>
                                        </div>
                                    </div>
                                    <div class="chart">
                                  
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- <div class="col-lg-6">
                            <div class="box-dasboard-middle">
                                <div class="head">
                                    <h3 class="title">BIỂU ĐỒ TUYỂN DỤNG & ỨNG TUYỂN</h3>
                                    <div class="toollips"><em class="material-icons">infomation</em>
                                        <div class="toolip">
                                            <p>Thống kê chỉ số tương quan giữa nhu cầu tuyển dụng và lượt hồ sơ ứng tuyển.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="body">
                                    <div class="form-wrap">
                                        <div class="form-group form-date">
                                            <input class="dates_range" id="date_mychart3" readonly value="22/10/2022 - 22/11/2022">
                                        </div>
                                        <div class="form-group form-submit">
                                            <button class="btn-gradient btn-submit" id="btn_chart3" type="button" onclick="actChart3(this);">Áp dụng</button>
                                        </div>
                                    </div>
                                    <div class="chart">
                                        <canvas id="myChart3"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-6">
                            <div class="box-dasboard-middle">
                                <div class="head">
                                    <h3 class="title">BIỂU ĐỒ TUYỂN DỤNG THEO CẤP BẬC</h3>
                                    <div class="toollips"><em class="material-icons">infomation</em>
                                        <div class="toolip">
                                            <p>Thống kê chỉ số hồ sơ ứng tuyển theo cấp bậc</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="body">
                                    <div class="form-wrap">
                                        <div class="form-group form-date">
                                            <input class="dates_range" id="date_mychart4" readonly value="22/10/2022 - 22/11/2022">
                                        </div>
                                        <div class="form-group form-submit">
                                            <button class="btn-gradient btn-submit" id="btn_chart4" type="button" onclick="actChart4(this);">Áp dụng</button>
                                        </div>
                                    </div>
                                    <div class="chart">
                                        <canvas id="myChart4"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

            </div>
</section>