<section id="banner">
            <nav>
                <li>
                <a href="home" class="logoA" target="_self">
                    <img src="public/image/Logo.png" alt="" class="logo1">
                </a>
                </li>
                <ul>
                    <li><a href="home" target="_self">Giới thiệu</a></li>
                    <li><a href="sanphamchung/sayhi/1" target="_self">Sản phẩm</a>
                        <ul>
                            <?php
                                $danhmuc = json_decode($data["arrDM"]);
                                // var_dump($danhmuc);
                                foreach ($danhmuc as $key => $dm) {
                                    echo '
                                    <li><a href="#" target="_self">'.$dm[1].'</a>
                                    <div id="chitietsp">
                                        <div id="muc-con">
                                            <h1 style="text-align:center;">Thương hiệu</h1>
                                            <hr>
                                            <div id="thongtin-sanpham">
                                                    <h3><a href="">LONGGINES</a></h3>
                                                    <h3><a href="">TISSOT</a></h3>
                                                    <h3><a href="">DW</a></h3>
                                                    <h3><a href="">HAMILTON</a></h3>
                                            </div>
                                        </div>
                                        <div id="muc-con">
                                        <h1 style="text-align:center;">Phong cách</h1>
                                            <hr>
                                            <div id="thongtin-sanpham">
                                                    <h3><a href="">THỂ THAO</a></h3>
                                                    <h3><a href="">SANG TRỌNG</a></h3>
                                                    <h3><a href="">HIỆN ĐẠI</a></h3>
                                                    <h3><a href="">THỜI TRANG</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                    ';
                                }
                            ?>
                            <!-- <li><a href="#">ĐỒNG HỒ NỮ</a>
                                <div id="chitietsp">
                                <div id="muc-con">
                                        <h1 style="text-align:center;">Thương hiệu</h1>
                                        <hr>
                                        <div id="thongtin-sanpham">
                                                <h3><a href="">LONGGINES</a></h3>
                                                <h3><a href="">TISSOT</a></h3>
                                                <h3><a href="">DW</a></h3>
                                                <h3><a href="">HAMILTON</a></h3>
                                        </div>
                                    </div>
                                    <div id="muc-con">
                                    <h1 style="text-align:center;">Phong cách</h1>
                                        <hr>
                                        <div id="thongtin-sanpham">
                                                <h3><a href="">THỂ THAO</a></h3>
                                                <h3><a href="">SANG TRỌNG</a></h3>
                                                <h3><a href="">HIỆN ĐẠI</a></h3>
                                                <h3><a href="">THỜI TRANG</a></h3>
                                        </div>
                                    </div>
                                </div>    
                            </li>
                            <li><a href="#">ĐỒNG HỒ THỤY SĨ</a>
                                <div id="chitietsp">
                                    
                                </div>    
                            </li>
                            <li><a href="#">SẢN PHẨM KHÁC</a>
                                <div id="chitietsp">
                                    <div id="muc-con">
                                    <h1 style="text-align:center;"></h1>
                                        <hr>
                                        <div id="thongtin-sanpham">
                                                <h3><a href="">ĐỒNG HỒ ĐÔI</a></h3>
                                                <h3><a href="">ĐỒNG HỒ TREO TƯỜNG</a></h3>
                                                <h3><a href="">ĐỒNG HỒ ĐỂ BÀN</a></h3>
                                                <h3><a href="">ĐỒNG HỒ BÁO THỨC</a></h3>
                                                <h3><a href="">PHỤ KIỆN ĐỒNG HỒ</a></h3>
                                                <h3><a href="">TRANG SỨC DW</a></h3>
                                        </div>
                                    </div>
                                </div>    
                            </li> -->
                        </ul>
                    </li>
                    <li><a href="#" target="_self">Dịch vụ</a></li>
                    <li><a href="giohang" target="_self">Giỏ hàng</a></li>
                    <li><a href="#conten3" target="_self">Tìm kiếm</a>
                    <div id="timkiem">
                            <form action="sanphamchung/timkiemsp" method="post" target="_self">
                            <input type="text" id="box-timkiem" name="ten_sp" placeholder="Nhập sản phẩm cần tìm kiếm!!!">
                            <input type="submit" name="btn-timkiem" value="Tìm kiếm">
                            </form>
                        </div>
                    </li>
                    <?php
                        if(isset($_SESSION['user'])){
                            echo '<li><a href="admin" style="color: blue;" target="_self"><span style="font-size:20px; color: white;">ID: </span>'.$_SESSION['user'].'</a>
                            <ul><li><a href="login/dangxuat" target="_self">Đăng xuất</a></li></ul>
                            </li>';
                        }else{
                            echo '<li><a href="login" target="_self">Đăng nhập</a></li>';
                        }
                    ?>
                    <li id="menu-nav">
                        <ion-icon class="mn" name="menu" onclick="open_nav()"></ion-icon>
                    </li>
                </ul>
            </nav>
            <div class="banner-text">
                <h1>Luxury U-watch</h1>
                <h2>Phong cách & thời trang</h2>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum."</p>
            </div>
            <div class="banner-btn">
                <a href="#" target="_self">About</a>
                <a href="#" target="_self">Find out</a>
            </div>
        </section>