
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
                            <li> <a class="active" href="https://careerbuilder.vn/vi/jobseekers/dashboard" title="Quản lý hồ sơ"> <em class="material-icons">color_lens</em><span>Quản lý hồ sơ</span></a></li>
                            <li style="display:none"> <a href="https://careerbuilder.vn/vi/jobseekers/cv-hay/my-profile"> <em class="material-icons">person</em><span>Hồ sơ Careerbuilder</span></a></li>
                            <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile"> <em class="material-icons">person</em><span>Hồ sơ Careerbuilder</span></a></li>
                            <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/changetemplate"> <em class="material-icons">portrait</em><span>Chỉnh mẫu hồ sơ</span></a></li>
                            <li><a class="collapse " href="javascript:;"><em class="material-icons">edit</em><span>Việc làm của tôi</span></a>
                                <ul class="list-unstyled collapse">
                                    <li><a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobsaved">Việc làm đã lưu</a></li>
                                    <li><a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobapplied">Việc làm đã nộp</a></li>
                                </ul>
                            </li>
                            <li> <a href="https://careerbuilder.vn/vi/jobseekers/jobalert"><em class="material-icons">notifications</em><span>Thông Báo Việc Làm</span></a></li>
                            <li> <a class="collapse " href="javascript:;"><em class="material-icons">remove_red_eye</em><span>Nhà tuyển dụng của tôi</span></a>
                                <ul class="list-unstyled collapse">
                                    <li> <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp">Nhà tuyển dụng xem hồ sơ của tôi</a></li>
                                    <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/following">Following</a></li>
                                    <li> <a href="https://careerbuilder.vn/vi/jobseekers/blacklist">Nhà tuyển dụng được cài đặt hạn chế xem hồ sơ của tôi</a></li>
                                    <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/feedback">Phản hồi từ nhà tuyển dụng</a></li>
                                </ul>
                            </li>
                            <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/notify" title="Xem tất cả thông báo"> <em class="material-icons">textsms</em><span>Xem tất cả thông báo</span></a></li>
                            <li> <a class="collapse " href="javascript:;"><em class="material-icons">settings</em><span>Cài đặt</span></a>
                                <ul class="list-unstyled collapse">
                                    <li> <a href="https://careerbuilder.vn/vi/jobseekers/member/myaccount" title="Tài Khoản">Tài Khoản</a></li>
                                    <li> <a href="https://careerbuilder.vn/vi/jobseekers/member/emailmanagement" title="Cài Đặt Thông Báo">Cài Đặt Thông Báo</a></li>
                                </ul>
                            </li>
                            <li> <a href="https://careerbuilder.vn/vi/jobseekers/logout" title="Thoát"> <em class="material-icons">power_settings_new</em><span>Thoát</span></a></li>
                        </ul>
                    </div>
                    <div class="toggle-nav"><em class="material-icons">menu_open</em></div>
                </nav>
            </div>
            <div class="content-inner">
                
                <div class="container-fluid">
                    <div class="dash-board-wrap">
                        <div class="row mergebox">
                            <div class="col-lg-8">
                                <div class="widget widget-2">
                                    <div class="widget-head">
                                        <div class="cb-title-h3">
                                            <h3>Careerbuilder Profile</h3>
                                        </div>
                                    </div>
                                    <div class="widget-body">
                                        <div class="row">
                                            <div class="col-lg-4 col-xl-3">
                                                <div class="img-info">
                                                    <div class="figure">
                                                        <div class="image img-result hide">
                                                            <input style="display: none;" onchange="return ajaxFileUpload();" type="file" class="file" id="fileAvatar" name="fileAvatar">
                                                            <img id="img_mem_avatar" src="https://images.careerbuilder.vn/jobseekers/20221105/6327211_1667640553_162916.png" alt="Một Ba">
                                                        </div>
                                                        <div class="edit-image dropdown"><em class="mdi mdi-image-edit"></em>
                                                            <div class="dropdown-menu">
                                                                <ul>
                                                                    <li class="upload-pro"><a href="javascript:void(0);" onclick="choose_file();"> <em class="material-icons">add_photo_alternate</em><span>Tải hình ảnh</span></a></li>
                                                                    <li class="view-pro"><a href="javascript:void(0);" onclick="removeAvarta();"> <em class="material-icons">highlight_off</em><span>Xóa hình ảnh</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mobile-show">
                                                        <div class="cb-name">
                                                            <h2>Một Ba</h2>
                                                        </div>
                                                        <div class="information">
                                                            <div class="assistant"><span id="titleresume_17611557">Nhân viên nhân sự</span> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile" style="margin-left: 10px" title="Hồ sơ Careerbuilder"><em class="material-icons" style="font-size:16px">create</em></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-xl-9">
                                                <div class="cb-name">
                                                    <h2>Một Ba</h2>
                                                </div>
                                                <div class="information">
                                                    <div class="assistant"><span>Nhân viên nhân sự</span> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile" style="margin-left: 10px" title="Hồ sơ Careerbuilder"><em class="material-icons" style="font-size:16px">create</em></a></div>
                                                    <ul class="desired">
                                                        <li>
                                                            <em class="material-icons">star</em>
                                                            <p>Số năm kinh nghiệm 1 </p>
                                                        </li>
                                                        <li>
                                                            <em class="material-icons">person</em>
                                                            <p>Cấp bậc mong muốn: <span>Chưa cập nhật</span></p>
                                                        </li>
                                                        <li>
                                                            <em class="material-icons">attach_money</em>
                                                            <p>Mức lương mong muốn: <span>Chưa cập nhật</span></p>
                                                        </li>
                                                        <li style="position: relative;">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <p id="date_17611557">
                                                                Ngày cập nhật: 07/11/2022
                                                                <a title="Cập nhật hồ sơ" href="javascript:void(0);" class="ac_refesh" rel="17611557">
                            <span class="material-icons refeshdate ">loop</span>
                          </a>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="progress-bar-status incomplete">
                                                    <div class="profile-strength">
                                                        <p>Mức độ hoàn thành: <span>Chưa Hoàn Tất</span></p>
                                                    </div>
                                                    <div class="noti"><em class="mdi mdi-alert-circle-outline"></em>
                                                        <p>Chưa hoàn thành. Bạn vui lòng cập nhật và hoàn thành hồ sơ</p>
                                                    </div>
                                                    <div class="progress-bar">
                                                        <div class="progress">
                                                            <progress class="progress-main" max="7" value="0"></progress>
                                                        </div>
                                                        <div class="progress-row">
                                                            <div class="line active"></div>
                                                            <div class="line "></div>
                                                            <div class="line "></div>
                                                            <div class="line "></div>
                                                            <div class="line "></div>
                                                            <div class="line "></div>
                                                            <div class="line "><span class="success"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 cvcht-slide">
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper">


                                                        <div class="swiper-slide">
                                                            <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#widget-14">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <img src="img/dash-board/i3.png" alt="">
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                        Mục tiêu nghề nghiệp
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="swiper-slide">
                                                            <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#widget-18">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <img src="img/dash-board/i5.png" alt="">
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                        Công việc mong muốn
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="swiper-slide">
                                                            <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#widget-15">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <img src="img/dash-board/i4.png" alt="">
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                        Kinh nghiệm làm việc
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="swiper-slide">
                                                            <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#widget-16">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <img src="img/dash-board/i7.png" alt="">
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                        Học vấn
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="swiper-slide">
                                                            <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#certificate-section">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <img src="img/dash-board/i10.png" alt="">
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                        Chứng chỉ
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="swiper-slide">
                                                            <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#language-section">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <span class="material-icons">translate</span>
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                        Trình độ ngôn ngữ
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="swiper-slide">
                                                            <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#widget-17">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <img src="img/dash-board/i9.png" alt="">
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                        Kỹ năng
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="swiper-slide">
                                                            <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#widget-19">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <img src="img/dash-board/i6.png" alt="">
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                        Thành tích
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="swiper-slide">
                                                            <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#other-activity-section">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <img src="img/dash-board/i13.png" alt="">
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                        Hoạt động khác
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="swiper-slide">
                                                            <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#widget-20">
                                                                <div class="item-cvcht">
                                                                    <div class="col-sm-3 icon">
                                                                        <img src="img/dash-board/i8.png" alt="">
                                                                    </div>
                                                                    <div class="col-sm-9 txt">
                                                                        Người tham khảo
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-next">
                                                    <span class="lnr lnr-chevron-right"></span>
                                                </div>
                                                <div class="swiper-prev">
                                                    <span class="lnr lnr-chevron-left"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 function-bottom">
                                                <div class="button-list">
                                                    <div class="item">
                                                        <a title="Cập nhật hồ sơ" href="javascript:void(0);" class="ac_refesh" rel="17611557">
                        <span class="mdi mdi-rotate-3d-variant"></span>
                        Cập nhật hồ sơ
                      </a>
                                                    </div>
                                                    <div class="item">
                                                        <a id="btn_view_cbprofile" href="javascript:void(0);">
                        <span class="mdi mdi-eye"></span>
                        Xem hồ sơ
                      </a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="javascript:void(0);" onclick="downloadCvProfile(17611557)">
                        <span class="mdi mdi-download"></span>
                        Tải hồ sơ
                      </a>
                                                    </div>
                                                </div>
                                                <div class="edit-profile">
                                                    <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/changetemplate">Chỉnh mẫu hồ sơ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="widget-b searchable-cv-widget">
                                    <h4>Cho phép tìm kiếm Profile CareerBuilder
                                        <div class="tips p1" data-type="1">
                                            <div class="icon">
                                                <em class="mdi mdi-lightbulb"></em>
                                            </div>
                                            <p>Tips</p>
                                        </div>
                                    </h4>
                                    <div class="switch-status group_searchable" id="cv_searchable_17611557" data-id="17611557" data-complete="0">
                                        <a href="javascript:void(0);" data-type="2" class="lock  active ">
                <em class="mdi mdi-lock"></em>Khóa
              </a>
                                        <a href="javascript:void(0);" data-type="1" class="public ">
                <em class="mdi mdi-web"></em>Công khai
              </a>
                                        <a href="javascript:void(0);" data-type="3" class="flash ">
                <em class="mdi mdi-flash"></em>Khẩn cấp
              </a>
                                    </div>
                                    <p>Bạn có thể cho phép nhà tuyển dụng tìm kiếm hồ sơ CareerBuilder</p>
                                </div>

                                <div class="widget-b jobalert-cv-widget">
                                    <h4>Nhận thông báo việc làm
                                        <div class="tips p2" data-type="2">
                                            <div class="icon">
                                                <em class="mdi mdi-lightbulb"></em>
                                            </div>
                                            <p>Tips</p>
                                        </div>
                                    </h4>
                                    <div class="switch-status group_jobalert_top" id="cv_jobalert_17611557" data-id="17611557" data-complete="0">
                                        <a href="javascript:void(0);" data-type="0" class="inactive  active ">Không nhận</a>
                                        <a href="javascript:void(0);" data-type="1" class="actives ">Nhận</a>
                                    </div>
                                    <p>Nhận thông báo việc làm phù hợp với hồ sơ này mỗi 2 tuần</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="widget-1 b1">
                                    <div class="widget-head">
                                        <p>0</p>
                                        <p>Nhà tuyển dụng xem hồ sơ của tôi</p>
                                    </div>
                                    <div class="widget-body">
                                        <div class="item">
                                            <div class="number">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp" class="x1">
                            0
                        </a>
                                            </div>
                                            <p>
                                                <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp">
                            NTD xem qua hồ sơ CB
                        </a>
                                            </p>
                                        </div>
                                        <div class="item">
                                            <div class="number">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp" class="x2">
                            0
                        </a>
                                            </div>
                                            <div>
                                                <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp">
                            NTD xem qua hồ sơ việc làm khẩn cấp
                        </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="widget-1 b2">
                                    <div class="widget-head">
                                        <p>0</p>
                                        <p>Nhà tuyển dụng được cài đặt hạn chế xem hồ sơ</p>
                                    </div>
                                    <div class="widget-body">
                                        <div class="item">
                                            <div class="nonum"><a href="https://careerbuilder.vn/vi/jobseekers/blacklist">Xem thêm</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="widget-1 b3">
                                    <div class="widget-head">
                                        <p>0</p>
                                        <p>Việc làm đã lưu</p>
                                    </div>
                                    <div class="widget-body">
                                        <div class="item">
                                            <div class="nonum"><a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobsaved">Xem thêm</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="widget-1 b4">
                                    <div class="widget-head">
                                        <p>0</p>
                                        <p>Việc làm đã nộp</p>
                                    </div>
                                    <div class="widget-body">
                                        <div class="item">
                                            <div class="number">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobapplied" class="x3">
                            0
                        </a>
                                            </div>
                                            <div><a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobapplied">Nộp ở trạng thái bình thường</a></div>
                                        </div>
                                        <div class="item">
                                            <div class="number">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobapplied" class="x4">
                            0
                        </a>
                                            </div>
                                            <div><a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobapplied">Nộp ở trạng thái Tìm việc khẩn cấp</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="widget widget-4 attached-resume">
                                    <div class="widget-head">
                                        <div class="cb-title-h3">
                                            <h3>Hồ sơ đính kèm</h3>
                                        </div>
                                        <p>Ngoài hồ sơ CareerBuilder, bạn có thể tạo hồ sơ đính kèm để ứng tuyển và tìm kiếm bởi nhà tuyển dụng</p>
                                    </div>
                                    <div class="widget-body">

                                        <div class="box-text">
                                            <h4>Bạn cần tải hoặc tạo hồ sơ</h4>
                                            <p>Vui lòng thêm mục tiêu nghề nghiệp</p>
                                        </div>
                                        <div class="button-upload" id="created-resume"><a href="javascript:void(0);">Tạo  Hồ Sơ Ngay!</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="widget widget-5">
                                    <div class="widget-head">
                                        <div class="cb-title-h3">
                                            <h3>Cài đặt hạn chế nhà tuyển dụng</h3>
                                        </div>
                                    </div>
                                    <div class="widget-body">
                                        <div class="main-form">
                                            <div class="form-group form-text">
                                                <div class="form-group form-keyword">
                                                    <input type="text" name="company_name_blacklist" placeholder="Nhập tên công ty" class="company_name" id="company_name_blacklist">
                                                    <div class="cleartext"><em class="mdi mdi-close-circle"></em></div>
                                                </div>
                                                <div class="form-group form-submit"><a class="btn-gradient" href="javascript:void(0);" onclick="addBlackListDashboard();">Thêm</a></div>
                                            </div>
                                        </div>
                                        <div class="top-employers-list">
                                        </div>
                                        <div class="main-form">
                                            <div class="form-group form-text">
                                                <div class="form-group form-keyword">
                                                    <input type="text" name="company_domain_blacklist" placeholder="Nhập domain công ty" class="company_domain" id="company_domain_blacklist">
                                                    <div class="cleartext active-clear"><em class="mdi mdi-close-circle"></em></div>
                                                </div>
                                                <div class="form-group form-submit"><a class="btn-gradient" href="javascript:void(0);" onclick="addBlackListDomain();">Thêm</a></div>
                                            </div>
                                        </div>
                                        <div class="domain-saved">

                                        </div>
                                        <div class="view-more"><a href="https://careerbuilder.vn/vi/jobseekers/blacklist-domain">Xem thêm <span class="mdi mdi-arrow-right"></span></a></div>

                                        <form action="" method="post" id="frmAddBlacklist"><input type="hidden" value="0" name="jblacklist_id[]" id="company_id_blacklist"></form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="widget widget-6">
                                    <div class="widget-head">
                                        <div class="cb-title-h3">
                                            <h3>
                                                <p style="font-size:24px;">Xem các vị trí gợi ý với CV của bạn</p>
                                                <p></p>

                                                <p style="font-size:24px;">Ứng tuyển nhiều vị trí phù hợp - Gia tăng cơ hội phỏng vấn ngay!</p>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="apply-job-area">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="list-job jobs-list-ajax" id="jobs-list">
                                                    <div class="item">
                                                        <div class="ckb-item">
                                                            <label class="container-ckb">
        <input type="checkbox" checked="checked" name="jobchk[]" value="35BAE939">
        <span class="checkmark"></span>
    </label>
                                                        </div>
                                                        <div class="job-item" id="job-item-35BAE939">
                                                            <div class="figure">
                                                                <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/ngan-hang-tmcp-ban-viet-viet-capital-bank.35A66798.html" target="_blank" title="Ngân hàng TMCP Bản Việt (Viet Capital Bank)"><img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot4/97944/79x79/104652bvb.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Ngân hàng TMCP Bản Việt (Viet Capital Bank)"></a></div>
                                                                <div class="figcaption">
                                                                    <div class="title"><a class="job_link" data-id="35BAE939" href="https://careerbuilder.vn/vi/tim-viec-lam/human-resource-business-partner.35BAE939.html" title="Human Resource Business Partner" target="_blank">Human Resource Business Partner</a></div>
                                                                    <div class="caption">
                                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/ngan-hang-tmcp-ban-viet-viet-capital-bank.35A66798.html" title="Ngân hàng TMCP Bản Việt (Viet Capital Bank)">Ngân hàng TMCP Bản Việt (Viet Capital Bank)</a>
                                                                        <p class="salary"><em class="fa fa-usd"></em> Cạnh Tranh</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hồ Chí Minh | Hà Nội</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="ckb-item">
                                                            <label class="container-ckb">
        <input type="checkbox" checked="checked" name="jobchk[]" value="35BAE935">
        <span class="checkmark"></span>
    </label>
                                                        </div>
                                                        <div class="job-item" id="job-item-35BAE935">
                                                            <div class="figure">
                                                                <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/westcoast-international-healthcare-company.35A7F9E4.html" target="_blank" title="WESTCOAST INTERNATIONAL HEALTHCARE COMPANY"><img  class="lazy-bg" data-src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/logo-default.png" src="../kiemviecv32/images/graphics/blank.gif" alt="WESTCOAST INTERNATIONAL HEALTHCARE COMPANY"></a></div>
                                                                <div class="figcaption">
                                                                    <div class="title"><a class="job_link" data-id="35BAE935" href="https://careerbuilder.vn/vi/tim-viec-lam/clinical-assistant-receptionists.35BAE935.html" title="Clinical Assistant/ Receptionists" target="_blank">Clinical Assistant/ Receptionists</a></div>
                                                                    <div class="caption">
                                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/westcoast-international-healthcare-company.35A7F9E4.html" title="WESTCOAST INTERNATIONAL HEALTHCARE COMPANY">WESTCOAST INTERNATIONAL HEALTHCARE COMPANY</a>
                                                                        <p class="salary"><em class="fa fa-usd"></em> Cạnh Tranh</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hồ Chí Minh</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="ckb-item">
                                                            <label class="container-ckb">
        <input type="checkbox" checked="checked" name="jobchk[]" value="35BA7135">
        <span class="checkmark"></span>
    </label>
                                                        </div>
                                                        <div class="job-item" id="job-item-35BA7135">
                                                            <div class="figure">
                                                                <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/tong-cong-ty-doi-tac-chan-that.35A7F3FC.html" target="_blank" title="Tổng Công ty Đối Tác Chân Thật"><img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot0/199420/79x79/101854logo.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Tổng Công ty Đối Tác Chân Thật"></a></div>
                                                                <div class="figcaption">
                                                                    <div class="title"><a class="job_link" data-id="35BA7135" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung-co-kinh-nghiem.35BA7135.html" title="NHÂN VIÊN TUYỂN DỤNG CÓ KINH NGHIỆM" target="_blank">NHÂN VIÊN TUYỂN DỤNG CÓ KINH NGHIỆM</a></div>
                                                                    <div class="caption">
                                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/tong-cong-ty-doi-tac-chan-that.35A7F3FC.html" title="Tổng Công ty Đối Tác Chân Thật">Tổng Công ty Đối Tác Chân Thật</a>
                                                                        <p class="salary"><em class="fa fa-usd"></em> 9 Tr - 12 Tr VND</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hồ Chí Minh</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="ckb-item">
                                                            <label class="container-ckb">
        <input type="checkbox" checked="checked" name="jobchk[]" value="35BA70CC">
        <span class="checkmark"></span>
    </label>
                                                        </div>
                                                        <div class="job-item" id="job-item-35BA70CC">
                                                            <div class="figure">
                                                                <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-tap-doan-dau-tu-ecapital.35A93AC2.html" target="_blank" title="CÔNG TY CỔ PHẦN TẬP ĐOÀN ĐẦU TƯ ECAPITAL"><img  class="lazy-bg" data-src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/logo-default.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN TẬP ĐOÀN ĐẦU TƯ ECAPITAL"></a></div>
                                                                <div class="figcaption">
                                                                    <div class="title"><a class="job_link" data-id="35BA70CC" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35BA70CC.html" title="Nhân viên tuyển dụng" target="_blank">Nhân viên tuyển dụng</a></div>
                                                                    <div class="caption">
                                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-tap-doan-dau-tu-ecapital.35A93AC2.html" title="CÔNG TY CỔ PHẦN TẬP ĐOÀN ĐẦU TƯ ECAPITAL">CÔNG TY CỔ PHẦN TẬP ĐOÀN ĐẦU TƯ ECAPITAL</a>
                                                                        <p class="salary"><em class="fa fa-usd"></em> Cạnh Tranh</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hà Nội</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="ckb-item">
                                                            <label class="container-ckb">
        <input type="checkbox" checked="checked" name="jobchk[]" value="35BA71D3">
        <span class="checkmark"></span>
    </label>
                                                        </div>
                                                        <div class="job-item" id="job-item-35BA71D3">
                                                            <div class="figure">
                                                                <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-mtv-nang-luong-an-viet-phat.35A75F9E.html" target="_blank" title="Công Ty TNHH MTV Năng Lượng An Việt Phát	"><img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot8/161438/79x79/152942logo.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty TNHH MTV Năng Lượng An Việt Phát	"></a></div>
                                                                <div class="figcaption">
                                                                    <div class="title"><a class="job_link" data-id="35BA71D3" href="https://careerbuilder.vn/vi/tim-viec-lam/hanh-chinh-nhan-su-duc-hoa-long-an.35BA71D3.html" title="Hành Chính - Nhân Sự (Đức Hòa, Long An)"
                                                                            target="_blank">Hành Chính - Nhân Sự (Đức Hòa, Long An)</a></div>
                                                                    <div class="caption">
                                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-mtv-nang-luong-an-viet-phat.35A75F9E.html" title="Công Ty TNHH MTV Năng Lượng An Việt Phát	">Công Ty TNHH MTV Năng Lượng An Việt Phát	</a>
                                                                        <p class="salary"><em class="fa fa-usd"></em> 9 Tr - 13 Tr VND</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Long An</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="ckb-item">
                                                            <label class="container-ckb">
        <input type="checkbox" checked="checked" name="jobchk[]" value="35BA706B">
        <span class="checkmark"></span>
    </label>
                                                        </div>
                                                        <div class="job-item" id="job-item-35BA706B">
                                                            <div class="figure">
                                                                <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-cong-nghiep-bao-tien.35A8D904.html" target="_blank" title="CÔNG TY TNHH CÔNG NGHIỆP BẢO TIÊN"><img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot2/258052/79x79/143813logo.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY TNHH CÔNG NGHIỆP BẢO TIÊN"></a></div>
                                                                <div class="figcaption">
                                                                    <div class="title"><a class="job_link" data-id="35BA706B" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-nhan-su-phu-trach-tuyen-dung.35BA706B.html" title="Nhân viên nhân sự phụ trách tuyển dụng"
                                                                            target="_blank">Nhân viên nhân sự phụ trách tuyển dụng</a></div>
                                                                    <div class="caption">
                                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-cong-nghiep-bao-tien.35A8D904.html" title="CÔNG TY TNHH CÔNG NGHIỆP BẢO TIÊN">CÔNG TY TNHH CÔNG NGHIỆP BẢO TIÊN</a>
                                                                        <p class="salary"><em class="fa fa-usd"></em> 6,5 Tr - 8 Tr VND</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hải Phòng</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="ckb-item">
                                                            <label class="container-ckb">
        <input type="checkbox" checked="checked" name="jobchk[]" value="35BAB1D0">
        <span class="checkmark"></span>
    </label>
                                                        </div>
                                                        <div class="job-item" id="job-item-35BAB1D0">
                                                            <div class="figure">
                                                                <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-dau-tu-bica-holdings.35A9265B.html" target="_blank" title="CÔNG TY CỔ PHẦN ĐẦU TƯ BICA HOLDINGS"><img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot1/277851/79x79/173743z3637974593018_b9add5518b791c8c38ed396058652806.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN ĐẦU TƯ BICA HOLDINGS"></a></div>
                                                                <div class="figcaption">
                                                                    <div class="title"><a class="job_link" data-id="35BAB1D0" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-hanh-chinh-nhan-su-tong-hop.35BAB1D0.html" title="Nhân viên hành chính nhân sự tổng hợp"
                                                                            target="_blank">Nhân viên hành chính nhân sự tổng hợp</a></div>
                                                                    <div class="caption">
                                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-dau-tu-bica-holdings.35A9265B.html" title="CÔNG TY CỔ PHẦN ĐẦU TƯ BICA HOLDINGS">CÔNG TY CỔ PHẦN ĐẦU TƯ BICA HOLDINGS</a>
                                                                        <p class="salary"><em class="fa fa-usd"></em> 9 Tr - 10 Tr VND</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hà Nội</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="ckb-item">
                                                            <label class="container-ckb">
        <input type="checkbox" checked="checked" name="jobchk[]" value="35BAB1AD">
        <span class="checkmark"></span>
    </label>
                                                        </div>
                                                        <div class="job-item" id="job-item-35BAB1AD">
                                                            <div class="figure">
                                                                <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-dich-vu-va-thuong-mai-tan-nam-chinh.35A7C53B.html" target="_blank" title="Công ty TNHH Dịch vụ và Thương Mại Tân Nam Chinh"><img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot1/187451/79x79/105935logotncen.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công ty TNHH Dịch vụ và Thương Mại Tân Nam Chinh"></a></div>
                                                                <div class="figcaption">
                                                                    <div class="title"><a class="job_link" data-id="35BAB1AD" href="https://careerbuilder.vn/vi/tim-viec-lam/truong-vpdd-tai-binh-thuan.35BAB1AD.html" title="Trưởng VPĐD tại Bình Thuận" target="_blank">Trưởng VPĐD tại Bình Thuận</a></div>
                                                                    <div class="caption">
                                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-dich-vu-va-thuong-mai-tan-nam-chinh.35A7C53B.html" title="Công ty TNHH Dịch vụ và Thương Mại Tân Nam Chinh">Công ty TNHH Dịch vụ và Thương Mại Tân Nam Chinh</a>
                                                                        <p class="salary"><em class="fa fa-usd"></em> 20 Tr - 25 Tr VND</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Bình Thuận</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="ckb-item">
                                                            <label class="container-ckb">
        <input type="checkbox" checked="checked" name="jobchk[]" value="35BAB1A4">
        <span class="checkmark"></span>
    </label>
                                                        </div>
                                                        <div class="job-item" id="job-item-35BAB1A4">
                                                            <div class="figure">
                                                                <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-sat-thep-ngoc-bien.35A8A045.html" target="_blank" title="Công Ty TNHH Sắt Thép Ngọc Biển"><img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot5/243525/79x79/83327e63209683187c3d99a96.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty TNHH Sắt Thép Ngọc Biển"></a></div>
                                                                <div class="figcaption">
                                                                    <div class="title"><a class="job_link" data-id="35BAB1A4" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung-va-dao-tao.35BAB1A4.html" title="NHÂN VIÊN TUYỂN DỤNG VÀ ĐÀO TẠO" target="_blank">NHÂN VIÊN TUYỂN DỤNG VÀ ĐÀO TẠO</a></div>
                                                                    <div class="caption">
                                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-sat-thep-ngoc-bien.35A8A045.html" title="Công Ty TNHH Sắt Thép Ngọc Biển">Công Ty TNHH Sắt Thép Ngọc Biển</a>
                                                                        <p class="salary"><em class="fa fa-usd"></em> 9 Tr - 12 Tr VND</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hồ Chí Minh</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="ckb-item">
                                                            <label class="container-ckb">
        <input type="checkbox" checked="checked" name="jobchk[]" value="35BAC394">
        <span class="checkmark"></span>
    </label>
                                                        </div>
                                                        <div class="job-item" id="job-item-35BAC394">
                                                            <div class="figure">
                                                                <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-my-pham-thien-nhien-mela.35A93BDF.html" target="_blank" title="Công ty TNHH mỹ phẩm thiên nhiên Mela"><img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot9/283359/79x79/85557logo-mela-final-brown-v.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công ty TNHH mỹ phẩm thiên nhiên Mela"></a></div>
                                                                <div class="figcaption">
                                                                    <div class="title"><a class="job_link" data-id="35BAC394" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-nhan-su.35BAC394.html" title="Nhân viên nhân sự" target="_blank">Nhân viên nhân sự</a></div>
                                                                    <div class="caption">
                                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-my-pham-thien-nhien-mela.35A93BDF.html" title="Công ty TNHH mỹ phẩm thiên nhiên Mela">Công ty TNHH mỹ phẩm thiên nhiên Mela</a>
                                                                        <p class="salary"><em class="fa fa-usd"></em> 9 Tr - 11 Tr VND</p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>Hà Nội</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                              
                                                </div>
                                                <div class="action">
                                                    <div class="check-area">
                                                        <a href="javascript:void(0)" id="check-uncheck"></a>
                                                    </div>
                                                </div>

                                            
                                            </div>

                                            <div class="col-lg-8" id="job-detail-template">
                                                <div class="detail-loading">
                                                    <div class="job-desc">
                                                        <div class="job-item">
                                                            <div class="figure">
                                                                <div class="image"><a href="#"><img src="" alt=""></a></div>
                                                                <div class="figcaption">
                                                                    <div class="title">
                                                                        <a href="#">
                                                                            <p class="text-line text-line-sm"></p>
                                                                        </a>
                                                                    </div>
                                                                    <div class="caption">
                                                                        <p class="company-name text-line text-line-sm"></p>
                                                                        <p class="salary text-line text-line-sm"></p>
                                                                        <div class="location">
                                                                            <ul>
                                                                                <li>
                                                                                    <p class="text-line text-line-sm"></p>
                                                                                </li>
                                                                                <li>
                                                                                    <p class="text-line text-line-sm"></p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="job-detail">
                                                            <div class="row-detail">
                                                                <h3>
                                                                    js_job_information_job
                                                                </h3>
                                                                <div class="row row-custom">
                                                                    <div class="col-lg-3">
                                                                        <div class="box-info">
                                                                            <h4>
                                                                                Đăng trong vòng
                                                                            </h4>
                                                                            <p class="text-line text-line-sm"></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="box-info">
                                                                            <h4>
                                                                                Phương thức làm việc
                                                                            </h4>
                                                                            <p class="text-line text-line-sm"></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="box-info">
                                                                            <h4>
                                                                                job_jobs_detail_job_level
                                                                            </h4>
                                                                            <p class="text-line text-line-sm"></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="box-info">
                                                                            <h4>
                                                                                job_jobs_detail_job_title
                                                                            </h4>
                                                                            <p class="text-line text-line-sm"></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="box-info">
                                                                            <h4>
                                                                                job_jobs_experience
                                                                            </h4>
                                                                            <p class="text-line text-line-sm"></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="box-info">
                                                                            <h4>
                                                                                job_jobs_detail_job_lastdate
                                                                            </h4>
                                                                            <p class="text-line text-line-sm"></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-detail">
                                                                <h3>
                                                                    job_jobs_detail_Welfare
                                                                </h3>
                                                                <ul class="welfare-list">

                                                                    <li>
                                                                        <p class="text-line text-line-sm"></p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-line text-line-sm"></p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-line text-line-sm"></p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="row-detail">
                                                                <h3>job_jobs_detail_work_desc</h3>
                                                                <div class="text-desc">
                                                                    <p class="text-line text-line-sm"></p>
                                                                    <p class="text-line text-line-sm"></p>
                                                                    <p class="text-line text-line-sm"></p>
                                                                </div>
                                                            </div>
                                                            <div class="row-detail">
                                                                <h3>job_jobs_detail_job_skill</h3>
                                                                <div class="text-desc">
                                                                    <p class="text-line text-line-sm"></p>
                                                                    <p class="text-line text-line-sm"></p>
                                                                    <p class="text-line text-line-sm"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <style>
                                                        @-webkit-keyframes placeHolderShimmer {
                                                            0% {
                                                                background-position: -468px 0;
                                                            }
                                                            100% {
                                                                background-position: 468px 0;
                                                            }
                                                        }

                                                        @keyframes placeHolderShimmer {
                                                            0% {
                                                                background-position: -468px 0;
                                                            }
                                                            100% {
                                                                background-position: 468px 0;
                                                            }
                                                        }

                                                        .animated-background,
                                                        .text-line {
                                                            -webkit-animation-duration: 1.25s;
                                                            animation-duration: 1.25s;
                                                            -webkit-animation-fill-mode: forwards;
                                                            animation-fill-mode: forwards;
                                                            -webkit-animation-iteration-count: infinite;
                                                            animation-iteration-count: infinite;
                                                            -webkit-animation-name: placeHolderShimmer;
                                                            animation-name: placeHolderShimmer;
                                                            -webkit-animation-timing-function: linear;
                                                            animation-timing-function: linear;
                                                            background: #dddddd;
                                                            background: -webkit-gradient(linear, right top, left top, from(#f1f1f1), color-stop(#dddddd), to(#f1f1f1));
                                                            ;
                                                            background: linear-gradient(to left, #f1f1f1, #dddddd, #f1f1f1);
                                                            ;
                                                            background-size: 1000px 400px;
                                                            height: 96px;
                                                            position: relative;
                                                        }

                                                        .animated-background {
                                                            width: 100%;
                                                            height: 360px;
                                                        }

                                                        .text-line {
                                                            height: 14px;
                                                            width: 150px;
                                                            margin: 1px 0;
                                                            display: block;
                                                        }

                                                        .text-line-lg {
                                                            height: 30px;
                                                        }

                                                        .text-line-sm {
                                                            height: 20px
                                                        }

                                                        .text-line-xs {
                                                            height: 15px;
                                                        }
                                                    </style>
                                                </div>
                                                <div class="detail-content"></div>

                                                <div class="follow-area">
                                                    <a href="https://careerbuilder.vn/vi/jobs/recommended" class="left-follow">Xem thêm</a>
                                                    <div class="right-follow">
                                                        <a href="javascript:void(0)" class="btn-apply-all btn-gradient-1">
                    Ứng tuyển các vị trí đã chọn&nbsp;<span id="countjob"></span>
                    </a>
                                                        <a href="javascript:void(0)" class="btn-apply-now btn-gradient">
                    Ứng tuyển ngay
                    </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <style>
                        .detail-loading {
                            display: none;
                        }
                    </style>
            


                </div>
            </div>
        </div>

        <div class="create-new-resume" style="display: none">
            <div class="modal-title">
                <h3>Tạo hồ sơ mới </h3>
            </div>
            <div class="modal-body">
                <div class="content">
                    <p>Ngoài hồ sơ CareerBuilder, bạn có thể tạo hồ sơ đính kèm để ứng tuyển và tìm kiếm bởi nhà tuyển dụng</p>
                </div>
                <div class="created">
                    <div class="attach">
                        <a title="Hồ sơ đính kèm" href="https://careerbuilder.vn/vi/jobseekers/myresume/myattach">
                            <div class="figure">
                                <div class="image"><img src="./img/dash-board/2.png" alt=""></div>
                                <div class="figcaption">
                                    <h4>Hồ sơ đính kèm</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cv-hay">
                        <a title="Hồ sơ chuyên nghiệp - CVHay" href="https://careerbuilder.vn/cv-hay/tao-cv">
                            <div class="figure">
                                <div class="image"><img src="./img/dash-board/3.png" alt=""></div>
                                <div class="figcaption">
                                    <h4>Hồ sơ chuyên nghiệp - CVHay</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tips-modal tips-modal-1" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>Bạn sẵn sàng thay đổi công việc ngay?</h3>
                    <p>Bật trạng thái "tìm việc khẩn cấp" để gia tăng 80% cơ hội phỏng vấn với Nhà tuyển dụng tại CareerBuilder.</p>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                Khi bật trạng thái tìm việc khẩn cấp hồ sơ của bạn sẽ hiển thị #OpentoNewJobs với Nhà Tuyển Dụng xem hồ sơ ứng tuyển hoặc tại ngân hàng dữ liệu hồ sơ của CareerBuilder. Nhà tuyển dụng thường sẽ chủ động và ưu tiên liên hệ ứng viên có hồ sơ phù hợp. Bạn
                                có thể tắt trạng thái này khi đã tìm thấy sự nghiệp mới hoặc tính năng sẽ tự động tắt sau 90 ngày.

                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tips-modal tips-modal-2" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>Tạo thông báo việc làm. Hoàn toàn miễn phí và dễ dàng</h3>
                    <p>Được cập nhật ngay các cơ hội mới nhất từ các công ty hàng đầu</p>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                Tìm được công việc bạn yêu thích phù hợp với hồ sơ

                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     


        <div class="back-drop"></div>
    </main>

 

    


