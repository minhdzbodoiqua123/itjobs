
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
                            <a href="javascript:void(0);" title="Tìm Việc Làm">
                                Tìm Việc Làm
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-vi.html" title="Việc làm mới nhất">
                                            Việc làm mới nhất
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/tim-viec-lam.html" title="Ngành nghề / Địa điểm">
                                            Ngành nghề / Địa điểm
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/ban-hang-kinh-doanh-c31-vi.html" title="Bán hàng / Kinh doanh">
                                            Bán hàng / Kinh doanh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/hanh-chinh-thu-ky-c3-vi.html" title="Hành chính / Thư ký">
                                            Hành chính / Thư ký
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/ke-toan-kiem-toan-c2-vi.html" title="Kế toán / Kiểm toán">
                                            Kế toán / Kiểm toán
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/nhan-su-c22-vi.html" title="Nhân sự">
                                            Nhân sự
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://careerbuilder.vn/viec-lam/tiep-thi-marketing-c4-vi.html" title="Tiếp thị / Marketing">
                                            Tiếp thị / Marketing
                                        </a>
                                    </li>
                                                                    </ul>
                            </div>
                        </li>
                        <li> <a href="https://careerbuilder.vn/cv-hay/" target="_blank" title="CV Hay">CV Hay</a></li>
                        <li> <a href="https://vietnamsalary.careerbuilder.vn/" target="_blank" title="VietnamSalary">VietnamSalary</a></li>
                        <li> <a href="https://careerbuilder.vn/careermap" target="_blank" title="CareerMap">CareerMap</a></li>
                        <li> <a href="https://careerbuilder.vn/vi/talentcommunity" title="Cẩm Nang">Cẩm Nang</a>
                        </li>
                        <li> <a href="https://careerbuilder.vn/tinh-luong-gross-net" title="Tính Lương">Tính Lương</a>
                        </li>
                        <li> <a href="https://careerstart.vn/" title="CareerStart">CareerStart <span class="new"><font color="ff0000">(Mới)</font></span></a></li>
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
                            <p></p><p>Chào mừng bạn đến CareerBuilder.vn</p>
