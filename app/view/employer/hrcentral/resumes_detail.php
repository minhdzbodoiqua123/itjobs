<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/employer/css/resumes_detail.css" ?>">
<script defer src="<?= _WEB_ROOT . "/app/public/assets/employer/js/resumes_detail.js" ?>"></script>
<!-- <script defer src="<?= _WEB_ROOT . "/app/public/assets/employer/js/manageresume.js" ?>"></script> -->

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
                            <li> <a  href="<?= _WEB_ROOT.'/employer/hrcentral/posting' ?>" title="Quản Lý Đăng Tuyển">Quản Lý Đăng Tuyển</a> </li>
                            <li class="active"> <a href="<?= _WEB_ROOT.'/employer/hrcentral/manageresume' ?>" class="active" title="Quản Lý  Ứng Viên">Quản Lý  Ứng Viên</a> </li>
                           
                            <li>
             
             <a href="<?= _WEB_ROOT.'/employer/hrcentral/accounts/edit_employer"'?>" title=" Tài Khoản"> Tài Khoản</a>
             </li>
                        </ul>
                    </div>
            <div class="right-wrap">
               <ul class="list-menu">
                  <li> <a href="<?= _WEB_ROOT.'/employer/tim_ung_vien' ?>"> <em class="material-icons">find_in_page</em> Tìm Hồ Sơ </a> </li>
                  <li> <a class="but-createjob" href="http://localhost//itjobs/employer/hrcentral/posting"> <em class="material-icons">assignment_ind</em> Đăng Tuyển Dụng </a> </li>
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
   <section class="manage-candidates-resume-applied cb-section bg-manage">
      <div class="container">
         <div class="box-candidates-resume-applied">
            <div class="heading-manage">
               <div class="left-heading">
                  <h1 class="title-manage">
                  </h1>
                  <div class="button">
                     <a class="btn-gradient" href="https://careerbuilder.vn/vi/employers/saved_search">
                     <em class="material-icons">notifications_none</em>
                     Thông Báo Ứng Viên
                     </a>
                  </div>
               </div>
               <div class="right-heading">
                  <a class="support" target="_blank" href="https://careerbuilder.vn/vi/employers/faq">Hướng dẫn</a>
               </div>
            </div>
            <div class="main-form-posting">
               <form name="frmSearchResume">
                  <div class="form-wrap">
                     <div class="form-group form-text">
                        <label>Từ khóa</label>
                        <input type="text" id="strKeyword" value="" maxlength="200" placeholder="Nhập từ khóa" />
                     </div>
                     <div class="form-group form-select">
                        <label>Tìm theo</label>
                        <select id="intKeywordType">
                           <option value="0">Tên hồ sơ</option>
                           <option value="1" >Tên ứng viên</option>
                        </select>
                     </div>
                     <div class="form-group form-select">
                        <label>Trạng thái tìm việc</label>
                        <select name="urgentjob" id="inturgentjob">
                           <option value="0">Tất cả</option>
                           <option value="1" >Ứng viên tìm việc khẩn cấp</option>
                        </select>
                     </div>
                     <div class="form-group form-date start-date">
                        <label>Từ</label>
                        <input type="text" name="" id="strFromDate" value="" class="dates_cus_select" placeholder="Chọn" autocomplete="off" readonly>
                        <div class="icon"><em class="material-icons">event</em></div>
                     </div>
                     <div class="form-group form-date end-date">
                        <label>Đến</label>
                        <input type="text" name="" id="strToDate" value="" class="dates_cus_select" placeholder="Chọn" autocomplete="off" readonly>
                        <div class="icon"><em class="material-icons">event</em></div>
                     </div>
                     <div class="form-group form-submit form-submit-less">
                        <button class="btn-submit btn-gradient" type="button" onclick="searchResumeApply()"><em class="material-icons">find_in_page</em>Tìm</button>
                     </div>
                     <div class="form-group form-filter-advanced">
                        <a class="btn-filter-advanced" href="javascript:void(0);"><em class="material-icons">zoom_in</em> Lọc nâng cao</a>
                     </div>
                  </div>
                  <div class="form-wrap-advanced">
                     <div class="form-wrap">
                        <div class="form-group form-select">
                           <label>Trạng thái</label>
                           <select id="intStatus">
                              <option value="7">Tất cả</option>
                              <option value="8" >Chưa Xem </option>
                              <option value="0" >Chưa quyết định</option>
                              <option value="1" >Không phù hợp</option>
                              <option value="2" >Từ chối</option>
                              <option value="3" >Kiểm tra</option>
                              <option value="4" >Phỏng vấn</option>
                              <option value="5" >Đề nghị tuyển dụng</option>
                              <option value="6" >Nhận việc</option>
                           </select>
                        </div>
                        <div class="form-group form-select">
                           <label>Phân loại tự động</label>
                           <select id="intSuitable">
                              <option value="2" selected="selected">Tất cả</option>
                              <option value="1" >Phù hợp</option>
                              <option value="0" >Tiềm Năng</option>
                           </select>
                        </div>
                        <div class="form-group form-select">
                           <label>Xếp loại</label>
                           <select id="intType">
                              <option value="6">Tất cả</option>
                              <option value="0" >Chưa xếp loại</option>
                              <option value="1" >Kém</option>
                              <option value="2" >Trung bình</option>
                              <option value="3" >Khá</option>
                              <option value="4" >Tốt</option>
                              <option value="5" >Rất Tốt</option>
                           </select>
                        </div>
                        <div class="form-group form-select">
                           <label>Ghi chú</label>
                           <select id="intNote">
                              <option value="2" selected="selected">Tất cả</option>
                              <option value="1" >Có ghi chú</option>
                              <option value="0" >Không có ghi chú</option>
                           </select>
                        </div>
                        <div class="form-group form-reset">
                           <button class="btn-reset" type="button" onclick="resetFormSearchResume()"><em class="material-icons">loop</em>Xóa</button>
                        </div>
                        <div class="form-group form-submit">
                           <button class="btn-submit btn-gradient" type="button" onclick="searchResumeApply()"><em class="material-icons">find_in_page</em>Tìm</button>
                        </div>
                        <div class="form-group form-filter-less">
                           <a class="btn-filter-less" href="javascript:void(0);;">
                           <em class="material-icons">highlight_off</em>
                           Thu gọn
                           </a>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div class="main-tabslet" data-toggle="tabslet">
               <ul class="tabslet-tab">
                  <li class="active">
                     <a href="https://careerbuilder.vn/vi/employers/hrcentral/manageresume/6/35A4E900/*/0/0/*/*/7/2/6/2/0/desc/lop7cttnq.1667207375/1">
                     Hồ Sơ Ứng Tuyển
                     (0)
                     </a>
                  </li>
                  <li >
                     <a href="https://careerbuilder.vn/vi/employers/hrcentral/manageresume/4/35A4E900/*/0/0/*/*/7/2/6/2/1/desc/lop7cttnq.1667207375/1">
                     Hồ Sơ Đã Lưu
                     (3)
                     </a>
                  </li>
                  <li>
                     <a href="https://careerbuilder.vn/vi/employers/hrcentral/manageresume/5/*/*/0/0/*/*/7/2/6/2/1/desc/lop7cttnq.1667207375/1">
                     Hồ Sơ Đã Xóa
                     (0)
                     </a>
                  </li>
               </ul>
               <div class="tabslet-content active" id="tab-1">
                  <div class="main-resume-applied">
                     <div class="boding-resume-applied">
                        <div class="box-view-resume">
                           <div class="breadcrumb-gotopage">
                              <nav aria-label="breadcrumb">
                                 <ol class="breadcrumb">
                                    <li class="breadcrumb-item"> <a href="https://careerbuilder.vn/vi/employers/hrcentral/manageresume/4/35A4E900/*/0/*/*/7/2/6/2/1/desc/lop7cttnq.1667207375/1"> Hồ Sơ Đã Lưu </a> </li>
                                    <li class="breadcrumb-item active" aria-current="page">ứng viên</li>
                                 </ol>
                              </nav>
                           </div>
                           <div class="view-resume-head">
                              <div class="box-name">
                                 <h3 class="name"><?= $full_name ?></h3>
                                 <div class="button"> <img src="https://static.careerbuilder.vn/images/icons/resume_type_2.gif" title="Hồ sơ Đính kèm" alt="Hồ sơ Đính kèm" align="absmiddle" class="mar_left5" /> </div>
                              </div>
                           </div>
                           <div class="view-resume-body">
                              <ul class="view-resume-list">
                                 <li>
                                    <p> <strong>Chức danh:</strong></p>
                                    <p><?= $info_user["resume_title"] ?></p>
                                 </li>
                                 <li>
                                    <p> <strong>Địa điểm:</strong></p>
                                    <p class="address"> </p>
                                 </li>

                                 <li>
                                    <p> <strong>Trạng thái:</strong></p>
                                    <p>  <?php foreach ($data_resume_status as $value) { 
                                              
                                if($job_post_activity["resume_status_id"]==$value["id"]) {
                                            echo $value["resume_name_status"];
                                              }
                                          }?></p>
                                 </li>
                                 <li>
                                    <p> <strong>Xếp loại:</strong></p>
                                    <p>   <?php foreach ($data_resume_type as $value) { 
                                              
                                              if($job_post_activity["resume_type_id"]==$value["id"]) {
                                                   echo $value["resume_type"];
                                                     }
                                                 }?>
