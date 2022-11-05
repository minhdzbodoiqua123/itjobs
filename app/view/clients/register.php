<link rel="stylesheet" href="<?= _WEB_ROOT."/app/public/assets/clients/css/register.css" ?>">
<script defer src="<?= _WEB_ROOT."/app/public/assets/clients/js/register.js" ?>"></script>

<main>

    <section class="register-form cb-section">
        <div class="container">
            <div class="cb-title cb-title-center">
                <h2>Tham gia ngay hôm nay</h2>
            </div>
            <div class="box-shadown">
                <div class="row">
                    <div class="col-md-6">
                        <div class="information">
                            <div class="list-info" id="list-info">
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image is-blue"><img class="lazy-bg" src="	https://static.careerbuilder.vn/themes/careerbuilder/img/job-alert/i1.png" alt=""></div>
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
                                        <div class="image is-green"><img class="lazy-bg" src="https://static.careerbuilder.vn/themes/careerbuilder/img/job-alert/i2.png" alt=""></div>
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
                                        <div class="image is-yellow"><img class="lazy-bg" src="	https://static.careerbuilder.vn/themes/careerbuilder/img/job-alert/i3.png" alt=""></div>
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
                                <li><a href="<?= _WEB_ROOT . '/account/login' ?>" title="Đăng Nhập ">Đăng Nhập </a></li>
                                <li class="active"> <a href="" <?= _WEB_ROOT . '/account/register' ?>"" title="Đăng ký">Đăng ký</a></li>
                            </ul>

                            <div class="form-register">
                                <form action="" name="frmRegister" id="frmRegister" method="post"  >
                                   
                                    <div class="form-group form-text">
                                        <input required data-pristine-required-message="Nhập họ và tên của bạn" name="fullname"  maxlength="50" type="text"  >
                                        <label for="">* Họ và tên </label>
                                        <span class="error_lastname" style="display:none"></span>
                                    </div>
                                    <div class="form-group form-text">
                                        <input  required data-pristine-required-message="Vui lòng nhập email của bạn" type="email" name="email" id="email" maxlength="50" type="text" >
                                        <label for="">* Email</label>
                                        <span class="error_email" style="display:none"></span>
                                    </div>
                                    <div class="form-group form-text">
                                    <input type="password" id="pwd" name="password" required data-pristine-required-message="Please choose a password" data-pristine-pattern= "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/" data-pristine-pattern-message="Tối thiểu 8 ký tự, ít nhất một chữ hoa, một chữ thường và một số" class="form-control" />
                               
                                        <label for="">* Mật khẩu</label>
                                    
                                    </div>
                                    <div class="form-group form-text">
                                   
                                    <input type="password" data-pristine-equals="#pwd" data-pristine-equals-message="Passwords don't match" class="form-control" />
                                        <label for="">* Xác nhận mật khẩu</label>
                                        <span class="error_confirm_password" style="display:none"></span>
                                    </div>
                                   
                                    <div class="form-group form-submit">
                                        <input type="hidden" name="csrf_token_register" value="" />
                                        <button class="btn-gradient">Đăng ký</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

