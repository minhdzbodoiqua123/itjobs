

<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/dashboard.css" ?>">
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/global/css/multi-select-dropdown.css" ?>">

<script defer   src="<?= _WEB_ROOT . "/app/public/assets/clients/js/dashboard.js" ?>"></script>
<style>
   html{
   scroll-behavior: smooth;
   }
   a{
   cursor: pointer;
   }
   .pristine-error {
   color:red;
   margin-left:15px;
   font-size: 14px;
   }
   .grid{
   display: grid;
   }
   .grid-cols-2{
   grid-template-columns: repeat(2, minmax(0, 1fr));
   }
   .flex{
   display: flex;
   }
   .p-3{
   padding: 12px;
   }
   .border_orange{
   border-bottom: 1px solid orange;
   }
   .border_orange_top{
   border-top: 1px solid orange;
   }
   .file-input__input {
   width: 0.1px;
   height: 0.1px;
   opacity: 0;
   overflow: hidden;
   position: absolute;
   z-index: -1;
   }
   .file-input{
   text-align: center;
   }
   .file-input__label {
   min-width: 150px;
   cursor: pointer;
   display: inline-flex;
   justify-content: center;
   align-items: center;
   border-radius: 4px;
   font-size: 14px;
   font-weight: 600;
   color: #4245A8;
   font-size: 14px;
   padding: 6px 12px;
   border: 2px dotted #4245A8;
   }
   .file-input__label:hover {
   background-color: rgba(66, 69, 168, 0.25);
   }
   .file-input__label svg {
   height: 16px;
   margin-right: 4px;
   }
   .cv-template-15 .iavatar {
   position: relative;
   width: 154px;
   height: 154px;
   margin: 0 auto;
   background-color: #fff;
   border-radius: 145px;
   -webkit-box-radius: 145px;
   -moz-box-radius: 145px;
   box-shadow: 0 0 10px 0 rgb(0 0 0 / 20%);
   -webkit-box-shadow: 0 0 10px 0 rgb(0 0 0 / 20%);
   -moz-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
   }
   .cv-template-15 h2 {
   padding-top: 15px;
   }
   .cv-template-15 h4 {
   margin-bottom: 20px;
   }
   .cv-template-15 .main-contact i.fa {
   padding: 4px 10px 0 0;
   }
   .cv-template-15 .main-contact li{
   padding-bottom:5px;
   }
   .cv-template-15 .top {
   width: 100%;
   margin-top: 30px;
   background-position: center center;
   background-repeat: no-repeat;
   }  
   .cv-template-15 .top {
   background-image: url(https://static.careerbuilder.vn/themes/cvhaynew/images/template-15-yellow-top.png);
   }
   .cv-template-15 .iavatar img {
   position: absolute;
   left: 9px;
   top: 9px;
   width: 135px;
   height: 135px;
   border-radius: 135px;
   -webkit-box-radius: 135px;
   -moz-box-radius: 135px;
   }
   .head-modal .icon {
   -webkit-box-pack: center;
   -ms-flex-pack: center;
   -webkit-box-align: center;
   -ms-flex-align: center;
   -webkit-box-shadow: 0 0 10px 0 rgb(0 0 0 / 10%);
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   align-items: center;
   justify-content: center;
   width: 70px;
   min-width: 70px;
   height: 70px;
   overflow: hidden;
   border-radius: 5px;
   background: #ffffff;
   box-shadow: 0 0 10px 0 rgb(0 0 0 / 10%);
   }
   .head-modal {
   -webkit-box-align: center;
   -ms-flex-align: center;
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   align-items: center;
   padding: 10px 20px;
   padding-right: 30px;
   background: #f3f3f3;
   }
   .head-modal .title {
   padding-left: 15px;
   }
   .head-modal .icon em {
   color: #2f4ba0;
   font-size: 44px;
   }
   .swal2-actions{
   gap:10px;
   }
   .swal2-cancel{
   }
   .btn-success {
   color: #fff;
   background-color: #28a745;
   border-color: #28a745;
   padding: 0.5rem 0.75rem;
   font-weight: normal;
   text-align: center;
   white-space: nowrap;
   vertical-align: middle;
   font-size: 1rem;
   line-height: 1.25;
   border-radius: 0.25rem;
   transition: all 0.15s ease-in-out;
   }
   .btn-danger {
   color: #fff;
   background-color: #dc3545;
   border-color: #dc3545;
   padding: 0.5rem 0.75rem;
   font-weight: normal;
   text-align: center;
   white-space: nowrap;
   vertical-align: middle;
   font-size: 1rem;
   line-height: 1.25;
   border-radius: 0.25rem;
   transition: all 0.15s ease-in-out;
   }
   .text-edt .title {
   font-weight: bold;
   margin-bottom: 5px;
   }
   .dbl-line{
   padding-bottom: 5px;
   }
   .widget-2 .widget-body .progress-bar-status.incomplete .progress-bar .progress-row .line.active {
    background: #00b2a3;
   } 
   .widget-2 .widget-body .progress-bar-status.incomplete .progress-bar .progress-row .line:last-child .success:after{
    z-index: 11;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 22px;
    height: 22px;
    transform: translate(-50%, -50%);
    border: 3px solid #ffffff;
    border-radius: 50%;
    background: #00b2a3;
    content: "";
   }
   .widget-2 .widget-body .progress-bar-status .progress-bar .progress-row .line:last-child .nosuccess:after {
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    z-index: 11;
    position: absolute;
    top: 50%;
    left: 93%;
    width: 22px;
    height: 22px;
    transform: translate(-50%, -50%);
    border: 3px solid #ffffff;
    border-radius: 50%;
    background: #ebeff4;
    content: "";
}
.widget-2 .widget-body .progress-bar-status .progress-bar .progress-row .line:last-child .nosuccess:before {
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    z-index: 10;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 24px;
    height: 24px;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    /* background: green; */
    content: "";
}
#popup_message {
    background: url(https://static.careerbuilder.vn/themes/careerbuilder/img/icon-confirm.png) top center no-repeat;
    padding-top: 120px;
}
#popup_ok {
    background: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#2f4ba0), to(#2f4ba0));
    background: -o-linear-gradient(left, #2f4ba0, #2f4ba0, #2f4ba0);
    background: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
    background-size: 200% 100%;
    color: #fff;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;

}
#popup_cancel {
    padding: 5px 10px;
    border-radius: 5px;
    -webkit-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
    border: 0;
    font-size: 14.5px;
    text-decoration: none;
    text-transform: uppercase;
    margin-bottom: 10px;
    border: none;
}
#popup_panel {
    text-align: center;
    margin: 1em 0em 0em 1em;
}
#popup_panel {
    margin-top: 30px;
}   
.box-not-share-location {
    background: #fceceb;
    border-left: 4px solid #de4637;
    border-radius: 5px;
    color: #de4637;
    display: none;
    font-size: 15px;
    margin-bottom: 16px;
    padding: 14px 20px;
    transition: .3s;
}
</style>



    <main>

     
     
        <div class="page-content d-flex align-items-stretch">
            <div class="default-sidebar sticky">
                <nav class="side-navbar">
                    <div class="head-nav">
                        <div class="my-cb-center">
                            <h2>My CareerBuilder Center</h2>
                        </div>
                        <ul class="list-unstyled">
                  <li> <a class="active"href="<?= _WEB_ROOT . '/jobseekers/dashboard' ?>" title="Qu???n l?? h??? s??"> <em class="material-icons">color_lens</em><span>Qu???n l?? h??? s??</span></a></li>
                  <li > <a href="<?= _WEB_ROOT . '/jobseekers/my_profile' ?>"> <em class="material-icons">person</em><span>H??? s?? c???a t??i</span></a></li>
                
                
                  <li>
                     <a class="collapse" ><em class="material-icons">edit</em><span>Vi???c l??m c???a t??i</span></a>
                     <ul class="list-unstyled collapse">
                     <li><a href="<?= _WEB_ROOT.'/jobseekers/Mykiemviec/jobsaved' ?>">Vi???c l??m ???? l??u</a></li>
                                    <li><a href="<?= _WEB_ROOT.'/jobseekers/Mykiemviec/jobapplied' ?>">Vi???c l??m ???? n???p</a></li>
                     </ul>
                  </li>
