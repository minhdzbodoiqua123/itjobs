<script defer type="module" src="<?= _WEB_ROOT . "/app/public/assets/employer/js/unposting.js" ?>"></script>

<style>
  .custome-actions {
    gap: 15px;
  }

  .swal2-popup {
    height: 300px;
    width: 450px;
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
    cursor: pointer;
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
    cursor: pointer;
  }

  .swal2-title {
    font-size: 24px;
  }

  .btn_recruit {
    cursor: pointer;
  }
</style>
<main>

<section class="employer-navbar-2-1">
  <div class="container">
    <div class="category-nav">
      <p>Danh Mục</p>
      <em class="mdi mdi-chevron-down"></em> </div>
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
                        <li> <a href="<?= _WEB_ROOT . '/employer/tim_ung_vien' ?>"> <em class="material-icons">find_in_page</em> Tìm Hồ Sơ </a> </li>
                        <li> <a class="but-createjob" href="http://localhost//itjobs/employer/hrcentral/posting"> <em class="material-icons">assignment_ind</em> Đăng Tuyển Dụng </a> </li>
                    </ul>
      </div>
    </div>
  </div>
</section>

<section class="manage-job-posting-active-jobs cb-section bg-manage">
    <div class="container">
      <div class="box-manage-job-posting">
        <div class="heading-manage">
          <div class="left-heading">
            <h1 class="title-manage">Việc Làm Tạm Dừng Đăng </h1>
            <div class="button"><a class="btn-gradient" href="<?= _WEB_ROOT . '/employer/Postjobs' ?>"><em class="material-icons">create</em>Tạo Mẫu Tuyển Dụng</a></div>
          </div>
          <div class="right-heading"><a href="https://careerbuilder.vn/vi/employers/faq" target="_blank" class="support">Hướng dẫn</a></div>
        </div>
        <div class="main-form-posting">
    <form name="frmSearchJob" id="frmSearchJob"  method="get" >
        <div class="form-wrap">
            <div class="form-group form-text">
                <label>Từ khóa</label>
                <input type="text" name="keyword" id="keyword" placeholder="Nhập từ khóa" value="">
            </div>
            <div class="form-group form-select">
                <label>Tìm theo ngày</label>
                <select class="fl_left mar_left46" name="date_type" id="date_type">
                <option <?= empty($date_type)?"":$date_type==0?'selected':'' ?>value="0">Ngày đăng</option>
                                    <option  <?= empty($date_type)?"":$date_type=='1'?'selected':'' ?> value="1">Ngày hết hạn</option>
                                    </select>
            </div>
            <div class="form-group form-date start-date">
                <label>Từ</label>
                <input type="date"  name="date_from" id="date_from" placeholder="Chọn" class="dates_cus_select" value="<?= $date_from??"" ?>">
             
                <div id="start-date" class="dtpicker-overlay dtpicker-mobile"><div class="dtpicker-bg"><div class="dtpicker-cont"><div class="dtpicker-content"><div class="dtpicker-subcontent"></div></div></div></div></div>
            </div>
            <div class="form-group form-date end-date">
                <label>Đến</label>
                <input type="date"  name="date_to" id="date_to" placeholder="Chọn" class="dates_cus_select" value="<?= $date_to??"" ?>">
                <div id="end-date" class="dtpicker-overlay dtpicker-mobile"><div class="dtpicker-bg"><div class="dtpicker-cont"><div class="dtpicker-content"><div class="dtpicker-subcontent"></div></div></div></div></div>
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
    <li class="">
        <a href="<?= _WEB_ROOT . '/employer/hrcentral/waitposting' ?>">
            Việc Làm Chờ Đăng
        </a>
    </li>
    <li class="active">
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
        <div class="boding-jobs-posting">
            <div class="table table-jobs-posting">
                <table>
                    <thead>
                        <tr>
                   
                        <th width="32%">Chức danh</th>
                                       <th width="12%">Ngày đăng<em class="material-icons">arrow_drop_down</em></th>
                                       <th width="10%">Hết hạn<em class="material-icons">sort</em></th>
                                       <th width="10%">Lượt Xem<em class="material-icons">sort</em></th>
                                       <th width="10%">Lượt Nộp<em class="material-icons">sort</em></th>

                                       <th width="15%">Thao tác</th>
                            <!-- <th width="">Chức danh</th>
                            <th width="10%" onclick="setTypeSort('unposting', 'asc', 3)">Ngày đăng<em class="material-icons">arrow_drop_down</em></th>
                            <th width="10%" onclick="setTypeSort('unposting', 'asc', 4)">Hết hạn<em class="material-icons">sort</em></th>
                            <th width="10%" onclick="setTypeSort('unposting', 'asc', 0)">Lượt Xem<em class="material-icons">sort</em></th>
                            <th width="10%" onclick="setTypeSort('unposting', 'asc', 1)">Lượt Nộp<em class="material-icons">sort</em></th>
                            <th width="10%" onclick="setTypeSort('unposting', 'asc', 2)">Email<em class="material-icons">sort</em></th>
                            <th width="15%">Thao tác</th> -->
                        </tr>
                    </thead>
                    <tbody>
                                    <?php if (!empty($job_post)) { ?>
                                       <?php foreach ($job_post as $item) : ?>
                                          <tr>
                                             <!-- <td colspan="9" class="cb-text-center">
                                                <p><strong> Không có vị trí nào trong thư mục này.</strong></p>
                                                 
                                                </td> -->


                                             <td><?= $item["job_title"] ?></td>
                                             <td><?= formatDate($item["posted_date"]) ?></td>
                                             <td><?= formatDate($item["end_date"]) ?></td>

                                             <td><?= $item["view"] ?></td>
                     <td><?php   
                           if(!empty($count_submitted)){
                            $temp=0;
                        foreach ($count_submitted as $value):
                            if($value["job_id"]==$item["id"]){
                                     echo $value["num_submit"];   
                            $temp++;

                           }
                            endforeach;
                     }
                     if($temp==0){
                        echo '0';
                     }
                     
                     ?></td>

                                             <td>
                                                <ul class="list-manipulation">
                                                   <li><a style="cursor: pointer;" class="btn_recruit" data-id="<?= $item["id"] ?>" title="Đăng tuyển"><em class="material-icons">publish </em></a></li>
                                                   <li><a href="http://localhost//itjobs/employer/hrcentral/viewjob/detail/19" title="Chi tiết"><em class="material-icons">visibility </em></a></li>
                                                 
                                                   <li><a href="<?= _WEB_ROOT.'/employer/hrcentral/Posting/edit_job/'.$item["id"] ?>" title="Sửa"><em class="material-icons">created</em></a></li>
                                                   <li class="end"><a href="javascript:void(0);" onclick="deleteItem_job('35BAFFA3');return false;" title="Xóa"><em class="material-icons">cancel </em></a></li>
                                                </ul>
                                             </td>

                                          </tr>
                                       <?php endforeach; ?>
                                 </tbody>

                              <?php } else { ?>
                                 <tr>
                                    <td colspan="9" class="cb-text-center">
                                       <p><strong> Không có vị trí nào trong thư mục này.</strong></p>
                                    </td>
                                 </tr>
                              <?php } ?>
                </table>
            </div>
                    </div>
        <div class="main-button-sticky">
            <div class="button-prev disabled"><em class="mdi mdi-chevron-left"></em></div>
            <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
        </div>
    </div>
</div>


        </div>
      </div>
    </div>
  </section>


</main>
