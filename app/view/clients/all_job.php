<script defer src="<?= _WEB_ROOT . "/app/public/assets/clients/js/all_job.js" ?>"></script>
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/all_job.css" ?>">
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/global/css/multi-select-dropdown.css" ?>">
<style>
   .multiselect-dropdown {
   background-color: white;
   width: 100%;
   height: 50px;
   padding: 0 40px 0 16px;
   border: 1px solid #e5e5e5;
   border-radius: 3px;
   color: #000;
   font-size: 15px;
   font-weight: 400;
   }
   span.placeholder {
   position: relative;
   top: 12px;
   }
   span.optext {
   position: relative;
   top: 12px;
   }
</style>
<main>
   <section class="page-heading-tool">
      <div class="container">
         <div class="tool-wrapper">
            <div class="close-input-filter"><em class="lnr lnr-cross"></em></div>
            <div id="dropdownSelected" style="display:none"></div>
            <div class="search-job">
               <form method="get" action="">
                  <div class="form-wrap">
                     <div class="form-group form-keyword">
                        <input value="<?= !empty($searchKeyword) ? $searchKeyword : '' ?>" type="search" class="keyword" name="keyword" id="keyword" placeholder="Chức danh, Tên công ty">
                        <div class="cleartext"><em class="mdi mdi-close-circle"></em></div>
                     </div>
                     <div class="form-group form-select-chosen">
                        <select id="industry" multiple name="industry[]" class="chosen-select-max-three" placeholder="Tất cả ngành nghề">
                           <?php foreach ($data_profession as $item) : ?>
                           <option <?php if (!empty($searchIndustry)) {
                              foreach ($searchIndustry as $value) {
                                 if ($value == $item["id"]) {
                                    echo 'selected';
                                 }
                              }
                              }  ?> value="<?= $item["id"] ?>"><?= $item["profession_name"] ?></option>
                           <?php endforeach; ?>
                        </select>
                     </div>
                     <div class="form-group form-select-chosen">
                        <!-- <select id="location"multiple name="location" class="chosen-select-max-three" data-placeholder="Tất cả địa điểm" >
                           <option value="">Chọn địa điểm</option>
                              
                           </select> -->
                        <select id="location" multiple name="location[]" class="chosen-select-max-three" placeholder="Tất cả địa điểm">
                           <option value="1">Thành phố Hà Nội</option>
                           <option value="2">Tỉnh Hà Giang</option>
                           <option value="4">Tỉnh Cao Bằng</option>
                           <option value="6">Tỉnh Bắc Kạn</option>
                           <option value="8">Tỉnh Tuyên Quang</option>
                           <option value="10">Tỉnh Lào Cai</option>
                           <option value="11">Tỉnh Điện Biên</option>
                           <option value="12">Tỉnh Lai Châu</option>
                           <option value="14">Tỉnh Sơn La</option>
                           <option value="15">Tỉnh Yên Bái</option>
                           <option value="17">Tỉnh Hoà Bình</option>
                           <option value="19">Tỉnh Thái Nguyên</option>
                           <option value="20">Tỉnh Lạng Sơn</option>
                           <option value="22">Tỉnh Quảng Ninh</option>
                           <option value="24">Tỉnh Bắc Giang</option>
                           <option value="25">Tỉnh Phú Thọ</option>
                           <option value="26">Tỉnh Vĩnh Phúc</option>
                           <option value="27">Tỉnh Bắc Ninh</option>
                           <option value="30">Tỉnh Hải Dương</option>
                           <option value="31">Thành phố Hải Phòng</option>
                           <option value="33">Tỉnh Hưng Yên</option>
                           <option value="34">Tỉnh Thái Bình</option>
                           <option value="35">Tỉnh Hà Nam</option>
                           <option value="36">Tỉnh Nam Định</option>
                           <option value="37">Tỉnh Ninh Bình</option>
                           <option value="38">Tỉnh Thanh Hóa</option>
                           <option value="40">Tỉnh Nghệ An</option>
                           <option value="42">Tỉnh Hà Tĩnh</option>
                           <option value="44">Tỉnh Quảng Bình</option>
                           <option value="45">Tỉnh Quảng Trị</option>
                           <option value="46">Tỉnh Thừa Thiên Huế</option>
                           <option value="48">Thành phố Đà Nẵng</option>
                           <option value="49">Tỉnh Quảng Nam</option>
                           <option value="51">Tỉnh Quảng Ngãi</option>
                           <option value="52">Tỉnh Bình Định</option>
                           <option value="54">Tỉnh Phú Yên</option>
                           <option value="56">Tỉnh Khánh Hòa</option>
                           <option value="58">Tỉnh Ninh Thuận</option>
                           <option value="60">Tỉnh Bình Thuận</option>
                           <option value="62">Tỉnh Kon Tum</option>
                           <option value="64">Tỉnh Gia Lai</option>
                           <option value="66">Tỉnh Đắk Lắk</option>
                           <option value="67">Tỉnh Đắk Nông</option>
                           <option value="68">Tỉnh Lâm Đồng</option>
                           <option value="70">Tỉnh Bình Phước</option>
                           <option value="72">Tỉnh Tây Ninh</option>
                           <option value="74">Tỉnh Bình Dương</option>
                           <option value="75">Tỉnh Đồng Nai</option>
                           <option value="77">Tỉnh Bà Rịa - Vũng Tàu</option>
                           <option value="79">Thành phố Hồ Chí Minh</option>
                           <option value="80">Tỉnh Long An</option>
                           <option value="82">Tỉnh Tiền Giang</option>
                           <option value="83">Tỉnh Bến Tre</option>
                           <option value="84">Tỉnh Trà Vinh</option>
                           <option value="86">Tỉnh Vĩnh Long</option>
                           <option value="87">Tỉnh Đồng Tháp</option>
                           <option value="89">Tỉnh An Giang</option>
                           <option value="91">Tỉnh Kiên Giang</option>
                           <option value="92">Thành phố Cần Thơ</option>
                           <option value="93">Tỉnh Hậu Giang</option>
                           <option value="94">Tỉnh Sóc Trăng</option>
                           <option value="95">Tỉnh Bạc Liêu</option>
                           <option value="96">Tỉnh Cà Mau</option>
                        </select>
                     </div>
                     <div class="form-group form-submit">
                        <button class="btn-gradient" onClick="return validataSearchHomePage('vi');">
                           <p>Tìm Ngay</p>
                           <span class="mdi mdi-magnify"></span>
                        </button>
                     </div>
                     <div style="margin-top:10px;" class="switch-group toollips switch-group-sp">
                        <div class="form-group">
                           <label for="work-home-fli">Work from home
                           <input id="work-home-fli" name="wrk_from_home" type="checkbox" value="1">
                           <span class="slider"></span> </label>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
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
            <div class="col-lg-12 col-custom-xxl-12">
               <div class="job-found">
                  <div class="job-found-amout">
                     <h1><?= $totalRecords ?> việc làm</h1>
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
               <?php if (count($job_post) == 0) { ?>
               <div class="no-search">
                  <div style="
                     text-align: center;
                     " class="image">
                     <figure>
                        <img src="	https://static.careerbuilder.vn/themes/careerbuilder/img/no-search.png" alt="">
                        <figcaption>
                           Chưa có công việc phù hợp với tiêu chí của
                           <?= $_GET["keyword"] ?? "" ?>
                        </figcaption>
                     </figure>
                  </div>
                  <div class="job-search-suggestions">
                     <p style="line-height:22px; padding-top:20px; color:#505050;text-align:center">
                        <strong>Gợi ý tìm việc:</strong><br>
                        • Tìm kiếm với từ khoá cụ thể như vị trí công việc. Ví dụ: Nhân viên kinh doanh hoặc Kế toán viên ...
                        <br>
                        • Tìm kiếm theo ngành nghề. <a href="https://careerbuilder.vn/vi/tim-viec-nhanh.html" style="color:#0078c9">Xem ngay</a>
                        <br>
                        • Tìm kiếm theo danh sách việc làm mới cập nhật và lọc theo tỉnh/thành phố. <a href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-vi.html " style="color:#0078c9">Xem ngay </a>
                     </p>
                  </div>
                  <div class="apply-now-banner">
                     <div class="apply-now-content"></div>
                  </div>
               </div>
               <?php } else { ?>
               <div class="main-slide">
                  <div class="jobs-side-list" id="jobs-side-list-content">
                     <?php foreach ($job_post as $item) : ?>
                     <div class="job-item " id="job-item-<?= $item["id"] ?>">
                        <div class="figure">
                           <div class="image">
                              <a href="" target="_blank" title="Ms Huong">
                              <img class="lazy-img" src="<?= _WEB_ROOT . '/app/public/assets/employer/images/' . $item["logo"] ?>" src="../kiemviecv32/images/graphics/blank.gif" alt="Ms Huong">
                              </a>
                           </div>
                           <div class="figcaption">
                              <div class="title ">
                                 <h2>
                                    <a class="job_link" data-id="35BAE5BD" href="<?= _WEB_ROOT . '/Alljob/detail/' . $item["id"] ?>" title="VIDEO TRANSLATOR  UP TO 13MIL">
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
                                       <p><em class="fa fa-usd"></em>Lương: <?= format_price($item["min_salary"]) . '-' . format_price($item["max_salary"]) . ' VND' ?></p>
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
                                 <style>
                                    form>a.saved,
                                    form a.saved button {
                                    color: #e8c80d;
                                    }
                                 </style>
                                 <div style="top:50px;" class="">
                                    <ul>
                                       <li>
                                          <form method="post" action="http://localhost//itjobs/Alljob/jobsaved">
                                             <input type="hidden" name="job_id" value="<?= $item["id"] ?> ">
                                             <a class="toollips save-job <?= ($item["job_saved_id"] == $item["id"] && $item["job_saved_account_id"] == $seeker_id) ? 'saved' : '' ?> " href="javascript:void(0);">
                                             <i class="mdi mdi-heart-outline"></i>
                                             <button type="submit" name="savedjob_full" style="background-color: transparent;" class="text">Lưu việc làm</button>
                                             </a>
                                          </form>
                                       </li>
                                    </ul>
                                    <div class="time">
                                       <em class="mdi mdi-calendar"></em>
                                       <time><?= formatDate($item["posted_date"]) ?></time>
                                       <div class="toolip">
                                          <p>Ngày cập nhật</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php endforeach; ?>
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
                        <?php for ($num = 1; $num <= $totalPages; $num++) {
                           if ($num != $current_page) { ?>
                        <li>
                           <a href="<?= _WEB_ROOT . '/Alljob/?page=' . $num ?><?= !empty($searchKeyword) ? "&keyword=$searchKeyword" : "" ?><?php if (!empty($searchIndustry)) {
                              foreach ($searchIndustry as $item) {
                                 echo "&industry%5B%5D=$item";
                              }
                              } ?><?php if (!empty($searchIndustry)) {
                              foreach ($searchLocation as $item) {
                                 echo "&location%5B%5D=$item";
                              }
                              } ?>" <?= !empty($wrk_from_home) ? "&wrk_from_home=$wrk_from_home" : "" ?>><?= $num ?></a>
                        </li>
                        <?php } else {  ?>
                        <li class="active">
                           <a href="<?= _WEB_ROOT . '/Alljob/?page=' . $current_page ?> "><?= $current_page ?></a>
                        </li>
                        <?php } ?>
                        <?php } ?>
                     </ul>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </section>
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