<!--                
                  <li>
                     <a class="collapse " href="javascript:;"><em class="material-icons">remove_red_eye</em><span>Nh?? tuy???n d???ng c???a t??i</span></a>
                     <ul class="list-unstyled collapse">
                        <li> <a href="">Nh?? tuy???n d???ng xem h??? s?? c???a t??i</a></li>
                        <li> <a href="">Following</a></li>
                        <li> <a href="">Nh?? tuy???n d???ng ???????c c??i ?????t h???n ch??? xem h??? s?? c???a t??i</a></li>
                        <li> <a href="">Ph???n h???i t??? nh?? tuy???n d???ng</a></li>
                     </ul>
                  </li> -->
               
                  <li>
                     <a class="" href="<?= _WEB_ROOT.'/jobseekers/myaccount' ?>"><em class="material-icons">settings</em><span>C??i ?????t</span></a>
                     <ul class="list-unstyled collapse">
                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/member/myaccount" title="T??i Kho???n">T??i Kho???n</a></li>
                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/member/emailmanagement" title="C??i ?????t Th??ng B??o">C??i ?????t Th??ng B??o</a></li>
                     </ul>
                  </li>
                  <li> <a href="http://localhost//itjobs/account/logout" title="Tho??t"> <em class="material-icons">power_settings_new</em><span>Tho??t</span></a></li>
               </ul>
                    </div>
                    <div class="toggle-nav"><em class="material-icons">menu_open</em></div>
                </nav>
            </div>
            <div class="content-inner">
                
                <div class="container-fluid">
                    <div class="dash-board-wrap">
                        <div class="row mergebox">
                            <div class="col-lg-8">
                                <div class="widget widget-2">
                                    <div class="widget-head">
                                        <div class="cb-title-h3">
                                            <h3></h3>
                                        </div>
                                    </div>
                                    <div class="widget-body">
                                        <div class="row">
                                            <div class="col-lg-4 col-xl-3">
                                                <div class="img-info">
                                                    <div class="figure">
                                                        <div class="image img-result hide">
                                                            <input style="display: none;"   type="file" class="file" id="fileAvatar" name="fileAvatar">
      <img id="img_mem_avatar" src="<?= _WEB_ROOT.'/app/public/assets/clients/images/'.$informationUser["location_image"] ?> " >
                                                        </div>
                                                        <div class="edit-image dropdown"><em class="mdi mdi-image-edit"></em>
                                                            <div class="dropdown-menu">
                                                                <ul>
                                                                    <li class="upload-pro"><a href="javascript:void(0);" > <em class="material-icons">add_photo_alternate</em><span>T???i h??nh ???nh</span></a></li>
                                                                    <li class="view-pro"><a href="javascript:void(0);" > <em class="material-icons">highlight_off</em><span>X??a h??nh ???nh</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mobile-show">
                                                        <div class="cb-name">
                                                            <h2>M???t Ba</h2>
                                                        </div>
                                                        <div class="information">
                                                     
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-xl-9">
                                                <div class="cb-name">
                                                    <h2><?= $informationUser["lastname"]." ". $informationUser["firstname"] ?></h2>
                                                </div>
                                                <div class="information">
                                               
                                                    <ul class="desired">
                             
                                    <?php if (!empty($year_of_experience["yearOfExperience"]) ){ ?>
                                                        <li>
                                                            <em class="material-icons">star</em>
                 <p>S??? n??m kinh nghi???m <?= $year_of_experience["yearOfExperience"] ?> </p>
                                                        </li>
                                   <?php } else { ?>                
                          <p    >Ch??a c?? kinh nghi???m </p>

                                    <?php }?>
                                                     
                                                        <li>
                                        <em class="material-icons">person</em>
                                  <p>C???p b???c mong mu???n: <span>   <?= 
                   !empty($seeker_job_information["position"]) ?$seeker_job_information["position"] : "Ch??a c???p nh???t";
                                         
                                          ?></span></p>
                                                        </li>
                                                        <li>
                                        <em class="material-icons">attach_money</em>
                     <p>M???c l????ng mong mu???n: <span>  <?=  !empty($seeker_job_information["salary_from"]) ? $seeker_job_information["salary_from"]."-".$seeker_job_information["salary_to"] ." VND" : "Ch??a c???p nh???t"; 
                                          
                                                 ?></span></p>
                                                        </li>
                                                        <li style="position: relative;">
                                                            <!-- <em class="mdi mdi-calendar"></em>
                                                            <p id="date_17611557">
                                                                Ng??y c???p nh???t: 07/11/2022
                                                                <a title="C???p nh???t h??? s??" href="javascript:void(0);" class="ac_refesh" rel="17611557">
                            <span class="material-icons refeshdate ">loop</span>
                          </a>
                                                            </p> -->
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
        
                                            <!-- <div class="col-lg-12">
                                                <div class="progress-bar-status incomplete">
                                                    <div class="profile-strength">
                                                        <p>M???c ????? ho??n th??nh: <span style="color: #00b2a3;">Ho??n th??nh</span></p>
                                                    </div>
                                                   
                                                    <div class="progress-bar">
                                                        <div class="progress">
                                                            <progress class="progress-main" max="7" value="0"></progress>
                                                        </div>
                                          <div class="progress-row">
                         <div class="line active"></div>
                         <div class="line active"></div>
                         <div class="line active"></div>
                         <div class="line active"></div>
                         <div class="line active"></div>
                         <div class="line active"></div>
                        <div class="line active">
                          <span class="success"></span>
                        </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div> -->

                                         
                                                <div class="col-lg-12">
                                                <div class="progress-bar-status incomplete">
                                                    <div class="profile-strength">
                                                        <p>M???c ????? ho??n th??nh: <span >Ch??a ho??n th??nh</span></p>
                                                    </div>
                                                    <div class="noti"><em class="mdi mdi-alert-circle-outline"></em>
                                                        <p>Ch??a ho??n th??nh. B???n vui l??ng c???p nh???t v?? ho??n th??nh h??? s??</p>
                                                    </div>
                                                    <div class="progress-bar">
                                                        <div class="progress">
                                                            <progress class="progress-main" max="7" value="0"></progress>
                                                        </div>
                                          <div class="progress-row">
                         <div class="line "></div>
                         <div class="line "></div>
                         <div class="line "></div>
                         <div class="line "></div>
                         <div class="line "></div>
                         <div class="line "></div>
                        <div class="line ">
                          <span class="nosuccess"></span>
                        </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 cvcht-slide">
                                                <div  class="swiper-container">
                                                    <div  class="swiper-wrapper">

                                                    <?php if(!empty($seeker_resume_title["status"]&&$seeker_resume_title["status"])==0) {?>
                                                    <div class="swiper-slide">
                                                            <a href="<?= _WEB_ROOT.'/jobseekers/my_profile' ?>">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <img src="		https://static.careerbuilder.vn/themes/careerbuilder/img/dash-board/i14.png" alt="">
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                    Ti??u ????? h??? s?? *
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                            <?php }?>
                                                        <!-- <div class="swiper-slide glide__slide">
                                                            <a href="http://localhost//itjobs/jobseekers/my_profile">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <img src="https://static.careerbuilder.vn/themes/careerbuilder/img/dash-board/i3.png" alt="">
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                        M???c ti??u ngh??? nghi???p
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div> -->
           <?php if(!empty($informationUser["status"])&&$informationUser["status"]==0) {?>
                                                        
                                                        <div class="swiper-slide glide__slide">
                                                            <a href="http://localhost//itjobs/jobseekers/my_profile">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <img src="https://static.careerbuilder.vn/themes/careerbuilder/img/dash-board/i2.png" alt="">
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                       Th??ng tin c?? nh??n
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <?php }?>

                             <?php  if(!isset($seeker_job_information["status"])){?>              
                                <div class="swiper-slide glide__slide">
                                                            <a href="http://localhost//itjobs/jobseekers/my_profile">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <img src="	https://static.careerbuilder.vn/themes/careerbuilder/img/dash-board/i5.png" alt="">
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                        C??ng vi???c mong mu???n
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                           <?php }?>
              <?php if(!isset($seeker_experience_detail[0]["status"]) ) {?>

             

                    <div class="swiper-slide glide__slide">
                                                            <a href="http://localhost//itjobs/jobseekers/my_profile">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <img src="https://static.careerbuilder.vn/themes/careerbuilder/img/dash-board/i4.png" alt="">
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                        Kinh nghi???m l??m vi???c
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
               
                       
                   <?php }?>
                                                       
        <?php if(!isset($seeker_education_detail[0]["status"])) {?>
                                                        <div class="swiper-slide">
                                                            <a href="http://localhost//itjobs/jobseekers/my_profile">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <img src="https://static.careerbuilder.vn/themes/careerbuilder/img/dash-board/i7.png" alt="">
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                        H???c v???n
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                        <?php }?>
                                                   

                                                 

                                                   

                                                        <!-- <div class="swiper-slide">
                                                            <a href="http://localhost//itjobs/jobseekers/my_profile">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <img src="	https://static.careerbuilder.vn/themes/careerbuilder/img/dash-board/i8.png" alt="">
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                        Ng?????i tham kh???o
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div> -->
                                                    </div>
                                                </div>
                              
              
                                                <div class="swiper-next">
                                                    <span class="lnr lnr-chevron-right next "></span>
                                                </div>
                                                <div class="swiper-prev">
                                                    <span class="lnr lnr-chevron-left prev"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 function-bottom">
                                                <div style="displaY:flex;justify-content: center;"class="button-list">
                                                    <div class="item">
                                                        <!-- <a title="C???p nh???t h??? s??" href="javascript:void(0);" class="ac_refesh" rel="17611557">
                        <span class="mdi mdi-rotate-3d-variant"></span>
                        C???p nh???t h??? s??
                      </a> -->
                                                    </div>
                                                    <div class="item">
                         <a id="btn_view_cbprofile" data-bs-toggle="modal"data-bs-target="#subCV" href="javascript:void(0);">
                        <span class="mdi mdi-eye"></span>
                        Xem h??? s??
                      </a>
                                                    </div>
                                                    <!-- <div class="item">
                                                        <a href="javascript:void(0);" onclick="downloadCvProfile(17611557)">
                        <span class="mdi mdi-download"></span>
                        T???i h??? s??
                      </a>
                                                    </div> -->
                                                </div>
                                                <!-- <div class="edit-profile">
                                                    <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/changetemplate">Ch???nh m???u h??? s??</a>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4">
                                <div class="widget-b searchable-cv-widget">
                                    <h4>Cho ph??p t??m ki???m Profile CareerBuilder
                                        <div class="tips p1" data-type="1">
                                            <div class="icon">
                                                <em class="mdi mdi-lightbulb"></em>
                                            </div>
                                            <p>Tips</p>
                                        </div>
                                    </h4>
                                    <div class="switch-status group_searchable" id="cv_searchable_17611557" data-id="17611557" data-complete="0">
                                        <a href="javascript:void(0);" data-type="2" class="lock  active ">
                <em class="mdi mdi-lock"></em>Kh??a
              </a>
                                        <a href="javascript:void(0);" data-type="1" class="public ">
                <em class="mdi mdi-web"></em>C??ng khai
              </a>
                                        <a href="javascript:void(0);" data-type="3" class="flash ">
                <em class="mdi mdi-flash"></em>Kh???n c???p
              </a>
                                    </div>
                                    <p>B???n c?? th??? cho ph??p nh?? tuy???n d???ng t??m ki???m h??? s?? CareerBuilder</p>
                                </div>

                                <!-- <div class="widget-b jobalert-cv-widget">
                                    <h4>Nh???n th??ng b??o vi???c l??m
                                        <div class="tips p2" data-type="2">
                                            <div class="icon">
                                                <em class="mdi mdi-lightbulb"></em>
                                            </div>
                                            <p>Tips</p>
                                        </div>
                                    </h4>
                                    <div class="switch-status group_jobalert_top" id="cv_jobalert_17611557" data-id="17611557" data-complete="0">
                                        <a href="javascript:void(0);" data-type="0" class="inactive  active ">Kh??ng nh???n</a>
                                        <a href="javascript:void(0);" data-type="1" class="actives ">Nh???n</a>
                                    </div>
                                    <p>Nh???n th??ng b??o vi???c l??m ph?? h???p v???i h??? s?? n??y m???i 2 tu???n</p>
                                </div> -->
                            </div> -->
                        </div>

                        <div class="row">
                            <!-- <div class="col-sm-6 col-lg-3">
                                <div class="widget-1 b1">
                                    <div class="widget-head">
                                        <p>0</p>
                                        <p>Nh?? tuy???n d???ng xem h??? s?? c???a t??i</p>
                                    </div>
                                    <div class="widget-body">
                                        <div class="item">
                                            <div class="number">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp" class="x1">
                            0
                        </a>
                                            </div>
                                            <p>
                                                <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp">
                            NTD xem qua h??? s?? CB
                        </a>
                                            </p>
                                        </div>
                                        <div class="item">
                                            <div class="number">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp" class="x2">
                            0
                        </a>
                                            </div>
                                            <div>
                                                <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp">
                            NTD xem qua h??? s?? vi???c l??m kh???n c???p
                        </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-sm-6 col-lg-3">
                                <div class="widget-1 b2">
                                    <div class="widget-head">
                                        <p>0</p>
                                        <p>Nh?? tuy???n d???ng ???????c c??i ?????t h???n ch??? xem h??? s??</p>
                                    </div>
                                    <div class="widget-body">
                                        <div class="item">
                                            <div class="nonum"><a href="https://careerbuilder.vn/vi/jobseekers/blacklist">Xem th??m</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-sm-6 col-lg-6">
                                <div class="widget-1 b3">
                                    <div class="widget-head">
                                        <p><?= !empty($count_job_saved)?$count_job_saved :"" ?></p>
                                        <p>Vi???c l??m ???? l??u</p>
                                    </div>
                                    <div class="widget-body">
                                        <div class="item">
                                            <div class="nonum"><a href="<?= _WEB_ROOT.'/jobseekers/Mykiemviec/jobsaved' ?>">Xem th??m</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="widget-1 b4">
                                    <div class="widget-head">
        <p><?= !empty($count_job_posted) ?  $count_job_posted:""?></p>
                                        <p>Vi???c l??m ???? n???p</p>
                                    </div>
                                    <div class="widget-body">
                                        <div class="item">
                                            <div class="number">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobapplied" class="x3">
                            0
                        </a>
                                            </div>
                                            <div><a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobapplied">N???p ??? tr???ng th??i b??nh th?????ng</a></div>
                                        </div>
                                        <div class="item">
                                            <div class="number">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobapplied" class="x4">
                            0
                        </a>
                                            </div>
                                            <div><a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobapplied">N???p ??? tr???ng th??i T??m vi???c kh???n c???p</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="widget widget-4 attached-resume">
                                    <div class="widget-head">
                                        <div class="cb-title-h3">
                                            <h3>H??? s?? ????nh k??m</h3>
                                        </div>
                                        <p>Ngo??i h??? s?? CareerBuilder, b???n c?? th??? t???o h??? s?? ????nh k??m ????? ???ng tuy???n v?? t??m ki???m b???i nh?? tuy???n d???ng</p>
                                    </div>
                                    <div class="widget-body">
                                    <?php foreach ($data_resume as $item): ?>
                                        <div class="attached-item">
                <div class="row">
                  <div class="col-12">
                    <div class="head-title">
                      <div class="row">
                        <div class="col-lg-5">
                          <div class="title">
                            <h4 id="titleresume_17708653"><?= $item["resume_title"] ?></h4>
                            <div class="status success">
                              <p>Ho??n T???t</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-7">
                        <div class="top-action">
                            <div class="switch-box jobalert-cv-widget">
                              <label for="cv_jobalert_17872871">
                   
                             
                              </label>
                            </div>
                            <div class="action">
                              <ul>
                                <li class="edit">
                                                                                                                                                                                                            <a href="<?= _WEB_ROOT.'/jobseekers/myattach/edit_myattach'.'/'.$item['id']?>">Ch???nh s???a</a>
                                </li>
                                <li class="delete">
                                  <a href="javascript:void(0);" onclick="deleteResume('17872871','bank end', '','2'); return false;">X??a</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-5">
                    <div class="figure">
                      <div class="image">
                        <img src="https://static.careerbuilder.vn/themes/kiemviecv32/images/icons/ic-resume.png" alt="front end">
                      </div>
                      <div class="figcaption">
                        <div class="time">
                          <p>Ng??y t???o</p>
                          <time id="date_17708653"><?= formatDate($item["created_date"])?></time>
                      
                        </div>
                        <!-- <div class="view-number">
                          <p>L?????t xem:</p>
                          <span>0</span>
                        </div> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="attached-status-area">
                      <p>Cho ph??p t??m</p>
