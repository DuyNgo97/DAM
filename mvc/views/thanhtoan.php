<?php
    if(!isset($_SESSION['user'])){ ?>
        <script>
            alert("Bạn chưa đăng nhập!");
            window.location =("http://localhost/dam/");
        </script>
    <?php }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/dam/" target="_blank">
    <link rel="stylesheet" href="./public/css/hd.css">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="stylesheet" href="./public/css/giohang1.css">
    <title>GIỎ HÀNG</title>
</head>
<body>
    <?php
        require_once"./mvc/views/body/hd.php";
    ?>
    <?php
        require_once"./mvc/views/page/gh.php";
    ?>
    <?php
        require_once"./mvc/views/body/footer.php";
    ?>
</body>
</html>