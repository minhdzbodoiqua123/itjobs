<title>Danh sách đơn hàng | Quản trị Admin</title>




<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Main CSS-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<!-- or -->
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<!-- Font-icon css-->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script defer src="<?= _WEB_ROOT . "/app/public/assets/admin/js/dashboard.js" ?>"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>



<style>
  .highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 1000px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}
.embed-responsive-16by9::before{
  padding:0;
}
.highcharts-drilldown-axis-label{
  text-decoration: none!important;
}
</style>

<body  class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="http://localhost/itjobs/admin/account/logout"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?=  "http://localhost//itjobs/app/public/assets/admin/images/".$_SESSION['admin']['image']?>" width="50px" alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b><?= $_SESSION['admin']['fullname']?></b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <li><a class="app-menu__item active" href="<?= _WEB_ROOT . '/admin/dashboard' ?>"><span class="app-menu__label">Bảng điều khiển</span></a></li>
      <li><a class="app-menu__item " href="<?= _WEB_ROOT . '/admin/employeeManager' ?>">
          <span class="app-menu__label">Quản lý nhân viên</span></a></li>
      <li><a class="app-menu__item " href="http://localhost//itjobs/admin/seekerManager"><span class="app-menu__label">Quản lý người ứng tuyển</span></a></li>
      <li><a class="app-menu__item " href="http://localhost//itjobs/admin/EmployerManager"><span class="app-menu__label">Quản lý nhà tuyển dụng</span></a>
      </li>
      <li><a class="app-menu__item " href="<?= _WEB_ROOT . '/admin/company' ?>"></i><span class="app-menu__label">Quản lý công ty</span></a></li>
      <li><a class="app-menu__item " href="<?= _WEB_ROOT . '/admin/Jobwelfare' ?>"></i><span class="app-menu__label">Quản lý phúc lợi</span></a></li>

      <li><a class="app-menu__item " href="<?= _WEB_ROOT . '/admin/Profession' ?>"></i><span class="app-menu__label">Quản lý nghề nghiệp</span></a></li>
      <li><a class="app-menu__item " href="<?= _WEB_ROOT . '/admin/reportJobManager' ?>"></i><span class="app-menu__label">Quản lý báo cáo</span></a></li>



      <!-- <li><a class="app-menu__item" href="page-calendar.html"><i class='app-menu__icon bx bx-calendar-check'></i><span class="app-menu__label">Lịch công tác </span></a></li> -->
      <li><a class="app-menu__item" href="#"><span class="app-menu__label">Cài
            đặt hệ thống</span></a></li>
    </ul>
  </aside>
  <main class="app-content">
    
    <div class="row">
      <div class="col-md-12">
        <div class="app-title">
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="#"><b>Bảng điều khiển</b></a></li>
          </ul>
          <div id="clock"></div>
        </div>
      </div>
    </div>
   
    
    <div class="row">
      <!--Left-->
      <div class="col-md-12 col-lg-6">
        <div class="row">
          <!-- col-6 -->
          <div class="col-md-6 col-lg-6">
            <div class="widget-small primary coloured-icon">
              <div class="info">
                <h4>Tổng số người tuyển dụng</h4>
                <p><b style="font-size:14px"><?= $count_employer ?> người tuyển dụng</b></p>
                <p class="info-tong">Tổng số người tuyển dụng được quản lý.</p>
              </div>
            </div>
          </div>
          <!-- col-6 -->
          <div class="col-md-6 col-lg-6">
            <div class="widget-small info coloured-icon">
              <div class="info">
                <h4>Tổng số người ứng tuyển </h4>
                <p><b style="font-size:14px"><?= $count_seeker ?> người ứng tuyển</b></p>
                <p class="info-tong">Tổng số người ứng tuyển được quản lý.</p>
              </div>
            </div>
          </div>
          <!-- col-6 -->
          <div class="col-md-6 col-lg-6">
            <div class="widget-small warning coloured-icon">
              <div class="info">
                <h4>Tổng số công ty</h4>
                <p><b style="font-size:14px"><?= $count_company ?>  công ty</b></p>
                <p class="info-tong">Tổng số hóa đơn bán hàng trong tháng.</p>
              </div>
            </div>
          </div>
          <!-- col-6 -->
          <div class="col-md-6 col-lg-6">
            <div class="widget-small danger coloured-icon">
              <div class="info">
                <h4>Tổng số bài đăng</h4>
                <p><b style="font-size:14px"><?= $count_job_post ?>  bài đăng</b></p>
                <p class="info-tong">Tổng số danh mục được quản lý</p>
              </div>
            </div>
          </div>
          <!-- col-12 -->
          <!-- <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Tình trạng đơn hàng</h3>
                  <div>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID đơn hàng</th>
                          <th>Tên khách hàng</th>
                          <th>Tổng tiền</th>
                          <th>Trạng thái</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>AL3947</td>
                          <td>Phạm Thị Ngọc</td>
                          <td>
                            19.770.000 đ
                          </td>
                          <td><span class="badge bg-info">Chờ xử lý</span></td>
                        </tr>
                        <tr>
                          <td>ER3835</td>
                          <td>Nguyễn Thị Mỹ Yến</td>
                          <td>
                            16.770.000 đ	
                          </td>
                          <td><span class="badge bg-warning">Đang vận chuyển</span></td>
                        </tr>
                        <tr>
                          <td>MD0837</td>
                          <td>Triệu Thanh Phú</td>
                          <td>
                            9.400.000 đ	
                          </td>
                          <td><span class="badge bg-success">Đã hoàn thành</span></td>
                        </tr>
                        <tr>
                          <td>MT9835</td>
                          <td>Đặng Hoàng Phúc	</td>
                          <td>
                            40.650.000 đ	
                          </td>
                          <td><span class="badge bg-danger">Đã hủy	</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
               
                </div>
              </div>
               
                <div class="col-md-12">
                    <div class="tile">
                      <h3 class="tile-title">Khách hàng mới</h3>
                    <div>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Tên khách hàng</th>
                            <th>Ngày sinh</th>
                            <th>Số điện thoại</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>#183</td>
                            <td>Hột vịt muối</td>
                            <td>21/7/1992</td>
                            <td><span class="tag tag-success">0921387221</span></td>
                          </tr>
                          <tr>
                            <td>#219</td>
                            <td>Bánh tráng trộn</td>
                            <td>30/4/1975</td>
                            <td><span class="tag tag-warning">0912376352</span></td>
                          </tr>
                          <tr>
                            <td>#627</td>
                            <td>Cút rang bơ</td>
                            <td>12/3/1999</td>
                            <td><span class="tag tag-primary">01287326654</span></td>
                          </tr>
                          <tr>
                            <td>#175</td>
                            <td>Hủ tiếu nam vang</td>
                            <td>4/12/20000</td>
                            <td><span class="tag tag-danger">0912376763</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                  </div>
                </div> -->

        </div>
      </div>
      <!--END left-->
      <!--Right-->
     
  <!-- <div id="container"></div> -->
            </div>
          </div>
          <div class="">
            <div class="tile">
              <h3 class="tile-title">Thống kê bài đăng của từng công ty</h3>
              <div class="embed-responsive embed-responsive-16by9">
              <figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
     
    </p>
</figure>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!--END right-->
    </div>


    <div class="text-center" style="font-size: 13px">
      <p><b>Copyright
          <script type="text/javascript">
            document.write(new Date().getFullYear());
            
          </script> Phần mềm quản lý 
        </b></p>
    </div>
  </main>

</body>