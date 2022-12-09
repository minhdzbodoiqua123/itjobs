<!DOCTYPE html>
<html lang="en">

<head>
  <title>Danh sách đơn hàng | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

</head>

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
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="http://localhost//itjobs/admin/employeeManager" class="list_product">Quản lý nhân viên</a></li>
        <li class="breadcrumb-item"><a href="#">Thêm nhân viên</a></li>
      </ul>
    </div>
    <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Thêm nhân viên</h3>
        <div class="tile-body">
          <div class="row element-button">
           
            <div class="col-sm-2">
              <a class="btn btn-add btnAddCategories btn-sm" href=""><i class="fas fa-folder-plus"></i> Thêm chức vụ</a>
            </div>
            <!-- <div class="col-sm-2">
              <a class="btn btn-add btnAddBrand btn-sm" data-bs-toggle="modal" data-bs-target="#brand"><i class="fas fa-folder-plus"></i> Thêm thương hiệu</a>
            </div> -->
          </div>

          <form id="formUpdate" method="post" class="row" enctype="multipart/form-data">

            <div class="form-group col-md-3">
              <label class="control-label">Tên nhân viên</label>
              <input  class="form-control" name="name" type="text">
              <small></small>
              <span></span>
            </div>

            <div class="form-group col-md-3">
              <label class="control-label">Email</label>
              <input  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" class="form-control" name="email" type="text">
              <small></small>
              <span></span>
             </div>
             <div class="form-group col-md-3">
              <label class="control-label">Password</label>
              <input  class="form-control" name="password" type="password">
              <small></small>
              <span></span>
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Chức vụ</label>
              <select class="form-control"name="position" >
                <?php foreach ($allPosition as $item): ?>
                    <option value="<?= $item["id"] ?>"><?= $item["user_type_name"] ?></option>
               <?php endforeach;?>
           </select>
              <small></small>
              <span></span>
            </div>
            
            <div class="form-group col-md-3">
              <label class="control-label">Số điện thoại</label>
              <input  class="form-control" pattern="(84|0[3|5|7|8|9])+([0-9]{8})\b" name="phone_number" type="text">

              <small></small>
              <span></span>
            </div>


            <div class="form-group col-md-12">
              <label class="control-label">Ảnh thẻ</label>
              <input type="file" id="uploadfile" name="ImageUpload"value=""  />
                <input type="file" name="fileUpload" id="file-upload">
                <label style="margin-top:10px" class="file-upload Choicefile" for="file-upload">Upload file</label>
                <div style="margin:20px 0" class="file-upload-filename"></div>
              
             <div class="box">
             <div class="loader d-none"></div>
             <img style="margin:15px 0;" height="400" width="400" src="" id="thumbimage"class="preview d-none" height="200" alt="Image preview">
             </div>
                  <small></small>
                  <span></span>
            </div>
        
            
            <div class="form-group col-md-12">
              <button class="btn btn-save" name="submit" type="submit">Lưu lại</button>
              <a class="btn btn-cancel" href="<?= _WEB_ROOT."/admin/EmployeeManager" ?>">Hủy bỏ</a>
            </div>
          </form>
        </div>

      </div>
    </div>
    </div>
  </main>
<script  src="<?php echo _WEB_ROOT;?>/app/public/assets/admin/js/AddStaff.js"></script>

  <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="src/jquery.table2excel.js"></script>
  <script src="js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>
  <!-- Page specific javascripts-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <!-- Data table plugin-->
  <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">
    $('#sampleTable').DataTable();
  </script>
  <script>
    function deleteRow(r) {
      var i = r.parentNode.parentNode.rowIndex;
      document.getElementById("myTable").deleteRow(i);
    }
    jQuery(function() {
      jQuery(".trash").click(function() {
        swal({
            title: "Cảnh báo",

            text: "Bạn có chắc chắn là muốn xóa?",
            buttons: ["Hủy bỏ", "Đồng ý"],
          })
          .then((willDelete) => {
            if (willDelete) {
              swal("Đã xóa thành công.!", {

              });
            }
          });
      });
    });
    oTable = $('#sampleTable').dataTable();
    $('#all').click(function(e) {
      $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
      e.stopImmediatePropagation();
    });

    //EXCEL
    // $(document).ready(function () {
    //   $('#').DataTable({

    //     dom: 'Bfrtip',
    //     "buttons": [
    //       'excel'
    //     ]
    //   });
    // });


    //Thời Gian
    function time() {
      var today = new Date();
      var weekday = new Array(7);
      weekday[0] = "Chủ Nhật";
      weekday[1] = "Thứ Hai";
      weekday[2] = "Thứ Ba";
      weekday[3] = "Thứ Tư";
      weekday[4] = "Thứ Năm";
      weekday[5] = "Thứ Sáu";
      weekday[6] = "Thứ Bảy";
      var day = weekday[today.getDay()];
      var dd = today.getDate();
      var mm = today.getMonth() + 1;
      var yyyy = today.getFullYear();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      nowTime = h + " giờ " + m + " phút " + s + " giây";
      if (dd < 10) {
        dd = '0' + dd
      }
      if (mm < 10) {
        mm = '0' + mm
      }
      today = day + ', ' + dd + '/' + mm + '/' + yyyy;
      tmp = '<span class="date"> ' + today + ' - ' + nowTime +
        '</span>';
      document.getElementById("clock").innerHTML = tmp;
      clocktime = setTimeout("time()", "1000", "Javascript");

      function checkTime(i) {
        if (i < 10) {
          i = "0" + i;
        }
        return i;
      }
    }
    //In dữ liệu
    var myApp = new function() {
      this.printTable = function() {
        var tab = document.getElementById('sampleTable');
        var win = window.open('', '', 'height=700,width=700');
        win.document.write(tab.outerHTML);
        win.document.close();
        win.print();
      }
    }
    //     //Sao chép dữ liệu
    //     var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

    // copyTextareaBtn.addEventListener('click', function(event) {
    //   var copyTextarea = document.querySelector('.js-copytextarea');
    //   copyTextarea.focus();
    //   copyTextarea.select();

    //   try {
    //     var successful = document.execCommand('copy');
    //     var msg = successful ? 'successful' : 'unsuccessful';
    //     console.log('Copying text command was ' + msg);
    //   } catch (err) {
    //     console.log('Oops, unable to copy');
    //   }
    // });


    //Modal
    $("#show-emp").on("click", function() {
      $("#ModalUP").modal({
        backdrop: false,
        keyboard: false
      })
    });
  </script>
</body>

</html>