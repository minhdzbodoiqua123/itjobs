<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/tim_viec_lam.css" ?>">
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/global/css/multi-select-dropdown.css" ?>">
<script defer   src="<?= _WEB_ROOT . "/app/public/assets/clients/js/tim_viec_lam.js" ?>"></script>
<body class="">

  
    <main>
<!--    
        <section class="find-jobs-form">
            <div class="container">
                <div class="main-form">
                    <form>
                        <div class="advanced-search">
                            <div class="form-group form-keyword">
       <input type="search" class="keyword" name="keyword" id="keyword"  placeholder="Chức danh, Kỹ năng, Tên công ty">
                                <div class="cleartext"><em class="mdi mdi-close-circle"></em></div>
                            </div>
                            <div class="form-group form-select-chosen">
                                <select id="industry" name="industry" class="chosen-select-max-three" placeholder="Tất cả ngành nghề" multiple>
  	<option value="">Chọn ngành nghề</option>
    <option value="an-ninh-bao-ve_51">An Ninh / Bảo Vệ</option><option value="an-toan-lao-dong_58">An toàn lao động</option><option value="ban-hang-kinh-doanh_31">Bán hàng / Kinh doanh</option><option value="ban-le-ban-si_30">Bán lẻ / Bán sỉ</option><option value="bao-hiem_23">Bảo hiểm</option><option value="bat-dong-san_28">Bất động sản</option><option value="bien-phien-dich_38">Biên phiên dịch</option><option value="buu-chinh-vien-thong_32">Bưu chính viễn thông</option><option value="chan-nuoi-thu-y_52">Chăn nuôi / Thú y</option><option value="chung-khoan_46">Chứng khoán</option><option value="cntt-phan-cung-mang_63">CNTT - Phần cứng / Mạng</option><option value="cntt-phan-mem_1">CNTT - Phần mềm</option><option value="cong-nghe-sinh-hoc_69">Công nghệ sinh học</option><option value="cong-nghe-thuc-pham-dinh-duong_70">Công nghệ thực phẩm / Dinh dưỡng</option><option value="co-khi-o-to-tu-dong-hoa_14">Cơ khí / Ô tô / Tự động hóa</option><option value="dau-khi_26">Dầu khí</option><option value="det-may-da-giay-thoi-trang_39">Dệt may / Da giày / Thời trang</option><option value="dich-vu-khach-hang_12">Dịch vụ khách hàng</option><option value="du-lich_34">Du lịch</option><option value="duoc-pham_7">Dược phẩm</option><option value="dien-dien-tu-dien-lanh_48">Điện / Điện tử / Điện lạnh</option><option value="do-go_35">Đồ gỗ</option><option value="giai-tri_15">Giải trí</option><option value="giao-duc-dao-tao_13">Giáo dục / Đào tạo</option><option value="hang-gia-dung-cham-soc-ca-nhan_10">Hàng gia dụng / Chăm sóc cá nhân</option><option value="hang-hai_61">Hàng hải</option><option value="hang-khong_60">Hàng không</option><option value="hanh-chinh-thu-ky_3">Hành chính / Thư ký</option><option value="hoa-hoc_41">Hóa học</option><option value="in-an-xuat-ban_64">In ấn / Xuất bản</option><option value="ke-toan-kiem-toan_2">Kế toán / Kiểm toán</option><option value="khoang-san_65">Khoáng sản</option><option value="kien-truc_6">Kiến trúc</option><option value="lao-dong-pho-thong_44">Lao động phổ thông</option><option value="lam-nghiep_50">Lâm Nghiệp</option><option value="luat-phap-ly_24">Luật / Pháp lý</option><option value="moi-truong_16">Môi trường</option><option value="moi-tot-nghiep-thuc-tap_45">Mới tốt nghiệp / Thực tập</option><option value="my-thuat-nghe-thuat-thiet-ke_11">Mỹ thuật / Nghệ thuật / Thiết kế</option><option value="ngan-hang_19">Ngân hàng</option><option value="nha-hang-khach-san_29">Nhà hàng / Khách sạn</option><option value="nhan-su_22">Nhân sự</option><option value="noi-ngoai-that_47">Nội ngoại thất</option><option value="nong-nghiep_5">Nông nghiệp</option><option value="phi-chinh-phu-phi-loi-nhuan_20">Phi chính phủ / Phi lợi nhuận</option><option value="quan-ly-chat-luong-qa-qc_42">Quản lý chất lượng (QA/QC)</option><option value="quan-ly-dieu-hanh_17">Quản lý điều hành</option><option value="quang-cao-doi-ngoai-truyen-thong_67">Quảng cáo / Đối ngoại / Truyền Thông</option><option value="san-xuat-van-hanh-san-xuat_25">Sản xuất / Vận hành sản xuất</option><option value="tai-chinh-dau-tu_59">Tài chính / Đầu tư</option><option value="thong-ke_36">Thống kê</option><option value="thu-mua-vat-tu_43">Thu mua / Vật tư</option><option value="thuy-loi_53">Thủy lợi</option><option value="thuy-san-hai-san_49">Thủy sản / Hải sản</option><option value="thu-vien_57">Thư viện</option><option value="thuc-pham-do-uong_21">Thực phẩm &amp; Đồ uống</option><option value="tiep-thi-marketing_4">Tiếp thị / Marketing</option><option value="tiep-thi-truc-tuyen_37">Tiếp thị trực tuyến</option><option value="to-chuc-su-kien_68">Tổ chức sự kiện</option><option value="trac-dia-dia-chat_54">Trắc địa / Địa Chất</option><option value="truyen-hinh-bao-chi-bien-tap_66">Truyền hình / Báo chí / Biên tập</option><option value="tu-van_9">Tư vấn</option><option value="van-chuyen-giao-nhan-kho-van_33">Vận chuyển / Giao nhận /  Kho vận</option><option value="xay-dung_8">Xây dựng</option><option value="xuat-nhap-khau_18">Xuất nhập khẩu</option><option value="y-te-cham-soc-suc-khoe_56">Y tế / Chăm sóc sức khỏe</option><option value="bao-tri-sua-chua_71">Bảo trì / Sửa chữa</option><option value="nganh-khac_27">Ngành khác</option>  </select>
                            </div>
                            <div class="form-group form-select-chosen">
                                <select id="location" name="location" class="chosen-select-max-three" data-placeholder="Tất cả địa điểm" multiple>
    <option value="">Chọn địa điểm</option>
	<option value="ha-noi_4">Hà Nội</option><option value="ho-chi-minh_8">Hồ Chí Minh</option><option value="an-giang_76">An Giang</option><option value="ba-ria-vung-tau_64">Bà Rịa - Vũng Tàu</option><option value="bac-lieu_781">Bạc Liêu</option><option value="bac-can_281">Bắc Cạn</option><option value="bac-giang_240">Bắc Giang</option><option value="bac-ninh_241">Bắc Ninh</option><option value="ben-tre_75">Bến Tre</option><option value="binh-duong_650">Bình Dương</option><option value="binh-dinh_56">Bình Định</option><option value="binh-phuoc_651">Bình Phước</option><option value="binh-thuan_62">Bình Thuận</option><option value="ca-mau_78">Cà Mau</option><option value="cao-bang_26">Cao Bằng</option><option value="can-tho_71">Cần Thơ</option><option value="dak-lak_50">Dak Lak</option><option value="dak-nong_1042">Dak Nông</option><option value="da-nang_511">Đà Nẵng</option><option value="dien-bien_900">Điện Biên</option><option value="dong-bang-song-cuu-long_1064">Đồng Bằng Sông Cửu Long</option><option value="dong-nai_61">Đồng Nai</option><option value="dong-thap_67">Đồng Tháp</option><option value="gia-lai_59">Gia Lai</option><option value="ha-giang_19">Hà Giang</option><option value="ha-nam_351">Hà Nam</option><option value="ha-tinh_39">Hà Tĩnh</option><option value="hai-duong_320">Hải Dương</option><option value="hai-phong_31">Hải Phòng</option><option value="hau-giang_780">Hậu Giang</option><option value="hoa-binh_18">Hòa Bình</option><option value="hung-yen_321">Hưng Yên</option><option value="khac_901">Khác</option><option value="khanh-hoa_58">Khánh Hòa</option><option value="kien-giang_77">Kiên Giang</option><option value="kon-tum_60">Kon Tum</option><option value="kv-bac-trung-bo_1071">KV Bắc Trung Bộ</option><option value="kv-dong-nam-bo_1069">KV Đông Nam Bộ</option><option value="kv-nam-trung-bo_1070">KV Nam Trung Bộ</option><option value="kv-tay-nguyen_1072">KV Tây Nguyên</option><option value="lai-chau_23">Lai Châu</option><option value="lang-son_25">Lạng Sơn</option><option value="lao-cai_20">Lào Cai</option><option value="lam-dong_63">Lâm Đồng</option><option value="long-an_72">Long An</option><option value="nam-dinh_350">Nam Định</option><option value="nghe-an_38">Nghệ An</option><option value="ninh-binh_30">Ninh Bình</option><option value="ninh-thuan_68">Ninh Thuận</option><option value="phu-tho_210">Phú Thọ</option><option value="phu-yen_57">Phú Yên</option><option value="quang-binh_52">Quảng Bình</option><option value="quang-nam_510">Quảng Nam</option><option value="quang-ngai_55">Quảng Ngãi</option><option value="quang-ninh_33">Quảng Ninh</option><option value="quang-tri_53">Quảng Trị</option><option value="soc-trang_79">Sóc Trăng</option><option value="son-la_22">Sơn La</option><option value="tay-ninh_66">Tây Ninh</option><option value="thai-binh_36">Thái Bình</option><option value="thai-nguyen_280">Thái Nguyên</option><option value="thanh-hoa_37">Thanh Hóa</option><option value="thua-thien-hue_54">Thừa Thiên- Huế</option><option value="tien-giang_73">Tiền Giang</option><option value="toan-quoc_1065">Toàn quốc</option><option value="tra-vinh_74">Trà Vinh</option><option value="tuyen-quang_27">Tuyên Quang</option><option value="vinh-long_70">Vĩnh Long</option><option value="vinh-phuc_211">Vĩnh Phúc</option><option value="yen-bai_29">Yên Bái</option><option value="banteay-meanchey_1098">Banteay Meanchey</option><option value="battambang_1096">Battambang</option><option value="kampong-chhnang_1092">Kampong Chhnang</option><option value="kampong-speu_1090">Kampong Speu</option><option value="kampot_1085">Kampot</option><option value="kandal_1088">Kandal</option><option value="kep_1084">Kep</option><option value="koh-kong_1091">Koh Kong</option><option value="kratie_1093">Kratie</option><option value="otdar-meanchey_1104">Otdar Meanchey</option><option value="pailin_1103">Pailin</option><option value="phnompenh_1041">Phnompenh</option><option value="preah-vihear_1099">Preah Vihear</option><option value="prey-veng_1089">Prey Veng</option><option value="siem-reap_1097">Siem Reap</option><option value="stung-treng_1100">Stung Treng</option><option value="svay-rieng_1087">Svay Rieng</option><option value="tbong-khmum_1082">Tbong Khmum</option><option value="chicago_1034">Chicago</option><option value="florida_1077">Florida</option><option value="miami_1033">Miami</option><option value="san-diego_1039">San Diego</option><option value="hong-kong_1079">Hồng Kông</option><option value="khac_1318">Khác</option><option value="attapeu_1106">Attapeu</option><option value="bokeo_1107">Bokeo</option><option value="champasak_1109">Champasak</option><option value="houaphanh_1110">Houaphanh</option><option value="khammouane_1111">Khammouane</option><option value="luang-prabang_1113">Luang Prabang</option><option value="phongsaly_1115">Phongsaly</option><option value="vientiane_1059">Vientiane</option><option value="xiangkhouang_1120">Xiangkhouang</option><option value="kuala-lumpur_1019">Kuala Lumpur</option><option value="malaysia_1078">Malaysia</option><option value="yangon_1320">Yangon</option><option value="hokkaido_1043">Hokkaido</option><option value="tokyo_1001">Tokyo</option><option value="yokohama_1002">Yokohama</option><option value="qatar_1055">Qatar</option><option value="quoc-te_1073">Quốc tế</option><option value="singapore_1040">Singapore</option><option value="kharkiv_1053">Kharkiv</option>  </select>
                            </div>
                            <div class="form-group find-jobs">
                                <button class="btn-gradient" onClick="return validDatasearchJobsByKeyword('vi');">
  <p>Tìm Ngay</p>
  <span class="mdi mdi-magnify"></span> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section> -->
        <section class="find-jobsby-categories cb-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="cb-title">
                            <h1>Tìm Việc Làm Theo Ngành Nghề</h1>
                        </div>
                        <div class="row list-of-working-positions">
                            <div class="col-md-12 col-lg-4 cus-col">
                                <!-- <div class="title-h3">
                                    <h2>Tìm việc làm Bán hàng / Tiếp thị</h2>
                                </div> -->
                            <?php foreach ($data_industry as $item):?>
                                <ul class="list-jobs">
                                    <li><a href="<?= _WEB_ROOT.'/alljob?keyword=&industry%5B%5D='.$item["profession_id"] ?>" title="Tiếp thị / Marketing"><?= $item["profession_name"] ?></a><span><?= $item["quantity"] ?></span>
                                    </li>
                                    </li>
                                </ul>
                         <?php  endforeach;?>
                            </div>
                          
                           
                        </div>
                    </div>
                    <div class="col-xl-3">
                      
                            <div class="main-jobs-by-type">
                            <div class="title-h4">
                                <h4>Việc Làm Theo Đối Tượng</h4>
                            </div>
                            <div class="featured">
                                <a href="https://careerbuilder.vn/viec-lam-noi-bat-trong-tuan">
                                    <h5>Việc làm nổi bật trong tuần</h5>
                                </a>
                            </div>
                            <ul class="list-featured">
                          
                                <li><a href="https://careerbuilder.vn/viec-lam/moi-tot-nghiep-thuc-tap-c45-vi.html"></a><span>450</span>
                                </li>
                                <li><a href="https://careerbuilder.vn/viec-lam/quan-ly-dieu-hanh-c17-vi.html">Quản lý điều hành</a><span>1.034</span>
                                </li>
                                <li><a href="https://careerbuilder.vn/viec-lam/thoi-vu-nghe-tu-do-t0010-vi.html">Thời vụ/ Nghề tự do</a><span>186</span>
                                </li>
                                <!--<li><a href="https://careerbuilder.vn/viec-lam/ban-thoi-gian-k0100-vi.html">Bán thời gian</a><span>(4)</span></li>-->
                                <li><a href="https://careerbuilder.vn/viec-lam/tam-thoi-du-an-t0100-vi.html">Tạm thời/ Dự án</a><span>367</span>
                                </li>
                            </ul>
                        </div>
                   
                        <div class="main-jobs-by-location">
                            <div class="title-h4">
                                <h4>Việc Làm Theo Địa Điểm</h4>
                            </div>
                            <div class="jobs-in-country">
                                <div class="title">
                                    <h3>Việc Làm Trong nước</h3>
                                </div>
                                <ul  id="listCountry">

                                    <li><a href="https://careerbuilder.vn/viec-lam/ha-tay-l34-vi.html">Việc làm tại
                      Hà Tây</a></li>
                                    <li><a href="https://careerbuilder.vn/viec-lam/ha-tinh-l39-vi.html">Việc làm tại
                      Hà Tĩnh</a></li>
                                    <li><a href="https://careerbuilder.vn/viec-lam/hai-duong-l320-vi.html">Việc làm tại
                      Hải Dương</a></li>
                                    <li><a href="https://careerbuilder.vn/viec-lam/hau-giang-l780-vi.html">Việc làm tại
                      Hậu Giang</a></li>
                                    <li><a href="https://careerbuilder.vn/viec-lam/hoa-binh-l18-vi.html">Việc làm tại
                      Hòa Bình</a></li>
                                    <li><a href="https://careerbuilder.vn/viec-lam/hung-yen-l321-vi.html">Việc làm tại
                      Hưng Yên</a></li>
                                    <li><a href="https://careerbuilder.vn/viec-lam/khac-l901-vi.html">Việc làm tại
                      Khác</a></li>
                                    <li><a href="https://careerbuilder.vn/viec-lam/khanh-hoa-l58-vi.html">Việc làm tại
                      Khánh Hòa</a></li>
                                    <li><a href="https://careerbuilder.vn/viec-lam/kien-giang-l77-vi.html">Việc làm tại
                      Kiên Giang</a></li>
                                    <li><a href="https://careerbuilder.vn/viec-lam/kon-tum-l60-vi.html">Việc làm tại
                      Kon Tum</a></li>
                                    <li><a href="https://careerbuilder.vn/viec-lam/kv-bac-trung-bo-l1071-vi.html">Việc làm tại
                      KV Bắc Trung Bộ</a></li>
                               
                                  
                                    
                                 
                                </ul>
                                <!-- <div class="view-more"> <a class="active" href="javascript:void(0);" id="view-less">
                    Thu gọn<em class="mdi mdi-minus-circle-outline"></em> </a> <a href="javascript:void(0);" id="view-more"> Xem thêm<em
                      class="mdi mdi-plus-circle-outline"></em> </a> </div> -->
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="advanced-search-modal" style="display: none">

        </div>
        <!-- <section class="cb-section">
            <div class="container">
                <div class="hot-jobs-list">
                    <div class="tabs">
                        <ul class="tabs-toggle">
                            <li><a class="pointer" alt="#tab-1">Vị trí HOT đang tuyển</a></li>
                            <li><a class="pointer" alt="#tab-2">Việc Làm VIP ( $1000+)</a></li>
                            <li><a class="pointer" alt="#tab-3">Việc Làm Từ Top Headhunter</a></li>
                        </ul>
                        <div class="tab-content" id="tab-1">
                            <div class="hot-jobs-slide" id="hot-jobs-slide">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="row">
                                                <div class="col-lg-6 ">
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image"><a target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam.35A66A42.html" title="HEINEKEN Vietnam "><img src="https://images.careerbuilder.vn/employer_folders/lot6/98626/67x67/155027logohnk-vn.png" alt="HEINEKEN Vietnam " /></a></div>
                                                            <div class="figcaption">
                                                                <div class="title"><a target="_blank" href="https://careerbuilder.vn/vi/tim-viec-lam/wms-specialist-chuyen-vien-he-thong-quan-li-kho-vung-tau-brewery.35BAA520.html" title="WMS Specialist - Chuyên viên Hệ thống Quản lí kho (Vung Tau Brewery)">WMS Specialist - Chuyên viên Hệ thống Quản lí kho (Vung Tau Brewery)</a></div>
                                                                <div class="caption">
                                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam.35A66A42.html" title="HEINEKEN Vietnam " target="_blank">HEINEKEN Vietnam </a>
                                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <em class="mdi mdi-map-marker"></em>
                                                                        <p> Bà Rịa - Vũng Tàu</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="top-icon"> <span class="top">Top</span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 ">
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image"><a target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam.35A66A42.html" title="HEINEKEN Vietnam "><img src="https://images.careerbuilder.vn/employer_folders/lot6/98626/67x67/155027logohnk-vn.png" alt="HEINEKEN Vietnam " /></a></div>
                                                            <div class="figcaption">
                                                                <div class="title"><a target="_blank" href="https://careerbuilder.vn/vi/tim-viec-lam/supply-chain-digital-specialist-quang-nam.35BAA53D.html" title="Supply Chain Digital Specialist (Quang Nam)">Supply Chain Digital Specialist (Quang Nam)</a></div>
                                                                <div class="caption">
                                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam.35A66A42.html" title="HEINEKEN Vietnam " target="_blank">HEINEKEN Vietnam </a>
                                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <em class="mdi mdi-map-marker"></em>
                                                                        <p> Quảng Nam</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="top-icon"> <span class="top">Top</span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 ">
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image"><a target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam.35A66A42.html" title="HEINEKEN Vietnam "><img src="https://images.careerbuilder.vn/employer_folders/lot6/98626/67x67/155027logohnk-vn.png" alt="HEINEKEN Vietnam " /></a></div>
                                                            <div class="figcaption">
                                                                <div class="title"><a target="_blank" href="https://careerbuilder.vn/vi/tim-viec-lam/net-developer-hcm-ho.35BAA549.html" title=".Net Developer (HCM HO)">.Net Developer (HCM HO)</a></div>
                                                                <div class="caption">
                                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam.35A66A42.html" title="HEINEKEN Vietnam " target="_blank">HEINEKEN Vietnam </a>
                                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <em class="mdi mdi-map-marker"></em>
                                                                        <p> Hồ Chí Minh</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="top-icon"> <span class="top">Top</span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 ">
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image"><a target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam.35A66A42.html" title="HEINEKEN Vietnam "><img src="https://images.careerbuilder.vn/employer_folders/lot6/98626/67x67/155027logohnk-vn.png" alt="HEINEKEN Vietnam " /></a></div>
                                                            <div class="figcaption">
                                                                <div class="title"><a target="_blank" href="https://careerbuilder.vn/vi/tim-viec-lam/senior-qa-engineer-software-global-team.35BAA551.html" title="Senior QA Engineer (Software), Global Team">Senior QA Engineer (Software), Global Team</a></div>
                                                                <div class="caption">
                                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam.35A66A42.html" title="HEINEKEN Vietnam " target="_blank">HEINEKEN Vietnam </a>
                                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <em class="mdi mdi-map-marker"></em>
                                                                        <p> Hồ Chí Minh</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="top-icon"> <span class="top">Top</span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 ">
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image"><a target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam.35A66A42.html" title="HEINEKEN Vietnam "><img src="https://images.careerbuilder.vn/employer_folders/lot6/98626/67x67/155027logohnk-vn.png" alt="HEINEKEN Vietnam " /></a></div>
                                                            <div class="figcaption">
                                                                <div class="title"><a target="_blank" href="https://careerbuilder.vn/vi/tim-viec-lam/learning-development-executive-vung-tau-brewery.35BAA530.html" title="Learning & Development Executive (Vung Tau Brewery)">Learning & Development Executive (Vung Tau Brewery)</a></div>
                                                                <div class="caption">
                                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam.35A66A42.html" title="HEINEKEN Vietnam " target="_blank">HEINEKEN Vietnam </a>
                                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <em class="mdi mdi-map-marker"></em>
                                                                        <p> Bà Rịa - Vũng Tàu</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="top-icon"> <span class="top">Top</span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 ">
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image"><a target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam.35A66A42.html" title="HEINEKEN Vietnam "><img src="https://images.careerbuilder.vn/employer_folders/lot6/98626/67x67/155027logohnk-vn.png" alt="HEINEKEN Vietnam " /></a></div>
                                                            <div class="figcaption">
                                                                <div class="title"><a target="_blank" href="https://careerbuilder.vn/vi/tim-viec-lam/warehouse-transport-lead-shift-manager-vung-tau.35BAA508.html" title="Warehouse & Transport Lead (Shift Manager) - Vung Tau">Warehouse & Transport Lead (Shift Manager) - Vung Tau</a></div>
                                                                <div class="caption">
                                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam.35A66A42.html" title="HEINEKEN Vietnam " target="_blank">HEINEKEN Vietnam </a>
                                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <em class="mdi mdi-map-marker"></em>
                                                                        <p> Bà Rịa - Vũng Tàu</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="top-icon"> <span class="top">Top</span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 ">
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image"><a target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam.35A66A42.html" title="HEINEKEN Vietnam "><img src="https://images.careerbuilder.vn/employer_folders/lot6/98626/67x67/155027logohnk-vn.png" alt="HEINEKEN Vietnam " /></a></div>
                                                            <div class="figcaption">
                                                                <div class="title"><a target="_blank" href="https://careerbuilder.vn/vi/tim-viec-lam/dai-dien-tieu-thu-sales-representatives-khu-vuc-ha-noi-on-trade.35BADF10.html" title="Đại diện tiêu thụ (Sales Representatives)- Khu vực Hà Nội  (On Trade)">Đại diện tiêu thụ (Sales Representatives)- Khu vực Hà Nội  (On Trade)</a></div>
                                                                <div class="caption">
                                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam.35A66A42.html" title="HEINEKEN Vietnam " target="_blank">HEINEKEN Vietnam </a>
                                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <em class="mdi mdi-map-marker"></em>
                                                                        <p> Hà Nội</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="top-icon"> <span class="top">Top</span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 ">
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image"><a target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/coca-cola.35A4FE5F.html" title="Coca-Cola "><img src="https://images.careerbuilder.vn/employers/5471/67x67/153006logococa.png" alt="Coca-Cola " /></a></div>
                                                            <div class="figcaption">
                                                                <div class="title"><a target="_blank" href="https://careerbuilder.vn/vi/tim-viec-lam/it-strategy-business-partnering-manager-sap-supply-chain-enabling-functions.35BB039C.html" title="IT Strategy & Business Partnering Manager (SAP, Supply Chain & Enabling Functions)">IT Strategy & Business Partnering Manager (SAP, Supply Chain & Enabling Functions)</a></div>
                                                                <div class="caption">
                                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/coca-cola.35A4FE5F.html" title="Coca-Cola " target="_blank">Coca-Cola </a>
                                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <em class="mdi mdi-map-marker"></em>
                                                                        <p> Hồ Chí Minh</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="top-icon"> <span class="top">Top</span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 ">
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image"><a target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-gamuda-land-hcmc.35A7A766.html" title="Công ty Cổ phần Gamuda Land (HCMC)"><img src="https://images.careerbuilder.vn/employer_folders/lot4/179814/67x67/181747logo.png" alt="Công ty Cổ phần Gamuda Land (HCMC)" /></a></div>
                                                            <div class="figcaption">
                                                                <div class="title"><a target="_blank" href="https://careerbuilder.vn/vi/tim-viec-lam/sales-staff.35BB07FA.html" title="Sales Staff">Sales Staff</a></div>
                                                                <div class="caption">
                                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-gamuda-land-hcmc.35A7A766.html" title="Công ty Cổ phần Gamuda Land (HCMC)" target="_blank">Công ty Cổ phần Gamuda Land (HCMC)</a>
                                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <em class="mdi mdi-map-marker"></em>
                                                                        <p> Hồ Chí Minh</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="top-icon"> <span class="top">Top</span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 ">
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image"><a target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/concung-com-con-cung-joint-stock-company.35A70491.html" title="Concung.com - Con Cung Joint Stock Company"><img src="https://images.careerbuilder.vn/employer_folders/lot9/138129/67x67/171937hcrop_logoconcung-01.png" alt="Concung.com - Con Cung Joint Stock Company" /></a></div>
                                                            <div class="figcaption">
                                                                <div class="title"><a target="_blank" href="https://careerbuilder.vn/vi/tim-viec-lam/quan-1-nhan-vien-phuc-vu-coffee-space-con-cung.35BB08C1.html" title="Quận 1 - Nhân viên Phục Vụ Coffee Space Con Cưng">Quận 1 - Nhân viên Phục Vụ Coffee Space Con Cưng</a></div>
                                                                <div class="caption">
                                                                    <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/concung-com-con-cung-joint-stock-company.35A70491.html" title="Concung.com - Con Cung Joint Stock Company" target="_blank">Concung.com - Con Cung Joint Stock Company</a>
                                                                    <p class="salary"><em class="fa fa-usd"></em>Lương: Trên 7 Tr VND</p>
                                                                    <div class="location">
                                                                        <em class="mdi mdi-map-marker"></em>
                                                                        <p> Hồ Chí Minh</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="top-icon"> <span class="top">Top</span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-bottom">
                                        <div class="swiper-navigation">
                                            <div class="swiper-prev"><span class="mdi mdi-chevron-left"></span></div>
                                            <div class="main-pagination">
                                                <div class="swiper-pagination"></div>
                                            </div>
                                            <div class="swiper-next"><span class="mdi mdi-chevron-right"></span></div>
                                        </div>
                                        <div class="view-more"><a href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-vi.html">Xem việc làm mới cập nhật<span
                                            class="mdi mdi-arrow-right"></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="tab-2">
                            <div class="hot-jobs-slide" id="vip-jobs-slide">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper"></div>
                                    <div class="swiper-bottom">
                                        <div class="swiper-navigation">
                                            <div class="swiper-prev"><span class="mdi mdi-chevron-left"></span></div>
                                            <div class="main-pagination">
                                                <div class="swiper-pagination"></div>
                                            </div>
                                            <div class="swiper-next"><span class="mdi mdi-chevron-right"></span></div>
                                        </div>
                                        <div class="view-more"><a href="https://careerbuilder.vn/viec-lam/-vi.html">Xem việc làm mới cập nhật<span
                                            class="mdi mdi-arrow-right"></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="tab-3">
                            <div class="hot-jobs-slide" id="topheadhunt-jobs-slide">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper"></div>
                                    <div class="swiper-bottom">
                                        <div class="swiper-navigation">
                                            <div class="swiper-prev"><span class="mdi mdi-chevron-left"></span></div>
                                            <div class="main-pagination">
                                                <div class="swiper-pagination"></div>
                                            </div>
                                            <div class="swiper-next"><span class="mdi mdi-chevron-right"></span></div>
                                        </div>
                                        <div class="view-more"><a href="https://careerbuilder.vn/top-headhunt?utm_source=Home_TopHeadhunt&utm_medium=TopHeadhunt&utm_campaign=Promote_TopHeadhunt" target="_blank">Việc Làm Từ Top Headhunter<span
                                            class="mdi mdi-arrow-right"></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-industryInfo">
            <div class="container">
                <h2><strong>Cơ hội tìm việc làm lương cao mọi ngành nghề tại CareerBuilder</strong></h2>
                <p><span style="font-weight: 400;">Tình hình phát triển kinh tế khôi phục sau giai đoạn </span><a href="https://careerbuilder.vn/vi/talentcommunity/gian-cach-ma-khong-tao-khoang-cach-ban-da-lam-gi.35A51880.html"><span style="font-weight: 400;">giãn cách xã hội</span></a>
                    <span
                        style="font-weight: 400;"> tạo đà tăng trưởng nhu cầu tuyển nhân viên trong đa dạng các ngành nghề. Đặc biệt, thị trường tuyển dụng, tìm </span><a href="https://careerbuilder.vn/viec-lam/ha-noi-l4-vi.html"><span style="font-weight: 400;">việc làm Hà Nội</span></a>
                        <span
                            style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/ho-chi-minh-l8-vi.html"><span style="font-weight: 400;">việc làm TPHCM</span></a><span style="font-weight: 400;"> và các thành phố lớn đang có tín hiệu “nóng” dần lên ở nhiều ngành nghề như </span>
                            <a
                                href="https://careerbuilder.vn/viec-lam/c%C3%B4ng-ngh%E1%BB%87-th%C3%B4ng-tin-k-vi.html" target="_blank"><span style="font-weight: 400;">Công nghệ thông tin</span></a><span style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/t%C3%A0i-ch%C3%ADnh-ng%C3%A2n-h%C3%A0ng-k-vi.html" target="_blank"><span style="font-weight: 400;">tài chính ngân hàng</span></a>
                                <span
                                    style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/truy%E1%BB%81n-th%C3%B4ng--k-vi.html" target="_blank"><span style="font-weight: 400;">truyền thông</span></a><span style="font-weight: 400;">,...</span></p>
                <p><span style="font-weight: 400;">Số lượng đăng tải các tin tuyển dụng trên trang tìm kiếm việc làm CareerBuilder của các ngành này ngày càng tăng mạnh. Tuy nhiên, để nguồn nhân lực tài giỏi, có năng lực đáp ứng các yêu cầu của </span>
                    <a
                        href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-vi.html" target="_blank"><span style="font-weight: 400;">việc làm lương cao</span></a><span style="font-weight: 400;"> lại đang thiếu hụt. Bên cạnh đó, các </span><a href="https://careerbuilder.vn/viec-lam/lao-dong-pho-thong-c44-vi.html" target="_blank"><span style="font-weight: 400;">lao động phổ thông</span></a>
                        <span
                            style="font-weight: 400;"> đang muốn chuyển việc hay tìm việc làm mới lại thường gặp khó khăn lúc tìm nguồn thông tin xác thực.</span>
                </p>
                <p><span style="font-weight: 400;">Thấu hiểu những thách thức kể trên, CareerBuilder mong muốn giới thiệu ra thị trường mô hình "đại siêu thị việc làm" chất lượng. Một kênh phân phối cơ hội nghề nghiệp đến người tìm việc với đa dạng ngành nghề và lĩnh vực phong phú, các vị trí đăng tuyển đủ cấp bậc đến từ những </span>
                    <a
                        href="https://careerbuilder.vn/" target="_blank"><span style="font-weight: 400;">nhà tuyển dụng</span></a><span style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/top-headhunt" target="_blank"><span style="font-weight: 400;">top headhunter</span></a><span style="font-weight: 400;"> uy tín hàng đầu trên thị trường.</span></p>
                <h2><strong>Top việc làm mới, đang được tìm kiếm nhiều nhất 2022</strong></h2>
                <p><span style="font-weight: 400;">Kinh tế Việt Nam đang ngày càng phát triển kéo theo nhu cầu tuyển dụng luôn tăng nhanh. Vì vậy, một số vị trí, việc làm sẽ được chi trả với mức lương khá cạnh tranh. Dưới đây, CareerBuilder liệt kê top những công việc phổ biến trên toàn quốc:</span></p>
                <p> </p>
                <ul>
                    <li>
                        <h3><strong><a href="https://careerbuilder.vn/viec-lam/l%E1%BA%ADp-tr%C3%ACnh-vi%C3%AAn-kc1-vi.html" target="_blank"><strong>Lập trình viên</strong></a><strong> - cơ hội nghề nghiệp cao trên toàn quốc</strong></strong>
                        </h3>
                    </li>
                </ul>
                <p> </p>
                <p><span style="font-weight: 400;">Các nhà tuyển dụng thường yêu cầu lập trình viên thành thạo một số ngôn ngữ lập trình Java, CNC, C#, C++,… Vì tính chất công việc nên lập trình viên cần phải có tư duy logic và giải quyết vấn đề nhanh chóng. Công nghệ thông tin được áp dụng trong nhiều lĩnh vực như </span>
                    <a
                        href="https://careerbuilder.vn/viec-lam/y-te-cham-soc-suc-khoe-c56-vi.html" target="_blank"><span style="font-weight: 400;">y tế</span></a><span style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/Th%C6%B0%C6%A1ng-m%E1%BA%A1i-%C4%91i%E1%BB%87n-t%E1%BB%AD-k-vi.html" target="_blank"><span style="font-weight: 400;">thương mại điện tử</span></a>
                        <span
                            style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/giao-duc-dao-tao-c13-vi.html" target="_blank"><span style="font-weight: 400;">giáo dục</span></a><span style="font-weight: 400;">, bán hàng,... nên thu hút nhiều nhân tài trẻ tuổi với </span>
                            <a
                                href="https://vietnamsalary.careerbuilder.vn/detail/l%E1%BA%ADp-tr%C3%ACnh-vi%C3%AAn-kw" target="_blank"><span style="font-weight: 400;">mức lương</span></a><span style="font-weight: 400;"> dao động từ 11.4 triệu VNĐ đến 30 triệu VNĐ tùy vào năng lực cá nhân.</span></p>
                <p><span style="font-weight: 400;">Một số ngành nghề liên quan: </span><a href="https://careerbuilder.vn/viec-lam/IT-Helpdesk-k-vi.html" target="_blank"><span style="font-weight: 400;">IT Helpdesk</span></a><span style="font-weight: 400;">, </span>
                    <a
                        href="https://careerbuilder.vn/viec-lam/Business-Analyst-k-vi.html" target="_blank"><span style="font-weight: 400;">BA</span></a><span style="font-weight: 400;">,...</span></p>
                <p> </p>
                <ul>
                    <li>
                        <h3><strong><strong>Việc làm </strong><a href="https://careerbuilder.vn/viec-lam/Freelancer-k-vi.html" target="_blank"><strong>Freelancer</strong></a><strong> - xuất hiện dày đặc trên các trang tìm việc làm</strong></strong>
                        </h3>
                    </li>
                </ul>
                <p> </p>
                <p><span style="font-weight: 400;">Phù hợp với những bạn sinh viên, học sinh đến những người muốn thay đổi từ làm việc văn phòng sang công việc “tự do”. Điểm mạnh của việc làm freelancer là bạn có thể chủ động được thời gian, kiểm soát khối lượng công việc và chạm được những ngành nghề mình yêu thích. </span>
                    <a
                        href="https://careerbuilder.vn/viec-lam/content-marketing-k-vi.html" target="_blank"><span style="font-weight: 400;">Content marketing</span></a><span style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/truyen-hinh-bao-chi-bien-tap-c66-vi.html" target="_blank"><span style="font-weight: 400;">báo chí</span></a>
                        <span
                            style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/Graphic-Designer-k-vi.html" target="_blank"><span style="font-weight: 400;">designer</span></a><span style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/Gia-s%C6%B0-k-vi.html"
                                target="_blank"><span style="font-weight: 400;">gia sư</span></a><span style="font-weight: 400;">, dịch thuật, trợ lý tuyển dụng, tư vấn chiến lược, lập trình viên... là những việc làm freelancer phổ biến nhất hiện nay. Mức lương của freelancer vì thế cũng không cố định, nó sẽ phụ thuộc vào năng lực và nhiều yếu tố khác.</span></p>
                <p> </p>
                <ul>
                    <li>
                        <h3><strong><strong>Tuyển dụng việc làm </strong><a href="https://careerbuilder.vn/viec-lam/Graphic-Designer-k-vi.html" target="_blank"><strong>Graphic designer</strong></a><strong>, thiết kế đồ họa tại Việt Nam</strong></strong>
                        </h3>
                    </li>
                </ul>
                <p> </p>
                <p><span style="font-weight: 400;">Dù là một tập đoàn lớn hay một cơ sở kinh doanh vừa và nhỏ đều cũng cần đến hình ảnh để đại diện thương hiệu. Vì lẽ đó mà nhu cầu tìm kiếm nhân viên thiết kế đồ họa ngày càng tăng, đặc biệt là các công ty đồ họa, truyền thông, sản xuất phim,... </span>
                    <a
                        href="https://vietnamsalary.careerbuilder.vn/detail/Nh%C3%A2n-Vi%C3%AAn-Thi%E1%BA%BFt-K%E1%BA%BF-%C4%90%E1%BB%93-H%E1%BB%8Da-kw" target="_blank"><span style="font-weight: 400;">Mức lương của nhân viên thiết kế đồ họa</span></a><span style="font-weight: 400;"> cực hấp dẫn, trung bình từ 10,5 - 12,3 triệu/ tháng, mức cao nhất có thể đạt 35 triệu/ tháng tùy theo năng lực cá nhân.</span></p>
                <p> </p>
                <ul>
                    <li>
                        <h3><strong><strong>Phiên dịch tiếng Anh - tìm kiếm việc làm lương cao</strong></strong>
                        </h3>
                    </li>
                </ul>
                <p> </p>
                <p><span style="font-weight: 400;">Các ứng viên </span><a href="https://careerbuilder.vn/tim-viec-lam.html" target="_blank"><span style="font-weight: 400;">tìm việc làm</span></a><span style="font-weight: 400;"> phiên dịch tiếng Anh ở các thành phố như </span>
                    <a
                        href="https://careerbuilder.vn/viec-lam/ha-noi-l4-vi.html" target="_blank"><span style="font-weight: 400;">Hà Nội</span></a><span style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/ho-chi-minh-l8-vi.html" target="_blank"><span style="font-weight: 400;">Hồ Chí Minh</span></a>
                        <span
                            style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/da-nang-l511-vi.html" target="_blank"><span style="font-weight: 400;">Đà Nẵng</span></a><span style="font-weight: 400;">,... không quá khó. Bởi vì đây thuộc vùng kinh tế trọng điểm cả nước, nơi hội tụ các doanh nghiệp lớn và trụ sở của các tập đoàn đa quốc gia. Vì vậy, để các sự kiện, buổi tọa đàm, đấu thầu, ký kết hợp động,... được diễn ra hoàn hảo cần phải có phiên dịch tiếng Anh song hành. Xét về </span>
                            <a
                                href="https://vietnamsalary.careerbuilder.vn/detail/Phi%C3%AAn-D%E1%BB%8Bch-Vi%C3%AAn-Ti%E1%BA%BFng-Anh-kw" target="_blank"><span style="font-weight: 400;">mức lương</span></a><span style="font-weight: 400;">, vị trí này được đánh giá có thu nhập cao trung bình từ 11,2 - 13,1 triệu/tháng.</span></p>
                <p> </p>
                <ul>
                    <li>
                        <h3><strong><strong>Tìm việc làm </strong><a href="https://careerbuilder.vn/viec-lam/ke-toan-kiem-toan-c2-vi.html" target="_blank"><strong>kế toán</strong></a></strong>
                        </h3>
                    </li>
                </ul>
                <p> </p>
                <p><span style="font-weight: 400;">Kế toán trong công ty thường có nhiều vị trí như </span><a href="https://careerbuilder.vn/viec-lam/K%E1%BA%BF-To%C3%A1n-T%E1%BB%95ng-H%E1%BB%A3p-k-vi.html" target="_blank"><span style="font-weight: 400;">kế toán tổng hợp</span></a>
                    <span
                        style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/K%E1%BA%BF-To%C3%A1n-Qu%E1%BA%A3n-Tr%E1%BB%8B-k-vi.html" target="_blank"><span style="font-weight: 400;">kế toán quản trị</span></a><span style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/K%E1%BA%BF-to%C3%A1n-thu%E1%BA%BF-k-vi.html"
                            target="_blank"><span style="font-weight: 400;">kế toán thuế</span></a><span style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/K%E1%BA%BF-to%C3%A1n-b%C3%A1n-h%C3%A0ng-k-vi.html" target="_blank"><span style="font-weight: 400;">kế toán bán hàng</span></a>
                        <span
                            style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/K%E1%BA%BF-To%C3%A1n-Ng%C3%A2n-H%C3%A0ng-k-vi.html" target="_blank"><span style="font-weight: 400;">kế toán ngân hàng</span></a><span style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/K%E1%BA%BF-to%C3%A1n-kho-k-vi.html"
                                target="_blank"><span style="font-weight: 400;">kế toán kho</span></a><span style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/K%E1%BA%BF-to%C3%A1n-tr%C6%B0%E1%BB%9Fng-k-vi.html" target="_blank"><span style="font-weight: 400;">kế toán trưởng</span></a>
                            <span
                                style="font-weight: 400;">,... Tùy theo quy mô doanh nghiệp mà các nhà tuyển dụng sẽ lựa chọn ứng viên phù hợp nhất. </span><a href="https://vietnamsalary.careerbuilder.vn/detail/Nh%C3%A2n-Vi%C3%AAn-K%E1%BA%BF-To%C3%A1n-kw" target="_blank"><span style="font-weight: 400;">Mức lương nhân viên kế toán trung bình</span></a>
                                <span
                                    style="font-weight: 400;"> từ 8,4 - 9,8 triệu/ tháng tùy theo vùng miền và tính chất công việc.</span>
                </p>
                <p> </p>
                <ul>
                    <li>
                        <h3><strong><a href="https://careerbuilder.vn/viec-lam/Nh%C3%A2n-vi%C3%AAn-ch%C4%83m-s%C3%B3c-kh%C3%A1ch-h%C3%A0ng-k-vi.html" target="_blank"><strong>Chăm sóc khách hàng</strong></a><strong> có xu hướng tìm kiếm việc làm cao</strong></strong>
                        </h3>
                    </li>
                </ul>
                <p> </p>
                <p><a href="https://careerbuilder.vn/vi/talentcommunity/9-cach-cai-thien-ky-nang-giao-tiep.35A51263.html" target="_blank"><span style="font-weight: 400;">Kỹ năng giao tiếp</span></a><span style="font-weight: 400;"> và xử lý tình huống tốt là một trong những yêu cầu cần phải có của công việc chăm sóc khách hàng. Trước khi quyết định theo đuổi nghề nghiệp lâu dài, bạn có thể tham khảo trang </span>
                    <a
                        href="https://careerbuilder.vn/careermap" target="_blank"><span style="font-weight: 400;">CareerMap</span></a><span style="font-weight: 400;"> - nơi cung cấp nhiều cơ hội xứng tầm dành cho mọi ứng viên. Trung bình mức lương của nhân viên chăm sóc khách hàng là từ 8,7 - 10,5 triệu/tháng và cao nhất có thể nhận là khoảng 25 triệu/tháng tùy thuộc theo quy mô công ty, tính chất công việc mà mức lương này có thể cao hơn.</span></p>
                <p> </p>
                <ul>
                    <li>
                        <h3><strong><strong>Việc làm </strong><a href="https://careerbuilder.vn/viec-lam/Nh%C3%A2n-Vi%C3%AAn-Telesale-k-vi.html" target="_blank"><strong>Telesales</strong></a></strong>
                        </h3>
                    </li>
                </ul>
                <p> </p>
                <p><span style="font-weight: 400;">Tuy telesales có thể thực hiện nhiệm vụ chăm sóc khách hàng nhưng thực tế hai vị trí này hoàn toàn khác nhau. Telesales cũng là cầu nối quan trọng giữa doanh nghiệp và khách hàng, đồng thời là bộ phận trực tiếp bán hàng, quảng cáo sản phẩm, giải quyết tất cả các thắc mắc từ khách hàng. KPI ngoài là số lượng cuộc gọi còn là doanh số, vì vậy công việc này cũng mang nhiều áp lực. Vì vậy, doanh nghiệp cũng chi trả mức lương xứng tầm với công việc, trung bình bạn có thể nhận từ 8,5 - 10,3 triệu/tháng, tùy theo cách bạn </span>
                    <a
                        href="https://careerbuilder.vn/vi/talentcommunity/cach-deal-luong-hieu-qua-nhat-voi-nha-tuyen-dung.35A4F63B.html" target="_blank"><span style="font-weight: 400;">deal lương với nhà tuyển dụng</span></a><span style="font-weight: 400;"> khi ứng tuyển.</span></p>
                <p> </p>
                <ul>
                    <li>
                        <h3><strong><strong>Nhân sự: tuyển dụng (recruiter), đào tạo, C&B</strong></strong>
                        </h3>
                    </li>
                </ul>
                <p> </p>
                <p><span style="font-weight: 400;">Nhiệm vụ chính của bộ phận nhân dự (</span><a href="https://careerbuilder.vn/jobs/human-resources-c22-en.html" target="_blank"><span style="font-weight: 400;">Human Resources</span></a><span style="font-weight: 400;">) là quản lý hiệu suất công việc, đảm bảo nhân lực cho doanh nghiệp, đào tạo, lương thưởng và phúc lợi,... Một nhân viên nhân sự có thể đảm nhận nhiều nhiệm vụ như </span>
                    <a
                        href="https://careerbuilder.vn/viec-lam/Recruitment-k-vi.html" target="_blank"><span style="font-weight: 400;">tuyển dụng</span></a><span style="font-weight: 400;">, </span><a href="https://careerbuilder.vn/viec-lam/C&B-k-vi.html" target="_blank"><span style="font-weight: 400;">C&B</span></a><span style="font-weight: 400;">, </span>
                        <a
                            href="https://careerbuilder.vn/viec-lam/Chuy%C3%AAn-vi%C3%AAn-%C4%91%C3%A0o-t%E1%BA%A1o-k-vi.html" target="_blank"><span style="font-weight: 400;">đào tạo</span></a><span style="font-weight: 400;">,... </span><a href="https://vietnamsalary.careerbuilder.vn/detail/Nh%C3%A2n-Vi%C3%AAn-Nh%C3%A2n-S%E1%BB%B1-kw" target="_blank"><span style="font-weight: 400;">Mức lương trung bình của nhân viên nhân sự</span></a>
                            <span
                                style="font-weight: 400;"> có thể dao động từ 9 - 10,4 triệu/tháng và mức cao nhất có thể nhận được 25 triệu/tháng.</span>
                </p>
                <p> </p>
                <ul>
                    <li>
                        <h3><strong><strong>Nhân viên văn phòng - nhu cầu tuyển dụng, tìm việc làm cao</strong></strong>
                        </h3>
                    </li>
                </ul>
                <p> </p>
                <p><a href="https://careerbuilder.vn/viec-lam/Nh%C3%A2n-Vi%C3%AAn-V%C4%83n-Ph%C3%B2ng-k-vi.html" target="_blank"><span style="font-weight: 400;">Nhân viên văn phòng</span></a><span style="font-weight: 400;"> thường đảm nhận nhiệm vụ soạn thảo văn bản, công văn, hợp đồng; quản lý hồ sơ, cơ sở vật chất và nhiều công tác khác,... Thường nhà tuyển dụng sẽ đưa ra yêu cầu riêng cho ứng viên theo từng công ty và lĩnh vực mà doanh nghiệp đang hoạt động. Theo khảo sát, </span>
                    <a
                        href="https://vietnamsalary.careerbuilder.vn/detail/Nh%C3%A2n-Vi%C3%AAn-V%C4%83n-Ph%C3%B2ng-kw" target="_blank"><span style="font-weight: 400;">mức lương trung bình của nhân viên văn phòng</span></a><span style="font-weight: 400;"> từ 8,6 - 9,9 triệu/tháng tùy theo khối lượng công việc cụ thể của bạn.</span></p>
                <p> </p>
                <ul>
                    <li>
                        <h3><strong><strong>Thông tin tuyển dụng việc làm </strong><a href="https://careerbuilder.vn/viec-lam/D%C6%B0%E1%BB%A3c-s%C4%A9-k-vi.html" target="_blank"><strong>dược sĩ</strong></a></strong>
                        </h3>
                    </li>
                </ul>
                <p> </p>
                <p><span style="font-weight: 400;">Ngày càng nhiều chuỗi nhà thuốc mang thương hiệu xuất hiện trên toàn quốc, điều này có nghĩa nhu cầu tuyển dụng dược sĩ tăng cao. Với công việc này, ngoài đảm bảo về mặt chuyên môn thì ứng viên cần có tính cẩn thận, kiên nhẫn và kỹ năng chăm sóc khách hàng tốt. </span>
                    <a
                        href="https://vietnamsalary.careerbuilder.vn/detail/D%C6%B0%E1%BB%A3c-S%C4%A9-kw" target="_blank"><span style="font-weight: 400;">Mức lương trung bình của dược sĩ</span></a><span style="font-weight: 400;"> từ 10,7 - 12,6 triệu/tháng tùy vào từng khu vực và kinh nghiệm bạn đạt được.</span></p>
                <p> </p>
                <ul>
                    <li>
                        <h3><strong><strong>Tìm công việc làm công nghệ thực phẩm tại CareerBuilder</strong></strong>
                        </h3>
                    </li>
                </ul>
                <p> </p>
                <p><a href="https://careerbuilder.vn/viec-lam/cong-nghe-thuc-pham-dinh-duong-c70-vi.html" target="_blank"><span style="font-weight: 400;">Công nghệ thực phẩm</span></a><span style="font-weight: 400;"> không còn là ngành nghề quá mới tại thị trường Việt Nam. Đây là ngành chuyên về lĩnh vực bảo quản và chế biến nông sản để đáp ứng sự lớn mạnh của ngành thực phẩm nội địa. Một số doanh nghiệp cần tuyển vị trí này là công ty, doanh nghiệp về thực phẩm, chuyên gia tư vấn dinh dưỡng, giảng viên tại các trường đại học,...</span></p>
                <p> </p>
                <ul>
                    <li>
                        <h3><strong><strong>Tìm việc làm cơ khí</strong></strong>
                        </h3>
                    </li>
                </ul>
                <p> </p>
                <p><span style="font-weight: 400;">Kỹ sư cơ khí có tay nghề cao đang khan hiếm tại các xí nghiệp và nhà máy. Ngoài ô tô thì các lao động của ngành này có thể đảm nhận công việc trong các lĩnh vực như: hàng không, kỹ thuật chế tạo, đóng tàu, năng lượng, dệt may, thực phẩm,... </span>
                    <a
                        href="https://vietnamsalary.careerbuilder.vn/detail/K%E1%BB%B9-S%C6%B0-C%C6%A1-Kh%C3%AD-kw" target="_blank"><span style="font-weight: 400;">Mức lương trung bình của kỹ sư cơ khí</span></a><span style="font-weight: 400;"> dao động từ 11,2 - 13,1 triệu/tháng.</span></p>
                <p> </p>
                <ul>
                    <li>
                        <h3><strong><strong>Tìm công việc nhân viên kinh doanh, bán hàng tại CareerBuilder</strong></strong>
                        </h3>
                    </li>
                </ul>
                <p> </p>
                <p><span style="font-weight: 400;">Để thu lại lợi nhuận bắt buộc các doanh nghiệp cần có đội ngũ bán hàng chuyên nghiệp và kỹ năng mềm cao. Nếu bạn là người năng động, đam mê lĩnh vực kinh doanh và thành thạo kỹ năng bán hàng, thuyết phục thì đây là một công việc dành cho bạn. Vì là người trực tiếp đem về doanh số cho doanh nghiệp nên mức lương của nhân viên kinh doanh hay bán hàng cũng cực “xứng tầm”.</span></p>
                <p> </p>
                <ul>
                    <li>
                        <h3><strong><a href="https://careerbuilder.vn/viec-lam/-marketing-manager-kc67-vi.html" target="_blank"><strong>Marketing manager</strong></a>
                            </strong>
                        </h3>
                    </li>
                </ul>
                <p> </p>
                <p><span style="font-weight: 400;">Lập kế hoạch phát triển thương hiệu ngắn hạn và dài hạn, lập kế hoạch xây dựng định vị sản phẩm dịch vụ, giám sát hiệu quả các hoạt động Digital marketing nói riêng và cả phòng ban Marketing nói chung, đánh giá, đo lường và báo cáo về hiệu suất của tất cả các chiến dịch… </span>
                    <a
                        href="https://vietnamsalary.careerbuilder.vn/detail/Marketing-Manager-kw" target="_blank"><span style="font-weight: 400;">Mức lương</span></a><span style="font-weight: 400;"> dao động từ 35,4 triệu VNĐ đến tận 115 triệu VNĐ tùy thuộc vào quy mô công ty và năng lực cá nhân.</span></p>
                <p> </p>
                <ul>
                    <li>
                        <h3><strong><strong> </strong><a href="https://careerbuilder.vn/viec-lam/bao-hiem-c23-vi.html" target="_blank"><strong>Chuyên viên tư vấn bảo hiểm</strong></a></strong>
                        </h3>
                    </li>
                </ul>
                <p> </p>
                <p><span style="font-weight: 400;">Nhiệm vụ chính của chuyên viên tư vấn bảo hiểm là xây dựng mối quan hệ với khách hàng. Đồng thời họ cũng hỗ trợ, hướng dẫn và chăm sóc khách hàng chu đáo, ghi nhận thông tin khách hàng tiềm năng,... Mức lương của vị trí này cực cạnh tranh, dao động từ 11,6 -  13,7 triệu/tháng.</span></p>
                <p><span style="font-weight: 400;">Nhìn chung, nhu cầu tuyển dụng việc làm lương cao đang trên đà phát triển với đa dạng hóa các ngành nghề. Bạn dễ dàng tìm được một công việc làm nhanh, phù hợp với môi trường làm việc như mong muốn ngay trên trang tìm việc làm CareerBuilder. Đồng thời, các ứng viên có thể tham khảo mức lương cụ thể của từng việc làm ngay tại </span>
                    <a
                        href="https://vietnamsalary.careerbuilder.vn/" target="_blank"><span style="font-weight: 400;">VietnamSalary.vn</span></a><span style="font-weight: 400;"> để </span><a href="https://careerbuilder.vn/vi/talentcommunity/cach-deal-luong-hieu-qua-nhat-voi-nha-tuyen-dung.35A4F63B.html" target="_blank"><span style="font-weight: 400;">deal lương hiệu quả với nhà tuyển dụng</span></a>
                        <span
                            style="font-weight: 400;">.</span>
                </p>
                <h2><strong>Một số công ty tuyển dụng việc làm tại CareerBuilder</strong></h2>
                <ul>
                    <li style="font-weight: 400;"><a href="https://careerbuilder.vn/viec-lam/Shopee-k-vi.html" target="_blank"><span style="font-weight: 400;">Shopee tuyển dụng</span></a></li>
                    <li style="font-weight: 400;"><a href="https://careerbuilder.vn/viec-lam/bach-hoa-xanh-k-vi.html" target="_blank"><span style="font-weight: 400;">Bách Hóa Xanh tuyển dụng</span></a></li>
                    <li style="font-weight: 400;"><a href="https://careerbuilder.vn/viec-lam/FPT-k-vi.html" target="_blank"><span style="font-weight: 400;">FPT tuyển dụng</span></a></li>
                    <li style="font-weight: 400;"><a href="https://careerbuilder.vn/viec-lam/Viettel-k-vi.html" target="_blank"><span style="font-weight: 400;">Viettel tuyển dụng</span></a></li>
                    <li style="font-weight: 400;"><a href="https://careerbuilder.vn/viec-lam/acb-ngan-hang-tmcp-a-chau-p35A50206-vi.html" target="_blank"><span style="font-weight: 400;">ACB tuyển dụng</span></a></li>
                </ul>
                <h2><strong>CareerBuilder - trang tìm việc làm uy tín, mở ra cơ hội nghề nghiệp cho ứng viên toàn quốc</strong></h2>
                <p><span style="font-weight: 400;">Bạn có thể tham khảo công cụ làm CV nhanh chỉ qua 3 bước qua </span><a href="https://careerbuilder.vn/cv-hay" target="_blank"><strong>CV Hay</strong></a><span style="font-weight: 400;">. Bên cạnh đó, bạn có thể tìm kiếm lộ trình phát triển nghề nghiệp dựa vào </span>
                    <a
                        href="https://careerbuilder.vn/careermap" target="_blank"><strong>CareerMap.vn</strong></a><span style="font-weight: 400;"> để định hướng rõ hơn được con đường bạn đi trong tương lai. Bên cạnh đó, </span><strong>VietnamSalary.vn</strong><span style="font-weight: 400;"> sẽ là công cụ lý tưởng để bạn đo lường mức thu nhập phù hợp với năng lực của bản thân. </span></p>
                <p><span style="font-weight: 400;">Đừng quên trang tìm việc làm CareerBuilder là cầu nối giữa bạn và doanh nghiệp, giúp bạn tìm kiếm những công việc lương cao đáng mong ước. Hãy nhanh tay truy cập vào </span><a href="https://careerbuilder.vn/tim-viec-lam.html"
                        target="_blank"><strong>CareerBuilder.vn</strong></a><span style="font-weight: 400;"> để biết thêm thông tin tuyển dụng việc làm và có cơ hội việc làm tốt nhất!</span></p>
                <h2><strong>Những câu hỏi thường gặp khi tìm việc làm</strong></h2>
                <div itemscope="" itemtype="https://schema.org/FAQPage">
                    <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 itemprop="name"><strong>Tôi đang quan tâm tin tuyển dụng việc làm tại Hồ Chí Minh, làm sao để tôi theo dõi thông tin tuyển dụng của các công ty đó không?</strong></h3>
                        <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">
                                <p>Bạn có thể nhập từ khóa trên khung tìm kiếm liên quan đến lĩnh vực, địa điểm (nên chọn thuật ngữ chung chung), kết quả tìm kiếm các công việc tương ứng sẽ hiển thị dưới dạng danh sách.</p>
                                <p>Ví dụ: Bạn đang tìm việc làm tại TPHCM, hãy nhập “TPHCM”, “Hồ Chí Minh” hoặc sử dụng bộ lọc địa điểm để tìm danh sách tuyển dụng tại địa điểm này nhé!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 itemprop="name"><strong>Tôi không có kinh nghiệm cho vị trí việc làm nhưng các yêu cầu công việc phù hợp với tôi. Vậy tôi có nên ứng tuyển không?</strong></h3>
                        <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">
                                <p>Nếu bạn chưa có nhiều kinh nghiệm hãy cố gắng tập trung vào những kỹ năng hiện có và xác định thế mạnh tiềm năng của mình trong lĩnh vực nào. Đồng thời, ứng viên nên chuẩn bị CV thật ấn tượng với các thành tích mình đã
                                    đạt được. Tất cả điều này giúp bạn có thể tự tin đối thoại và tạo niềm tin với nhà tuyển dụng.</p>
                            </div>
                        </div>
                    </div>
                    <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 itemprop="name"><strong>Khi đi phỏng vấn, nhà tuyển dụng có yêu cầu đặt cọc tiền trước khi nhận việc, tôi có nên thực hiện không?</strong></h3>
                        <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">
                                <p>Theo Điều 17 Bộ luật Lao động 2019, những hành vi yêu cầu người sử dụng lao động không được làm khi giao kết, thực hiện hợp đồng lao động bao gồm:</p>
                                <p>- Giữ bản chính giấy tờ tùy thân, văn bằng, chứng chỉ của người lao động.</p>
                                <p>- Yêu cầu người lao động phải thực hiện biện pháp bảo đảm bằng tiền hoặc tài sản khác cho việc thực hiện hợp đồng lao động.</p>
                                <p>- Buộc người lao động thực hiện hợp đồng lao động để trả nợ cho người sử dụng lao động.</p>
                                <p>Vì vậy, nếu gặp trường hợp này bạn không nên đặt cọc tiền dưới bất kỳ hình thức nào để nhận việc, bởi đây là hành vi chưa được pháp luật công nhận.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
     -->


        <div class="back-drop"></div>
    </main>
   
    <style>
        /*common.css*/

        .reset-bullet {
            line-height: 1.5 !important;
            font-size: 16px !important;
            word-wrap: break-word
        }

        .reset-bullet ul {
            list-style: inherit !important
        }

        .reset-bullet ul li {
            list-style: disc
        }

        .reset-bullet ul li,
        .reset-bullet ol li {
            padding-bottom: 5px !important
        }

        .reset-bullet ul,
        .reset-bullet ol {
            padding-left: 30px !important
        }

        .mdi-history:before {
            content: "\f02da";
        }

        .job-item .bottom-right-icon ul li a i,
        .job-item .bottom-right-icon-new-2 ul li a i {
            margin-right: 8px;
        }

        #popup_overlay {
            background: rgb(30, 30, 30) !important;
            opacity: 0.9 !important
        }

        #popup_container.custom-jalert {
            border: 0;
            font-size: 14.5px;
            font-family: 'Barlow';
            color: #5d677a;
            width: 480px !important;
            max-width: 100% !important;
        }

        #popup_container.custom-jalert #popup_title {
            min-height: 48px;
            background: #eee;
            text-align: center;
            font-family: 'Barlow';
            font-size: 16px;
            color: #5d677a;
            text-transform: uppercase;
            border: 0;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center
        }

        #popup_container.custom-jalert #popup_content {
            padding: 20px
        }

        #popup_container.custom-jalert #popup_message {
            background: url("https://static.careerbuilder.vn/themes/careerbuilder/img/icon-confirm.png") top center no-repeat;
            padding-top: 120px
        }

        #popup_container.custom-jalert #popup_panel {
            margin-top: 30px
        }

        #popup_container.custom-jalert #popup_ok,
        #popup_container.custom-jalert #popup_cancel {
            padding: 5px 10px;
            border-radius: 5px;
            -webkit-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            border: 0;
            font-size: 14.5px;
            text-decoration: none;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        #popup_container.custom-jalert #popup_ok {
            background: -webkit-gradient(linear, left top, right top, from(#2f4ba0), color-stop(#2f4ba0), to(#2f4ba0));
            background: -o-linear-gradient(left, #2f4ba0, #2f4ba0, #2f4ba0);
            background: linear-gradient(to right, #2f4ba0, #1e9bd3, #2f4ba0);
            background-size: 200% 100%;
            color: #fff
        }

        #popup_container.custom-jalert #popup_ok:hover {
            background-position: 100% 0
        }

        #popup_container.custom-jalert #popup_cancel {
            color: #5d677a
        }

        .page-heading-tool {
            padding: 10px 0
        }

        .page-heading-tool .change-display {
            width: auto;
            padding: 0;
            margin-right: -13px
        }

        .page-heading-tool .change-display ul li+li {
            padding-left: 10px
        }

        .search-result,
        .search-result-list {
            padding-top: 10px
        }

        .search-result .side-wrapper {
            top: 150px
        }

        .job-item .figure .image {
            background-color: #fff
        }

        .job-item .figure .caption .salary {
            color: #008563 !important;
        }

        .job-item .figure .caption .welfare li {
            font-size: 13px
        }

        .job-item .bottom-right-icon {
            bottom: 33px
        }

        .job-item .bottom-right-icon ul {
            float: left;
            width: 100%;
            display: block
        }

        .search-result-list .jobs-side-list {
            padding: 0
        }

        .search-result-list .job-item .figure {
            padding: 15px
        }

        .search-result-list .job-item:first-child .figure {
            border-top: 0
        }

        footer {
            clear: both
        }

        .search-result-list .job-item .figure .caption,
        .job-item .bottom-right-icon {
            font-size: 15px
        }

        .search-result-list .job-item .figure .title {
            margin-top: 5px
        }

        .search-result-list .job-item .figure .title span.new {
            font-size: 12px;
            color: red;
            text-transform: uppercase
        }

        .search-result-list .job-item .figure .caption .welfare {
            margin-top: 10px
        }

        .job-item .bottom-right-icon ul li a {
            display: block
        }

        .job-item .bottom-right-icon ul li a span {
            margin-right: 0;
            margin-left: 8px
        }

        .job-item .bottom-right-icon ul li+li {
            display: block;
            margin-left: 0
        }

        .job-item .bottom-right-icon ul li+li:before {
            content: "";
            margin-right: 0
        }

        .chosen-container .search-choice span {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            display: block
        }

        .job-detail-content .job-detail-bottom {
            clear: both
        }

        #popup_login_form input.error {
            border: 1px solid red
        }

        #popup_login_form input.error::placeholder {
            color: red
        }

        #popup_login_form input.error:focus,
        #popup_login_form input.error:active {
            outline: none;
        }

        .main-job-alert .information {
            height: 100%
        }

        .dtpicker-twoButtons a:not([href]):not([tabindex]),
        .dtpicker-twoButtons a:not([href]):not([tabindex]):hover,
        .dtpicker-twoButtons a:not([href]):not([tabindex]):focus {
            color: #ffffff;
        }

        .job-detail-bottom-banner img,
        .job-bottom-banner img,
        .banner-ad img {
            height: auto !important
        }

        .search-result-list .job-item .figure .image a {
            display: flex;
            width: 100%;
            height: 100%;
            align-items: center;
            justify-content: center
        }

        .job-detail-content .detail-box .map p a {
            display: inline-block;
        }

        .maps-modal .tabs-toggle .item {
            color: #5d677a;
            text-decoration: none;
        }

        .main-box.active {
            background-color: #FFFFFF;
            -webkit-transition: background-color 1000ms linear;
            -moz-transition: background-color 1000ms linear;
            -o-transition: background-color 1000ms linear;
            -ms-transition: background-color 1000ms linear;
            transition: background-color 1000ms linear
        }

        .swiper-nav.swiper-button-disabled,
        .swiper-nav.swiper-button-disabled:hover,
        .swiper-nav.swiper-button-disabled:focus {
            background: none !important;
            border: 0 !important;
            cursor: auto !important;
            outline: none
        }

        .swiper-nav.swiper-button-disabled span,
        .swiper-nav.swiper-button-disabled:hover span {
            display: none !important;
            border: 0 !important;
            cursor: auto !important
        }

        .swiper-nav.swiper-button-disabled span,
        .swiper-nav.swiper-button-disabled:hover span {
            display: none !important;
            border: 0 !important;
            cursor: auto !important
        }

        .searchable-cv-widget a {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .jobalert-cv-widget a {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .switch-status {
            display: -ms-flexbox;
            display: flex;
            background-color: #fff;
            border: 4px solid #fff;
            border-radius: 26px;
            margin-bottom: 20px
        }

        .switch-status a {
            display: inline-block;
            padding: 10px 0;
            color: #5d677a;
            text-align: center;
            border-radius: 26px;
            font-size: 14.5px;
            font-weight: bold
        }

        .switch-status a:hover {
            text-decoration: none
        }

        .switch-status .inactive:hover,
        .switch-status .inactive.focus {
            background-color: #f5f6f7;
            color: #000
        }

        .switch-status .passive:hover,
        .switch-status .passive.focus {
            background-color: #2f4ba0;
            color: #fff
        }

        .switch-status .actives:hover,
        .switch-status .actives.focus {
            background-color: #00b2a3;
            color: #fff
        }

        @media (min-width:768px) {
            .search-result-list .job-item .figure .image {
                height: 135px
            }
            .search-result-list .job-item .figure .figcaption {
                max-width: calc(100% - 310px)
            }
            .job-item .bottom-right-icon ul li {
                float: left;
                width: 100%;
                display: block;
                text-align: right
            }
        }

        @media (max-width:768px) {
            .container {
                padding: 0 15px;
            }
            .job-item .bottom-right-icon ul {
                float: none;
                display: flex;
                justify-content: center;
            }
        }

        .non-member-form .save-and-allow {
            margin-bottom: 30px
        }

        .non-member-form .form-captcha,
        .member-form .form-captcha {
            float: left;
            width: 100%
        }

        .non-member-form .form-submit,
        .member-form .form-submit {
            clear: both;
            padding-top: 0 !important
        }

        .cb-box-find .reset-form,
        .cb-box-find .main-box .toggle-search {
            float: left;
            width: 50%
        }

        .cb-box-find .reset-form {
            font-size: 14.5px;
            margin-top: 10px
        }

        .cb-box-find .reset-form a {
            color: #5d677a;
        }

        .cb-box-find .reset-form i.fa {
            display: inline-block;
            padding-right: 5px
        }

        .cb-box-find .main-box .find-jobs {
            clear: both
        }

        #tooltip-copy {
            display: none;
            margin-left: 150px;
            padding: 5px 10px;
            background-color: #2aba2a;
            border-radius: 4px;
            color: #fff;
            top: 110px;
            position: absolute;
            z-index: 99999
        }

        .search-result-list-page .switch-group .toolip {
            z-index: 21
        }

        .search-result-list .job-bottom-banner {
            margin: 0
        }

        .search-result-list .job-bottom-banner img,
        .search-result-list .job-bottom-banner embed,
        .search-result-list .job-bottom-banner iframe {
            margin-bottom: 30px
        }

        .text-industryInfo {
            display: -ms-flexbox;
            display: flex;
            padding: 40px 0;
            background-color: rgba(245, 245, 245, .4);
        }

        .text-industryInfo h2 {
            font-size: 18px;
            font-weight: normal;
            padding-bottom: 10px;
        }

        .text-industryInfo p {
            padding-bottom: 10px
        }

        .text-industryInfo ul {
            list-style: inherit !important
        }

        .text-industryInfo ul li {
            list-style: disc
        }

        .text-industryInfo ul li,
        .text-industryInfo ol li {
            padding-bottom: 5px !important;
            padding-left: 10px !important
        }

        .text-industryInfo ul,
        .text-industryInfo ol {
            padding-left: 40px !important
        }

        .text-industryInfo a {
            color: #2f4ba0 !important
        }

        .text-industryInfo,
        .text-industryInfo h2,
        .text-industryInfo span,
        .text-industryInfo p,
        .text-industryInfo ul li,
        .text-industryInfo a {
            font-family: 'Barlow' !important
        }

        .pointer {
            cursor: pointer;
        }

        .job-found .job-found-amout {
            max-width: 60%;
        }

        .job-found .job-found-amout p,
        .job-found .job-found-amout h1 {
            max-width: 450px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .autocomplete-suggestions {
            scrollbar-width: thin;
            scrollbar-color: #00b2a3 #cdcdcd
        }

        .autocomplete-suggestions::-webkit-scrollbar {
            width: 6px !important;
        }

        .autocomplete-suggestions::-webkit-scrollbar-track {
            background: #eaeaea !important;
        }

        .autocomplete-suggestions::-webkit-scrollbar-thumb {
            background: #00b2a3 !important;
        }

        .autocomplete-suggestions::-webkit-scrollbar-thumb:hover {
            background: #00b2a3 !important;
        }
    </style>
   

   
</body>

</html>
<!--End New Layout CB -->