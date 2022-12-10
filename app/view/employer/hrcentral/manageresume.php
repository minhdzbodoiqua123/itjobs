<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/employer/css/manageresume.css" ?>">
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/bootstrap.css" ?>">

<script defer src="<?= _WEB_ROOT . "/app/public/assets/employer/js/manageresume.js" ?>"></script>
<section class="employer-navbar-2-1">
    <div class="container">
        <div class="category-nav">
            <p>Danh Mục</p>
            <em class="mdi mdi-chevron-down"></em>
        </div>
        <div class="main-wrap">
            <div class="left-wrap">
                <ul class="list-menu">
                    <li> <a href="<?= _WEB_ROOT . '/employer/dashboard' ?>" title="Dashboard">Dashboard</a> </li>
                    <li> <a href="<?= _WEB_ROOT . '/employer/hrcentral/posting' ?>" title="Quản Lý Đăng Tuyển">Quản Lý Đăng Tuyển</a> </li>
                    <li class="active"> <a href="<?= _WEB_ROOT . '/employer/hrcentral/manageresume' ?>" class="active" title="Quản Lý  Ứng Viên">Quản Lý Ứng Viên</a> </li>

                    <li>

                        <a href="<?= _WEB_ROOT . '/employer/hrcentral/accounts/edit_employer"' ?>" title=" Tài Khoản"> Tài Khoản</a>
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
<div class="last-login-user">
    <div class="container">
        <p> Đăng nhập gần đây:
            <time>22-11-2022 22:12:40</time>
        </p>
    </div>
