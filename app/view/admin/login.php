<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Đăng nhập quản trị | Website quản trị v2.0</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/app/public/assets/admin/css/util.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/app/public/assets/admin/css/sub.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/app/public/assets/admin/css/main.css">

  
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?php echo _WEB_ROOT; ?>/app/public/assets/admin/images/team.jpg" alt="IMG">
                </div>
                <!--=====TIÊU ĐỀ======-->
                <div class="login100-form validate-form">
                    <span class="login100-form-title">
                        <b>ĐĂNG NHẬP HỆ THỐNG </b>
                    </span>
                    <!--=====FORM INPUT TÀI KHOẢN VÀ PASSWORD======-->
                    <form id="loginForm" method="post">
                        <div class="wrap-input100 validate-input">
                            <div>

                                <input required data-pristine-required-message="Vui lòng nhập email của bạn" style="position: relative;" class="input100" type="text" autofocus autocomplete="on" placeholder="Tài khoản quản trị" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ""; ?>" name="email" id="username">
                                <i style="position: absolute;top:13px;left:20px;" class='bx bx-user'></i>
                                <small style="color:red;display:block;margin:10px 0;font-size:16px;"></small>
                            </div>


                        </div>



                        <div class="wrap-input100 validate-input">
                            <div>
                                <input required data-pristine-required-message="Vui lòng nhập mật khẩu của bạn"style="position: relative;" autocomplete="off" class="input100" type="password" name="password" placeholder="Mật khẩu" name="current-password" id="password-field">
                                <span toggle="#password-field" class="bx fa-fw bx-hide field-icon click-eye"></span>
                                <i style="position: absolute;top:13px;left:20px;" class='bx bx-key'></i>

                            </div>
                            <?php if (isset($errors)) : ?>
                                <?php foreach ($errors as $item) : ?>
                                    <small style="color:red;display:block;margin:10px 0;font-size:16px;"><?php echo $item ?></small>
                                <?php endforeach; ?>
                            <?php endif; ?>


                        </div>

                        <div style="margin-top:20px;">
                            <input style="width:25px;" type="checkbox" name="remember">
                            <span>Ghi nhớ đăng nhập</span>
                        </div>
                        <!--=====ĐĂNG NHẬP======-->
                        <div class="container-login100-form-btn">
                            <input type="submit" value="Đăng nhập" id="submit" />
                        </div>
                        <!--=====LINK TÌM MẬT KHẨU======-->
                        <div class="text-right p-t-12">
                            <a class="txt2" href="ForgetPassword">
                                Bạn quên mật khẩu?
                            </a>
                        </div>
                    </form>
                    <!--=====FOOTER======-->
                    <div class="text-center p-t-70 txt2">
                        Phần mềm quản lý bán hàng <i class="far fa-copyright" aria-hidden="true"></i>
                        <script type="text/javascript">
                            document.write(new Date().getFullYear());
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Javascript-->
    <script defer src="<?= _WEB_ROOT . "/app/library/pristinejs/dist/pristine.js" ?>"></script>

    <script defer src="<?php echo _WEB_ROOT; ?>/app/public/assets/admin/js/login.js"></script>



</body>

</html>