</p>
                                 </li>
                                 <li>
                                 </li>
                              </ul>
                              <div class="action">
                                 <!-- <p>Thao tác</p>
                                 <ul class="list-manipulation">
                                    <li> <a href="javascript:;" onclick="showFoldersSelected('369242CE', 'listresumes[]');" title="Lưu thư mục"> <em class="material-icons">folder_shared </em> </a> </li>
                                    <li> <a href="javascript:;" onclick="showClassifiedResume('<?= $job_post_activity['job_id']?>','<?= $info_user['user_account_id']?>');return false;" title="Cập nhật trạng thái"> <em class="material-icons">border_color</em> </a> </li>
                                    <li> <a href="javascript:;" onclick="showResumeForInvite('35BFE874','369242CE');return false;" title="Thông báo tuyển dụng "> <i class="fa fa-forward" aria-hidden="true"></i> </a> </li>
                                  
                                 </ul> -->
                              </div>
                           </div>
                           <div class="view-resume-foot">
                              <ul class="tabslet-tab-detail">
                                 <li class="active" data-tab-detail="1"><a href="javascript:void(0)">Chi Tiết Hồ Sơ</a></li>
                              
                              </ul>
                              <div class="tabslet-content-detail active" data-content-detail="1">
                                 <div class="box-flip-view">
                                    <div class="flip-view-head">
                                       <p class="name"> Chức danh:
                                          <span class="title-resume">Developer</span>
                                       </p>
                                    </div>
                                    <div class="flip-view-body">
                                       <div class="row">
                                          <div class="col-lg-6">
                                             <div class="info-left">
                                                <div class="image"> <img id="img_mem_avatar" src="<?= _WEB_ROOT.'/app/public/assets/clients/images/'.$info_user["location_image"] ?>"> </div>
                                                <ul class="info-list">
                                                   <li>
                                                      <p> <strong>Ứng viên:</strong></p>
                                                      <p class="name"> <strong><?= $full_name ?></strong></p>
                                                   </li>
                                                   <li>
                                                      <p> <strong>Email:</strong></p>
                                                      <p > <?= $info_user["email"] ?></p>
                                                   </li>
                                                   <li>
                                                      <p><strong>Ngày sinh:</strong></p>
                                                      <p><?= formatDate($info_user["date_of_birth"]); ?></p>
                                                   </li>
                                               
                                                   <li>
                                                      <p><strong>Giới tính:</strong></p>
                                                      <p>   <?php switch ($info_user["gender"]) {
                                                   case '1':
                                                      echo "Nam";
                                                      break;
                                                   case '2':
                                                      echo "Nữ";
                                                      break;
                                                      default:
                                                      echo "Khác";
                                                      break;
                                                   }?></p>
                                                   </li>
                                            
                                                   <li>
                                                      <p><strong >Tỉnh/Thành Phố:</strong></p>
                                                      <p class="provinces"> </p>
                                                   </li>
                                                   <li>
                                                      <p><strong>Quận/Huyện:</strong></p>
                                                      <p class="districts">Quận Phú Nhuận</p>
                                                   </li>
                                                </ul>
                                             </div>
                                             <div class="tag-list"> </div>
                                          </div>
                                          <div class="col-lg-6">
                                       
                                           </div>
                                             <!-- End $arrInfoCheck.INFO_ORDER.RESULT == 0 || $arrInfoCheck.INFO_ORDER.RESULT == 2 -->
                                          </div>
                                       </div>
                                       <p class="title-flip">Thông tin nghề nghiệp</p>
                                       <div class="job-information">
                                          <ul class="information-list">
                                             <li>
                                                <p> <strong>Năm kinh nghiệm:</strong></p>
                                                <p><?= $info_user["year_of_experience"]!=0 ? $info_user["year_of_experience"].' Năm '  : "Chưa có kinh nghiệm"?>  </p>
                                             </li>
                                             <li>
                                                <p> <strong>Cấp bậc hiện tại:</strong></p>
                                                <p><?php foreach ($data_job_position as $item):
                               if($item["id"]==$info_user["position_current_id"]){
                                echo $item["position"];
                            }
                                endforeach;?></p>
                                             </li>
                                             <li>
                                                <p> <strong>Bằng cấp cao nhất:</strong></p>
                                                <p><?php foreach ($data_degree as $item):
                                if($item["id"]==$info_user["degree_id"]){
                                    echo $item["degree_name"];
                                }
                                endforeach;?></p>
                                             </li>
                                          
                                             <li>
                                                <p> <strong>Cấp bậc mong muốn:</strong></p>
                                                <p><?php foreach ($data_job_position as $item):
                               if($item["id"]==$info_user["position_id"]){
                                echo $item["position"];
                            }
                                endforeach;?></p>
                                             </li>
                                             <li>
                                                <p> <strong>Mức lương mong muốn:</strong></p>
                                                <p><?= $info_user["min_salary"].'-'.$info_user["max_salary"].' VND ' ?></p>
                                             </li>
                                             <li>
                                                <p> <strong>Ngành nghề mong muốn:</strong></p>
                                                <p> <?php
                                          $valueStr = '';
                                           foreach ($data_profession as $value) {
                                          $valueStr .= " $value[profession_name] " . ',';
                                           }
                                          $valueStr = rtrim($valueStr, ',');
                                           echo $valueStr;
                                      
                                          ?></p>
                                             </li>
                                             <li>
                                                <p> <strong>Địa điểm:</strong></p>
                                                <p class="addressWish"></p>
                                             </li>
                                             <li>
                                                <p> <strong>Hình thức:</strong></p>
                                                <p>     
                                    <?php 
                                     $valueStr = '';
                                    
                                    foreach ($job_type_by_resume as $value): 
                                        $valueStr .= " $value[job_type] " . ',';
                                   
                                  endforeach;
                                  $valueStr = rtrim($valueStr, ',');
                                  echo $valueStr;
                                  ?></p>
                                             </li>
                                           
                                          </ul>
                                       </div>
                                       <p class="title-flip">Nội dung hồ sơ</p>
                                       <div class="profile-iframe"> <iframe id="frm_view_pdf" frameborder="0" scrolling="no" src="<?= _WEB_ROOT.'/jobseekers/myresume/viewfile/?file_name='.$_GET['file_name'] ?>"
                                          height="934" width="935"></iframe>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tabslet-content-detail" data-content-detail="2" id="tabs-thugioithieu">
                                 <div class="full-content">
                                    Hồ sơ này không có thư giới thiệu
                                 </div>
                              </div>
                              <div class="tabslet-content-detail" data-content-detail="3">
                                 <div id="tabs-ghichu" class="box-note">
                                    <div id="list_note_resume">&nbsp;</div>
                                    <div id="NotesResume" class="note-form">
                                       <form id="frmResumeForNote" name="frmResumeForNote" action="" method="post">
                                          <div class="form-group">
                                             <label>Viết ghi chú</label>
                                             <input type="text" name="note_content" id="note_content" placeholder="Viết ghi chú"><span class="noted">Lớn hơn 5 và nhỏ hơn 500 ký tự</span>
                                          </div>
                                          <div class="form-group form-submit">
                                             <button class="btn-gradient btn-submit" type="button" id="btn-create-note-resume" onclick="createNoteForResume();">Lưu</button>
                                          </div>
                                          <input type='hidden' name="hexFolderID" id='hexFolderID' value="35BFE874" />
                                          <input type='hidden' name="hexResumeID" id='hexResumeID' value="369242CE" />
                                          <input type='hidden' name="intResumeId" id='intResumeId' value="15555022" />
                                       </form>
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
   </section>
   <div id="end-date"></div>
   <div id="start-date"></div>
</main>