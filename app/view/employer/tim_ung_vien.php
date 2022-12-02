<link rel="stylesheet" href="<?= _WEB_ROOT."/app/public/assets/employer/css/tim_ung_vien.css" ?>">


<body>
 
    <main>

   
        <section class="employer-navbar-2-1">
            <div class="container">
                <div class="category-nav">
                    <p>Danh Mục</p>
                    <em class="mdi mdi-chevron-down"></em> </div>
                <div class="main-wrap">
                    <div class="left-wrap">
                        <ul class="list-menu">
                            <li> <a href="https://careerbuilder.vn/vi/employers/dashboard" title="Dashboard">Dashboard</a> </li>
                            <li> <a href="https://careerbuilder.vn/vi/employers/hrcentral/posting" title="Quản Lý Đăng Tuyển">Quản Lý Đăng Tuyển</a> </li>
                            <li> <a href="https://careerbuilder.vn/vi/employers/hrcentral/manageresume" class="active" title="Quản Lý  Ứng Viên">Quản Lý  Ứng Viên</a> </li>
                            <li class=""> <a href="https://careerbuilder.vn/vi/employers/hrcentral/search-history" title="Lịch Sử Tìm Kiếm">Lịch Sử Tìm Kiếm</a> </li>
                            <li> <a href="https://careerbuilder.vn/vi/employers/hrcentral/reports/orders_available" title="Đơn Hàng ">Đơn Hàng </a> </li>
                            <li> <a href="https://careerbuilder.vn/vi/employers/hrcentral/emailcontentmanagement" title="Cấu Hình Email"> Cấu Hình Email </a> </li>
                            <li>
                                <a href="https://careerbuilder.vn/vi/employers/hrcentral/accounts" title=" Tài Khoản"> Tài Khoản</a>
                            </li>
                            <li> <a href="https://careerbuilder.vn/vi/employers/careerbuilder-rewards" target="_blank" title="CBRewards">CBRewards</a> </li>
                        </ul>
                    </div>
                    <div class="right-wrap">
                        <ul class="list-menu">
                            <li> <a href="https://careerbuilder.vn/vi/tim-ung-vien.html"> <em class="material-icons">find_in_page</em> Tìm Hồ Sơ </a> </li>
                            <li> <a class="but-createjob" href="https://careerbuilder.vn/vi/employers/postjobs"> <em class="material-icons">assignment_ind</em> Đăng Tuyển Dụng </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="resume-search cb-section bg-manage main-tabslet">
            <div class="container">
                <div class="box-resume-search">
                    <div class="form-head">
                        <h1 class="title">Từ khóa</h1>
                        <div class="toolip-support">
                            <p>(Hướng dẫn Tìm kiếm)</p>
                        </div>
                    </div>
                    <div class="form-body">
                        <form name="frm_search" id="frm_search" onsubmit="return validataSearch('vi');">
                            <div class="form-wrap form-normal">
                                <div class="form-group form-text">
                                    <label>Nội dung hồ sơ</label>
                                    <input type="text" name="keyword" id="keyword" placeholder="Nhập từ khóa" value="Nhân viên bán hàng thu ngân" autocomplete="off">

                                    <div class="search_option">
                                        <span>Tìm</span>
                                        <label><input type="radio" name="keyword_match" value="all" checked="checked"/> Nội dung hồ sơ</label>
                                        <label><input type="radio" name="keyword_match" value="title" /> Chức danh/ Vị trí</label>
                                    </div>
                                </div>
                                <div class="form-group form-select-chosen">
                                    <label>Ngành nghề</label>
                                    <select name="list_industries[]" id="industry" class="chosen-select-max-three" multiple data-placeholder="Tất cả ngành nghề">
                                                    <optgroup label="Bán hàng / Tiếp thị">
                                                                    <option value="tiep-thi-marketing" >Tiếp thị / Marketing</option>
                                                                    <option value="ban-le-ban-si" >Bán lẻ / Bán sỉ</option>
                                                                    <option value="ban-hang-kinh-doanh" >Bán hàng / Kinh doanh</option>
                                                                    <option value="tiep-thi-truc-tuyen" >Tiếp thị trực tuyến</option>
                                                            </optgroup>
                                                    <optgroup label="Chăm sóc sức khỏe">
                                                                    <option value="duoc-pham" >Dược phẩm</option>
                                                                    <option value="y-te-cham-soc-suc-khoe" >Y tế / Chăm sóc sức khỏe</option>
                                                            </optgroup>
                                                    <optgroup label="Dịch vụ">
                                                                    <option value="tu-van" >Tư vấn</option>
                                                                    <option value="dich-vu-khach-hang" >Dịch vụ khách hàng</option>
                                                                    <option value="phi-chinh-phu-phi-loi-nhuan" >Phi chính phủ / Phi lợi nhuận</option>
                                                                    <option value="luat-phap-ly" >Luật / Pháp lý</option>
                                                                    <option value="buu-chinh-vien-thong" >Bưu chính viễn thông</option>
                                                                    <option value="van-chuyen-giao-nhan-kho-van" >Vận chuyển / Giao nhận /  Kho vận</option>
                                                                    <option value="lao-dong-pho-thong" >Lao động phổ thông</option>
                                                                    <option value="an-ninh-bao-ve" >An Ninh / Bảo Vệ</option>
                                                            </optgroup>
                                                    <optgroup label="Giáo dục / Đào tạo">
                                                                    <option value="giao-duc-dao-tao" >Giáo dục / Đào tạo</option>
                                                                    <option value="thu-vien" >Thư viện</option>
                                                            </optgroup>
                                                    <optgroup label="Hàng tiêu dùng">
                                                                    <option value="hang-gia-dung-cham-soc-ca-nhan" >Hàng gia dụng / Chăm sóc cá nhân</option>
                                                                    <option value="thuc-pham-do-uong" >Thực phẩm &amp; Đồ uống</option>
                                                            </optgroup>
                                                    <optgroup label="Hành chính / Nhân sự">
                                                                    <option value="hanh-chinh-thu-ky" >Hành chính / Thư ký</option>
                                                                    <option value="quan-ly-dieu-hanh" >Quản lý điều hành</option>
                                                                    <option value="nhan-su" >Nhân sự</option>
                                                                    <option value="bien-phien-dich" >Biên phiên dịch</option>
                                                            </optgroup>
                                                    <optgroup label="Kế toán / Tài chính">
                                                                    <option value="ke-toan-kiem-toan" >Kế toán / Kiểm toán</option>
                                                                    <option value="ngan-hang" >Ngân hàng</option>
                                                                    <option value="bao-hiem" >Bảo hiểm</option>
                                                                    <option value="chung-khoan" >Chứng khoán</option>
                                                                    <option value="tai-chinh-dau-tu" >Tài chính / Đầu tư</option>
                                                            </optgroup>
                                                    <optgroup label="Khách sạn / Du lịch">
                                                                    <option value="nha-hang-khach-san" >Nhà hàng / Khách sạn</option>
                                                                    <option value="du-lich" >Du lịch</option>
                                                                    <option value="hang-khong" >Hàng không</option>
                                                            </optgroup>
                                                    <optgroup label="Khoa học">
                                                                    <option value="nong-nghiep" >Nông nghiệp</option>
                                                                    <option value="thong-ke" >Thống kê</option>
                                                                    <option value="thuy-san-hai-san" >Thủy sản / Hải sản</option>
                                                                    <option value="lam-nghiep" >Lâm Nghiệp</option>
                                                                    <option value="chan-nuoi-thu-y" >Chăn nuôi / Thú y</option>
                                                                    <option value="thuy-loi" >Thủy lợi</option>
                                                                    <option value="trac-dia-dia-chat" >Trắc địa / Địa Chất</option>
                                                                    <option value="hang-hai" >Hàng hải</option>
                                                                    <option value="cong-nghe-sinh-hoc" >Công nghệ sinh học</option>
                                                                    <option value="cong-nghe-thuc-pham-dinh-duong" >Công nghệ thực phẩm / Dinh dưỡng</option>
                                                            </optgroup>
                                                    <optgroup label="Kỹ thuật">
                                                                    <option value="co-khi-o-to-tu-dong-hoa" >Cơ khí / Ô tô / Tự động hóa</option>
                                                                    <option value="moi-truong" >Môi trường</option>
                                                                    <option value="dau-khi" >Dầu khí</option>
                                                                    <option value="hoa-hoc" >Hóa học</option>
                                                                    <option value="dien-dien-tu-dien-lanh" >Điện / Điện tử / Điện lạnh</option>
                                                                    <option value="khoang-san" >Khoáng sản</option>
                                                                    <option value="bao-tri-sua-chua" >Bảo trì / Sửa chữa</option>
                                                            </optgroup>
                                                    <optgroup label="Máy tính / Công nghệ thông tin">
                                                                    <option value="cntt-phan-mem" >CNTT - Phần mềm</option>
                                                                    <option value="cntt-phan-cung-mang" >CNTT - Phần cứng / Mạng</option>
                                                            </optgroup>
                                                    <optgroup label="Truyền thông / Media">
                                                                    <option value="my-thuat-nghe-thuat-thiet-ke" >Mỹ thuật / Nghệ thuật / Thiết kế</option>
                                                                    <option value="giai-tri" >Giải trí</option>
                                                                    <option value="truyen-hinh-bao-chi-bien-tap" >Truyền hình / Báo chí / Biên tập</option>
                                                                    <option value="quang-cao-doi-ngoai-truyen-thong" >Quảng cáo / Đối ngoại / Truyền Thông</option>
                                                                    <option value="to-chuc-su-kien" >Tổ chức sự kiện</option>
                                                            </optgroup>
                                                    <optgroup label="Sản xuất">
                                                                    <option value="xuat-nhap-khau" >Xuất nhập khẩu</option>
                                                                    <option value="san-xuat-van-hanh-san-xuat" >Sản xuất / Vận hành sản xuất</option>
                                                                    <option value="do-go" >Đồ gỗ</option>
                                                                    <option value="det-may-da-giay-thoi-trang" >Dệt may / Da giày / Thời trang</option>
                                                                    <option value="quan-ly-chat-luong-qa-qc" >Quản lý chất lượng (QA/QC)</option>
                                                                    <option value="thu-mua-vat-tu" >Thu mua / Vật tư</option>
                                                                    <option value="an-toan-lao-dong" >An toàn lao động</option>
                                                                    <option value="in-an-xuat-ban" >In ấn / Xuất bản</option>
                                                            </optgroup>
                                                    <optgroup label="Xây dựng">
                                                                    <option value="kien-truc" >Kiến trúc</option>
                                                                    <option value="xay-dung" >Xây dựng</option>
                                                                    <option value="bat-dong-san" >Bất động sản</option>
                                                                    <option value="noi-ngoai-that" >Nội ngoại thất</option>
                                                            </optgroup>
                                                    <optgroup label="Nhóm ngành khác">
                                                                    <option value="nganh-khac" >Ngành khác</option>
                                                                    <option value="moi-tot-nghiep-thuc-tap" >Mới tốt nghiệp / Thực tập</option>
                                                            </optgroup>
                                            </select>
                                </div>
                                <div class="form-group form-select-chosen">
                                    <label>Địa điểm</label>
                                    <select name="list_location[]" id="location" class="chosen-select-max-three" multiple data-placeholder="Tất cả địa điểm">
                                                <optgroup label="Việt Nam" >
                                                        <option value="ha-noi" >Hà Nội</option>
                                                        <option value="ho-chi-minh" >Hồ Chí Minh</option>
                                                        <option value="an-giang" >An Giang</option>
                                                        <option value="ba-ria-vung-tau" >Bà Rịa - Vũng Tàu</option>
                                                        <option value="bac-lieu" >Bạc Liêu</option>
                                                        <option value="bac-can" >Bắc Cạn</option>
                                                        <option value="bac-giang" >Bắc Giang</option>
                                                        <option value="bac-ninh" >Bắc Ninh</option>
                                                        <option value="ben-tre" >Bến Tre</option>
                                                        <option value="binh-duong" >Bình Dương</option>
                                                        <option value="binh-dinh" >Bình Định</option>
                                                        <option value="binh-phuoc" >Bình Phước</option>
                                                        <option value="binh-thuan" >Bình Thuận</option>
                                                        <option value="ca-mau" >Cà Mau</option>
                                                        <option value="cao-bang" >Cao Bằng</option>
                                                        <option value="can-tho" >Cần Thơ</option>
                                                        <option value="dak-lak" >Dak Lak</option>
                                                        <option value="dak-nong" >Dak Nông</option>
                                                        <option value="da-nang" >Đà Nẵng</option>
                                                        <option value="dien-bien" >Điện Biên</option>
                                                        <option value="dong-bang-song-cuu-long" >Đồng Bằng Sông Cửu Long</option>
                                                        <option value="dong-nai" >Đồng Nai</option>
                                                        <option value="dong-thap" >Đồng Tháp</option>
                                                        <option value="gia-lai" >Gia Lai</option>
                                                        <option value="ha-giang" >Hà Giang</option>
                                                        <option value="ha-nam" >Hà Nam</option>
                                                        <option value="ha-tinh" >Hà Tĩnh</option>
                                                        <option value="hai-duong" >Hải Dương</option>
                                                        <option value="hai-phong" >Hải Phòng</option>
                                                        <option value="hau-giang" >Hậu Giang</option>
                                                        <option value="hoa-binh" >Hòa Bình</option>
                                                        <option value="hung-yen" >Hưng Yên</option>
                                                        <option value="khac" >Khác</option>
                                                        <option value="khanh-hoa" >Khánh Hòa</option>
                                                        <option value="kien-giang" >Kiên Giang</option>
                                                        <option value="kon-tum" >Kon Tum</option>
                                                        <option value="kv-bac-trung-bo" >KV Bắc Trung Bộ</option>
                                                        <option value="kv-dong-nam-bo" >KV Đông Nam Bộ</option>
                                                        <option value="kv-nam-trung-bo" >KV Nam Trung Bộ</option>
                                                        <option value="kv-tay-nguyen" >KV Tây Nguyên</option>
                                                        <option value="lai-chau" >Lai Châu</option>
                                                        <option value="lang-son" >Lạng Sơn</option>
                                                        <option value="lao-cai" >Lào Cai</option>
                                                        <option value="lam-dong" >Lâm Đồng</option>
                                                        <option value="long-an" >Long An</option>
                                                        <option value="nam-dinh" >Nam Định</option>
                                                        <option value="nghe-an" >Nghệ An</option>
                                                        <option value="ninh-binh" >Ninh Bình</option>
                                                        <option value="ninh-thuan" >Ninh Thuận</option>
                                                        <option value="phu-tho" >Phú Thọ</option>
                                                        <option value="phu-yen" >Phú Yên</option>
                                                        <option value="quang-binh" >Quảng Bình</option>
                                                        <option value="quang-nam" >Quảng Nam</option>
                                                        <option value="quang-ngai" >Quảng Ngãi</option>
                                                        <option value="quang-ninh" >Quảng Ninh</option>
                                                        <option value="quang-tri" >Quảng Trị</option>
                                                        <option value="soc-trang" >Sóc Trăng</option>
                                                        <option value="son-la" >Sơn La</option>
                                                        <option value="tay-ninh" >Tây Ninh</option>
                                                        <option value="thai-binh" >Thái Bình</option>
                                                        <option value="thai-nguyen" >Thái Nguyên</option>
                                                        <option value="thanh-hoa" >Thanh Hóa</option>
                                                        <option value="thua-thien-hue" >Thừa Thiên- Huế</option>
                                                        <option value="tien-giang" >Tiền Giang</option>
                                                        <option value="toan-quoc" >Toàn quốc</option>
                                                        <option value="tra-vinh" >Trà Vinh</option>
                                                        <option value="tuyen-quang" >Tuyên Quang</option>
                                                        <option value="vinh-long" >Vĩnh Long</option>
                                                        <option value="vinh-phuc" >Vĩnh Phúc</option>
                                                        <option value="yen-bai" >Yên Bái</option>
                                                    </optgroup>
                                                <optgroup label="Bangladesh" >
                                                    </optgroup>
                                                <optgroup label="Campuchia" >
                                                        <option value="banteay-meanchey" >Banteay Meanchey</option>
                                                        <option value="battambang" >Battambang</option>
                                                        <option value="kampong-chhnang" >Kampong Chhnang</option>
                                                        <option value="kampong-speu" >Kampong Speu</option>
                                                        <option value="kampot" >Kampot</option>
                                                        <option value="kandal" >Kandal</option>
                                                        <option value="kep" >Kep</option>
                                                        <option value="koh-kong" >Koh Kong</option>
                                                        <option value="kratie" >Kratie</option>
                                                        <option value="otdar-meanchey" >Otdar Meanchey</option>
                                                        <option value="pailin" >Pailin</option>
                                                        <option value="phnompenh" >Phnompenh</option>
                                                        <option value="preah-vihear" >Preah Vihear</option>
                                                        <option value="prey-veng" >Prey Veng</option>
                                                        <option value="siem-reap" >Siem Reap</option>
                                                        <option value="stung-treng" >Stung Treng</option>
                                                        <option value="svay-rieng" >Svay Rieng</option>
                                                        <option value="tbong-khmum" >Tbong Khmum</option>
                                                    </optgroup>
                                                <optgroup label="Canada" >
                                                    </optgroup>
                                                <optgroup label="Công Gô" >
                                                    </optgroup>
                                                <optgroup label="Đài Loan" >
                                                    </optgroup>
                                                <optgroup label="Hàn Quốc" >
                                                    </optgroup>
                                                <optgroup label="Hoa Kỳ" >
                                                        <option value="chicago" >Chicago</option>
                                                        <option value="florida" >Florida</option>
                                                        <option value="miami" >Miami</option>
                                                        <option value="san-diego" >San Diego</option>
                                                    </optgroup>
                                                <optgroup label="Hồng Kông" >
                                                        <option value="hong-kong" >Hồng Kông</option>
                                                    </optgroup>
                                                <optgroup label="Khác" >
                                                        <option value="khac" >Khác</option>
                                                    </optgroup>
                                                <optgroup label="Lào" >
                                                        <option value="attapeu" >Attapeu</option>
                                                        <option value="bokeo" >Bokeo</option>
                                                        <option value="champasak" >Champasak</option>
                                                        <option value="houaphanh" >Houaphanh</option>
                                                        <option value="khammouane" >Khammouane</option>
                                                        <option value="luang-prabang" >Luang Prabang</option>
                                                        <option value="phongsaly" >Phongsaly</option>
                                                        <option value="vientiane" >Vientiane</option>
                                                        <option value="xiangkhouang" >Xiangkhouang</option>
                                                    </optgroup>
                                                <optgroup label="Malaysia" >
                                                        <option value="kuala-lumpur" >Kuala Lumpur</option>
                                                        <option value="malaysia" >Malaysia</option>
                                                    </optgroup>
                                                <optgroup label="Myanmar" >
                                                        <option value="yangon" >Yangon</option>
                                                    </optgroup>
                                                <optgroup label="Nhật Bản" >
                                                        <option value="hokkaido" >Hokkaido</option>
                                                        <option value="tokyo" >Tokyo</option>
                                                        <option value="yokohama" >Yokohama</option>
                                                    </optgroup>
                                                <optgroup label="Qatar" >
                                                        <option value="qatar" >Qatar</option>
                                                    </optgroup>
                                                <optgroup label="Quốc tế" >
                                                        <option value="quoc-te" >Quốc tế</option>
                                                    </optgroup>
                                                <optgroup label="Singapore" >
                                                        <option value="singapore" >Singapore</option>
                                                    </optgroup>
                                                <optgroup label="Trung Quốc" >
                                                    </optgroup>
                                                <optgroup label="Úc" >
                                                    </optgroup>
                                                <optgroup label="Ukraine" >
                                                        <option value="kharkiv" >Kharkiv</option>
                                                    </optgroup>
                            		    	</select>
                                </div>
                                <div class="form-group form-select">
                                    <label>Trạng thái tìm việc</label>
                                    <select name="urgentjob" id="urgentjob">
                        <option value="0">Tất cả</option>
                        <option value="1" >Ứng viên tìm việc khẩn cấp</option>
                    </select>
                                </div>
                            </div>
                            <div class="form-group form-submit btn-submit-top form-hidden-advanced">
                                <button class="btn-gradient btn-submit" type="submit">
                    <em class="material-icons">search</em>Tìm
                </button>
                            </div>

                            <div class="form-group form-link-advanced form-hidden-advanced">
                                <a class="btn-history" href="https://careerbuilder.vn/vi/employers/hrcentral/search-history"><em class="material-icons">update</em><span>Lịch Sử Tìm Kiếm</span></a>
                                <a class="btn-advanced btn-show" href="javascript:void(0)"><em class="material-icons">zoom_in</em><span>Tìm kiếm nâng cao</span></a>
                            </div>
                            <div class="form-wrap form-wrap-advanced">
                                <div class="row">
                                    <div class="col-md-6 col-xl-4 col-cus-xxl-4">
                                        <div class="form-group form-select">
                                            <label>Cấp bậc</label>
                                            <select name="level_id" id="level">
                                <option value="0" selected="selected">Tất cả cấp bậc</option>
                                                                <option value="sinh-vien-thuc-tap-sinh"  >Sinh viên/ Thực tập sinh</option>
                                                                <option value="moi-tot-nghiep"  >Mới tốt nghiệp</option>
                                                                <option value="nhan-vien"  >Nhân viên</option>
                                                                <option value="truong-nhom-giam-sat"  >Trưởng nhóm / Giám sát</option>
                                                                <option value="quan-ly"  >Quản lý</option>
                                                                <option value="quan-ly-cap-cao"  >Quản lý cấp cao</option>
                                                                <option value="dieu-hanh-cap-cao"  >Điều hành cấp cao</option>
                                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 col-cus-xxl-4">
                                        <div class="form-group form-select">
                                            <label>Bằng cấp</label>
                                            <select name="degree_id_from" id="degree_id_from">
                                <option value="-1" selected="selected">Tất cả bằng cấp</option>
                                                                <option value="0" >Chưa tốt nghiệp</option>
                                                                <option value="1" >Trung học</option>
                                                                <option value="2" >Trung cấp</option>
                                                                <option value="3" >Cao đẳng</option>
                                                                <option value="4" >Đại học</option>
                                                                <option value="5" >Sau đại học</option>
                                                                <option value="6" >Khác</option>
                                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 col-cus-xxl-4">
                                        <div class="form-group form-select">
                                            <label>Đến</label>
                                            <select disabled name="degree_id_to" id="degree_id_to">
                                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl-4 col-cus-xxl-4">
                                        <div class="form-group form-select">
                                            <label>Hình thức</label>
                                            <select name="job_type" id="job_type">
                                <option value="0">Tất cả</option>
                                <option value="1" >Nhân viên chính thức</option>
                                <option value="2" >Bán thời gian</option>
                                <option value="3" >Thời vụ - Nghề tự do </option>
                                <option value="4" >Thực tập</option>
                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-xl-4 col-cus-xxl-4">
                                        <div class="form-group form-select">
                                            <label>Kinh nghiệm</label>
                                            <select name="experience" id="experience">
                                <option value="0"  selected="selected">Tất cả</option>
                                <option value="1" >Có kinh nghiệm</option>
                                <option value="2" >Chưa có kinh nghiệm</option>
                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 col-cus-xxl-4">
                                        <div class="form-from-to form-text-ab">
                                            <div class="form-group form-text">
                                                <label>Từ</label>
                                                <input type="text" name="experience_from" id="experience_from" value="" disabled>
                                            </div>
                                            <div class="form-group form-text">
                                                <label>Đến</label>
                                                <input type="text" name="experience_to" id="experience_to" value="" disabled>
                                            </div>
                                            <div class="text-ab">
                                                <p>năm</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 col-cus-xxl-4">
                                        <div class="form-group form-select">
                                            <label>Giới tính</label>
                                            <select name="gender" id="gender">
                                <option value="0">Tất cả</option>
                                <option value="1" >Nam</option>
                                <option value="2" >Nữ</option>

                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 col-cus-xxl-4">
                                        <div class="form-group form-select">
                                            <label>Ngoại ngữ</label>
                                            <select name="language" id="language">
                                                                <option value="0"  selected="selected">Chọn</option>
                                                                <option value="TA" >Tiếng Anh</option>
                                                                <option value="TP" >Tiếng Pháp</option>
                                                                <option value="TD" >Tiếng Đức</option>
                                                                <option value="TN" >Tiếng nga</option>
                                                                <option value="TT" >Tiếng Hoa</option>
                                                                <option value="TJ" >Tiếng Nhật</option>
                                                                <option value="TH" >Tiếng Hàn</option>
                                                                <option value="TK" >Tiếng Khác</option>
                                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 col-cus-xxl-4">
                                        <div class="form-group form-select">
                                            <label>Trình độ</label>
                                            <select name="languagelevel" id="languagelevel">
                                                                <option value="0"  selected="selected">Chọn</option>
                                                                <option value="1" >Bản ngữ</option>
                                                                <option value="2" >Sơ cấp</option>
                                                                <option value="3" >Trung cấp</option>
                                                                <option value="4" >Cao cấp</option>
                                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 col-cus-xxl-4">
                                        <div class="form-group form-select">
                                            <label>Mức lương</label>
                                            <select name="salary" id="salary">
                                <option value="all">Chọn</option>
                                <option value="ltt" >Thỏa thuận</option>
                                <option value="vnd" >VND</option>
                                <option value="usd" >USD</option>
                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 col-cus-xxl-4">
                                        <div class="form-from-to">
                                            <div class="form-group form-text">
                                                <label>Từ</label>
                                                <input type="text" name="salary_from" id="salary_from" value="" disabled>

                                            </div>
                                            <div class="form-group form-text">
                                                <label>Đến</label>
                                                <input type="text" name="salary_to" id="salary_to" value="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 col-cus-xxl-4"></div>
                                    <div class="col-md-6 col-xl-4 col-cus-xxl-4">
                                        <div class="form-group form-select">
                                            <label>Ngày truy cập / cập nhật</label>
                                            <select name="resume_date" id="resume_date">
                                                                <option value="1" >1 ngày trước</option>
                                                                <option value="2" >2 ngày trước</option>
                                                                <option value="3" >3 ngày trước</option>
                                                                <option value="7" >1 tuần trước</option>
                                                                <option value="14" >2 tuần trước</option>
                                                                <option value="30" >1 tháng trước</option>
                                                                <option value="90" >3 tháng trước</option>
                                                                <option value="180" >6 tháng trước</option>
                                                                <option value="270" >9 tháng trước</option>
                                                                <option value="365" >1 năm trước</option>
                                                                <option value="3650" selected="selected">Tất cả hồ sơ</option>
                                                            </select>
                                        </div>
                                        <div class="form-group form-radio">
                                            <div class="group">
                                                <input type="radio" name="resume_time_kind" id="date-1" value="last_active" checked="checked">
                                                <label for="date-1">Ngày truy cập </label>
                                            </div>
                                            <div class="group">
                                                <input type="radio" name="resume_time_kind" id="date-2" value="last_modify">
                                                <label for="date-2">Ngày cập nhật</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 col-cus-xxl-4">
                                        <div class="form-from-to">
                                            <div class="form-group form-text">
                                                <label>Tuổi từ</label>
                                                <input type="text" name="from_age" id="from_age" value="">
                                            </div>
                                            <div class="form-group form-text">
                                                <label>Đến</label>
                                                <input type="text" name="to_age" id="to_age" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl-4 col-cus-xxl-4 order-submit">
                                        <div class="form-group form-submit">
                                            <button class="btn-gradient btn-submit" type="submit"> <em class="material-icons">search</em>Tìm</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 col-cus-xxl-4"></div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group form-link-advanced">
                                        <a class="btn-history" href="https://careerbuilder.vn/vi/employers/hrcentral/search-history"><em class="material-icons">update</em><span>Lịch Sử Tìm Kiếm</span></a>
                                        <a class="btn-advanced btn-less  " href="javascript:void(0)" id="expand_search"><em class="material-icons">zoom_out</em><span>Thu gọn tìm kiếm</span></a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="search-support-modal" style="display: none">
                    <div class="modal-head">
                        <p class="title">Hướng dẫn tìm kiếm</p>
                    </div>
                    <div class="modal-body">
                        <div class="search-support">
                            <div class="modal-body">
                                <div class="search-support">
                                    <p> <strong>Từ khóa giúp bạn có kết quả tìm kiếm chính xác nhất.</strong></p>
                                    <ul>
                                        <li>
                                            <p>Nhập một từ khóa tìm kiếm, Công cụ tìm kiếm sẽ giúp bạn tìm kiếm thông tin trong <strong>toàn bộ nội dung của Hồ Sơ Ứng Viên.</strong></p>
                                        </li>
                                        <li>
                                            <p>Nhập cụm từ khóa tìm kiếm, kết quả tìm kiếm sẽ bao gồm tất cả Hồ Sơ Ứng Viên chứa bất kỳ từ nào trong cụm từ khóa tìm kiếm của bạn, theo thứ tự bất kỳ và hiển thị theo thời gian ứng viên truy cập.</p>
                                        </li>
                                    </ul>
                                    <p>Để tìm kiếm chính xác, vui lòng sắp xếp kết quả theo thứ tự “Phù Hợp”</p>
                                    <p> <strong>Tìm kiếm nâng cao</strong></p>
                                    <p>Sử dụng các ký tự hỗ trợ tìm kiếm như :“Ngoặc kép”, ( Ngoặc đơn ), AND, OR, dấu * trong phần từ khóa tìm kiếm. Chi tiết như sau :</p>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>cách sử dụng</th>
                                                <th>ví dụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="title" colspan="2">
                                                    <p>1.AND và OR</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p> <strong>AND </strong>cho phép bạn kết hợp các từ khóa tìm kiếm</p>
                                                </td>
                                                <td>
                                                    <p> <strong>PHP AND JAVA </strong>(tất cả hồ sơ chứa từ PHP và từ JAVA)</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p> <strong>OR </strong>cho phép bạn tìm kiếm từ khóa bất kỳ</p>
                                                </td>
                                                <td>
                                                    <p> <strong>PHP OR JAVA </strong>(tất cả hồ sơ chứa từ PHP và tất cả hồ sơ chứa từ JAVA)</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Kết hợp <strong>AND </strong>và <strong>OR</strong></p>
                                                </td>
                                                <td>
                                                    <p> <strong>PHP OR JAVA AND Developer </strong>(tất cả các hồ sơ chứa PHP Developer hoặc JAVA Developer)</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p> <strong class="noted">Lưu ý : </strong></p>
                                                    <ul>
                                                        <li>
                                                            <p> <strong>AND </strong>và <strong>OR </strong>phải được viết hoa. Nếu viết thường sẽ được hiểu là từ khóa cần tìm kiếm</p>
                                                        </li>
                                                        <li>
                                                            <p>Hỗ trợ sử dụng tối đa 3 AND hoặc OR trong mỗi cụm tìm kiếm</p>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td class="title" colspan="2">
                                                    <p>2. Kết hợp () trong từ khóa tìm kiếm</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p> <strong>(A OR B) AND (C OR D)</strong></p>
                                                </td>
                                                <td>
                                                    <p> <strong>(Java OR PHP) AND (Developer OR Programmer) </strong>(tất cả hồ sơ chứa từ PHP Developer, PHP Programmer, Java Developer hoặc JAVA Programmer)</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="title" colspan="2">
                                                    <p>3. Tìm kiếm chính xác với “”</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p> <strong>“Ngoặc Kép”</strong> để tìm chính xác cụm từ</p>
                                                </td>
                                                <td>
                                                    <p> <strong>“PHP Developer”  </strong> ( tất cả hồ sơ chỉ chứa từ “PHP Developer” )</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Sử dụng <strong>kết hợp AND, OR, “Ngoặc Kép” </strong>để có kết quả tìm kiếm chính xác nhất</p>
                                                </td>
                                                <td>
                                                    <p> <strong>"Software Engineer" AND Html5</strong> ( tất cả hồ sơ có từ khóa chính xác là Software Engineer và có từ khóa HTML5 hoặc các từ khóa đồng nghĩa với HTML5)</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p> <strong class="noted">Lưu ý : </strong></p>
                                                    <p>Khi sử dụng “” hoặc (), nếu không có dấu đóng ngoặc: thông báo chuỗi tìm kiếm không hợp lệ.</p>
                                                </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td class="title" colspan="2">
                                                    <p>4. Sử dụng cụm từ đại diện cho từ, cụm từ trong kết quả tìm kiếm với dấu *:</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Sử dụng dấu * sau một từ/cụm từ</p>
                                                </td>
                                                <td>
                                                    <p> <strong>JAVA Dev*</strong> (các hồ sơ có chứa cụm JAVA Dev, có thể là JAVA Develop, JAVA Developing, JAVA Developer…)</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Sử dụng dấu * trước và sau một từ/cụm từ</p>
                                                </td>
                                                <td>
                                                    <p> <strong>*Dev* </strong>(các hồ sơ có chứa Dev, có thể là JAVA Developer, PHP Develop, Game Develop…)Develop, JAVA Developing, JAVA Developer…)</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    var language_search_form = {
                        emp_about_search_resume: "emp_about_search_resume",
                        Emp_ChoiceIndustries: "Chọn Ngành",
                        Emp_Select_all: "Chọn",
                        emp_search_resume_messenger_salary: "emp_search_resume_messenger_salary",
                        emp_search_Keywords: "vd: \"software engineer\" AND java",
                        emp_advance_search_del: "Xóa",
                        emp_limit_check: "Tối đa 5 lựa chọn",
                        emp_exp_empty: "Kinh nghiệm không được để trống",
                        emp_exp_fail: "Kinh nghiệm không hợp lệ",
                        emp_salary_empty: "Lương không được để trống",
                        emp_salary_fail: "Lương không hợp lệ",
                        emp_age_fail1: "Tuổi từ 16 đến 60",
                        emp_age_fail: "Tuổi không hợp lệ",
                        emp_search_Advance_search: "Tìm kiếm nâng cao",
                        emp_language_level: "Vui lòng chọn trình độ ngoại ngữ",
                        emp_search_ho_so_can_xu_ly: "Quý khách vui lòng chọn các hồ sơ cần xử lý",
                        emp_search_limit_ho_so: "Vui lòng chọn ít nhất 1 hồ sơ",
                        emp_search_delete_select: "Bạn có muốn xóa hồ sơ đã chọn không?",
                        emp_search_limit_folder: "Quý khách cần chọn thư mục để lưu hồ sơ này",
                        emp_search_max_character_folder: "-- Tên thư mục không quá 50 ký tự --",
                        emp_search_folder_empty: "Quý khách vui lòng nhập tên thư mục",
                        emp_search_please_select_resume: "Quý khách vui lòng chọn hồ sơ",
                        emp_search_please_enter_email: "-- Nhập email cần gửi --",
                        emp_search_quick: "Rút gọn tiêu chí tìm kiếm",
                        Emp_selected_text: "# mục chọn",
                        emp_search_resume_validate: "Vui lòng chọn tiêu chí tìm kiếm",
                        emp_search_resume_language: "Vui lòng chọn ngôn ngữ",
                        emp_search_resume_add_language: "Thêm ngôn ngữ",
                        emp_search_resume_del_language: "Xóa",
                        Emp_Choice_Industry_All: "Tất cả ngành nghề",
                        Emp_Choice_Location_All: "Tất cả địa điểm",
                        emp_common_error_keyword_parenthesis: "Cụm từ tìm kiếm không hợp lệ",
                        emp_common_error_keyword_max_condition: "Ít nhất 2 mệnh đề ()",
                        emp_common_error_keyword_boolean: "Lỗi trong biểu thức boolean",
                        emp_alert_emp_name: "Tên thiết lập không được để trống"
                    };

                    if (typeof language === 'undefined') {
                        var language = language_search_form;
                    } else {
                        $.extend(language, language_search_form);
                    }

                    var arrDegree = {
                        0: {
                            name: "Chưa tốt nghiệp",
                            key: "chua-tot-nghiep"
                        },
                        1: {
                            name: "Trung học",
                            key: "trung-hoc"
                        },
                        2: {
                            name: "Trung cấp",
                            key: "trung-cap"
                        },
                        3: {
                            name: "Cao đẳng",
                            key: "cao-dang"
                        },
                        4: {
                            name: "Đại học",
                            key: "dai-hoc"
                        },
                        5: {
                            name: "Sau đại học",
                            key: "sau-dai-hoc"
                        },
                        6: {
                            name: "Khác",
                            key: "khac"
                        },
                        1000: {
                            name: "All",
                            key: 'All'
                        }
                    };

                    $(document).ready(function() {
                        $("#experience").on('change', function() {
                            var val = $(this).val();
                            if (val == 1) {
                                $("#experience_from").prop('disabled', false);
                                $("#experience_to").prop('disabled', false);
                            } else {
                                $("#experience_from").val('').prop('disabled', true);
                                $("#experience_to").val('').prop('disabled', true);
                            }
                        });
                        allowInputNumber('experience_from');
                        allowInputNumber('experience_to');
                        allowInputNumber('salary_from');
                        allowInputNumber('salary_to');
                        allowInputNumber('from_age');
                        allowInputNumber('to_age');

                        $('#keyword').autoComplete({
                            minChars: 3,
                            source: function(term, response) {
                                term = term.toLowerCase();
                                $.getJSON("https://careerbuilder.vn/vi/jobseekers/index/getlistkeyword?typedata=json", {
                                    q: term,
                                    limit: 10
                                }, function(data) {
                                    response(data);
                                });
                            }
                        });
                    });
                    $(window).on('load', function() {
                        var id = $("#salary").val();
                        if (id == "all" || id == "ltt") {
                            $("#salary_from").prop("disabled", true);
                            $("#salary_to").prop("disabled", true);
                        } else {
                            $("#salary_from").prop("disabled", false);
                            $("#salary_to").prop("disabled", false);
                        }
                    })
                </script>

                <div class="box-resume-search-search-result">
                    <div class="search-result-top">
                        <div class="top">
                            <p class="success">
                                Chúng tôi đã tìm thấy <strong> 104,874</strong> <strong>hồ sơ phù hợp</strong> theo như tiêu chí tìm kiếm của quý khách
                            </p>
                            <a href="javascript:void(0);" class="created-alerts">Tạo thông báo email với tiêu chí tìm kiếm này</a>
                        </div>
                        <div class="bottom">
                            <div class="keyword">
                                <p>
                                    <strong>Từ khóa: </strong>
                                    <span>Nhân viên bán hàng thu ngân</span>
                                </p>
                            </div>


                        </div>
                    </div>
                    <div class="main-jobs-posting">
                        <div class="heading-jobs-posting">
                            <div class="left-heading">
                                <p class="name">Xem:</p>
                                <ul class="list-check">
                                    <li class="view-posting-detail"><a href="javascript:;">Chi tiết</a></li>
                                    <li class="view-posting-summary active"><a href="javascript:void(0)">Tóm tắt</a></li>
                                </ul>
                            </div>
                            <div class="right-heading">
                                <div class="to-display">
                                    <p class="name">Sắp xếp</p>
                                    <div class="form-sort">
                                        <select id="box_sort_change" onchange="changesort('https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n');">
									<option value="phh">Phù hợp</option>
									<option value="kng" >Kinh nghiệm</option>
									<option value="lng" >Mức lương</option>
									<option value="date"  selected="selected">Ngày truy cập</option>
								</select>
                                    </div>
                                    <p class="name-display">
                                        Hiển thị <strong>1 - 20 </strong> trong <strong>104,874</strong> hồ sơ
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="boding-jobs-posting">
                            <div class="table table-jobs-posting">
                                <table>
                                    <thead>
                                        <tr>
                                            <th width="48%">Ứng Viên</th>
                                            <th width="10%">
                                                <a href="https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/kng_desc">
											Kinh nghiệm
																					</a>
                                            </th>
                                            <th width="10%">
                                                <a href="https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/lng_desc">
											Lương
																					</a>
                                            </th>
                                            <th width="10%">Nơi làm việc</th>
                                            <th width="12%">
                                                <a href="https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/date_asc">
																							Ngày truy cập
											
																							<em class="material-icons">arrow_drop_down</em>
																					</a>
                                            </th>
                                            <th width="10%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="title">
                                                    <div class="job-name">
                                                        <a class="job-title" href="https://careerbuilder.vn/vi/employers/popup/resumeinfo/35A4E900/35A4E900/nhan-vien-tham-dinh/361DF78D.html?&highlight=Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n" target="_blank" title="Nhân viên Thẩm định">
													<b>Nhân viên Thẩm định</b>
												</a>

                                                        <p class="status viewed chkBuy" data-idcheck="361DF78D">
                                                            <em class="material-icons">visibility </em> Đã xem&nbsp;
                                                        </p>
                                                        <p class="status bought hidden">
                                                            <em class="material-icons">visibility </em> Đã mua&nbsp;
                                                        </p>

                                                    </div>
                                                    <div class="status">

                                                    </div>
                                                    <a class="name" href="https://careerbuilder.vn/vi/employers/popup/resumeinfo/35A4E900/35A4E900/nhan-vien-tham-dinh/361DF78D.html?&highlight=Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n">
											  														Chí Công
											  	
											  												</a>


                                                    <a class="attach-button" href="javascript:;">
												<img src="img/resume_type_2.gif" width="16" height="16" alt="
																													Hồ sơ Đính kèm
																											"

												title="Hồ sơ Đính kèm
													" />
											</a>
                                                    <ul class="info-list">
                                                        <li>
                                                            <p> <strong>Học vấn: </strong>Đại học</p>
                                                        </li>
                                                        <li>
                                                            <p> <strong>Cấp bậc: </strong>Nhân viên</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="jobs-view-detail" style="display: block;">
                                                    <p>
                                                        ...DANH QUẢNG TRỊ <span class='highlight'>Nhân</span> <span class='highlight'>viên</span> <span class='highlight'>kinh</span> <span class='highlight'>doanh</span> Chịu trách nhiệm tìm kiếm khách
                                                        hàng và chăm sóc khách hàng. Kí kết hợp đồng với khách hàng về các hạng...
                                                    </p>

                                                </div>
                                                <div class="tag-list">
                                                    <a href="javascript:void(0);" class="add-moretag " onclick="return addResumeTag(7933581)">+ Thêm Tag</a>

                                                </div>
                                            </td>
                                            <td>
                                                <p>2 năm</p>
                                            </td>
                                            <td>
                                                <p>
                                                    8 Tr - 12 Tr VND
                                                </p>
                                            </td>
                                            <td>
                                                Đà Nẵng
                                            </td>
                                            <td>
                                                <p>Ngày hôm nay</p>
                                            </td>
                                            <td>
                                                <ul class="list-manipulation">
                                                    <li>
                                                        <a class="btn-add-tag" href="javascript:void(0);" onclick="return addResumeTag(7933581)" title="Thêm tag">
													<em class="material-icons">local_offer</em>
												</a>
                                                    </li>
                                                    <li><a class="btn-popup-flipview" title="Xem hồ sơ dạng Flipview" href="javascript:void(0)" onclick="windowFlipView('dHUta2hvYS9OaCVDMyVBMm4rdmklQzMlQUFuK2IlQzMlQTFuK2glQzMlQTBuZyt0aHUrbmclQzMlQTJuL3NvcnQvZGF0ZV9kZXNj',0, 3);"><em class="material-icons">import_contacts </em></a></li>
                                                    <li><a href="javascript:void(0)" onclick="showFoldersSelected('361DF78D');" class="btn-save-folder" href="javascript:void(0)" title="Lưu vào thư mục"><em class="material-icons">folder_shared </em></a></li>
                                                    <li><a href="https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/nhan vien tham dinh/noi-lam-viec/da-nang" title="Xem hồ sơ tương tự"> <em class="material-icons">account_box </em></a></li>
                                                    <li><a class="btn-delete" href="javascript:void(0)" onclick="return addResumeHidden(1, 7933581);" title="Ẩn hồ sơ"> <em class="material-icons">cancel </em></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                       
                                        <tr>
                                            <td>
                                                <div class="title">
                                                    <div class="job-name">
                                                        <a class="job-title" href="https://careerbuilder.vn/vi/employers/popup/resumeinfo/35A4E900/35A4E900/area-sales-manager/361398FD.html?&highlight=Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n" target="_blank" title="Area Sales Manager">
													<b>Area Sales Manager</b>
												</a>


                                                    </div>
                                                    <div class="status">

                                                    </div>
                                                    <a class="name" href="https://careerbuilder.vn/vi/employers/popup/resumeinfo/35A4E900/35A4E900/area-sales-manager/361398FD.html?&highlight=Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n">
											  														Phùng Hữu Thiện
											  	
											  												</a>


                                                    <a class="attach-button" href="javascript:;">
												<img src="img/resume_type_0.gif" width="16" height="16" alt="
																													Hồ sơ Theo mẫu
																											"

												title="Hồ sơ Theo mẫu
													" />
											</a>
                                                    <ul class="info-list">
                                                        <li>
                                                            <p> <strong>Học vấn: </strong>Đại học</p>
                                                        </li>
                                                        <li>
                                                            <p> <strong>Cấp bậc: </strong>Quản lý</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="jobs-view-detail" style="display: block;">
                                                    <p>
                                                        ...ty TNHH BODYF; <span class='highlight'>SALESMAN</span>;Area Sales Manager;SENIO;- Responsible for customers in different districts in Ho Chi Minh
                                                    </p>

                                                </div>
                                                <div class="tag-list">
                                                    <a href="javascript:void(0);" class="add-moretag " onclick="return addResumeTag(7254013)">+ Thêm Tag</a>

                                                </div>
                                            </td>
                                            <td>
                                                <p>7 năm</p>
                                            </td>
                                            <td>
                                                <p>
                                                    Thỏa thuận
                                                </p>
                                            </td>
                                            <td>
                                                Hồ Chí Minh
                                            </td>
                                            <td>
                                                <p>Ngày hôm nay</p>
                                            </td>
                                            <td>
                                                <ul class="list-manipulation">
                                                    <li>
                                                        <a class="btn-add-tag" href="javascript:void(0);" onclick="return addResumeTag(7254013)" title="Thêm tag">
													<em class="material-icons">local_offer</em>
												</a>
                                                    </li>
                                                    <li><a class="btn-popup-flipview" title="Xem hồ sơ dạng Flipview" href="javascript:void(0)" onclick="windowFlipView('dHUta2hvYS9OaCVDMyVBMm4rdmklQzMlQUFuK2IlQzMlQTFuK2glQzMlQTBuZyt0aHUrbmclQzMlQTJuL3NvcnQvZGF0ZV9kZXNj',11, 3);"><em class="material-icons">import_contacts </em></a></li>
                                                    <li><a href="javascript:void(0)" onclick="showFoldersSelected('361398FD');" class="btn-save-folder" href="javascript:void(0)" title="Lưu vào thư mục"><em class="material-icons">folder_shared </em></a></li>
                                                    <li><a href="https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/area sales manager/noi-lam-viec/ho-chi-minh" title="Xem hồ sơ tương tự"> <em class="material-icons">account_box </em></a></li>
                                                    <li><a class="btn-delete" href="javascript:void(0)" onclick="return addResumeHidden(1, 7254013);" title="Ẩn hồ sơ"> <em class="material-icons">cancel </em></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                            <div class="main-pagination">
                                <div class="main-pagination">
                                    <ul class="pagination">
                                        <li class="PagerOtherPageCells active"><a href="javascript:void(0);">1</a></li>
                                        <li class="PagerOtherPageCells"><a href='https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/date_desc/page/2'>2</a></li>
                                        <li class="PagerOtherPageCells"><a href='https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/date_desc/page/3'>3</a></li>
                                        <li class="PagerOtherPageCells"><a href='https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/date_desc/page/4'>4</a></li>
                                        <li class="PagerOtherPageCells"><a href='https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/date_desc/page/5'>5</a></li>
                                        <li class="PagerOtherPageCells"><a class="LastPage" href='https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/date_desc/page/2'><em class="mdi mdi-chevron-right"></em></a></li>
                                    </ul>
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
        </section>
        <div class="flip-view-modal flip-view-2-modal" id="flip-view-modal" style="display: none">
            <div class="box-flip-view">
                <div class="flip-view-modal-left">
                    <a href="javascript:void(0);" class="flip_prev" id="flip_prev"></a>
                    <a href="javascript:void(0);" class="flip_next" id="flip_next"></a>
                    <div class="modal-head">
                        <p class="title">Resume Flip View</p>
                    </div>
                    <div class="modal-body" id="contentResumeFlip">
                    </div>
                </div>
                <div class="flip-view-modal-right">
                    <div class="box-info-top">
                        <p class="title">Lọc hồ sơ</p>
                        <form action="">
                            <div class="form-wrap">
                                <div class="form-group form-checkbox">
                                    <input class="input_margin" type="checkbox" name="filter_viewed" id="filter_viewed" value="-1" />
                                    <label for="filter_viewed">Đã xem </label>
                                </div>
                                <div class="form-group form-checkbox">
                                    <input class="input_margin" type="checkbox" name="filter_saved" id="filter_saved" value="" />
                                    <label for="filter_saved">Đã lưu</label>
                                </div>
                                <div class="form-group form-checkbox">
                                    <input class="input_margin" type="checkbox" name="filter_coworker" id="filter_coworker" value="" />
                                    <label for="filter_coworker">Đồng nghiệp xem</label>
                                </div>
                                <input type="hidden" name="page_return" id="page_return" value="-1" />

                            </div>
                        </form>
                        <div class="tag-list" id="myTag"></div>
                        <div id="actionPanel"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jobs-posting-modal jobs-posting-14-modal" id="popup-frmAlertUngVien" style="display: none">
            <div class="modal-head">
                <p class="title">lưu tiêu chí thông báo ứng viên</p>
            </div>
            <div class="modal-body">
                <form name="frmAdvanceSearch" id="frmAdvanceSearch" method="post">
                    <input type="hidden" name="save_search" value="1" />
                    <input type="hidden" name="save_search_advance" value="0" />
                    <input type="hidden" name="level_id" value="" />
                    <input type="hidden" name="degree_id" value="" />
                    <input type="hidden" name="salary" value="" />
                    <input type="hidden" name="salary_from_vn" value="" />
                    <input type="hidden" name="salary_to_vn" value="" />
                    <input type="hidden" name="salary_from_us" value="" />
                    <input type="hidden" name="salary_to_us" value="" />
                    <input type="hidden" name="experience_from" value="" />
                    <input type="hidden" name="experience_to" value="" />
                    <input type="hidden" name="resume_date" value="" />
                    <input type="hidden" name="from_age" value="" />
                    <input type="hidden" name="to_age" value="" />
                    <input type="hidden" name="resume_time_kind" value="0" />
                    <div class="form-wrap">
                        <div class="form-group form-text">
                            <label for="">Tên thiết lập</label>
                            <input type="text" name="savesearch_title" id="savesearch_title" placeholder="" value="Nhân viên bán hàng thu ngân">
                            <span class="noted">Tối đa 200 kí tự</span>
                        </div>
                        <div class="form-group">
                            <p>Nhận email</p>
                        </div>
                        <div class="form-group form-radio">
                            <div class="group">
                                <input type="radio" name="receive_term" id="receive_term1" value="1" checked="checked">
                                <label for="receive_term1">Mỗi ngày</label>
                            </div>
                            <div class="group">
                                <input type="radio" name="receive_term" id="receive_term2" value="7">
                                <label for="receive_term2">Mỗi tuần</label>
                            </div>
                            <div class="group">
                                <input type="radio" name="receive_term" id="receive_term3" value="0">
                                <label for="receive_term3">Không nhận</label>
                            </div>
                        </div>
                        <p class="note-alerts">- Tiêu chí thiết lập này sẽ được lưu tại Tìm kiếm đã lưu <a href="https://careerbuilder.vn/vi/employers/saved_search">Tìm kiếm đã lưu</a></p>
                        <div class="form-group form-submit">
                            <button class="btn-gradient" id="savesearchresume_info" onclick="return saveSearchInfo(); return false;" type="submit">Lưu thiết lập</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

      


    </main>
   
   

    <div class="page-loader" id="page-loading">
        <div class="lds-roller">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


</body>

</html>