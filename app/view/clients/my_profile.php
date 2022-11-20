
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/my_profile.css" ?>">
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/global/css/multi-select-dropdown.css" ?>">

<script defer   src="<?= _WEB_ROOT . "/app/public/assets/clients/js/my_profile.js" ?>"></script>
<script defer src="<?= _WEB_ROOT . "/app/public/assets/clients/js/handleExperienceForm.js" ?>">
</script>


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
                  <li> <a href="https://careerbuilder.vn/vi/jobseekers/dashboard" title="Quản lý hồ sơ"> <em class="material-icons">color_lens</em><span>Quản lý hồ sơ</span></a></li>
                  <li style="display:none"> <a href="https://careerbuilder.vn/vi/jobseekers/cv-hay/my-profile"> <em class="material-icons">person</em><span>Hồ sơ Careerbuilder</span></a></li>
                  <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile" class="active"> <em class="material-icons">person</em><span>Hồ sơ Careerbuilder</span></a></li>
                  <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/changetemplate"> <em class="material-icons">portrait</em><span>Chỉnh Mẫu Hồ Sơ</span></a></li>
                  <li>
                     <a class="collapse " href="javascript:;"><em class="material-icons">edit</em><span>Việc làm của tôi</span></a>
                     <ul class="list-unstyled collapse">
                        <li><a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobsaved">Việc làm đã lưu</a></li>
                        <li><a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobapplied">Việc làm đã nộp</a></li>
                     </ul>
                  </li>
                  <li> <a href="https://careerbuilder.vn/vi/jobseekers/jobalert"><em class="material-icons">notifications</em><span>Thông Báo Việc Làm</span></a></li>
                  <li>
                     <a class="collapse " href="javascript:;"><em class="material-icons">remove_red_eye</em><span>Nhà tuyển dụng của tôi</span></a>
                     <ul class="list-unstyled collapse">
                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp">Nhà tuyển dụng xem hồ sơ của tôi</a></li>
                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/following">Following</a></li>
                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/blacklist">Nhà tuyển dụng được cài đặt hạn chế xem hồ sơ của tôi</a></li>
                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/feedback">Phản hồi từ nhà tuyển dụng</a></li>
                     </ul>
                  </li>
                  <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/notify" title="Xem tất cả thông báo"> <em class="material-icons">textsms</em><span>Xem tất cả thông báo</span></a></li>
                  <li>
                     <a class="collapse " href="javascript:;"><em class="material-icons">settings</em><span>Cài đặt</span></a>
                     <ul class="list-unstyled collapse">
                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/member/myaccount" title="Tài Khoản">Tài Khoản</a></li>
                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/member/emailmanagement" title="Cài Đặt Thông Báo">Cài Đặt Thông Báo</a></li>
                     </ul>
                  </li>
                  <li> <a href="https://careerbuilder.vn/vi/jobseekers/logout" title="Thoát"> <em class="material-icons">power_settings_new</em><span>Thoát</span></a></li>
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
                              <h3>Careerbuilder Profile</h3>
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
                                          <h2>Một Ba</h2>
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
        <span>Upload file</span></label
      >  
      <button type="submit"style="margin-top:50px;padding:6px 14px;width: 152px; ">Lưu thay đổi</button>
                                 </form>
                                </div>
                                 </div>
                                 
                              </div>
                              <div class="col-lg-8 col-xl-9">
                                 <div class="cb-name">
                                    <h2 id="section_name"><?= $informationUser["lastname"]." ". $informationUser["firstname"] ?></h2>
                                 </div>
                                 <div class="information">
                                    <div class="assistant"><?= !empty($seeker_resume_title["resume_title"]) ? $seeker_resume_title["resume_title"]: "Chưa cập nhập"  ?></div>
                                 </div>
                                 <div id="complete_section">
                                    <div class="progress-bar-status incomplete">
                                       <div class="profile-strength">
                                          <p>Mức độ hoàn thành: <span>Chưa Hoàn Tất</span></p>
                                       </div>
                                       <div class="noti">
                                          <em class="mdi mdi-alert-circle-outline"></em>
                                          <p>Chưa hoàn thành. Bạn vui lòng cập nhật và hoàn thành hồ sơ</p>
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
                                    <div class="searchable-cv-widget status-area attached-status-area">
                                       <div class="switch-status group_searchable" id="cv_searchable_17611557" data-id="17611557" data-complete="0">
                                          <a data-type="2" class="lock active" style="border-radius: 21px;text-align: center;"><em class="mdi mdi-lock"></em>Khóa</a>
                                          <a data-type="1" class="public " style="text-decoration:none;border-radius: 21px;text-align: center;"><em class="mdi mdi-web"></em>Công khai</a>
                                          <a data-type="3" class="flash " style="text-decoration:none;border-radius: 21px;text-align: center;"><em class="mdi mdi-flash"></em>Khẩn cấp</a>
                                       </div>
                                       <p class="text-notes text-notes-2 d-block">
                                          Bạn đang <span>vô hiệu hóa</span> hồ sơ. Nhà tuyển dụng sẽ không thấy được hồ sơ này của bạn.
                                       </p>
                                       <p class="text-notes text-notes-1 d-none">
                                          Hồ sơ của bạn đang ở trạng thái <span>Công Khai</span>. Nhà tuyển dụng có thể tìm thấy Hồ sơ này của bạn.
                                       </p>
                                       <p class="text-notes text-notes-3 d-none">
                                          Hồ sơ của bạn đang ở trạng thái <span>Khẩn cấp</span>. Hồ sơ của bạn sẽ được ưu tiên tìm thấy bởi các nhà tuyển dụng.
                                       </p>
                                    </div>
                                    <div class="check-box">
                                       <div class="form-group form-check-box job-alerts">
                                          <label for="cv_jobalert_17611557">Nhận thông báo việc làm
                                          <input type="checkbox" name="cv_jobalert_17611557" id="cv_jobalert_17611557" value="17611557" disabled="disabled" onclick="updateCvJobalert(this);">
                                          <span class="slider"></span> </label>
                                       </div>
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
                                 <h3>Tiêu đề hồ sơ *</h3>
                     <?php 
                       if(!empty($seeker_resume_title) && $seeker_resume_title["status"]==1 ){
                                echo " <div class='status success'>
                                     <p>Hoàn thành</p>
                                  </div>";
                       }
                       else{
                        echo " <div class='status error'>
                        <p>Chưa hoàn thành</p>
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
                                    <a data-bs-toggle="modal" data-bs-target="#tieudehoso" href="javascript:void(0)"> <em class="material-icons">create</em><span>Chỉnh sửa</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Modal Tiêu đề hồ sơ *-->
                        <div class="modal fade" id="tieudehoso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h2 class="modal-title"    >Tiêu đề hồ sơ</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    <form method="post" autocomplete="on" action="my_profile/resumeTitle" name="t-resume-form" id="t-resume-form">
                                       <div class="form-group row">
                                          <div class="col-lg-4">
                                             <label for="">Tiêu đề hồ sơ<span>*</span></label>
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
                                          <button type="submit" class="btn btn-primary">Lưu lại</button>
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
                <p>Tiêu đề hồ sơ</p
                <a href="javascript:void(0)" data-bs-target="#tieudehoso"></a>
                <a data-bs-toggle="modal" data-bs-target="#tieudehoso" href="javascript:void(0)"> <em class="mdi mdi-plus-circle"></em><span>Chỉnh sửa</span></a>
        </div>
                              <?php }?>
                          
                      
                           <input type="hidden" id="title_hidden_value" value="Nhân viên nhân sự">
                        </div>
                     </div>
                     <div class="widget widget-13" id="personalinfo-section">
                        <div class="widget-head">
                           <div class="cb-title-h3">
                              <div class="figure">
                                 <div class="image"><img src="./img/dash-board/i2.png" alt=""></div>
                                 <div class="figcaption">
                                    <h3>Thông tin cá nhân *</h3>
                                    <?php 
                       if(!empty($informationUser) && $informationUser["status"]==1 ){
                                echo " <div class='status success'>
                                     <p>Hoàn thành</p>
                                  </div>";
                       }
                       else{
                        echo " <div class='status error'>
                        <p>Chưa hoàn thành</p>
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
                                    <span>Chỉnh sửa</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="table">
                              <table>
                                 <tbody>
                                    <tr>
                                       <td>Họ và Tên Lót</td>
                                       <td><?= $informationUser["lastname"] ?></td>
                                    </tr>
                                    <tr>
                                       <td>Tên</td>
                                       <td><?= $informationUser["firstname"] ?></td>
                                    </tr>
                            
                                    <tr>
                                       <td>Ngày sinh</td>
                                       <td><?= !empty($informationUser["date_of_birth"]) ?formatDate($informationUser["date_of_birth"]) : "" ?></td>
                                    </tr>
                                  

                                    <tr>
                                       <td>Điện thoại</td>
                      <td><?= !empty($informationUser["contact_number"]) ? $informationUser["contact_number"] : "" ?></td>
                                    </tr>
                                    <tr>
                                       <td>Email</td>
                                       <td><?= $informationUser["email"]  ?></td>
                                    </tr>

                                    <tr>
                               
                                       <td>Tình trạng hôn nhân</td>
                                    <?php $informationUser["marital_status"]==0 ? "Độc thân"  :"Đã kết hôn" ?>
                                       <td><?php 
                                       if(!empty($informationUser["marital_status"])){
                                           if($informationUser["marital_status"]==1){
                                             echo "Độc thân";
                                           }
                                           else{
                                             echo "Đã kết hôn";
                                           }
                                       }
                                       ?></td>
                                      
                                       
                                    </tr>
                                
                                    <tr>
                                       <td>Tỉnh/ Thành phố</td>
                                       <td  class="provincesUser"></td>
                                    </tr>
                                    <tr>
                                       <td>Quận/ Huyện</td>
                                       <td class="districtsUser"></td>
                                    </tr>
                                    <tr>
                                       <td>Địa chỉ</td>
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
                                 <h2 class="modal-title"    >Thông tin cá nhân</h2>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form action="my_profile/UpdateProfile" method="post" id="personalInfoForm" autocomplete="off">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group form-text">
                                             <label>* Họ và tên lót</label>
                                             <input 
                                             required 
                                             data-pristine-required-message="Không được để trống"   
                                             type="text" value="<?=  $informationUser["lastname"]?>"  name="lastname" id="lastname"  maxlength="30" class="valid">
                                         
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-text">
                                             <label>* Tên</label>
                                             <input
                                             required 
                                             data-pristine-required-message="Không được để trống"   

                                              type="text" value="<?= $informationUser["firstname"] ?>"  name="firstname" id="firstname" value="Ba" maxlength="30">
                                             <span class="err_firstname" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-radio">
                                             <p style="width:100%;">* Giới tính</p>
                                             <div class="gender">
                                                <input <?php if($informationUser["gender"]=="1") {echo 'checked';}  ?>  type="radio" id="gender_m" value="1" checked="checked" name="gender">
                                                <label for="gender_m">Nam</label>
                                             </div>
                                             <div class="gender">
                                                <input <?php if($informationUser["gender"]=="2") {echo 'checked';}  ?> type="radio" id="gender_f" value="2" name="gender">
                                                <label for="gender_f">Nữ</label>
                                             </div>
                                             <div class="gender">
                                                <input <?php if($informationUser["gender"]=="3") {echo 'checked';}  ?> type="radio" id="gender_other" value="3" name="gender">
                                                <label for="gender_other">Khác</label>
                                             </div>
                                             <span class="err_gender" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-birthday">
                                             <label for="">* Ngày sinh</label>
                                             <input 
                                             required 
                                             data-pristine-required-message="Nhập ngày tháng năm sinh của bạn"   
                                             type="text" value="<?=  formatDate($informationUser["date_of_birth"])?>" class="date_month" name="birthday" ">
                                 
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-text">
                                             <label for="">* Số điện thoại</label>
                                             <input 
                                             required 
                                             data-pristine-required-message="Vui lòng nhập số điện thoại"   
                                        
                                             
                                             type="text"  name="mobile" id="mobile" value="<?= !empty($informationUser["contact_number"])? $informationUser["contact_number"]: "" ?>" maxlength="20" style="margin-top:5px">
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
                                             <label for="">* Tình trạng hôn nhân</label>
                                             <select name="slMarritial">
                                             <option <?php 
                                                if($informationUser["marital_status"]==1)
                                                {echo 'selected';} 
                                               
                                               
                                               ?> value="1" >Độc thân</option>
                                                <option <?php if($informationUser["marital_status"]==2){echo 'selected';} ?>  value="2">Đã kết hôn</option>
                                             
                                             </select>
                                           
                                          </div>
                                       </div>
                                  
                                       <div class="col-md-6">
                                          <div class="form-group form-select">
                                             <label for="">* Tỉnh / Thành phố</label>
                                             <select 
                                            
                                             name="slcity" id="slcity" class="select-province-city" >                                      
                                                <option value="">Chọn</option>
                                              

                                             </select>
                                          
                                             <span class="err_slcity" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <!--id="areaDistrict"-->
                                          <div class="form-group form-select">
                                             <label for="">* Quận/huyện</label>
                                             <select
                                             required 
                                             data-pristine-required-message="Không được để trống"     
                                             name="sldistrict" id="sldistrict" class="select-district">
                                      
                                             </select>
                                             <span class="err_sldistrict" style="display:none"></span>
                                          </div>
                                       </div>
                                       
                                       <div class="col-md-6">
                                          <label for="">* Địa chỉ (Số nhà, Đường)</label>
                                          <div class="form-group form-text">
                                             <input
                                             required 
                                             data-pristine-required-message="Không được để trống"  
                                             type="text"  name="address" value="<?= !empty($informationUser["address"])? $informationUser["address"]: "" ?>">
                                         
                                          </div>
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                       <div class="button-save button-center">
                                       <!-- data-bs-dismiss="modal" -->
                                          <button name="personalInfoForm" class="btn-primary" type="submit">Lưu lại</button>
                                       </div>
                                    </div>
                                 </form>
                              
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="widget widget-14" id="widget-14">
                        <div class="widget-head">
                           <div class="cb-title-h3">
                              <div class="figure">
                                 <div class="image"><img src="./img/dash-board/i3.png" alt=""></div>
                                 <div class="figcaption">
                                    <h3>Mục tiêu nghề nghiệp</h3>
                                    <div class="status">
                                       <p>Không bắt buộc</p>
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
                                 <div class="link-edit"><a > <em class="material-icons">create</em><span>Thêm mới</span></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="no-content">
                              <p>Vui lòng thêm Mục tiêu nghề nghiệp</p>
                              <a href="javascript:;" ><em class="mdi mdi-plus-circle"></em><span>Thêm mới</span></a>
                           </div>
                        </div>
               
                        <div class="widget-body">
                           <div class="content">
                           </div>
                        </div>
                     </div>
                     <div class="widget widget-18" id="widget-18">
                        <div class="widget-head">
                           <div class="cb-title-h3">
                              <div class="figure">
                                 <div class="image"><img src="./img/dash-board/i5.png" alt=""></div>
                                 <div class="figcaption">
                                    <h3>Thông tin nghề nghiệp *</h3>
                                    <?php 
                       if(!empty($seeker_job_information) && $seeker_job_information["status"]==1 ){
                                echo " <div class='status success'>
                                     <p>Hoàn thành</p>
                                  </div>";
                       }
                       else{
                        echo " <div class='status error'>
                        <p>Chưa hoàn thành</p>
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
                                    <span>Chỉnh sửa</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <table>
                              <tbody>
                                     <tr>
                                    <td>Cấp bậc mong muốn</td>
                                    <td>
   <?php 
    
         if(!empty($seeker_job_information["position"])) { 
            echo $seeker_job_information["position"];
      }
   ?>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Mức lương</td>
                                    <td>
      <?php  if(isset($seeker_job_information["salary_from"])) {
        echo $seeker_job_information["salary_from"]."-".$seeker_job_information["salary_to"] ." VND";
                                 }
                                  ?>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Hình thức làm việc</td>
                                    <td>
                                       <?php if(!empty($seeker_type)){
                                         $valueStr = '';
                                          foreach ($seeker_type as $value) {
                                       $valueStr .= " $value[job_type] " . ',';
                                          }
                                   $valueStr = rtrim($valueStr, ',');
                                          echo $valueStr;
                                       }  
                                     
                                  
                                    ?></td>
                                 </tr>
     <?php if(isset($seeker_job_information["work_from_home"])==1) { ?>
                                    <tr>
                                    <td>Phương thức công việc</td>
                                    <td>
                                    Work from home
                                    </td>
                                 </tr> 
                                    <?php }?>

                                    
                                    
                                 <tr>
                                    <td>Ngành nghề</td>
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
                                    <td>Nơi làm việc</td>
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
                                    <h2 class="modal-title"    >Thông tin nghề nghiệp</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    <form name="desired-form" id="desired-form" action="my_profile/desiredJobForm" method="post">
                                       <div class="form-group row">
                                          <div class="col-lg-4">
                                             <label for="">Cấp bậc mong muốn<span>*</span></label>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="select-group">
                                                <select name="level_id" id="level_id">
                                                   <option value="" style="display:none;" selected>Chọn</option>
                                                 
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
                                             <label for="">Mức lương mong muốn<span>*</span></label>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="form-salary">
                                            
                                                <div class="form-select form-text">
                                                   <input placeholder="Từ *"off" type="text" size="12" name="salary_from" id="salary_from" required  data-pristine-required-message="Không được để trống"  maxlength="14" value="<?= !empty($seeker_job_information)? $seeker_job_information["salary_from"] : "" ?>" >
                                                </div>
                                                <div class="form-select form-text">
                                        
                                                   <input  placeholder="Đến *"autocomplete="off" type="text"  size="12" name="salary_to" id="salary_to" maxlength="14" required  data-pristine-required-message="Không được để trống" 
                                                   value="<?= !empty($seeker_job_information)?$seeker_job_information["salary_to"] : "" ?>"
                                                   >
                                                </div>
                                             </div>
                                             <div class="form-error"><span class="err_salary_unit" style="display:none"></span></div>
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <div class="col-lg-4">
                                             <label for="">Hình thức làm việc<span>*</span></label>
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
                                                      <label for="chkResumeType_1">Nhân viên chính thức</label>
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
                                                      <label for="chkResumeType_2">Bán thời gian</label>
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
                                                      <label for="chkResumeType_3">Thời vụ - Nghề tự do </label>
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
                                                      <label for="chkResumeType_4">Thực tập</label>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="form-error"><span class="err_chkResumeType_1" style="display:none"></span></div>
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <div class="col-lg-4">
                                             <label for="">Phương thức công việc</label>
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
                                             <label for="">Ngành nghề</label>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="form-select-chosen">
                                                <select multiple class="chosen-select-max-three" name="INDUSTRY_ID[]" id="INDUSTRY_ID" data-placeholder="Ngành nghề">
                                  
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
                                             <label for="">Nơi làm việc mong muốn<span>*</span></label>
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
                                                               <option value="" disabled="disabled">Chọn</option>
                                                               <option value="4" disabled="disabled">Hà Nội</option>
                                                               <option value="8">Hồ Chí Minh</option>
                                                               <option value="76">An Giang</option>
                                                               <option value="64">Bà Rịa - Vũng Tàu</option>
                                                               <option value="781">Bạc Liêu</option>
                                                               <option value="281">Bắc Cạn</option>
                                                               <option value="240">Bắc Giang</option>
                                                               <option value="241">Bắc Ninh</option>
                                                               <option value="75">Bến Tre</option>
                                                               <option value="650">Bình Dương</option>
                                                               <option value="56">Bình Định</option>
                                                               <option value="651">Bình Phước</option>
                                                               <option value="62">Bình Thuận</option>
                                                               <option value="78">Cà Mau</option>
                                                               <option value="26">Cao Bằng</option>
                                                               <option value="71">Cần Thơ</option>
                                                               <option value="50">Dak Lak</option>
                                                               <option value="1042">Dak Nông</option>
                                                               <option value="511">Đà Nẵng</option>
                                                               <option value="900">Điện Biên</option>
                                                               <option value="61">Đồng Nai</option>
                                                               <option value="67">Đồng Tháp</option>
                                                               <option value="59">Gia Lai</option>
                                                               <option value="19">Hà Giang</option>
                                                               <option value="351">Hà Nam</option>
                                                               <option value="39">Hà Tĩnh</option>
                                                               <option value="320">Hải Dương</option>
                                                               <option value="31">Hải Phòng</option>
                                                               <option value="780">Hậu Giang</option>
                                                               <option value="18">Hòa Bình</option>
                                                               <option value="321">Hưng Yên</option>
                                                               <option value="58">Khánh Hòa</option>
                                                               <option value="77">Kiên Giang</option>
                                                               <option value="60">Kon Tum</option>
                                                               <option value="23">Lai Châu</option>
                                                               <option value="25">Lạng Sơn</option>
                                                               <option value="20">Lào Cai</option>
                                                               <option value="63">Lâm Đồng</option>
                                                               <option value="72">Long An</option>
                                                               <option value="350">Nam Định</option>
                                                               <option value="38">Nghệ An</option>
                                                               <option value="30">Ninh Bình</option>
                                                               <option value="68">Ninh Thuận</option>
                                                               <option value="210">Phú Thọ</option>
                                                               <option value="57">Phú Yên</option>
                                                               <option value="52">Quảng Bình</option>
                                                               <option value="510">Quảng Nam</option>
                                                               <option value="55">Quảng Ngãi</option>
                                                               <option value="33">Quảng Ninh</option>
                                                               <option value="53">Quảng Trị</option>
                                                               <option value="79">Sóc Trăng</option>
                                                               <option value="22">Sơn La</option>
                                                               <option value="66">Tây Ninh</option>
                                                               <option value="36">Thái Bình</option>
                                                               <option value="280">Thái Nguyên</option>
                                                               <option value="37">Thanh Hóa</option>
                                                               <option value="54">Thừa Thiên- Huế</option>
                                                               <option value="73">Tiền Giang</option>
                                                               <option value="74">Trà Vinh</option>
                                                               <option value="27">Tuyên Quang</option>
                                                               <option value="70">Vĩnh Long</option>
                                                               <option value="211">Vĩnh Phúc</option>
                                                               <option value="29">Yên Bái</option>
                                                            </select>
                                                         </div>
                                                         <div class="form-error"><span class="err_LOCATION_ID" style="display:none"></span></div>
                                                      </div>
                                                      <div class="col-2 col-cus-1-7">
                                                         <label for="">Quận</label>
                                                      </div>
                                                      <div class="col-6">
                                                         <div class="form-select-chosen form-select-district">
                                                            <select name="DISTRICT_ID[]" id="select_district_id_1" data-placeholder="Quận" class="chosen-select-max-three" multiple style="display: none;">
                                                            </select>
                                                            <div class="chosen-container chosen-container-multi" title="" id="select_district_id_1_chosen" style="width: 0px;">
                                                               <ul class="chosen-choices">
                                                                  <!-- <li class="search-field">
                                                                     <input class="chosen-search-input default" type="search" autocomplete="off" value="Quận" style="width: 62.3625px;">
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
                                                         <div class="delete"><a onclick="return RemoveRowLoc(this, 1);"> <em class="material-icons">highlight_off</em></a></div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="work-popup-item ">
                                                   <div class="row">
                                                      <div class="col-4">
                                                         <div class="select-group">
                                                            <select name="LOCATION_ID[]" class="" id="select_location_id_2" data-id="#select_district_id_2">
                                                               <option value="" disabled="disabled">Chọn</option>
                                                               <option value="4" disabled="disabled">Hà Nội</option>
                                                               <option value="8">Hồ Chí Minh</option>
                                                               <option value="76">An Giang</option>
                                                               <option value="64">Bà Rịa - Vũng Tàu</option>
                                                               <option value="781">Bạc Liêu</option>
                                                               <option value="281">Bắc Cạn</option>
                                                               <option value="240">Bắc Giang</option>
                                                               <option value="241">Bắc Ninh</option>
                                                               <option value="75">Bến Tre</option>
                                                               <option value="650">Bình Dương</option>
                                                               <option value="56">Bình Định</option>
                                                               <option value="651">Bình Phước</option>
                                                               <option value="62">Bình Thuận</option>
                                                               <option value="78">Cà Mau</option>
                                                               <option value="26">Cao Bằng</option>
                                                               <option value="71">Cần Thơ</option>
                                                               <option value="50">Dak Lak</option>
                                                               <option value="1042">Dak Nông</option>
                                                               <option value="511">Đà Nẵng</option>
                                                               <option value="900">Điện Biên</option>
                                                               <option value="61">Đồng Nai</option>
                                                               <option value="67">Đồng Tháp</option>
                                                               <option value="59">Gia Lai</option>
                                                               <option value="19">Hà Giang</option>
                                                               <option value="351">Hà Nam</option>
                                                               <option value="39">Hà Tĩnh</option>
                                                               <option value="320">Hải Dương</option>
                                                               <option value="31">Hải Phòng</option>
                                                               <option value="780">Hậu Giang</option>
                                                               <option value="18">Hòa Bình</option>
                                                               <option value="321">Hưng Yên</option>
                                                               <option value="58">Khánh Hòa</option>
                                                               <option value="77">Kiên Giang</option>
                                                               <option value="60">Kon Tum</option>
                                                               <option value="23">Lai Châu</option>
                                                               <option value="25">Lạng Sơn</option>
                                                               <option value="20">Lào Cai</option>
                                                               <option value="63">Lâm Đồng</option>
                                                               <option value="72">Long An</option>
                                                               <option value="350">Nam Định</option>
                                                               <option value="38">Nghệ An</option>
                                                               <option value="30">Ninh Bình</option>
                                                               <option value="68">Ninh Thuận</option>
                                                               <option value="210">Phú Thọ</option>
                                                               <option value="57">Phú Yên</option>
                                                               <option value="52">Quảng Bình</option>
                                                               <option value="510">Quảng Nam</option>
                                                               <option value="55">Quảng Ngãi</option>
                                                               <option value="33">Quảng Ninh</option>
                                                               <option value="53">Quảng Trị</option>
                                                               <option value="79">Sóc Trăng</option>
                                                               <option value="22">Sơn La</option>
                                                               <option value="66">Tây Ninh</option>
                                                               <option value="36">Thái Bình</option>
                                                               <option value="280">Thái Nguyên</option>
                                                               <option value="37">Thanh Hóa</option>
                                                               <option value="54">Thừa Thiên- Huế</option>
                                                               <option value="73">Tiền Giang</option>
                                                               <option value="74">Trà Vinh</option>
                                                               <option value="27">Tuyên Quang</option>
                                                               <option value="70">Vĩnh Long</option>
                                                               <option value="211">Vĩnh Phúc</option>
                                                               <option value="29">Yên Bái</option>
                                                            </select>
                                                         </div>
                                                         <div class="form-error"><span class="err_LOCATION_ID" style="display:none"></span></div>
                                                      </div>
                                                      <div class="col-2 col-cus-1-7">
                                                         <label for="">Quận</label>
                                                      </div>
                                                      <div class="col-6">
                                                         <div class="form-select-chosen form-select-district">
                                                            <select name="DISTRICT_ID[]"id="select_district_id_2" class="chosen-select-max-three"> 
                                                            </select>
                                                            <div class="chosen-container chosen-container-multi" title="" id="select_district_id_2_chosen" style="width: 0px;">
                                                               <ul class="chosen-choices">
                                                                  <!-- <li class="search-field">
                                                                     <input class="chosen-search-input default" type="search" autocomplete="off" value="Quận" style="width: 62.3625px;">
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
                                             <!-- <div class="add-work-popup"><a onclick="addListWorkPopup();"> <em class="material-icons">add </em><span>Thêm</span></a></div> -->
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <div class="col-lg-4">
                                             <label for="">Phúc lợi mong muốn</label>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="form-select-chosen">
                                                <select multiple search="true" name="BENEFIT_ID[]" id="BENEFIT_ID" class="chosen-select-max-three" data-placeholder="Chọn" title="Chọn" >
                                                   
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
                                             <button class="btn-gradient" type="submit">Lưu Lại</button>
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
                                    <h3>Kinh nghiệm làm việc *</h3>
                                       <?php 
                              
                       if(!empty($seeker_experience_detail) && $seeker_experience_detail[0]["status"]==1 ){
                                echo " <div class='status success'>
                                     <p>Hoàn thành</p>
                                  </div>";
                       }
                       else{
                        echo " <div class='status error'>
                        <p>Chưa hoàn thành</p>
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
                                 <div class="link-add"><a data-bs-toggle="modal" data-bs-target="#kinhnghiemlamviec" title="Thêm mới"> <em class="material-icons">add</em><span>Thêm mới</span></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                        <div class="modal fade " id="year_of_experience" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog" >
                           <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h2 class="modal-title">Kinh nghiệm làm việc</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                 <form name="frm_Experience" id="frm_Experience">
         <div class="form-group row">
            <div class="col-lg-4">
               <label for="">Số năm kinh nghiệm</label>
            </div>
            <div class="col-lg-8">
               <div class="input-group">
                  <input type="number" class="exp-yet valid" maxlength="2" name="yearOfExperience" id="yearOfExperience" min="1" max="55" value="0" >
               </div>
               <div class="form-error"><span class="err_yearOfExperience" style="display: none;"></span></div>
               <div class="form-group form-checkbox mt-1">
                  <input type="checkbox" id="not_experence" name="not_experience" checked="checked" value="1" style="margin-right: 5px;" class="valid">
                  <label class="no-exp-yet" for="not_experence">Chưa có kinh nghiệm</label>
               </div>
            </div>
         </div>
         <div class="form-group row">
            <div class="col-lg-4">
               <label for="">Cấp bậc hiện tại</label>
            </div>
            <div class="col-lg-8">
               <div class="select-group">
                  <select name="levelcurrent_id" id="levelcurrent_id" style="float: left; width: 200px; margin-bottom:5px">
                     <option value="">Chọn</option>
                     <option value="1">Sinh viên/ Thực tập sinh</option>
                     <option value="2">Mới tốt nghiệp</option>
                     <option value="3">Nhân viên</option>
                     <option value="4">Trưởng nhóm / Giám sát</option>
                     <option value="5">Quản lý</option>
                     <option value="6">Phó Giám đốc</option>
                     <option value="7">Giám đốc </option>
                     <option value="8">Tổng giám đốc</option>
                     <option value="9">Chủ tịch / Phó Chủ tịch</option>
                  </select>
               </div>
               <div class="form-error"><span class="err_levelcurrent_id" style="display:none"></span></div>
            </div>
         </div>
         <div class="form-group form-button">
            <div class="button-save button-center">
        <button class="btn-gradient" type="submit">Lưu Lại</button>
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
                                       <td>Số năm kinh nghiệm</td>
                                       <td id="txt-experience">1 </td>
                                       <td>
                       <div class="link-edit" ><a data-bs-target="#year_of_experience" data-bs-toggle="modal"> <em class="material-icons">create</em></a></div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>Cấp bậc hiện tại</td>
                                       <td id="cbprofile_levelpresent">Sinh viên/ Thực tập sinh</td>
                                       <td>
                                          <div class="link-edit" ><a  data-bs-target="#year_of_experience" data-bs-toggle="modal"> <em class="material-icons">create</em></a></div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <?php if($count_exp==0) {?>
                              <div class="no-content">
                              <p>Bạn hãy thêm kinh nghiệp làm việc của mình để nhà tuyển dụng tham khảo</p>
                              <a data-bs-target="#kinhnghiemlamviec" data-bs-toggle="modal"><em class="mdi mdi-plus-circle"></em><span>Thêm mới</span></a>
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
                                          <p><?= $item["experCurrent"]==0 ? $item["start_job"].'-'.$item["end_job"] : $item["start_job"].'-'."Hiện tại" ?> </p>
                                       </div>
                                    </div>
                                    <div class="right-head">
      
                                       <ul class="list-action">
                                          <li class="edit-link"><a href="javascript:void(0);" title="Chỉnh sửa" onclick="show_frmExperience(<?= $item['id']?>);"> <em class="material-icons">create</em></a></li>
                                          <li class="delete">
                                             <form id="delete_resume_experience" action="my_profile/delete_resume_experience" method="post"> 
                                                <input type="hidden" name="rexp_id" value="<?= $item['id'] ?>">
                                             <button onclick="deleteExperience(<?= $item['id'] ?>)" style="background-color:transparent;" title="Xóa" type="button"> 
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
               <h2 class="modal-title">Kinh Nghiệm Làm Việc</h2>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
         <form name="experience-form" id="experience-form" method="post"                  
         action="my_profile/insert_resume_experience">
      <input type="hidden" value="0" name="rexp_id" id="rexp_id">
      <div class="form-group row">
         <div class="col-lg-3 col-xl-3">
            <label for="">Vị trí / Chức danh<span>*</span></label>
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
            <label for="">Công ty<span>*</span></label>
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
            <label for="">Phương thức công việc</label>
         </div>
         <div class="col-lg-9 col-xl-9">
            <div class="select-group">
               <select name="rexp_worktype">
                  <option value="">Chọn</option>
               
                  <?php foreach ($job_type as $item): ?>
                     <option value="<?= $item["id"] ?>"><?= $item["job_type"] ?></option>
               <?php  endforeach;?>
               </select>
            </div>
         </div>
      </div>
      <div class="form-group row">
         <div class="col-lg-3 col-xl-3">
            <label for="">Thời gian làm việc</label>
         </div>
         <div class="col-lg-9 col-xl-9">
            <div class="form-work-time">
               <div class="start-date">
                  <div class="select-group">
                  <select name="rexp_month_start">
                  <option value="">Tháng</option>
                  <?php foreach(range(1, 12 ) as $month) { ?>
                     <option value="<?= $month ?>"><?= $month ?></option>
                  <?php }?>

               </select>
                  </div>
                  <div class="select-group">
                  <select name="rexp_year_start">
                  <option value="">Năm</option>
                  <option value="2022">2022</option>
                     <?php foreach(range((int)date("Y"), 1970 ) as $year) { ?>
                     <option value="<?= $year ?>"><?= $year ?></option>
                  <?php }?>
               </select>
                  </div>
               </div>
               <div class="to"><span>Đến </span></div>
               <div class="end-date">
                  <div class="select-group">
                     <select name="rexp_month_end">
                     <option value="">Tháng</option>
                     <?php foreach(range(1, 12 ) as $month) { ?>
                     <option value="<?= $month ?>"><?= $month ?></option>
                  <?php }?>
                     </select>
                  </div>
                  <div class="select-group">
                  <select name="rexp_year_end">
                  <option value="">Năm</option>
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
                     <label for="cboExperCurrent">Hiện nay</label>
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
            <label for="">Mô tả công việc</label>
         </div>
         <div class="col-lg-9 col-xl-9">
            <div class="textarea-group">
               <textarea name="rexp_workdesc" rows="3" class="form-control" placeholder="Vui lòng nhập tối đa không quá 4.000 ký tự" maxlength="4000"></textarea>
            </div>
            <div class="form-error">
               <span class="err_rexp_workdesc" style="display:none"></span>
            </div>
         </div>
      </div>
      <div class="form-group form-button">
         <div class="button-save button-center">
            <button class="btn-gradient" type="submit">Lưu Lại</button>
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
                                    <h3>Học vấn *</h3>
                                    <div class="status error">
                                       <p>Chưa hoàn thành</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="right-action">
                                 <div class="tips p1" onclick="openTipSlide('tip-education')">
                                    <div class="icon">
                                       <em class="mdi mdi-lightbulb"></em>
                                    </div>
                                    <p>Tips</p>
                                 </div>
                                 <div class="link-add"><a href="javascript:void(0)" " title=" Thêm mới"> <em class="material-icons">add</em><span>Thêm mới</span></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="no-content">
                              <p>Nhập thông tin học vấn của bạn</p>
                              <a href="javascript:void(0)" " title=" Thêm mới"><em class="mdi mdi-plus-circle"></em><span>Thêm mới</span></a>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="experience">
                              <table>
                                 <tbody>
                                    <tr>
                                       <td>Bằng cấp cao nhất</td>
                                       <td>
                                          <div class="box-edit-degree" id="cbprofile_degree_name">
                                             Trung học
                                             <div class="link-edit link-highest-degree"><a > <em class="material-icons">create</em></a></div>
                                          </div>
                                          <div class="highest-degree">
                                             <div class="select-group">
                                                <form id="resume-degree-form">
                                                   <select name="degree" id="degree">
                                                      <option value="">Chọn</option>
                                                      <option value="0">Chưa tốt nghiệp</option>
                                                      <option value="1" selected="selected">Trung học</option>
                                                      <option value="2">Trung cấp</option>
                                                      <option value="3">Cao đẳng</option>
                                                      <option value="4">Đại học</option>
                                                      <option value="5">Sau đại học</option>
                                                      <option value="6">Khác</option>
                                                   </select>
                                                </form>
                                             </div>
                                             <div class="link-save"> <a ><em class="material-icons">save</em>Lưu Lại</a></div>
                                          </div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div class="sticker">
                              <ul class="list-sticker">
                              </ul>
                           </div>
                        </div>
                     </div>
                 
                    
                
                   
                 
                     <div class="widget widget-20" id="widget-20">
                        <div class="widget-head">
                           <div class="cb-title-h3">
                              <div class="figure">
                                 <div class="image"><img src="./img/dash-board/i8.png" alt=""></div>
                                 <div class="figcaption">
                                    <h3>Người tham khảo</h3>
                                    <div class="status default">
                                       <p>Không bắt buộc</p>
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
                                 <div class="link-add"><a > <em class="material-icons">add</em><span>Thêm mới</span></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="no-content">
                              <p>Vui lòng thêm thông tin người tham khảo</p>
                              <a ><em class="mdi mdi-plus-circle"></em><span>Thêm mới</span></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-xl-3 main-menu">
                     <div class="menu-shortchut">
                        <div class="list-button">
                           <ul>
                              <li><a class="share-profile" ><em class="mdi mdi-share"></em><span>Chia sẻ hồ sơ</span> <span class="new-label"> New </span> </a></li>
                              <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/changetemplate"> <em class="material-icons">edit</em><span>Chỉnh Mẫu Hồ Sơ</span></a></li>
                              <li>
                                  <a  data-bs-toggle="modal"  data-bs-target="#subCV"  id="btn_view_cbprofile">
                                     <em class="material-icons">remove_red_eye</em>
                              <span>Xem CV Template</span></a>
                           </li>
                              <li id="btn_download" style="display:none"> <a > <em class="material-icons">get_app</em><span>Tải hồ sơ</span></a>
                              </li>
                              <li><a class="hidden-info" ><em class="fa fa-eye-slash"></em><span>Ẩn thông tin</span></a></li>
                           </ul>
                        </div>
                        
                        <div class="head-menu">
                           <div class="name-shortchut"><a class="active" >Careerbuilder Profile</a></div>
                           <div class="toggle-menu"><em class="material-icons">list</em></div>
                        </div>
                        <ul class="list-shortchut">
                           <li><a class="active" href="#widget-11">Careerbuilder Profile</a></li>
                           <li><a href="#t-resume-section">Tiêu đề hồ sơ</a></li>
                           <li><a href="#personalinfo-section">Thông tin cá nhân</a></li>
                           <li><a href="#widget-14">Mục tiêu nghề nghiệp</a></li>
                           <li><a href="#widget-18">Thông tin nghề nghiệp</a></li>
                           <li><a href="#widget-15">Kinh nghiệm làm việc</a></li>
                           <li><a href="#widget-16">Học vấn</a></li>
                           <li><a href="#certificate-section">Chứng chỉ khác</a></li>
                           <li><a href="#language-section">Ngôn ngữ</a></li>
                           <li><a href="#widget-17">Kỹ năng chuyên môn</a></li>
                           <li><a href="#widget-19">Thành tích nổi bật</a></li>
                           <li><a href="#other-activity-section">Hoạt động khác</a></li>
                           <li><a href="#widget-20">Người tham khảo</a></li>
                        </ul>
                     </div>
                   
                  </div>

                  <div class="modal fade " id="subCV" data-bs-toggle="modal" tabindex="-1" >
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h2 class="modal-title"    >Tiêu đề hồ sơ</h2>
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
                           <li class="address2"><i class="fa fa-home"></i><span class="txt">đường 7, Huyện Lộc Ninh, Bình Phước, Việt Nam</span></li>
                        </ul>
                     </div>
                     </div>
                     <div class="col-sm-12 col border_orange"style=" padding:8px 0; ">
                        <h3>Thông tin cá nhân</h3>
                        <ul class="contact">
                           <li class="flex">
                              <label>Giới tính</label>
                              <div class="annou">:  <?php 
                            if  (isset($informationUser["gender"])){
         echo $informationUser["gender"]==1 ? "Nam" : $informationUser["gender"]==2 ? "Nữ": "Khác";  
                            }   
                              
                              ?> </div>
                           </li>
                           <li class="flex">
                              <label>Ngày sinh</label>
                              <div class="annou">:<?= !empty($informationUser["date_of_birth"]) ?formatDate($informationUser["date_of_birth"]): ""?> </div>
                           </li>
                           <li class="flex">
                              <label>Tình trạng hôn nhân</label>
                              <div class="annou">:  <?= $informationUser["marital_status"]==1 ? "Độc thân"  :"Đã kết hôn" ?></div>
                           </li>
                           <li class="flex">
                              <label>Quốc tịch</label>
                              <div class="annou">: Người Việt Nam</div>
                           </li class="flex">
                           <li class="flex">
                              <label>Quốc gia</label>
                              <div class="annou">: Việt Nam</div>
                           </li>
                        </ul>
                     </div>      
                  <div class="col-sm-12 col border_orange"style=" padding:5px 0;">
                        <h3>Kỹ năng</h3>
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
                              <label>tốt</label>
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
                     </div>
                  <div class="col-md-12 col border_orange" style=" padding:8px 0; ">
                     <h3><span>Công Việc Mong Muốn</span></h3>
                     <div class="expected-job">
                        <ul class="contact">
                           <li><label>Cấp bậc </label> :<?= !empty($seeker_job_information["position"]) ? $seeker_job_information["position"] : "" ?></li>
                           <li class="dbl-line"><label>Mức lương</label><span>:&nbsp;</span><span class="txt">				  				
                            <?=  !empty($seeker_job_information["salary_from"])? $seeker_job_information["salary_from"].'-'.$seeker_job_information["salary_to"]." VND" : "" ?>
                              </span>
                           </li>
                           <li class="dbl-line"><label>Hình thức công việc</label><span>:&nbsp;</span><span class="txt">   
                              <?php if(!empty($seeker_type)){
                                         $valueStr = '';
                                          foreach ($seeker_type as $value) {
                                       $valueStr .= " $value[job_type] " . ',';
                                          }
                                   $valueStr = rtrim($valueStr, ',');
                                          echo $valueStr;
                                       }  
                                     
                                  
                                    ?>
                                    </span></li>
                           <li class="dbl-line">
                              <label>Ngành nghề</label><span>:&nbsp;</span><span class="txt">
                         
                                 <?php      
                                
                                if(!empty($informationProfession)){
                                 $valueStr = '';
                                 foreach ($informationProfession as $value) {
                              $valueStr .= " $value[profession_name] " . ',';
                                 }
                          $valueStr = rtrim($valueStr, ',');
                                 echo $valueStr;
                              }  
                              
                             ?></span></li>
                           <li class="dbl-line"><label>Nơi làm việc</label><span>:&nbsp;</span><span class="txt"> Hà Nội - Huyện Thanh Trì/Huyện Ba Vì
                              </span>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-12 col" style=" padding:8px 0; ">
                     <h3>Kinh Nghiệm Làm Việc</h3>
                     <div class="content_fck yearofexp">
                        <p>Số năm kinh nghiệm: 1  </p>
                        <p>Cấp bậc hiện tại: Sinh viên/ Thực tập sinh</p>
                     </div>
                     <div class="exp text-edt">
                        <div class="title">1/2006 - Hiện tại 
                           :
                           front end - fpt
                           - Nhân viên chính thức
                        </div>
                        <div class="content_fck">
                           <p>tuyetv oi</p>
                        </div>
                     </div>
                  </div>
                        
               
                  <div class="col-sm-12 col border_orange_top"style=" padding:8px 0;">
                     <h3>Học Vấn</h3>
                        <div class="text-edt degree-name">Bằng cấp cao nhất: Trung học</div>
                        <div class="exp text-edt">
                           <div class="title">Không yêu cầu bằng cấp - fpt </div>
                           <div class="content_fck">
                              <p>chưa tốt nghiệp</p>
                           </div>
                        </div>
                  </div>
                 
               
                 <div style=" padding:8px 0;" class="col-sm-12 col border_orange_top ">
                  <h3>Thông Tin Tham Khảo</h3>
                     <div class="text-edt">
                        <div class="title">nguyen nhat minh</div>
                        <div class="content_fck">
                           <p>leader, fpt</p>
                           <p>Phone: 0839704567</p>
                           <p>Email: aolang69@gmail.com</p>
                        </div>
                     </div>
                  </div>
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
                  <h3>Ẩn một số thông tin</h3>
               </div>
               <div class="body-modal main-form">
                  <form action="my_profile/UpdateProfile" name="frmConfident" id="frmConfident" method="POST" class="form-horizontal">
                     <input type="hidden" name="r_id" value="0" />
                     <input type="hidden" name="type_id" value="profile" />
                     <div class="line">
                        <p>Thông tin cá nhân</p>
                     </div>
                     <div class="row data-list">
                        <div class="col-md-6">
                           <div class="form-group form-checkbox">
                              <input type="checkbox" id="chkConfidential_6" name="chkConfidential[6]" value="1">
                              <label for="chkConfidential_6">Tình trạng hôn nhân</label>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group form-checkbox">
                              <input type="checkbox" id="chkConfidential_0" name="chkConfidential[0]" value="1" checked="checked">
                              <label for="chkConfidential_0">Ẩn Họ và tên</label>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group form-checkbox">
                              <input type="checkbox" id="chkConfidential_1" name="chkConfidential[1]" value="1">
                              <label for="chkConfidential_1">Địa chỉ (Số nhà, Đường)</label>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group form-checkbox">
                              <input type="checkbox" id="chkConfidential_3" name="chkConfidential[3]" value="1">
                              <label for="chkConfidential_3">Số điện thoại</label>
                           </div>
                        </div>
                     </div>
                     <div class="line">
                        <p>Thông tin nghề nghiệp</p>
                     </div>
                     <div class="row data-list">
                        <div class="col-md-6">
                           <div class="form-group form-checkbox">
                              <input type="checkbox" id="chkConfidential_7" name="chkConfidential[7]" value="1">
                              <label for="chkConfidential_7">Hình thức làm việc</label>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group form-checkbox">
                              <input type="checkbox" id="chkConfidential_9" name="chkConfidential[9]" value="1">
                              <label for="chkConfidential_9">Mức lương</label>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group form-checkbox">
                              <input type="checkbox" id="chkConfidential_8" name="chkConfidential[8]" value="1">
                              <label for="chkConfidential_8">Phúc lợi mong muốn</label>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="edit-db-work-experience-1 edit-modal-dashboard" style="display:none">
               <div class="modal-title">
                  <h3>Kinh nghiệm làm việc</h3>
               </div>
               <div class="modal-body">
                  <form method="post" name="frm_Experience" id="frm_Experience">
                     <div class="form-group row">
                        <div class="col-lg-4">
                           <label for="">Số năm kinh nghiệm</label>
                        </div>
                        <div class="col-lg-8">
                           <div class="input-group">
                              <input type="number" class="exp-yet" maxlength="2" name="yearOfExperience" id="yearOfExperience" min="1" max="55" value="1">
                           </div>
                           <div class="form-error"><span class="err_yearOfExperience" style="display:none"></span></div>
                           <div class="form-group form-checkbox mt-1">
                              <input type="checkbox" id="not_experence" name="not_experence" value="1" style="margin-right: 5px;">
                              <label class="no-exp-yet" for="not_experence">Chưa có kinh nghiệm</label>
                           </div>
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-lg-4">
                           <label for="">Cấp bậc hiện tại</label>
                        </div>
                        <div class="col-lg-8">
                           <div class="select-group">
                              <select name="levelcurrent_id" id="levelcurrent_id" style="float: left; width: 200px; margin-bottom:5px">
                                 <option value="">Chọn</option>
                                 <option value="1" selected="selected">Sinh viên/ Thực tập sinh</option>
                                 <option value="2">Mới tốt nghiệp</option>
                                 <option value="3">Nhân viên</option>
                                 <option value="4">Trưởng nhóm / Giám sát</option>
                                 <option value="5">Quản lý</option>
                                 <option value="6">Phó Giám đốc</option>
                                 <option value="7">Giám đốc </option>
                                 <option value="8">Tổng giám đốc</option>
                                 <option value="9">Chủ tịch / Phó Chủ tịch</option>
                              </select>
                           </div>
                           <div class="form-error"><span class="err_levelcurrent_id" style="display:none"></span></div>
                        </div>
                     </div>
                     <div class="form-group form-button">
                        <div class="button-save button-center">
                           <button class="btn-gradient" type="submit"  >Lưu Lại</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div id="popup-modal" class="popup-modal intro-modal edit-modal-dashboard" style="display: none">
               <div class="modal-title">
                  <h3>TÍNH NĂNG "CHIA SẺ HỒ SƠ" ĐÃ SẴN SÀNG!</h3>
               </div>
               <div class="modal-body">
                  <div class="box-intro">
                     <div class="box-img">
                        <img src="https://static.careerbuilder.vn/themes/careerbuilder/images/cv-profile/banner_popup_share_profile.jpg">
                     </div>
                     <div class="text-intro">
                        <p>
                           Bạn đã sẵn sàng "khoe" thương hiệu cá nhân trên mọi nền tảng? Trải nghiệm ngay tính năng "Chia sẻ profile" đến bất cứ nơi đâu nhé!
                        </p>
                     </div>
                     <div class="action">
                        <label class="container-ckb">Không hiển thị lại
                        <input type="checkbox" name="ckb-1" id="sp_popup_chk">
                        <span class="checkmark"></span>
                        </label>
                        <button class="btn-close-modal btn-close-popup">
                        Đóng
                        </button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tips-modal" id="tip_cvsetting" style="display: none">
               <div class="head-modal">
                  <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                  <div class="title">
                     <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="cb-title-h3">
                                    <h3>Hồ sơ CareerBuilder 4</h3>
                                 </div>
                                 <div class="content">
                                    <p>Phông chữ trong CV phần nào thể hiện phong thái của bạn khi làm việc và Nhà tuyển dụng thường mong muốn được đọc các thông tin bạn đưa ra ở một cỡ chữ vừa phải, rõ ràng, không quá to cũng không quá nhỏ.
                                       Cỡ chữ gợi ý cho một CV chuẩn là tầm 12 đến 14 và bạn có thể kiểm tra thử bằng cách in CV ra trên khổ giấy A4 trước khi gửi đi ứng tuyển nhé.
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
                     <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                  </div>
               </div> 
               <button type="button" data-bs-dismiss="modal" aria-label="Close" class="fancybox-button fancybox-close-small" title="Close"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path></svg></button>
 
                                    </button>
                                 </div>

                                 <div class="modal-body" style="padding:0">
                                 <div class="tips-modal" >
            
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Tiêu đề hồ sơ:<br> Bạn nên để tiêu đề là vị trí bạn đang ứng tuyển hoặc muốn làm việc. Giúp Nhà tuyển dụng hiểu ngay vị trí mong muốn khi nhận hồ sơ của bạn.<br> Ví dụ: "Nhân viên kinh doanh" hoặc "Marketing
                              Manager"<br> Lưu ý: hãy điều chỉnh tiêu đề theo từng công việc ứng tuyển nhé!
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
                     <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Thông tin cá nhân:<br> - Hãy sử dụng địa chỉ email chuyên nghiệp phù hợp dùng cho công việc, hạn chế sử dụng email khó đọc hoặc dùng nhiều ký tự đặc biệt.<br> - Ảnh đại diện trên hồ sơ cũng như lần đầu tiên
                              tạo ấn tượng với Nhà tuyển dụng. Nên chọn ảnh đại diện chụp từ vai trở lên, có ánh sáng tốt, không gian hạn chế nhiều chi tiết, nên mặc trang phục công sở.<br> - Kiểm tra thông tin cá nhân để tránh trường hợp
                              Nhà Tuyển Dụng không liên hệ được
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
                     <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Mục tiêu nghề nghiệp: <br> - Hãy trình bày mục tiêu của bản thân một cách ngắn gọn, rõ ràng nhưng cũng thể hiện được mong muốn của bản thân đối với vị trí/ngành nghề mà bạn ứng tuyển.<br> - Trong trường hợp
                              bạn muốn nói thêm về sự nghiệp và kinh nghiệm làm việc trong quá khứ để nhà tuyển dụng có thể hình dung rõ hơn, thì cũng đừng quên trình bày thật tóm tắt nhé!
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
                     <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Thông tin nghề nghiệp:<br> Hãy điền thật đầy đủ và chính xác những thông tin này để Nhà tuyển dụng có được cái nhìn tổng quan về mong muốn của bạn.
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
                     <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Kinh nghiệm làm việc:<br> - Kinh nghiệm nên trình bày theo thứ tự gần nhất đến xa nhất.<br> - Nếu bạn có rất nhiều kinh nghiệm, hãy chọn lọc mô tả chi tiết những công việc có liên quan đến vị trí đang ứng tuyển<br> - Hãy đọc thật kĩ bản mô tả và yêu cầu công việc của Nhà tuyển dụng, sử dụng các từ khóa liên quan và trình bày những kinh nghiệm của bạn thân bằng những từ khóa đó, điều này sẽ giúp cho nhà tuyển dụng thấy
                              độ phù hợp của bạn với công việc hoặc vị trí đó. Tất nhiên hãy luôn đảm bảo sự trung thực trong quá trình viết.<br> - Đừng quên, thể hiện năng lực thông qua các thành tích của từng công việc bạn đã trải qua
                              nhé.
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
                     <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Học vấn: <br> - Hãy nêu ra những bậc học đạt được như cao đẳng, đại học, thạc sĩ,... <br> - Bạn cũng có thể kể thêm những khóa học ngắn hạn, khóa đào tạo chuyên nghiệp (có phí) mà bạn đã từng được học. <br> - Lưu ý chọn lọc những khóa học liên quan đến công việc mà bạn ứng tuyển thôi nhé
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
                     <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Chứng chỉ khác: <br> Bạn có thể chọn hiển thị hoặc không hiển thị mục này trên CV<br> - Chỉ nên đề cập đến những chứng chỉ liên quan đến công việc bạn đang ứng tuyển hoặc những chứng chỉ có kĩ năng nổi bật.<br> - Hãy điền đầy đủ các thông tin như ngày hoàn thành, tổ chức cấp.<br> - Bạn cũng có thể kể tên các hội thảo, hội nghị có uy tín mà bạn đã từng được tham dự
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
                     <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Kĩ năng khác:<br> - Nêu nổi bật 6 đến 8 kĩ năng liên quan nhất đến công việc bạn ứng tuyển<br> - Nếu bạn chưa có nhiều kĩ năng cứng, hãy xem xét tới việc nêu ra các kĩ năng mềm như: "kỹ năng thuyết trình", "kỹ
                              năng phân tích"<br> - Nên sử dụng những cụm từ ngắn, ưu tiên sử dụng những kĩ năng có nhắc đến trong bản mô tả công việc
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
                     <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Thành tích nổi bật:<br> Bạn có thể chọn hiển thị hoặc không hiển thị mục này trên CV<br> Phần này bạn có thể kể đến những dự án cá nhân có liên quan đến công việc bạn ứng tuyển, hãy cố gắng trình bày thật chi
                              tiết kèm theo những số liệu và kĩ năng, thành tích bạn đạt được từ dự án.
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
                     <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Người tham khảo:<br> Bạn có thể chọn hiển thị hoặc không hiển thị mục này trên CV<br> - "Người tham khảo" có thể là cấp trên hoặc người làm việc trực tiếp với bạn.<br> - Hãy luôn đảm bảo rằng "Người tham khảo"
                              biết rằng họ có thể sẽ nhận được cuộc gọi từ nhà tuyển dụng hiện tại của bạn.<br> - Nếu "Người tham khảo" có các chức danh công việc như Bác sĩ, Luật sư,... thì hãy để nó trước tên của họ. Trong trường hợp không
                              có, hãy để tín ngữ Ông/Bà/Mr/Ms/... trước tên của họ nhé!
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
                     <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Ngôn ngữ khác:<br> -Bạn nên liệt kê các ngôn ngữ bạn có thể sử dụng, bao gồm cả giấy chứng nhận về ngoại ngữ đó hoặc đề cập thêm về khoảng thời gian bạn du học, tham gia chường trình trao đổi ngôn ngữ để giúp
                              nhà tuyển dụng hình dung rõ thêm về khả năng ngôn ngữ của bạn. <br> -Nên liệt kê ngôn ngữ theo thứ tự từ thành thục nhất đến ít thành thục nhất
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
                     <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                  </div>
               </div>
               <div class="body-modal">
                  <div class="widget widget-12">
                     <div class="widget-body">
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              Những hoạt động khác:<br> Bạn có thể chọn hiển thị hoặc không hiển thị mục này trên CV<br> - Hãy liệt kê các hoạt động ngoại khóa mà bạn tham gia, đặc biệt là những hoạt động thể hiện khả năng lãnh đạo.<br> - Tóm tắt những thành tích và kết quả thu được từ hoạt động nhé
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
      <div class="back-drop"></div>
   </main>
