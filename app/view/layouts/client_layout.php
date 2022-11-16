<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/home.css" ?>">
    <script defer src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script defer src="<?= _WEB_ROOT . "/app/library/pristinejs/dist/pristine.js" ?>"></script>
    <script defer src="<?= _WEB_ROOT . "/app/library/flatpickr/dist/flatpickr.js" ?>"></script>
   

    <script defer src="<?= _WEB_ROOT . "/app/global/js/multi-select-dropdown.js" ?>"></script>
    <link rel="stylesheet" href="<?= _WEB_ROOT . "/app/library/flatpickr/dist/flatpickr.min.css" ?>">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
</head>

<body class="font-Helvetica">
    <?php
    $this->render('blocks/clients/header');
    $this->render($content, $sub_content);
    $this->render('blocks/clients/footer');
    ?>




</body>

</html>