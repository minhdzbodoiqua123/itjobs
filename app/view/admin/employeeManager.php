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
      <li><a class="app-menu__item active" href="<?= _WEB_ROOT . '/admin/employeeManager' ?>">
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

<div class="app-title">
  <ul class="app-breadcrumb breadcrumb side">
    <li class="breadcrumb-item active"><a href="#"><b>Danh sách nhân viên</b></a></li>
  </ul>
  <div id="clock"></div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="row element-button">
          <div class="col-sm-2">

            <a class="btn btn-add btn-sm" href="EmployeeManager/addStaff" title="Thêm"><i class="fas fa-plus"></i>
              Tạo mới nhân viên</a>
          </div>
        
        </div>
        <div id="sampleTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer" style="margin-bottom:15px;">
          <div style="margin:30px 0;" class="row">
            <div class="col-sm-12 col-md-6">
              <div class="dataTables_length" id="sampleTable_length"><label>Hiện
                  <select style="width:60px;" name="itemPerPage" aria-controls="sampleTable" class="form-control form-control-sm">
                   <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select> danh mục</label></div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div id="sampleTable_filter" class="dataTables_filter">
                <div class="d-flex  align-items-center " style="background-color:#f1f1f1;width:300px;">
                  <span class="d-flex align-items-center" style="white-space: nowrap; margin-right:5px; ">Tìm kiếm:</span>
                  <input name="search" style="font-size:16px;height:30px;padding:4px;background-color: transparent;outline:none;border:none;" type="search" class="form-control form-control-sm searchByName" placeholder="" aria-controls="sampleTable">
                  <svg class="d-none remove-search" width="30" height="30" viewBox="0 0 48 48" fill="rgba(22, 24, 35, .34)" xmlns="http://www.w3.org/2000/svg" style="margin: 0px 12px;">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 46C36.1503 46 46 36.1503 46 24C46 11.8497 36.1503 2 24 2C11.8497 2 2 11.8497 2 24C2 36.1503 11.8497 46 24 46ZM15.1466 30.7323L21.8788 24.0001L15.1466 17.2679C14.756 16.8774 14.756 16.2442 15.1466 15.8537L15.8537 15.1466C16.2442 14.756 16.8774 14.756 17.2679 15.1466L24.0001 21.8788L30.7323 15.1466C31.1229 14.756 31.756 14.756 32.1466 15.1466L32.8537 15.8537C33.2442 16.2442 33.2442 16.8774 32.8537 17.2679L26.1214 24.0001L32.8537 30.7323C33.2442 31.1229 33.2442 31.756 32.8537 32.1466L32.1466 32.8537C31.756 33.2442 31.1229 33.2442 30.7323 32.8537L24.0001 26.1214L17.2679 32.8537C16.8774 33.2442 16.2442 33.2442 15.8537 32.8537L15.1466 32.1466C14.756 31.756 14.756 31.1229 15.1466 30.7323Z"></path>
                  </svg>
                </div>

              </div>
            </div>

          </div>
          <?php 
          if(isset($error)){
            echo "<div style='color:red;margin:10px 0; font-weight:bold;'>$error</div>";
          }
          ?>
          <div class="row">
            <div class="col-sm-12">
              <table class="table table-hover table-bordered" id="cart-content">
                <thead>
                  <tr>
                
                    <th>Mã nhân viên </th>
                    <th>Tên nhân viên</th>
                    <th>Email</th>
                    <th>Ảnh thẻ</th>
                    <th>Chức vụ</th>
                    <th>Chức năng</th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($allStaff as $item): ?>
                    <tr>
                      <td><?= $item["id"] ?></td>
                      <td><?= $item["fullname"] ?></td>
                      <td><?= $item["email"] ?></td>
                      <td>
                        <img 
                      style="object-fit:cover;"
                      height="100"
                      width="100"
                      src="<?php echo _WEB_ROOT;?>/app/public/assets/admin/images/<?= $item['image']?>"
                      alt="">
                    </td>

                    <td><?= $item["user_type_name"] ?></td>
                   
                      <td>
                     <form action=""method="post">
                      <input type="hidden" name="id"value="<?=  $item["id"]?>">
                      <input type="hidden" name="id_position"value="<?=  $item["id_position"]?>">

                     <a href="EmployeeManager/deleteStaff/<?= $item["id"] ?>" class="btn  btn-sm trash" type="submit" title="Xóa">
                        <i class="fas fa-trash-alt"></i> 
                      </a>
                    <a href="EmployeeManager/editStaff/<?= $item["id"] ?>" class="btn  btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></a>
                      </td>
                    </form>
              </tr>
                      </tr>
                  <?php endforeach;?>


                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
          
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="sampleTable_paginate">
                <ul class="pagination">
               
           
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>


</body>