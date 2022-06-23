<div class="container">
    <h1 style="margin-left: 5%"><a href="">TRANG CHỦ</a>/<?= $data['title'] ?></h1>
    <?php
        if(isset($data['slsp'])){
            echo "<h1 style='margin-left: 5%;margin-top: 20px;'>Có ".$data['slsp']." sản phẩm</h1>";
        }
    ?>
    <section>
        <div class="menu">
            <div class="danhmuc">
            <h2>DANH MỤC SẢN PHẨM</h2>
            <ul>
                <?php
                    $dm = json_decode($data['arrDM']);
                    foreach ($dm as $key => $dm) { ?>
                        <li><a href="sanphamchung/sanphamDM/<?= $dm[0] ?>/1" target="_self"><?= $dm[1] ?></a></li>
                    <?php }
                ?>
            </ul>
            </div>
            <div class="danhmuc">
            <h2>THƯƠNG HIỆU</h2>
            <ul>
                <li><a href="sanphamchung/sanphamTH/SUNRISE/1" target="_self">SUNRISE</a></li>
                <li><a href="sanphamchung/sanphamTH/DW/1" target="_self">DW</a></li>
                <li><a href="sanphamchung/sanphamTH/ORION/1" target="_self">ORION</a></li>
                <li><a href="sanphamchung/sanphamTH/RADO/1" target="_self">RADO</a></li>
                <li><a href="sanphamchung/sanphamTH/KHÁC/1" target="_self">KHÁC</a></li>
            </ul>
            </div>
            <div class="danhmuc">
            <h2>GIỚI TÍNH</h2>
            <ul>
                <li><a href="sanphamchung/sanphamGT/NAM/1" target="_self">NAM</a></li>
                <li><a href="sanphamchung/sanphamGT/NỮ/1" target="_self">NỮ</a></li>
            </ul>
            </div>
        </div>
        <div class="sanpham">
            <?php
                if(isset($data['arrSP'])){
                    $sanpham = json_decode($data['arrSP']);
                    // var_dump($sanpham);
                    foreach ($sanpham as $key => $sp) { ?>
                        <div class="sanpham-con">
                            <div class="img-sp">
                            <img src="./public/uploadIMG/<?= $sp[3] ?>" alt="">
                            <div class="overlay">
                                <a href="" class="buy-btn">Buy</a>
                                <a href="giohang/cart/<?= $sp[0] ?>" target="_self" class="buy-btn">Giỏ hàng</a></a>
                            </div>
                            </div>
                            <div class="message">
                                <h3 style="text-align: center;"><?= $sp[1] ?></h3>
                                <p>Giá: <span><?= $sp[2] ?></span> VNĐ</p>
                            </div>
                        </div>
                    <?php }
                }
            ?>
        </div>
    </section>
    <div class="phantrang">
            <?php
                require_once"./mvc/views/page/".$data['phantrang'].".php";
            ?>
            </div>
</div>