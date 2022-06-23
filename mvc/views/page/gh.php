<div class="container">
<h1><a href="home" target="_self">TRANG CHỦ</a>/<a href="giohang" target="_self">GIỎ HÀNG</a>/THÔNG TIN ĐƠN HÀNG</h1>
    <?php
        var_dump($data['US']);
    ?>
    <div class="main">
    <div class="box-left" style="width: 100%;">
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
            </table>
            </form>
        </div>
    </div>
</div>