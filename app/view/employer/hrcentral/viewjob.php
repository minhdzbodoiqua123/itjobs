<link rel="stylesheet" href="<?= _WEB_ROOT."/app/public/assets/employer/css/viewjob.css" ?>">
<script defer   src="<?= _WEB_ROOT . "/app/public/assets/employer/js/viewjob.js" ?>"></script>

<main>
 
<section class="employer-navbar-2-1">
  <div class="container">
    <div class="category-nav">
      <p>Danh Mục</p>
      <em class="mdi mdi-chevron-down"></em> </div>
    <div class="main-wrap">
      <div class="left-wrap">         <ul class="list-menu">
          <li > <a href="<?= _WEB_ROOT.'/employer/dashboard'?>" title="Dashboard">Dashboard</a> </li>   
          <li class="active"> <a href="<?= _WEB_ROOT.'/employer/hrcentral/posting'?>" title="Quản Lý Đăng Tuyển">Quản Lý Đăng Tuyển</a> </li>
          <li> <a href="https://careerbuilder.vn/vi/employers/hrcentral/manageresume" class="active" title="Quản Lý  Ứng Viên">Quản Lý  Ứng Viên</a> </li>
          <li class=""> <a href="https://careerbuilder.vn/vi/employers/hrcentral/search-history" title="Lịch Sử Tìm Kiếm">Lịch Sử Tìm Kiếm</a> </li>
          <li> <a href="https://careerbuilder.vn/vi/employers/hrcentral/reports/orders_available" title="Đơn Hàng ">Đơn Hàng </a> </li>
          <li> <a href="https://careerbuilder.vn/vi/employers/hrcentral/emailcontentmanagement" title="Cấu Hình Email"> Cấu Hình Email </a> </li>
          <li>
          <a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts" title=" Tài Khoản"> Tài Khoản</a>
          </li>
		            <li> <a href="https://careerbuilder.vn/vi/employers/careerbuilder-rewards" target="_blank" title="CBRewards">CBRewards</a> </li>
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
        <time>22-11-2022 15:01:01</time>
      </p>
    </div>
  </div>
  <section class="manage-job-posting-active-jobs cb-section bg-manage">
    <div class="container">
      <div class="box-manage-job-posting">
        <div class="heading-manage">
          <div class="left-heading">
            <h1 class="title-manage">Việc Làm Đang Đăng </h1>
            <div class="button"><a class="btn-gradient" href="<?= _WEB_ROOT . '/employer/Postjobs' ?>"><em class="material-icons">create</em>Tạo Mẫu Tuyển Dụng</a></div>
          </div>
          <div class="right-heading"><a href="https://images.careerbuilder.vn/guide/CareerBuilder_Manage_Job_Postings_User_Guide.pdf" target="_blank" class="support">Hướng dẫn</a></div>
        </div>
        <div class="main-form-posting">
          <form name="frmSearchJob" id="frmSearchJob" action="" method="post" onsubmit="return validateSearch();">
            <div class="form-wrap">
              <div class="form-group form-text">
                <label>Từ khóa</label>
                <input type="text" name="keyword" id="keyword" placeholder="Nhập từ khóa" value="">
              </div>
              <div class="form-group form-select">
                <label>Tìm theo ngày</label>
                <select class="fl_left mar_left46" name="date_type" id="date_type">
                  <option value="0" >Ngày Cập Nhật</option>
                </select>
              </div>
              <div class="form-group form-date start-date">
                <label>Từ</label>
                <input type="text" readonly name="date_from" id="date_from" placeholder="Chọn" class="dates_cus_select" value="">
                <div class="icon"><em class="material-icons">event</em></div>
                <div id="start-date"></div>
              </div>
              <div class="form-group form-date end-date">
                <label>Đến</label>
                <input type="text" readonly name="date_to" id="date_to" placeholder="Chọn" class="dates_cus_select" value="">
                <div class="icon"><em class="material-icons">event</em></div>
                <div id="end-date"></div>
              </div>
              <div class="form-group form-submit">
                <button class="btn-submit btn-gradient" type="submit"><em class="material-icons">search</em>Tìm</button>
              </div>
            </div>
          </form>
        </div>
     
        <div class="main-tabslet">
        <ul class="tabslet-tab">
    <li class="">
        <a href="<?= _WEB_ROOT . '/employer/hrcentral/Posting' ?>">
            Việc Làm Đang Đăng
        </a>
    </li>
    <li class="active">
        <a href="<?= _WEB_ROOT . '/employer/hrcentral/waitposting' ?>">
            Việc Làm Chờ Đăng
        </a>
    </li>
    <li class="">
        <a href="<?= _WEB_ROOT . '/employer/hrcentral/unposting' ?>">
            Việc Làm Tạm Dừng Đăng
        </a>
    </li>
    <li class="">
        <a href="<?= _WEB_ROOT . '/employer/hrcentral/expireposting' ?>">
            Việc Làm Hết Hạn
        </a>
    </li>
