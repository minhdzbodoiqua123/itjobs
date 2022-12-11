<link rel="stylesheet" href="<?= _WEB_ROOT."/app/public/assets/employer/css/tim_ung_vien.css" ?>">
<script defer src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script defer src="<?= _WEB_ROOT."/app/public/assets/employer/js/tim_ung_vien.js"?>"></script>
<body>
   <main>
      <div id="dropdownSelected"style="display:none;"></div>
      <section class="employer-navbar-2-1">
  <div class="container">
    <div class="category-nav">
      <p>Danh Mục</p>
      <em class="mdi mdi-chevron-down"></em> </div>
    <div class="main-wrap">
    <div class="left-wrap">
                        <ul class="list-menu">
                            <li> <a href="<?= _WEB_ROOT.'/employer/dashboard' ?>" title="Dashboard">Dashboard</a> </li>
                            <li class="active"> <a href="<?= _WEB_ROOT.'/employer/hrcentral/posting' ?>" title="Quản Lý Đăng Tuyển">Quản Lý Đăng Tuyển</a> </li>
                            <li class=""> <a href="<?= _WEB_ROOT.'/employer/hrcentral/manageresume' ?>" class="active" title="Quản Lý  Ứng Viên">Quản Lý  Ứng Viên</a> </li>
                           
                           
                            <li>
             
          <a href="<?= _WEB_ROOT.'/employer/hrcentral/accounts/edit_employer"'?>" title=" Tài Khoản"> Tài Khoản</a>
          </li>
                   
                        </ul>
                    </div>
      <div class="right-wrap">
            <ul class="list-menu">
                        <li> <a href="<?= _WEB_ROOT . '/employer/tim_ung_vien' ?>"> <em class="material-icons">find_in_page</em> Tìm Hồ Sơ </a> </li>
                        <li> <a class="but-createjob" href="http://localhost//itjobs/employer/hrcentral/posting"> <em class="material-icons">assignment_ind</em> Đăng Tuyển Dụng </a> </li>
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
                  <form name="frm_search" id="frm_search" method="GET" >
                     <div class="form-wrap form-normal">
                        <div class="form-group form-text">
                           <label>Nội dung hồ sơ</label>
                           <input type="text" name="keyword" id="keyword" placeholder="Nhập từ khóa" autocomplete="off" value="<?= $_GET["keyword"] ?? "" ?>">
                           <!-- <div class="search_option">
                              <span>Tìm</span>
                              <label><input type="radio" name="keyword_match" value="all" checked="checked"/> Nội dung hồ sơ</label>
                              <label><input type="radio" name="keyword_match" value="title" /> Chức danh/ Vị trí</label>
                           </div> -->
                        </div>
                        <style>
                           .multiselect-dropdown{
                           background-color: white;
                           }
                        </style>
                        <div class="form-group form-select-chosen">
                           <label>Ngành nghề</label>
                           <select 
                          
                           name="list_industries[]" id="industry" class="chosen-select-max-three" multiple placeholder="Tất cả ngành nghề">
                           <?php foreach ($data_profession as $item):?>

   <option 
   <?php if (!empty($list_industries)) {
                                          foreach ($list_industries as $value) {
                                             if ($value == $item["id"]) {
                                                echo 'selected';
                                             }
                                          }
                              }  ?>
   value="<?= $item["id"] ?>" ><?= $item["profession_name"] ?></option>

                        <?php   endforeach;?>
                           </select>
                        </div>
                        <div class="form-group form-select-chosen">
                           <label>Địa điểm</label>
                 
                       <select name="list_location[]" id="location" class="chosen-select-max-three" multiple placeholder="Tất cả địa điểm">
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
                        <div class="form-group form-select">
                           <label>Trạng thái tìm việc</label>
                           <select name="urgentjob" id="urgentjob">
                              <option value="0">Tất cả</option>
                              <option value="1" >Ứng viên tìm việc khẩn cấp</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group form-submit btn-submit-top form-hidden-advanced">
                        <button class="btn-gradient btn-submit btn_search_resume" type="submit">
                        <em class="material-icons">search</em>Tìm
                        </button>
                     </div>
                     <!-- <div class="form-group form-link-advanced form-hidden-advanced">
                        <a class="btn-history" href="https://careerbuilder.vn/vi/employers/hrcentral/search-history"><em class="material-icons">update</em><span>Lịch Sử Tìm Kiếm</span></a>
                        <a class="btn-advanced btn-show" href="javascript:void(0)"><em class="material-icons">zoom_in</em><span>Tìm kiếm nâng cao</span></a>
                     </div> -->
                     <!-- <div class="form-wrap form-wrap-advanced">
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
                              <a class="btn-advanced btn-less  " href="javascript:void(0)" id="expand_search"><em class="material-icons">zoom_out</em><span>Thu gọn tìm kiếm</span></a>
                           </div>
                        </div>
                     </div> -->
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
                           
            <div class="box-resume-search-search-result">
               <!-- <div class="search-result-top">
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
               </div> -->
               <div class="main-jobs-posting">
        <!-- <div class="heading-jobs-posting">
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
        </div> -->
        <div class="boding-jobs-posting">
           <div class="table table-jobs-posting">
              <table>
                 <thead>
                    <tr>
                       <th width="38%">Ứng Viên</th>
                       <th width="10%">
                          <a href="https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/kng_desc">
                          Kinh nghiệm
                          </a>
                       </th>
                       <th width="20%">
                          <a href="https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/lng_desc">
                          Lương
                          </a>
                       </th>
                       <th width="10%">Nơi làm việc</th>
                    
                       <th width="32%">Thao tác</th>
                    </tr>
                 </thead>
                 <tbody class="data_resume">
                           <?php foreach ($data_resume as $item):?>
                              <tr>
                 <td>
                    <div class="title">
                       <div class="job-name">
                          <a class="job-title" href="https://careerbuilder.vn/vi/employers/popup/resumeinfo/35A4E900/35A4E900/nhan-vien-tham-dinh/361DF78D.html?&highlight=Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n" target="_blank" title="Nhân viên Thẩm định">
                          <b><?= $item["resume_title"] ?></b>
                          </a>
                          <!-- <p class="status viewed chkBuy" data-idcheck="361DF78D">
                             <em class="material-icons">visibility </em> Đã xem&nbsp;
                          </p> -->
                         
                       </div>
                       <div class="status">
                       </div>
                       <a class="name" href="https://careerbuilder.vn/vi/employers/popup/resumeinfo/35A4E900/35A4E900/nhan-vien-tham-dinh/361DF78D.html?&highlight=Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n">
                        <?= $item["lastname"].' '.$item["firstname"] ?>
                       </a>
                       <a class="attach-button" href="javascript:;">
                       </a>
                       <ul class="info-list">
                          <li>
                             <p> <strong>Học vấn: </strong><?= $item["degree_name"] ?></p>
                          </li>
                          <li>
                             <p> <strong>Cấp bậc: </strong><?= $item["position"] ?></p>
                          </li>
                       </ul>
                    </div>
                  
                 </td>
                 <td>
                    <p><?= $item["year_of_experience"] ?> năm</p>
                 </td>
                 <td>
                    <p>
                     <?= $item["min_salary"].'-'.$item["max_salary"].'VND' ?>
         
                    </p>
                 </td>
                 <td class="location"data-provinces="<?= $item["provinces"] ?>">
             
                 </td>
                
                 <td>
                    <ul class="list-manipulation">
                   
                       
                       <li><a href="javascript:void(0)" onclick="showFoldersSelected('361DF78D');" class="btn-save-folder" href="javascript:void(0)" title="Lưu vào thư mục"><em class="material-icons">folder_shared </em></a></li>
                       
                    </ul>
                 </td>
              </tr>
                         <?php  endforeach;?>
               
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
              
               <input type="hidden" name="experience_from" value="" />
               <input type="hidden" name="experience_to" value="" />
               <input type="hidden" name="resume_date" value="" />
               <input type="hidden" name="from_age" value="" />
               <input type="hidden" name="to_age" value="" />
               <input type="hidden" name="resume_time_kind" value="0" />
               <div class="form-wrap">
                  <div class="form-group form-text">
                     <label for="">Tên thiết lập</label>
                     <input type="text" name="savesearch_title" id="savesearch_title" placeholder="" value="">
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