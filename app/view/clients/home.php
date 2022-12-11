
<!-- <script defer src="<?= _WEB_ROOT . "/app/public/assets/clients/js/home.js"?>"></script> -->
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/global/css/multi-select-dropdown.css" ?>">

<style>
    .form-group .chosen-select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 100% !important;
    height: 40px;
    padding: 5px 10px;
    padding-left: 40px;
    border: 1px solid #cccccc;
    border-radius: 4px;
    background: #fff;
    color: #172642;
    font-size: 16px;
    font-weight: 500;
}
.multiselect-dropdown{
   appearance: none;
    width: 100% !important;
    height: 40px;
    padding: 5px 10px;
    padding-left: 40px;
    border: 1px solid #cccccc;
    border-radius: 4px;
    background: #fff;
    color: #172642;
    font-size: 16px;
    font-weight: 500;
}
</style>
<main>
   <div id="dropdownSelected"></div>
   <div class="cb-main-search">
      <section class="cb-banner-home">
         <div class="banner-pc">
            <div class="swiper-container">
               <div class="swiper-wrapper" id="pc-swiper-wrapper">
                  <div class="swiper-slide">
                     <a href="javascript:void(0)" >
                        <div class="image"> <img src="https://images.careerbuilder.vn/background/careerstart_plb_desktop_1900x570_2022_08_15_1660563408.jpg" alt="Banner"> </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="main-page">
               <div class="swiper-pagination"></div>
            </div>
         </div>
         <div class="banner-mobile">
            <div class="swiper-container">
               <div class="swiper-wrapper" id="mobile-swiper-wrapper">
                  <div class="swiper-slide">
                     <a href="https://careerbuilder.vn/vi/jobseekers/ajax/counterbannerclick?url=aHR0cHM6Ly9jYXJlZXJzdGFydC52bi8=&id=280" rel="nofollow;noreferrer" target="_blank">
                        <div class="image"> <img src="https://images.careerbuilder.vn/background/careerstart_plb_mobile_640x430_2022_08_15_1660563408.jpg" alt="Banner"> </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="main-page">
               <div class="swiper-pagination"></div>
            </div>
         </div>
      </section>
     
      <section class="cb-box-find">
   <div class="container">
      <div class="main-box active">
         <div class="box-body">
            <div class="title">
               <h1>Đón lấy thành công với <span> 25,603  cơ hội nghề nghiệp </span></h1>
            </div>
            <form  method="get" action="<?= _WEB_ROOT.'/alljob' ?>">
               <div class="main-form">
                  <div class="row">
                     <div class="form-group col-12 form-keyword">
                        <input style="appearance: none;
    width: 100% !important;
    height: 40px;
    padding: 5px 10px;
    padding-left: 40px;
    border: 1px solid #cccccc;
    border-radius: 4px;
    background: #fff;
    color: #172642;
    font-size: 16px;
    font-weight: 500;"type="search" class="prompt keyword" autofocus="" name="keyword" id="keyword" placeholder="Chức danh, Kỹ năng, Tên công ty" autocomplete="off">
                        <div class="cleartext"><em class="mdi mdi-close-circle"></em></div>
                     </div>
                  </div>
                  <div class="advanced-search overflow" style="display: block;">
                     <div class="row">
                        <div class="form-group col-sm-6">
                           <!-- <label><span class="mdi mdi-map-marker"></span></label> -->
                          <select id="location" multiple name="location[]" class="chosen-select-max-three" placeholder="Tất cả địa điểm" style="display: none;"><option value="1">Thành phố Hà Nội</option><option value="2">Tỉnh Hà Giang</option><option value="4">Tỉnh Cao Bằng</option><option value="6">Tỉnh Bắc Kạn</option><option value="8">Tỉnh Tuyên Quang</option><option value="10">Tỉnh Lào Cai</option><option value="11">Tỉnh Điện Biên</option><option value="12">Tỉnh Lai Châu</option><option value="14">Tỉnh Sơn La</option><option value="15">Tỉnh Yên Bái</option><option value="17">Tỉnh Hoà Bình</option><option value="19">Tỉnh Thái Nguyên</option><option value="20">Tỉnh Lạng Sơn</option><option value="22">Tỉnh Quảng Ninh</option><option value="24">Tỉnh Bắc Giang</option><option value="25">Tỉnh Phú Thọ</option><option value="26">Tỉnh Vĩnh Phúc</option><option value="27">Tỉnh Bắc Ninh</option><option value="30">Tỉnh Hải Dương</option><option value="31">Thành phố Hải Phòng</option><option value="33">Tỉnh Hưng Yên</option><option value="34">Tỉnh Thái Bình</option><option value="35">Tỉnh Hà Nam</option><option value="36">Tỉnh Nam Định</option><option value="37">Tỉnh Ninh Bình</option><option value="38">Tỉnh Thanh Hóa</option><option value="40">Tỉnh Nghệ An</option><option value="42">Tỉnh Hà Tĩnh</option><option value="44">Tỉnh Quảng Bình</option><option value="45">Tỉnh Quảng Trị</option><option value="46">Tỉnh Thừa Thiên Huế</option><option value="48">Thành phố Đà Nẵng</option><option value="49">Tỉnh Quảng Nam</option><option value="51">Tỉnh Quảng Ngãi</option><option value="52">Tỉnh Bình Định</option><option value="54">Tỉnh Phú Yên</option><option value="56">Tỉnh Khánh Hòa</option><option value="58">Tỉnh Ninh Thuận</option><option value="60">Tỉnh Bình Thuận</option><option value="62">Tỉnh Kon Tum</option><option value="64">Tỉnh Gia Lai</option><option value="66">Tỉnh Đắk Lắk</option><option value="67">Tỉnh Đắk Nông</option><option value="68">Tỉnh Lâm Đồng</option><option value="70">Tỉnh Bình Phước</option><option value="72">Tỉnh Tây Ninh</option><option value="74">Tỉnh Bình Dương</option><option value="75">Tỉnh Đồng Nai</option><option value="77">Tỉnh Bà Rịa - Vũng Tàu</option><option value="79">Thành phố Hồ Chí Minh</option><option value="80">Tỉnh Long An</option><option value="82">Tỉnh Tiền Giang</option><option value="83">Tỉnh Bến Tre</option><option value="84">Tỉnh Trà Vinh</option><option value="86">Tỉnh Vĩnh Long</option><option value="87">Tỉnh Đồng Tháp</option><option value="89">Tỉnh An Giang</option><option value="91">Tỉnh Kiên Giang</option><option value="92">Thành phố Cần Thơ</option><option value="93">Tỉnh Hậu Giang</option><option value="94">Tỉnh Sóc Trăng</option><option value="95">Tỉnh Bạc Liêu</option><option value="96">Tỉnh Cà Mau</option></select>
                           <!-- <div class="chosen-container chosen-container-multi" title="" id="location_chosen" style="width: 0px;">
                              <ul class="chosen-choices">
                                 <li class="search-field">
                                    <input class="chosen-search-input default" type="search" autocomplete="off" value="Tất cả địa điểm" style="width: 134.387px;">
                                 </li>
                              </ul>
                              <div class="chosen-drop">
                                 <ul class="chosen-results"></ul>
                              </div>
                           </div> -->
                        </div>
                        <div class="form-group col-sm-6">
                        <select id="industry" multiple="" name="industry[]" class="chosen-select-max-three" placeholder="Tất cả ngành nghề" style="display: none;">
                                                         <option value="1">Tiếp thị / Marketing</option>

                                                         <option value="2">CNTT - Phần mềm</option>

                                                         <option value="3">CNTT - Phần cứng / Mạng</option>

                                                         <option value="4">Dịch vụ khách hàng</option>

                                                         <option value="28">Du lịch</option>

                                                         <option value="29">Ngân hàng</option>

                                                         <option value="30">Bán lẻ / Bán sỉ </option>

                                                         <option value="31"> Bán hàng / Kinh doanh</option>

                                                         <option value="32"> Thực phẩm &amp; Đồ uống</option>

                                                         <option value="33">Kiến trúc</option>

                                                         <option value="34"> Nội ngoại thất</option>

                                                         <option value="35"> Xây dựng</option>

                                                         <option value="36">Kế toán</option>

                                                         <option value="37">Kiểm toán</option>

                                                         <option value="39"> Tiếp thị trực tuyến</option>

                                                         <option value="40"> Bất động sản</option>

                                                         <option value="42"> Hành chính / Thư ký</option>

                                                         <option value="43"> Nhà hàng / Khách sạn</option>

                                                         <option value="44">Luật / Pháp lý</option>

                                                         <option value="46"> Nhân sự</option>

                                                         <option value="47"> Cơ khí / Ô tô / Tự động hóa</option>

                                                         <option value="48"> Quảng cáo / Đối ngoại / Truyền Thông</option>

                                                         <option value="49">Thủy sản / Hải sản</option>

                                                         <option value="50">Mỹ thuật / Nghệ thuật / Thiết kế</option>

                                                         <option value="51"> Tài chính / Đầu tư</option>

                                                         <option value="52"> Quản lý điều hành</option>

                                                         <option value="53">Điện / Điện tử / Điện lạnh</option>

                                                         <option value="54">Xuất nhập khẩu</option>

                                                         <option value="55">Mới tốt nghiệp / Thực tập</option>

                                                         <option value="56">Dệt may / Da giày / Thời trang</option>

                                                         <option value="57">Dược phẩm</option>

                                                         <option value="58">Biên phiên dịch</option>

                                                         <option value="59">Bảo hiểm</option>

                                                         <option value="60">An ninh / bảo vệ</option>

                                                         <option value="61">Chăn nuôi / thú y</option>

                                                         <option value="62">Bưu chính viễn thông</option>

                                                         <option value="63">Công nghệ sinh học</option>

                                                         <option value="64">Công nghệ thực phẩm / Dinh dưỡng</option>

                                                         <option value="65">Dầu khí</option>

                                                         <option value="66">Giáo dục / Đào tạo</option>

                                                         <option value="67">Đồ gỗ </option>

                                                         <option value="68">Hàng gia dụng / Chăm sóc cá nhân</option>

                                                         <option value="69">Hàng không</option>

                                                         <option value="70">Hóa học</option>

                                                         <option value="71">Giải trí</option>

                                                         <option value="72">Khoáng sản</option>

                                                         <option value="73">Lâm nghiệp</option>

                                                         <option value="74">Tư vấn</option>

                                                         <option value="75">Bảo trì / Sửa chữa</option>

                                                         <option value="76">Y tế / Chăm sóc sức khỏe</option>

                                                         <option value="77">Thủy lợi</option>

                                                         <option value="78">Truyền hình / Báo trí / Biên tập</option>

                                                         <option value="79">Tổ chức sự kiện</option>

                                                         <option value="80">In ấn / Xuất bản</option>

                                                         <option value="81">Môi trường</option>

                                                         <option value="82">Nông nghiệp</option>

                                                         <option value="83">An toàn lao động</option>

                                                         <option value="84">Chứng khoán</option>

                                                         <option value="85">Thống kê</option>

                                                         <option value="86">Vận chuyển / Giao nhận / Kho vận</option>

                           
                        </select>
                         
                        </div>
                        <!-- <div class="form-group col-sm-6">
                           <select name="salary" id="salary" class="chosen-select chosen-select-max-one">
                              <option value="">Chọn mức lương</option>
                              <option value="3">Từ  3.000.000 đ</option>
                              <option value="5">Từ  5.000.000 đ</option>
                              <option value="7">Từ  7.000.000 đ</option>
                              <option value="10">Từ  10.000.000 đ</option>
                              <option value="15">Từ  15.000.000 đ</option>
                              <option value="20">Từ  20.000.000 đ</option>
                              <option value="30">Từ  30.000.000 đ</option>
                              <option value="40">Từ 40.000.000 đ</option>
                              <option value="50">Từ 50.000.000 đ</option>
                              <option value="60">Từ 60.000.000 đ</option>
                              <option value="70">Từ 70.000.000 đ</option>
                           </select>
                          
                        </div>
                        <div class="form-group col-sm-6">
                           <select id="level" name="level" class="chosen-select chosen-select-max-one" data-placeholder="Cấp bậc"  >
                              <option value="">Chọn cấp bậc</option>
                              <option value="sinh-vien-thuc-tap-sinh_1">Sinh viên/ Thực tập sinh</option>
                              <option value="moi-tot-nghiep_2">Mới tốt nghiệp</option>
                              <option value="nhan-vien_3">Nhân viên</option>
                              <option value="truong-nhom-giam-sat_4">Trưởng nhóm / Giám sát</option>
                              <option value="quan-ly_5">Quản lý</option>
                              <option value="quan-ly-cap-cao_11">Quản lý cấp cao</option>
                              <option value="dieu-hanh-cap-cao_12">Điều hành cấp cao</option>
                           </select>
                           
                        </div> -->
                     </div>
                  </div>
               </div>
               <!-- <div class="reset-form"style="margin-top:10px;"><a href="javascript:void(0);"><i class="fa fa-rotate-right"></i> Reset</a></div> -->
            
               <div class="find-jobs">
                  <button class="btn-gradient" onclick="return validataSearchHomePage('vi');">TÌM VIỆC NGAY</button>
               </div>
            </form>
         </div>
         <div class="box-footer">
            <div class="content">
               <p>Đăng hồ sơ nghề nghiệp để dễ dàng ứng tuyển nhanh</p>
            </div>
            <div class="upload-resume">               <button class="btn-gradient" onclick="window.location=''">Cập nhật hồ sơ</button>
            </div>
         </div>
      </div>
   </div>
