<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/global/css/multi-select-dropdown.css" ?>">
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/detail_job.css" ?>">
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/bootstrap.css" ?>">

<script defer src="<?= _WEB_ROOT . "/app/public/assets/clients/js/detail_job.js" ?>"></script>

<main>



    <section class="search-result-list-detail template-2">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 mb-15">
                    <section class="apply-now-banner  ">
                        <div class="image"><img src="<?= _WEB_ROOT . '/app/public/assets/employer/images/' . $job_post["banner"] ?>" alt="Công ty TNHH Thương Mại Dịch Vụ Du Lịch Ánh Sao Thiên - AST TRAVEL ">
                        </div>
                        <div class="apply-now-content">
                            <div class="job-desc">
                                <h1 class="title"><?= $job_post["job_title"] ?></h1>
                                <a class="employer job-company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-thuong-mai-dich-vu-du-lich-anh-sao-thien-ast-travel.35A7769F.html"><?= $job_post["company_name"] ?> </a>
                            </div>
                            <div class="apply-type">
                                <?php if (!empty($job_post_activity)) { ?>
                                    <div class="apply-now-right">
                                        <div class="apply-now-btn  success">
                                            <a href="javascript:void(0);" class="btn-gradient"> Đã Nộp Ứng Tuyển </a>
                                        </div>
                                    </div>
                                <?php } else { ?>

                                    <div class="apply-now-btn ">
                                        <a href="javascript:void(0);" class="btn-gradient btnApplyClick" data-id="<?= $job_post["id"] ?>">
                                            Nộp Đơn Ứng Tuyển
                                        </a>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-12 col-custom-xxl-12">
                    <div class="tabs">
                        <nav class="job-result-nav">
                            <ul class="tabs-toggle">
                                <li id="tabs-job-detail"><a href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-no-phai-thu.35BB02B3.html" data-href="#tab-1" title="Chi tiết">Chi tiết</a></li>
                                <li id="tabs-job-company"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-thuong-mai-dich-vu-du-lich-anh-sao-thien-ast-travel.35A7769F.html" data-href="#tab-2" title="Tổng quan công ty">Tổng quan công ty</a></li>
                            </ul>
                            <div class="job-detail-tool">
                                <!-- <ol class="tabs-saved">
                                        <li>
                                            <a class="toollips save-job chk_save_35BB02B3 " href="javascript:void(0);" data-id="35BB02B3" onclick="popuplogin()">
    <i class="mdi mdi-heart-outline"></i>
    	<div class="toolip">
		<p>Lưu việc làm</p>
	</div>
    </a>
                                        </li>
                                        <li>
                                            <div class="dropdown"> <i class="mdi mdi-share-variant"></i>
                                                <div class="dropdown-menu">
                                                    <div class="social-list">
                                                        <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-no-phai-thu.35BB02B3.html&pubid=ra-559220ee7f9c15d6&title=KẾ TOÁN NỢ PHẢI THU&ct=1&pco=tbxnj-1.0"><i class="fa fa-facebook"></i></a>
                                                        <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-no-phai-thu.35BB02B3.html&pubid=ra-559220ee7f9c15d6&title=KẾ TOÁN NỢ PHẢI THU&ct=1&pco=tbxnj-1.0"><i class="fa fa-linkedin"></i></a>
                                                        <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/gmail/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-no-phai-thu.35BB02B3.html&pubid=ra-559220ee7f9c15d6&title=KẾ TOÁN NỢ PHẢI THU&ct=1&pco=tbxnj-1.0"><i class="fa fa-google"></i></a>
                                                        <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="2" data-color="white" data-customize=false></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="report-job toollips" href="javascript:void(0)"><i class="fa fa-flag-o"></i><div class="toolip">
  <p> Báo xấu </p>
</div>
</a> </li>
                                    </ol> -->
                            </div>
                        </nav>
                        <div class="tab-content" id="tab-1">
                            <section class="job-detail-content">
                                <div class="bg-blue">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6 item-blue">
                                            <div class="detail-box">
                                                <div class="map">
                                                    <strong><em class="mdi mdi-map-marker"></em>Địa điểm</strong>
                                                    <p>
                                                    <p class="addressCompany">Hồ Chí Minh</p>
                                                    </p>

                                                </div>
                                                <?php if ($job_post["wrk_from_home"] == 1) { ?>
                                                    <div class="type-of-work">
                                                        <strong><em class="mdi mdi-home-city"></em>Phương thức làm việc</strong>
                                                        <ul>
                                                            <li>Việc làm từ nhà</li>
                                                        </ul>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 item-blue">
                                            <div class="detail-box has-background">
                                                <ul>
                                                    <li> <strong><em class="mdi mdi-update"> </em>Ngày cập nhật</strong>
                                                        <p><?= formatDate($job_post["posted_date"]); ?></p>
                                                    </li>
                                                    <li> <strong> <em class="mdi mdi-briefcase"></em>Ngành nghề</strong>
                                                        <p>

                                                            <?php
                                                            $valueStr = '';

                                                            foreach ($job_profession_detail as $item) {
                                                                $valueStr .= "$item[profession_name] " . ',';
                                                            }
                                                            $valueStr = rtrim($valueStr, ',');
                                                            echo $valueStr;
                                                            ?>
                                                        </p>
                                                    </li>
                                                    <li> <strong><em class="mdi mdi-briefcase-edit"> </em>Hình thức</strong>
                                                        <p> <?php
                                                            $valueStr = '';
                                                            foreach ($job_type_detail as $item) {
                                                                $valueStr .= "$item[job_type] " . ',';
                                                            }
                                                            $valueStr = rtrim($valueStr, ',');
                                                            echo  $valueStr;
                                                            ?></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 item-blue">
                                            <div class="detail-box has-background">
                                                <ul>
                                                    <li><strong><i class="fa fa-usd"></i>Lương</strong>
                                                        <p><?= format_price($job_post["min_salary"]) . '-' . format_price($job_post["max_salary"]) . ' VND'  ?></p>
                                                    </li>
                                                    <li>
                                                        <strong><i class="fa fa-briefcase"></i>Kinh nghiệm</strong>
                                                        <p>
                                                            <?php
                                                            switch ($job_post["job_experience_id"]) {
                                                                case '1':
                                                                    echo "Không yêu cầu kinh nghiệm";
                                                                    break;
                                                                case '3':
                                                                    echo "Chưa có kinh nghiệm";

                                                                    break;
                                                                default:
                                                                    echo   $job_experience_detail["JOB_FROMEXPERIENCE"] . '-' . $job_experience_detail["JOB_TOEXPERIENCE"] . ' Năm';
                                                                    break;
                                                            }

                                                            ?>
                                                        </p>
                                                    </li>
                                                    <li><strong><i class="mdi mdi-account"></i>Cấp bậc</strong>
                                                        <p><?= $job_post["position"] ?></p>
                                                    </li>
                                                    <li><strong><i class="mdi mdi-calendar-check"></i>Hết hạn nộp</strong>
                                                        <p><?= formatDate($job_post["end_date"]) ?></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-row">
                                    <h2 class="detail-title">Phúc lợi </h2>
                                    <ul class="welfare-list">
                                        <?php foreach ($job_welfare_detail as $item) { ?>

                                            <li><span></span> <?= $item["welfare_type"] ?></li>
                                        <?php   } ?>


                                    </ul>





                                </div>
                                <div class="detail-row reset-bullet">
                                    <h2 class="detail-title">Mô tả Công việc</h2>
                                    <?= $job_post["job_desc"] ?>

                                </div>
                                <div class="detail-row" reset-bullet>
                                    <h2 class="detail-title">Yêu Cầu Công Việc</h2>
                                    <?= $job_post["job_request"] ?>

                                </div>


                                <!-- <div class="share-this-job">
                                        <span>Chia sẻ việc làm này:</span>
                                        <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-no-phai-thu.35BB02B3.html&pubid=ra-559220ee7f9c15d6&title=KẾ TOÁN NỢ PHẢI THU&ct=1&pco=tbxnj-1.0"> <i class="fa fa-facebook"></i> </a>
                                        <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-no-phai-thu.35BB02B3.html&pubid=ra-559220ee7f9c15d6&title=KẾ TOÁN NỢ PHẢI THU&ct=1&pco=tbxnj-1.0">  <i class="fa fa-linkedin"></i></a>
                                        <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/gmail/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-no-phai-thu.35BB02B3.html&pubid=ra-559220ee7f9c15d6&title=KẾ TOÁN NỢ PHẢI THU&ct=1&pco=tbxnj-1.0">  <i class="fa fa-google"></i></a>
                                        <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="2" data-color="white" data-customize=false></div>

                                    </div> -->

                                <!-- <div class="job-tags ">
                                        <h2>Job tags / skills</h2>
                                        <ul>
                                            <li><a href="https://careerbuilder.vn/vi/tag/thong-ke.html" title=" thống kê"> thống kê</a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/ke-toan.html" title=" Kế toán "> Kế toán </a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/nhan-vien-ke-toan.html" title=" Nhân viên kế toán"> Nhân viên kế toán</a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/ke-toan-vien.html" title=" Kế toán viên"> Kế toán viên</a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/ke-toan-cong-no.html" title=" Kế toán công nợ"> Kế toán công nợ</a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/ke-toan-thanh-toan.html" title=" Kế toán thanh toán"> Kế toán thanh toán</a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/nhan-vien-ke-toan-cong-no.html" title=" Nhân viên kế toán công nợ"> Nhân viên kế toán công nợ</a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/cong-no.html" title=" công nợ "> công nợ </a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/receivable-accountant.html" title=" Receivable accountant"> Receivable accountant</a></li>
                                            <li><a href="https://careerbuilder.vn/vi/tag/accountant.html" title=" Accountant"> Accountant</a></li>
                                        </ul>
                                    </div> -->

                                <div class="job-detail-bottom">
                                    <div class="job-detail-bottom-wrapper">
                                        <div class="apply-now-content">
                                            <div style="display:flex;gap:5px;" class="job-desc">
                                                <form method="post" action="<?= _WEB_ROOT . '/Alljob/jobsaved' ?>">
                                                    <input type="hidden" name="job_id" value="<?= $job_id ?>">
                                                    <a class="toollips save-job <?= !empty($job_saved) ? 'saved' : '' ?> " href="javascript:void(0);">
                                                        <i class="mdi mdi-heart-outline"></i>
                                                        <button type="submit" name="savedjob" style="background-color: transparent;" class="text">Lưu việc làm</button>
                                                    </a>
                                                </form>

                                                <a data-bs-toggle="modal" data-bs-target="#formReport" class="report-job toollips" href="javascript:void(0)"><i class="fa fa-flag-o"></i><span>Báo xấu</span>
                                                    <div class="toolip">
                                                        <p> Báo xấu </p>
                                                    </div>
                                                </a>
                                                <div class="report-modal" style="display: none">
                                                    <div class="modal-title">
                                                        <p>Vì sao bạn muốn báo xấu nhà tuyển dụng này? </p>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="feedback_job" id="feedback_job" method="POST" autocomplete="off">
                                                            <input type="hidden" name="job_url" id="job_url" value="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-no-phai-thu.35BB02B3.html" />
                                                            <div class="form-group">
                                                                <input type="text" id="email" name="email" placeholder="Nhập địa chỉ email " onkeyup="this.setAttribute('value', this.value);" value="">
                                                                <p class="text-validate error_email"> </p>
                                                            </div>
                                                            <div class="list-radio" id="reason" name='reason'>
                                                                <input type="radio" id="reason-1" name="reason" value="1">
                                                                <label for="reason-1"> Việc làm không hợp pháp </label>
                                                                <br>
                                                                <input type="radio" id="reason-2" name="reason" value="2">
                                                                <label for="reason-2"> Không cung cấp đủ thông tin </label>
                                                                <br>
                                                                <input type="radio" id="reason-3" name="reason" value="3">
                                                                <label for="reason-3"> Khác </label>
                                                                <p class="text-validate error_reason"></p>
                                                            </div>
                                                            <div class="box-reason form-group">
                                                                <input type="text" id="box_reason" name="box_reason">
                                                                <p class="text-validate error_box_reason"> </p>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="captcha" id="captcha" autocomplete="off" placeholder="Mã xác nhận" onkeyup="this.setAttribute('value', this.value);" value="">
                                                                <p class="text-validate error_captcha"></p>
                                                            </div>
                                                            <div id="captchaim" style="float:left" class="form-group"><img width="150" height="50" alt="captcha" src="https://images.careerbuilder.vn/rws/captcha/a4086c09dc2dcbca6df3753e25108f3a.png" class="img_code" /><input type="hidden" name="key_captcha" id="key_captcha" value="a4086c09dc2dcbca6df3753e25108f3a"></div>
                                                            <a style="padding-left: 10px" onclick="refeshImgCaptcha('captchaim');" href="javascript:void(0);" class="line_bot" id="trynewcode">Thử mã mới</a>
                                                            <div class="form-group" style="clear:left">
                                                                <button class="btn-send-report"> Báo xấu </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                            <?php if (!empty($job_post_activity)) { ?>

                                                <div class="apply-now-right">
                                                    <div class="apply-now-btn  success"> <a href="javascript:void(0);" class="btn-gradient"> Đã Nộp Ứng Tuyển </a> </div>
                                                </div>
                                            <?php } else { ?>
                                                <div class="apply-now-btn ">
                                                    <a href="javascript:void(0);" class="btn-gradient btnApplyClick" data-id="<?= $job_post["id"] ?>">
                                                        Nộp Đơn Ứng Tuyển
                                                    </a>
                                                </div>
                                            <?php } ?>


                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="salary_taskbar" name="salary_taskbar" value="8000000" />
                                <input type="hidden" id="industry_taskbar" name="industry_taskbar" value="3,2,34" />
                                <input type="hidden" id="location_taskbar" name="location_taskbar" value="8" />
                                <input type="hidden" id="keyword_taskbar" name="keyword_taskbar" value="KẾ TOÁN NỢ PHẢI THU" />
                                <input type="hidden" id="title_alert" value="KẾ TOÁN NỢ PHẢI THU" />





                                <div class="job-detail-bottom-banner " id="">
                                    <div class="adsBannerOA" data-id="852"></div>
                                </div>




                            </section>

                            <div class="maps-modal" style="display: none">
                                <div class="d-flex box-modal">
                                    <div class="map" id="jobMap" style="display: none;"></div>
                                    <div class="info">
                                        <div class="tabs-toggle">
                                            <a href="javascript:void(0);" class="item active" data-tab="1">Thông Tin Tuyển Dụng</a>
                                            <a href="javascript:void(0);" class="item" data-tab="2">Các công việc tương tự</a>
                                        </div>
                                        <div class="main-content">
                                            <div class="tab-content active" id="maps-tab-1">
                                                <div class="box-about">
                                                    <div class="title-h4">
                                                        <h4>Giới thiệu về công ty</h4>
                                                    </div>
                                                    <div class="figure">
                                                        <div class="image">
                                                            <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-thuong-mai-dich-vu-du-lich-anh-sao-thien-ast-travel.35A7769F.html" target="_blank">
                                                                <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot7/167327/110x55/141932ast_iatalogosizelo-n.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công ty TNHH Thương Mại Dịch Vụ Du Lịch Ánh Sao Thiên - AST TRAVEL ">
                                                            </a>
                                                        </div>
                                                        <div class="figcaption">
                                                            <h5>Công ty TNHH Thương Mại Dịch Vụ Du Lịch Ánh Sao Thiên - AST TRAVEL </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-info">
                                                    <div class="title-h4">
                                                        <h4>Thông Tin Tuyển Dụng</h4>
                                                    </div>
                                                    <div class="content">
                                                        <p class="blue">KẾ TOÁN NỢ PHẢI THU</p>
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Cấp bậc</td>
                                                                    <td>Nhân viên</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lương</td>
                                                                    <td>$ 8,000,000 - 15,000,000 VND
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Hết hạn nộp</td>
                                                                    <td>11/12/2022</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ngành nghề</td>
                                                                    <td>
                                                                        <a href="https://careerbuilder.vn/viec-lam/hanh-chinh-thu-ky-c3-vi.html">
                                                                            Hành chính / Thư ký
                                                                            , </a>
                                                                        <a href="https://careerbuilder.vn/viec-lam/ke-toan-kiem-toan-c2-vi.html">
                                                                            Kế toán / Kiểm toán
                                                                            , </a>
                                                                        <a href="https://careerbuilder.vn/viec-lam/du-lich-c34-vi.html">
                                                                            Du lịch
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kinh nghiệm</td>
                                                                    <td>
                                                                        2 - 5 Năm
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-local">
                                                    <div class="title-h4">
                                                        <h4>Địa điểm</h4>
                                                    </div>
                                                    <div class="content">
                                                        <p>Hồ Chí Minh</p>
                                                        <ul class="clearall">
                                                            <li>
                                                                <em class="mdi mdi-map-marker"></em>
                                                                <a href="javascript:void(0);" onclick="movetoCenter(0)">57 Trần Quốc Thảo, Phường Võ Thị Sáu, Quận 3, Thành phố Hồ Chí Minh</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <?php if (!empty($job_post_activity)) { ?>

                                                    <div class="apply-now-right">
                                                        <div class="apply-now-btn  success"> <a href="javascript:void(0);" class="btn-gradient"> Đã Nộp Ứng Tuyển </a> </div>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="apply-now-btn ">
                                                        <a href="javascript:void(0);" class="btn-gradient btnApplyClick" data-id="<?= $job_post["id"] ?>">
                                                            Nộp Đơn Ứng Tuyển
                                                        </a>
                                                    </div>
                                                <?php } ?>


                                                <div class="box-contact">
                                                    <ul>
                                                        <li>
                                                            <a class="toollips save-job chk_save_35BB02B3 " href="javascript:void(0);" " onclick=" popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <div class="toolip">
                                                                    <p>Lưu việc làm</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li> <a class="email" href="javascript:void(0);" onclick="showboxJobalert()"><i class="mdi mdi-email"></i></a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="tab-content" id="maps-tab-2">
                                                <section class="jobs-side-list"></section>
                                                <div class="jobs-list">


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-thuong-mai-dich-vu-dtc.35A74C18.html" target="_blank" title="Công Ty TNHH Thương Mại Dịch Vụ DTC">
                                                                    <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot0/156440/67x67/103718logophu.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty TNHH Thương Mại Dịch Vụ DTC">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="KẾ TOÁN CÔNG NỢ PHẢI THU/PHẢI TRẢ" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-cong-no-phai-thu-phai-tra.35BACD87.html?s=rec">KẾ TOÁN CÔNG NỢ PHẢI THU/PHẢI TRẢ</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">Công Ty TNHH Thương Mại Dịch Vụ DTC</p>
                                                                    <p class="salary">$ Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-truyen-thong-3t.35A8685F.html" target="_blank" title="CÔNG TY CỔ PHẦN TRUYỀN THÔNG 3T">
                                                                    <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot5/229215/67x67/130128capture-002.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN TRUYỀN THÔNG 3T">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="KẾ TOÁN CÔNG NỢ PHẢI THU TRẢ" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-cong-no-phai-thu-tra.35BA6E68.html?s=rec">KẾ TOÁN CÔNG NỢ PHẢI THU TRẢ</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">CÔNG TY CỔ PHẦN TRUYỀN THÔNG 3T</p>
                                                                    <p class="salary">$ 8 Tr - 12 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-maison-retail-management-international.35A7715A.html" target="_blank" title="CÔNG TY CỔ PHẦN MAISON RETAIL MANAGEMENT INTERNATIONAL">
                                                                    <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot8/165978/67x67/112655maisonrmilogo.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN MAISON RETAIL MANAGEMENT INTERNATIONAL">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="HCM - Nhân Viên Kế Toán Phải Thu" href="https://careerbuilder.vn/vi/tim-viec-lam/hcm-nhan-vien-ke-toan-phai-thu.35BA82C3.html?s=rec">HCM - Nhân Viên Kế Toán Phải Thu</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">CÔNG TY CỔ PHẦN MAISON RETAIL MANAGEMENT INTERNATIONAL</p>
                                                                    <p class="salary">$ Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-ky-thuat-viet-son.35A7C753.html" target="_blank" title="CÔNG TY CP KỸ THUẬT VIỆT SƠN">
                                                                    <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot7/187987/67x67/124531logo_vs-002.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CP KỸ THUẬT VIỆT SƠN">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="Nhân Viên Kế Toán Công Nợ Phải Thu" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-ke-toan-cong-no-phai-thu.35BAFB5D.html?s=rec">Nhân Viên Kế Toán Công Nợ Phải Thu</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">CÔNG TY CP KỸ THUẬT VIỆT SƠN</p>
                                                                    <p class="salary">$ 9 Tr - 11 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-sx-va-tm-quan-dat.35A54CC9.html" target="_blank" title="Công Ty TNHH SX Và TM Quân Đạt">
                                                                    <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employers/25545/67x67/83710taixuong.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty TNHH SX Và TM Quân Đạt">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="Nhân viên Kế toán - Công nợ phải thu" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-ke-toan-cong-no-phai-thu.35BAE166.html?s=rec">Nhân viên Kế toán - Công nợ phải thu</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">Công Ty TNHH SX Và TM Quân Đạt</p>
                                                                    <p class="salary">$ 10 Tr - 15 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-phan-phoi-t-k.35A50AB9.html" target="_blank" title="Công Ty CP Phân Phối T.K.">
                                                                    <img class="lazy-hidden" data-src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/logo-default.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty CP Phân Phối T.K.">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="Kế Toán Viên (Ngân hàng / Công nợ phải thu / phải trả / Kế toán kho)" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-vien-ngan-hang-cong-no-phai-thu-phai-tra-ke-toan-kho.35BA73A5.html?s=rec">Kế Toán Viên (Ngân hàng / Công nợ phải thu / phải trả / Kế toán kho)</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">Công Ty CP Phân Phối T.K.</p>
                                                                    <p class="salary">$ 8 Tr - 10 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/vascara-group.35A67947.html" target="_blank" title="Vascara Group">
                                                                    <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot1/102471/67x67/173020logo1.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Vascara Group">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="Kế toán công nợ phải trả" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-cong-no-phai-tra.35BACEF9.html?s=rec">Kế toán công nợ phải trả</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">Vascara Group</p>
                                                                    <p class="salary">$ 8 Tr - 12 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-thoi-trang-my-pham-duy-anh-dafc.35A52C9D.html" target="_blank" title="Công Ty Cổ Phần Thời Trang & Mỹ Phẩm Duy Anh (DAFC)">
                                                                    <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employers/17309/67x67/141952dafc-logo-chuky-new-02.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty Cổ Phần Thời Trang & Mỹ Phẩm Duy Anh (DAFC)">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="Kế Toán Công Nợ Phải Trả" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-cong-no-phai-tra.35BAFBAE.html?s=rec">Kế Toán Công Nợ Phải Trả</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">Công Ty Cổ Phần Thời Trang & Mỹ Phẩm Duy Anh (DAFC)</p>
                                                                    <p class="salary">$ 12 Tr - 15 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-ktg-electric.35A8A3A2.html" target="_blank" title="CÔNG TY CỔ PHẦN  KTG ELECTRIC">
                                                                    <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot6/244386/67x67/135946ktge_logocongty.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN  KTG ELECTRIC">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="Nhân viên kế toán công nợ phải trả" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-ke-toan-cong-no-phai-tra.35BA8810.html?s=rec">Nhân viên kế toán công nợ phải trả</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">CÔNG TY CỔ PHẦN KTG ELECTRIC</p>
                                                                    <p class="salary">$ 8 Tr - 12 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/aa-corporation.35A4EDE4.html" target="_blank" title="AA Corporation">
                                                                    <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employers/1252/67x67/151201aacorp.gif" src="../kiemviecv32/images/graphics/blank.gif" alt="AA Corporation">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="Nhân viên Kế toán phải trả hóa đơn (AP)" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-ke-toan-phai-tra-hoa-don-ap.35BADEC3.html?s=rec">Nhân viên Kế toán phải trả hóa đơn (AP)</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">AA Corporation</p>
                                                                    <p class="salary">$ Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script src='https://cdn.jsdelivr.net/npm/@goongmaps/goong-js@1.0.6/dist/goong-js.js'></script>
                            <link href='https://cdn.jsdelivr.net/npm/@goongmaps/goong-js@1.0.6/dist/goong-js.css' rel='stylesheet' />



                        </div>
                        <div class="tab-content" id="tab-2"></div>
                    </div>
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
                        <input type="hidden" name="csrf_token" value="c309fd88e4ebe866d359fc037715f4d39b27c44feecb74cbd4bc24a24e6a5a53" />
                        <button type="submit">Đăng nhập</button>
                    </div>
                </div>

            </form>
            <div class="sign-in-by"><span>Đăng nhập bằng:</span>
                <ul class="list-follow">
                    <li><a class="fb" href="javascript:void(0);" onclick="popupapi('facebook','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5mYWNlYm9vaw==');"><em class="fa fa-facebook"></em>Facebook</a></li>
                    <li><a class="gg" href="javascript:void(0);" onclick="popupapi('google','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5nb29nbGU=');"><em class="fa fa-google"></em>Google</a></li>
                </ul>
            </div>
            <a class="register" href="https://careerbuilder.vn/vi/jobseekers/register" title="Đăng ký">Đăng ký </a><a class="forget-password" href="https://careerbuilder.vn/vi/jobseekers/forgotpassword" title="Quên mật khẩu?" rel="nofollow">Quên mật khẩu?</a>
        </div>
    </div>


    <div class="apply-job-modal" id="apply-job-modal" style="display: none">
        <h3>Apply for: <span class="job-title" id="span_title">KẾ TOÁN NỢ PHẢI THU</span></h3>
        <h4>Công ty TNHH Thương Mại Dịch Vụ Du Lịch Ánh Sao Thiên - AST TRAVEL </h4>

        <div class="login-form">
            <form id="frmLogin" name="frmLogin" method="POST" action="https://careerbuilder.vn/vi/jobseekers/member/login">
                <p class="note"> Thành viên đăng nhập <span class="note" style="font-weight:100">(Nếu bạn đã có hồ sơ tại CareerBuilder)</span></p>
                <div class="form-group">
                    <input type="text" placeholder="Email" name="username" value="" title="Email">
                    <span class="error_username"></span>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Mật khẩu">
                    <span class="error_password"></span>
                </div>
                <div class="form-group form-submit">
                    <input type="hidden" name="csrf_token_apply" value="e45e642aa6ebc22e31fa3c249b5c93966da1a2b09217ff690065f0f1b261d46e" />
                    <input type="submit" value="Sign in and Apply">
                </div>
            </form>
        </div>
        <div class="apply-not-login">
            <strong>Nộp đơn ứng tuyển nhanh không cần đăng ký tài khoản</strong>
            <p class="note">Bạn có thể nộp đơn ứng tuyển không cần đăng nhập hoặc chưa là thành viên của CareerBuilder.</p>
            <div class="btn-group">
                <a class="btn-apply-non-member" id="apply_url" href="https://careerbuilder.vn/vi/jobseekers/jobs/apply?s=cbnon&job_id=35BB02B3" rel="nofollow">Ứng Tuyển Ngay</a>
                <span class="or-text">hoặc</span>
                <a class="btn-apply-facebook" href="javascript:void(0);" onclick="popupapi('facebook','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5mYWNlYm9vaz9hcHBseV91cmw9aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvam9icy9hcHBseT9qb2JfaWQ9MzVCQjAyQjM=');" rel="nofollow"> Apply with <strong>Facebook</strong><i class="fa fa-facebook"></i></a>
            </div>
        </div>
    </div>



    <input type="hidden" value="" name="from_action" id="from_action" />




    <style>
        /*industry-location.css*/

        .industy-location {
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 40px
        }

        .box-job-type h4 {
            color: #333;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .box-job-type {
            height: 100%;
            background: rgba(147, 209, 254, 0.3);
            border-radius: 5px;
            padding: 20px 25px;
        }

        .box-job-type ul li a {
            color: #666;
            font-weight: normal;
            font-size: 14.5px;
        }

        .box-job-type ul li a:hover {
            color: #00b2a3
        }

        .box-job-type ul {
            height: 200px;
            overflow-y: auto;
            margin-right: -25px;
            scrollbar-width: thin;
            scrollbar-color: #00b2a3 #cdcdcd
        }

        .box-job-type ul::-webkit-scrollbar {
            width: 6px;
            background: none;
        }

        .box-job-type ul::-webkit-scrollbar-thumb {
            background: #cdcdcd;
            border-radius: 6px;
        }

        .box-job-type ul li:not(:last-child) {
            margin-bottom: 4px;
        }

        .box-job-type ul li a:hover {
            text-decoration: none;
        }
    </style>
    <div class="back-drop"></div>
    <div class="industy-location">
    </div>

    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="formReport" tabindex="-1" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Vì sao bạn muốn báo xấu nhà tuyển dụng này? </h2>
                    <button type="button" class="btn-close close_form_rexp" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="feedback_job" id="feedback_job" method="POST" action="http://localhost//itjobs/admin/reportJobManager/addReportJobManager" autocomplete="off">
                        <input type="hidden" name="job_id" id="job_id" value="<?= $job_post["id"] ?>">
                        <input type="hidden" name="job_url" id="job_url" value="<?= current_url() ?>">

                        <div class="form-group">
                            <input style="margin:20px 0;width: 100%;padding:5px 5px;" type="text" id="email" name="email" placeholder="Nhập địa chỉ email " value="">
                            <p class="text-validate error_email"> </p>
                        </div>
                        <div class="list-radio" id="reason" name="reason">
                            <input type="radio" id="reason-1" name="reason" value="1">
                            <label for="reason-1"> Việc làm không hợp pháp </label>
                            <br>
                            <input style="margin:10px 0;" type="radio" id="reason-2" name="reason" value="2">
                            <label for="reason-2"> Không cung cấp đủ thông tin </label>
                            <br>
                            <input style="margin:10px 0;" type="radio" id="reason-3" name="reason" value="3">
                            <label for="reason-3"> Khác </label>
                            <div>
                                <label for="">Mô tả báo cáo</label>
                                <textarea name="desc_report" style="width:100%;height:200px"></textarea>
                            </div>
                        </div>

                        <div class="form-group" style="clear:left">
                            <button style="margin:10px 0;" class="btn-send-report" onclick="saveFeedbackJob();return false;"> Báo xấu </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="formReport"    tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
          <div class="modal-header">
             <h2 class="modal-title">Vì sao bạn muốn báo xấu nhà tuyển dụng này? </h2>
             <button type="button" class="btn-close close_form_rexp" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
    <form name="feedback_job" id="feedback_job" method="POST" autocomplete="off">
      <input type="hidden" name="job_id" id="job_url" value="<?= $job_post["id"] ?>">
      <input type="hidden" name="job_url" id="job_url" value="<?= current_url() ?>">

      <div class="form-group">
        <input style="margin:20px 0;width: 100%;padding:5px 5px;"type="text" id="email" name="email" placeholder="Nhập địa chỉ email "  value="">
        <p class="text-validate error_email"> </p>
      </div>
      <div class="list-radio" id="reason" name="reason">
        <input type="radio" id="reason-1" name="reason" value="1">
        <label for="reason-1"> Việc làm không hợp pháp </label>
        <br>
        <input style="margin:10px 0;"type="radio" id="reason-2" name="reason" value="2">
        <label for="reason-2"> Không cung cấp đủ thông tin </label>
        <br>
        <input style="margin:10px 0;"type="radio" id="reason-3" name="reason" value="3">
        <label for="reason-3"> Khác </label>
        <div>
        <label for="">Mô tả báo cáo</label>
        <textarea name="desc_report" style="width:100%;height:200px" ></textarea>
        </div>
      </div>
    
   
  
       
	<div class="form-group" style="clear:left">
      <button style="margin:10px 0;"class="btn-send-report" onclick="saveFeedbackJob();return false;"> Báo xấu </button>
	  </div>
    </form>
  </div>
       </div>
    </div>

    <div class="back-drop"></div>
</main>