</div>
<section class="manage-candidates-resume-applied cb-section bg-manage">
    <div class="container">
        <div class="box-candidates-resume-applied">
            <div class="heading-manage">
                <div class="left-heading">
                    <h1 class="title-manage">
                        <?php switch ($job_status) {
                            case '3':
                                echo "Việc Làm Tạm Dừng Đăng";
                                break;
                            case '2':
                                echo "Việc Làm Hết Hạn";

                                break;
                            default:
                              echo "Việc Làm Đang Đăng ";
                                break;
                        }?>
                    </h1>

                </div>
                <div class="right-heading">
                    <a class="support" target="_blank" href="https://careerbuilder.vn/vi/employers/faq">Hướng dẫn</a>
                </div>
            </div>
            <div class="main-form-posting">
                <form name="frmSearchResume">
                    <div class="form-wrap">
                        <div class="form-group form-text">
                            <label>Từ khóa</label>
                            <input type="text" id="strKeyword" value="" maxlength="200" placeholder="Nhập từ khóa" />
                        </div>
                        <div class="form-group form-select">
                            <label>Tìm theo</label>
                            <select id="intKeywordType">
                                <option value="0">Tên hồ sơ</option>
                                <option value="1">Tên ứng viên</option>
                            </select>
                        </div>
                        <div class="form-group form-select">
                            <label>Trạng thái tìm việc</label>
                            <select name="urgentjob" id="inturgentjob">
                                <option value="0">Tất cả</option>
                                <option value="1">Ứng viên tìm việc khẩn cấp</option>
                            </select>
                        </div>
                        <div class="form-group form-date start-date">
                            <label>Từ</label>
                            <input type="text" name="" id="strFromDate" value="" class="dates_cus_select" placeholder="Chọn" autocomplete="off" readonly>
                            <div class="icon"><em class="material-icons">event</em></div>
                        </div>
                        <div class="form-group form-date end-date">
                            <label>Đến</label>
                            <input type="text" name="" id="strToDate" value="" class="dates_cus_select" placeholder="Chọn" autocomplete="off" readonly>
                            <div class="icon"><em class="material-icons">event</em></div>
                        </div>
                        <div class="form-group form-submit form-submit-less">
                            <button class="btn-submit btn-gradient" type="button" onclick="searchResumeApply()"><em class="material-icons">find_in_page</em>Tìm</button>
                        </div>
                        <div class="form-group form-filter-advanced">
                            <a class="btn-filter-advanced" href="javascript:void(0);"><em class="material-icons">zoom_in</em> Lọc nâng cao</a>
                        </div>
                    </div>
                    <div class="form-wrap-advanced">
                        <div class="form-wrap">
                            <div class="form-group form-select">
                                <label>Trạng thái</label>
                                <select id="intStatus">
                                    <option value="7">Tất cả</option>
                                    <option value="8">Chưa Xem </option>
                                    <option value="0">Chưa quyết định</option>
                                    <option value="1">Không phù hợp</option>
                                    <option value="2">Từ chối</option>
                                    <option value="3">Kiểm tra</option>
                                    <option value="4">Phỏng vấn</option>
                                    <option value="5">Đề nghị tuyển dụng</option>
                                    <option value="6">Nhận việc</option>
                                </select>
                            </div>
                            <div class="form-group form-select">
                                <label>Phân loại tự động</label>
                                <select id="intSuitable">
                                    <option value="2" selected="selected">Tất cả</option>
                                    <option value="1">Phù hợp</option>
                                    <option value="0">Tiềm Năng</option>
                                </select>
                            </div>
                            <div class="form-group form-select">
                                <label>Xếp loại</label>
                                <select id="intType">
                                    <option value="6">Tất cả</option>
                                    <option value="0">Chưa xếp loại</option>
                                    <option value="1">Kém</option>
                                    <option value="2">Trung bình</option>
                                    <option value="3">Khá</option>
                                    <option value="4">Tốt</option>
                                    <option value="5">Rất Tốt</option>
                                </select>
                            </div>
                            <div class="form-group form-select">
                                <label>Ghi chú</label>
                                <select id="intNote">
                                    <option value="2" selected="selected">Tất cả</option>
                                    <option value="1">Có ghi chú</option>
                                    <option value="0">Không có ghi chú</option>
                                </select>
                            </div>
                            <div class="form-group form-reset">
                                <button class="btn-reset" type="button" onclick="resetFormSearchResume()"><em class="material-icons">loop</em>Xóa</button>
                            </div>
                            <div class="form-group form-submit">
                                <button class="btn-submit btn-gradient" type="button" onclick="searchResumeApply()"><em class="material-icons">find_in_page</em>Tìm</button>
                            </div>
                            <div class="form-group form-filter-less">
                                <a class="btn-filter-less" href="javascript:void(0);;">
                                    <em class="material-icons">highlight_off</em>
                                    Thu gọn
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <div class="main-tabslet" data-toggle="tabslet">
                <ul class="tabslet-tab">
                    <li class="active">
                        <a href="">
                            Hồ Sơ Ứng Tuyển
                            (0)
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Hồ Sơ Đã Lưu
                            (2)
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Hồ Sơ Đã Xóa
                            (0)
                        </a>
                    </li>
                </ul>
                <div class="tabslet-content active" id="tab-1">
                                                    <div class="main-resume-applied">
    <div class="heading-resume-applied">
        <div class="left-heading">
                            <!-- <div class="form-group form-select form-filter">
                    <label>User</label>
                    <select id="foward_username" onchange="onchangeUserResume()">
                        <option value="alluser" selected="selected">Tất cả</option>
                                            <option value="lop7cttnq.1667207375" selected="selected">
                            minh nguyễn 123
                        </option>
                                        </select>
                </div> -->
                        <div class="form-group form-select form-filter">
                <select id="select-group">
                    
                    <option <?= empty($job_status) ? "":$job_status==1?"selected":""?> data-group="1" value="<?= _WEB_ROOT.'/employer/hrcentral/manageresume?job_status=1' ?>" >
                        Việc Làm Đang Đăng (<?= count($data_job_current) ?>)
                    </option>
                    <option <?= empty($job_status) ? "":$job_status==3?"selected":""?> data-group="3" value="<?= _WEB_ROOT.'/employer/hrcentral/manageresume?job_status=3' ?>">
                        Việc Làm Tạm Dừng Đăng (<?= count($data_job_current) ?>)
                    </option>
                    <option <?= empty($job_status) ? "":$job_status==2?"selected":""?> data-group="2" value="<?= _WEB_ROOT.'/employer/hrcentral/manageresume?job_status=2' ?>">
                        Việc Làm Hết Hạn (<?= count($data_job_current) ?>)
                    </option>
                </select>
            </div>
            <!-- <?php switch ($job_status) {
                case '2':
                    echo _WEB_ROOT.'/employer/hrcentral/manageresume?job_status='.$job_status;
                    break;
                case '3':
                    echo _WEB_ROOT.'/employer/hrcentral/manageresume?job_status='.$job_status;
                    break;
                default:
                    echo _WEB_ROOT.'/employer/hrcentral/manageresume?job_status=1';
                    break;
            }?> -->
            <div class="form-group form-select form-filter">
                <select class="go-link" id="select-folder" style="width: 400px;">
          <option  value="">Chọn thư mục</option>
         <?php foreach ($data_job_current as $item):?>
            <option <?= empty($job_id) ? "" :$item["id"]==$job_id ?"selected":"" ?> value="<?php switch ($job_status) {
                case '2':
                    echo _WEB_ROOT.'/employer/hrcentral/manageresume?job_status='.$job_status.'&job_id='.$item["id"];
                    break;
                case '3':
                    echo _WEB_ROOT.'/employer/hrcentral/manageresume?job_status='.$job_status.'&job_id='.$item["id"];
                    break;
                default:
                    echo _WEB_ROOT.'/employer/hrcentral/manageresume?job_status=1'.'&job_id='.$item["id"];
                    break;
            }?>"><?=  $item["job_title"] ?></option>
                                           
            <?php endforeach;?>                                                                             </select>
            </div>
                        <ul class="list-check">
                <li class="view-posting-detail "><a href="javascript:void(0);">Chi tiết</a></li>



                            </ul>
        </div>
    </div>