</section>
   </div>
   <?php if(isset($suitable_job)) {?>
      <section class="cb-section cb-section-border-bottom" id="box-job-suggest" style=""><div class="container">
<div class="cb-title cb-title-center">
  <h2>Việc làm phù hợp với bạn</h2>
</div>
<div class="recommend-job-list">
  <div class="row">
  	<?php foreach ($suitable_job as $item):?>
      <div class="col-lg-6  col-xl-3">
  <div class="job-item">
    <div class="figure">
      <div class="image"><a  href="<?= _WEB_ROOT.'/alljob/detail/'.$item['id'] ?>" title="Công Ty TNHH Interflour Việt Nam"><img src="<?= _WEB_ROOT.'/app/public/assets/employer/images/'.$item["logo"] ?>" alt="<?= $item["company_name"] ?>"></a></div>
      <div class="figcaption">
        <div class="title"><a href="<?= _WEB_ROOT.'/Alljob/detail/'.$item["id"] ?>" title="Sales Supervisor"><?= $item["job_title"] ?></a></div>
        <div class="caption">
		  <a class="company-name" href="<?= _WEB_ROOT.'/alljob/'.$item['id'] ?>" title="Công Ty TNHH Interflour Việt Nam" target="_blank"<?= $item["company_name"] ?></a>
          <p class="salary"><em class="fa fa-usd"></em>Lương:<?= format_price($item["min_salary"]).'-'.format_price($item["max_salary"])?></p>
          <!-- <div class="location locationSuitable">
		  	<em class="mdi mdi-map-marker"></em>
            <p>Hồ Chí Minh |  Hà Nội</p>
          </div> -->
        </div>
      </div>
      <div class="top-icon"></div>
    </div>
  </div>
</div>  	
  <?php endforeach;?>
	




</div>
</div>
<div class="view-more"><a href="https://careerbuilder.vn/viec-lam/viec-lam-phu-hop-voi-ban-m1-vi.html" title="Xem thêm">Xem thêm<span class="mdi mdi-arrow-right"></span></a></div>
</div></section>
      <?php }?>
  
   <section class="cb-section cb-section-border-bottom" id="box-job-suggest" style="display:none"></section>
   <script src='https://ads1.careerbuilder.vn/js/cb/cb_homepage.js'></script>
   <script src='https://static.careerbuilder.vn/2012/library_v2.0.4.js'></script>
  
   <section class="cb-section">
      <div class="container">
         <div class="hot-jobs-list">
            <div class="tabs">
               <ul class="tabs-toggle">
                  <li class="active"><a class="pointer " alt="#tab-1">Việc Làm Nổi Bật</a></li>
                 
               </ul>
               <div class="tab-content" id="tab-1">
                  <div class="hot-jobs-slide" id="hot-jobs-slide">
                     <div class="swiper-container">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="row">
                                 <?php foreach ($job_post as $item): ?>
                                    <div class="col-lg-6 ">
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
                                    <p>test</p>
                                 </div> -->
                                 <!-- <ul class="welfare">
                                    <?php foreach ($job_welfare_detail as $welfare): 
                                      if($welfare["post_id"]==$item["id"]){ 
                                       echo "  <li>$welfare[welfare_type]</li>";
                                      }
                                   endforeach;?>

                                 </ul> -->
                              </div>
                              </div>
                           </div>
                        </div>
                     </div>
                                 </div>
                                <?php endforeach;?>
                           
                              </div>
                           </div>
                        </div>
                        <div class="swiper-bottom">
                           <div class="swiper-navigation">
                            
                              <div class="main-pagination">
                                 <div class="swiper-pagination"></div>
                              </div>
                           
                           </div>
                           <div class="view-more"><a href="<?= _WEB_ROOT.'/alljob' ?>">Xem tất cả việc làm<span
                              class="mdi mdi-arrow-right"></span></a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="banner-promo cb-section cb-section-border-bottom">
      <div class="container">
         <div class="row">
            <div class="col-sm-6 col-lg-3">
               <div class="item">
                  <div class="image loadAds" id="848">
                     <!--<script>OA_show(848);</script>-->
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="item">
                  <div class="image loadAds" id="849">
                     <!--<script>OA_show(849);</script>-->
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="item">
                  <div class="image loadAds" id="850">
                     <!--<script>OA_show(850);</script>-->
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="item">
                  <div class="image loadAds" id="851">
                     <!--<script>OA_show(851);</script>-->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="post-a-job lazy-bg" style="background-image: url(&quot;https://images.careerbuilder.vn/content/Product/bg-3_3.jpg&quot;);">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="text">
                  <span>Dành cho nhà tuyển dụng</span>
                  <h3>Bạn có vị trí cần đăng tuyển?</h3>
                  <p>Chúng tôi có những giải pháp tối ưu phù hợp với<br> nhiều loại hình công ty và tiêu chuẩn riêng</p>
               </div>
               <div class="post-a-job-btn"><a class="btn-gradient" href="" target="_blank">Đăng tin Tuyển dụng
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
