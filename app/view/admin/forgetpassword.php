<!DOCTYPE html>
<html lang="en">

<head>
    <title>Khôi phục mật khẩu | Website quản trị v2.0</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/app/public/assets/admin/css/util.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/app/public/assets/admin/css/sub.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                <img src="<?php echo _WEB_ROOT;?>/app/public/assets/admin/images/team.jpg" alt="IMG">
                </div>
                <form method="post"class="login100-form validate-form" autocomplete="on">
                    <span class="login100-form-title">
                        <b>KHÔI PHỤC MẬT KHẨU</b>
                    </span>
                    <form method="post" autocomplete="on">
                   
                        <div class="wrap-input100 validate-input">
                            <div>
                                <input style="position: relative;" class="input100" placeholder="Nhập email" name="email" type="text" autofocus="" placeholder="Tài khoản quản trị" value="" name="email" id="username">
                                <i style="position: absolute;top:13px;left:20px;" class="bx bx-mail-send"></i>
                             
                            </div>


                        </div>
                       <?php if(isset($errors)){?>
                        <?php foreach ($errors  as $item): ?>
                            <small style="color:red;display:block;margin:10px 0;font-size:16px;"><?php echo $item;?></small>
                       <?php endforeach;?>
                        <?php }?>

                        <?php if(isset($success)){?>
                        <?php foreach ($success  as $item): ?>
                            <small style="color:#21c421;display:block;margin:10px 0;font-size:16px;"><?php echo $item;?></small>
                       <?php endforeach;?>
                        <?php }?>
                        <div class="container-login100-form-btn">
                            <input type="submit" value="Lấy mật khẩu" />
                        </div>

                        <div class="text-center p-t-12">
                            <a class="txt2" href="Login">
                                Trở về đăng nhập
                            </a>
                        </div>
                    </form>
                    <div class="text-center p-t-70 txt2">
                        Phần mềm quản lý bán hàng <i class="far fa-copyright" aria-hidden="true"></i>
                        <script type="text/javascript">
                      document.write(new Date().getFullYear());
                    </script> 
                    </div>
                </form>
            </div>
        </div>
    </div>
  <script defer src="<?php echo _WEB_ROOT; ?>/app/public/assets/admin/js/ForgetPassword.js"></script>
    
</body>

</html>