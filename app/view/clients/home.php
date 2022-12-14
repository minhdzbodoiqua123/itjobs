
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
               <h1>????n l???y th??nh c??ng v???i <span> 25,603  c?? h???i ngh??? nghi???p </span></h1>
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
    font-weight: 500;"type="search" class="prompt keyword" autofocus="" name="keyword" id="keyword" placeholder="Ch???c danh, K??? n??ng, T??n c??ng ty" autocomplete="off">
                        <div class="cleartext"><em class="mdi mdi-close-circle"></em></div>
                     </div>
                  </div>
                  <div class="advanced-search overflow" style="display: block;">
                     <div class="row">
                        <div class="form-group col-sm-6">
                           <!-- <label><span class="mdi mdi-map-marker"></span></label> -->
                          <select id="location" multiple name="location[]" class="chosen-select-max-three" placeholder="T???t c??? ?????a ??i???m" style="display: none;"><option value="1">Th??nh ph??? H?? N???i</option><option value="2">T???nh H?? Giang</option><option value="4">T???nh Cao B???ng</option><option value="6">T???nh B???c K???n</option><option value="8">T???nh Tuy??n Quang</option><option value="10">T???nh L??o Cai</option><option value="11">T???nh ??i???n Bi??n</option><option value="12">T???nh Lai Ch??u</option><option value="14">T???nh S??n La</option><option value="15">T???nh Y??n B??i</option><option value="17">T???nh Ho?? B??nh</option><option value="19">T???nh Th??i Nguy??n</option><option value="20">T???nh L???ng S??n</option><option value="22">T???nh Qu???ng Ninh</option><option value="24">T???nh B???c Giang</option><option value="25">T???nh Ph?? Th???</option><option value="26">T???nh V??nh Ph??c</option><option value="27">T???nh B???c Ninh</option><option value="30">T???nh H???i D????ng</option><option value="31">Th??nh ph??? H???i Ph??ng</option><option value="33">T???nh H??ng Y??n</option><option value="34">T???nh Th??i B??nh</option><option value="35">T???nh H?? Nam</option><option value="36">T???nh Nam ?????nh</option><option value="37">T???nh Ninh B??nh</option><option value="38">T???nh Thanh H??a</option><option value="40">T???nh Ngh??? An</option><option value="42">T???nh H?? T??nh</option><option value="44">T???nh Qu???ng B??nh</option><option value="45">T???nh Qu???ng Tr???</option><option value="46">T???nh Th???a Thi??n Hu???</option><option value="48">Th??nh ph??? ???? N???ng</option><option value="49">T???nh Qu???ng Nam</option><option value="51">T???nh Qu???ng Ng??i</option><option value="52">T???nh B??nh ?????nh</option><option value="54">T???nh Ph?? Y??n</option><option value="56">T???nh Kh??nh H??a</option><option value="58">T???nh Ninh Thu???n</option><option value="60">T???nh B??nh Thu???n</option><option value="62">T???nh Kon Tum</option><option value="64">T???nh Gia Lai</option><option value="66">T???nh ?????k L???k</option><option value="67">T???nh ?????k N??ng</option><option value="68">T???nh L??m ?????ng</option><option value="70">T???nh B??nh Ph?????c</option><option value="72">T???nh T??y Ninh</option><option value="74">T???nh B??nh D????ng</option><option value="75">T???nh ?????ng Nai</option><option value="77">T???nh B?? R???a - V??ng T??u</option><option value="79">Th??nh ph??? H??? Ch?? Minh</option><option value="80">T???nh Long An</option><option value="82">T???nh Ti???n Giang</option><option value="83">T???nh B???n Tre</option><option value="84">T???nh Tr?? Vinh</option><option value="86">T???nh V??nh Long</option><option value="87">T???nh ?????ng Th??p</option><option value="89">T???nh An Giang</option><option value="91">T???nh Ki??n Giang</option><option value="92">Th??nh ph??? C???n Th??</option><option value="93">T???nh H???u Giang</option><option value="94">T???nh S??c Tr??ng</option><option value="95">T???nh B???c Li??u</option><option value="96">T???nh C?? Mau</option></select>
                           <!-- <div class="chosen-container chosen-container-multi" title="" id="location_chosen" style="width: 0px;">
                              <ul class="chosen-choices">
                                 <li class="search-field">
                                    <input class="chosen-search-input default" type="search" autocomplete="off" value="T???t c??? ?????a ??i???m" style="width: 134.387px;">
                                 </li>
                              </ul>
                              <div class="chosen-drop">
                                 <ul class="chosen-results"></ul>
                              </div>
                           </div> -->
                        </div>
                        <div class="form-group col-sm-6">
                        <select id="industry" multiple="" name="industry[]" class="chosen-select-max-three" placeholder="T???t c??? ng??nh ngh???" style="display: none;">
                                                         <option value="1">Ti???p th??? / Marketing</option>

                                                         <option value="2">CNTT - Ph???n m???m</option>

                                                         <option value="3">CNTT - Ph???n c???ng / M???ng</option>

                                                         <option value="4">D???ch v??? kh??ch h??ng</option>

                                                         <option value="28">Du l???ch</option>

                                                         <option value="29">Ng??n h??ng</option>

                                                         <option value="30">B??n l??? / B??n s??? </option>

                                                         <option value="31"> B??n h??ng / Kinh doanh</option>

                                                         <option value="32"> Th???c ph???m &amp; ????? u???ng</option>

                                                         <option value="33">Ki???n tr??c</option>

                                                         <option value="34"> N???i ngo???i th???t</option>

                                                         <option value="35"> X??y d???ng</option>

                                                         <option value="36">K??? to??n</option>

                                                         <option value="37">Ki???m to??n</option>

                                                         <option value="39"> Ti???p th??? tr???c tuy???n</option>

                                                         <option value="40"> B???t ?????ng s???n</option>

                                                         <option value="42"> H??nh ch??nh / Th?? k??</option>

                                                         <option value="43"> Nh?? h??ng / Kh??ch s???n</option>

                                                         <option value="44">Lu???t / Ph??p l??</option>

                                                         <option value="46"> Nh??n s???</option>

                                                         <option value="47"> C?? kh?? / ?? t?? / T??? ?????ng h??a</option>

                                                         <option value="48"> Qu???ng c??o / ?????i ngo???i / Truy???n Th??ng</option>

                                                         <option value="49">Th???y s???n / H???i s???n</option>

                                                         <option value="50">M??? thu???t / Ngh??? thu???t / Thi???t k???</option>

                                                         <option value="51"> T??i ch??nh / ?????u t??</option>

                                                         <option value="52"> Qu???n l?? ??i???u h??nh</option>

                                                         <option value="53">??i???n / ??i???n t??? / ??i???n l???nh</option>

                                                         <option value="54">Xu???t nh???p kh???u</option>

                                                         <option value="55">M???i t???t nghi???p / Th???c t???p</option>

                                                         <option value="56">D???t may / Da gi??y / Th???i trang</option>

                                                         <option value="57">D?????c ph???m</option>

                                                         <option value="58">Bi??n phi??n d???ch</option>

                                                         <option value="59">B???o hi???m</option>

                                                         <option value="60">An ninh / b???o v???</option>

                                                         <option value="61">Ch??n nu??i / th?? y</option>

                                                         <option value="62">B??u ch??nh vi???n th??ng</option>

                                                         <option value="63">C??ng ngh??? sinh h???c</option>

                                                         <option value="64">C??ng ngh??? th???c ph???m / Dinh d?????ng</option>

                                                         <option value="65">D???u kh??</option>

                                                         <option value="66">Gi??o d???c / ????o t???o</option>

                                                         <option value="67">????? g??? </option>

                                                         <option value="68">H??ng gia d???ng / Ch??m s??c c?? nh??n</option>

                                                         <option value="69">H??ng kh??ng</option>

                                                         <option value="70">H??a h???c</option>

                                                         <option value="71">Gi???i tr??</option>

                                                         <option value="72">Kho??ng s???n</option>

                                                         <option value="73">L??m nghi???p</option>

                                                         <option value="74">T?? v???n</option>

                                                         <option value="75">B???o tr?? / S???a ch???a</option>

                                                         <option value="76">Y t??? / Ch??m s??c s???c kh???e</option>

                                                         <option value="77">Th???y l???i</option>

                                                         <option value="78">Truy???n h??nh / B??o tr?? / Bi??n t???p</option>

                                                         <option value="79">T??? ch???c s??? ki???n</option>

                                                         <option value="80">In ???n / Xu???t b???n</option>

                                                         <option value="81">M??i tr?????ng</option>

                                                         <option value="82">N??ng nghi???p</option>

                                                         <option value="83">An to??n lao ?????ng</option>

                                                         <option value="84">Ch???ng kho??n</option>

                                                         <option value="85">Th???ng k??</option>

                                                         <option value="86">V???n chuy???n / Giao nh???n / Kho v???n</option>

                           
                        </select>
                         
                        </div>
                        <!-- <div class="form-group col-sm-6">
                           <select name="salary" id="salary" class="chosen-select chosen-select-max-one">
                              <option value="">Ch???n m???c l????ng</option>
                              <option value="3">T???  3.000.000 ??</option>
                              <option value="5">T???  5.000.000 ??</option>
                              <option value="7">T???  7.000.000 ??</option>
                              <option value="10">T???  10.000.000 ??</option>
                              <option value="15">T???  15.000.000 ??</option>
                              <option value="20">T???  20.000.000 ??</option>
                              <option value="30">T???  30.000.000 ??</option>
                              <option value="40">T??? 40.000.000 ??</option>
                              <option value="50">T??? 50.000.000 ??</option>
                              <option value="60">T??? 60.000.000 ??</option>
                              <option value="70">T??? 70.000.000 ??</option>
                           </select>
                          
                        </div>
                        <div class="form-group col-sm-6">
                           <select id="level" name="level" class="chosen-select chosen-select-max-one" data-placeholder="C???p b???c"  >
                              <option value="">Ch???n c???p b???c</option>
                              <option value="sinh-vien-thuc-tap-sinh_1">Sinh vi??n/ Th???c t???p sinh</option>
                              <option value="moi-tot-nghiep_2">M???i t???t nghi???p</option>
                              <option value="nhan-vien_3">Nh??n vi??n</option>
                              <option value="truong-nhom-giam-sat_4">Tr?????ng nh??m / Gi??m s??t</option>
                              <option value="quan-ly_5">Qu???n l??</option>
                              <option value="quan-ly-cap-cao_11">Qu???n l?? c???p cao</option>
                              <option value="dieu-hanh-cap-cao_12">??i???u h??nh c???p cao</option>
                           </select>
                           
                        </div> -->
                     </div>
                  </div>
               </div>
               <!-- <div class="reset-form"style="margin-top:10px;"><a href="javascript:void(0);"><i class="fa fa-rotate-right"></i> Reset</a></div> -->
            
               <div class="find-jobs">
                  <button class="btn-gradient" onclick="return validataSearchHomePage('vi');">T??M VI???C NGAY</button>
               </div>
            </form>
         </div>
         <div class="box-footer">
            <div class="content">
               <p>????ng h??? s?? ngh??? nghi???p ????? d??? d??ng ???ng tuy???n nhanh</p>
            </div>
            <div class="upload-resume">               <button class="btn-gradient" onclick="window.location=''">C???p nh???t h??? s??</button>
            </div>
         </div>
      </div>
   </div>
