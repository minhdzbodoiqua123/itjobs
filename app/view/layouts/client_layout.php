
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?= _WEB_ROOT."/app/public/assets/clients/css/home.css" ?>">
    <script defer src="https://unpkg.com/axios/dist/axios.min.js"></script>
     <script defer src="<?= _WEB_ROOT."/app/library/pristinejs/dist/pristine.js"?>"></script>
     <script defer src="<?= _WEB_ROOT."/app/library/flatpickr/dist/flatpickr.js"?>"></script>
     <link rel="stylesheet" href="<?= _WEB_ROOT."/app/library/flatpickr/dist/flatpickr.min.css" ?>">


</head>
<body class="font-Helvetica">
    <?php
    $this->render('blocks/clients/header');
    $this->render($content, $sub_content);
    $this->render('blocks/clients/footer');
    ?>




</body>
</html>