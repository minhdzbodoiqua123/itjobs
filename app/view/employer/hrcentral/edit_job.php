
<link rel="stylesheet" href="<?= _WEB_ROOT."/app/public/assets/employer/css/postjobs.css" ?>">
<script src="//cdn.ckeditor.com/4.20.0/basic/ckeditor.js"></script>

<style>
    .pristine-error{
        color:red;
    }
</style>

<script defer src="<?= _WEB_ROOT . "/app/public/assets/employer/js/edit_job.js"?>"></script>

<main>
<section class="employer-navbar-2-1">
            <div class="container">
                <div class="category-nav">
                    <p>Danh Mục</p>
                    <em class="mdi mdi-chevron-down"></em> </div>
                <div class="main-wrap">
                    <div class="left-wrap">
                        <ul class="list-menu">
                            <li> <a href="http://localhost//itjobs/employer/dashboard" title="Dashboard">Dashboard</a> </li>
                            <li class="active"> <a href="http://localhost//itjobs/employer/hrcentral/posting" title="Quản Lý Đăng Tuyển">Quản Lý Đăng Tuyển</a> </li>
                            <li class=""> <a href="http://localhost//itjobs/employer/hrcentral/manageresume" class="active" title="Quản Lý  Ứng Viên">Quản Lý  Ứng Viên</a> </li>
                           
                            <li>
             
             <a href="http://localhost//itjobs/employer/hrcentral/accounts/edit_employer" "="" title=" Tài Khoản"> Tài Khoản</a>
             </li>
                   
                        </ul>
                    </div>
                    <div class="right-wrap">
                        <ul class="list-menu">
                        <li> <a href="<?= _WEB_ROOT . '/employer/tim_ung_vien' ?>"> <em class="material-icons">find_in_page</em> Tìm Hồ Sơ </a> </li>
                        <li> <a class="but-createjob" href="http://localhost//itjobs/employer/hrcentral/posting"> <em class="material-icons">assignment_ind</em> Đăng Tuyển Dụng </a> </li>
                    </ul>
                    </div>
                </div>
            </div>
        </section>
