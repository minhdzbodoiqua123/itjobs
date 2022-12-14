
<script defer src="<?= _WEB_ROOT . "/app/public/assets/employer/js/header.js" ?>"></script>
<header class="for-customers">
        <div class="container-fluid">
            <div class="main-wrap">
                <div class="left-wrap">
                    <div class="button-hambuger"><span class="mdi mdi-menu"></span></div>
                    <div class="logo"><a href="<?= _WEB_ROOT.'/employer/postjobs' ?>" title="homepage-employers">
                    <img style="height:80px;"src="<?= _WEB_ROOT.'/app/public/assets/clients/images/it_jobs.png' ?>" alt="CareerBuilder.vn - Nghĩ Nhân Tài, Nghĩ CareerBuilder" title="CareerBuilder.vn - Nghĩ Nhân Tài, Nghĩ CareerBuilder" /></a></div>
                    <div class="main-menu">
                        <ul class="menu">
                            <li class=""><a href="<?= _WEB_ROOT.'/employer/dashboard' ?>" alt="Trang chủ" title="Trang chủ">Trang Chủ</a></li>
                        
                        
                            <li><a href="<?= _WEB_ROOT.'/employer/dashboard' ?>">Dashboard</a></li>
                            <li><a href="<?= _WEB_ROOT.'/employer/Postjobs' ?>">Đăng Tuyển Dụng</a></li>
                            <li><a href="<?= _WEB_ROOT.'/employer/tim_ung_vien' ?>">Tìm Hồ Sơ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="right-wrap">
                        <?php if(isset($_SESSION["employer"])) {?>
                            <div class="main-login dropdown logged"><a href="<?= _WEB_ROOT.'/employer/hrcentral/accounts/edit_employer' ?>" title="minh nguyễn 123"> <span class="mdi mdi-account-circle"></span>Hi, <span class="employer_name"></span></a>
                    <div class="dropdown-menu">
                        <ul>
                            <li> <a href="<?= _WEB_ROOT.'/employer/hrcentral/accounts/edit_employer' ?>"> <em class="fa fa-cog"></em>Tài khoản</a></li>
                            <li> <a href="<?= _WEB_ROOT.'/employer/account/logout' ?>"> <em class="fa fa-sign-out"> </em>Thoát</a></li>
                        </ul>
                    </div>
                </div>

                            <?php } else {?>
                            <div class="main-login dropdown">
                        <div class="title-login"><a href="<?= _WEB_ROOT.'/employer/account/login' ?>"> <span class="mdi mdi-account-circle"></span>Đăng nhập</a></div>
                      
                    </div>       <div class="main-register"><a href="<?= _WEB_ROOT.'/employer/account/register' ?>">Đăng ký</a></div>

                            <?php }?>
                
                    <div class="main-noti" style="display: none"><a href="javascript:void(0);"> <span class="mdi mdi-cart"></span></a></div>
                    <div class="main-candidates"><a href="<?= _WEB_ROOT ?>"><em class="fa fa-external-link"></em>
                        <h4>Dành cho Ứng Viên</h4></a></div>
                </div>
            </div>
        </div>
        <div class="mobile-menu">
            <div class="mobile-wrap">
                <div class="header-logo"><a href="<?= _WEB_ROOT.'/employer/dashboard' ?>" title="homepage-employers"><img src="https://images.careerbuilder.vn/logo/logo_1644552010.png" alt="CareerBuilder.vn - Nghĩ Nhân Tài, Nghĩ CareerBuilder" title="CareerBuilder.vn - Nghĩ Nhân Tài, Nghĩ CareerBuilder" /></a></div>
                <div class="header-bottom">
                    <div class="header-bottom-top">
                        <div class="profile">
                            <div class="avatar"><a href="#"><img src="./img/avata-new.png" alt=""></a></div>
                            <div class="username"><a href="javascript:void(0);">Xin chào!</a>
                                <div class="authentication-links">
                                    <ul>
                                        <li><a href="https://careerbuilder.vn/vi/employers/login"> <i class="mdi mdi-login-variant"></i>Đăng nhập</a></li>
                                        <li><a href="https://careerbuilder.vn/vi/employers/register"> <i class="mdi mdi-account-plus-outline"></i>Đăng ký</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="back-menu-normal"><em class="mdi mdi-arrow-left"></em></div>
                        </div>
                        <div class="menu">
                            <ul class="menu-normal">
                                <li class="active"><a href="https://careerbuilder.vn/vi/employers" title="homepage-employers"><i class="mdi mdi-home-outline"></i>Trang Chủ</a></li>
                             
                                <li class="dropdown-mobile"><a href="https://careerbuilder.vn/vi/employers/dashboard"> <i class="mdi mdi-briefcase-account"></i>HR Central</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a href="https://careerbuilder.vn/vi/employers/dashboard">Dashboard</a></li>
                                            <li><a href="https://careerbuilder.vn/vi/employers/postjobs">Đăng Tuyển Dụng</a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tim-ung-vien.html">Tìm Hồ Sơ</a></li>

                                        </ul>
                                    </div>
                                </li>
                                <li><a href="https://careerbuilder.vn/vi/hiringsite"> <i class="mdi mdi-lightbulb-on-outline"></i>Cẩm Nang Tuyển Dụng</a></li>
                                <li><a href="https://careerbuilder.vn/vi/employers/services/contact"> <i class="mdi mdi-contacts"></i>Liên hệ</a></li>
                                <li><a href="https://careerbuilder.vn/en/employers/register"> <i class="mdi mdi-web"></i><span>English</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-bottom-bottom">
                        <div class="header-alert">
                            <h4>
                                <a href="<?= _WEB_ROOT ?>"> <strong> Dành Cho Ứng Viên</strong></a>
                                <br>
                                <a href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-vi.html"><span> Tìm Việc Làm</span></a>
                            </h4>
                        </div>
                        <div class="employer-site">
                            <ul>
                                <li> <a> <i class="mdi mdi-phone"></i><span>HCM: (84.28) 3822 6060</span></a></li>
                                <li> <a> <i class="mdi mdi-phone"></i><span>HN: (84.24) 6268 1919</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="backdrop"></div>
    </header>
    