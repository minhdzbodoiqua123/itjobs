<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= _WEB_ROOT . "/app/global/tailwind.css" ?>">
    <link rel="stylesheet" href="<?= _WEB_ROOT."/app/public/assets/employer/css/main.css" ?>">
    <script defer src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="dist/pristine.js"  type="text/javascript"></script>
</head>

<body class="font-Helvetica">

    <?php
    $this->render('blocks/employer/header');
    $this->render($content, $sub_content);
    $this->render('blocks/employer/footer');

    ?>




</body>


</html>