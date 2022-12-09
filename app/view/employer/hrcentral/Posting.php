<main>
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
                        <li class="active"> <a href="<?= _WEB_ROOT . '/employer/hrcentral/posting' ?>" title="Quản Lý Đăng Tuyển">Quản Lý Đăng Tuyển</a> </li>
                        <li class=""> <a href="<?= _WEB_ROOT . '/employer/hrcentral/manageresume' ?>" class="active" title="Quản Lý  Ứng Viên">Quản Lý Ứng Viên</a> </li>


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
                        <div class="button"><a class="btn-gradient" href="<?= _WEB_ROOT . '/employer/Postjobs' ?>"><em class="material-icons">create</em>Tạo Mẫu Tuyển Dụng</a></div>
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


                <div class="main-tabslet">
                    <ul class="tabslet-tab">
                        <li class="active">
                            <a href="<?= _WEB_ROOT . '/employer/hrcentral/Posting' ?>">
                                Việc Làm Đang Đăng
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= _WEB_ROOT . '/employer/hrcentral/waitposting' ?>">
                                Việc Làm Chờ Đăng
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= _WEB_ROOT . '/employer/hrcentral/unposting' ?>">
                                Việc Làm Tạm Dừng Đăng
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= _WEB_ROOT . '/employer/hrcentral/expireposting' ?>">
                                Việc Làm Hết Hạn
                            </a>
                        </li>
                    </ul>




                    <div class="tabslet-content active">
                        <div class="main-jobs-posting">
                            <div class="boding-jobs-posting">
                                <div class="table table-jobs-posting">
                                    <table>
                                        <thead>
                                            <tr>

                                                <th width="32%">Chức danh</th>
                                                <th width="12%">Ngày đăng<em class="material-icons">arrow_drop_down</em></th>
                                                <th width="10%">Hết hạn<em class="material-icons">sort</em></th>
                                                <th width="10%">Lượt Xem<em class="material-icons">sort</em></th>
                                                <th width="10%">Lượt Nộp<em class="material-icons">sort</em></th>

                                                <th width="15%">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($job_post as $item) : ?>
                                                     <tr>
                                                     <td><?= $item["job_title"] ?></td>
                                                    <td><?= formatDate($item["posted_date"]) ?></td>
                                                    <td><?= formatDate($item["end_date"]) ?></td>

                                                    <td><?= $item["view"] ?></td>
                                                    <td> <?php foreach ($count_submitted as $value) : ?>
           <?= $item["id"] == $value["job_id"] ? $value["num_submit"] : "" ?>

                                                        <?php endforeach; ?></td>
                                                    <td>
                                                        <ul class="list-manipulation">

                                                            <li><a href="<?= _WEB_ROOT . '/employer/hrcentral/viewjob/detail/' . $item['id'] ?>" title="Chi tiết"><em class="material-icons">visibility </em></a></li>

                                                            <li><a href="<?= _WEB_ROOT . '/employer/hrcentral/viewjob/detail/' . $item['id'] ?>" title="Sửa"><em class="material-icons">created</em></a></li>
                                                            <li class="end"><a href="javascript:void(0);" title="Tạm dừng đăng"><em class="material-icons">cancel </em></a></li>
                                                        </ul>
                                                    </td>
                                                     </tr>
                                            <?php  endforeach;?>
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