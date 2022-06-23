<section id="conten1">
            <div class="content1-tiltle">
                <p>Giới Thiệu</p>
                <h1 style="width: 650px;">Tại sao chọn chúng tôi?</h1>
            </div>
            <div class="content1-message">
                <div class="message">
                    <p>Phong cách</p>
                    <p>Thời thượng</p>
                </div>
                <div class="img">
                    
                </div>
                <div class="img">

                </div>
                <div class="img">

                </div>
            </div>
        </section>

        <!-- Content2 -->
        <section id="conten2">
            <div class="content1-tiltle">
                <p>Dịch vụ</p>
                <h1>Đa dạng và tốt hơn</h1>
            </div>
            <div class="service-box">
                <div class="img-box">
                    <img src="./public/image/fixed/144pcs-watch-opener-repair-tool-kit-watch.jpg" alt="">
                    <div class="overlay"></div>
                </div>
                <div class="img-box">
                    <img src="./public/image/fixed/istockphoto-898945810-170667a.jpg" alt="">
                    <div class="overlay"></div>
                </div>
                <div class="img-box">
                    <img src="./public/image/fixed/Watch-Repair-Business.jpg" alt="">
                    <div class="overlay"></div>
                </div>
                <div class="img-box">
                    <img src="./public/image/fixed/watch-repair.jpg" alt="">
                    <div class="overlay"></div>
                </div>
                <div class="img-box">
                    <img src="./public/image/fixed/images.jpg" alt="">
                    <div class="overlay"></div>
                </div>
                <div class="img-box">
                    <img src="./public/image/fixed/istockphoto-678165044-170667a.jpg" alt="">
                    <div class="overlay"></div>
                </div>
            </div>
        </section>
        <section id="conten3">
            <div class="content1-tiltle">
                <p> HOT °_</p>
                <h1 style="width: 568px;">Sản Phẩm Nổi Bật</h1>
                <?php
                    require_once"./mvc/views/page/abc.php";
                ?>
            </div>
            
        </section>
        <section id="content4">
            <div class="content1-tiltle">
                <p> SẢN PHẨM</p>
                <div class="gioitinh">
                    <div class="ant nam">
                    <a href="home/sanpham/NAM" target="_self"><span><h2>NAM</h2></span></a>
                    </div>
                    <div class="ant nu">
                    <a href="home/sanpham/NỮ" target="_self"><span><h2>NỮ</h2></span></a>
                    </div>
                </div>
            </div>
            <div class="products">
                <?php
                    if(isset($data['sanpham'])){
                        $arrsp = json_decode($data['sanpham']);
                        // var_dump($arrsp);
                        foreach ($arrsp as $key => $arr) { ?>
                            <form action="giohang" method="POST" target="_self">
                            <div class="sanpham">
                                <a href="home/<?= $arr[0] ?>" target="_self"><img src="./public/uploadIMG/<?= $arr[3] ?>" alt=""></a>
                                <div class="thongtinsanpham">
                                    <h1 style="margin-left: 50px; margin-top: 15px;"><?= $arr[1] ?></h1>
                                    <p style="width: 80%; color:#000c80; opacity: 0.8; font-style: italic; font-size: 16px;"><?= $arr[8] ?></p>
                                    <p>Giá sản phẩm: <mark><?= $arr[2] ?></mark> VNĐ</p>
                                    <p>Thương hiệu: <?= $arr[7] ?></p>
                                    <p>Type: <?= $arr[6] ?></p>
                                    <button name="btn">Buy</button>
                                    <br>
                                    <button name="btn">Giỏ hàng</button> 
                                    </div>
                                </div>
                            </form>
                        <?php }
                    }
                ?>
            </div>
        </section>