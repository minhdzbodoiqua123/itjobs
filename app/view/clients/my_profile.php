<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/my_profile.css" ?>">
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/global/css/multi-select-dropdown.css" ?>">

<script defer src="<?= _WEB_ROOT . "/app/public/assets/clients/js/my_profile.js" ?>"></script>


<body class="my-profile-page">

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
                                       <div class="image img-result hide"><img id="img_mem_avatar" class="cropped" src="https://images.careerbuilder.vn/jobseekers/20221105/6327211_1667640553_162916.png" alt=""></div>
                                    </div>
                                    <div class="mobile-show">
                                       <div class="cb-name">
                                          <h2>Một Ba</h2>
                                       </div>
                                       <div class="information">
                                          <div class="assistant" id="titleresume_17611557">Nhân viên nhân sự</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="action-profile">
                                    <ul>
                                       <li class="edit-pro">
                                          <input class="hidden" onchange="return ajaxFileUpload();" type="file" class="file" id="fileAvatar" name="fileAvatar">
                                          <a onclick="choose_file();" id="upload-image"><em class="material-icons">add_photo_alternate</em><span>Tải hình ảnh</span></a>
                                       </li>
                                       <li class="view-pro"><a onclick="removeAvarta();"> <em class="material-icons">highlight_off</em><span>Xóa hình ảnh</span></a></li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-lg-8 col-xl-9">
                                 <div class="cb-name">
                                    <h2 id="section_name">Một Ba</h2>
                                 </div>
                                 <div class="information">
                                    <div class="assistant">Nhân viên nhân sự</div>
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
                                    <div class="status success">
                                       <p>Hoàn thành</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="right-action">
                                 <div class="tips p1" onclick="openTipSlide('tip-t-resume')">
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
                                    <h2 class="modal-title" id="exampleModalLabel">Tiêu đề hồ sơ</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    <form autocomplete="on" name="t-resume-form" id="t-resume-form">
                                       <div class="form-group row">
                                          <div class="col-lg-4">
                                             <label for="">Tiêu đề hồ sơ<span>*</span></label>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="input-group">
                                                <input type="text" value="Nhân viên nhân sự" name="resume_title" id="resume_title" class="keyword" maxlength="400" autocomplete="off">
                                             </div>
                                             <div class="form-error"><span class="err_resume_title"></span></div>
                                          </div>
                                       </div>
                                       <div class="form-group form-button">
                                       </div>
                                       <div class="modal-footer">
                                          <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Lưu lại</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="content">
                              <p>Nhân viên nhân sự</p>
                           </div>
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
                                    <div class="status success">
                                       <p>Hoàn thành</p>
                                    </div>
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
                                    <a data-bs-toggle="modal" data-bs-target="#thongtincanhan" href="javascript:void(0);"> <em class="material-icons">create</em>
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
                                       <td>Một</td>
                                    </tr>
                                    <tr>
                                       <td>Tên</td>
                                       <td>Ba</td>
                                    </tr>
                                    <tr>
                                       <td>Ngày sinh</td>
                                       <td>31/12/2007</td>
                                    </tr>
                                    <tr>
                                       <td>Điện thoại</td>
                                       <td>0839704123</td>
                                    </tr>
                                    <tr>
                                       <td>Email</td>
                                       <td>aolang69@gmail.com</td>
                                    </tr>
                                    <tr>
                                       <td>Quốc tịch</td>
                                       <td>Người Việt Nam</td>
                                    </tr>
                                    <tr>
                                       <td>Tình trạng hôn nhân</td>
                                       <td>Độc thân</td>
                                    </tr>
                                    <tr>
                                       <td>Quốc gia</td>
                                       <td>Việt Nam</td>
                                    </tr>
                                    <tr>
                                       <td>Tỉnh/ Thành phố</td>
                                       <td>Hà Nội</td>
                                    </tr>
                                    <tr>
                                       <td>Quận/ Huyện</td>
                                       <td>Huyện Đan Phượng</td>
                                    </tr>
                                    <tr>
                                       <td>Địa chỉ</td>
                                       <td>đường 7, Huyện Đan Phượng, Hà Nội, Việt Nam</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="modal fade"  data-bs-backdrop="static" data-bs-keyboard="false"id="thongtincanhan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div style="width:730px;" class="modal-dialog modal-dialog-centered">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h2 class="modal-title" id="exampleModalLabel">Thông tin cá nhân</h2>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form action="my_profile/UpdateProfile" method="post" id="personalInfoForm" autocomplete="off">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group form-text">
                                             <label>* Họ và tên lót</label>
                                             <input type="text"  name="lastname" id="lastname" value="Một" maxlength="30" class="valid">
                                             <span class="err_lastname" style=""></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-text">
                                             <label>* Tên</label>
                                             <input type="text"  name="firstname" id="firstname" value="Ba" maxlength="30">
                                             <span class="err_firstname" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-radio">
                                             <p style="width:100%;">* Giới tính</p>
                                             <div class="gender">
                                                <input  type="radio" id="gender_m" value="0" checked="checked" name="gender">
                                                <label for="gender_m">Nam</label>
                                             </div>
                                             <div class="gender">
                                                <input type="radio" id="gender_f" value="1" name="gender">
                                                <label for="gender_f">Nữ</label>
                                             </div>
                                             <div class="gender">
                                                <input type="radio" id="gender_other" value="2" name="gender">
                                                <label for="gender_other">Khác</label>
                                             </div>
                                             <span class="err_gender" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-birthday">
                                             <label for="">* Ngày sinh</label>
                                             <input type="text" class="date_month" name="birthday" ">
                                             <div id=" date_time_picker" class="dtpicker-overlay dtpicker-mobile">
                                                <div class="dtpicker-bg">
                                                   <div class="dtpicker-cont">
                                                      <div class="dtpicker-content">
                                                         <div class="dtpicker-subcontent"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <span class="err_birthday" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-text">
                                             <label for="">* Số điện thoại</label>
                                             <input type="text"  name="mobile" id="mobile" value="0839704123" maxlength="20" style="margin-top:5px">
                                             <span class="err_mobile" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-text">
                                             <label for="">* Email</label>
                                             <input type="text"  id="email_member_edit" value="aolang69@gmail.com" readonly="readonly" disabled="disabled" style="margin-top:5px">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-select">
                                             <label for="">* Quốc tịch</label>
                                             <select name="slnationality" id="slnationality">
                                                <option value="1" selected="selected">Người Việt Nam</option>
                                                <option value="22">Người Bangladesh</option>
                                                <option value="14">Người Campuchia</option>
                                                <option value="4">Người Canada</option>
                                                <option value="25">Người Công gô</option>
                                                <option value="13">Người Hoa Kỳ</option>
                                                <option value="8">Người Hàn Quốc</option>
                                                <option value="24">Người Hồng Kong</option>
                                                <option value="169">Người Khác</option>
                                                <option value="19">Người Lào</option>
                                                <option value="9">Người Malaysia</option>
                                                <option value="21">Người Myanmar</option>
                                                <option value="2">Người Nhật</option>
                                                <option value="17">Người Qatar</option>
                                                <option value="23">Người Nước Ngoài</option>
                                                <option value="10">Người Singapore</option>
                                                <option value="5">Người Trung Quốc</option>
                                                <option value="16">Người Ukraine</option>
                                                <option value="3">Người Úc</option>
                                                <option value="20">Người Đài Loan</option>
                                             </select>
                                             <span class="err_slnationality" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-select">
                                             <label for="">* Tình trạng hôn nhân</label>
                                             <select name="slMarritial">
                                                <option value="1">Đã kết hôn</option>
                                                <option value="0" selected="selected">Độc thân</option>
                                             </select>
                                             <span class="err_slMarritial" style="display:none"></span>
                                          </div>
                                       </div>
                                  
                                       <div class="col-md-6">
                                          <div class="form-group form-select">
                                             <label for="">* Tỉnh / Thành phố</label>
                                             <select name="slcity" id="slcity" class="select-province-city" >
                                                <option value="">Chọn</option>
                                                <option value="4">Hà Nội</option>
                                           
                                             </select>
                                             <span class="err_slcity" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <!--id="areaDistrict"-->
                                          <div class="form-group form-select">
                                             <label for="">* Quận/huyện</label>
                                             <select name="sldistrict" id="sldistrict" class="select-district">
                                           
                                             </select>
                                             <span class="err_sldistrict" style="display:none"></span>
                                          </div>
                                       </div>
                                       
                                       <div class="col-md-6">
                                          <label for="">* Địa chỉ (Số nhà, Đường)</label>
                                          <div class="form-group form-text">
                                             <input type="text"  name="address" value="đường 7">
                                             <span class="err_address" style="display:none"></span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                       <div class="button-save button-center">
                                          <button name="personalInfoForm" class="btn-primary" data-bs-dismiss="modal" type="submit">Lưu lại</button>
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
                                 <div class="link-edit"><a onclick="editResumeObjective();"> <em class="material-icons">create</em><span>Thêm mới</span></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="no-content">
                              <p>Vui lòng thêm Mục tiêu nghề nghiệp</p>
                              <a href="javascript:;" onclick="editResumeObjective();"><em class="mdi mdi-plus-circle"></em><span>Thêm mới</span></a>
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
                                    <div class="status error">
                                       <p>Chưa hoàn thành</p>
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
                                    <td>Mức lương</td>
                                    <td>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Hình thức làm việc</td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td>Ngành nghề</td>
                                    <td>
                                       <ul>
                                          <li></li>
                                       </ul>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Nơi làm việc</td>
                                    <td>
                                       <ul>
                                          <li></li>
                                          <li></li>
                                       </ul>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="modal fade"  data-bs-backdrop="static" data-bs-keyboard="false" id="thongtingnghenghiep" tabindex="-1" " aria-hidden="true">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thông tin nghề nghiệp</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    <form name="desired-form" id="desired-form" data-an-count="2" data-an-form-handler="d8uwt">
                                       <div class="form-group row">
                                          <div class="col-lg-4">
                                             <label for="">Cấp bậc mong muốn<span>*</span></label>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="select-group">
                                                <select name="level_id" id="level_id">
                                                   <option value="">Chọn</option>
                                                   <option value="1">Sinh viên/ Thực tập sinh</option>
                                                   <option value="2">Mới tốt nghiệp</option>
                                                   <option value="3" selected="selected">Nhân viên</option>
                                                   <option value="4">Trưởng nhóm / Giám sát</option>
                                                   <option value="5">Quản lý</option>
                                                   <option value="6">Phó Giám đốc</option>
                                                   <option value="7">Giám đốc </option>
                                                   <option value="8">Tổng giám đốc</option>
                                                   <option value="9">Chủ tịch / Phó Chủ tịch</option>
                                                </select>
                                             </div>
                                             <div class="form-error"><span class="err_level_id" style="display:none"></span></div>
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <div class="col-lg-4">
                                             <label for="">Mức lương mong muốn<span>*</span></label>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="form-salary">
                                                <!-- <div class="form-select">
                                                   <select name="salary_unit" id="salary_unit">
                                                   <option value="ltt">Thỏa thuận</option>
                                                   <option value="vnd" selected="selected">VNĐ</option>
                                                   <option value="usd">USD</option>
                                                   </select>
                                                   </div> -->
                                                <div class="form-select form-text">
                                                   <input placeholder="Từ *"off" type="text" size="12" name="salary_from" id="salary_from"  maxlength="14" value="1000000">
                                                </div>
                                                <div class="form-select form-text">
                                                   <input  placeholder="Đến *"autocomplete="off" type="text"  size="12" name="salary_to" id="salary_to" maxlength="14" value="2000000">
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
                                                      <input type="checkbox" name="chkResumeType_1" checked="checked" id="chkResumeType_1" value="1">
                                                      <label for="chkResumeType_1">Nhân viên chính thức</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-group form-checkbox">
                                                      <input type="checkbox" name="chkResumeType_2" id="chkResumeType_2" value="2">
                                                      <label for="chkResumeType_2">Bán thời gian</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-group form-checkbox">
                                                      <input type="checkbox" name="chkResumeType_3" id="chkResumeType_3" value="3">
                                                      <label for="chkResumeType_3">Thời vụ - Nghề tự do </label>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-group form-checkbox">
                                                      <input type="checkbox" name="chkResumeType_4" id="chkResumeType_4" value="4">
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
                                                <input type="checkbox" name="chkWorkHome" id="chkWorkHome" value="1"><span class="slider"></span>
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
                                                   <option value="4">Tiếp thị / Marketing</option>
                                                   <option value="30">Bán lẻ / Bán sỉ</option>
                                                   <option value="31">Bán hàng / Kinh doanh</option>
                                                   <option value="37">Tiếp thị trực tuyến</option>
                                                   <option value="7">Dược phẩm</option>
                                                   <option value="56">Y tế / Chăm sóc sức khỏe</option>
                                                   <option value="9">Tư vấn</option>
                                                   <option value="12">Dịch vụ khách hàng</option>
                                                   <option value="20">Phi chính phủ / Phi lợi nhuận</option>
                                                   <option value="24">Luật / Pháp lý</option>
                                                   <option value="32">Bưu chính viễn thông</option>
                                                   <option value="33">Vận chuyển / Giao nhận /  Kho vận</option>
                                                   <option value="44">Lao động phổ thông</option>
                                                   <option value="51">An Ninh / Bảo Vệ</option>
                                                   <option value="13">Giáo dục / Đào tạo</option>
                                                   <option value="57">Thư viện</option>
                                                   <option value="10">Hàng gia dụng / Chăm sóc cá nhân</option>
                                                   <option value="21">Thực phẩm &amp; Đồ uống</option>
                                                   <option value="3">Hành chính / Thư ký</option>
                                                   <option value="17">Quản lý điều hành</option>
                                                   <option value="22">Nhân sự</option>
                                                   <option value="38">Biên phiên dịch</option>
                                                   <option value="2">Kế toán / Kiểm toán</option>
                                                   <option value="19">Ngân hàng</option>
                                                   <option value="23">Bảo hiểm</option>
                                                   <option value="46">Chứng khoán</option>
                                                   <option value="59">Tài chính / Đầu tư</option>
                                                   <option value="29">Nhà hàng / Khách sạn</option>
                                                   <option value="34">Du lịch</option>
                                                   <option value="60">Hàng không</option>
                                                   <option value="5">Nông nghiệp</option>
                                                   <option value="36">Thống kê</option>
                                                   <option value="49">Thủy sản / Hải sản</option>
                                                   <option value="50">Lâm Nghiệp</option>
                                                   <option value="52">Chăn nuôi / Thú y</option>
                                                   <option value="53">Thủy lợi</option>
                                                   <option value="54">Trắc địa / Địa Chất</option>
                                                   <option value="61">Hàng hải</option>
                                                   <option value="69">Công nghệ sinh học</option>
                                                   <option value="70" selected="selected">Công nghệ thực phẩm / Dinh dưỡng</option>
                                                   <option value="14">Cơ khí / Ô tô / Tự động hóa</option>
                                                   <option value="16">Môi trường</option>
                                                   <option value="26">Dầu khí</option>
                                                   <option value="41">Hóa học</option>
                                                   <option value="48">Điện / Điện tử / Điện lạnh</option>
                                                   <option value="65">Khoáng sản</option>
                                                   <option value="71">Bảo trì / Sửa chữa</option>
                                                   <option value="1">CNTT - Phần mềm</option>
                                                   <option value="63">CNTT - Phần cứng / Mạng</option>
                                                   <option value="11">Mỹ thuật / Nghệ thuật / Thiết kế</option>
                                                   <option value="15">Giải trí</option>
                                                   <option value="66">Truyền hình / Báo chí / Biên tập</option>
                                                   <option value="67">Quảng cáo / Đối ngoại / Truyền Thông</option>
                                                   <option value="68">Tổ chức sự kiện</option>
                                                   <option value="18">Xuất nhập khẩu</option>
                                                   <option value="25">Sản xuất / Vận hành sản xuất</option>
                                                   <option value="35">Đồ gỗ</option>
                                                   <option value="39">Dệt may / Da giày / Thời trang</option>
                                                   <option value="42">Quản lý chất lượng (QA/QC)</option>
                                                   <option value="43">Thu mua / Vật tư</option>
                                                   <option value="58">An toàn lao động</option>
                                                   <option value="64">In ấn / Xuất bản</option>
                                                   <option value="6">Kiến trúc</option>
                                                   <option value="8">Xây dựng</option>
                                                   <option value="28">Bất động sản</option>
                                                   <option value="47">Nội ngoại thất</option>
                                                   <option value="27">Ngành khác</option>
                                                   <option value="45">Mới tốt nghiệp / Thực tập</option>
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
                                                            <select name="LOCATION_ID[]" class="" id="select_location_id_3" data-id="#select_district_id_3" >
                                                               <option value="" disabled="disabled">Chọn</option>
                                                               <option value="4" selected="selected" disabled="disabled">Hà Nội</option>
                                                               <option value="8">Hồ Chí Minh</option>
                                                               <option value="76">An Giang</option>
                                                               <option value="64">Bà Rịa - Vũng Tàu</option>
                                                               <option value="781">Bạc Liêu</option>
                                                               <option value="281">Bắc Cạn</option>
                                                               <option value="240">Bắc Giang</option>
                                                               <option value="241">Bắc Ninh</option>
                                                               <option value="75">Bến Tre</option>
                                                     
                                                            </select>
                                                         </div>
                                                        
                                                      </div>
                                                    
                                                   </div>
                                                </div>
                                                <div class="work-popup-item ">
                                                   <div class="row">
                                                      <div class="col-4">
                                                         <div class="select-group">
                                                            <select name="LOCATION_ID[]" class="" id="select_location_id_1" data-id="#select_district_id_1" onchange="loadDistrict(this);">
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
                                                            <select name="LOCATION_ID[]" class="" id="select_location_id_2" data-id="#select_district_id_2" onchange="loadDistrict(this);">
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
                                                            <select name="DISTRICT_ID[]" id="select_district_id_2" data-placeholder="Quận" class="chosen-select-max-three"  >
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
                                                         <div class="delete"><a onclick="return RemoveRowLoc(this, 2);"> <em class="material-icons">highlight_off</em></a></div>
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
                                                   <option value="2">Chế độ bảo hiểm</option>
                                                   <option value="3">Du Lịch</option>
                                                   <option value="8">Chế độ thưởng</option>
                                                   <option value="9">Chăm sóc sức khỏe</option>
                                                   <option value="10">Đào tạo</option>
                                                   <option value="11">Tăng lương</option>
                                                   <option value="1">Laptop</option>
                                                   <option value="4">Phụ cấp</option>
                                                   <option value="5">Xe đưa đón</option>
                                                   <option value="6">Du lịch nước ngoài</option>
                                                   <option value="7">Đồng phục</option>
                                                   <option value="12">Công tác phí</option>
                                                   <option value="13">Phụ cấp thâm niên</option>
                                                   <option value="14">Nghỉ phép năm</option>
                                                   <option value="15">CLB thể thao</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <textarea name="objective_job" id="objective_job" style="display:none"></textarea>
                                       <div class="form-group form-button">
                                          <div class="button-save button-center">
                                             <button class="btn-gradient" type="submit" data-bs-dismiss="modal">Lưu Lại</button>
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
                                    <div class="status error">
                                       <p>Chưa hoàn thành</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="right-action">
                                 <div class="tips p1" onclick="openTipSlide('tip-experience')">
                                    <div class="icon">
                                       <em class="mdi mdi-lightbulb"></em>
                                    </div>
                                    <p>Tips</p>
                                 </div>
                                 <div class="link-add"><a onclick="show_frmExperience(0);" title="Thêm mới"> <em class="material-icons">add</em><span>Thêm mới</span></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="no-content">
                              <p>Bạn hãy thêm kinh nghiệp làm việc của mình để nhà tuyển dụng tham khảo</p>
                              <a onclick="show_frmExperience(0);"><em class="mdi mdi-plus-circle"></em><span>Thêm mới</span></a>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="experience">
                              <table>
                                 <tbody>
                                    <tr>
                                       <td>Số năm kinh nghiệm</td>
                                       <td id="txt-experience">1 </td>
                                       <td>
                                          <div class="link-edit"><a onclick="editFrmExperience();"> <em class="material-icons">create</em></a></div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>Cấp bậc hiện tại</td>
                                       <td id="cbprofile_levelpresent">Sinh viên/ Thực tập sinh</td>
                                       <td>
                                          <div class="link-edit"><a onclick="editFrmExperience();"> <em class="material-icons">create</em></a></div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
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
                                             <div class="link-edit link-highest-degree"><a href="javascript:void(0);"> <em class="material-icons">create</em></a></div>
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
                     <div class="widget widget-16" id="certificate-section">
                        <div class="widget-head">
                           <div class="cb-title-h3">
                              <div class="figure">
                                 <div class="image"><img src="./img/dash-board/i10.png" alt=""></div>
                                 <div class="figcaption">
                                    <h3>Chứng chỉ khác</h3>
                                    <div class="status">
                                       <p>Không bắt buộc</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="right-action">
                                 <div class="tips p1" onclick="openTipSlide('tip-certificate')">
                                    <div class="icon">
                                       <em class="mdi mdi-lightbulb"></em>
                                    </div>
                                    <p>Tips</p>
                                 </div>
                                 <div class="link-add"><a href="javascript:void(0)" onclick="editResumeCertificate(0);"> <em class="material-icons">add</em><span>Thêm mới</span></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="no-content">
                              <p>Vui lòng nhập chứng chỉ</p>
                              <a href="javascript:void(0)" onclick="editResumeCertificate(0);"><em class="mdi mdi-plus-circle"></em><span>Thêm mới</span></a>
                           </div>
                        </div>
                     </div>
                     <div class="widget widget-22 widget-17" id="language-section">
                        <div class="widget-head">
                           <div class="cb-title-h3">
                              <div class="figure">
                                 <div class="image icon-translate"><span class="material-icons">translate</span></div>
                                 <div class="figcaption">
                                    <h3>Ngôn ngữ </h3>
                                    <div class="status">
                                       <p>Không bắt buộc</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="right-action">
                                 <div class="tips p1" onclick="openTipSlide('tip-language')">
                                    <div class="icon">
                                       <em class="mdi mdi-lightbulb"></em>
                                    </div>
                                    <p>Tips</p>
                                 </div>
                                 <div class="link-add-lang"><a href="javascript:void(0)" onclick="editResumeLanguage(0);"> <em class="material-icons">add</em><span>Thêm mới</span></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                        </div>
                     </div>
                     <div class="widget widget-17" id="widget-17">
                        <div class="widget-head">
                           <div class="cb-title-h3">
                              <div class="figure">
                                 <div class="image"><img src="./img/dash-board/i9.png" alt=""></div>
                                 <div class="figcaption">
                                    <h3>Kỹ năng chuyên môn *</h3>
                                    <div class="status error">
                                       <p>Chưa hoàn thành</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="right-action">
                                 <div class="tips p1" onclick="openTipSlide('tip-skill')">
                                    <div class="icon">
                                       <em class="mdi mdi-lightbulb"></em>
                                    </div>
                                    <p>Tips</p>
                                 </div>
                                 <div class="link-add"><a onclick="show_frmSkill(0);"> <em class="material-icons">add</em><span>Thêm mới</span></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="list-progress" id="list-progress-skill">
                              <table>
                                 <thead>
                                    <tr>
                                       <th>Skill </th>
                                       <th>Mức độ</th>
                                       <th> </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="widget widget-19" id="widget-19">
                        <div class="widget-head">
                           <div class="cb-title-h3">
                              <div class="figure">
                                 <div class="image"><img src="./img/dash-board/i6.png" alt=""></div>
                                 <div class="figcaption">
                                    <h3>Thành tích nổi bật</h3>
                                    <div class="status default">
                                       <p>Không bắt buộc</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="right-action">
                                 <div class="tips p1" onclick="openTipSlide('tip-award')">
                                    <div class="icon">
                                       <em class="mdi mdi-lightbulb"></em>
                                    </div>
                                    <p>Tips</p>
                                 </div>
                                 <div class="link-edit"><a > <em class="material-icons">create</em><span>Thêm mới</span></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body" id="no-content">
                           <div class="no-content">
                              <p>Vui lòng thêm Thành tích nổi bật của bạn</p>
                              <a ><em class="mdi mdi-plus-circle"></em><span>Thêm mới</span></a>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="content" id="content"> Chưa cập nhật
                           </div>
                        </div>
                     </div>
                     <div class="widget widget-23 widget-15" id="other-activity-section">
                        <div class="widget-head">
                           <div class="cb-title-h3">
                              <div class="figure">
                                 <div class="image"><img src="./img/dash-board/i13.png" alt=""></div>
                                 <div class="figcaption">
                                    <h3>Hoạt động khác</h3>
                                    <div class="status">
                                       <p>Không bắt buộc</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="right-action">
                                 <div class="tips p1" onclick="openTipSlide('tip-other-activity')">
                                    <div class="icon">
                                       <em class="mdi mdi-lightbulb"></em>
                                    </div>
                                    <p>Tips</p>
                                 </div>
                                 <div class="link-add"><a href="javascript:void(0)" > <em class="material-icons">add</em><span>Thêm mới</span></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="widget-body">
                           <div class="no-content">
                              <p>Mô tả hoạt động</p>
                              <a href="javascript:void(0)" ><em class="mdi mdi-plus-circle"></em><span>Thêm mới</span></a>
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
                              <li><a class="share-profile" href="javascript:void(0);"><em class="mdi mdi-share"></em><span>Chia sẻ hồ sơ</span> <span class="new-label"> New </span> </a></li>
                              <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/changetemplate"> <em class="material-icons">edit</em><span>Chỉnh Mẫu Hồ Sơ</span></a></li>
                              <li> <a id="btn_view_cbprofile"> <em class="material-icons">remove_red_eye</em><span>Xem CV Template</span></a></li>
                              <li id="btn_download" style="display:none"> <a > <em class="material-icons">get_app</em><span>Tải hồ sơ</span></a>
                              </li>
                              <li><a class="hidden-info" ><em class="fa fa-eye-slash"></em><span>Ẩn thông tin</span></a></li>
                           </ul>
                        </div>
                        <div class="head-menu">
                           <div class="name-shortchut"><a class="active" href="javascript:void(0);">Careerbuilder Profile</a></div>
                           <div class="toggle-menu"><em class="material-icons">list</em></div>
                        </div>
                        <ul class="list-shortchut">
                           <li><a class="active" data-href="#widget-11">Careerbuilder Profile</a></li>
                           <li><a data-href="#t-resume-section">Tiêu đề hồ sơ</a></li>
                           <li><a data-href="#personalinfo-section">Thông tin cá nhân</a></li>
                           <li><a data-href="#widget-14">Mục tiêu nghề nghiệp</a></li>
                           <li><a data-href="#widget-18">Thông tin nghề nghiệp</a></li>
                           <li><a data-href="#widget-15">Kinh nghiệm làm việc</a></li>
                           <li><a data-href="#widget-16">Học vấn</a></li>
                           <li><a data-href="#certificate-section">Chứng chỉ khác</a></li>
                           <li><a data-href="#language-section">Ngôn ngữ</a></li>
                           <li><a data-href="#widget-17">Kỹ năng chuyên môn</a></li>
                           <li><a data-href="#widget-19">Thành tích nổi bật</a></li>
                           <li><a data-href="#other-activity-section">Hoạt động khác</a></li>
                           <li><a data-href="#widget-20">Người tham khảo</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="hidden-edit-modal edit-modal-dashboard" style="display: none">
               <div class="modal-title">
                  <h3>Ẩn một số thông tin</h3>
               </div>
               <div class="body-modal main-form">
                  <form name="frmConfident" id="frmConfident" method="POST" class="form-horizontal">
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
            <div class="tips-modal" id="tip-t-resume" style="display: none">
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
                              Tiêu đề hồ sơ:<br> Bạn nên để tiêu đề là vị trí bạn đang ứng tuyển hoặc muốn làm việc. Giúp Nhà tuyển dụng hiểu ngay vị trí mong muốn khi nhận hồ sơ của bạn.<br> Ví dụ: "Nhân viên kinh doanh" hoặc "Marketing
                              Manager"<br> Lưu ý: hãy điều chỉnh tiêu đề theo từng công việc ứng tuyển nhé!
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
