<link rel="stylesheet" href="<?= _WEB_ROOT."/app/public/assets/clients/css/register.css" ?>">

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
                                            <div class="image is-green"><img class="lazy-bg"src="https://static.careerbuilder.vn/themes/careerbuilder/img/job-alert/i2.png" alt=""></div>
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
                                    <li><a href="<?= _WEB_ROOT.'/account/login' ?>" title="Đăng Nhập ">Đăng Nhập </a></li>
                                    <li class="active"> <a href=""<?= _WEB_ROOT.'/account/register' ?>"" title="Đăng ký">Đăng ký</a></li>
                                </ul>
                           
                                <div class="form-register">
                                    <form name="frmRegister" id="frmRegister" method="post" action="https://careerbuilder.vn/vi/jobseekers/member/register" autocomplete="off">
                                        <div class="form-group form-text">
                                            <input name="firstname" id="firstname" maxlength="15" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                            <label for="">* Tên</label>
                                            <span class="error_firstname" style="display:none"></span>
                                        </div>
                                        <div class="form-group form-text">
                                            <input name="lastname" id="lastname" maxlength="50" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                            <label for="">* Họ và tên lót</label>
                                            <span class="error_lastname" style="display:none"></span>
                                        </div>
                                        <div class="form-group form-text">
                                            <input name="email" id="email" maxlength="50" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                                            <label for="">* Email</label>
                                            <span class="error_email" style="display:none"></span>
                                        </div>
                                        <div class="form-group form-text">
                                            <input type="password" name="password" id="password" maxlength="255" onkeyup="this.setAttribute('value', this.value);" value="">
                                            <label for="">* Mật khẩu</label>
                                            <span class="error_password" style="display:none"></span>
                                        </div>
                                        <div class="form-group form-text">
                                            <input type="password" name="confirm_password" id="confirm_password" maxlength="255" onkeyup="this.setAttribute('value', this.value);" value="">
                                            <label for="">* Xác nhận mật khẩu</label>
                                            <span class="error_confirm_password" style="display:none"></span>
                                        </div>
                                        <div class="form-group form-checkbox">
                                            <input type="checkbox" checked="checked" name="chkAgree" id="chkAgree" value="1">
                                            <label for="chkAgree">Đồng ý với <a href="https://careerbuilder.vn/vi/jobseekers/security">Quy định bảo mật</a> và <a href="https://careerbuilder.vn/vi/jobseekers/use">Thỏa thuận sử dụng</a> của CareerBuilder.vn</label>
                                            <span class="error_chkAgree" style="display:none"></span>
                                        </div>
                                        <div class="form-group form-submit">
                                            <input type="hidden" name="csrf_token_register" value="7bb8fed6c0a501c51763d754a45d940d967db1f29cca30722081c6628d07e1b6" />
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