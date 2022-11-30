<script src="//cdn.ckeditor.com/4.20.0/basic/ckeditor.js"></script>
<link rel="stylesheet" href="<?= _WEB_ROOT."/app/public/assets/employer/css/edit_employer.css" ?>">
<script defer src="<?= _WEB_ROOT . "/app/public/assets/employer/js/edit_employer.js" ?>"></script>


<main>
       
     
<section class="employer-navbar-2-1">
      <div class="container">
         <div class="category-nav">
            <p>Danh Mục</p>
            <em class="mdi mdi-chevron-down"></em> 
         </div>
         <div class="main-wrap">
         <div class="left-wrap">
                        <ul class="list-menu">
                            <li> <a href="<?= _WEB_ROOT.'/employer/dashboard' ?>" title="Dashboard">Dashboard</a> </li>
                            <li> <a href="<?= _WEB_ROOT.'/employer/hrcentral/posting' ?>" title="Quản Lý Đăng Tuyển">Quản Lý Đăng Tuyển</a> </li>
                            <li class="active"> <a href="<?= _WEB_ROOT.'/employer/hrcentral/manageresume' ?>" class="active" title="Quản Lý  Ứng Viên">Quản Lý  Ứng Viên</a> </li>
                           
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
        <div class="last-login-user">
            <div class="container">
                <p> Đăng nhập gần đây:
                    <time>22-11-2022 22:12:40</time>
                </p>
            </div>
        </div>
        <section class="manage-job-posting-post-jobs cb-section bg-manage">
            <div class="container">
                <div class="box-manage-job-posting">
                    <div class="heading-manage">
                        <div class="left-heading">
                            <h1 class="title-manage"> Thông Tin Tài Khoản</h1>
                        </div>
                        <div class="right-heading"> <a class="support" href="https://careerbuilder.vn/vi/employers/faq" target="_blank">Hướng dẫn </a></div>
                    </div>
                    <div class="main-tabslet" data-toggle="tabslet">

                        <ul class="tabslet-tab">
                            <li><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/1" alt="Quản lý user"><span>Quản lý user</span></a></li>
                            <li class="active"><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/edit_employer" alt="Thông tin công ty"><span>Thông tin công ty</span></a></li>
                            <li><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/edit_contact" alt="Thông tin liên hệ"><span>Thông tin liên hệ</span></a></li>
                            <li><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/worklocation" alt="Quản Lý Địa Điểm Làm Việc"><span>Quản Lý Địa Điểm Làm Việc</span></a></li>
                            <li><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/report_task_log" alt="Báo cáo tác vụ"><span>Báo cáo tác vụ</span></a></li>
                            <li><a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/changepassword" alt="Đổi mật khẩu"><span>Đổi mật khẩu</span></a></li>
                        </ul>
                        <div class="tabslet-content active" id="tab-2">
                            <form name="editCompany" id="editCompany" action="" method="post" enctype="multipart/form-data">
                                <div class="main-application-information">
                                    <h2 class="title-application no-bg no-pad">
                                        CHỈNH SỬA THÔNG TIN CÔNG TY</h2>
                                    <h2 class="title-application">THÔNG TIN CÔNG TY</h2>
                                    <div class="form-wrap">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group form-text form-input-label">
                                                    <input type="text" name="EMP_NAME" id="EMP_NAME" value="<?= $data_company["company_name"] ?>" maxlength="150" onkeyup="this.setAttribute('value', this.value);">
                                                    <label>Tên công ty   <font style="color: red">*</font></label>
                                                    <span class="error error_EMP_NAME"> </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="noti mt-20"><em class="material-icons">info</em>
                                                    <div class="toolip">
                                                        <p>Vui lòng nhập tối thiểu 3 ký tự!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group form-select">
                                                        <label>Loại hình hoạt động</label>
                                                        <select name="Company_type" class="width_160">  
                                   <?php foreach ($data_company_type as $item) { ?>
                      <option <?= $item["id"]==$data_company["company_type_id"] ? "selected" : "" ?> value="<?= $item["id"]?>" ><?= $item["company_type"] ?></option>
                                 <?php  }?>                  
                                                                                                                           
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="row">
                                            
                                            <div class="col-lg-6">
                                                <div class="form-group form-text form-input-label">
                                                    <input type="text" name="EMP_WEBSITE" id="EMP_WEBSITE" value="<?= $data_company["company_website_url"] ?>" onkeyup="this.setAttribute('value', this.value);" maxlength="100">
                                                    <label>Website công ty</label>
                                                    <span class="error error_EMP_WEBSITE"> </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group form-text form-input-label">
                                                    <input type="text" name="EMP_TAXID" id="EMP_TAXID" value="<?= $data_company["tax_code"] ?>" onkeyup="this.setAttribute('value', this.value);" maxlength="100">
                                                    <label>Mã số thuế</label>
                                                    <span class="error error_EMP_TAXID"> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-wrap logo-wrap">
                                        <div class="main-image">
                                            <div class="form-group">
                                                <p class="title-label">Logo</p>
                                            </div>
                                            <div class="list-image">
                   <div class="image-item" >