<section class="manage-job-posting-post-jobs cb-section bg-manage">

    <div class="container">
        <div class="box-manage-job-posting">
            <div class="heading-manage">
                <div class="left-heading">
                    <h1 class="title-manage">Sửa Bài Đăng Tuyển Dụng</h1>
                </div>
            </div>
   <form name="frmEditJob" id="frmEditJob" method="post" action="<?= _WEB_ROOT.'/employer/hrcentral/Posting/updateJobPost' ?>">
                <div class="main-tabslet">
                    <ul class="tabslet-tab">
                        <li class="active"> <a href="javascript:void(0);">Thông Tin Tuyển Dụng</a></li>
                        <li> <a href="javascript:void(0)" >Thông Tin Liên Hệ</a></li>
                        <li> <a href="javascript:void(0)" >Thiết Lập Độ Phù Hợp Ứng Viên</a></li>
                    </ul>

                    <div class="tabslet-content active" id="tab-1">
                        <input name="ispublic" type="hidden" value="0">
                        <input name="emp_id" type="hidden" value="35A94C80">
                        <input name="job_id" type="hidden" value="<?= $data_post["id"] ?>"> 
        <input type="hidden" name="current_url" value="<?= current_url(); ?>" >
                        <input type="hidden" id="jobsamp_id" name="jobsamp_id" value="" />
                        <input type="hidden" id="lang" name="lang" value="" />
                        <input name="intSave" id="intSave" type="hidden" value="1">
                        <input name="job_source" id="job_source" type="hidden" value="1">
                        <input name="work_location_0" id="work_location_0" type="hidden" value="">
                        <input name="work_location_1" id="work_location_1" type="hidden" value="">
                        <input name="work_location_2" id="work_location_2" type="hidden" value="">
                        <div class="main-application-information">
                            <h2 class="title-application">Thông tin tuyển dụng</h2>
                            <div class="form-wrap">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group form-text">
                                            <input required data-pristine-required-message="Không được để trống" type="text" id="job_title" value="<?= $data_post["job_title"] ?>" class="keyword" name="job_title" value=""  placeholder="Chức danh tuyển dụng">
                                            <span class="form-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="noti mt-20"><em class="material-icons">info</em>
                                            <div class="toolip">
                                                Lưu ý: Chức danh nên mô tả chính xác vị trí tuyển dụng cần tuyển. Đây là một phần quan trọng thu hút người tìm việc ứng tuyển và hệ thống gợi ý hồ sơ phù hợp.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- <div class="col-lg-3">
                                        <div class="form-group form-text">
                                            <input type="text" id="job_code" name="job_code" maxlength="12" value="" placeholder="Mã công việc">
                                        </div>
                                    </div> -->
                                    <div class="col-lg-6">
                                        <div class="d-flex mt-20 align-center">
                                            <!-- <div class="noti"> <em class="material-icons">info</em>
                                                <div class="toolip">
                                                    Quý khách có thể chọn <strong>Mẫu Quảng Cáo Tuyển Dụng</strong> có sẵn của chúng tôi.
                                                </div>
                                            </div> -->
                                            <!-- <ul class="list-link">
                                                <li>
                                                    <a href="javascript:void(0);" id="job_template" class="btn-use-templates">Sử dụng mẫu có sẵn</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" onclick="chooseFromListJob('lop7cttnq.1667207375');" class="btn-created-job-list">Chọn từ danh sách việc làm đã tạo</a>
                                                </li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-editor" id="div_jobdesc">
                                    <label>Mô Tả Công Việc <font style="color: red">*</font></label>
                                  
          <textarea name="job_desc" id="editor1" rows="10" cols="80" required data-pristine-required-message="Vui lòng nhập địa chỉ " >
          <?= $data_post["job_desc"] ?>
            </textarea>
 
                                    <span class="form-error"></span>
                                    <div class="note">
                                        <p>Nhỏ hơn 10 000 kí tự</p>
                                    </div>
                                </div>

                                <div class="form-group form-editor" id="div_jobreq">
                                    <label>Yêu cầu công việc <font style="color: red">*</font></label>

                                    <textarea  cols="80" rows="5" id="job_req" name="job_req" class="editor"><?= $data_post["job_request"] ?></textarea>
                                    <span class="form-error"></span>
                                    <div class="note">
                                        <p>Nhỏ hơn 10 000 kí tự</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group form-select-chosen">
                                            <label>Ngành nghề <font style="color: red">*</font></label>
                                            <select 

                                            multiple search="true" name="INDUSTRY_ID[]" id="select_industry_db" class="chosen-select-max-three" >
                                          

                    <?php foreach ($data_profession as $item):?>
                     <option 
                     <?php foreach ($job_profession_detail as $value):
                     if($value["profession_id"]==$item["id"]){
                        echo "selected";
                     }
                     endforeach;?>
                     value="<?= $item["id"] ?>"><?= $item["profession_name"] ?></option>
                                           <?php   endforeach;?>
                                            
                                                  
                                               
                                           
                                              
                                            </select>
                                            <span class="form-error error_select_industry_db_1"></span>
                                        </div>
                                    </div>
                                </div>
                                <div id="post_job_location">
                                    <div class="item_post_job_location">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group form-select">
                                                    <label>
                                                        Nơi làm việc <font style="color: red">*</font>
                                                        <a class="btn-add-location ml-5" href="javascript:void(0);">
                                                            + Thêm Địa Điểm
                                                            <div class="toolip">
                                                                - Bổ sung thông tin địa điểm làm việc cho vị trí đăng tuyển</br>
                                                                - Vị trí đăng tuyển của bạn sẽ được hiển thị trên bản đồ việc làm dành cho ứng viên trên thiết bị di động, qua đó gia tăng hiệu quả tuyển dụng

                                                            </div>
                                                        </a>
                                                    </label>
                                             <select name="LOCATION_ID" class="select_location">
                                                  
                                                    </select>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group form-select-chosen">
                                                    <label>Quận huyện</label>
                                                  <select name="districts" >
                                                  
                                                  </select>
                           
                                                      
                                                    </inp>
                                                    
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <div id="dropdownSelected" style="display: none;"></div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group form-select-chosen">
                                                    <label>Địa chỉ làm việc</label>
                           <input value="" name="work_location" class="chosen-select  work_location"    data-placeholder="Địa điểm làm việc"
                           required data-pristine-required-message="Vui lòng nhập địa chỉ " 
                           >
                                                        <option value="">Chọn địa điểm làm việc</option>
                                                    </inp>
                                                    <span class="form-error"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 d-flex align-center">
                                                <div class="form-group form-checkbox mt-5">
                                                    <input class="input_margin" id="hidden_worklocation_" type="checkbox" name="hidden_worklocation[]" value="1" />

                                                    <label for="hidden_worklocation_">Bảo mật địa điểm làm việc</label>
                                                </div>
                                                <!-- <a class="btn-add-location ml-40 mt-5 add-location-more" href="javascript:void(0)"><em class="material-icons">add_circle </em>Thêm</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">Mức lương <font style="color: red">*</font></label>
                                        <div class="form-salary d-flex align-center">
                                            <div class="form-group form-select">
                                                <select name="job_salaryunit" id="job_salaryunit">
                                                    <option value="vnd">VNĐ</option>
                                                 
                                                </select>
                                            </div>
                                            <div class="form-group form-text">
                                                <input type="text" name="salary_from" id="salary_from" maxlength="12" value="<?= $data_post["min_salary"] ?>" onblur="checkAlertSalary();" placeholder="Tối Thiểu *">
                                            </div>
                                            <div class="form-group form-text">
                                                <input type="text" name="salary_to" id="salary_to" maxlength="12" value="<?= $data_post["max_salary"] ?>" onblur="checkAlertSalary();" placeholder="Tối Đa *">
                                            </div>
                                            <span class="form-error" id="error_salary" style="width: 100%;max-width: none;flex: 1;"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-center salaryOnPostJob">
                                        <div class="form-group form-checkbox mt-5">
                                            <!-- <input type="checkbox" id="0-2" name="JOB_ISSECURITY" value="0" checked="checked">
                                            <label for="0-2"><span>Hiển thị trên tin tuyển dụng để thu hút ứng viên hơn</span></label> -->
                                        </div>
                                        <div class="noti"> <em class="material-icons">info</em>
                                            <div class="toolip">
                                                <p class="width_62 fl_left"><b>Lưu ý:</b></p>

                                                </br>- 72% ứng viên chia sẻ rằng thông tin lương ảnh hưởng đến quyết định ứng tuyển của họ.
                                                </br>- Bạn có thể quyết định “hiển thị thông tin lương” để thu hút thêm nhiều hồ sơ ứng tuyển vào vị trí tuyển dụng.
                                                <p style="color:black ; font-weight: bold;">- Bạn nên nhập cả hai mức lương tối thiểu và tối đa cho vị trí cần đăng tuyển.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="formality">
                                    <div class="form-group">
                                        <p class="title-label">Hình thức
                                            <font style="color: red">*</font>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <?php foreach ($data_job_type as $item): ?>
          <div class="col-sm-6 col-lg-3">
        <div class="form-group form-checkbox">
  <input 
  <?php foreach ($job_type_detail as $value):
    if($value["job_type_id"]==$item["id"]){
        echo 'checked';
    }
  endforeach;?>
  type="checkbox" class="require-one-job-type input_margin" id="job_type<?= $item["id"] ?>" name="job_type[]" value="<?= $item["id"] ?>"  />
                                                <label ><?= $item["job_type"] ?></label>
                                            </div>
                                        </div>
                                        <?php   endforeach;?>
                                            <span class="form-error" id="last_jobtype"></span>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group form-date">
                                            <label>Hạn nhận hồ sơ <font style="color: red">*</font></label> 
                                          
                <input min="<?= date("Y-m")?>-<?= date("d")+1?>" max="<?= date("Y")+100 ?>-<?= date("m-d") ?>" type="date" value="<?= $data_post["end_date"] ?>" name="JOB_LASTDATE" id="JOB_LASTDATE" class="dates_cus_select_postjob required"/>
                                            <div class="icon"><em class="material-icons">event</em></div>
                                            <span class="form-error error_job_lastdate"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="title-application">Phúc lợi</h2>
                            <div class="checkbox-wrap">
                                <div class="row">
                                    <?php foreach ($data_welfare as $item): ?>
                                        <div class="col-sm-6 col-lg-3">
                                        <div class="form-group form-checkbox">
 <input   <?php foreach ($job_welfare_detail as $value):
    if($value["job_welfare_id"]==$item["id"]){
        echo 'checked';
    }
  endforeach;?>
  type="checkbox"  id="BENEFIT_ID_2" name="BENEFIT_ID[]" value="<?= $item["id"] ?>" >
                                           </em><?= $item["welfare_type"] ?></label>
                                        </div>
                                    </div>
                                  <?php  endforeach;?>
                                  
                                
                                   
                                </div>
                            </div>
                            <h2 class="title-application">Yêu cầu chung</h2>
                            <div class="form-wrap">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <p class="title-label">Giới tính</p>
                                        </div>
                                        <div class="d-flex gender-wrap">
                                           
                                            <div class="form-group form-radio">
              <input  <?= $data_post["gender"]==0?"checked":"" ?> value="0" type="radio" id="rnam" name="JOB_GENDER"  >
                                                <label for="rnam">Nam</label>
                                            </div>
                                            <div class="form-group form-radio">
                       <input <?= $data_post["gender"]==1?"checked":"" ?> value="1" type="radio" id="rnu" name="JOB_GENDER" >
                                                <label for="rnu">Nữ</label>
                                            </div>
                                            <div class="form-group form-radio">
                <input <?= $data_post["gender"]==2?"checked":"" ?> value="2" type="radio" id="rnamnu" name="JOB_GENDER"  >
                                                <label for="rnamnu">Nam/Nữ</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <p class="title-label">Tuổi</p>
                                        </div>
                                        <div class="d-flex form-age align-center">
                                            <div class="form-group form-text">
                                                <label>Từ</label>
                                                <input value="<?= $data_post["from_age"] ?>" type="text" name="JOB_FROMAGE" id="JOB_FROMAGE" onkeyup="change_age(this);" onblur="chckage();">
                                            </div>
                                            <div class="form-group form-text">
                                                <label>Đến</label>
                                                <input value="<?= $data_post["to_age"] ?>" type="text" name="JOB_TOAGE" id="JOB_TOAGE" onkeyup="change_age(this);" onblur="chckage();">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group form-select">
                              <label>Kinh nghiệm <font style="color: red">*</font></label>
                              
               <select class="" name="JOB_ISEXPERIENCE" id="JOB_ISEXPERIENCE">
                              <option value="">Chọn Kinh nghiệm</option>
                                        <?php foreach ($data_job_experience as $item): ?>
      <option <?= $data_post["job_experience_id"]==$item["id"]?"selected":"" ?> value="<?= $item["id"] ?> "><?= $item["experience_type"] ?> </option>

                                       <?php endforeach;?>
                   
                                             
                                            </select>
                                            <span class="form-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6" id="JOB_EXPERIENCE" style="display: none;">
                                        <div class="form-group">
                                            <p class="title-label">năm</p>
                                        </div>
                                        <div class="d-flex form-age align-center">
                                            <div class="form-group form-text">
                                                <label>Từ</label>
              <input  value="<?= $job_experience_detail["JOB_FROMEXPERIENCE"] ?>" name="JOB_FROMEXPERIENCE" id="JOB_FROMEXPERIENCE"  />
                                            </div>
                                            <div class="form-group form-text">
                                                <label>Đến</label>
                                                <input value="<?= $job_experience_detail["JOB_TOEXPERIENCE"] ?>" name="JOB_TOEXPERIENCE" id="JOB_TOEXPERIENCE"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group form-select">
                                            <label>Cấp bậc <font style="color: red">*</font></label>
                                            <select name="LEVEL_ID" id="LEVEL_ID">
                                                <option value="">Chọn Cấp bậc</option>
                                                <?php foreach ($data_position as $item): ?>
             <option <?= $data_post["job_position_id"]==$item["id"]?"selected":"" ?> value="<?=  $item["id"] ?>"><?= $item["position"] ?></option>
                                <?php   endforeach;?>
                                     
                                               
                                            </select>
                           
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group form-select">
                                            <label>Bằng cấp</label>
                                            <select name="DEGREE_ID" id="DEGREE_ID">
                                                <?php foreach ($data_degree as $item): ?>
                                        <option 
      <?= $data_post["job_degree_id"]==$item["id"]?"selected":"" ?>
                                        <?= $item["id"]==1 ? "style='display:none'": "" ?>
                                        <?= $item["id"]==2 ? "selected": "" ?>
                                        
                                        value="<?= $item["id"] ?>"><?= $item["degree_name"] ?></option>
                                                  
                                              <?php  endforeach;?>
                                               
                                   
                                            </select>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group form-checkbox">
                                            <input <?= $data_post["wrk_from_home"]=="1" ? "checked":"" ?> type="checkbox" value="1" name="JOB_WFH" id="JOB_WFH" class="input_margin">
                                            <label for="JOB_WFH">Work from home</label>
                                        </div>
                                        <div class="form-group mt-0 form-note-workfromhome">
                                            Tick chọn nếu vị trí tuyển dụng này cho phép ứng viên có thể chọn chế độ làm việc tại nhà trong thời điểm hiện tại (Work from home) mà không nhất thiết phải có mặt tại văn phòng công ty. Hệ thống sẽ phân loại và đánh dấu đăng tuyển này vào danh mục tìm kiếm loại công việc là “Work from Home”.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="strPhoto" name="strPhoto" value="" />
                            <input type="hidden" id="strPhotoDelete" name="strPhotoDelete" value="" />
                            <input type="hidden" id="checkYouTube" name="checkYouTube" />
                         
                            <div class="form-wrap video-wrap">
                              
                                <div class="form-group form-submit form-continue">
                                  
                 <button class="btn-gradient btn-post" id="btn_submit_form_postjobs_finish" type="submit" >
                                        Lưu
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="tabslet-content" id="tab-2">
                            <div class="main-application-information">
                                <h2 class="title-application">Thông tin liên hệ</h2>
                                <div class="form-wrap">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" name="checkprofile" id="checkprofile" value="1" />
                                                <label for="checkprofile">Ẩn thông tin công ty: tên công ty và giới thiệu về công ty</label>
                                                <a class="btnlink preview-company" href="javascript:void(0)" onclick="popupProfileAjax(); return false;">(Xem lại thông tin công ty đã tạo)</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="input_margin" onclick="change_security(this);" name="hide_contact" id="hide_contact" value="1" />
                                                <label for="hide_contact">Ẩn thông tin liên hệ: tên công ty, địa chỉ, người liên hệ</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-text">
                                                <input type="text" name="JOB_CONTACT_COMPANY" id="JOB_CONTACT_COMPANY" value="Công ty it minh nguyễn" placeholder="Tên công ty *" />
                                            </div>
                                            <div id="security_client" style="display: none;">
                                                <div class="form-group form-checkbox">
                                                    <input type="radio" name="Hide_Job" id="JOB_CONTACT_SECRECY" checked="checked" value="0" />
                                                    <label for="JOB_CONTACT_SECRECY">Bảo mật</label>
                                                </div>
                                                <div class="form-group form-checkbox">
                                                    <input type="radio" class="input_margin" name="Hide_Job" value="1" id="JOB_CONTACT_CLIENT" />
                                                    <label for="JOB_CONTACT_CLIENT">CareerBuilder's client</label>
                                                </div>
                                            </div>
                                            <input name="company_profile" id="company_profile" type="hidden" value="35A94C80">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-text">
                                                <input type="text" id="JOB_CONTACT_ADDRESS" name="JOB_CONTACT_ADDRESS" value="phố bái thị trấn nho quan ninh bình" placeholder="Địa chỉ *" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-text">
                                                <input type="text" name="JOB_CONTACT_NAME" id="JOB_CONTACT_NAME" value="minh nguyễn " placeholder="Người liên hệ *" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-text">
                                                <input type="text" class="width_295" name="JOB_CONTACT_EMAIL" id="JOB_CONTACT_EMAIL" maxlength="150" value="lop7cttnq@gmail.com" placeholder="Email 1 *" />
                                            </div>
                                        </div>
                                        <div class="col-lg-5 d-flex align-center">
                                            <div class="noti"><em class="material-icons">info</em>
                                                <div class="toolip">
                                                    <p>(Email sẽ được bảo mật)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-text">
                                                <input type="text" name="JOB_CONTACT_EMAIL2" id="JOB_CONTACT_EMAIL2" maxlength="150" value="" placeholder="Email 2" />
                                            </div>
                                        </div>
                                        <div class="col-lg-5 d-flex align-center">
                                            <div class="noti"><em class="material-icons">info</em>
                                                <div class="toolip">
                                                    <p>(Email sẽ được bảo mật)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-select">
                                                <select name="receivemail">
                                                    <option value="0">Tiếng Việt</option>
                                                    <option value="1">Tiếng Anh</option>
                                                    <option value="2">Không nhận email thông báo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 d-flex align-center">
                                            <div class="noti"><em class="material-icons">info</em>
                                                <div class="toolip">
                                                    <p>Nhận email thông báo khi có ứng viên nộp đơn trực tuyến.</p>
                                                    <p>Khi nhấn chọn chức năng này, Quý công ty sẽ nhận được email thông báo từ hệ thống mỗi khi có ứng viên nộp đơn trực tuyến vào các vị trí công việc tương ứng mà Quý công ty đang đăng tuyển trên
                                                        hệ thống.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" name="JOB_RECEIVEEMAIL_RESUME" checked="checked" value="1" id="records1" />
                                                <label for="records1">Nhận hồ sơ gợi ý phù hợp với vị trí tuyển dụng</label>
                                            </div>
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" class="input_margin" name="JOB_APPLYONLINE" id="JOB_APPLYONLINE" value="1" />
                                                <label for="JOB_APPLYONLINE">Thiết lập thư trả lời tự động khi có ứng viên nộp đơn ứng tuyển</label>
                                                <div class="noti"><em class="material-icons">info</em>
                                                    <div class="toolip">
                                                        <p>Hệ thống sẽ tự động gửi Thư tự động trả lời cho các ứng viên nộp hồ sơ trực tuyến. Thư này sẽ không đính kèm trong quảng cáo đăng tuyển của quý khách.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-standard" id="MailReply">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <form action="" method="post">
               <input name="job_id" type="hidden" value="<?= $data_post["id"] ?>" />
                                                    <input name="savetype" type="hidden" value="1" />
                                                    <input name="emp_id" type="hidden" value="287616" />
                                                    <div class="form-wrap">
                                                        <div class="form-group form-select">
                                                            <label for="">Thư trả lời</label>
                                                            <select name="slAutoReply" id="slAutoReply">
                                                                <option value="0">Chọn</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group form-text">
                                                            <label for="">Tiêu đề</label>
                                                            <input type="text" placeholder="Nhập tiêu đề" name="reply_title" id="reply_title" value="">
                                                            <span class="error"></span>
                                                            <span class="noted">Tối đa 70 kí tự</span>
                                                        </div>
                                                        <div class="form-group form-textarea">
                                                            <label>Nội dung thư</label>
                                                            <div class="d-flex">
                                                                <p>Smart Fields</p>
                                                                <select name="addfield" id="addfield" onchange="addSmartField('reply_content', this.value);">
                                                                    <option value="">Chọn</option>
                                                                    <option value="[firstname]">[firstname]</option>
                                                                    <option value="[lastname]">[lastname]</option>
                                                                    <option value="[job-title]">[job-title]</option>
                                                                    <option value="[contact-name]">[contact-name]</option>
                                                                </select>
                                                                <a class="see-sample" href="javascript:void(0);" id="view_sample">Xem mẫu</a>
                                                            </div>
                                                            <textarea name="reply_content" id="reply_content"></textarea>
                                                            <span class="error"></span>
                                                            <span class="noted"> Ít nhất 30 ký tự, Nhiều nhất 3000 ký tự</span>
                                                        </div>
                                                        <div class="form-group form-radio">
                                                            <div class="group">
                                                                <input type="radio" class="input_margin" name="replyto" value="1" id="edit-email-1">
                                                                <label for="edit-email-1">Chỉ riêng vị trí tuyển dụng này</label>
                                                            </div>
                                                            <div class="group">
                                                                <input type="radio" class="input_margin" name="replyto" value="0" id="edit-email-2">
                                                                <label for="edit-email-2">Tất cả các tuyển dụng</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jobs-posting-modal jobs-posting-17-modal" id="LetterAbout" style="display: none">
                                        <div class="modal-head">
                                            <p class="title">Thư trả lời tự động mẫu</p>
                                        </div>
                                        <div class="modal-body">
                                            <div class="preview-reply-letter">
                                                <div class="title">
                                                    <p>Tiêu đề: Thanks you for applying</p>
                                                </div>
                                                <div class="full-content">
                                                    Dear <strong>[firstname] [lastname]</strong>,</br>We have received your resume submission for the <strong>[job-title]</strong> position. We appreciate your interest and look forward to reviewing
                                                    your resume.</br>
                                                    We will contact you within seven days if your qualifications meet the requirements of the position.</br>
                                                    Thanks you again for applying!</br>
                                                    </br>Best regards,</br><strong>[contact-name]</strong>
                                                </div>
                                            </div>
                                            <div class="form-group form-submit">
                                                <button class="btn-gradient" type="button" name="save" id="btn_preview_sample" >Trở lại</button>
                                                <a class="btn-cancel" href="javascript:void(0);" data-fancybox-close="">Bỏ qua</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group form-submit form-continue form-back-continue">
                                    <button class="btn-gradient btn-save" href="javascript:void(0);" onclick="is_Filter_Form2()">
                                        Tiếp tục
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="tabslet-content" id="tab-3">
                        </div>
                    </div>
            </form>
        </div>
    </div>
</section>
</main>

<script>
           CKEDITOR.replace( 'job_desc' );
           CKEDITOR.replace( 'job_req' );

    </script>