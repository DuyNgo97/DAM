<div class="container">
    <h1><a href="" style="text-decoration: none; color: black;"><span>TRANG CHỦ</span></a>/GIỎ HÀNG</h1>
    <div class="cart">
        <div class="box-left">
            <form action="giohang/update" method="POST" target="_self">
            <table>
                <thead>
                <tr>
                    <td colspan="3" style="padding-left: 30px">SẢN PHẨM</td>           
                    <td>GIÁ</td>
                    <td>SỐ LƯỢNG</td>
                    <td>TỔNG CỘNG</td>
                </tr>
                </thead>
                <tbody>
                <?php
                    if (isset($_SESSION['cart'])) {
                        $cart = $_SESSION['cart'];
                        // var_dump($cart);
                        $thanhtien = 0;
                        foreach ($cart as $key => $a) { 
                            if($a['soluong'] == 0){
                                unset($_SESSION['cart'][$key]);
                                unset($cart[$key]);
                                continue;
                            }
                            ?>
                        <tr>
                            <td class="product-remove"><a href="giohang/delete/<?= $a[0] ?>" target="_self" style="text-decoration: none;">Xóa</a></td>
                            <td class="product-thumbnail"><img src="./public/uploadIMG/<?= $a[3] ?>" alt=""></td>
                            <td class="product-name"><?= $a[1] ?></td>
                            <td><?= number_format($a[2]) ?></td>
                            <td><input type="number" min="0" max="100" step="1" name="sl[<?= $a[0] ?>]" value="<?= $a['soluong'] ?>" style="text-align: center;"></td>
                            <td><?=
                                $tong = number_format(($a[2] * $a['soluong']));
                                $thanhtien += ($a[2] * $a['soluong']);
                            ?> VND</td>
                        </tr>      
                    <?php }
                        // var_dump($cart);
                    }
                ?>
                </tbody>
                <tr>
                    <td colspan="3">
                    <a href="sanphamchung/home" target="_self" style="text-decoration: none; text-transform: uppercase; color: black;"><span>Chọn thêm sản phẩm</span></a>
                    </td>
                    <td colspan="4" style="text-align: center">
                        <button>Cập nhật</button>
                    </td>
                </tr>
            </table>
            </form>
        </div>
        <div class="box-right">
            <h1>TỔNG SỐ LƯỢNG</h1>
            <form action="">
            <div class="mess1">
                <div class="line">
                    <p>Tổng cộng:</p>
                    <span><?php if(isset($_SESSION['cart'])){ echo number_format($thanhtien);} ?> VND</span>
                </div>
                <div class="line">
                    <p>Giao hàng:</p>
                    <select name="type-giaohang" id="">
                        <option value="">Bình thường(15,000 VND)</option>
                        <option value="">Hỏa tốc (30,000 VND)</option>
                    </select>
                </div>
            </div>
            <div class="thanhtoan">
            <a href="giohang/thanhtoan/" target="_self" class="btn-thanhtoan" ><span>TIẾN HÀNH THANH TOÁN</span></a>
            </div>
            </form>
        </div>
    </div>
</div>