<img id="logo_path" <?= !empty($data_company["logo"]) ? "src=http://localhost/itjobs/app/public/assets/employer/images/{$data_company["logo"]}" : "style='display:none'" ?>  alt="">
                                                </div>
                                            </div>
                                            <div class="upload-img">
                                                <input type="file" id="logo" name="logo" value="">
                                                <input type="hidden" name="logo_h" id="logo_h" value="" />
                                                <input type="hidden" name="logo_old" id="logo_old" value="" />
                                                <input type="hidden" name="logo_new" id="logo_new" value="" />
                                                <label for="logo"><em class="material-icons">folder_open</em>Tải ảnh từ máy tính</label>
                                                <div class="noti"> <em class="material-icons">info </em>
                                                    <div class="toolip">
                                                        <p>Định dạng: gif, jpg, png, kích thước đẹp nhất 240x160px</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-wrap banner-wrap">
                                        <div class="main-image">
                                            <div class="form-group">
                                                <p class="title-label">Cover/ Banner
                                                    <a class="btn-view-banner-location" href="https://static.careerbuilder.vn/themes/kiemviecv32/employersnews/images/graphics/cover-tip.jpg" class="line_bot fancybox"><img src="https://static.careerbuilder.vn/themes/kiemviecv32/images/icons/icon_help.png" align="absmiddle" title="Click để xem vị trí của Cover / Banner">Click để xem vị trí của Cover / Banner </a></p>
                                            </div>
                                            <div class="list-image">
                                                <div class="image-item" >
                                               
              <img id="image1_path" <?= !empty($data_company["banner"]) ? "src='http://localhost/itjobs/app/public/assets/employer/images/$data_company[banner]'" : "style='display:none'" ?>  alt="" >
                                                </div>
                                            </div>
                                            <div class="upload-img">
                                                <input type="file" name="image1" id="image1" value="" />
                                                <label for="image1"><em class="material-icons">folder_open</em>Tải ảnh từ máy tính</label>
                                                <input type="hidden" class="li_dmk_width252" name="image1_h" id="image1_h" value="" />
                                                <input type="hidden" class="li_dmk_width252" name="image1_old" id="image1_old" value="" />
                                                <input type="hidden" class="li_dmk_width252" name="image1_new" id="image1_new" value="" />
                                                <div class="noti"> <em class="material-icons">info </em>
                                                    <div class="toolip">
                                                        <p>Định dạng: *.gif, *.jpg, *.png. Kích thước đẹp nhất 1380x290px</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-wrap">
                                        <div class="form-group form-editor" id="div_jobdesc">
                                            <label>Giới thiệu về công ty   <font style="color: red">*</font></label>
                                            <textarea cols="80" rows="5" name="EMP_DESC" id="EMP_DESC" class="editor"><?= $data_company["company_summary"] ?></textarea>
                                            <div class="note">
                                                <p>Vui lòng không nhập email,số điện thoại và số lượng kí tự phải lớn hơn 10
                                                </p>
                                            </div>
                                            <span class="error error_EMP_DESC"> </span>

                                            <div class="note">
                                                <p> </p>
                                            </div>
                                        </div>
                                        <div class="form-group form-editor" id="div_jobreq">
                                            <label>Thông điệp từ công ty</label>

                                            <textarea cols="80" rows="5" id="EMP_MESSAGE" name="EMP_MESSAGE" class="editor"><?= !empty($data_company["message"]) ? $data_company["message"] : "" ?></textarea>
                                            <div class="note">
                                                <p>Vui lòng không nhập email,số điện thoại và số lượng kí tự phải lớn hơn 10
                                                </p>
                                            </div>
                                            <span class="error error_EMP_MESSAGE"> </span>
                                            <div class="note">
                                                <p> </p>
                                            </div>
                                        </div>
                                        <div class="main-image">
                                            <div class="list-image">
                                                <div class="image-item" id="image2_path">

                                                </div>
                                            </div>
                                            <div class="upload-img">
                                            
                                                <input type="hidden" class="li_dmk_width252" name="image2_h" id="image2_h" value="" />
                                                <input type="hidden" class="li_dmk_width252" name="image2_old" id="image2_old" value="" />
                                                <input type="hidden" class="li_dmk_width252" name="image2_new" id="image2_new" value="" />
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-submit form-continue">
                                    <a class="btn-cancel btn-preview-account-user" href="javascript:;" onclick="window.open('https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-it-minh-nguyen.35A94C80.html', '_blank'); return false;  ">
                                        Xem lại</a>
                                    <button class="btn-gradient btn-submit" type="submit" id="update_info_company_form" onclick="updateInfoCompany()">Cập nhật</button>
                                </div>
                             
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        
      

        <script>
           CKEDITOR.replace( 'EMP_DESC' );
           CKEDITOR.replace( 'EMP_MESSAGE' );

    </script>