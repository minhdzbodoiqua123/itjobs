<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/dashboard.css" ?>">
<main>

     
     
<div class="page-content d-flex align-items-stretch">
    <div class="default-sidebar sticky">
        <nav class="side-navbar">
            <div class="head-nav">
                <div class="my-cb-center">
                    <h2>My CareerBuilder Center</h2>
                </div>
                <ul class="list-unstyled">
                  <li> <a class=""href="<?= _WEB_ROOT . '/jobseekers/dashboard' ?>" title="Quản lý hồ sơ"> <em class="material-icons">color_lens</em><span>Quản lý hồ sơ</span></a></li>
                  <li > <a href="<?= _WEB_ROOT . '/jobseekers/my_profile' ?>"> <em class="material-icons">person</em><span>Hồ sơ của tôi</span></a></li>
                
                
                  <li>
                     <a class="collapse active" ><em class="material-icons">edit</em><span>Việc làm của tôi</span></a>
                     <ul class="list-unstyled collapse">
                     <li><a href="<?= _WEB_ROOT.'/jobseekers/Mykiemviec/jobsaved' ?>">Việc làm đã lưu</a></li>
                                    <li><a href="<?= _WEB_ROOT.'/jobseekers/Mykiemviec/jobapplied' ?>">Việc làm đã nộp</a></li>
                     </ul>
                  </li>
               
                  <li>
                     <a class="collapse " href="javascript:;"><em class="material-icons">remove_red_eye</em><span>Nhà tuyển dụng của tôi</span></a>
                     <ul class="list-unstyled collapse">
                        <li> <a href="">Nhà tuyển dụng xem hồ sơ của tôi</a></li>
                        <li> <a href="">Following</a></li>
                        <li> <a href="">Nhà tuyển dụng được cài đặt hạn chế xem hồ sơ của tôi</a></li>
                        <li> <a href="">Phản hồi từ nhà tuyển dụng</a></li>
                     </ul>
                  </li>
               
                  <li>
                     <a class="collapse " href="javascript:;"><em class="material-icons">settings</em><span>Cài đặt</span></a>
                     <ul class="list-unstyled collapse">
                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/member/myaccount" title="Tài Khoản">Tài Khoản</a></li>
                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/member/emailmanagement" title="Cài Đặt Thông Báo">Cài Đặt Thông Báo</a></li>
                     </ul>
                  </li>
                  <li> <a href="http://localhost//itjobs/account/logout" title="Thoát"> <em class="material-icons">power_settings_new</em><span>Thoát</span></a></li>
               </ul>
            </div>
            <div class="toggle-nav"><em class="material-icons">menu_open</em></div>
        </nav>
    </div>
    <div class="content-inner">
        <div class="container-fluid">
            <div class="applied-jobs-wrap">
                <div class="widget widget-10">
                    <div class="widget-head">
                        <div class="cb-title-h3">
                            <h3>Việc làm đã nộp</h3>
                        </div>
                    </div>
                    <div class="widget-body">
                                                    <!-- <div class="content">
                                <p>Bạn đã ứng tuyển vào các vị trí tuyển dụng trong 6 tháng gần nhất</p>
                                <div class="list-hidden"><a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobappliedhidden">Danh Sách Việc Làm Đã Ẩn</a></div>
                            </div> -->
                                                <div class="table">
  <form name="frmJobapplied" id="frmJobapplied" method="post" action="">
    <input type="hidden" name="intIsHide" id="intIsHide" value="1">
    <input type="hidden" name="jobapplied_id" id="jobapplied_id">
    <table>
      <thead>
        <tr>
          <th class="title">Chức danh</th>
          <th>Trạng thái</th>
          <th>Ngày nộp</th>
          <th>Hồ sơ ứng tuyển</th>
        </tr>
      </thead>
      <tbody>
                                                                                                      <?php foreach ($my_job as $item): ?>
                                                                                                        <tr>
              <td class="job">
                <div class="name">
                  <div class="figure">
                    <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam.35A66A42.html"><img src="<?= _WEB_ROOT.'/app/public/assets/employer/images/'.$item["logo"] ?>" alt="HEINEKEN Vietnam " title="HEINEKEN Vietnam "> </a></div>
                    <div class="figcaption">
                      <h3>
                                                  <a href="<?= _WEB_ROOT.'/Alljob/detail/'.$item["job_post_id"] ?>">
                           <?= $item["job_title"] ?>
                          </a>
                                              </h3>
                      <p class="company-name">
                                                      <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam.35A66A42.html" title="HEINEKEN Vietnam "><?= $item["company_name"] ?> </a>
                                                </p>
                    </div>
                  </div>
                </div>
              </td>
              <td>
                              </td>
              <td class="date">
                <p class="mb-show">Ngày nộp: </p>
                <time><?= formatDate($item["apply_date"])?></time>
              </td>
              <td class="curriculum-vitae">
                <p>   
                    <?php if(!empty($item['resume_id'])){?>
                        <a href="<?= _WEB_ROOT.'/jobseekers/myattach/viewfile/'.$user_id.'/'.$item['resume_id'].'/?file_name='.$item["file_location"] ?>""><span class="mb-show">Hồ sơ ứng tuyển:
                        </span><?= $item["resume_title"] ?></a>

                        <?php }?>
                                    
                                                                        </p>
              </td>
            
            </tr>
                                                                                                    <?php  endforeach;?>
                        </tbody>

    </table>
    <div class="main-pagination">  </div>
  </form>
</div>                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
                
</main>