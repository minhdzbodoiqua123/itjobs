<?php
class Dashboard extends Controller
{
    public function index()
    {

        if (!Auth_employer::logged_in()) {
            $this->redirect("employer/account/login");
        }


        $this->data["sub_content"][""] = "";

        $this->data["content"] = "employer/dashboard";
        $this->render('layouts/employer_layout', $this->data);
    }

    public function RECRUITMENT_CHART()
    {
        $employer_id=$_SESSION["employer"]["id"];
        $conn=$this->model("Job_postModel");
        $result=$conn->query("SELECT DATE_FORMAT(apply_date, '%e-%m') as ngay_apply,count(resume_id) as so_luong_ho_so,job_id,resume_id,job_title FROM `job_post_activity` join job_post on job_id=job_post.id  where job_post.posted_by_id=$employer_id and date(apply_date)>= CURDATE() - INTERVAL 30 DAY group by DATE_FORMAT(apply_date, '%e-%m'),job_id
        ")->fetchAll(PDO::FETCH_ASSOC);
 $max_date=30;
$arrDay=[];

 

        $arr=[];
        foreach ($result as $each) {
            $job_id=$each["job_id"];
            if(empty($arr[$job_id])) {
                $arr[$job_id] =[
                    "name"=>$each["job_title"],
                    "y"=>(int)$each["so_luong_ho_so"],
                    "drilldown"=>(int)$each["job_id"]
                ];
            }
            else{
                $arr[$job_id]["y"]+=$each["so_luong_ho_so"];
            }
          
        }
        $arr2=[];
        //Xem hôm này là ngày bao nhiêu
        $today=date('d');
        //Đếm tháng này có bao nhiêu ngày
        $last_date=date('t');
        $this_month=date('m');

        if($today <  $max_date){

        
        //Lấy ra ngày còn thiếu từ tháng trước
        $get_day_last_month= $max_date-$today;
        //Lấy ra tháng trước là tháng bao nhiêu

        $last_month=date('m',strtotime("-1 month"));
        $last_month_date=date('Y-m-d',strtotime("-1 month"));
        //Lấy ra số ngày max của tháng đấy
        $max_day_last_month=(new DateTime($last_month_date))->format('t');
        //Ngày bắt đầu từ 30 ngày trước
        $start_day_last_month=$max_day_last_month-$get_day_last_month;
            for ($i=$start_day_last_month; $i<= $max_day_last_month ; $i++) { 
        $key=$i.'-'.$last_month;
        $arrDay[$key]=0;
        }
        $start_date_this_month=1;
        }
        else{
        $start_date_this_month=$today-$max_date;

        }

        foreach ($arr as $job_id=> $each) {
            $arr2[$job_id]=[
                "name"=>$each["name"],
                "id"=>$job_id,
            ];
            $arr2[$job_id]["data"]=[];
            for ($i=$start_day_last_month; $i<= $max_day_last_month ; $i++) { 
                $key=$i.'-'.$last_month;
                $arr2[$job_id]['data'][$key]=[
                    $key,
                    0
                ];
                }
                for ($i=$start_date_this_month; $i<= $today ; $i++) { 
                    $key=$i.'-'.$this_month;
                    $arr2[$job_id]['data'][$key]=[
                        $key,
                        0
                    ];
                 }
                
                 
           
        }

        foreach ($result as $item) {
            $job_id=$item["job_id"];
            $key=$item["ngay_apply"];
            $arr2[$job_id]["data"][$key]=[
                $key,
                (int)$item['so_luong_ho_so']
            ];
        }
        $obj= json_encode([$arr,$arr2]);
        echo $obj;

    }
}
