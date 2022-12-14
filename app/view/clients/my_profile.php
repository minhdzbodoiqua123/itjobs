<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/my_profile.css" ?>">
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/global/css/multi-select-dropdown.css" ?>">
<script defer   src="<?= _WEB_ROOT . "/app/public/assets/clients/js/my_profile.js" ?>"></script>
<script defer src="<?= _WEB_ROOT . "/app/public/assets/clients/js/handleExperienceForm.js" ?>"></script>
<script defer src="<?= _WEB_ROOT . "/app/public/assets/clients/js/handleEducationForm.js" ?>"></script>

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
</style>
<body class="my-profile-page"  >
   <main>
      <div class="page-content d-flex align-items-stretch">
      <div class="default-sidebar sticky">
         <nav class="side-navbar">
            <div class="head-nav">
               <div class="my-cb-center">
                  <h2>My CareerBuilder Center</h2>
               </div>
               <ul class="list-unstyled">
                  <li> <a href="<?= _WEB_ROOT . '/jobseekers/dashboard' ?>" title="Qu???n l?? h??? s??"> <em class="material-icons">color_lens</em><span>Qu???n l?? h??? s??</span></a></li>
                  <li style="display:none"> <a href="<?= _WEB_ROOT . '/jobseekers/my_profile' ?>"> <em class="material-icons">person</em><span>H??? s?? c???a t??i</span></a></li>
                  <li> <a href="" class="active"> <em class="material-icons">person</em><span>H??? s?? c???a t??i</span></a></li>
                
                  <li>
                     <a class="collapse" ><em class="material-icons">edit</em><span>Vi???c l??m c???a t??i</span></a>
                     <ul class="list-unstyled collapse">
                     <li><a href="<?= _WEB_ROOT.'/jobseekers/Mykiemviec/jobsaved' ?>">Vi???c l??m ???? l??u</a></li>
                                    <li><a href="<?= _WEB_ROOT.'/jobseekers/Mykiemviec/jobapplied' ?>">Vi???c l??m ???? n???p</a></li>
                     </ul>
                  </li>
               
                  <li>
                     <!-- <a class="collapse " href="javascript:;"><em class="material-icons">remove_red_eye</em><span>Nh?? tuy???n d???ng c???a t??i</span></a> -->
                     <ul class="list-unstyled collapse">
                        <li> <a href="">Nh?? tuy???n d???ng xem h??? s?? c???a t??i</a></li>
                        <li> <a href="">Following</a></li>
                        <li> <a href="">Nh?? tuy???n d???ng ???????c c??i ?????t h???n ch??? xem h??? s?? c???a t??i</a></li>
                        <li> <a href="">Ph???n h???i t??? nh?? tuy???n d???ng</a></li>
                     </ul>
                  </li>
               
                  <li>
                     <a class="" href="javascript:;"><em class="material-icons">settings</em><span>C??i ?????t</span></a>
                     <ul class="list-unstyled collapse">
                        <li> <a href="" title="T??i Kho???n">T??i Kho???n</a></li>
                        <li> <a href="" title="C??i ?????t Th??ng B??o">C??i ?????t Th??ng B??o</a></li>
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
            <div class="db-my-profile">
               <div class="row">
                  <div class="col-lg-8 col-xl-9 main-widget">
                     <div class="widget widget-2 widget-11" id="widget-11">
                        <div class="widget-head">
                           <div class="cb-title-h3">
                              <h3>ITJOBS Profile</h3>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="row">
                              <div class="col-lg-4 col-xl-3">
                                 <div class="img-info">
                                    <div class="figure">
                                       <div class="image img-result hide"><img id="img_mem_avatar" class="cropped" src="<?= _WEB_ROOT.'/app/public/assets/clients/images/'.$informationUser["location_image"] ?>" ></div>
                                    </div>
                                    <div class="mobile-show">
                                       <div class="cb-name">
                                          <h2>M???t Ba</h2>
                                       </div>
                                       <div class="information">
                                          <div class="assistant" id="titleresume_17611557">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="action-profile">
                                    <div class="file-input">
                                       <!-- upload avatar -->
                                       <form action="my_profile/upload_Avatar_User" method="post"  enctype="multipart/form-data">
                                          <input
                                             type="file"
                                             name="file-input"
                                             id="file-input"
                                             class="file-input__input"
                                             />
                                          <label class="file-input__label" for="file-input">
                                             <svg
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fas"
                                                data-icon="upload"
                                                class="svg-inline--fa fa-upload fa-w-16"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"
                                                >
                                                <path
                                                   fill="currentColor"
                                                   d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"
                                                   ></path>
                                             </svg>
                                             <span>Upload file</span>
                                          </label
                                             >
                                          <button type="submit"style="margin-top:50px;padding:6px 14px;width: 152px; ">L??u thay ?????i</button>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-8 col-xl-9">
                                 <div class="cb-name">
                                    <h2 id="section_name"><?= $informationUser["lastname"]." ". $informationUser["firstname"] ?></h2>
                                 </div>
                                 <div class="information">
                                    <div class="assistant"><?= !empty($seeker_resume_title["resume_title"]) ? $seeker_resume_title["resume_title"]: "Ch??a c???p nh???p"  ?></div>
                                 </div>
                                 <div id="complete_section">
                                    <div class="progress-bar-status incomplete">
                                       <div class="profile-strength">
                                          <p>M???c ????? ho??n th??nh: <span>Ch??a Ho??n T???t</span></p>
                                       </div>
                                       <div class="noti">
                                          <em class="mdi mdi-alert-circle-outline"></em>
                                          <p>Ch??a ho??n th??nh. B???n vui l??ng c???p nh???t v?? ho??n th??nh h??? s??</p>
                                       </div>
                                       <div class="progress-bar">
                                          <div class="progress">
                                             <progress class="progress-main" max="7" value="0"></progress>
                                          </div>
                                          <div class="progress-row">
                                             <div class="line active"></div>
                                             <div class="line "></div>
                                             <div class="line "></div>
                                             <div class="line "></div>
                                             <div class="line "></div>
                                             <div class="line "></div>
                                             <div class="line "><span class="success"></span></div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- <div class="searchable-cv-widget status-area attached-status-area">
                                       <div class="switch-status group_searchable" id="cv_searchable_17611557" data-id="17611557" data-complete="0">
                                          <a data-type="2" class="lock active" style="border-radius: 21px;text-align: center;"><em class="mdi mdi-lock"></em>Kh??a</a>
                                          <a data-type="1" class="public " style="text-decoration:none;border-radius: 21px;text-align: center;"><em class="mdi mdi-web"></em>C??ng khai</a>
                                          <a data-type="3" class="flash " style="text-decoration:none;border-radius: 21px;text-align: center;"><em class="mdi mdi-flash"></em>Kh???n c???p</a>
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
                                    </div> -->
                                    <div class="check-box">
                                       <!-- <div class="form-group form-check-box job-alerts">
                                          <label for="cv_jobalert_17611557">Nh???n th??ng b??o vi???c l??m
                                          <input type="checkbox" name="cv_jobalert_17611557" id="cv_jobalert_17611557" value="17611557" disabled="disabled" onclick="updateCvJobalert(this);">
                                          <span class="slider"></span> </label>
                                       </div> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="widget widget-24" id="t-resume-section">
                        <div class="widget-head">
                           <div class="cb-title-h3">
                              <div class="figure">
                                 <div class="image"><img src="./img/dash-board/i14.png" alt=""></div>
                                 <div class="figcaption">
                                    <h3>Ti??u ????? h??? s?? *</h3>
                                    <?php 
                  if(!empty($seeker_resume_title) && $seeker_resume_title["status"]==1 ){
                                           echo " <div class='status success'>
                                                     <p>Ho??n th??nh</p>
                                                  </div>";
                                       }
                                       else{
                                        echo " <div class='status error'>
                                        <p>Ch??a ho??n th??nh</p>
                                       </div>";
                                       }
                                       ?>
                                 </div>
                              </div>
                              <div class="right-action">
                                 <div class="tips p1"data-bs-toggle="modal" data-bs-target="#tip-t-resume">
                                    <div class="icon">
                                       <em class="mdi mdi-lightbulb"></em>
                                    </div>
                                    <p>Tips</p>
                                 </div>
                                 <div class="link-edit">
                                    <a data-bs-toggle="modal" data-bs-target="#tieudehoso" href="javascript:void(0)"> <em class="material-icons">create</em><span>Ch???nh s???a</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Modal Ti??u ????? h??? s?? *-->
                        <div class="modal fade" id="tieudehoso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h2 class="modal-title"    >Ti??u ????? h??? s??</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    <form method="post" autocomplete="on" action="my_profile/resumeTitle" name="t-resume-form" id="t-resume-form">
                                       <div class="form-group row">
                                          <div class="col-lg-4">
                                             <label for="">Ti??u ????? h??? s??<span>*</span></label>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="input-group">
                                                <input type="text" value="<?= !empty($seeker_resume_title["resume_title"]) ? $seeker_resume_title["resume_title"]:"" ?>" name="resume_title" id="resume_title" class="keyword" maxlength="400" autocomplete="off">
                                             </div>
                                             <div class="form-error"><span class="err_resume_title"></span></div>
                                          </div>
                                       </div>
                                       <div class="form-group form-button">
                                       </div>
                                       <div class="modal-footer">
                                          <button type="submit" class="btn btn-primary">L??u l???i</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <?php if(!empty($seeker_resume_title["resume_title"])){?>
                           <div style="padding-left:20px;" class="content">
                              <p><?= $seeker_resume_title["resume_title"]?></p>
                           </div>
                           <?php } else {?>
                           <div class="no-content">
                              <p>Ti??u ????? h??? s??</p
                                 <a href="javascript:void(0)" data-bs-target="#tieudehoso"></a>
                                 <a data-bs-toggle="modal" data-bs-target="#tieudehoso" href="javascript:void(0)"> <em class="mdi mdi-plus-circle"></em><span>Ch???nh s???a</span></a>
                           </div>
                           <?php }?>
                           <input type="hidden" id="title_hidden_value" value="Nh??n vi??n nh??n s???">
                        </div>
                     </div>
                     <div class="widget widget-13" id="personalinfo-section">
                        <div class="widget-head">
                           <div class="cb-title-h3">
                              <div class="figure">
                                 <div class="image"><img src="./img/dash-board/i2.png" alt=""></div>
                                 <div class="figcaption">
                                    <h3>Th??ng tin c?? nh??n *</h3>
                                    <?php 
                                       if(!empty($informationUser) && $informationUser["status"]==1 ){
                                                echo " <div class='status success'>
                                                     <p>Ho??n th??nh</p>
                                                  </div>";
                                       }
                                       else{
                                        echo " <div class='status error'>
                                        <p>Ch??a ho??n th??nh</p>
                                       </div>";
                                       }
                                                    ?>
                                 </div>
                              </div>
                              <div class="right-action">
                                 <div class="tips p1" onclick="openTipSlide('tip-personalinfo')">
                                    <div class="icon">
                                       <em class="mdi mdi-lightbulb"></em>
                                    </div>
                                    <p>Tips</p>
                                 </div>
                                 <div class="link-edit">
                                    <a class="btn-infoUser" data-bs-toggle="modal" data-bs-target="#thongtincanhan" > <em class="material-icons">create</em>
                                    <span>Ch???nh s???a</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="table">
                              <table>
                                 <tbody>
                                    <tr>
                                       <td>H??? v?? T??n L??t</td>
                                       <td><?= $informationUser["lastname"] ?></td>
                                    </tr>
                                    <tr>
                                       <td>T??n</td>
                                       <td><?= $informationUser["firstname"] ?></td>
                                    </tr>
                                    <tr>
                                       <td>Ng??y sinh</td>
                                       <td><?= !empty($informationUser["date_of_birth"]) ?formatDate($informationUser["date_of_birth"]) : "" ?></td>
                                    </tr>
                                    <tr>
                                       <td>??i???n tho???i</td>
                                       <td><?= !empty($informationUser["contact_phone"]) ? $informationUser["contact_phone"] : "" ?></td>
                                    </tr>
                                    <tr>
                                       <td>Email</td>
                                       <td><?= $informationUser["email"]  ?></td>
                                    </tr>
                                    <tr>
                                       <td>T??nh tr???ng h??n nh??n</td>
                                       <?php $informationUser["marital_status"]==0 ? "?????c th??n"  :"???? k???t h??n" ?>
                                       <td><?php 
                                          if(!empty($informationUser["marital_status"])){
                                              if($informationUser["marital_status"]==1){
                                                echo "?????c th??n";
                                              }
                                              else{
                                                echo "???? k???t h??n";
                                              }
                                          }
                                          ?></td>
                                    </tr>
                                    <tr>
                                       <td>T???nh/ Th??nh ph???</td>
                                       <td  class="provincesUser"></td>
                                    </tr>
                                    <tr>
                                       <td>Qu???n/ Huy???n</td>
                                       <td class="districtsUser"></td>
                                    </tr>
                                    <tr>
                                       <td>?????a ch???</td>
                                       <td class="addressUser"></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="modal fade"  data-bs-backdrop="static" data-bs-keyboard="false" id="thongtincanhan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div style="width:730px;" class="modal-dialog modal-dialog-centered">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h2 class="modal-title"    >Th??ng tin c?? nh??n</h2>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form action="my_profile/UpdateProfile" method="post" id="personalInfoForm" autocomplete="off">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group form-text">
                                             <label>* H??? v?? t??n l??t</label>
                                             <input 
                                                required 
                                                data-pristine-required-message="Kh??ng ???????c ????? tr???ng"   
                                                type="text" value="<?=  $informationUser["lastname"]?>"  name="lastname" id="lastname"  maxlength="30" class="valid">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-text">
                                             <label>* T??n</label>
                                             <input
                                                required 
                                                data-pristine-required-message="Kh??ng ???????c ????? tr???ng"   
                                                type="text" value="<?= $informationUser["firstname"] ?>"  name="firstname" id="firstname" value="Ba" maxlength="30">
                                             <span class="err_firstname" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-radio">
                                             <p style="width:100%;">* Gi???i t??nh</p>
                                             <div class="gender">
                                                <input <?php if($informationUser["gender"]=="1") {echo 'checked';}  ?>  type="radio" id="gender_m" value="1" checked="checked" name="gender">
                                                <label for="gender_m">Nam</label>
                                             </div>
                                             <div class="gender">
                                                <input <?php if($informationUser["gender"]=="2") {echo 'checked';}  ?> type="radio" id="gender_f" value="2" name="gender">
                                                <label for="gender_f">N???</label>
                                             </div>
                                             <div class="gender">
                                                <input <?php if($informationUser["gender"]=="3") {echo 'checked';}  ?> type="radio" id="gender_other" value="3" name="gender">
                                                <label for="gender_other">Kh??c</label>
                                             </div>
                                             <span class="err_gender" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-birthday">
                                             <label for="">* Ng??y sinh</label>
                                             <input 
                                                required 
                                                data-pristine-required-message="Nh???p ng??y th??ng n??m sinh c???a b???n"   
                                                type="text" value="<?=  formatDate($informationUser["date_of_birth"])?>" class="date_month" name="birthday" ">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-text">
                                             <label for="">* S??? ??i???n tho???i</label>
                                             <input 
                                                required 
                                                data-pristine-required-message="Vui l??ng nh???p s??? ??i???n tho???i"   
                                                type="text"  name="mobile" id="mobile" value="<?= !empty($informationUser["contact_phone"])? $informationUser["contact_phone"]: "" ?>" maxlength="20" style="margin-top:5px">
                                             <span class="err_mobile" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-text">
                                             <label for="">* Email</label>
                                             <input type="text"  id="email_member_edit" value="<?= $informationUser["email"] ?>" readonly="readonly" disabled="disabled" style="margin-top:5px">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-select">
                                             <label for="">* T??nh tr???ng h??n nh??n</label>
                                             <select name="slMarritial">
                                                <option <?php 
                                                   if($informationUser["marital_status"]==1)
                                                   {echo 'selected';} 
                                                   
                                                   
                                                   ?> value="1" >?????c th??n</option>
                                                <option <?php if($informationUser["marital_status"]==2){echo 'selected';} ?>  value="2">???? k???t h??n</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-select">
                                             <label for="">* T???nh / Th??nh ph???</label>
                                             <select 
                                                name="slcity" id="slcity" class="select-province-city" >
                                                <option value="">Ch???n</option>
                                             </select>
                                             <span class="err_slcity" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <!--id="areaDistrict"-->
                                          <div class="form-group form-select">
                                             <label for="">* Qu???n/huy???n</label>
                                             <select
                                                required 
                                                data-pristine-required-message="Kh??ng ???????c ????? tr???ng"     
                                                name="sldistrict" id="sldistrict" class="select-district">
                                             </select>
                                             <span class="err_sldistrict" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <label for="">* ?????a ch??? (S??? nh??, ???????ng)</label>
                                          <div class="form-group form-text">
                                             <input
                                                required 
                                                data-pristine-required-message="Kh??ng ???????c ????? tr???ng"  
                                                type="text"  name="address" value="<?= !empty($informationUser["address"])? $informationUser["address"]: "" ?>">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                       <div class="button-save button-center">
                                          <!-- data-bs-dismiss="modal" -->
                                          <button name="personalInfoForm" class="btn-primary" type="submit">L??u l???i</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- <div class="widget widget-14" id="widget-14">
                        <div class="widget-head">
                           <div class="cb-title-h3">
                              <div class="figure">
                                 <div class="image"><img src="./img/dash-board/i3.png" alt=""></div>
                                 <div class="figcaption">
                                    <h3>M???c ti??u ngh??? nghi???p</h3>
                                    <div class="status">
                                       <p>Kh??ng b???t bu???c</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="right-action">
                                 <div class="tips p1" onclick="openTipSlide('tip-objective')">
                                    <div class="icon">
                                       <em class="mdi mdi-lightbulb"></em>
                                    </div>
                                    <p>Tips</p>
                                 </div>
                                 <div class="link-edit"><a > <em class="material-icons">create</em><span>Th??m m???i</span></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="no-content">
                              <p>Vui l??ng th??m M???c ti??u ngh??? nghi???p</p>
                              <a href="javascript:;" ><em class="mdi mdi-plus-circle"></em><span>Th??m m???i</span></a>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="content">
                           </div>
                        </div>
                     </div> -->
                     <div class="widget widget-18" id="widget-18">
                        <div class="widget-head">
                           <div class="cb-title-h3">
                              <div class="figure">
                                 <div class="image"><img src="./img/dash-board/i5.png" alt=""></div>
                                 <div class="figcaption">
                                    <h3>Th??ng tin ngh??? nghi???p *</h3>
                                    <?php 
                                       if(!empty($seeker_job_information) && $seeker_job_information["status"]==1 ){
                                                echo " <div class='status success'>
                                                     <p>Ho??n th??nh</p>
                                                  </div>";
                                       }
                                       else{
                                        echo " <div class='status error'>
                                        <p>Ch??a ho??n th??nh</p>
                                       </div>";
                                       }
                                                    ?>
                                 </div>
                              </div>
                              <div class="right-action">
                                 <div class="tips p1">
                                    <div class="icon">
                                       <em class="mdi mdi-lightbulb"></em>
                                    </div>
                                    <p>Tips</p>
                                 </div>
                                 <div class="link-edit">
                                    <a data-bs-toggle="modal" data-bs-target="#thongtingnghenghiep" href="javascript:void(0)"> <em class="material-icons">create</em>
                                    <span>Ch???nh s???a</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <table>
                              <tbody>
                                 <tr>
                                    <td>C???p b???c mong mu???n</td>
                                    <td>
                                       <?php 
                                          if(!empty($seeker_job_information["position"])) { 
                                             echo $seeker_job_information["position"];
                                          }
                                          ?>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>M???c l????ng</td>
                                    <td>
                                       <?php  if(isset($seeker_job_information["salary_from"])) {
                                          echo $seeker_job_information["salary_from"]."-".$seeker_job_information["salary_to"] ." VND";
                                           }
                                                 ?>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>H??nh th???c l??m vi???c</td>
                                    <td>
                                       <?php if(!empty($seeker_type)){
                                          $valueStr = '';
                                           foreach ($seeker_type as $value) {
                                          $valueStr .= " $value[job_type] " . ',';
                                           }
                                          $valueStr = rtrim($valueStr, ',');
                                           echo $valueStr;
                                          }  
                                          
                                          
                                          ?>
                                    </td>
                                 </tr>
                                 <?php if(isset($seeker_job_information["work_from_home"])==1) { ?>
                                 <tr>
                                    <td>Ph????ng th???c c??ng vi???c</td>
                                    <td>
                                       Work from home
                                    </td>
                                 </tr>
                                 <?php }?>
                                 <tr>
                                    <td>Ng??nh ngh???</td>
                                    <td>
                                       <ul>
                                          <?php if(!empty($informationProfession)){
                                             foreach ($informationProfession as $value) {
                                                
                                                echo "<li> $value[profession_name]</li>";
                                             
                                             }
                                             
                                             
                                             }  
                                             ?>
                                       </ul>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>N??i l??m vi???c</td>
                                    <td class="workplace">
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="modal fade"  data-bs-backdrop="static" data-bs-keyboard="false" id="thongtingnghenghiep" tabindex="-1" " aria-hidden="true">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h2 class="modal-title"    >Th??ng tin ngh??? nghi???p</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    <form name="desired-form" id="desired-form" action="my_profile/desiredJobForm" method="post">
                                       <div class="form-group row">
                                          <div class="col-lg-4">
                                             <label for="">C???p b???c mong mu???n<span>*</span></label>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="select-group">
                                                <select name="level_id" id="level_id">
                                                   <option value="" style="display:none;" selected>Ch???n</option>
                                                   <?php
                                                      foreach ($data_position as $item):?>
                                                   <option 
                                                      <?php 
                             if(!empty($seeker_job_information)){
                              if($item["id"] ==$seeker_job_information["position_id"]){
                                                               echo 'selected';
                                                            }
                                                          }
                                                         ?>
                                                      value="<?= $item["id"] ?>"><?= $item["position"] ?>
                                                      <?php  endforeach;?>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <div class="col-lg-4">
                                             <label for="">M???c l????ng mong mu???n<span>*</span></label>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="form-salary">
                                                <div class="form-select form-text">
                                                   <input placeholder="T??? *"off" type="text" size="12" name="salary_from" id="salary_from" required  data-pristine-required-message="Kh??ng ???????c ????? tr???ng"  maxlength="14" value="<?= !empty($seeker_job_information)? $seeker_job_information["salary_from"] : "" ?>" >
                                                </div>
                                                <div class="form-select form-text">
                                                   <input  placeholder="?????n *"autocomplete="off" type="text"  size="12" name="salary_to" id="salary_to" maxlength="14" required  data-pristine-required-message="Kh??ng ???????c ????? tr???ng" 
                                                      value="<?= !empty($seeker_job_information)?$seeker_job_information["salary_to"] : "" ?>"
                                                      >
                                                </div>
                                             </div>
                                             <div class="form-error"><span class="err_salary_unit" style="display:none"></span></div>
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <div class="col-lg-4">
                                             <label for="">H??nh th???c l??m vi???c<span>*</span></label>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="row form-of-work">
                                                <div class="col-md-6">
                                                   <div class="form-group form-checkbox">
                                                      <input  
                                                         <?php if(isset($seeker_type)){
                                                            foreach ($seeker_type as $item):
                                                            
                                                               if($item["job_type_id"]==1){
                                                                  echo "checked";
                                                                  break;
                                                               }
                                                            endforeach;
                                                            } ?>
                                                         type="checkbox" name="chkResumeType[]"     id="chkResumeType_1" value="1">
                                                      <label for="chkResumeType_1">Nh??n vi??n ch??nh th???c</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-group form-checkbox">
                                                      <input   
                                                         <?php if(isset($seeker_type)){
                                                            foreach ($seeker_type as $item):
                                                               if($item["job_type_id"]==2){
                                                                  echo "checked";
                                                                  break;
                                                               }
                                                            endforeach;
                                                            } ?>
                                                         type="checkbox" name="chkResumeType[]" id="chkResumeType_2" value="2">
                                                      <label for="chkResumeType_2">B??n th???i gian</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-group form-checkbox">
                                                      <input  
                                                         <?php if(isset($seeker_type)){
                                                            foreach ($seeker_type as $item):
                                                               if($item["job_type_id"]==3){
                                                                  echo "checked";
                                                                  break;
                                                               }
                                                            endforeach;
                                                            } ?>
                                                         type="checkbox" name="chkResumeType[]" id="chkResumeType_3" value="3">
                                                      <label for="chkResumeType_3">Th???i v??? - Ngh??? t??? do </label>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-group form-checkbox">
                                                      <input   
                                                         <?php if(isset($seeker_type)){
                                                            foreach ($seeker_type as $item):
                                                               if($item["job_type_id"]==4){
                                                                  echo "checked";
                                                                  break;
                                                               }
                                                            endforeach;
                                                            } ?>
                                                         type="checkbox" name="chkResumeType[]" id="chkResumeType_4" value="4">
                                                      <label for="chkResumeType_4">Th???c t???p</label>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="form-error"><span class="err_chkResumeType_1" style="display:none"></span></div>
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <div class="col-lg-4">
                                             <label for="">Ph????ng th???c c??ng vi???c</label>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="switch-group">
                                                <label for="chkWorkHome">Work from home
                                                <input   
                                                   <?php if(isset($seeker_job_information["work_from_home"])&& $seeker_job_information["work_from_home"]==1) echo "checked";?>
                                                   type="checkbox" name="chkWorkHome" id="chkWorkHome" value="1">
                                                <span class="slider"></span>
                                                </label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <div class="col-lg-4">
                                             <label for="">Ng??nh ngh???</label>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="form-select-chosen">
                                                <select multiple class="chosen-select-max-three" name="INDUSTRY_ID[]" id="INDUSTRY_ID" data-placeholder="Ng??nh ngh???">
                                                   <?php foreach ($data_profession as $key=>$item): ?>
                                                   <option 
                                                      <?php
                                                         foreach ($informationProfession as $itemProfession) {
                                                            if($item["id"]==$itemProfession["seeker_profession_id"] ){
                                                               echo 'selected';
                                                            }
                                                          
                                                         }
                                                            
                                                         
                                                         ?>
                                                      value="<?= $item["id"] ?>">
                                                      <?= $item["profession_name"] ?>
                                                   </option>
                                                   <?php    endforeach;?>
                                                </select>
                                             </div>
                                             <div class="form-error"><span class="err_INDUSTRY_ID" style="display:none"></span></div>
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <div class="col-lg-4">
                                             <label for="">N??i l??m vi???c mong mu???n<span>*</span></label>
                                          </div>
                                          <div class="container" id="dropdownSelected" style="display:none">
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="list-work-popup">
                                                <div class="work-popup-item active">
                                                   <div class="row">
                                                      <div class="col-lg-8">
                                                         <div class="select-group">
                                                            <select    name="location_id" class="" id="select_location_id_3">
                                                            </select>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="work-popup-item ">
                                                   <div class="row">
                                                      <div class="col-4">
                                                         <div class="select-group">
                                                            <select name="LOCATION_ID[]" class="" id="select_location_id_1">
                                        <option value="" disabled="disabled">Ch???n</option>
                                         <option value="4" disabled="disabled">H?? N???i</option>
                                                  <option value="8">H??? Ch?? Minh</option>
                                                   <option value="76">An Giang</option>
                                                <option value="64">B?? R???a - V??ng T??u</option>
                                                  <option value="781">B???c Li??u</option>
                                                      <option value="281">B???c C???n</option>
                                                     <option value="240">B???c Giang</option>
                                                   <option value="241">B???c Ninh</option>
                                                    <option value="75">B???n Tre</option>
                                                      
                                                            </select>
                                                         </div>
                                                         <div class="form-error"><span class="err_LOCATION_ID" style="display:none"></span></div>
                                                      </div>
                                                      <div class="col-2 col-cus-1-7">
                                                         <label for="">Qu???n</label>
                                                      </div>
                                                      <div class="col-6">
                                                         <div class="form-select-chosen form-select-district">
                                                            <select name="DISTRICT_ID[]" id="select_district_id_1" data-placeholder="Qu???n" class="chosen-select-max-three" multiple style="display: none;">
                                                            </select>
                                                            <div class="chosen-container chosen-container-multi" title="" id="select_district_id_1_chosen" style="width: 0px;">
                                                               <ul class="chosen-choices">
                                                                  <!-- <li class="search-field">
                                                                     <input class="chosen-search-input default" type="search" autocomplete="off" value="Qu???n" style="width: 62.3625px;">
                                                                     </li> -->
                                                               </ul>
                                                               <div class="chosen-drop">
                                                                  <ul class="chosen-results"></ul>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="form-error"><span class="err_select_district_id_1" style="display:none"></span></div>
                                                      </div>
                                                      <div class="col-2 col-cus-1-3">
                                                         <div class="delete"><a > <em class="material-icons">highlight_off</em></a></div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="work-popup-item ">
                                                   <div class="row">
                                                      <div class="col-4">
                                                         <div class="select-group">
                                                            <select name="LOCATION_ID[]" class="" id="select_location_id_2" data-id="#select_district_id_2">
                               <option value="" disabled="disabled">Ch???n</option>            
                                <option value="4" disabled="disabled">H?? N???i</option>           
                                <option value="8">H??? Ch?? Minh</option>

                                                            </select>
                                                         </div>
                                                         <div class="form-error"><span class="err_LOCATION_ID" style="display:none"></span></div>
                                                      </div>
                                                      <div class="col-2 col-cus-1-7">
                                                         <label for="">Qu???n</label>
                                                      </div>
                                                      <div class="col-6">
                                                         <div class="form-select-chosen form-select-district">
                                                            <select name="DISTRICT_ID[]"id="select_district_id_2" class="chosen-select-max-three"> 
                                                            </select>
                                                            <div class="chosen-container chosen-container-multi" title="" id="select_district_id_2_chosen" style="width: 0px;">
                                                               <ul class="chosen-choices">
                                                                  <!-- <li class="search-field">
                                                                     <input class="chosen-search-input default" type="search" autocomplete="off" value="Qu???n" style="width: 62.3625px;">
                                                                     </li> -->
                                                               </ul>
                                                               <div class="chosen-drop">
                                                                  <ul class="chosen-results"></ul>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="form-error"><span class="err_select_district_id_2" style="display:none"></span></div>
                                                      </div>
                                                      <div class="col-2 col-cus-1-3">
                                                         <div class="delete"><a > <em class="material-icons">highlight_off</em></a></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- <div class="add-work-popup"><a onclick="addListWorkPopup();"> <em class="material-icons">add </em><span>Th??m</span></a></div> -->
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <div class="col-lg-4">
                                             <label for="">Ph??c l???i mong mu???n</label>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="form-select-chosen">
                                                <select multiple search="true" name="BENEFIT_ID[]" id="BENEFIT_ID" class="chosen-select-max-three" data-placeholder="Ch???n" title="Ch???n" >
                                                   <?php foreach ($data_welfare as $key => $item):?>
                                                   <option
                                                      <?php   
                                                         foreach ($informationWelfare as $itemWelfare) {
                                                            if($item["id"]==$itemWelfare["seeker_welfare_id"] ){
                                                               echo 'selected';
                                                            }
                                                          
                                                         }
                                                             ?>
                                                      value="<?= $item["id"] ?>"><?= $item["welfare_type"] ?></option>
                                                   <?php   endforeach;?>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <textarea name="objective_job" id="objective_job" style="display:none"></textarea>
                                       <div class="form-group form-button">
                                          <div class="button-save button-center">
                                             <button class="btn-gradient" type="submit">L??u L???i</button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <style>
                           #desired-form .chosen-container .chosen-results {
                           max-height: 100px !important;
                           }
                        </style>
                     </div>
                     <div class="widget widget-15" id="widget-15">
                        <div class="widget-head">
                           <div class="cb-title-h3">
                              <div class="figure">
                                 <div class="image"><img src="./img/dash-board/i4.png" alt=""></div>
                                 <div class="figcaption">
                                    <h3>Kinh nghi???m l??m vi???c *</h3>
                                    <?php 
                                       if($count_exp>0){
                                                echo " <div class='status success'>
                                                     <p>Ho??n th??nh</p>
                                                  </div>";
                                       }
                                       else{
                                        echo " <div class='status error'>
                                        <p>Ch??a ho??n th??nh</p>
                                       </div>";
                                       }
                                       ?>
                                 </div>
                              </div>
                              <div class="right-action">
                                 <div class="tips p1" onclick="openTipSlide('tip-experience')">
                                    <div class="icon">
                                       <em class="mdi mdi-lightbulb"></em>
                                    </div>
                                    <p>Tips</p>
                                 </div>
                                 <div class="link-add"><a data-bs-toggle="modal" data-bs-target="#kinhnghiemlamviec" title="Th??m m???i"> <em class="material-icons">add</em><span>Th??m m???i</span></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="modal fade " id="year_of_experience" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog" >
                              <div class="modal-dialog modal-dialog-centered">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h2 class="modal-title">Kinh nghi???m l??m vi???c</h2>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       <form name="frm_Experience" action="my_profile/update_yearofexperience" method="post"  id="frm_Experience">
                                          <div class="form-group row">
                                             <div class="col-lg-4">
                                                <label for="">S??? n??m kinh nghi???m</label>
                                             </div>
                                             <div class="col-lg-8">
                                                <div class="input-group">
                                                   <input type="number" class="exp-yet valid" maxlength="2" name="yearOfExperience" id="yearOfExperience" min="1" max="55" value="<?= !empty($year_of_experience["yearOfExperience"]) ? $year_of_experience["yearOfExperience"]  : "1"?>" >
                                                </div>
                                                <div class="form-error"><span class="err_yearOfExperience" style="display: none;"></span></div>
                                                <div class="form-group form-checkbox mt-1">
                                                   <input type="checkbox" id="not_experience"
                                                      <?= !empty($year_of_experience["not_experience"]) && $year_of_experience["not_experience"]==1 ? "checked" : "123"?>
                                                      name="not_experience"  value="1" style="margin-right: 5px;" class="valid">
                                                   <label class="no-exp-yet" for="not_experience">Ch??a c?? kinh nghi???m</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="form-group row">
                                             <div class="col-lg-4">
                                                <label for="">C???p b???c hi???n t???i</label>
                                             </div>
                                             <div class="col-lg-8">
                                                <div class="select-group">
                                                   <select   name="levelcurrent_id" id="levelcurrent_id" style="float: left; width: 200px; margin-bottom:5px">
                                                      <option value="">Ch???n</option>
                                                      <?php foreach ($data_position as $item): ?>
                                                      <option
                                                         <?= !empty($year_of_experience["position_id"]) && $year_of_experience["position_id"] ==  $item["id"]? "selected": "" ?>  value="<?= $item["id"] ?>"><?= $item["position"] ?></option>
                                                      <?php endforeach;?>
                                                   </select>
                                                </div>
                                                <div class="form-error"><span class="err_levelcurrent_id" style="display:none"></span></div>
                                             </div>
                                          </div>
                                          <div class="form-group form-button">
                                             <div class="button-save button-center">
                                                <button class="btn-gradient" type="submit">L??u L???i</button>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div style="margin-top:10px"class="experience">
                              <table>
                                 <tbody>
                                    <tr>
                                       <td>S??? n??m kinh nghi???m</td>
                                       <td id="txt-experience">
                                          <?= !empty($year_of_experience["yearOfExperience"]) ? $year_of_experience["yearOfExperience"]  : "Ch??a c?? kinh nghi???m"?> 
                                       </td>
                                       <td>
                                          <div class="link-edit" ><a data-bs-target="#year_of_experience" data-bs-toggle="modal"> <em class="material-icons">create</em></a></div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>C???p b???c hi???n t???i</td>
                                       <td id="cbprofile_levelpresent"><?= !empty($year_of_experience["position"]) ? $year_of_experience["position"]  : "Ch??a c???p nh???t" ?></td>
                                       <td>
                                          <div class="link-edit" ><a  data-bs-target="#year_of_experience" data-bs-toggle="modal"> <em class="material-icons">create</em></a></div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <?php if($count_exp==0) {?>
                           <div class="no-content">
                              <p>B???n h??y th??m kinh nghi???p l??m vi???c c???a m??nh ????? nh?? tuy???n d???ng tham kh???o</p>
                              <a data-bs-target="#kinhnghiemlamviec" data-bs-toggle="modal"><em class="mdi mdi-plus-circle"></em><span>Th??m m???i</span></a>
                           </div>
                           <?php } else {?>
                           <div class="sticker">
                              <ul class="list-sticker">
                                 <?php if(!empty($seeker_experience_detail)) { ?>
                                 <?php foreach ($seeker_experience_detail as $item):  ?>
                                 <li class="item" id="expList_<?= $item["id"]?>">
                                    <div class="head-sticker active">
                                       <div class="title">
                                          <h4><?= $item["rexp_title"] ?></h4>
                                          <div class="sub-title">
                                             <p><?= $item["rexp_company"] ?></p>
                                          </div>
                                          <div class="date">
                                             <p><?= $item["experCurrent"]==0 ? $item["start_job"].'-'.$item["end_job"] : $item["start_job"].'-'."Hi???n t???i" ?> </p>
                                          </div>
                                       </div>
                                       <div class="right-head">
                                          <ul class="list-action">
                                             <li class="edit-link"><a href="javascript:void(0);" title="Ch???nh s???a" onclick="show_frmExperience(<?= $item['id']?>);"> <em class="material-icons">create</em></a></li>
                                             <li class="delete">
                                                <form id="delete_resume_experience" action="my_profile/delete_resume_experience" method="post">
                                                   <input type="hidden" name="rexp_id" value="<?= $item['id'] ?>">
                                                   <button onclick="deleteExperience(<?= $item['id'] ?>)" style="background-color:transparent;" title="X??a" type="button">
                                                      <em class="material-icons">highlight_off</em>
                                                </form>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="body-sticker" style="display: block;">
                                    <div class="content"> <?= $item["rexp_workdesc"] ?> </div>
                                    </div>
                                 </li>
                                 <?php  endforeach;?> 
                                 <?php }?>
                              </ul>
                           </div>
                           <?php }?>
                        </div>
                        <div class="widget-body">
                        </div>
                     </div>
                     <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="kinhnghiemlamviec"        tabindex="-1" aria-modal="true" role="dialog">
                     <div class="modal-dialog">
                     <div class="modal-content">
                     <div class="modal-header">
                     <h2 class="modal-title">Kinh Nghi???m L??m Vi???c</h2>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                     <form name="experience-form" id="experience-form" method="post"                  
                        action="my_profile/insert_resume_experience">
                     <input type="hidden" value="0" name="rexp_id" id="rexp_id">
                     <div class="form-group row">
                     <div class="col-lg-3 col-xl-3">
                     <label for="">V??? tr?? / Ch???c danh<span>*</span></label>
                     </div>
                     <div class="col-lg-9 col-xl-9">
                     <div class="input-group">
                     <input type="text" value="" class="form-control" name="rexp_title" maxlength="100">
                     </div>
                     <div class="form-error"><span class="err_rexp_title" style="display:none"></span></div>
                     </div>
                     </div>
                     <div class="form-group row">
                     <div class="col-lg-3 col-xl-3">
                     <label for="">C??ng ty<span>*</span></label>
                     </div>
                     <div class="col-lg-9 col-xl-9">
                     <div class="input-group">
                     <input type="text" value="" class="form-control" name="rexp_company" maxlength="200">
                     </div>
                     <div class="form-error"><span class="err_rexp_company" style="display:none"></span></div>
                     </div>
                     </div>
                     <div class="form-group row">
                     <div class="col-lg-3 col-xl-3">
                     <label for="">Ph????ng th???c c??ng vi???c</label>
                     </div>
                     <div class="col-lg-9 col-xl-9">
                     <div class="select-group">
                     <select name="rexp_worktype">
                     <option value="">Ch???n</option>
                     <?php foreach ($job_type as $item): ?>
                     <option value="<?= $item["id"] ?>"><?= $item["job_type"] ?></option>
                     <?php  endforeach;?>
                     </select>
                     </div>
                     </div>
                     </div>
                     <div class="form-group row">
                     <div class="col-lg-3 col-xl-3">
                     <label for="">Th???i gian l??m vi???c</label>
                     </div>
                     <div class="col-lg-9 col-xl-9">
                     <div class="form-work-time">
                     <div class="start-date">
                     <div class="select-group">
                     <select name="rexp_month_start">
                     <option value="">Th??ng</option>
                     <?php foreach(range(1, 12 ) as $month) { ?>
                     <option value="<?= $month ?>"><?= $month ?></option>
                     <?php }?>
                     </select>
                     </div>
                     <div class="select-group">
                     <select name="rexp_year_start">
                     <option value="">N??m</option>
                     <option value="2022">2022</option>
                     <?php foreach(range((int)date("Y"), 1970 ) as $year) { ?>
                     <option value="<?= $year ?>"><?= $year ?></option>
                     <?php }?>
                     </select>
                     </div>
                     </div>
                     <div class="to"><span>?????n </span></div>
                     <div class="end-date">
                     <div class="select-group">
                     <select name="rexp_month_end">
                     <option value="">Th??ng</option>
                     <?php foreach(range(1, 12 ) as $month) { ?>
                     <option value="<?= $month ?>"><?= $month ?></option>
                     <?php }?>
                     </select>
                     </div>
                     <div class="select-group">
                     <select name="rexp_year_end">
                     <option value="">N??m</option>
                     <option value="2022">2022</option>
                     <?php foreach(range((int)date("Y"), 1970 ) as $year) {
                        echo "\t<option value='".$year."'>".$year."</option>\n\r";
                        }
                        ?>
                     </select>
                     </div>
                     </div>
                     <div class="no-date">
                     <div class="form-group form-checkbox mt-1 work-time-now">
                     <input type="checkbox" name="cboExperCurrent" id="cboExperCurrent" value="1">
                     <label for="cboExperCurrent">Hi???n nay</label>
                     </div>
                     </div>
                     </div>
                     <div class="form-error">
                     <span class="err_rexp_month_start" style="display:none"></span>
                     <span class="err_rexp_year_start" style="display:none"></span>
                     <span class="err_cboExperCurrent" style="display:none"></span>
                     </div>
                     </div>
                     </div>
                     <div class="form-group row">
                     <div class="col-lg-3 col-xl-3">
                     <label for="">M?? t??? c??ng vi???c</label>
                     </div>
                     <div class="col-lg-9 col-xl-9">
                     <div class="textarea-group">
                     <textarea name="rexp_workdesc" rows="3" class="form-control" placeholder="Vui l??ng nh???p t???i ??a kh??ng qu?? 4.000 k?? t???" maxlength="4000"></textarea>
                     </div>
                     <div class="form-error">
                     <span class="err_rexp_workdesc" style="display:none"></span>
                     </div>
                     </div>
                     </div>
                     <div class="form-group form-button">
                     <div class="button-save button-center">
                     <button class="btn-gradient" type="submit">L??u L???i</button>
                     </div>
                     </div>
                     </form>         
                     </div>
                     </div>
                     </div>
                     </div>
                     <div class="widget widget-16" id="widget-16">
                        <div class="widget-head">
                           <div class="cb-title-h3">
                              <div class="figure">
                                 <div class="image"><img src="./img/dash-board/i7.png" alt=""></div>
                                 <div class="figcaption">
                                    <h3>H???c v???n *</h3>
                                    <?php 
                                       if($count_sekeer_education>0 ){
                                                echo " <div class='status success'>
                                                      <p>Ho??n th??nh</p>
                                                   </div>";
                                       }
                                       else{
                                          echo " <div class='status error'>
                                          <p>Ch??a ho??n th??nh</p>
                                       </div>";
                                       }
                                       ?>
                                 </div>
                              </div>
                              <div class="right-action">
                                 <div class="tips p1">
                                    <div class="icon">
                                       <em class="mdi mdi-lightbulb"></em>
                                    </div>
                                    <p>Tips</p>
                                 </div>
                                 <div class="link-add"><a onclick="show_frmEducation(0);"href="javascript:void(0)"  title=" Th??m m???i"> <em class="material-icons">add</em><span>Th??m m???i</span></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="experience">
                              <table>
                                 <tbody>
                                    <tr>
                                       <td>B???ng c???p cao nh???t</td>
                                       <td>
                             <div class="box-edit-degree" id="cbprofile_degree_name">
                                <?= !empty($seeker_highest_degree) ? $seeker_highest_degree["degree_name"]: "Ch??a c???p nh???t"?>
                                             <div  class="link-edit link-highest-degree"><a > <em class="material-icons">create</em></a></div>
                                          </div>
                                          <div class="highest-degree">
                                             <div class="select-group">
                                                <form id="resume-degree-form" method="post" action="my_profile/update_highest_degree">
                                                   <select name="degree" id="degree">
                                                      <option value="">Ch???n</option>
                                                      <?php foreach ($data_degree as $item): ?>
                                                      <option <?= $item["id"]==2 ? "style='display:none'": "" ?> value="<?=  $item["id"] ?>"><?= $item["degree_name"] ?></option>
                                                      <?php   endforeach;?>
                                                   </select>
                                             </div>
                                             <button style="background-color: transparent;" type="submit" class="link-save"> <a ><em class="material-icons">save</em>L??u L???i</a></button>
                                             </form>
                                          </div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <?php if($count_sekeer_education==0) {?>
                           <div class="no-content">
                              <p>Nh???p th??ng tin h???c v???n c???a b???n</p>
                              <a onclick="show_frmEducation(0);"href="javascript:void(0)"title=" Th??m m???i">  
                              <em class="mdi mdi-plus-circle"></em>
                              <span>Th??m m???i</span>
                              </a>
                           </div>
                           <?php } else {?>
                           <div class="sticker">
                              <ul class="list-sticker">
                                 <?php foreach ($seeker_education_detail as $item): ?>
                                 <li class="item" id="eduList_<?= $item["id"]?>">
                                    <div class="head-sticker">
                                       <div class="title">
                                          <h4><?= $item["degree_name"] ?></h4>
                                          <div class="sub-title">
                                             <p><?= $item["redu_name"] ?></p>
                                          </div>
                                          <div class="date">
                                             <p><?= !empty($item["start_date"]) && !empty($item["end_date"])  ? "T???t nghi???p $item[start_date]-$item[end_date]"  : "" ?></p>
                                          </div>
                                       </div>
                                       <div class="right-head">
                                          <ul class="list-action">
                                             <li class="edit-link"><a href="javascript:void(0);" onclick="show_frmEducation(<?= $item['id']?>);" title="Ch???nh s???a"> <em class="material-icons">create</em></a></li>
                                             <li class="delete"><a href="javascript:void(0);" onclick="deleteEducation(<?= $item['id']?>);" title="X??a"> <em class="material-icons">highlight_off</em></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="body-sticker" >
                                       <div class="content">
                                          <?= $item["detail_desc"] ?>
                                       </div>
                                    </div>
                                 </li>
                                 <?php  endforeach;?>
                              </ul>
                           </div>
                           <?php }?>
                        </div>
                     </div>
                        <!-- <div class="widget widget-20" id="widget-20">
                           <div class="widget-head">
                              <div class="cb-title-h3">
                                 <div class="figure">
                                    <div class="image"><img src="./img/dash-board/i8.png" alt=""></div>
                                    <div class="figcaption">
                                       <h3>Ng?????i tham kh???o</h3>
                                       <div class="status default">
                                          <p>Kh??ng b???t bu???c</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="right-action">
                                    <div class="tips p1">
                                       <div class="icon">
                                          <em class="mdi mdi-lightbulb"></em>
                                       </div>
                                       <p>Tips</p>
                                    </div>
                                    <div class="link-add"><a > <em class="material-icons">add</em><span>Th??m m???i</span></a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="widget-body">
                              <div class="no-content">
                                 <p>Vui l??ng th??m th??ng tin ng?????i tham kh???o</p>
                                 <a ><em class="mdi mdi-plus-circle"></em><span>Th??m m???i</span></a>
                              </div>
                           </div>
                        </div> -->
                  </div>
                  <div class="col-lg-4 col-xl-3 main-menu">
                     <div style="top:100px" class="menu-shortchut active">
                        <div class="list-button">
                           <ul>
                              <!-- <li><a class="share-profile" ><em class="mdi mdi-share"></em><span>Chia s??? h??? s??</span> <span class="new-label"> New </span> </a></li> -->
                              <!-- <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/changetemplate"> <em class="material-icons">edit</em><span>Ch???nh M???u H??? S??</span></a></li> -->
                              <li>
                  <a  data-bs-toggle="modal"  data-bs-target="#subCV"  id="btn_view_cbprofile">
                                 <em class="material-icons">remove_red_eye</em>
                                 <span>Xem CV Template</span></a>
                              </li>
                              <!-- <li id="btn_download" > <a href="javascript:generatePDF()"> <em class="material-icons">get_app</em><span>T???i h??? s??</span></a>
                              </li> -->
                              <!-- <li><a class="hidden-info" ><em class="fa fa-eye-slash"></em><span>???n th??ng tin</span></a></li> -->
                           </ul>
                        </div>
                        <div class="head-menu">
                           <div class="name-shortchut"><a class="active" >Careerbuilder Profile</a></div>
                           <div class="toggle-menu"><em class="material-icons">list</em></div>
                        </div>
                        <ul class="list-shortchut">
                           <li><a class="active" data-href="widget-11">Careerbuilder Profile</a></li>
                           <li><a data-href="t-resume-section">Ti??u ????? h??? s??</a></li>
                           <li><a data-href="personalinfo-section">Th??ng tin c?? nh??n</a></li>
                           <!-- <li><a data-href="widget-14">M???c ti??u ngh??? nghi???p</a></li> -->
                           <li><a data-href="widget-18">Th??ng tin ngh??? nghi???p</a></li>
                           <li><a data-href="widget-15">Kinh nghi???m l??m vi???c</a></li>
                           <li><a data-href="widget-16">H???c v???n</a></li>

                           <!-- <li><a data-href="language-section">Ng??n ng???</a></li> -->
                           <!-- <li><a data-href="widget-17">K??? n??ng chuy??n m??n</a></li> -->
                     
                        
                        </ul>
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
                                                         <li class="address2"><i class="fa fa-home"></i><span class="txt">???????ng 7, Huy???n L???c Ninh, B??nh Ph?????c, Vi???t Nam</span></li>
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
                                                <!-- <div class="col-sm-12 col border_orange"style=" padding:5px 0;">
                                                   <h3>K??? n??ng</h3>
                                                   <ul class="skill flex">
                                                      <li class="">
                                                         <label>c#</label>
                                                         <div class="point"><span></span><span></span><span></span></div>
                                                      </li>
                                                      <li class="">
                                                         <label>php</label>
                                                         <div class="point"><span></span><span></span><span></span></div>
                                                      </li>
                                                      <li class="">
                                                         <label>t???t</label>
                                                         <div class="point"><span></span><span></span><span></span></div>
                                                      </li>
                                                      <li class="">
                                                         <label>js</label>
                                                         <div class="point"><span></span><span></span><span></span></div>
                                                      </li>
                                                      <li class="">
                                                         <label>html</label>
                                                         <div class="point"><span></span><span></span><span></span></div>
                                                      </li>
                                                   </ul>
                                                </div> -->
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
            <div class="hidden-edit-modal edit-modal-dashboard" style="display: none">
               <div class="modal-title">
                  <h3>???n m???t s??? th??ng tin</h3>
               </div>
               <div class="body-modal main-form">
                  <form action="my_profile/UpdateProfile" name="frmConfident" id="frmConfident" method="POST" class="form-horizontal">
                     <input type="hidden" name="r_id" value="0" />
                     <input type="hidden" name="type_id" value="profile" />
                     <div class="line">
                        <p>Th??ng tin c?? nh??n</p>
                     </div>
                     <div class="row data-list">
                        <div class="col-md-6">
                           <div class="form-group form-checkbox">
                              <input type="checkbox" id="chkConfidential_6" name="chkConfidential[6]" value="1">
                              <label for="chkConfidential_6">T??nh tr???ng h??n nh??n</label>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group form-checkbox">
                              <input type="checkbox" id="chkConfidential_0" name="chkConfidential[0]" value="1" checked="checked">
                              <label for="chkConfidential_0">???n H??? v?? t??n</label>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group form-checkbox">
                              <input type="checkbox" id="chkConfidential_1" name="chkConfidential[1]" value="1">
                              <label for="chkConfidential_1">?????a ch??? (S??? nh??, ???????ng)</label>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group form-checkbox">
                              <input type="checkbox" id="chkConfidential_3" name="chkConfidential[3]" value="1">
                              <label for="chkConfidential_3">S??? ??i???n tho???i</label>
                           </div>
                        </div>
                     </div>
                     <div class="line">
                        <p>Th??ng tin ngh??? nghi???p</p>
                     </div>
                     <div class="row data-list">
                        <div class="col-md-6">
                           <div class="form-group form-checkbox">
                              <input type="checkbox" id="chkConfidential_7" name="chkConfidential[7]" value="1">
                              <label for="chkConfidential_7">H??nh th???c l??m vi???c</label>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group form-checkbox">
                              <input type="checkbox" id="chkConfidential_9" name="chkConfidential[9]" value="1">
                              <label for="chkConfidential_9">M???c l????ng</label>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group form-checkbox">
                              <input type="checkbox" id="chkConfidential_8" name="chkConfidential[8]" value="1">
                              <label for="chkConfidential_8">Ph??c l???i mong mu???n</label>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="edit-db-work-experience-1 edit-modal-dashboard" style="display:none">
               <div class="modal-title">
                  <h3>Kinh nghi???m l??m vi???c</h3>
               </div>
               <div class="modal-body">
                  <form method="post" name="frm_Experience" id="frm_Experience">
                     <div class="form-group row">
                        <div class="col-lg-4">
                           <label for="">S??? n??m kinh nghi???m</label>
                        </div>
                        <div class="col-lg-8">
                           <div class="input-group">
                              <input type="number" class="exp-yet" maxlength="2" name="yearOfExperience" id="yearOfExperience" min="1" max="55" value="1">
                           </div>
                           <div class="form-error"><span class="err_yearOfExperience" style="display:none"></span></div>
                           <div class="form-group form-checkbox mt-1">
                              <input type="checkbox" id="not_experence" name="not_experence" value="1" style="margin-right: 5px;">
                              <label class="no-exp-yet" for="not_experence">Ch??a c?? kinh nghi???m</label>
                           </div>
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-lg-4">
                           <label for="">C???p b???c hi???n t???i</label>
                        </div>
                        <div class="col-lg-8">
                           <div class="select-group">
                              <select name="levelcurrent_id" id="levelcurrent_id" style="float: left; width: 200px; margin-bottom:5px">
                                 <option value="">Ch???n</option>
                                 <option value="1" selected="selected">Sinh vi??n/ Th???c t???p sinh</option>
                                 <option value="2">M???i t???t nghi???p</option>
                                 <option value="3">Nh??n vi??n</option>
                                 <option value="4">Tr?????ng nh??m / Gi??m s??t</option>
                                 <option value="5">Qu???n l??</option>
                                 <option value="6">Ph?? Gi??m ?????c</option>
                                 <option value="7">Gi??m ?????c </option>
                                 <option value="8">T???ng gi??m ?????c</option>
                                 <option value="9">Ch??? t???ch / Ph?? Ch??? t???ch</option>
                              </select>
                           </div>
                           <div class="form-error"><span class="err_levelcurrent_id" style="display:none"></span></div>
                        </div>
                     </div>
                     <div class="form-group form-button">
                        <div class="button-save button-center">
                           <button class="btn-gradient" type="submit"  >L??u L???i</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div id="popup-modal" class="popup-modal intro-modal edit-modal-dashboard" style="display: none">
               <div class="modal-title">
                  <h3>T??NH N??NG "CHIA S??? H??? S??" ???? S???N S??NG!</h3>
               </div>
               <div class="modal-body">
                  <div class="box-intro">
                     <div class="box-img">
                        <img src="https://static.careerbuilder.vn/themes/careerbuilder/images/cv-profile/banner_popup_share_profile.jpg">
                     </div>
                     <div class="text-intro">
                        <p>
                           B???n ???? s???n s??ng "khoe" th????ng hi???u c?? nh??n tr??n m???i n???n t???ng? Tr???i nghi???m ngay t??nh n??ng "Chia s??? profile" ?????n b???t c??? n??i ????u nh??!
                        </p>
                     </div>
                     <div class="action">
                        <label class="container-ckb">Kh??ng hi???n th??? l???i
                        <input type="checkbox" name="ckb-1" id="sp_popup_chk">
                        <span class="checkmark"></span>
                        </label>
                        <button class="btn-close-modal btn-close-popup">
                        ????ng
                        </button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tips-modal" id="tip_cvsetting" style="display: none">
               <div class="head-modal">
                  <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                  <div class="title">
                     <h3>????? CV kh??ng ch??? Hay m?? c??n ?????p trong m???t Nh?? tuy???n d???ng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="cb-title-h3">
                                    <h3>H??? s?? CareerBuilder 4</h3>
                                 </div>
                                 <div class="content">
                                    <p>Ph??ng ch??? trong CV ph???n n??o th??? hi???n phong th??i c???a b???n khi l??m vi???c v?? Nh?? tuy???n d???ng th?????ng mong mu???n ???????c ?????c c??c th??ng tin b???n ????a ra ??? m???t c??? ch??? v???a ph???i, r?? r??ng, kh??ng qu?? to c??ng kh??ng qu?? nh???.
                                       C??? ch??? g???i ?? cho m???t CV chu???n l?? t???m 12 ?????n 14 v?? b???n c?? th??? ki???m tra th??? b???ng c??ch in CV ra tr??n kh??? gi???y A4 tr?????c khi g???i ??i ???ng tuy???n nh??.
                                    </p>
                                 </div>
                              </div>
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
            <div class="modal fade" id="tip-t-resume" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
               <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                     <div class="tips-modal">
                     </div>
                     <div style="padding:0;background: #f3f3f3;"class="modal-header">
                        <div class="head-modal">
                           <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                           <div class="title">
                              <h3>????? CV kh??ng ch??? Hay m?? c??n ?????p trong m???t Nh?? tuy???n d???ng</h3>
                           </div>
                        </div>
                        <button type="button" data-bs-dismiss="modal" aria-label="Close" class="fancybox-button fancybox-close-small" title="Close">
                           <svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24">
                              <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
                           </svg>
                        </button>
                        </button>
                     </div>
                     <div class="modal-body" style="padding:0">
                        <div class="tips-modal" >
                           <div class="body-modal">
                              <div class="widget widget-12">
                                 <div class="widget-body">
                                    <div class="swiper-container">
                                       <div class="swiper-wrapper">
                                          Ti??u ????? h??? s??:<br> B???n n??n ????? ti??u ????? l?? v??? tr?? b???n ??ang ???ng tuy???n ho???c mu???n l??m vi???c. Gi??p Nh?? tuy???n d???ng hi???u ngay v??? tr?? mong mu???n khi nh???n h??? s?? c???a b???n.<br> V?? d???: "Nh??n vi??n kinh doanh" ho???c "Marketing
                                          Manager"<br> L??u ??: h??y ??i???u ch???nh ti??u ????? theo t???ng c??ng vi???c ???ng tuy???n nh??!
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
            <div class="tips-modal" id="tip-personalinfo" style="display: none">
               <div class="head-modal">
                  <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                  <div class="title">
                     <h3>????? CV kh??ng ch??? Hay m?? c??n ?????p trong m???t Nh?? tuy???n d???ng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Th??ng tin c?? nh??n:<br> - H??y s??? d???ng ?????a ch??? email chuy??n nghi???p ph?? h???p d??ng cho c??ng vi???c, h???n ch??? s??? d???ng email kh?? ?????c ho???c d??ng nhi???u k?? t??? ?????c bi???t.<br> - ???nh ?????i di???n tr??n h??? s?? c??ng nh?? l???n ?????u ti??n
                              t???o ???n t?????ng v???i Nh?? tuy???n d???ng. N??n ch???n ???nh ?????i di???n ch???p t??? vai tr??? l??n, c?? ??nh s??ng t???t, kh??ng gian h???n ch??? nhi???u chi ti???t, n??n m???c trang ph???c c??ng s???.<br> - Ki???m tra th??ng tin c?? nh??n ????? tr??nh tr?????ng h???p
                              Nh?? Tuy???n D???ng kh??ng li??n h??? ???????c
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
            <div class="tips-modal" id="tip-objective" style="display: none">
               <div class="head-modal">
                  <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                  <div class="title">
                     <h3>????? CV kh??ng ch??? Hay m?? c??n ?????p trong m???t Nh?? tuy???n d???ng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              M???c ti??u ngh??? nghi???p: <br> - H??y tr??nh b??y m???c ti??u c???a b???n th??n m???t c??ch ng???n g???n, r?? r??ng nh??ng c??ng th??? hi???n ???????c mong mu???n c???a b???n th??n ?????i v???i v??? tr??/ng??nh ngh??? m?? b???n ???ng tuy???n.<br> - Trong tr?????ng h???p
                              b???n mu???n n??i th??m v??? s??? nghi???p v?? kinh nghi???m l??m vi???c trong qu?? kh??? ????? nh?? tuy???n d???ng c?? th??? h??nh dung r?? h??n, th?? c??ng ?????ng qu??n tr??nh b??y th???t t??m t???t nh??!
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
            <div class="tips-modal" id="tip-desired-job" style="display: none">
               <div class="head-modal">
                  <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                  <div class="title">
                     <h3>????? CV kh??ng ch??? Hay m?? c??n ?????p trong m???t Nh?? tuy???n d???ng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Th??ng tin ngh??? nghi???p:<br> H??y ??i???n th???t ?????y ????? v?? ch??nh x??c nh???ng th??ng tin n??y ????? Nh?? tuy???n d???ng c?? ???????c c??i nh??n t???ng quan v??? mong mu???n c???a b???n.
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
            <div class="tips-modal" id="tip-experience" style="display: none">
               <div class="head-modal">
                  <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                  <div class="title">
                     <h3>????? CV kh??ng ch??? Hay m?? c??n ?????p trong m???t Nh?? tuy???n d???ng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Kinh nghi???m l??m vi???c:<br> - Kinh nghi???m n??n tr??nh b??y theo th??? t??? g???n nh???t ?????n xa nh???t.<br> - N???u b???n c?? r???t nhi???u kinh nghi???m, h??y ch???n l???c m?? t??? chi ti???t nh???ng c??ng vi???c c?? li??n quan ?????n v??? tr?? ??ang ???ng tuy???n<br> - H??y ?????c th???t k?? b???n m?? t??? v?? y??u c???u c??ng vi???c c???a Nh?? tuy???n d???ng, s??? d???ng c??c t??? kh??a li??n quan v?? tr??nh b??y nh???ng kinh nghi???m c???a b???n th??n b???ng nh???ng t??? kh??a ????, ??i???u n??y s??? gi??p cho nh?? tuy???n d???ng th???y
                              ????? ph?? h???p c???a b???n v???i c??ng vi???c ho???c v??? tr?? ????. T???t nhi??n h??y lu??n ?????m b???o s??? trung th???c trong qu?? tr??nh vi???t.<br> - ?????ng qu??n, th??? hi???n n??ng l???c th??ng qua c??c th??nh t??ch c???a t???ng c??ng vi???c b???n ???? tr???i qua
                              nh??.
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
            <div class="tips-modal" id="tip-education" style="display: none">
               <div class="head-modal">
                  <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                  <div class="title">
                     <h3>????? CV kh??ng ch??? Hay m?? c??n ?????p trong m???t Nh?? tuy???n d???ng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              H???c v???n: <br> - H??y n??u ra nh???ng b???c h???c ?????t ???????c nh?? cao ?????ng, ?????i h???c, th???c s??,... <br> - B???n c??ng c?? th??? k??? th??m nh???ng kh??a h???c ng???n h???n, kh??a ????o t???o chuy??n nghi???p (c?? ph??) m?? b???n ???? t???ng ???????c h???c. <br> - L??u ?? ch???n l???c nh???ng kh??a h???c li??n quan ?????n c??ng vi???c m?? b???n ???ng tuy???n th??i nh??
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
            <div class="tips-modal" id="tip-certificate" style="display: none">
               <div class="head-modal">
                  <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                  <div class="title">
                     <h3>????? CV kh??ng ch??? Hay m?? c??n ?????p trong m???t Nh?? tuy???n d???ng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Ch???ng ch??? kh??c: <br> B???n c?? th??? ch???n hi???n th??? ho???c kh??ng hi???n th??? m???c n??y tr??n CV<br> - Ch??? n??n ????? c???p ?????n nh???ng ch???ng ch??? li??n quan ?????n c??ng vi???c b???n ??ang ???ng tuy???n ho???c nh???ng ch???ng ch??? c?? k?? n??ng n???i b???t.<br> - H??y ??i???n ?????y ????? c??c th??ng tin nh?? ng??y ho??n th??nh, t??? ch???c c???p.<br> - B???n c??ng c?? th??? k??? t??n c??c h???i th???o, h???i ngh??? c?? uy t??n m?? b???n ???? t???ng ???????c tham d???
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
            <div class="tips-modal" id="tip-skill" style="display: none">
               <div class="head-modal">
                  <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                  <div class="title">
                     <h3>????? CV kh??ng ch??? Hay m?? c??n ?????p trong m???t Nh?? tuy???n d???ng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              K?? n??ng kh??c:<br> - N??u n???i b???t 6 ?????n 8 k?? n??ng li??n quan nh???t ?????n c??ng vi???c b???n ???ng tuy???n<br> - N???u b???n ch??a c?? nhi???u k?? n??ng c???ng, h??y xem x??t t???i vi???c n??u ra c??c k?? n??ng m???m nh??: "k??? n??ng thuy???t tr??nh", "k???
                              n??ng ph??n t??ch"<br> - N??n s??? d???ng nh???ng c???m t??? ng???n, ??u ti??n s??? d???ng nh???ng k?? n??ng c?? nh???c ?????n trong b???n m?? t??? c??ng vi???c
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
            <div class="tips-modal" id="tip-award" style="display: none">
               <div class="head-modal">
                  <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                  <div class="title">
                     <h3>????? CV kh??ng ch??? Hay m?? c??n ?????p trong m???t Nh?? tuy???n d???ng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Th??nh t??ch n???i b???t:<br> B???n c?? th??? ch???n hi???n th??? ho???c kh??ng hi???n th??? m???c n??y tr??n CV<br> Ph???n n??y b???n c?? th??? k??? ?????n nh???ng d??? ??n c?? nh??n c?? li??n quan ?????n c??ng vi???c b???n ???ng tuy???n, h??y c??? g???ng tr??nh b??y th???t chi
                              ti???t k??m theo nh???ng s??? li???u v?? k?? n??ng, th??nh t??ch b???n ?????t ???????c t??? d??? ??n.
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
            <div class="tips-modal" id="tip-references" style="display: none">
               <div class="head-modal">
                  <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                  <div class="title">
                     <h3>????? CV kh??ng ch??? Hay m?? c??n ?????p trong m???t Nh?? tuy???n d???ng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Ng?????i tham kh???o:<br> B???n c?? th??? ch???n hi???n th??? ho???c kh??ng hi???n th??? m???c n??y tr??n CV<br> - "Ng?????i tham kh???o" c?? th??? l?? c???p tr??n ho???c ng?????i l??m vi???c tr???c ti???p v???i b???n.<br> - H??y lu??n ?????m b???o r???ng "Ng?????i tham kh???o"
                              bi???t r???ng h??? c?? th??? s??? nh???n ???????c cu???c g???i t??? nh?? tuy???n d???ng hi???n t???i c???a b???n.<br> - N???u "Ng?????i tham kh???o" c?? c??c ch???c danh c??ng vi???c nh?? B??c s??, Lu???t s??,... th?? h??y ????? n?? tr?????c t??n c???a h???. Trong tr?????ng h???p kh??ng
                              c??, h??y ????? t??n ng??? ??ng/B??/Mr/Ms/... tr?????c t??n c???a h??? nh??!
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
            <div class="tips-modal" id="tip-language" style="display: none">
               <div class="head-modal">
                  <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                  <div class="title">
                     <h3>????? CV kh??ng ch??? Hay m?? c??n ?????p trong m???t Nh?? tuy???n d???ng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Ng??n ng??? kh??c:<br> -B???n n??n li???t k?? c??c ng??n ng??? b???n c?? th??? s??? d???ng, bao g???m c??? gi???y ch???ng nh???n v??? ngo???i ng??? ???? ho???c ????? c???p th??m v??? kho???ng th???i gian b???n du h???c, tham gia ch?????ng tr??nh trao ?????i ng??n ng??? ????? gi??p
                              nh?? tuy???n d???ng h??nh dung r?? th??m v??? kh??? n??ng ng??n ng??? c???a b???n. <br> -N??n li???t k?? ng??n ng??? theo th??? t??? t??? th??nh th???c nh???t ?????n ??t th??nh th???c nh???t
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
            <div class="tips-modal" id="tip-other-activity" style="display: none">
               <div class="head-modal">
                  <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                  <div class="title">
                     <h3>????? CV kh??ng ch??? Hay m?? c??n ?????p trong m???t Nh?? tuy???n d???ng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Nh???ng ho???t ?????ng kh??c:<br> B???n c?? th??? ch???n hi???n th??? ho???c kh??ng hi???n th??? m???c n??y tr??n CV<br> - H??y li???t k?? c??c ho???t ?????ng ngo???i kh??a m?? b???n tham gia, ?????c bi???t l?? nh???ng ho???t ?????ng th??? hi???n kh??? n??ng l??nh ?????o.<br> - T??m t???t nh???ng th??nh t??ch v?? k???t qu??? thu ???????c t??? ho???t ?????ng nh??
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
         </div>
      </div>
      <input type="hidden" name="csrf_token" id="csrf_token" value="d44e1a55b7e04ef5568102668728106355166f132ceccd46a729b5aea7103e50" />
      <div class="back-drop">123</div>
   </main>
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js" integrity="sha512-1g3IT1FdbHZKcBVZzlk4a4m5zLRuBjMFMxub1FeIRvR+rhfqHFld9VFXXBYe66ldBWf+syHHxoZEbZyunH6Idg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script>
   
        async function generatePDF() {
            // document.getElementById("btn_download").innerHTML = "Currently downloading, please wait";

            //Downloading
            var downloading = document.getElementById("ZoneShowCVTemplate");

            html2canvas(downloading).then(canvas => {
              
               let base64image=canvas.toDataURL('image/png');
               console.log(base64image)
            })
        }
    </script>
  -->