<div class="switch-status group_searchable" id="cv_searchable_<?=$item['id'] ?>" data-id="<?=$item['id'] ?>" >
                        <a href="javascript:void(0);" data-type="1" class="lock <?= $item["resume_active"]==1 ? "active":"" ?>"><em class="mdi mdi-lock"></em>Kh??a</a>
                        <a href="javascript:void(0);" data-type="2" class="public <?= $item["resume_active"]==2 ? "active":"" ?>"><em class="mdi mdi-web"></em>C??ng khai</a>
                        <a href="javascript:void(0);" data-type="3" class="flash <?= $item["resume_active"]==3 ? "active":"" ?>"><em class="mdi mdi-flash"></em>Kh???n c???p</a>
                      </div>
                      <p class="text-notes text-notes-2 d-block">
                        B???n ??ang <span>v?? hi???u h??a</span> h??? s??. Nh?? tuy???n d???ng s??? kh??ng th???y ???????c h??? s?? n??y c???a b???n.													
                      </p>
                      <p class="text-notes text-notes-1 d-none">
                        H??? s?? c???a b???n ??ang ??? tr???ng th??i <span>C??ng Khai</span>. Nh?? tuy???n d???ng c?? th??? t??m th???y H??? s?? n??y c???a b???n.														
                      </p>
                      <p class="text-notes text-notes-3 d-none">
                        H??? s?? c???a b???n ??ang ??? tr???ng th??i <span>Kh???n c???p</span>. H??? s?? c???a b???n s??? ???????c ??u ti??n t??m th???y b???i c??c nh?? tuy???n d???ng.															
                      </p>
                      <div class="right-action">
                        <ul>
  <li><a href="<?= _WEB_ROOT.'/jobseekers/myattach/viewfile/'.$item['user_account_id'].'/'.$item['id'].'/?file_name='.$item["file_location"] ?>" title="Xem" class="view">
                            <em class="mdi mdi-eye"></em>Xem
                          </a></li>
                   
              <li><a href="javascript:void(0);" onclick="downloadCvAttach(<?= $item['id'] ?>);" title="T???i h??? s??" class="down"><em class="mdi mdi-download"></em>T???i h??? s??</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                                  <?php  endforeach;?>

                                        <div class="box-text">
                                            <h4>B???n c???n t???i ho???c t???o h??? s??</h4>
                                            <p>Vui l??ng th??m m???c ti??u ngh??? nghi???p</p>
                                        </div>



               <div class="button-upload" id="created-resume"><a href="<?= _WEB_ROOT . '/jobseekers/myattach' ?>">T???o  H??? S?? Ngay!</a></div>
                                    </div>
                                </div>
                            </div>
                                <!-- <div class="col-lg-4">
                                    <div class="widget widget-5">
                                        <div class="widget-head">
                                            <div class="cb-title-h3">
                                                <h3>C??i ?????t h???n ch??? nh?? tuy???n d???ng</h3>
                                            </div>
                                        </div>
                                        <div class="widget-body">
                                            <div class="main-form">
                                                <div class="form-group form-text">
                                                    <div class="form-group form-keyword">
                                                        <input type="text" name="company_name_blacklist" placeholder="Nh???p t??n c??ng ty" class="company_name" id="company_name_blacklist">
                                                        <div class="cleartext"><em class="mdi mdi-close-circle"></em></div>
                                                    </div>
                                                    <div class="form-group form-submit"><a class="btn-gradient" href="javascript:void(0);" onclick="addBlackListDashboard();">Th??m</a></div>
                                                </div>
                                            </div>
                                            <div class="top-employers-list">
                                            </div>
                                            <div class="main-form">
                                                <div class="form-group form-text">
                                                    <div class="form-group form-keyword">
                                                        <input type="text" name="company_domain_blacklist" placeholder="Nh???p domain c??ng ty" class="company_domain" id="company_domain_blacklist">
                                                        <div class="cleartext active-clear"><em class="mdi mdi-close-circle"></em></div>
                                                    </div>
                                                    <div class="form-group form-submit"><a class="btn-gradient" href="javascript:void(0);" onclick="addBlackListDomain();">Th??m</a></div>
                                                </div>
                                            </div>
                                            <div class="domain-saved">

                                            </div>
                                            <div class="view-more"><a href="https://careerbuilder.vn/vi/jobseekers/blacklist-domain">Xem th??m <span class="mdi mdi-arrow-right"></span></a></div>

                                            <form action="" method="post" id="frmAddBlacklist"><input type="hidden" value="0" name="jblacklist_id[]" id="company_id_blacklist"></form>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="widget widget-6">
                                    <div class="widget-head">
                                        <div class="cb-title-h3">
                                            <h3>
                                                <p style="font-size:24px;">Xem c??c v??? tr?? g???i ?? v???i CV c???a b???n</p>
                                                <p></p>

                                                <p style="font-size:24px;">???ng tuy???n  v??? tr?? ph?? h???p - Gia t??ng c?? h???i ph???ng v???n ngay!</p>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="apply-job-area">
                                        <div class="row">
                                        <div class="col-lg-4">
                                                <div class="list-job jobs-list-ajax" id="jobs-list">
                                                 
                                                <?php if(!isset($suitable_job)){?>
                                                    <p></p>
                                                    <div class="box-not-share-location" style="display: block;">B???n vui l??ng c???p nh???t th??ng tin ngh??? nghi???p  ????? ch??ng t??i c?? th??? ????? xu???t nh???ng vi???c l??m ph?? h???p </div>

                                              <?php  } else{?>
     <?php foreach ($suitable_job as $item):?>
                                                    <div class="item">
                                                        <!-- <div class="ckb-item">
                                                            <label class="container-ckb">
        <input type="checkbox" checked="checked" name="jobchk[]" value="35BAB1A4">
        <span class="checkmark"></span>
    </label>
                                                        </div> -->
               <div class="job-item" id="job-item-<?= $item["id"]?>">
                                                            <div class="figure">
                                                                <div class="image"><a href="<?= _WEB_ROOT.'/alljob/detail/'.$item["id"] ?>" title="<?= $item["company_name"] ?>"><img  class="lazy-bg" src="<?= _WEB_ROOT.'/app/public/assets/employer/images/'.$item["logo"] ?>" alt="<?= $item["company_name"] ?>"></a></div>
                                                                <div class="figcaption">
                                                                    <div class="title"><a class="job_link" data-id="35BAB1A4" href="<?= _WEB_ROOT.'/alljob/detail/'.$item["id"] ?>" title="<?= $item["job_title"] ?>" ><?= $item["job_title"] ?></a></div>
                                                                    <div class="caption">
                                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-sat-thep-ngoc-bien.35A8A045.html" title="C??ng Ty TNHH S???t Th??p Ng???c Bi???n"><?= $item["company_name"] ?></a>
                                                                        <p class="salary"><em class="fa fa-usd"></em><?= format_price($item["min_salary"]).'-'.format_price($item["max_salary"])?> VND</p>
                                                                        <div data-provinces="<?= $item["provinces"] ?>" class="location">
                                                                            <ul>
                                                                                <li>H??? Ch?? Minh</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  <?php endforeach;?>
                                                   
                                                    
                                               <?php }?>
                                                  
                                                 
                                                   
                                                 
                                                  
                                                   


                                              
                                                </div>
                                                <div class="action">
                                                    <div class="check-area">
                                                        <a href="javascript:void(0)" id="check-uncheck"></a>
                                                    </div>
                                                </div>

                                            
                                            </div>

                                            <div class="col-lg-8" id="job-detail-template">
                                                <div class="detail-loading">
                                                    <div class="job-desc">
                                                        <div class="job-item">
                                                            <div class="figure">
                                                                <div class="image"><a href="#"><img src="" alt=""></a></div>
                                                                <div class="figcaption">
                                                                    <div class="title">
                                                                        <a href="#">
                                                                            <p class="text-line text-line-sm"></p>
                                                                        </a>
                                                                    </div>
                                                                    <div class="caption">
                                                                        <p class="company-name text-line text-line-sm"></p>
                                                                        <p class="salary text-line text-line-sm"></p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>
                                                                                    <p class="text-line text-line-sm"></p>
                                                                                </li>
                                                                                <li>
                                                                                    <p class="text-line text-line-sm"></p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="job-detail">
                                                            <div class="row-detail">
                                                                <h3>
                                                                    js_job_information_job
                                                                </h3>
                                                                <div class="row row-custom">
                                                                    <div class="col-lg-3">
                                                                        <div class="box-info">
                                                                            <h4>
                                                                                ????ng trong v??ng
                                                                            </h4>
                                                                            <p class="text-line text-line-sm"></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="box-info">
                                                                            <h4>
                                                                                Ph????ng th???c l??m vi???c
                                                                            </h4>
                                                                            <p class="text-line text-line-sm"></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="box-info">
                                                                            <h4>
                                                                                job_jobs_detail_job_level
                                                                            </h4>
                                                                            <p class="text-line text-line-sm"></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="box-info">
                                                                            <h4>
                                                                                job_jobs_detail_job_title
                                                                            </h4>
                                                                            <p class="text-line text-line-sm"></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="box-info">
                                                                            <h4>
                                                                                job_jobs_experience
                                                                            </h4>
                                                                            <p class="text-line text-line-sm"></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="box-info">
                                                                            <h4>
                                                                                job_jobs_detail_job_lastdate
                                                                            </h4>
                                                                            <p class="text-line text-line-sm"></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-detail">
                                                                <h3>
                                                                    job_jobs_detail_Welfare
                                                                </h3>
                                                                <ul class="welfare-list">

                                                                    <li>
                                                                        <p class="text-line text-line-sm"></p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-line text-line-sm"></p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-line text-line-sm"></p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="row-detail">
                                                                <h3>job_jobs_detail_work_desc</h3>
                                                                <div class="text-desc">
                                                                    <p class="text-line text-line-sm"></p>
                                                                    <p class="text-line text-line-sm"></p>
                                                                    <p class="text-line text-line-sm"></p>
                                                                </div>
                                                            </div>
                                                            <div class="row-detail">
                                                                <h3>job_jobs_detail_job_skill</h3>
                                                                <div class="text-desc">
                                                                    <p class="text-line text-line-sm"></p>
                                                                    <p class="text-line text-line-sm"></p>
                                                                    <p class="text-line text-line-sm"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <style>
                                                        @-webkit-keyframes placeHolderShimmer {
                                                            0% {
                                                                background-position: -468px 0;
                                                            }
                                                            100% {
                                                                background-position: 468px 0;
                                                            }
                                                        }

                                                        @keyframes placeHolderShimmer {
                                                            0% {
                                                                background-position: -468px 0;
                                                            }
                                                            100% {
                                                                background-position: 468px 0;
                                                            }
                                                        }

                                                        .animated-background,
                                                        .text-line {
                                                            -webkit-animation-duration: 1.25s;
                                                            animation-duration: 1.25s;
                                                            -webkit-animation-fill-mode: forwards;
                                                            animation-fill-mode: forwards;
                                                            -webkit-animation-iteration-count: infinite;
                                                            animation-iteration-count: infinite;
                                                            -webkit-animation-name: placeHolderShimmer;
                                                            animation-name: placeHolderShimmer;
                                                            -webkit-animation-timing-function: linear;
                                                            animation-timing-function: linear;
                                                            background: #dddddd;
                                                            background: -webkit-gradient(linear, right top, left top, from(#f1f1f1), color-stop(#dddddd), to(#f1f1f1));
                                                            ;
                                                            background: linear-gradient(to left, #f1f1f1, #dddddd, #f1f1f1);
                                                            ;
                                                            background-size: 1000px 400px;
                                                            height: 96px;
                                                            position: relative;
                                                        }

                                                        .animated-background {
                                                            width: 100%;
                                                            height: 360px;
                                                        }

                                                        .text-line {
                                                            height: 14px;
                                                            width: 150px;
                                                            margin: 1px 0;
                                                            display: block;
                                                        }

                                                        .text-line-lg {
                                                            height: 30px;
                                                        }

                                                        .text-line-sm {
                                                            height: 20px
                                                        }

                                                        .text-line-xs {
                                                            height: 15px;
                                                        }
                                                    </style>
                                                </div>
                                                <div class="detail-content"></div>

                                                <!-- <div class="follow-area">
                                                    <a href="https://careerbuilder.vn/vi/jobs/recommended" class="left-follow">Xem th??m</a>
                                                    <div class="right-follow">
                                                        <a href="javascript:void(0)" class="btn-apply-all btn-gradient-1">
                    ???ng tuy???n c??c v??? tr?? ???? ch???n&nbsp;<span id="countjob"></span>
                    </a>
                                                        <a href="javascript:void(0)" class="btn-apply-now btn-gradient">
                    ???ng tuy???n ngay
                    </a>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <style>
                        .detail-loading {
                            display: none;
                        }
                    </style>
            


                </div>
            </div>
        </div>

        <div class="create-new-resume" style="display: none">
            <div class="modal-title">
                <h3>T???o h??? s?? m???i </h3>
            </div>
            <div class="modal-body">
                <div class="content">
                    <p>Ngo??i h??? s?? CareerBuilder, b???n c?? th??? t???o h??? s?? ????nh k??m ????? ???ng tuy???n v?? t??m ki???m b???i nh?? tuy???n d???ng</p>
                </div>
                <div class="created">
                    <div class="attach">
                        <a title="H??? s?? ????nh k??m" href="https://careerbuilder.vn/vi/jobseekers/myresume/myattach">
                            <div class="figure">
                                <div class="image"><img src="./img/dash-board/2.png" alt=""></div>
                                <div class="figcaption">
                                    <h4>H??? s?? ????nh k??m</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cv-hay">
                        <a title="H??? s?? chuy??n nghi???p - CVHay" href="https://careerbuilder.vn/cv-hay/tao-cv">
                            <div class="figure">
                                <div class="image"><img src="./img/dash-board/3.png" alt=""></div>
                                <div class="figcaption">
                                    <h4>H??? s?? chuy??n nghi???p - CVHay</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tips-modal tips-modal-1" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>B???n s???n s??ng thay ?????i c??ng vi???c ngay?</h3>
                    <p>B???t tr???ng th??i "t??m vi???c kh???n c???p" ????? gia t??ng 80% c?? h???i ph???ng v???n v???i Nh?? tuy???n d???ng t???i CareerBuilder.</p>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                Khi b???t tr???ng th??i t??m vi???c kh???n c???p h??? s?? c???a b???n s??? hi???n th??? #OpentoNewJobs v???i Nh?? Tuy???n D???ng xem h??? s?? ???ng tuy???n ho???c t???i ng??n h??ng d??? li???u h??? s?? c???a CareerBuilder. Nh?? tuy???n d???ng th?????ng s??? ch??? ?????ng v?? ??u ti??n li??n h??? ???ng vi??n c?? h??? s?? ph?? h???p. B???n
                                c?? th??? t???t tr???ng th??i n??y khi ???? t??m th???y s??? nghi???p m???i ho???c t??nh n??ng s??? t??? ?????ng t???t sau 90 ng??y.

                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tips-modal tips-modal-2" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>T???o th??ng b??o vi???c l??m. Ho??n to??n mi???n ph?? v?? d??? d??ng</h3>
                    <p>???????c c???p nh???t ngay c??c c?? h???i m???i nh???t t??? c??c c??ng ty h??ng ?????u</p>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                T??m ???????c c??ng vi???c b???n y??u th??ch ph?? h???p v???i h??? s??

                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     


        <div class="modal fade " id="subCV" tabindex="-1" >
                     <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h2 class="modal-title"    >Ti??u ????? h??? s??</h2>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <div class="container">
                                 <div class="main-profile main-scroll-success">
                                    <div class="view-template-wrap step-content cv-mode-finish">
                                       <div class="editCVtemplate-wrapper editCVtemplate">
                                          <div id="ZoneShowCVTemplate" class="cv-template-wrapper cv-template-15 fontCVRoboto clrYellow fontCVsize14">
                                             <div class="col-xs-12 subCVpage">
                                                <div class="top" style="text-align: center;">
                                                   <div class="iavatar">
                                                      <img src="<?= _WEB_ROOT.'/app/public/assets/clients/images/'.$informationUser["location_image"] ?>">		
                                                   </div>
                                                </div>
                                                <div class="col-sm-12 col name  border_orange" style="text-align: center; padding-bottom: 8px;">
                                                   <h2><?= $informationUser["lastname"]." ". $informationUser["firstname"] ?></h2>
                                                   <h4><?= !empty($seeker_resume_title["resume_title"]) ? $seeker_resume_title["resume_title"]: ""  ?></h4>
                                                   <div class="col-xs-12 main-contact">
                                                      <ul class="contact">
                                                         <li class="phone"><i class="fa fa-phone"></i><span><?= !empty($informationUser["contact_number"]) ? $informationUser["contact_number"]: ""  ?>  </span></li>
                                                         <li class="mail"><i class="fa fa-envelope"></i><span class="txt"><?= $informationUser["email"] ?></span></li>
                                                         <li class="address2"><i class="fa fa-home"></i><span class="txt"></span></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                                <div class="col-sm-12 col border_orange"style=" padding:8px 0; ">
                                                   <h3>Th??ng tin c?? nh??n</h3>
                                                   <ul class="contact">
                                                      <li class="flex">
                                                         <label>Gi???i t??nh</label>
                                                         <div class="annou">:  <?php 
                                                            if  (isset($informationUser["gender"])){
                                                            echo $informationUser["gender"]==1 ? "Nam" : $informationUser["gender"]==2 ? "N???": "Kh??c";  
                                                            }   
                                                              
                                                              ?> </div>
                                                      </li>
                                                      <li class="flex">
                                                         <label>Ng??y sinh</label>
                                                         <div class="annou">:<?= !empty($informationUser["date_of_birth"]) ?formatDate($informationUser["date_of_birth"]): ""?> </div>
                                                      </li>
                                                      <li class="flex">
                                                         <label>T??nh tr???ng h??n nh??n</label>
                                                         <div class="annou">:  <?= $informationUser["marital_status"]==1 ? "?????c th??n"  :"???? k???t h??n" ?></div>
                                                      </li>
                                                      <li class="flex">
                                                         <label>Qu???c t???ch</label>
                                                         <div class="annou">: Ng?????i Vi???t Nam</div>
                                                         </li class="flex">
                                                      <li class="flex">
                                                         <label>Qu???c gia</label>
                                                         <div class="annou">: Vi???t Nam</div>
                                                      </li>
                                                   </ul>
                                                </div>
                                            
                                                <div class="col-md-12 col border_orange" style=" padding:8px 0; ">
                                                   <h3><span>C??ng Vi???c Mong Mu???n</span></h3>
                                                   <div class="expected-job">
                                                      <ul class="contact">
                                                         <li><label>C???p b???c </label> :<?= !empty($seeker_job_information["position"]) ? $seeker_job_information["position"] : "" ?></li>
                                                         <li class="dbl-line"><label>M???c l????ng</label><span>:&nbsp;</span><span class="txt">				  				
                                                            <?=  !empty($seeker_job_information["salary_from"])? $seeker_job_information["salary_from"].'-'.$seeker_job_information["salary_to"]." VND" : "" ?>
                                                            </span>
                                                         </li>
                                                         <li class="dbl-line"><label>H??nh th???c c??ng vi???c</label><span>:&nbsp;</span><span class="txt">   
                                                            <?php if(!empty($seeker_type)){
                                                               $valueStr = '';
                                                                foreach ($seeker_type as $value) {
                                                               $valueStr .= " $value[job_type] " . ',';
                                                                }
                                                               $valueStr = rtrim($valueStr, ',');
                                                                echo $valueStr;
                                                               }  
                                                               
                                                               
                                                               ?>
                                                            </span>
                                                         </li>
                                                         <li class="dbl-line">
                                                            <label>Ng??nh ngh???</label><span>:&nbsp;</span><span class="txt">
                                                            <?php      
                                                               if(!empty($informationProfession)){
                                                                $valueStr = '';
                                                                foreach ($informationProfession as $value) {
                                                               $valueStr .= " $value[profession_name] " . ',';
                                                                }
                                                               $valueStr = rtrim($valueStr, ',');
                                                                echo $valueStr;
                                                               }  
                                                               
                                                               ?></span>
                                                         </li>
                                                         <li class="dbl-line"><label>N??i l??m vi???c</label><span>:&nbsp;</span><span class="txt workplace"> 
                                                            </span>
                                                         </li>
                                                      </ul>
                                                   </div>
                                                </div>
                                                <div class="col-sm-12 col" style=" padding:8px 0; ">
                                                   <h3>Kinh Nghi???m L??m Vi???c</h3>
                                                   <div class="content_fck yearofexp">
                                                      <p>S??? n??m kinh nghi???m:
                                                         <?= !empty($year_of_experience["yearOfExperience"]) ? $year_of_experience["yearOfExperience"]  : "Ch??a c?? kinh nghi???m"?> 
                                                      </p>
                                                      <p>C???p b???c hi???n t???i:<?= !empty($year_of_experience["position"]) ? $year_of_experience["position"]  : "Ch??a c???p nh???t" ?></p>
                                                   </div>
                                                   <?php foreach ($seeker_experience_detail as $item): ?>
                                                   <div class="exp text-edt">
                                                      <div class="title">
                                                         <?= $item["experCurrent"]==0 ? $item["start_job"].'-'.$item["end_job"] : $item["start_job"].'-'."Hi???n t???i" ?>:
                                                         <?= $item["rexp_title"]. " - ".$item["rexp_company"]." - ". $item["job_type_id"]?> 
                                                      </div>
                                                      <div class="content_fck">
                                                         <p><?= $item["rexp_workdesc"]
                                                            ?></p>
                                                      </div>
                                                   </div>
                                                   <?php   endforeach;?>
                                                </div>
                                                <div class="col-sm-12 col border_orange_top"style=" padding:8px 0;">
                                                   <h3>H???c V???n</h3>
                     <div class="text-edt degree-name">B???ng c???p cao nh???t:
                         <?php foreach ($data_degree as $item): 
                         if(!empty($seeker_highest_degree["degree_id"])){
                           if($item["id"]==$seeker_highest_degree["degree_id"]){
                              echo $item["degree_name"];
                           }
                         }
                        
                    endforeach;?>
                       </div>
                           <?php if(!empty($seeker_education_detail)) { ?>
                          <?php foreach ($seeker_education_detail as $item): ?>
                        
                           <div class="exp text-edt">
                          <div class="title"><?= "T???t nghi???p ".$item["start_date"].'/'.$item["end_date"].':'  ?>  
        <?= $item["degree_id"]==1?"Kh??ng y??u c???u b???ng c???p" : $item["degree_name"] ?>
                        <?= '- '.$item["redu_name"] ?>
                        </div>
                                                      <div class="content_fck">
                                                         <p><?= $item["detail_desc"] ?></p>
                                                      </div>
                                                   </div>
                          <?php  endforeach; ?>

                      <?php    }?>
                                                  
                                                </div>
                                                <!-- <div style=" padding:8px 0;" class="col-sm-12 col border_orange_top ">
                                                   <h3>Th??ng Tin Tham Kh???o</h3>
                                                   <div class="text-edt">
                                                      <div class="title">nguyen nhat minh</div>
                                                      <div class="content_fck">
                                                         <p>leader, fpt</p>
                                                         <p>Phone: 0839704567</p>
                                                         <p>Email: aolang69@gmail.com</p>
                                                      </div>
                                                   </div>
                                                </div> -->
                                                <div class="col-xs-12 ">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
                        
    </main>

 
    <script>
        new Glider(document.querySelector('.swiper-wrapper'), {
  slidesToShow: 1,
  dots: '#dots',
  duration: 1.5,
  draggable: true,
  arrows: {
    prev: '.prev',
    next: '.next'
  }
});

</script>
    