<p>Đăng nhập ngay để xem việc làm phù hợp với bạn, nhà tuyển dụng đã xem hồ sơ của bạn và cập nhật nhiều hơn nữa ...<br><br></p><p></p>
                            <a class="email" href="https://careerbuilder.vn/thong-bao-viec-lam" title="Tạo Ngay">
                                Tạo Ngay
                            </a>
                        </div>
                    </div>
                </div>
                         <?php if(!isset($_SESSION["user"])) {?>
                            <div class="main-login dropdown">
                        <div class="title-login">
                            <a href="<?= _WEB_ROOT.'/account/login' ?>" title="Đăng nhập">
                                <span class="mdi mdi-account-circle"></span>
                                Đăng nhập
                            </a>
                        </div>
                       
                    </div>
                    <div class="main-register"><a href="<?= _WEB_ROOT.'/account/register' ?>" title="Đăng ký">Đăng ký</a>
                    </div>
                            <?php } else {?>
                                <div class="main-login logged dropdown">
                        <a href="https://careerbuilder.vn/vi/jobseekers/dashboard" rel="nofollow">
                            <span class="mdi mdi-account-circle"></span>
                            Chào
                            <span class="name"><?= $_SESSION["user"]["fullname"]?></span>
                        </a>
                        <div class="dropdown-menu">
                            <ul>
                                <li>
                                    <a href="https://careerbuilder.vn/vi/jobseekers/dashboard" rel="nofollow">
                                    Quản Lý Hồ Sơ
                                    </a>
                                </li>
                                <li>
                                    <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile" rel="nofollow">
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
                                    <a href="<?= _WEB_ROOT.'/account/logout' ?>"  rel="nofollow">
                                        Thoát
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                                <?php }?>
                                <div class="main-language dropdown">
                    <div class="dropdown-toggle">
                        <p>VI<em class="mdi mdi-chevron-down"></em></p>
                    </div>
                    <div class="dropdown-menu">
                        <div class="item active"><a class="dropdown-item" href="javascript:;" title="Change language">VI</a></div>
                        <div class="item"><a class="dropdown-item" href="https://careerbuilder.vn/en" title="Change language">EN</a></div>
                    </div>
                </div>
                <div class="main-employer dropdown"><a href="https://careerbuilder.vn/vi/employers" title="Đăng tuyển, Tìm ứng viên">
                        <div class="dropdown-toggle">
                            <h4>Dành cho nhà tuyển dụng<em class="mdi mdi-chevron-down"></em></h4>
                            <p>Đăng tuyển, Tìm ứng viên</p>
                        </div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="https://careerbuilder.vn/vi/employers/login" title="Đăng nhập">Đăng nhập</a>
                            </li>
                            <li><a href="https://careerbuilder.vn/vi/employers/postjobs" title="Đăng Tuyển Dụng">Đăng Tuyển Dụng</a>
                            </li>
                            <li><a href="https://careerbuilder.vn/vi/resume-search.html" title="Tìm Ứng Viên">Tìm Ứng Viên</a>
                            </li>
                            <li><a href="https://careerbuilder.vn/vi/employers/products-and-services" title="Sản phẩm và Dịch vụ">Sản phẩm và Dịch vụ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu">
        <div class="mobile-wrap">
            <div class="header-logo"><a href="https://careerbuilder.vn/vi/" title="Tuyển dụng &amp; Tìm kiếm việc làm nhanh"><img class="lazy-bg" src="./img/logo.png" alt="Tuyển dụng &amp; Tìm kiếm việc làm nhanh" style=""></a></div>
            <div class="header-bottom">
                <div class="header-bottom-top">
                    <div class="profile">                             <div class="avatar"><img class="lazy-bg" src="./img/user_circle.png" alt="user circle" style=""></div>
                            <div class="username">
                                <p>welcome to careerbuilder</p>
                            </div>
                                                <div class="back-menu-normal"><em class="mdi mdi-arrow-left"></em></div>
                    </div>
                    <div class="menu">
                        <ul class="menu-normal">
                            <li class="active"><a href="https://careerbuilder.vn/vi/" title="Tuyển dụng &amp; Tìm kiếm việc làm nhanh"> <i class="mdi mdi-home-outline"></i>Home</a></li>
                            <li class="dropdown-mobile"><a href="javascript:void(0);" title="Tìm Việc Làm"> <i class="mdi mdi-magnify"></i>Tìm Việc Làm</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="<?= _WEB_ROOT.'/ALLjob' ?>" title="Việc làm mới nhất"> <i class="fa fa-thumb-tack"></i>Việc làm mới nhất</a>
                                        </li>
                                        <li><a href="https://careerbuilder.vn/tim-viec-lam.html" title="Ngành nghề / Địa điểm"> <i class="fa fa-location-arrow"></i>Ngành nghề / Địa điểm</a>
                                        </li>
                                        <li> <a href="https://careerbuilder.vn/viec-lam/ban-hang-kinh-doanh-c31-vi.html" title="Bán hàng / Kinh doanh"> <i class="fa fa-connectdevelop"></i>Bán hàng / Kinh doanh</a>
                                        </li>
                                        <li> <a href="https://careerbuilder.vn/viec-lam/hanh-chinh-thu-ky-c3-vi.html" title="Hành chính / Thư ký"> <i class="fa fa-check"></i>Hành chính / Thư ký</a>
                                        </li>
                                        <li> <a href="https://careerbuilder.vn/viec-lam/ke-toan-kiem-toan-c2-vi.html" title="Kế toán / Kiểm toán"> <i class="fa fa-calculator"></i>Kế toán / Kiểm toán</a>
                                        </li>
                                        <li> <a href="https://careerbuilder.vn/viec-lam/nhan-su-c22-vi.html" title="Nhân sự"> <i class="fa fa-handshake-o"></i>Nhân sự</a>
                                        </li>
                                        <li> <a href="https://careerbuilder.vn/viec-lam/tiep-thi-marketing-c4-vi.html" title="Tiếp thị / Marketing"> <i class="fa fa-line-chart"></i>Tiếp thị / Marketing</a>
                                        </li>
                                                                            </ul>
                                </div>
                            </li>
                            <li><a href="https://careerbuilder.vn/cv-hay/" title="CV Hay"> <i class="mdi mdi-file-document-edit-outline"></i>CV Hay</a>
                            </li>
                            <li><a href="https://vietnamsalary.careerbuilder.vn/" title="VietnamSalary"> <i class="mdi mdi-currency-usd"></i>VietnamSalary</a></li>
                            <li><a href="https://careerbuilder.vn/careermap" title="CareerMap"> <i class="mdi mdi-chart-line-variant"></i>CareerMap</a></li>
                            <li><a href="https://careerbuilder.vn/vi/talentcommunity" title="Cẩm Nang"> <i class="mdi mdi-lightbulb-on-outline"></i>Cẩm Nang</a>
                            </li>
                            <li><a href="https://careerbuilder.vn/tinh-luong-gross-net" title="Tính Lương"> <i class="mdi mdi-calculator"></i>Tính Lương</a>
                            </li>
                            <li> <a href="https://careerstart.vn/" title="CareerStart">
                                    <i class="fa fa-plane"></i> CareerStart <span class="new"><font color="ff0000">(Mới)</font></span></a></li>
                        </ul>
                                            </div>
                                            <div class="authentication-links">
                            <ul>
                                <li><a href="https://careerbuilder.vn/vi/jobseekers/login" title="Đăng nhập"> <i class="mdi mdi-login-variant"></i>Đăng nhập</a>
                                </li>
                                <li><a href="https://careerbuilder.vn/vi/jobseekers/register" title="Đăng ký"> <i class="mdi mdi-account-plus-outline"></i>Đăng ký</a>
                                </li>
                            </ul>
                        </div>
                                    </div>
                <div class="header-bottom-bottom">  <a href="https://careerbuilder.vn/vi/employers" title="Dành cho nhà tuyển dụng">
                            <div class="employer-site">
                                <h4>Dành cho nhà tuyển dụng</h4>
                                <p>Đăng tuyển, Tìm ứng viên</p>
                            </div>
                    </a>                     <div class="header-alert">
                        <ul>
                            <li><a href="https://careerbuilder.vn/thong-bao-viec-lam" title="Thông Báo Việc Làm"> <i class="mdi mdi-bell-outline"></i><span>Thông Báo Việc Làm</span></a>
                            </li>
                            <li><a href="https://careerbuilder.vn/en" title="Change language"> <i class="mdi mdi-web"></i><span>English</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="backdrop"></div>
</header>