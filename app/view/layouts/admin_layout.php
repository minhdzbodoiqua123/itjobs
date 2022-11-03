<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=_WEB_ROOT."/app/global/tailwind.css" ?>">
    <script defer src="https://unpkg.com/axios/dist/axios.min.js"></script>
    
</head>

<body class="font-Helvetica">
    <?php
     
   $this->render('blocks/admin/header');
   $this->render($content,$sub_content);
   $this->render('blocks/admin/footer');

    ?>

   

</body>

</html>