</section>
   </div>
   <?php if(isset($suitable_job)) {?>
      <section class="cb-section cb-section-border-bottom" id="box-job-suggest" style=""><div class="container">
<div class="cb-title cb-title-center">
  <h2>Vi???c l??m ph?? h???p v???i b???n</h2>
</div>
<div class="recommend-job-list">
  <div class="row">
  	<?php foreach ($suitable_job as $item):?>
      <div class="col-lg-6  col-xl-3">
  <div class="job-item">
    <div class="figure">
      <div class="image"><a  href="<?= _WEB_ROOT.'/alljob/detail/'.$item['id'] ?>" title="<?= $item["id"] ?>"><img src="<?= _WEB_ROOT.'/app/public/assets/employer/images/'.$item["logo"] ?>" alt="<?= $item["company_name"] ?>"></a></div>
      <div class="figcaption">
        <div class="title"><a href="<?= _WEB_ROOT.'/Alljob/detail/'.$item["id"] ?>" title="Sales Supervisor"><?= $item["job_title"] ?></a></div>
        <div class="caption">
		  <a class="company-name" href="<?= _WEB_ROOT.'/alljob/'.$item['id'] ?>" title="<?= $item["company_name"] ?>" target="_blank"<?= $item["company_name"] ?></a>
          <p class="salary"><em class="fa fa-usd"></em>L????ng:<?= format_price($item["min_salary"]).'-'.format_price($item["max_salary"])?></p>
          <!-- <div class="location locationSuitable">
		  	<em class="mdi mdi-map-marker"></em>
            <p>H??? Ch?? Minh |  H?? N???i</p>
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
<div class="view-more"><a href="https://careerbuilder.vn/viec-lam/viec-lam-phu-hop-voi-ban-m1-vi.html" title="Xem th??m">Xem th??m<span class="mdi mdi-arrow-right"></span></a></div>
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
                  <li class="active"><a class="pointer " alt="#tab-1">Vi???c L??m N???i B???t</a></li>
                 
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
                                    <font color="ff0000">(M???i)</font>
                                    </span> </a>
                                 </h2>
                              </div>
                            <div style="display:flex;justify-content: space-between;">
                            <div class="caption">
                           
                                 <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/ms-huong.35A8DDF9.html" title="Ms Huong">
                                 <?= $item["company_name"] ?>
                                 </a>
                                 <div class="salary">
                                    <p><em class="fa fa-usd"></em>L????ng: <?= format_price($item["min_salary"]).'-'.format_price($item["max_salary"]).' VND' ?></p>
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
                           <div class="view-more"><a href="<?= _WEB_ROOT.'/alljob' ?>">Xem t???t c??? vi???c l??m<span
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
                  <span>D??nh cho nh?? tuy???n d???ng</span>
                  <h3>B???n c?? v??? tr?? c???n ????ng tuy???n?</h3>
                  <p>Ch??ng t??i c?? nh???ng gi???i ph??p t???i ??u ph?? h???p v???i<br> nhi???u lo???i h??nh c??ng ty v?? ti??u chu???n ri??ng</p>
               </div>
               <div class="post-a-job-btn"><a class="btn-gradient" href="" target="_blank">????ng tin Tuy???n d???ng
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
