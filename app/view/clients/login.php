<link rel="stylesheet" href="<?= _WEB_ROOT."/app/public/assets/clients/css/login.css" ?>">
<script defer src="<?= _WEB_ROOT."/app/public/assets/clients/js/login.js"?>"></script>
<style>
    .form-group .text-help {
    color: #dc1d34;
  }
</style>

<main>
        <section class="signin-form cb-section">
            <div class="container">
                <div class="cb-title cb-title-center">
                    <h2>Chào mừng bạn tham gia CareerBuilder.vn</h2>
                </div>
                <div class="box-shadown">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="information">
                                <div class="list-info" id="list-info">
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image is-blue"><img class="lazy-bg"  src="	https://static.careerbuilder.vn/themes/careerbuilder/img/job-alert/i1.png"alt=""></div>
                                            <div class="figcaption">
                                                <div class="title">
                                                    <h3>Thông báo việc làm</h3>
                                                </div>
                                                <div class="caption">
                                                    <p>Được cập nhật các cơ hội việc làm mới nhất từ nhiều công ty hàng đầu</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image is-green"><img class="lazy-bg"  src="	https://static.careerbuilder.vn/themes/careerbuilder/img/job-alert/i2.png" alt=""></div>
                                            <div class="figcaption">
                                                <div class="title">
                                                    <h3>Kiếm việc dễ dàng</h3>
                                                </div>
                                                <div class="caption">
                                                    <p>Tìm được công việc bạn yêu thích phù hợp với kỹ năng và tiêu chí bạn quan tâm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image is-yellow"><img class="lazy-bg"  src="	https://static.careerbuilder.vn/themes/careerbuilder/img/job-alert/i3.png" alt=""></div>
                                            <div class="figcaption">
                                                <div class="title">
                                                    <h3>Ứng tuyển nhanh chóng</h3>
                                                </div>
                                                <div class="caption">
                                                    <p>Dễ dàng ứng tuyển nhiều vị trí mà không cần mất nhiều thời gian</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main-form">
                                <ul class="list-tabs">
                                <li class="active"><a href="<?= _WEB_ROOT.'/account/login' ?>" title="Đăng Nhập ">Đăng Nhập </a></li>
                                    <li > <a href="<?= _WEB_ROOT.'/account/register' ?>" title="Đăng ký">Đăng ký</a></li>
                                </ul>
                             
                             
                                <div class="form-login">
                                    <form name="frmLogin" id="frmLogin" method="POST" >
                                        <div class="form-group form-text">
                                            <input required data-pristine-required-message="Vui lòng nhập email của bạn"  type="text" name="email" id="email" autocomplete="off">
                                            <label for="">Vui lòng nhập email</label>
                                        
                                        </div>
                                       
                                        <div class="form-group form-text">
                                            <input required data-pristine-required-message="Vui lòng nhập password của bạn"  type="password" name="password" autocomplete="off">
                                            <label for="">Vui lòng nhập mật khẩu</label>
                                           
                                        </div>
                                        <div class="form-group form-checkbox">
                                            <input type="checkbox" name="chkSave" value="1" id="chkSave">
                                            <label for="chkSave">Tự động đăng nhập</label>
                                        </div>
                                        <div class="form-group form-submit">
                                            <input type="hidden" name="csrf_token" value="5545314c84717442166559a7b549300aff5e36d6518566998ab36b8478c4516b" />
                                            <button type="submit" id="submit_login" class="btn-gradient">Đăng nhập</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="forgot-password"><a href="https://careerbuilder.vn/vi/jobseekers/forgotpassword">Quên mật khẩu?</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
              </main>