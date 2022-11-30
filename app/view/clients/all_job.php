<link rel="stylesheet" href="<?= _WEB_ROOT."/app/public/assets/clients/css/all_job.css" ?>">
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/global/css/multi-select-dropdown.css" ?>">
<script defer src="<?= _WEB_ROOT . "/app/public/assets/employer/js/all_job.js"?>"></script>

<main>
   <section class="page-heading-tool">
      <div class="container">
         <div class="tool-wrapper">
            <div class="close-input-filter"><em class="lnr lnr-cross"></em></div>
            <div class="search-job">
               <form>
                  <div class="form-wrap">
                     <div class="form-group form-keyword">
                        <input type="search" class="keyword" name="keyword" id="keyword" placeholder="Chức danh, Kỹ năng, Tên công ty">
                        <div class="cleartext"><em class="mdi mdi-close-circle"></em></div>
                     </div>
                     <div class="form-group form-select-chosen">
                        <select id="industry"   name="industry" class="chosen-select-max-three" data-placeholder="Tất cả ngành nghề" >
                           <option value="">Chọn ngành nghề</option>
                           <option value="an-ninh-bao-ve_51">An Ninh / Bảo Vệ</option>
                           <option value="an-toan-lao-dong_58">An toàn lao động</option>
                           <option value="ban-hang-kinh-doanh_31">Bán hàng / Kinh doanh</option>
                           <option value="ban-le-ban-si_30">Bán lẻ / Bán sỉ</option>
                           <option value="bao-hiem_23">Bảo hiểm</option>
                           <option value="bat-dong-san_28">Bất động sản</option>
                           <option value="bien-phien-dich_38">Biên phiên dịch</option>
                           <option value="buu-chinh-vien-thong_32">Bưu chính viễn thông</option>
                           <option value="chan-nuoi-thu-y_52">Chăn nuôi / Thú y</option>
                           <option value="chung-khoan_46">Chứng khoán</option>
                           <option value="cntt-phan-cung-mang_63">CNTT - Phần cứng / Mạng</option>
                           <option value="cntt-phan-mem_1">CNTT - Phần mềm</option>
                           <option value="cong-nghe-sinh-hoc_69">Công nghệ sinh học</option>
                           <option value="cong-nghe-thuc-pham-dinh-duong_70">Công nghệ thực phẩm / Dinh dưỡng</option>
                           <option value="co-khi-o-to-tu-dong-hoa_14">Cơ khí / Ô tô / Tự động hóa</option>
                           <option value="dau-khi_26">Dầu khí</option>
                           <option value="det-may-da-giay-thoi-trang_39">Dệt may / Da giày / Thời trang</option>
                           <option value="dich-vu-khach-hang_12">Dịch vụ khách hàng</option>
                           <option value="du-lich_34">Du lịch</option>
                           <option value="duoc-pham_7">Dược phẩm</option>
                           <option value="dien-dien-tu-dien-lanh_48">Điện / Điện tử / Điện lạnh</option>
                           <option value="do-go_35">Đồ gỗ</option>
                           <option value="giai-tri_15">Giải trí</option>
                           <option value="giao-duc-dao-tao_13">Giáo dục / Đào tạo</option>
                           <option value="hang-gia-dung-cham-soc-ca-nhan_10">Hàng gia dụng / Chăm sóc cá nhân</option>
                           <option value="hang-hai_61">Hàng hải</option>
                           <option value="hang-khong_60">Hàng không</option>
                           <option value="hanh-chinh-thu-ky_3">Hành chính / Thư ký</option>
                           <option value="hoa-hoc_41">Hóa học</option>
                           <option value="in-an-xuat-ban_64">In ấn / Xuất bản</option>
                           <option value="ke-toan-kiem-toan_2">Kế toán / Kiểm toán</option>
                           <option value="khoang-san_65">Khoáng sản</option>
                           <option value="kien-truc_6">Kiến trúc</option>
                           <option value="lao-dong-pho-thong_44">Lao động phổ thông</option>
                           <option value="lam-nghiep_50">Lâm Nghiệp</option>
                           <option value="luat-phap-ly_24">Luật / Pháp lý</option>
                           <option value="moi-truong_16">Môi trường</option>
                           <option value="moi-tot-nghiep-thuc-tap_45">Mới tốt nghiệp / Thực tập</option>
                           <option value="my-thuat-nghe-thuat-thiet-ke_11">Mỹ thuật / Nghệ thuật / Thiết kế</option>
                           <option value="ngan-hang_19">Ngân hàng</option>
                           <option value="nha-hang-khach-san_29">Nhà hàng / Khách sạn</option>
                           <option value="nhan-su_22">Nhân sự</option>
                           <option value="noi-ngoai-that_47">Nội ngoại thất</option>
                           <option value="nong-nghiep_5">Nông nghiệp</option>
                           <option value="phi-chinh-phu-phi-loi-nhuan_20">Phi chính phủ / Phi lợi nhuận</option>
                           <option value="quan-ly-chat-luong-qa-qc_42">Quản lý chất lượng (QA/QC)</option>
                           <option value="quan-ly-dieu-hanh_17">Quản lý điều hành</option>
                           <option value="quang-cao-doi-ngoai-truyen-thong_67">Quảng cáo / Đối ngoại / Truyền Thông</option>
                           <option value="san-xuat-van-hanh-san-xuat_25">Sản xuất / Vận hành sản xuất</option>
                           <option value="tai-chinh-dau-tu_59">Tài chính / Đầu tư</option>
                           <option value="thong-ke_36">Thống kê</option>
                           <option value="thu-mua-vat-tu_43">Thu mua / Vật tư</option>
                           <option value="thuy-loi_53">Thủy lợi</option>
                           <option value="thuy-san-hai-san_49">Thủy sản / Hải sản</option>
                           <option value="thu-vien_57">Thư viện</option>
                           <option value="thuc-pham-do-uong_21">Thực phẩm &amp; Đồ uống</option>
                           <option value="tiep-thi-marketing_4">Tiếp thị / Marketing</option>
                           <option value="tiep-thi-truc-tuyen_37">Tiếp thị trực tuyến</option>
                           <option value="to-chuc-su-kien_68">Tổ chức sự kiện</option>
                           <option value="trac-dia-dia-chat_54">Trắc địa / Địa Chất</option>
                           <option value="truyen-hinh-bao-chi-bien-tap_66">Truyền hình / Báo chí / Biên tập</option>
                           <option value="tu-van_9">Tư vấn</option>
                           <option value="van-chuyen-giao-nhan-kho-van_33">Vận chuyển / Giao nhận / Kho vận</option>
                           <option value="xay-dung_8">Xây dựng</option>
                           <option value="xuat-nhap-khau_18">Xuất nhập khẩu</option>
                           <option value="y-te-cham-soc-suc-khoe_56">Y tế / Chăm sóc sức khỏe</option>
                           <option value="bao-tri-sua-chua_71">Bảo trì / Sửa chữa</option>
                           <option value="nganh-khac_27">Ngành khác</option>
                        </select>
                     </div>
                     <div class="form-group form-select-chosen">
                        <select id="location" name="location" class="chosen-select-max-three" data-placeholder="Tất cả địa điểm" >
                           <option value="">Chọn địa điểm</option>
                           <option value="ha-noi_4">Hà Nội</option>
                           <option value="ho-chi-minh_8">Hồ Chí Minh</option>
                           <option value="an-giang_76">An Giang</option>
                           <option value="ba-ria-vung-tau_64">Bà Rịa - Vũng Tàu</option>
                           <option value="bac-lieu_781">Bạc Liêu</option>
                           <option value="bac-can_281">Bắc Cạn</option>
                           <option value="bac-giang_240">Bắc Giang</option>
                           <option value="bac-ninh_241">Bắc Ninh</option>
                           <option value="ben-tre_75">Bến Tre</option>
                           <option value="binh-duong_650">Bình Dương</option>
                           <option value="binh-dinh_56">Bình Định</option>
                           <option value="binh-phuoc_651">Bình Phước</option>
                           <option value="binh-thuan_62">Bình Thuận</option>
                           <option value="ca-mau_78">Cà Mau</option>
                           <option value="cao-bang_26">Cao Bằng</option>
                           <option value="can-tho_71">Cần Thơ</option>
                           <option value="dak-lak_50">Dak Lak</option>
                           <option value="dak-nong_1042">Dak Nông</option>
                           <option value="da-nang_511">Đà Nẵng</option>
                           <option value="dien-bien_900">Điện Biên</option>
                           <option value="dong-bang-song-cuu-long_1064">Đồng Bằng Sông Cửu Long</option>
                           <option value="dong-nai_61">Đồng Nai</option>
                           <option value="dong-thap_67">Đồng Tháp</option>
                           <option value="gia-lai_59">Gia Lai</option>
                           <option value="ha-giang_19">Hà Giang</option>
                           <option value="ha-nam_351">Hà Nam</option>
                           <option value="ha-tinh_39">Hà Tĩnh</option>
                           <option value="hai-duong_320">Hải Dương</option>
                           <option value="hai-phong_31">Hải Phòng</option>
                           <option value="hau-giang_780">Hậu Giang</option>
                           <option value="hoa-binh_18">Hòa Bình</option>
                           <option value="hung-yen_321">Hưng Yên</option>
                           <option value="khac_901">Khác</option>
                           <option value="khanh-hoa_58">Khánh Hòa</option>
                           <option value="kien-giang_77">Kiên Giang</option>
                           <option value="kon-tum_60">Kon Tum</option>
                           <option value="kv-bac-trung-bo_1071">KV Bắc Trung Bộ</option>
                           <option value="kv-dong-nam-bo_1069">KV Đông Nam Bộ</option>
                           <option value="kv-nam-trung-bo_1070">KV Nam Trung Bộ</option>
                           <option value="kv-tay-nguyen_1072">KV Tây Nguyên</option>
                           <option value="lai-chau_23">Lai Châu</option>
                           <option value="lang-son_25">Lạng Sơn</option>
                           <option value="lao-cai_20">Lào Cai</option>
                           <option value="lam-dong_63">Lâm Đồng</option>
                           <option value="long-an_72">Long An</option>
                           <option value="nam-dinh_350">Nam Định</option>
                           <option value="nghe-an_38">Nghệ An</option>
                           <option value="ninh-binh_30">Ninh Bình</option>
                           <option value="ninh-thuan_68">Ninh Thuận</option>
                           <option value="phu-tho_210">Phú Thọ</option>
                           <option value="phu-yen_57">Phú Yên</option>
                           <option value="quang-binh_52">Quảng Bình</option>
                           <option value="quang-nam_510">Quảng Nam</option>
                           <option value="quang-ngai_55">Quảng Ngãi</option>
                           <option value="quang-ninh_33">Quảng Ninh</option>
                           <option value="quang-tri_53">Quảng Trị</option>
                           <option value="soc-trang_79">Sóc Trăng</option>
                           <option value="son-la_22">Sơn La</option>
                           <option value="tay-ninh_66">Tây Ninh</option>
                           <option value="thai-binh_36">Thái Bình</option>
                           <option value="thai-nguyen_280">Thái Nguyên</option>
                           <option value="thanh-hoa_37">Thanh Hóa</option>
                           <option value="thua-thien-hue_54">Thừa Thiên- Huế</option>
                           <option value="tien-giang_73">Tiền Giang</option>
                           <option value="toan-quoc_1065">Toàn quốc</option>
                           <option value="tra-vinh_74">Trà Vinh</option>
                           <option value="tuyen-quang_27">Tuyên Quang</option>
                           <option value="vinh-long_70">Vĩnh Long</option>
                           <option value="vinh-phuc_211">Vĩnh Phúc</option>
                           <option value="yen-bai_29">Yên Bái</option>
                           <option value="banteay-meanchey_1098">Banteay Meanchey</option>
                           <option value="battambang_1096">Battambang</option>
                           <option value="kampong-chhnang_1092">Kampong Chhnang</option>
                           <option value="kampong-speu_1090">Kampong Speu</option>
                           <option value="kampot_1085">Kampot</option>
                           <option value="kandal_1088">Kandal</option>
                           <option value="kep_1084">Kep</option>
                           <option value="koh-kong_1091">Koh Kong</option>
                           <option value="kratie_1093">Kratie</option>
                           <option value="otdar-meanchey_1104">Otdar Meanchey</option>
                           <option value="pailin_1103">Pailin</option>
                           <option value="phnompenh_1041">Phnompenh</option>
                           <option value="preah-vihear_1099">Preah Vihear</option>
                           <option value="prey-veng_1089">Prey Veng</option>
                           <option value="siem-reap_1097">Siem Reap</option>
                           <option value="stung-treng_1100">Stung Treng</option>
                           <option value="svay-rieng_1087">Svay Rieng</option>
                           <option value="tbong-khmum_1082">Tbong Khmum</option>
                           <option value="chicago_1034">Chicago</option>
                           <option value="florida_1077">Florida</option>
                           <option value="miami_1033">Miami</option>
                           <option value="san-diego_1039">San Diego</option>
                           <option value="hong-kong_1079">Hồng Kông</option>
                           <option value="khac_1318">Khác</option>
                           <option value="attapeu_1106">Attapeu</option>
                           <option value="bokeo_1107">Bokeo</option>
                           <option value="champasak_1109">Champasak</option>
                           <option value="houaphanh_1110">Houaphanh</option>
                           <option value="khammouane_1111">Khammouane</option>
                           <option value="luang-prabang_1113">Luang Prabang</option>
                           <option value="phongsaly_1115">Phongsaly</option>
                           <option value="vientiane_1059">Vientiane</option>
                           <option value="xiangkhouang_1120">Xiangkhouang</option>
                           <option value="kuala-lumpur_1019">Kuala Lumpur</option>
                           <option value="malaysia_1078">Malaysia</option>
                           <option value="yangon_1320">Yangon</option>
                           <option value="hokkaido_1043">Hokkaido</option>
                           <option value="tokyo_1001">Tokyo</option>
                           <option value="yokohama_1002">Yokohama</option>
                           <option value="qatar_1055">Qatar</option>
                           <option value="quoc-te_1073">Quốc tế</option>
                           <option value="singapore_1040">Singapore</option>
                           <option value="kharkiv_1053">Kharkiv</option>
                        </select>
                     </div>
                     <div class="form-group form-submit">
                        <button class="btn-gradient" onClick="return validataSearchHomePage('vi');">
                           <p>Tìm Ngay</p>
                           <span class="mdi mdi-magnify"></span>
                        </button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="box-right-action">
               <div class="mobile-filter toollips">
                  <span class="mdi mdi-filter-outline">
                  </span>
                  <p>Lọc</p>
               </div>
               <div class="mobile-filter-2"><span class="mdi mdi-filter-outline"></span></div>
               <div class="switch-group toollips switch-group-sp">
                  <div class="form-group">
                     <label for="work-home-fli">Work from home
                     <input id="work-home-fli" type="checkbox" onclick="validFilterdataSearch('vi', 'homework', this);">
                     <span class="slider"></span> </label>
                  </div>
               </div>
               <input type="hidden" name="url_page_search" id="url_page_search" value="" />
               <div class="change-display">
                  <ul>
                     <li class="list-view-mode">
                        <a href="javascript:void(0);" class="active">
                        <em class="mdi mdi-view-list"></em></a>
                        <div class="toolip">
                           <p>Chuyển qua chế độ xem danh sách</p>
                        </div>
                     </li>
                     <li class="quick-view-mode">
                        <a href="javascript:void(0);">
                        <em class="mdi mdi-view-quilt"></em></a>
                        <div class="toolip">
                           <p>Chuyển qua chế độ xem nhanh</p>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="filters-wrapper">
         <div class="inner">
            <div class="container">
               <div class="filter-extend">
                  <div class="list-filter-extend">
                     <div class="item show-mb">
                        <div class="form-group form-select-chosen">
                           <select id="industry_mb" name="industry" class="chosen-select-max-three" data-placeholder="Tất cả ngành nghề" multiple>
                              <option value="">Chọn ngành nghề</option>
                              <option value="an-ninh-bao-ve_51">
                                 An Ninh / Bảo Vệ
                              </option>
                              <option value="an-toan-lao-dong_58">
                                 An toàn lao động
                              </option>
                              <option value="ban-hang-kinh-doanh_31">
                                 Bán hàng / Kinh doanh
                              </option>
                              <option value="ban-le-ban-si_30">
                                 Bán lẻ / Bán sỉ
                              </option>
                              <option value="bao-hiem_23">
                                 Bảo hiểm
                              </option>
                              <option value="bat-dong-san_28">
                                 Bất động sản
                              </option>
                              <option value="bien-phien-dich_38">
                                 Biên phiên dịch
                              </option>
                              <option value="buu-chinh-vien-thong_32">
                                 Bưu chính viễn thông
                              </option>
                              <option value="chan-nuoi-thu-y_52">
                                 Chăn nuôi / Thú y
                              </option>
                              <option value="chung-khoan_46">
                                 Chứng khoán
                              </option>
                              <option value="cntt-phan-cung-mang_63">
                                 CNTT - Phần cứng / Mạng
                              </option>
                              <option value="cntt-phan-mem_1">
                                 CNTT - Phần mềm
                              </option>
                              <option value="cong-nghe-sinh-hoc_69">
                                 Công nghệ sinh học
                              </option>
                              <option value="cong-nghe-thuc-pham-dinh-duong_70">
                                 Công nghệ thực phẩm / Dinh dưỡng
                              </option>
                              <option value="co-khi-o-to-tu-dong-hoa_14">
                                 Cơ khí / Ô tô / Tự động hóa
                              </option>
                              <option value="dau-khi_26">
                                 Dầu khí
                              </option>
                              <option value="det-may-da-giay-thoi-trang_39">
                                 Dệt may / Da giày / Thời trang
                              </option>
                              <option value="dich-vu-khach-hang_12">
                                 Dịch vụ khách hàng
                              </option>
                              <option value="du-lich_34">
                                 Du lịch
                              </option>
                              <option value="duoc-pham_7">
                                 Dược phẩm
                              </option>
                              <option value="dien-dien-tu-dien-lanh_48">
                                 Điện / Điện tử / Điện lạnh
                              </option>
                              <option value="do-go_35">
                                 Đồ gỗ
                              </option>
                              <option value="giai-tri_15">
                                 Giải trí
                              </option>
                              <option value="giao-duc-dao-tao_13">
                                 Giáo dục / Đào tạo
                              </option>
                              <option value="hang-gia-dung-cham-soc-ca-nhan_10">
                                 Hàng gia dụng / Chăm sóc cá nhân
                              </option>
                              <option value="hang-hai_61">
                                 Hàng hải
                              </option>
                              <option value="hang-khong_60">
                                 Hàng không
                              </option>
                              <option value="hanh-chinh-thu-ky_3">
                                 Hành chính / Thư ký
                              </option>
                              <option value="hoa-hoc_41">
                                 Hóa học
                              </option>
                              <option value="in-an-xuat-ban_64">
                                 In ấn / Xuất bản
                              </option>
                              <option value="ke-toan-kiem-toan_2">
                                 Kế toán / Kiểm toán
                              </option>
                              <option value="khoang-san_65">
                                 Khoáng sản
                              </option>
                              <option value="kien-truc_6">
                                 Kiến trúc
                              </option>
                              <option value="lao-dong-pho-thong_44">
                                 Lao động phổ thông
                              </option>
                              <option value="lam-nghiep_50">
                                 Lâm Nghiệp
                              </option>
                              <option value="luat-phap-ly_24">
                                 Luật / Pháp lý
                              </option>
                              <option value="moi-truong_16">
                                 Môi trường
                              </option>
                              <option value="moi-tot-nghiep-thuc-tap_45">
                                 Mới tốt nghiệp / Thực tập
                              </option>
                              <option value="my-thuat-nghe-thuat-thiet-ke_11">
                                 Mỹ thuật / Nghệ thuật / Thiết kế
                              </option>
                              <option value="ngan-hang_19">
                                 Ngân hàng
                              </option>
                              <option value="nha-hang-khach-san_29">
                                 Nhà hàng / Khách sạn
                              </option>
                              <option value="nhan-su_22">
                                 Nhân sự
                              </option>
                              <option value="noi-ngoai-that_47">
                                 Nội ngoại thất
                              </option>
                              <option value="nong-nghiep_5">
                                 Nông nghiệp
                              </option>
                              <option value="phi-chinh-phu-phi-loi-nhuan_20">
                                 Phi chính phủ / Phi lợi nhuận
                              </option>
                              <option value="quan-ly-chat-luong-qa-qc_42">
                                 Quản lý chất lượng (QA/QC)
                              </option>
                              <option value="quan-ly-dieu-hanh_17">
                                 Quản lý điều hành
                              </option>
                              <option value="quang-cao-doi-ngoai-truyen-thong_67">
                                 Quảng cáo / Đối ngoại / Truyền Thông
                              </option>
                              <option value="san-xuat-van-hanh-san-xuat_25">
                                 Sản xuất / Vận hành sản xuất
                              </option>
                              <option value="tai-chinh-dau-tu_59">
                                 Tài chính / Đầu tư
                              </option>
                              <option value="thong-ke_36">
                                 Thống kê
                              </option>
                              <option value="thu-mua-vat-tu_43">
                                 Thu mua / Vật tư
                              </option>
                              <option value="thuy-loi_53">
                                 Thủy lợi
                              </option>
                              <option value="thuy-san-hai-san_49">
                                 Thủy sản / Hải sản
                              </option>
                              <option value="thu-vien_57">
                                 Thư viện
                              </option>
                              <option value="thuc-pham-do-uong_21">
                                 Thực phẩm &amp; Đồ uống
                              </option>
                              <option value="tiep-thi-marketing_4">
                                 Tiếp thị / Marketing
                              </option>
                              <option value="tiep-thi-truc-tuyen_37">
                                 Tiếp thị trực tuyến
                              </option>
                              <option value="to-chuc-su-kien_68">
                                 Tổ chức sự kiện
                              </option>
                              <option value="trac-dia-dia-chat_54">
                                 Trắc địa / Địa Chất
                              </option>
                              <option value="truyen-hinh-bao-chi-bien-tap_66">
                                 Truyền hình / Báo chí / Biên tập
                              </option>
                              <option value="tu-van_9">
                                 Tư vấn
                              </option>
                              <option value="van-chuyen-giao-nhan-kho-van_33">
                                 Vận chuyển / Giao nhận / Kho vận
                              </option>
                              <option value="xay-dung_8">
                                 Xây dựng
                              </option>
                              <option value="xuat-nhap-khau_18">
                                 Xuất nhập khẩu
                              </option>
                              <option value="y-te-cham-soc-suc-khoe_56">
                                 Y tế / Chăm sóc sức khỏe
                              </option>
                              <option value="bao-tri-sua-chua_71">
                                 Bảo trì / Sửa chữa
                              </option>
                              <option value="nganh-khac_27">
                                 Ngành khác
                              </option>
                           </select>
                        </div>
                     </div>
                     <div class="item show-mb">
                        <div class="form-group form-select-chosen">
                           <select id="location_mb" name="location" class="chosen-select-max-three" data-placeholder="Tất cả địa điểm" multiple>
                              <option value="">Chọn địa điểm</option>
                              <option value="ha-noi_4">
                                 Hà Nội
                              </option>
                              <option value="ho-chi-minh_8">
                                 Hồ Chí Minh
                              </option>
                              <option value="an-giang_76">
                                 An Giang
                              </option>
                              <option value="ba-ria-vung-tau_64">
                                 Bà Rịa - Vũng Tàu
                              </option>
                              <option value="bac-lieu_781">
                                 Bạc Liêu
                              </option>
                              <option value="bac-can_281">
                                 Bắc Cạn
                              </option>
                              <option value="bac-giang_240">
                                 Bắc Giang
                              </option>
                              <option value="bac-ninh_241">
                                 Bắc Ninh
                              </option>
                              <option value="ben-tre_75">
                                 Bến Tre
                              </option>
                              <option value="binh-duong_650">
                                 Bình Dương
                              </option>
                              <option value="binh-dinh_56">
                                 Bình Định
                              </option>
                              <option value="binh-phuoc_651">
                                 Bình Phước
                              </option>
                              <option value="binh-thuan_62">
                                 Bình Thuận
                              </option>
                              <option value="ca-mau_78">
                                 Cà Mau
                              </option>
                              <option value="cao-bang_26">
                                 Cao Bằng
                              </option>
                              <option value="can-tho_71">
                                 Cần Thơ
                              </option>
                              <option value="dak-lak_50">
                                 Dak Lak
                              </option>
                              <option value="dak-nong_1042">
                                 Dak Nông
                              </option>
                              <option value="da-nang_511">
                                 Đà Nẵng
                              </option>
                              <option value="dien-bien_900">
                                 Điện Biên
                              </option>
                              <option value="dong-bang-song-cuu-long_1064">
                                 Đồng Bằng Sông Cửu Long
                              </option>
                              <option value="dong-nai_61">
                                 Đồng Nai
                              </option>
                              <option value="dong-thap_67">
                                 Đồng Tháp
                              </option>
                              <option value="gia-lai_59">
                                 Gia Lai
                              </option>
                              <option value="ha-giang_19">
                                 Hà Giang
                              </option>
                              <option value="ha-nam_351">
                                 Hà Nam
                              </option>
                              <option value="ha-tinh_39">
                                 Hà Tĩnh
                              </option>
                              <option value="hai-duong_320">
                                 Hải Dương
                              </option>
                              <option value="hai-phong_31">
                                 Hải Phòng
                              </option>
                              <option value="hau-giang_780">
                                 Hậu Giang
                              </option>
                              <option value="hoa-binh_18">
                                 Hòa Bình
                              </option>
                              <option value="hung-yen_321">
                                 Hưng Yên
                              </option>
                              <option value="khac_901">
                                 Khác
                              </option>
                              <option value="khanh-hoa_58">
                                 Khánh Hòa
                              </option>
                              <option value="kien-giang_77">
                                 Kiên Giang
                              </option>
                              <option value="kon-tum_60">
                                 Kon Tum
                              </option>
                              <option value="kv-bac-trung-bo_1071">
                                 KV Bắc Trung Bộ
                              </option>
                              <option value="kv-dong-nam-bo_1069">
                                 KV Đông Nam Bộ
                              </option>
                              <option value="kv-nam-trung-bo_1070">
                                 KV Nam Trung Bộ
                              </option>
                              <option value="kv-tay-nguyen_1072">
                                 KV Tây Nguyên
                              </option>
                              <option value="lai-chau_23">
                                 Lai Châu
                              </option>
                              <option value="lang-son_25">
                                 Lạng Sơn
                              </option>
                              <option value="lao-cai_20">
                                 Lào Cai
                              </option>
                              <option value="lam-dong_63">
                                 Lâm Đồng
                              </option>
                              <option value="long-an_72">
                                 Long An
                              </option>
                              <option value="nam-dinh_350">
                                 Nam Định
                              </option>
                              <option value="nghe-an_38">
                                 Nghệ An
                              </option>
                              <option value="ninh-binh_30">
                                 Ninh Bình
                              </option>
                              <option value="ninh-thuan_68">
                                 Ninh Thuận
                              </option>
                              <option value="phu-tho_210">
                                 Phú Thọ
                              </option>
                              <option value="phu-yen_57">
                                 Phú Yên
                              </option>
                              <option value="quang-binh_52">
                                 Quảng Bình
                              </option>
                              <option value="quang-nam_510">
                                 Quảng Nam
                              </option>
                              <option value="quang-ngai_55">
                                 Quảng Ngãi
                              </option>
                              <option value="quang-ninh_33">
                                 Quảng Ninh
                              </option>
                              <option value="quang-tri_53">
                                 Quảng Trị
                              </option>
                              <option value="soc-trang_79">
                                 Sóc Trăng
                              </option>
                              <option value="son-la_22">
                                 Sơn La
                              </option>
                              <option value="tay-ninh_66">
                                 Tây Ninh
                              </option>
                              <option value="thai-binh_36">
                                 Thái Bình
                              </option>
                              <option value="thai-nguyen_280">
                                 Thái Nguyên
                              </option>
                              <option value="thanh-hoa_37">
                                 Thanh Hóa
                              </option>
                              <option value="thua-thien-hue_54">
                                 Thừa Thiên- Huế
                              </option>
                              <option value="tien-giang_73">
                                 Tiền Giang
                              </option>
                              <option value="toan-quoc_1065">
                                 Toàn quốc
                              </option>
                              <option value="tra-vinh_74">
                                 Trà Vinh
                              </option>
                              <option value="tuyen-quang_27">
                                 Tuyên Quang
                              </option>
                              <option value="vinh-long_70">
                                 Vĩnh Long
                              </option>
                              <option value="vinh-phuc_211">
                                 Vĩnh Phúc
                              </option>
                              <option value="yen-bai_29">
                                 Yên Bái
                              </option>
                              <option value="banteay-meanchey_1098">
                                 Banteay Meanchey
                              </option>
                              <option value="battambang_1096">
                                 Battambang
                              </option>
                              <option value="kampong-chhnang_1092">
                                 Kampong Chhnang
                              </option>
                              <option value="kampong-speu_1090">
                                 Kampong Speu
                              </option>
                              <option value="kampot_1085">
                                 Kampot
                              </option>
                              <option value="kandal_1088">
                                 Kandal
                              </option>
                              <option value="kep_1084">
                                 Kep
                              </option>
                              <option value="koh-kong_1091">
                                 Koh Kong
                              </option>
                              <option value="kratie_1093">
                                 Kratie
                              </option>
                              <option value="otdar-meanchey_1104">
                                 Otdar Meanchey
                              </option>
                              <option value="pailin_1103">
                                 Pailin
                              </option>
                              <option value="phnompenh_1041">
                                 Phnompenh
                              </option>
                              <option value="preah-vihear_1099">
                                 Preah Vihear
                              </option>
                              <option value="prey-veng_1089">
                                 Prey Veng
                              </option>
                              <option value="siem-reap_1097">
                                 Siem Reap
                              </option>
                              <option value="stung-treng_1100">
                                 Stung Treng
                              </option>
                              <option value="svay-rieng_1087">
                                 Svay Rieng
                              </option>
                              <option value="tbong-khmum_1082">
                                 Tbong Khmum
                              </option>
                              <option value="chicago_1034">
                                 Chicago
                              </option>
                              <option value="florida_1077">
                                 Florida
                              </option>
                              <option value="miami_1033">
                                 Miami
                              </option>
                              <option value="san-diego_1039">
                                 San Diego
                              </option>
                              <option value="hong-kong_1079">
                                 Hồng Kông
                              </option>
                              <option value="khac_1318">
                                 Khác
                              </option>
                              <option value="attapeu_1106">
                                 Attapeu
                              </option>
                              <option value="bokeo_1107">
                                 Bokeo
                              </option>
                              <option value="champasak_1109">
                                 Champasak
                              </option>
                              <option value="houaphanh_1110">
                                 Houaphanh
                              </option>
                              <option value="khammouane_1111">
                                 Khammouane
                              </option>
                              <option value="luang-prabang_1113">
                                 Luang Prabang
                              </option>
                              <option value="phongsaly_1115">
                                 Phongsaly
                              </option>
                              <option value="vientiane_1059">
                                 Vientiane
                              </option>
                              <option value="xiangkhouang_1120">
                                 Xiangkhouang
                              </option>
                              <option value="kuala-lumpur_1019">
                                 Kuala Lumpur
                              </option>
                              <option value="malaysia_1078">
                                 Malaysia
                              </option>
                              <option value="yangon_1320">
                                 Yangon
                              </option>
                              <option value="hokkaido_1043">
                                 Hokkaido
                              </option>
                              <option value="tokyo_1001">
                                 Tokyo
                              </option>
                              <option value="yokohama_1002">
                                 Yokohama
                              </option>
                              <option value="qatar_1055">
                                 Qatar
                              </option>
                              <option value="quoc-te_1073">
                                 Quốc tế
                              </option>
                              <option value="singapore_1040">
                                 Singapore
                              </option>
                              <option value="kharkiv_1053">
                                 Kharkiv
                              </option>
                           </select>
                        </div>
                     </div>
                     <div class="item">
                        <div class="form-group form-select">
                           <select name="salary" id="salary" class="select-custom select-custom-nosearch" data-placeholder="Mức lương">
                              <option value="" data-id="-1">Mức lương
                              <option value=3>Từ 3.000.000 đ</option>
                              <option value=5>Từ 5.000.000 đ</option>
                              <option value=7>Từ 7.000.000 đ</option>
                              <option value=10>Từ 10.000.000 đ</option>
                              <option value=15>Từ 15.000.000 đ</option>
                              <option value=20>Từ 20.000.000 đ</option>
                              <option value=30>Từ 30.000.000 đ</option>
                              <option value=40>Từ 40.000.000 đ</option>
                              <option value=50>Từ 50.000.000 đ</option>
                              <option value=60>Từ 60.000.000 đ</option>
                              <option value=70>Từ 70.000.000 đ</option>
                           </select>
                        </div>
                     </div>
                     <div class="item">
                        <div class="form-group form-select">
                           <select id="level" name="level" class="select-custom select-custom-nosearch" data-placeholder="Cấp bậc">
                              <option value="" data-id="-1">Cấp bậc
                              </option>
                              <option value="sinh-vien-thuc-tap-sinh_1" data-id="1">
                                 Sinh viên/ Thực tập sinh
                              </option>
                              <option value="moi-tot-nghiep_2" data-id="2">
                                 Mới tốt nghiệp
                              </option>
                              <option value="nhan-vien_3" data-id="3">
                                 Nhân viên
                              </option>
                              <option value="truong-nhom-giam-sat_4" data-id="4">
                                 Trưởng nhóm / Giám sát
                              </option>
                              <option value="quan-ly_5" data-id="5">
                                 Quản lý
                              </option>
                              <option value="quan-ly-cap-cao_11" data-id="11">
                                 Quản lý cấp cao
                              </option>
                              <option value="dieu-hanh-cap-cao_12" data-id="12">
                                 Điều hành cấp cao
                              </option>
                           </select>
                        </div>
                     </div>
                     <div class="item">
                        <div class="form-group form-select">
                           <select name="days" id="days" class="select-custom select-custom-nosearch" data-placeholder="Đăng trong vòng">
                              <option value="">Đăng trong vòng</option>
                              <option value="3" data-id="3">
                                 3 ngày trước
                              </option>
                              <option value="7" data-id="7">
                                 1 tuần trước
                              </option>
                              <option value="14" data-id="14">
                                 2 tuần trước
                              </option>
                              <option value="30" data-id="30">
                                 1 tháng trước 
                              </option>
                           </select>
                        </div>
                     </div>
                     <div class="item">
                        <div class="form-group form-select">
                           <select name="job_type" id="job_type" class="select-custom select-custom-nosearch" data-placeholder="Hình thức việc làm">
                              <option value="">Hình thức việc làm</option>
                              <option data-id="1000" value="nhan-vien-chinh-thuc_1000">
                                 Nhân viên chính thức
                              </option>
                              <option data-id="0100" value="tam-thoi-du-an_0100">
                                 Tạm thời/Dự án
                              </option>
                              <option data-id="0010" value="thoi-vu-nghe-tu-do_0010">
                                 Thời vụ - Nghề tự do
                              </option>
                              <option data-id="0001" value="thuc-tap_0001">
                                 Thực tập
                              </option>
                           </select>
                        </div>
                     </div>
                     <div class="item">
                        <div class="form-group form-select-chosen">
                           <select multiple="multiple" name="benefit" id="benefit" size="1" class="chosen-select-max-three" data-placeholder="Phúc lợi mong muốn" multiple title="Chọn" style="width: 240px">
                              <option value="che-do-bao-hiem_2" data-id="2">
                                 Chế độ bảo hiểm
                              </option>
                              <option value="du-lich_3" data-id="3">
                                 Du Lịch
                              </option>
                              <option value="che-do-thuong_8" data-id="8">
                                 Chế độ thưởng
                              </option>
                              <option value="cham-soc-suc-khoe_9" data-id="9">
                                 Chăm sóc sức khỏe
                              </option>
                              <option value="dao-tao_10" data-id="10">
                                 Đào tạo
                              </option>
                              <option value="tang-luong_11" data-id="11">
                                 Tăng lương
                              </option>
                              <option value="laptop_1" data-id="1">
                                 Laptop
                              </option>
                              <option value="phu-cap_4" data-id="4">
                                 Phụ cấp
                              </option>
                              <option value="xe-dua-don_5" data-id="5">
                                 Xe đưa đón
                              </option>
                              <option value="du-lich-nuoc-ngoai_6" data-id="6">
                                 Du lịch nước ngoài
                              </option>
                              <option value="dong-phuc_7" data-id="7">
                                 Đồng phục
                              </option>
                              <option value="cong-tac-phi_12" data-id="12">
                                 Công tác phí
                              </option>
                              <option value="phu-cap-tham-nien_13" data-id="13">
                                 Phụ cấp thâm niên
                              </option>
                              <option value="nghi-phep-nam_14" data-id="14">
                                 Nghỉ phép năm
                              </option>
                              <option value="clb-the-thao_15" data-id="15">
                                 CLB thể thao
                              </option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="filter-action">
                     <a href="javascript:;" class="btn-apply" onClick="return validataSearchHomePage('vi');">Áp
                     dụng</a>
                     <a class="btn-clear" href="javascript:;" onClick="return resetForm();">Xóa bộ lọc</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <input type="hidden" id="recommend" name="recommend" value="" />
   </section>
   <section class="search-result-list">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-custom-xxl-9">
               <div class="job-found">
                  <div class="job-found-amout">
                     <h1>27,879 việc làm</h1>
                  </div>
                  <div class="job-found-sort">
                     <span class="sort-title dropdown">
                        Sắp xếp theo<em class="mdi mdi-chevron-down"></em>
                        <div class="dropdown-menu">
                           <ul>
                              <li> <a title="Cập nhật" class="active" href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-sortdv-vi.html">Cập nhật</a></li>
                              <li><a title="Mức lương" href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-sortlg-vi.html">Mức lương</a></li>
                           </ul>
                        </div>
                     </span>
                  </div>
               </div>
               <div class="main-slide">
                  <div class="jobs-side-list" id="jobs-side-list-content">
                     <?php foreach ($job_post as $item): ?>
                        <div class="job-item " id="job-item-<?= $item["id"]?>">
                        <div class="figure">
                           <div class="image">
                              <a href="" target="_blank" title="Ms Huong">
                              <img class="lazy-img" src="<?= _WEB_ROOT.'/app/public/assets/employer/images/'.$item["logo"] ?>" src="../kiemviecv32/images/graphics/blank.gif" alt="Ms Huong">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5BD" href="<?= _WEB_ROOT.'/Alljob/detail/'.$item["id"] ?>" title="VIDEO TRANSLATOR  UP TO 13MIL">
                                  <?= $item["job_title"] ?>
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                            <div style="display:flex;justify-content: space-between;">
                            <div class="caption">
                           
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/ms-huong.35A8DDF9.html" title="Ms Huong">
                                 <?= $item["company_name"] ?>
                                 </a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: <?= format_price($item["min_salary"]).'-'.format_price($item["max_salary"]).' VND' ?></p>
                                 </div>
                                 <!-- <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li class=""></li>
                                    </ul>
                                 </div> -->
                                 <ul class="welfare">
                                   

                                 </ul>
                              </div>
                              <div style="top:50px;"class="">
                                 <ul>
                                
                                    <li><a class="toollips save-job chk_save_35BAE5BD " href="javascript:void(0);" data-id="35BAE5BD" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time><?= formatDate($item["posted_date"]) ?></time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div></div>
                           </div>
                        </div>
                     </div>
                   <?php  endforeach;?>
                   
                     <!-- <div class="job-item " id="job-item-35BAE5BB">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/medigo-software.35A88553.html" target="_blank" title="Medigo Software ">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employer_folders/lot7/236627/155x155/113148logomedigo.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Medigo Software ">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5BB" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-nhan-don-va-xu-ly-don.35BAE5BB.html" target="_blank" title="NHÂN VIÊN NHẬN ĐƠN VÀ XỬ LÝ ĐƠN">
                                    NHÂN VIÊN NHẬN ĐƠN VÀ XỬ LÝ ĐƠN
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/medigo-software.35A88553.html" title="Medigo Software ">Medigo Software </a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: 7 Tr - 9 Tr VND</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hồ Chí Minh</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-plane"></span>Du Lịch</li>
                                    <li><span class="fa fa-money"></span>Phụ cấp</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="play-video" href="https://www.youtube.com/watch?v=BT87l-q2NLE" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                    <li><a class="toollips save-job chk_save_35BAE5BB " href="javascript:void(0);" data-id="35BAE5BB" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-item " id="job-item-35BAE5BC">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-greenfeed-viet-nam.35A56979.html" target="_blank" title="Công Ty Cổ Phần GreenFeed Việt Nam">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employers/32889/155x155/142444output-onlinepngtools.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty Cổ Phần GreenFeed Việt Nam">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title  is-red">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5BC" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tu-van-ky-thuat-thuong-mai.35BAE5BC.html" target="_blank" title="Nhân viên Tư vấn Kỹ thuật Thương mại">
                                    Nhân viên Tư vấn Kỹ thuật Thương mại
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-greenfeed-viet-nam.35A56979.html" title="Công Ty Cổ Phần GreenFeed Việt Nam">Công Ty Cổ Phần GreenFeed Việt Nam</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Tiền Giang</li>
                                       <li> Long An</li>
                                       <li> Bến Tre</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-laptop"></span>Laptop</li>
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-plane"></span>Du Lịch</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="play-video" href="https://www.youtube.com/watch?v=1ChDhfxSF24" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                    <li><a class="toollips save-job chk_save_35BAE5BC " href="javascript:void(0);" data-id="35BAE5BC" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-item " id="job-item-35BAE5BA">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/anheuser-busch-inbev-ab-inbev.35A816AA.html" target="_blank" title="Anheuser-Busch InBev (AB InBev)">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employer_folders/lot8/208298/155x155/105618fullcolor-black.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Anheuser-Busch InBev (AB InBev)">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5BA" href="https://careerbuilder.vn/vi/tim-viec-lam/trade-program-executive.35BAE5BA.html" target="_blank" title="Trade Program Executive">
                                    Trade Program Executive
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/anheuser-busch-inbev-ab-inbev.35A816AA.html" title="Anheuser-Busch InBev (AB InBev)">Anheuser-Busch InBev (AB InBev)</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hồ Chí Minh</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-laptop"></span>Laptop</li>
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-plane"></span>Du Lịch</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="toollips save-job chk_save_35BAE5BA " href="javascript:void(0);" data-id="35BAE5BA" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-item " id="job-item-35BAE5B8">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/diag.35A89197.html" target="_blank" title="Diag">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employer_folders/lot7/239767/155x155/141244logo_diag-final_white.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Diag">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5B8" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-giao-nhan-mau-part-time-khu-vuc-tu-quan-7-quan-8-den-quan-binh-chanh.35BAE5B8.html" target="_blank" title="Nhân viên giao nhận mẫu (Part time/ Khu vực từ Quận 7, Quận 8 đến Quận Bình Chánh)">
                                    Nhân viên giao nhận mẫu (Part time/ Khu vực từ Quận 7, Quận 8 đến Quận Bình Chánh)
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/diag.35A89197.html" title="Diag">Diag</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hồ Chí Minh</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-black-tie"></span>Đồng phục</li>
                                    <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="toollips save-job chk_save_35BAE5B8 " href="javascript:void(0);" data-id="35BAE5B8" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-item " id="job-item-35BAE5B7">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/diag.35A89197.html" target="_blank" title="Diag">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employer_folders/lot7/239767/155x155/141244logo_diag-final_white.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Diag">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5B7" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-giao-nhan-mau-full-time-khu-vuc-tu-quan-5-quan-8-den-quan-binh-chanh.35BAE5B7.html" target="_blank" title="Nhân viên giao nhận mẫu (Full time/ Khu vực từ Quận 5, Quận 8 đến Quận Bình Chánh) )">
                                    Nhân viên giao nhận mẫu (Full time/ Khu vực từ Quận 5, Quận 8 đến Quận Bình Chánh) )
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/diag.35A89197.html" title="Diag">Diag</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hồ Chí Minh</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-money"></span>Phụ cấp</li>
                                    <li><span class="fa fa-black-tie"></span>Đồng phục</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="toollips save-job chk_save_35BAE5B7 " href="javascript:void(0);" data-id="35BAE5B7" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-item " id="job-item-35BAE5B6">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/diag.35A89197.html" target="_blank" title="Diag">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employer_folders/lot7/239767/155x155/141244logo_diag-final_white.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Diag">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5B6" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-giao-nhan-mau-part-time-khu-vuc-quan-2-den-quan-binh-thanh.35BAE5B6.html" target="_blank" title="Nhân viên giao nhận mẫu (Part-time/ Khu vực Quận 2 đến Quận Bình Thạnh)">
                                    Nhân viên giao nhận mẫu (Part-time/ Khu vực Quận 2 đến Quận Bình Thạnh)
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/diag.35A89197.html" title="Diag">Diag</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hồ Chí Minh</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-black-tie"></span>Đồng phục</li>
                                    <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="toollips save-job chk_save_35BAE5B6 " href="javascript:void(0);" data-id="35BAE5B6" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> -->
                     <!-- <div class="job-item " id="job-item-35BAE5B5">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/rgf-hr-agent-vietnam-co-ltd.35A63BED.html" target="_blank" title="RGF HR Agent Vietnam Co., LTD">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employer_folders/lot5/86765/155x155/142150rgf.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="RGF HR Agent Vietnam Co., LTD">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5B5" href="https://careerbuilder.vn/vi/tim-viec-lam/82550-chinese-speaking-director-assistant-tro-ly-tong-giam-doc-office-equipment.35BAE5B5.html" target="_blank" title="82550 - Chinese Speaking - Director Assistant - Trợ lý Tổng Giám đốc - Office Equipment">
                                    82550 - Chinese Speaking - Director Assistant - Trợ lý Tổng Giám đốc - Office Equipment
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/rgf-hr-agent-vietnam-co-ltd.35A63BED.html" title="RGF HR Agent Vietnam Co., LTD">RGF HR Agent Vietnam Co., LTD</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: 22 Tr - 31,9 Tr VND</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hồ Chí Minh</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-plane"></span>Du Lịch</li>
                                    <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="toollips save-job chk_save_35BAE5B5 " href="javascript:void(0);" data-id="35BAE5B5" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-item " id="job-item-35BAE5B4">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/rgf-hr-agent-vietnam-co-ltd.35A63BED.html" target="_blank" title="RGF HR Agent Vietnam Co., LTD">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employer_folders/lot5/86765/155x155/142150rgf.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="RGF HR Agent Vietnam Co., LTD">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5B4" href="https://careerbuilder.vn/vi/tim-viec-lam/82525-senior-process-engineer-plant-engineering.35BAE5B4.html" target="_blank" title="82525 - Senior Process Engineer - Plant Engineering">
                                    82525 - Senior Process Engineer - Plant Engineering
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/rgf-hr-agent-vietnam-co-ltd.35A63BED.html" title="RGF HR Agent Vietnam Co., LTD">RGF HR Agent Vietnam Co., LTD</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: 19,8 Tr - 23,8 Tr VND</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hồ Chí Minh</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-plane"></span>Du Lịch</li>
                                    <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="toollips save-job chk_save_35BAE5B4 " href="javascript:void(0);" data-id="35BAE5B4" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-item " id="job-item-35BAE5B3">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/rgf-hr-agent-vietnam-co-ltd.35A63BED.html" target="_blank" title="RGF HR Agent Vietnam Co., LTD">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employer_folders/lot5/86765/155x155/142150rgf.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="RGF HR Agent Vietnam Co., LTD">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5B3" href="https://careerbuilder.vn/vi/tim-viec-lam/82513-sales-staff-pet-foods.35BAE5B3.html" target="_blank" title="82513 - Sales Staff - Pet Foods">
                                    82513 - Sales Staff - Pet Foods
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/rgf-hr-agent-vietnam-co-ltd.35A63BED.html" title="RGF HR Agent Vietnam Co., LTD">RGF HR Agent Vietnam Co., LTD</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: 22 Tr - 44 Tr VND</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hồ Chí Minh</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-plane"></span>Du Lịch</li>
                                    <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="toollips save-job chk_save_35BAE5B3 " href="javascript:void(0);" data-id="35BAE5B3" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-item " id="job-item-35BAE5B2">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-chung-khoan-ks.35A94C0A.html" target="_blank" title="Công ty Cổ phần Chứng khoán KS">
                              <img class="lazy-img" src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/logo-default.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công ty Cổ phần Chứng khoán KS">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title  is-red">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5B2" href="https://careerbuilder.vn/vi/tim-viec-lam/chuyen-vien-phat-trien-khach-hang-cao-cap.35BAE5B2.html" target="_blank" title="CHUYÊN VIÊN PHÁT TRIỂN KHÁCH HÀNG CAO CẤP">
                                    CHUYÊN VIÊN PHÁT TRIỂN KHÁCH HÀNG CAO CẤP
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-chung-khoan-ks.35A94C0A.html" title="Công ty Cổ phần Chứng khoán KS">Công ty Cổ phần Chứng khoán KS</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hà Nội</li>
                                       <li> Hồ Chí Minh</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-plane"></span>Du Lịch</li>
                                    <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="toollips save-job chk_save_35BAE5B2 " href="javascript:void(0);" data-id="35BAE5B2" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-item " id="job-item-35BAE5B1">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/diag.35A89197.html" target="_blank" title="Diag">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employer_folders/lot7/239767/155x155/141244logo_diag-final_white.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Diag">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5B1" href="https://careerbuilder.vn/vi/tim-viec-lam/hcm-tro-ly-kho-van-warehouse-assistant.35BAE5B1.html" target="_blank" title="[HCM] Trợ lý kho vận / Warehouse assistant">
                                    [HCM] Trợ lý kho vận / Warehouse assistant
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/diag.35A89197.html" title="Diag">Diag</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: 7,5 Tr - 9 Tr VND</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hồ Chí Minh</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-laptop"></span>Laptop</li>
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-money"></span>Phụ cấp</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="toollips save-job chk_save_35BAE5B1 " href="javascript:void(0);" data-id="35BAE5B1" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> -->
                     <!-- <div class="job-item " id="job-item-35BAE5B0">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/diag.35A89197.html" target="_blank" title="DIAG">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employer_folders/lot7/239767/155x155/141244logo_diag-final_white.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="DIAG">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5B0" href="https://careerbuilder.vn/vi/tim-viec-lam/legal-executive.35BAE5B0.html" target="_blank" title="Legal Executive">
                                    Legal Executive
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/diag.35A89197.html" title="DIAG">DIAG</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hồ Chí Minh</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-laptop"></span>Laptop</li>
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-money"></span>Phụ cấp</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="toollips save-job chk_save_35BAE5B0 " href="javascript:void(0);" data-id="35BAE5B0" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-item " id="job-item-35BAE5AE">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/fe-credit.35A637C6.html" target="_blank" title="FE CREDIT">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employer_folders/lot2/85702/155x155/115503logo_fullcolor.png" src="../kiemviecv32/images/graphics/blank.gif" alt="FE CREDIT">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5AE" href="https://careerbuilder.vn/vi/tim-viec-lam/product-development-specialist-pos.35BAE5AE.html" target="_blank" title="Product Development Specialist - POS">
                                    Product Development Specialist - POS
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/fe-credit.35A637C6.html" title="FE CREDIT">FE CREDIT</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: 15 Tr - 22 Tr VND</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hồ Chí Minh</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-money"></span>Phụ cấp</li>
                                    <li><span class="fa fa-graduation-cap"></span>Đào tạo</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="play-video" href="https://www.youtube.com/watch?v=jtLedcFYKi4&feature=youtu.be" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                    <li><a class="toollips save-job chk_save_35BAE5AE " href="javascript:void(0);" data-id="35BAE5AE" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-item " id="job-item-35BAE5AA">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/kompa-technology.35A8689E.html" target="_blank" title="Kompa Technology">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employer_folders/lot8/229278/155x155/224843logokompa_20122019.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Kompa Technology">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5AA" href="https://careerbuilder.vn/vi/tim-viec-lam/research-account-leader-social-listening.35BAE5AA.html" target="_blank" title="Research & Account Leader (Social Listening)">
                                    Research & Account Leader (Social Listening)
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/kompa-technology.35A8689E.html" title="Kompa Technology">Kompa Technology</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hồ Chí Minh</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-laptop"></span>Laptop</li>
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-money"></span>Phụ cấp</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="toollips save-job chk_save_35BAE5AA " href="javascript:void(0);" data-id="35BAE5AA" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-item " id="job-item-35BAE5AD">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-kiwooza-edutainment-vietnam.35A87E40.html" target="_blank" title="CÔNG TY CỔ PHẦN KIWOOZA EDUTAINMENT VIETNAM">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employer_folders/lot6/234816/155x155/111712kwzlogo.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN KIWOOZA EDUTAINMENT VIETNAM">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5AD" href="https://careerbuilder.vn/vi/tim-viec-lam/hcm-q7-nhan-vien-khu-vui-choi-tre-em.35BAE5AD.html" target="_blank" title="(HCM-Q7) - Nhân viên khu vui chơi trẻ em">
                                    (HCM-Q7) - Nhân viên khu vui chơi trẻ em
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-kiwooza-edutainment-vietnam.35A87E40.html" title="CÔNG TY CỔ PHẦN KIWOOZA EDUTAINMENT VIETNAM">CÔNG TY CỔ PHẦN KIWOOZA EDUTAINMENT VIETNAM</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: 8 Tr - 10 Tr VND</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hồ Chí Minh</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-plane"></span>Du Lịch</li>
                                    <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="play-video" href="https://www.youtube.com/watch?v=XN-tl056-sg" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                    <li><a class="toollips save-job chk_save_35BAE5AD " href="javascript:void(0);" data-id="35BAE5AD" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-item " id="job-item-35BAE5AC">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/fe-credit.35A637C6.html" target="_blank" title="FE CREDIT">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employer_folders/lot2/85702/155x155/115503logo_fullcolor.png" src="../kiemviecv32/images/graphics/blank.gif" alt="FE CREDIT">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5AC" href="https://careerbuilder.vn/vi/tim-viec-lam/products-service-communications-manager.35BAE5AC.html" target="_blank" title="Products & Service Communications Manager">
                                    Products & Service Communications Manager
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/fe-credit.35A637C6.html" title="FE CREDIT">FE CREDIT</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: 45 Tr - 55 Tr VND</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hồ Chí Minh</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-plane"></span>Du Lịch</li>
                                    <li><span class="fa fa-user-md"></span>Chăm sóc sức khỏe</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="play-video" href="https://www.youtube.com/watch?v=jtLedcFYKi4&feature=youtu.be" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                    <li><a class="toollips save-job chk_save_35BAE5AC " href="javascript:void(0);" data-id="35BAE5AC" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-item " id="job-item-35BAE535">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-greenfeed-viet-nam.35A56979.html" target="_blank" title="Công Ty Cổ Phần GreenFeed Việt Nam">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employers/32889/155x155/142444output-onlinepngtools.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty Cổ Phần GreenFeed Việt Nam">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title  is-red">
                                 <h2>
                                    <a class="job_link" data-id="35BAE535" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-qa.35BAE535.html" target="_blank" title="Nhân viên QA">
                                    Nhân viên QA
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-greenfeed-viet-nam.35A56979.html" title="Công Ty Cổ Phần GreenFeed Việt Nam">Công Ty Cổ Phần GreenFeed Việt Nam</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Long An</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-plane"></span>Du Lịch</li>
                                    <li><span class="fa fa-money"></span>Phụ cấp</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="play-video" href="https://www.youtube.com/watch?v=1ChDhfxSF24" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                    <li><a class="toollips save-job chk_save_35BAE535 " href="javascript:void(0);" data-id="35BAE535" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-item " id="job-item-35BAE55C">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/acs-trading-vietnam-co-ltd.35A684FB.html" target="_blank" title="ACS Trading Vietnam Co. Ltd.">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employer_folders/lot7/105467/155x155/191120hinh.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="ACS Trading Vietnam Co. Ltd.">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE55C" href="https://careerbuilder.vn/vi/tim-viec-lam/sales-manager.35BAE55C.html" target="_blank" title="Sales Manager">
                                    Sales Manager
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/acs-trading-vietnam-co-ltd.35A684FB.html" title="ACS Trading Vietnam Co. Ltd.">ACS Trading Vietnam Co. Ltd.</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: Lên đến 45 Tr VND</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hồ Chí Minh</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-plane"></span>Du Lịch</li>
                                    <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="toollips save-job chk_save_35BAE55C " href="javascript:void(0);" data-id="35BAE55C" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-item " id="job-item-35BAE5AB">
                        <div class="figure">
                           <div class="image">
                              <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/ngan-hang-xay-dung.35A792F5.html" target="_blank" title="Ngân Hàng Xây Dựng">
                              <img class="lazy-img" src="https://images.careerbuilder.vn/employer_folders/lot1/174581/155x155/175116logo.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Ngân Hàng Xây Dựng">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5AB" href="https://careerbuilder.vn/vi/tim-viec-lam/chuyen-vien-xu-ly-no-the-chap.35BAE5AB.html" target="_blank" title="Chuyên viên Xử lý nợ thế chấp">
                                    Chuyên viên Xử lý nợ thế chấp
                                    <span class="new">
                                    <font color="ff0000">(Mới)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                              <div class="caption">
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/ngan-hang-xay-dung.35A792F5.html" title="Ngân Hàng Xây Dựng">Ngân Hàng Xây Dựng</a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                 </div>
                                 <div class="location">
                                    <em class="mdi mdi-map-marker"></em>
                                    <ul>
                                       <li>Hà Nội</li>
                                    </ul>
                                 </div>
                                 <ul class="welfare">
                                    <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                    <li><span class="fa fa-plane"></span>Du Lịch</li>
                                    <li><span class="fa fa-money"></span>Phụ cấp</li>
                                 </ul>
                              </div>
                              <div class="bottom-right-icon">
                                 <ul>
                                    <li><a class="toollips save-job chk_save_35BAE5AB " href="javascript:void(0);" data-id="35BAE5AB" onclick="popuplogin()">
                                       <i class="mdi mdi-heart-outline"></i>
                                       <span class="text">Lưu việc làm</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="time">
                                    <em class="mdi mdi-calendar"></em>
                                    <time>04-11-2022</time>
                                    <div class="toolip">
                                       <p>Ngày cập nhật</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> -->
                  </div>
                  <div class="pagination">
                     <ul>
                        <li class="active"><a href="javascript:void(0);">1</a></li>
                        <li><a href=https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-trang-2-vi.html>2</a></li>
                        <li><a href=https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-trang-3-vi.html>3</a></li>
                        <li><a href=https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-trang-4-vi.html>4</a></li>
                        <li><a href=https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-trang-5-vi.html>5</a></li>
                        <li class="next-page"><a href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-trang-2-vi.html"> <span class="mdi mdi-chevron-right"></span></a></li>
                     </ul>
                  </div>
               </div>
               <div class="job-bottom-banner" style="text-align:center;">
                  <script type='text/javascript'>
                     OA_show(853);
                  </script>
               </div>
            </div>
            <div class="col-lg-4 col-custom-xxl-3">
               <div class="box-most-find">
                  <div class="box-title">
                     <h4>Việc làm được tìm kiếm nhiều nhất</h4>
                  </div>
                  <div class="box-content">
                     <ul>
                        <li>
                           <a href="https://careerbuilder.vn/viec-lam/Đại-diện-kinh-doanh-k-vi.html">
                           Đại diện kinh doanh
                           </a>
                        </li>
                        <li>
                           <a href="https://careerbuilder.vn/viec-lam/Kế-toán-trưởng-k-vi.html">
                           Kế toán trưởng
                           </a>
                        </li>
                        <li>
                           <a href="https://careerbuilder.vn/viec-lam/Purchasing-k-vi.html">
                           Purchasing
                           </a>
                        </li>
                        <li>
                           <a href="https://careerbuilder.vn/viec-lam/Kế-toán-tổng-hợp-k-vi.html">
                           Kế toán tổng hợp
                           </a>
                        </li>
                        <li>
                           <a href="https://careerbuilder.vn/viec-lam/Marketing-k-vi.html">
                           Marketing
                           </a>
                        </li>
                        <li>
                           <a href="https://careerbuilder.vn/viec-lam/kế-toán-k-vi.html">
                           kế toán
                           </a>
                        </li>
                        <li>
                           <a href="https://careerbuilder.vn/viec-lam/Nhân-viên-tuyển-dụng-k-vi.html">
                           Nhân viên tuyển dụng
                           </a>
                        </li>
                        <li>
                           <a href="https://careerbuilder.vn/viec-lam/Accountant-k-vi.html">
                           Accountant
                           </a>
                        </li>
                        <li>
                           <a href="https://careerbuilder.vn/viec-lam/Nhân-viên-thực-tập-k-vi.html">
                           Nhân viên thực tập
                           </a>
                        </li>
                        <li>
                           <a href="https://careerbuilder.vn/viec-lam/Nhân-viên-kế-toán-k-vi.html">
                           Nhân viên kế toán
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="list-banner-search-result">
                  <!-- remve class sticky-->
                  <div class="banner-ad loadAds" id="854"></div>
                  <div class="banner-ad loadAds" id="855"></div>
                  <div class="banner-ad loadAds" id="856"></div>
                  <div class="banner-ad" style="text-align:center">
                     <script type='text/javascript'>
                        OA_show(772);
                     </script>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="sticker-jobs active">
      <div class="icons"><em class="material-icons">access_alarms</em></div>
      <div class="content">
         <p>Gửi tôi việc làm tương tự</p>
      </div>
      <div class="button"> <a href="javascript:void(0);" onclick="return adVanceJobalert();">Đăng ký ngay</a></div>
   </div>
   <div class="login-modal" style="display: none">
      <div class="modal-title">
         <p>Vui lòng đăng nhập để thực hiện chức năng này</p>
      </div>
      <div class="modal-body">
         <form method="POST" id="popup_login_form" action="https://careerbuilder.vn/vi/jobseekers/member/login" autocomplete="off">
            <div class="row">
               <div class="form-group col-12">
                  <input type="text" id="username" name="username" placeholder="Username / Email" autocomplete="off">
               </div>
               <div class="form-group col-8">
                  <input type="password" name="password" id="password" placeholder="Mật khẩu" autocomplete="off">
               </div>
               <div class="form-group col-4">
                  <input type="hidden" name="csrf_token" value="26a79339b50539b838f5db46c345c9b13b673f6ded8f0f05d949965cdb239421" />
                  <button type="submit">Đăng nhập</button>
               </div>
            </div>
         </form>
         <div class="sign-in-by">
            <span>Đăng nhập bằng:</span>
            <ul class="list-follow">
               <li><a class="fb" href="javascript:void(0);" onclick="popupapi('facebook','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5mYWNlYm9vaw==');"><em class="fa fa-facebook"></em>Facebook</a></li>
               <li><a class="gg" href="javascript:void(0);" onclick="popupapi('google','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5nb29nbGU=');"><em class="fa fa-google"></em>Google</a></li>
            </ul>
         </div>
         <a class="register" href="https://careerbuilder.vn/vi/jobseekers/register" title="Đăng ký">Đăng ký </a><a class="forget-password" href="https://careerbuilder.vn/vi/jobseekers/forgotpassword" title="Quên mật khẩu?" rel="nofollow">Quên mật khẩu?</a>
      </div>
   </div>
   <div class="back-drop"></div>
</main>