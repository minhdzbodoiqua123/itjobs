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



<body onload="time()" class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="/index.html"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/images/hay.jpg" width="50px" alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b>Võ Trường</b></p>
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
            <div class="widget-small primary coloured-icon"><i class='icon bx bxs-user-account fa-3x'></i>
              <div class="info">
                <h4>Tổng khách hàng</h4>
                <p><b style="font-size:14px"><?= $number_customers ?> khách hàng</b></p>
                <p class="info-tong">Tổng số khách hàng được quản lý.</p>
              </div>
            </div>
          </div>
          <!-- col-6 -->
          <div class="col-md-6 col-lg-6">
            <div class="widget-small info coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
              <div class="info">
                <h4>Tổng sản phẩm</h4>
                <p><b style="font-size:14px"><?= $number_products ?> sản phẩm</b></p>
                <p class="info-tong">Tổng số sản phẩm được quản lý.</p>
              </div>
            </div>
          </div>
          <!-- col-6 -->
          <div class="col-md-6 col-lg-6">
            <div class="widget-small warning coloured-icon"><i class='icon bx bxs-shopping-bags fa-3x'></i>
              <div class="info">
                <h4>Tổng đơn hàng</h4>
                <p><b style="font-size:14px"><?= $number_order ?> đơn hàng</b></p>
                <p class="info-tong">Tổng số hóa đơn bán hàng trong tháng.</p>
              </div>
            </div>
          </div>
          <!-- col-6 -->
          <div class="col-md-6 col-lg-6">
            <div class="widget-small danger coloured-icon"><i class='icon  fas fa-book'></i>
              <div class="info">
                <h4>Tổng danh mục</h4>
                <p><b style="font-size:14px"><?= $number_cate ?> danh mục</b></p>
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
      <div class="col-md-12 col-lg-6">
        <div class="row">
          <div class="col-md-12">
            <div style="margin:0;border-radius:0px;-webkit-border-radius: 0;" class="tile">
              <h3 style="margin-bottom:0px;"class="tile-title">Thống kê hàng hóa</h3>
              <figure class="highcharts-figure">
</div>
<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
        
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>

                    <th>Danh mục sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá cao nhất</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá trung bình</th>

                  </tr>
                </thead>
          
                <tbody>
                  <?php foreach ($dataCate as $key=> $item): ?>
                  <tr>
                    <td><?=  $item["cat_name"] ?></td>
                    <td><?= $detail_Statistical[$key]["quantity"] ?></td>
                    <td>
                    <?= product_price($detail_Statistical[$key]["maxPrice"])."đ" ?>
                    </td>
                    <td>
                    <?= product_price($detail_Statistical[$key]["minPrice"])."đ" ?>
                    </td>
                    <td>
                    <?= product_price($detail_Statistical[$key]["average"])."đ" ?>
                    </td>
                  </tr>
                  <?php  endforeach;?>

                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  <div id="container"></div>

</figure>
            </div>
          </div>
          <!-- <div class="col-md-12">
            <div class="tile">
              <h3 class="tile-title">Thống kê 6 tháng doanh thu</h3>
              <div class="embed-responsive embed-responsive-16by9">
                <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
              </div>
            </div>
          </div> -->
        </div>

      </div>
      <!--END right-->
    </div>


    <div class="text-center" style="font-size: 13px">
      <p><b>Copyright
          <script type="text/javascript">
            document.write(new Date().getFullYear());
          </script> Phần mềm quản lý bán hàng
        </b></p>
    </div>
  </main>

</body>