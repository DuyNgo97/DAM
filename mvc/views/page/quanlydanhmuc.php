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
    if(isset($data['kq'])){
        $kq = json_decode($data['kq']);
        if($kq){
            echo '<h1>Thêm danh mục thành công!!!</h1>';
        }else{
            echo '<h1>Thêm danh mục không thành công!!!</h1>';
        }
    }
?>
<?php
    if(isset($data['check'])){
        $check = json_decode($data['check']);
        if($check){
            echo '<h1>Xóa danh mục thành công!!!</h1>';
        }else{
            echo '<h1>Xóa danh mục không thành công!!!</h1>';
    }      
    }
?>
<div class="table-content" style="box-shadow: 1px 1px 10px black;">
                            <section>
    <form action="" method="POST">
    <h1 style="text-align: center;">QUẢN LÝ DANH MỤC</h1>
    <table border="1" style="width: 100%; text-align: center;">
        <tr>
            <td>ID</td>
            <td>Loại danh mục</td>
            <td colspan="2">Tác vụ</td>
        </tr>
        <?php
            $a = json_decode($data['danhmuc']);
            // var_dump($a);
            foreach ($a as $key => $a1) { ?>
                <tr>
                    <td><?= $a1[0]?></td>
                    <td><?= $a1[1]?></td>
                    <td><a href="admin/deleteDanhMuc/<?= $a1[0] ?>" style="color: red;">Xóa</a></td>
                </tr> 
            <?php }
        ?>
    </table>
    </form>
    </section> 
							</div>
                            <hr>
<div class="table-content" style="width: 500px; box-shadow: 1px 1px 10px black; padding-bottom: 10px; padding-left: 20px">
    <form action="admin/addDanhMuc" method="POST">
    <h1 style="text-align: center;">THÊM DANH MỤC MỚI</h1>
    <label for="">Tên danh mục: </label>
    <input type="text" name="tendm" placeholder="Đồng Hồ Luxury">
    <button type="submit" name="btn-capnhat">Cập nhật</button>
    </form>
</div>
