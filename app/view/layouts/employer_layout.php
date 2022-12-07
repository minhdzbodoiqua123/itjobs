<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= _WEB_ROOT . "/app/global/tailwind.css" ?>">
    <link rel="stylesheet" href="<?= _WEB_ROOT."/app/public/assets/employer/css/main.css" ?>">
    
    <script  src="<?= _WEB_ROOT . "/app/library/flatpickr/dist/flatpickr.js" ?>"></script>

    <script  src="<?= _WEB_ROOT . "/app/library/pristinejs/dist/pristine.js" ?>"></script>

    <script defer src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script defer src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/bootstrap.css" ?>">
<link rel="stylesheet" href="<?= _WEB_ROOT ."/app/global/css/multi-select-dropdown.css" ?>">

    <script defer src="<?= _WEB_ROOT . "/app/global/js/multi-select-dropdown.js" ?>"></script>
    <link rel="stylesheet" href="<?= _WEB_ROOT . "/app/global/css/multi-select-dropdown.css" ?>">
    <script defer type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
</head>

<body class="font-Helvetica">

    <?php
    $this->render('blocks/employer/header');
    $this->render($content, $sub_content);
    $this->render('blocks/employer/footer');

    ?>




</body>


</html>