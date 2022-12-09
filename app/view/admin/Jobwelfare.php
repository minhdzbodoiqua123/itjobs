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
      <li><a class="app-menu__item " href="index.html"><span class="app-menu__label">Bảng điều khiển</span></a></li>
      <li><a class="app-menu__item " href="<?= _WEB_ROOT . '/admin/employeeManager' ?>">
          <span class="app-menu__label">Quản lý nhân viên</span></a></li>
      <li><a class="app-menu__item " href="http://localhost//itjobs/admin/seekerManager"><span class="app-menu__label">Quản lý người ứng tuyển</span></a></li>
      <li><a class="app-menu__item " href="http://localhost//itjobs/admin/EmployerManager"><span class="app-menu__label">Quản lý nhà tuyển dụng</span></a>
      </li>
      <li><a class="app-menu__item " href="<?= _WEB_ROOT . '/admin/company' ?>"></i><span class="app-menu__label">Quản lý công ty</span></a></li>
      <li><a class="app-menu__item active" href="<?= _WEB_ROOT . '/admin/Jobwelfare' ?>"></i><span class="app-menu__label">Quản lý phúc lợi</span></a></li>

      <li><a class="app-menu__item " href="<?= _WEB_ROOT . '/admin/Profession' ?>"></i><span class="app-menu__label">Quản lý nghề nghiệp</span></a></li>
      <li><a class="app-menu__item " href="<?= _WEB_ROOT . '/admin/reportJobManager' ?>"></i><span class="app-menu__label">Quản lý báo cáo</span></a></li>



      <!-- <li><a class="app-menu__item" href="page-calendar.html"><i class='app-menu__icon bx bx-calendar-check'></i><span class="app-menu__label">Lịch công tác </span></a></li> -->
      <li><a class="app-menu__item" href="#"><span class="app-menu__label">Cài
            đặt hệ thống</span></a></li>
    </ul>
  </aside>
  <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách phúc lợi</b></a></li>
      </ul>
      <div id="clock"></div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" href="<?= _WEB_ROOT . '/admin/Jobwelfare/addJobwelfare' ?>" title="Thêm"><i class="fas fa-plus"></i>
                  Tạo mới phúc lợi</a>
              </div>

            </div>
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th width="10"><input type="checkbox" id="all"></th>
                  <th>ID</th>
                  <th>Tên việc phúc lợi</th>
                  <th>Chức năng</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data_job_welfare as $item) { ?>
                  <tr>
                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item["welfare_type"] ?></td>
                    <td>
                      <a href="<?= _WEB_ROOT . '/admin/Jobwelfare/deleteJobwelfare/' . $item["id"] ?>" class="btn  btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </a>
                      <a href="<?= _WEB_ROOT . '/admin/Jobwelfare/editJobwelfare/' . $item["id"] ?>" class="btn  btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>