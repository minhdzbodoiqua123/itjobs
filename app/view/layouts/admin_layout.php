<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/admin/css/main.css" ?>">

    <script defer src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script defer src="<?= _WEB_ROOT . "/app/library/pristinejs/dist/pristine.js" ?>"></script>
   

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body class="font-Helvetica">
    <?php
     
   $this->render('blocks/admin/header');
   $this->render($content,$sub_content);
   $this->render('blocks/admin/footer');

    ?>

   

</body>

</html>