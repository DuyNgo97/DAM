<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/dam/" target ="_blank">
    <link rel="stylesheet" href="public/css/hd.css">
    <link rel="stylesheet" href="public/css/sanphampage.css">
    <link rel="stylesheet" href="public/css/reponsive.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">
    <title>Sản phẩm</title>
</head>
<body>
        <?php
            require_once"./mvc/views/body/hd.php";
        ?>
        <?php
            require_once'./mvc/views/page/'.$data["user"].'.php';
        ?>
        <?php
            require_once"./mvc/views/body/footer.php";
        ?>
</body>
</html>