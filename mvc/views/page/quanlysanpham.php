<?php
	$vaitro = $_SESSION['vaitro'];
	$arr = ['ADMIN','QTV'];
	if(!in_array($vaitro,$arr)){
		// header('location: http://localhost/mvc-training/home');
		echo '
			<script>
			alert("Bạn không đủ quyền truy cập!");
			window.location = "http://localhost/dam/admin";
			</script>
		';
	}
?>
<?php
    if(isset($data['kqXoa'])){
        if(json_decode($data['kqXoa'])){
            echo '
            <script>
                alert("Xóa sản phẩm thành công!!!");
            </script>
        ';
        }
    }
?>
<div class="table-content" style="box-shadow: 1px 1px 20px black; padding: 20px; border-radius: 5px;">
<section>
<table border="1" style="width: 100%; text-align: center;">
        <tr>
            <td>
                ID
            </td>
            <td>
                Tên Sản Phẩm
            </td>
            <td>
                Giá sản phẩm
            </td>
            <td>
                Image
            </td>
            <td>
                Loại sản phẩm
            </td>
            <td>
                Danh mục
            </td>
            <td>
                Type
            </td>
            <td>
                Thương hiệu
            </td>
            <td>Note</td>
            <td colspan="2">
                Tác vụ
            </td>
        </tr>
            <?php
                if(isset($data['sanpham'])){
                    $arrSP = json_decode($data['sanpham']);
                    // var_dump($arrSP[0]);
                    foreach ($arrSP as $key => $a) { ?>
                    <tr>
                        <td><?= $a[0] ?></td>
                        <td><?= $a[1] ?></td>
                        <td><?= $a[2] ?> VNĐ</td>
                        <td style="height: 138px; width: 200px;">
                            <img style="height: 100%; width: 100%;" src="./public/uploadIMG/<?= $a[3] ?>" alt="">
                        </td>
                        <td><?= $a[4] ?></td>
                        <td><?= $a[5] ?></td>
                        <td><?= $a[6] ?></td>
                        <td><?= $a[7] ?></td>
                        <td><?= $a[8] ?></td>
                        <td><a href="admin/viewEditSanPham/<?= $a[0] ?>">Edit</a></td>
                        <td><a href="admin/deleteSanPham/<?= $a[0] ?>">Xóa</a></td>
                    </tr>
                    <?php }
                }
            ?>
    </table>
</section>
</div>