<div class="boding-resume-applied">
    <div class="table table-resume-applied">
    <table>
                                    <thead>
                                        <tr>

                                            <th width="1%">
                                                <div class="checkbox"><input type="checkbox" id="check-all"></div>
                                            </th>
                                            <th width="27%">Chọn tất cả</th>
                                            <th width="10%">Ngày nộp</th>
                             
                                            <th width="10%">Trạng thái</th>
                                            <th width="10%">Xếp loại</th>
                                            <th width="10%">Kinh nghiệm</th>
                                            <th width="20%">Mức lương</th>
                                            <th width="12%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <input name="list_resumes" type="hidden" value="">
                                        <input name="folder_id" type="hidden" value="">
                                        <?php if(empty($job_id)) {?>
                                            <tr>
                    <td colspan="9"><p align="center"><strong> Hiện tại không có hồ sơ nào trong thư mục này!</strong></p></td>
                </tr>   
                                            <?php } else {?>
                                                <?php foreach ($job_post_activity as $item) : ?>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="listresumes[]" value="36175D2C_35F1D06E">
                                                        <input type="hidden" name="fresume_list_id[]" id="fresume_list_id_36175D2C_35F1D06E" value="3743679A">
                                                        <input type="hidden" name="folder_list_id[]" id="folder_list_id_36175D2C_35F1D06E" value="35BFE874">
                                                        <input type="hidden" name="jobseeker_list_id[]" id="jobseeker_list_id_36175D2C_35F1D06E" value="35F1D06E">
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="title">
                                                        <a class="name" target="_blank" href="https://careerbuilder.vn/vi/employers/hrcentral/manage_resumes/resumes_detail/4/35BFE874/35BFE874/3743679A/3743679A/36175D2C/35F1D06E/lop7cttnq.1667207375/36175D2C/35F1D06E">
                                                            <?= $item["lastname"] . " " . $item["firstname"] ?>
                                                        </a>
                                                        <a class="jobs-new-tab" href="javascript:void(0);">
                                                            <img src="https://static.careerbuilder.vn/images/icons/resume_type_0.gif" title="Hồ sơ Theo mẫu" alt="Hồ sơ Theo mẫu">
                                                        </a>
                                                    </div>
                                                    <!-- <div class="detail">
                                            <p><strong>Chức danh:</strong> IT Director</p>
                                            <p><strong>Địa điểm:</strong>
                                                Hồ Chí Minh                                                                    
                                            </p>
                                            <p><strong>Thư mục</strong>
                                                <a href="https://careerbuilder.vn/vi/employers/hrcentral/manageresume/4/35BFE874/*/0/*/*/7/2/6/2/1/desc/lop7cttnq.1667207375/1" title="Xem thư mục lưu trữ">ứng viên</a>                            
                                            </p>
                                            <p><strong>Việc làm gần nhất:</strong> IT Manager</p>
                                            <p><strong>Công ty gần nhất:</strong> IFB Holdings</p>
                                        </div> -->
                                                </td>
                                                <td>
                                                    <time><?= formatDate($item["apply_date"]) ?></time>
                                                </td>

                                                <td>
                                                    <p>

                                                        <?php foreach ($data_resume_status as $value) {

                                                            if ($item["resume_status_id"] == $value["id"]) {
                                                                echo $value["resume_name_status"];
                                                            }
                                                        } ?>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p>
                                                        <?php foreach ($data_resume_type as $value) {

                                                            if ($item["resume_type_id"] == $value["id"]) {
                                                                echo $value["resume_type"];
                                                            }
                                                        } ?>

                                                    </p>
                                                </td>
                                                <td>
                                                    <p>
                                                        <?= $item["year_of_experience"] != 0 ? $item["year_of_experience"] . ' Năm '  : "Chưa có kinh nghiệm" ?>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p>
                                                        <?= $item["min_salary"] . "-" . $item["max_salary"] . " VND"; ?>
                                                    </p>
                                                </td>
                                                <td>
                                                    <ul style="display:flex;gap:15px;align-items:center;justify-content: center;" class="">
                                                        <li> <a href="javascript:;" onclick="showFoldersSelected('369242CE', 'listresumes[]');" title="Lưu thư mục"> <em class="material-icons">folder_shared </em> </a> </li>
                                                        <li><a href="<?= _WEB_ROOT . '/employer/hrcentral/manageresume/resumes_detail/' . $item["user_account_id"] . '/' . $item["resume_id"] . '/?file_name=' . $item["file_location"] ?>" title="Chi tiết"><em class="material-icons">visibility </em></a></li>
                                                        <li> <a href="javascript:;" onclick="showClassifiedResume('<?= $item['job_id'] ?>','<?= $item['user_account_id'] ?>');return false;" title="Cập nhật trạng thái"> <em class="material-icons">border_color</em> </a> </li>
                                                        <li> <a href="javascript:;" onclick="showResumeForInvite();return false;" title="Thông báo tuyển dụng"> <i class="fa fa-forward" aria-hidden="true"></i> </a> </li>

                                                        <!-- <li> <a href="javascript:;" onclick="downloadResume('369242CE', '35A4E923')" title="Xuất file PDF"> <em class="material-icons">picture_as_pdf </em> </a> </li>
         -->
                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                                <?php }?>
                                 
                                      
                                        <!-- <tr>
                                                    <td colspan="9">
                                                        <p align="center"><strong> Hiện tại không có hồ sơ nào trong thư mục này!</strong></p>
                                                    </td>
                                                </tr> -->
                                    </tbody>
                                </table>
    </div>
    <div class="main-pagination">
        
    </div>
</div>    </div>


                                            </div>
            </div>
        </div>
    </div>
</section>
<div class="flip-view-modal" style="display: none" id="flip-view-hr">
    <div class="box-flip-view">
        <div class="flip-view-modal-left">
            <a href="javascript:void(0);" class="flip_prev" id="flip_prev"></a>
            <a href="javascript:void(0);" class="flip_next" id="flip_next"></a>
            <div class="modal-head" id="titleBar"></div>
            <div class="modal-body" id="contentResumeFlip"></div>
        </div>
        <div class="flip-view-modal-right">
            <div class="box-info-top">
                <div id="boxStatus"></div>
                <div id="actionPanel"></div>
            </div>
        </div>
    </div>
</div>