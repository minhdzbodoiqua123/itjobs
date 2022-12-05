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
                    <li> <a class="active" href="<?= _WEB_ROOT . '/jobseekers/dashboard' ?>" title="Quản lý hồ sơ"> <em class="material-icons">color_lens</em><span>Quản lý hồ sơ</span></a></li>
                    <li style="display:none"> <a href="https://careerbuilder.vn/vi/jobseekers/cv-hay/my-profile"> <em class="material-icons">person</em><span>Hồ sơ Careerbuilder</span></a></li>
                    <li> <a href="<?= _WEB_ROOT . '/jobseekers/my_profile' ?>"> <em class="material-icons">person</em><span>Hồ sơ Careerbuilder</span></a></li>
                    <!-- <li> <a href=""> <em class="material-icons">portrait</em><span>Chỉnh mẫu hồ sơ</span></a></li> -->
                    <li><a class="collapse"><em class="material-icons">edit</em><span>Việc làm của tôi</span></a>
                        <ul class="list-unstyled collapse">
                        <li><a href="<?= _WEB_ROOT.'/jobseekers/Mykiemviec/jobsaved' ?>">Việc làm đã lưu</a></li>
                                    <li><a href="<?= _WEB_ROOT.'/jobseekers/Mykiemviec/jobapplied' ?>">Việc làm đã nộp</a></li>
                        </ul>
                    </li>
                    <li> <a href=""><em class="material-icons">notifications</em><span>Thông Báo Việc Làm</span></a></li>
                    <li> <a class="collapse " href="javascript:;"><em class="material-icons">remove_red_eye</em><span>Nhà tuyển dụng của tôi</span></a>
                        <ul class="list-unstyled collapse">
                            <li> <a href="">Nhà tuyển dụng xem hồ sơ của tôi</a></li>
                            <li> <a href="">Following</a></li>
                            <li> <a href="">Nhà tuyển dụng được cài đặt hạn chế xem hồ sơ của tôi</a></li>
                            <li> <a href="">Phản hồi từ nhà tuyển dụng</a></li>
                        </ul>
                    </li>
                    <li> <a href="" title="Xem tất cả thông báo"> <em class="material-icons">textsms</em><span>Xem tất cả thông báo</span></a></li>
                    <li> <a class="collapse " href="javascript:;"><em class="material-icons">settings</em><span>Cài đặt</span></a>
                        <ul class="list-unstyled collapse">
                            <li> <a href="" title="Tài Khoản">Tài Khoản</a></li>
                            <li> <a href="" title="Cài Đặt Thông Báo">Cài Đặt Thông Báo</a></li>
                        </ul>
                    </li>
                    <li> <a href="<?= _WEB_ROOT . '/account/logout' ?>" title="Thoát"> <em class="material-icons">power_settings_new</em><span>Thoát</span></a></li>
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
                            <h3>Việc làm đã lưu</h3>
                        </div>
                    </div>
                    <div class="widget-body">
                                          
                                                <div class="table">
  <form name="frmJobapplied" id="frmJobapplied" method="post" action="">
    <input type="hidden" name="intIsHide" id="intIsHide" value="1">
    <input type="hidden" name="jobapplied_id" id="jobapplied_id">
    <table>
      <thead>
      <tr>
            <th class="job-name">Tên công việc</th>
                    
                 <th>Trạng thái</th>
           </tr>
      </thead>
      <tbody>
                                                                                                      <?php foreach ($my_job as $item): ?>
                                                                                                        <tr>
                                                    <td class="job">
                                                        <div class="name">
                                                                <div class="figure">
                                                                    <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-sametel.35A5A3B9.html"><img src="<?= _WEB_ROOT.'/app/public/assets/employer/images/'.$item["logo"] ?>" alt="CÔNG TY CỔ PHẦN SAMETEL" title="CÔNG TY CỔ PHẦN SAMETEL">  </a></div>
                                                                    <div class="figcaption">
                                                                        <h3><a href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-ke-toan-thanh-toan.35BB088F.html"><?= $item["job_title"] ?></a></h3>
                                                                        <p class="company-name"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-sametel.35A5A3B9.html" title="CÔNG TY CỔ PHẦN SAMETEL"><?= $item["company_name"] ?></a></p>
                                             
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </td>
                                                 
                                                    <td class="action">
                                                        <ul style="    flex-direction: column;
    gap: 10px;"class="list-action">
                                        <?php
                                        $check=0;
                                        foreach ($job_post_activity as $value):
                                       if($value["job_id"]==$item["job_id"]){?>
                                       <?php $check++?>
                     <li class="apply-now-btn success"><a class="btn-gradient" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-ke-toan-thanh-toan.35BB088F.html">Đã Ứng Tuyển</a></li>
                                      <?php } ?>
                <?php    endforeach;?>                                          
                <?php if ($check==0): ?>
                    <li class="apply-now-btn "><a class="btn-gradient" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-ke-toan-thanh-toan.35BB088F.html"> Ứng Tuyển</a></li>
               <?php endif;?>                            
                                                                                                                    <form action="" >
               <input type="hidden" value="<?= $item["job_id"] ?>" name="job_id">                                                                        <li class="delete"><a href="javascript:void(0);" > <em class="material-icons">highlight_off</em><button type="submit" style="background-color:transparent;color:red;font-size:16px;font-weight:bold;">Xóa</button></a></li>
                                                                                                                    </form>
                                                        </ul>
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