</ul>

        
          <div class="tabslet-content active">
            <div class="main-jobs-posting">
              <div class="jobs-posting-detail">
                <h2 class="jobs-posting-title"><a href="javascript:;" "><?= $job_post["job_title"] ?></a></h2>
                <div class="row jobs-posting-detail-top">
                  <div class="col-lg-6 col-xl-4">
                    <ul class="list-info-posting">
                      <li>
                        <p class="name">Trạng thái</p>
                        <p>Hoàn tất</p>
                      </li>
                    
                    </ul>
                  </div>
                  <div class="col-lg-6 col-xl-4">
                    <ul class="list-info-posting">
                    </ul>
                  </div>
                  <div class="col-lg-6 col-xl-4">
                    <ul class="list-action">
                      <li><a href="javascript:void(0);" class="btn-gradient postjob_btn"  title="Đăng tuyển"><em class="material-icons">publish </em> Đăng tuyển</a></li>
                      <li><a href="https://careerbuilder.vn/vi/employers/hrcentral/unposting/copyjob/lop7cttnq.1667207375/35BAE710/1" title="Nhân bản"><em class="material-icons">content_copy </em> Nhân bản</a></li>
                      <li class="end"><a href="javascript:void(0);" onclick="activeTab(3);" title="Mail trả lời tự động"><em class="material-icons">email </em> Mail trả lời tự động</a></li>
                    </ul>
                  </div>
                </div>
                <div class="jobs-posting-detail-bottom">
                  <div class="tabslet-detail">
                    <ul class="tabslet-tab-detail">
                      <li class="active" data-tab-detail="1"><a href="javascript:void(0);">Chi Tiết Công Việc</a></li>
                      <li data-tab-detail="2"><a href="javascript:void(0);">Thông Tin Đăng Tuyển</a></li>
                      <li data-tab-detail="3"><a href="javascript:void(0);">Thư Trả Lời Tự Động</a></li>
                      <li data-tab-detail="4"><a href="javascript:void(0);">Quản Lý Tag</a></li>
                    </ul>
                    <div class="tabslet-content-detail active" data-content-detail="1">
                      <div class="content-detail-top">
                        <div class="head">
                          <h3 class="title">Chức danh: <span><?= $job_post["job_title"] ?></span></h3>
                          <a class="edit" href="https://careerbuilder.vn/vi/employers/postjobs/35BAE710" title="Sửa"> <em class="material-icons">created </em> Sửa</a>
                        </div>
                        <div class="body">
                          <div class="row">
                            <div class="col-md-6 col-lg-4">
                              <ul class="list-info-posting">
                                <li>
                                  <p class="name">Mã số</p>
                                  <p></p>
                                </li>
                                <li>
                                  <p class="name">Địa điểm</p>
                                  <p> Hà Nội</p>
                                </li>
                                <li>
                                  <p class="name">Mức lương</p>
                                  <p>
            <?= format_price($job_post["min_salary"]).'-'.format_price($job_post["max_salary"]) ?> VND
                             
                                  </p>
                                </li>
                                <li>
                                  <p class="name">Cấp bậc</p>
                                  <p><?= $job_post["position"] ?></p>
                                </li>
                                <li>
                                  <p class="name">Bằng cấp</p>
                                  <p><?= $job_post["degree_name"] ?></p>
                                </li>
                                <li>
                                  <p class="name">Kinh nghiệm</p>
                                  <p>
                                  <?php
                                    switch($job_post["job_experience_id"]) {
                                      case '1':
                                        echo "Không yêu cầu kinh nghiệm";
                                        break;
                                      case '3':
                                        echo "Chưa có kinh nghiệm";
                                      
                                        break;
                                      default:
               echo   $job_experience_detail["JOB_FROMEXPERIENCE"].'-'.$job_experience_detail["JOB_TOEXPERIENCE"].' Năm';
                                        break;
                                    }
                                  
                                    ?>
                                
                                
                                  </p>
                                </li>
                              </ul>
                            </div>
                            <div class="col-md-6 col-lg-4">
                              <ul class="list-info-posting">
                                <li>
                                  <p class="name">Ngành nghề</p>
                                  <p> 
                               
       
       
                                    <?php 
                                       $valueStr = '';
                                    foreach ($job_profession_detail as $item) {
                                      $valueStr .= "$item[profession_name] " . ',';
                                    }
                                   $valueStr = rtrim($valueStr, ',');
                                    echo  $valueStr;
                                  ?>
                                  </p>
                                </li>
                                <li>
                                  <p class="name">Hình thức</p>
                                  <p>    <?php 
                                       $valueStr = '';
                                    foreach ($job_type_detail as $item) {
                                      $valueStr .= "$item[job_type] " . ',';
                                    }
                                   $valueStr = rtrim($valueStr, ',');
                                    echo  $valueStr;
                                  ?></p>
                                </li>
                                <li>
                                  <p class="name">Tuổi</p>
                                  <p> 
                                    <?php
                                        echo   $job_post["from_age"].'-'.$job_post["to_age"];
                                  
                                    ?>
                                  </p>
                                </li>
                                <li>
                                  <p class="name">Giới tính</p>
                                  <p> 
                                    <?php switch ($job_post["gender"]) {
                                      case '0':
                                        echo "Nam";
                                        break;
                                      case '1':
                                        echo "Nữ";
                                        break;
                                      default:
                                      echo "Nam/Nữ";
                                        break;
                                    }?>
                                  </p>
                                </li>
                                <li>
                                  <p class="name">Hạn nhận hồ sơ</p>
                                  <p><?= formatDate($job_post["end_date"]) ?></p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="content-detail-bottom">
                        <h4 class="detail-title">Phúc lợi</h4>
                        <div class="full-content">
                          <ul>
                                    <?php foreach ($job_welfare_detail as $item): ?>
                                      <li><?= $item["welfare_type"] ?></li>
                                  <?php  endforeach;?>
                          
                          
                          </ul>
                        </div>
                        <h4 class="detail-title">Mô tả công việc</h4>
                        <div class="full-content">
                        <?= $job_post["job_desc"] ?>
                        </div>
                        <h4 class="detail-title">Yêu cầu công việc</h4>
                        <div class="full-content">
                        <?= $job_post["job_request"] ?>
                        </div>
                      
                        <h4 class="detail-title">Thông tin liên hệ</h4>
                        <div class="full-content">
                          <ul class="jobother">
                <li class="company_name"></li>
              <li class="contact_name"></li>
                            <li  class="contact_email"></li>
                            <li class="address"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="tabslet-content-detail " data-content-detail="2">
                      <div class="content-detail-top" id="tabs-thongtindangtuyen">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <ul class="list-info-posting">
                              <li>
                                <p class="name">Trạng thái</p>
                                <p>Hoàn tất</p>
                              </li>
                              <li>
                                <p class="name">Thời gian</p>
                                <p>30 ngày</p>
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <ul class="list-info-posting">
                            </ul>
                          </div>
                        </div>
                        <div class="button buttom-add-service">
                          <div class="button buttom-add-service"><a class="btn-gradient" href="javascript:void(0);" onclick="checkOrder('35BAE710');return false;">Đăng tuyển</a></div>
                        </div>
                      </div>
                     
                    </div>
                    <div class="tabslet-content-detail " data-content-detail="3">
                      <div class="content-detail-top">
                        <div class="automatic-reply-mail" id="div_automatic_reply_mail" style="display: none;">
                          <div class="automatic-item">
                            <div class="name">
                              <p>Tiêu đề:</p>
                            </div>
                            <div class="content">
                              <p id="div_title"></p>
                            </div>
                          </div>
                          <div class="automatic-item">
                            <div class="name">
                              <p>Nội dung:</p>
                            </div>
                            <div class="content" id="div_content">
                            </div>
                          </div>
                        </div>
                        <div class="automatic-no-reply" id="div_no_automatic_reply_mail">
                          <p>Việc làm này hiện chưa có thiết lập thư trả lời tự động</p>
                          <div class="button">
                            <a class="btn-gradient btn-add-mail-reply" href="javascript:void(0);" onclick="showAutoReply('35BAE710');">Thêm thư trả lời tự động</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tabslet-content-detail " data-content-detail="4">
                      <div class="content-detail-top">
                        <div class="content">
                          <p> <strong><b>Kỹ Năng </b></strong></p>
                          <p>
                          <p>- Là các từ khóa thường xuất hiện trong hồ sơ ứng viên hay chức danh tương tự như chức danh đăng tuyển của công ty bạn. <br>
                            <b>Lưu ý:</b><br> - Hệ thống sẽ tìm và gợi ý những hồ sơ ứng viên phù hợp dựa trên các “Resume Skill” được tạo.<br> - Thêm mới hoặc lựa chọn các “Tag/Kỹ năng” phù hợp với vị trí tuyển dụng
                            của Quý công ty.<br> - Bạn được phép tạo tối đa 10 “Tag/Kỹ năng” cho một vị trí tuyển dụng.
                          </p>
                          </p>
                        </div>
                      </div>
                      <div class="content-detail-bottom box-manage-job-posting">
                        <div class="main-jobs-posting">
                          <div class="table">
                            <div class="head">
                              <div class="form-group form-checkbox">
                                <input type="checkbox" name="tag" id="show_mytags" checked>
                                <label for="show_mytags">My Tags </label>
                              </div>
                              <div class="form-group form-checkbox">
                                <input type="checkbox" name="tag" id="show_others" checked>
                                <label for="show_others">Coworker Tag</label>
                              </div>
                              <div class="form-group form-add"><a class="btn-gradient" href="javascript:void(0)">Thêm Tag</a></div>
                            </div>
                            <table id="listTags">
                              <thead>
                                <tr>
                                  <th></th>
                                  <th width="30%">Tag/Kỹ Năng</th>
                                  <th>Hồ Sơ Gợi Ý</th>
                                  <th>Ngày Tạo</th>
                                  <th>Owner</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                              </tbody>
                            </table>
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
  </section>
  <div class="jobs-posting-modal jobs-posting-2-modal" style="display: none">
    <div class="modal-head">
      <p class="title">Thêm Tag/Kỹ năng</p>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-wrap">
          <div class="form-group">
            <label>Tag/Kỹ Năng</label>
            <input type="text" placeholder="Nhập tag/kỹ Năng" id="new_tag" name="new_tag">
            <span class="error" id="new_tag_error"></span>
          </div>
          <div class="form-group form-submit">
            <a class="btn-cancel" href="javascript:void(0);" onclick="closeAllmodal();">Hủy</a>
            <a class="btn-gradient" href="javascript:void(0);" onclick="return addTag();">Lưu</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="jobs-posting-modal jobs-posting-1-modal" style="display: none">
    <div class="modal-body">
      <div class="img-error"><img src="./img/employer/error.png" alt=""></div>
      <p class="name">Thông báo</p>
      <div class="des">
        Quý khách chưa đăng ký gói dịch vụ phù hợp. <br/>Vui lòng liên hệ với chúng tôi để được tư vấn sử dụng dịch vụ
      </div>
      <div class="button">
        <a class="btn-gradient" href="https://careerbuilder.vn/vi/employers/services/contact" target="_blank" onclick="closeAllmodal();">Đồng ý</a>
      </div>
    </div>
  </div>
 
</main>