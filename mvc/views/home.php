<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="http://localhost/dam/" target ="_blank">
    <link rel="stylesheet" href="public/css/id4.css">
    <link rel="stylesheet" href="public/css/reponsive.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=396975055397602&autoLogAppEvents=1"
        nonce="EzMkpxtb"></script>
    <div class="slide-nav">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Tài Khoản</a></li>
            <li><a href="#">Sản Phẩm</a></li>
            <li><a href="#">Bảo Hành</a></li>
            <li>
                <ion-icon class="icon-exit" name="exit" onclick="exit()"></ion-icon>
            </li>
        </ul>
    </div>
    <div class="container">
        <?php
            require_once"./mvc/views/body/header.php";
        ?>
        <?php
            require_once"./mvc/views/body/main.php";
        ?>
        <?php
            require_once"./mvc/views/body/footer.php";
        ?>
    </div>
</body>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="./public/js/id22.js"></script>

</html>