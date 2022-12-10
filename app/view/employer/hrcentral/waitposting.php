<script defer type="module" src="<?= _WEB_ROOT . "/app/public/assets/employer/js/waitposting.js" ?>">
</script>
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
        <em class="mdi mdi-chevron-down"></em>
      </div>
      <div class="main-wrap">
        <div class="left-wrap">
          <ul class="list-menu">
            <li> <a href="http://localhost//itjobs/employer/dashboard" title="Dashboard">Dashboard</a> </li>
            <li class="active"> <a href="<?= _WEB_ROOT . '/employer/hrcentral/posting' ?>" title="Quản Lý Đăng Tuyển">Quản Lý Đăng Tuyển</a> </li>
            <li> <a href="<?= _WEB_ROOT . '/employer/hrcentral/manageresume' ?>" class="active" title="Quản Lý  Ứng Viên">Quản Lý Ứng Viên</a> </li>

            <li>

              <a href="<?= _WEB_ROOT . '/employer/hrcentral/accounts/edit_employer"' ?>" title=" Tài Khoản"> Tài Khoản</a>
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
            <h1 class="title-manage">Việc Làm Chờ Đăng </h1>
            <div class="button"><a class="btn-gradient" href="<?= _WEB_ROOT . '/employer/Postjobs' ?>"><em class="material-icons">create</em>Tạo Mẫu Tuyển Dụng</a></div>
          </div>
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
                  <option value="0">Ngày Cập Nhật</option>
                </select>
              </div>
              <div class="form-group form-date start-date">
                <label>Từ</label>
                <input type="text" readonly="" name="date_from" id="date_from" placeholder="Chọn" class="dates_cus_select" value="">
                <div class="icon"><em class="material-icons">event</em></div>
                <div id="start-date" class="dtpicker-overlay dtpicker-mobile">
                  <div class="dtpicker-bg">
                    <div class="dtpicker-cont">
                      <div class="dtpicker-content">
                        <div class="dtpicker-subcontent"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group form-date end-date">
                <label>Đến</label>
                <input type="text" readonly="" name="date_to" id="date_to" placeholder="Chọn" class="dates_cus_select" value="">
                <div class="icon"><em class="material-icons">event</em></div>
                <div id="end-date" class="dtpicker-overlay dtpicker-mobile">
                  <div class="dtpicker-bg">
                    <div class="dtpicker-cont">
                      <div class="dtpicker-content">
                        <div class="dtpicker-subcontent"></div>
                      </div>
                    </div>
                  </div>
                </div>
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
              <div class="boding-jobs-posting">
                <div class="table table-jobs-posting">
                  <table>
                    <thead>
                      <tr>

                        <th width="40%">Chức danh</th>
                        <th width="25%" onclick="setTypeSort('waitposting', 'asc', 0)">Cập nhật<em class="material-icons">sort</em></th>

                        <th width="15%">Đăng tuyển<em class="material-icons"></em></th>
                        <th width="25%">Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (!empty($job_post)) { ?>
                        <?php foreach ($job_post as $item) : ?>
                          <tr>

                            <td>
                              <div class="title">
                                <a href="">
                                  <?= $item["job_title"] ?>
                                </a>
                              </div>
                              <div class="jobs-view-detail">
                                <p><strong>Ngành nghề:</strong> Bán lẻ / Bán sỉ</p>
                                <p><strong>Địa điểm:</strong> Dak Nông</p>
                              </div>
                            </td>
                            <td>
                              <time><?= formatDate($item["created_date"]); ?></time>
                            </td>

                            <td>
                              <a class="btn_recruit" data-id="<?= $item["id"] ?>" title="Thực hiện đăng tuyển"> <img alt="Thực hiện đăng tuyển" src="https://static.careerbuilder.vn/images/icons/posted_13x16.png">
                              </a>
                            </td>
                            <td>
                              <ul class="list-manipulation">
                                <li><a class="btn_recruit" data-id="<?= $item["id"] ?>" title="Đăng tuyển"><em class="material-icons">publish </em></a></li>
                                <li><a href="<?= _WEB_ROOT . '/employer/hrcentral/viewjob/detail/' . $item['id'] ?>" title="Chi tiết"><em class="material-icons">visibility </em></a></li>
                                <li><a href="<?= _WEB_ROOT . '/employer/hrcentral/posting' ?>/copyjob/lop7cttnq.1667207375/35BAFFA3/1/1" title="Nhân bản"><em class="material-icons">content_copy </em> </a></li>
                                <li><a href="https://careerbuilder.vn/vi/employers/postjobs/35BAFFA3" title="Sửa"><em class="material-icons">created</em></a></li>
                                <li class="end"><a href="javascript:void(0);" onclick="deleteItem_job('35BAFFA3');return false;" title="Xóa"><em class="material-icons">cancel </em></a></li>
                              </ul>
                            </td>
                          </tr>
                        <?php endforeach; ?>

                      <?php } ?>

                    </tbody>
                  </table>
                </div>
                <div class="main-pagination">
                  <ul class="pagination"></ul>
                </div>
              </div>
              <div class="main-button-sticky">
                <div class="button-prev disabled"><em class="mdi mdi-chevron-left"></em></div>
                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
              </div>
            </div>
          </div>
          <div class="jobs-posting-modal jobs-posting-1-modal" style="display: none">
            <div class="modal-body">
              <div class="img-error"><img src="./img/employer/error.png" alt=""></div>
              <p class="name">Thông báo</p>
              <div class="des">
                Quý khách chưa đăng ký gói dịch vụ phù hợp. <br>Vui lòng liên hệ với chúng tôi để được tư vấn sử dụng dịch vụ
              </div>
              <div class="button">
                <a class="btn-gradient" href="https://careerbuilder.vn/vi/employers/services/contact" target="_blank" onclick="closeAllmodal();">Đồng ý</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>


</main>