<script defer src="<?= _WEB_ROOT . "/app/public/assets/clients/js/header.js" ?>"></script>

<header>
    <div class="container-fluid">
        <div class="main-wrap">
            <div class="left-wrap">
                <div class="button-hambuger"><span class="mdi mdi-menu"></span></div>
                <div class="logo">
                    <a href="<?= _WEB_ROOT ?>" title="Tuyển dụng &amp; Tìm kiếm việc làm nhanh">
                        <img src="./img/logo.png" alt="Tuyển dụng &amp; Tìm kiếm việc làm nhanh">
                    </a>
                </div>
                <div class="main-menu">
                    <ul class="menu">
                        <li class="dropdown">
                            <a title="Tìm Việc Làm">
                                Tìm Việc Làm
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <a href="<?= _WEB_ROOT . '/Alljob' ?>"
                                            title="Việc làm mới nhất">
                                            Việc làm mới nhất
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/tim-viec-lam.html"
                                            title="Ngành nghề / Địa điểm">
                                            Ngành nghề / Địa điểm
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/ban-hang-kinh-doanh-c31-vi.html"
                                            title="Bán hàng / Kinh doanh">
                                            Bán hàng / Kinh doanh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/hanh-chinh-thu-ky-c3-vi.html"
                                            title="Hành chính / Thư ký">
                                            Hành chính / Thư ký
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/ke-toan-kiem-toan-c2-vi.html"
                                            title="Kế toán / Kiểm toán">
                                            Kế toán / Kiểm toán
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/nhan-su-c22-vi.html" title="Nhân sự">
                                            Nhân sự
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/tiep-thi-marketing-c4-vi.html"
                                            title="Tiếp thị / Marketing">
                                            Tiếp thị / Marketing
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    
                        <li> <a href="<?= _WEB_ROOT.'/tinh_luong_gross_net' ?>" title="Tính Lương">Tính Lương</a>
                        </li>
                   
                    </ul>
                </div>
            </div>
            <div class="right-wrap">
                <div class="main-noti dropdown">
                    <a href="https://careerbuilder.vn/thong-bao-viec-lam" title="Thông Báo Việc Làm">
                        <span class="mdi mdi-bell"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="noti">
                            <p></p>
                            <p>Chào mừng bạn đến CareerBuilder.vn</p>
                            <p>Đăng nhập ngay để xem việc làm phù hợp với bạn, nhà tuyển dụng đã xem hồ sơ của bạn và
                                cập nhật nhiều hơn nữa ...<br><br></p>
                            <p></p>
                            <a class="email" href="https://careerbuilder.vn/thong-bao-viec-lam" title="Tạo Ngay">
                                Tạo Ngay
                            </a>
                        </div>
                    </div>
                </div>
                <?php if (!isset($_SESSION["user"])) { ?>
                <div class="main-login dropdown">
                    <div class="title-login">
                        <a href="<?= _WEB_ROOT . '/account/login' ?>" title="Đăng nhập">
                            <span class="mdi mdi-account-circle"></span>
                            Đăng nhập
                        </a>
                    </div>

                </div>
                <div class="main-register"><a href="<?= _WEB_ROOT . '/account/register' ?>" title="Đăng ký">Đăng ký</a>
                </div>
                <?php } else { ?>
                <div class="main-login logged dropdown">
                    <a href="https://careerbuilder.vn/vi/jobseekers/dashboard" rel="nofollow">
                        <span class="mdi mdi-account-circle"></span>
                        Chào
                        <span class="nameUser"></span>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li>
                                <a href="<?= _WEB_ROOT . '/jobseekers/dashboard' ?> " rel="nofollow">
                                    Quản Lý Hồ Sơ
                                </a>
                            </li>
                            <li>
                                <a href="<?= _WEB_ROOT . '/jobseekers/my_profile' ?>" rel="nofollow">
                                    Hồ sơ CareerBuilder
                                </a>
                            </li>
                            <li>
                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobsaved" rel="nofollow">
                                    Việc làm đã lưu
                                </a>
                            </li>
                            <li>
                                <a href="https://careerbuilder.vn/vi/jobseekers/jobalert" rel="nofollow">
                                    Thông Báo Việc Làm
                                </a>
                            </li>
                            <li>
                                <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp" rel="nofollow">
                                    Nhà tuyển dụng của tôi
                                </a>
                            </li>
                            <li>
                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/notify" rel="nofollow">
                                    Xem tất cả thông báo
                                </a>
                            </li>
                            <li>
                                <a href="https://careerbuilder.vn/vi/jobseekers/member/emailmanagement" rel="nofollow">
                                    Cài đặt
                                </a>
                            </li>
                            <li>
                                <a onclick="return localStorage.removeItem('scrollPosition');" href="<?= _WEB_ROOT . '/account/logout' ?>" rel="nofollow">
                                    Thoát
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php } ?>
                <div class="main-language dropdown">
                    <div class="dropdown-toggle">
                        <p>VI<em class="mdi mdi-chevron-down"></em></p>
                    </div>
                    <div class="dropdown-menu">
                        <div class="item active"><a class="dropdown-item" href="javascript:;"
                                title="Change language">VI</a></div>
                        <div class="item"><a class="dropdown-item" href="https://careerbuilder.vn/en"
                                title="Change language">EN</a></div>
                    </div>
                </div>
                <div class="main-employer dropdown"><a 
                        >
                        <div class="dropdown-toggle">
                            <h4>Dành cho nhà tuyển dụng<em class="mdi mdi-chevron-down"></em></h4>
                            <p>Đăng tuyển, Tìm ứng viên</p>
                        </div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="<?= _WEB_ROOT.'/employer/account/login'?>" >Đăng nhập</a>
                            </li>
                            <li><a href="<?= _WEB_ROOT.'/employer/postjobs'?>" title="Đăng Tuyển Dụng">Đăng
                                    Tuyển Dụng</a>
                            </li>
                            <li><a href="https://careerbuilder.vn/vi/resume-search.html" title="Tìm Ứng Viên">Tìm Ứng
                                    Viên</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <div class="backdrop"></div>
</header>