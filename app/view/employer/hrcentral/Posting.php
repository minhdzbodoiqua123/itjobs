
<main>

    <div class="last-login-user">
        <div class="container">
            <p> Đăng nhập gần đây:
                <time>31-10-2022 16:07:56</time>
            </p>
        </div>
    </div>
    <section class="manage-job-posting-active-jobs cb-section bg-manage">
        <div class="container">
            <div class="box-manage-job-posting">
                <div class="heading-manage">
                    <div class="left-heading">
                        <h1 class="title-manage">Quản Lý Tuyển Dụng</h1>
                        <div class="button"><a class="btn-gradient" href="https://careerbuilder.vn/vi/employers/postjobs"><em class="material-icons">create</em>Tạo Mẫu Tuyển Dụng</a></div>
                    </div>
                    <div class="right-heading"><a href="https://careerbuilder.vn/vi/employers/faq" target="_blank" target="_blank" class="support">Hướng dẫn</a></div>
                </div>
                <div class="main-form-posting">
                    <form name="frmSearchJob" id="frmSearchJob" action="" method="post" onsubmit="return validateSearch();">
                        <div class="form-wrap">
                            <div class="form-group form-text">
                                <label>Từ khóa</label>
                                <input type="text" name="keyword" id="keyword" placeholder="Nhập từ khóa" value="">
                            </div>
                            <div class="form-group form-select">
                                <label>Tìm theo ngày</label>
                                <select class="fl_left mar_left46" name="date_type" id="date_type">
                                    <option value="0">Ngày đăng</option>
                                    <option value="1">Ngày hết hạn</option>
                                </select>
                            </div>
                            <div class="form-group form-date start-date">
                                <label>Từ</label>
                                <input type="text" readonly name="date_from" id="date_from" placeholder="Chọn" class="dates_cus_select" value="">
                                <div class="icon"><em class="material-icons">event</em></div>
                                <div id="start-date"></div>
                            </div>
                            <div class="form-group form-date end-date">
                                <label>Đến</label>
                                <input type="text" readonly name="date_to" id="date_to" placeholder="Chọn" class="dates_cus_select" value="">
                                <div class="icon"><em class="material-icons">event</em></div>
                                <div id="end-date"></div>
                            </div>
                            <div class="form-group form-submit">
                                <button class="btn-submit btn-gradient" type="submit"><em class="material-icons">search</em>Tìm</button>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="filter-emp-user-create">
                    <label>Việc làm đăng bởi</label>
                    <select name="user_id" onchange="SetUserId(this.value, 'posting');">>
                        <option value="0">Tất cả</option>
                        <option value="lop7cttnq.1667207375" selected="selected">
                            minh nguyễn </option>
                    </select>
                </div>
                <div class="main-tabslet">
                    <ul class="tabslet-tab">
                        <li class="active">
                            <a href="https://careerbuilder.vn/vi/employers/hrcentral/posting/user_id/lop7cttnq.1667207375">
                                Việc Làm Đang Đăng
                            </a>
                        </li>
                        <li class="">
                            <a href="https://careerbuilder.vn/vi/employers/hrcentral/waitposting/user_id/lop7cttnq.1667207375">
                                Việc Làm Chờ Đăng
                            </a>
                        </li>
                        <li class="">
                            <a href="https://careerbuilder.vn/vi/employers/hrcentral/unposting/user_id/lop7cttnq.1667207375">
                                Việc Làm Tạm Dừng Đăng
                            </a>
                        </li>
                        <li class="">
                            <a href="https://careerbuilder.vn/vi/employers/hrcentral/expireposting/user_id/lop7cttnq.1667207375">
                                Việc Làm Hết Hạn
                            </a>
                        </li>
                    </ul>



                    <div class="tabslet-content active">
                        <div class="main-jobs-posting">
                            <div class="heading-jobs-posting">
                                <div class="left-heading">
                                    <p class="name">Hiển thị </p>
                                    <ul class="list-check">
                                        <li class="view-posting-detail active"><a href="javascript:void(0);" id="dtail">Chi tiết</a></li>
                                        <li class="view-posting-summary"><a href="javascript:void(0)">Xem tóm tắt </a></li>

                                        <li><a href="javascript:void(0);" id="copy_multi_job">Nhân bản</a></li>
                                        <li> <a href="javascript:void(0);" id="unposting_multi_job">Tạm Dừng Đăng</a></li>
                                    </ul>
                                </div>
                                <div class="right-heading">
                                    <div class="export-file"><a href="javascript:void(0);" onclick="exportJobs();"> <em class="material-icons">get_app</em>Xuất file job</a></div>
                                    <div class="to-display">
                                        <p class="name">Hiển thị </p>
                                        <div class="form-display">
                                            <select name="limit" id="limit">
                                                <option value="20" selected>20</option>
                                                <option value="30">30</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                        <p class="name-display"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="boding-jobs-posting">
                                <div class="table table-jobs-posting">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th width="1%"></th>
                                                <th width="32%">Chức danh</th>
                                                <th width="12%" onclick="setTypeSort('posting', 'asc', 3)">Ngày đăng<em class="material-icons">arrow_drop_down</em></th>
                                                <th width="10%" onclick="setTypeSort('posting', 'asc', 4)">Hết hạn<em class="material-icons">sort</em></th>
                                                <th width="10%" onclick="setTypeSort('posting', 'asc', 0)">Lượt Xem<em class="material-icons">sort</em></th>
                                                <th width="10%" onclick="setTypeSort('posting', 'asc', 1)">Lượt Nộp<em class="material-icons">sort</em></th>
                                                <th width="10%">CV Gợi Ý</th>
                                                <th width="15%">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="9" class="cb-text-center">
                                                    <p><strong> Không có vị trí nào trong thư mục này.</strong></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
        </div>
    </section>


</main>