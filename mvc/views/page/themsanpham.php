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
    if(isset($data['check'])){
        $check = json_decode($data['check']);
        if($check == true){
            echo "<h1 style='color:red'>Thêm sản phẩm thành công</h1>";
        }else{
            echo "<h1 style='color:red'>Thêm sản phẩm không thành công</h1>";
        }
    }
    if(isset($data["erro"])){
        $erro = json_decode($data["erro"]);
        // echo "<br>";
        foreach ($erro as $key => $e) {
            echo "<h1 style='color:red'>$e</h1>";
        }
    }
?>
<?php
    // var_dump(json_decode($data['arrDM']));
    $arrDM = json_decode($data['arrDM']);
    $arrLoai = json_decode($data['arrLoai']);
    // var
?>
<div class="table-content" style="width: 500px; box-shadow: 1px 1px 10px black;">
<form action="admin/AddSanPham" method="POST" enctype="multipart/form-data">
    <h1 style="text-align: center;">Upload</h1>
    <!-- <label for="">ID:</label><br> -->
    <!-- <input type="text" name="idSP" placeholder="ID"><br> -->
    <label for="">Tên sản phẩm:</label><br>
    <input type="text" name="tensp" placeholder="Tên sản phẩm"><br>
    <label for="">Giá:</label><br>
    <input type="text" name="giasp" placeholder="Giá"><br><br>
    <label for="">Kiểu:</label><br>
    <select name="kieu" id="">
        <option value="NAM">Nam</option>
        <option value="NỮ">Nữ</option>
        <option value="KHÁC">Khác</option>
    </select><br><br>
    <label for="">Thương hiệu:</label><br>
    <select name="thuonghieu" id="">
        <option value="SUNRISE">SUNRISE</option>
        <option value="DW">DW</option>
        <option value="RADO">RADO</option>
        <option value="ORION">ORION</option>
        <option value="KHÁC">KHÁC</option>
    </select><br><br>
    <label for="">Danh mục sản phẩm:</label><br>
    <select name="danhmuc" id="">
        <?php
            foreach ($arrDM as $key => $arr) { ?>
                <option value="<?= $arr[0] ?>"><?= $arr[1] ?></option>      
            <?php }
        ?>
    </select>
    <br><br>
    <label for="">Loại sản phẩm:</label><br>
    <select name="loai" id="">
        <?php
            foreach ($arrLoai as $key => $arr) { ?>
                <option value="<?= $arr[0] ?>"><?= $arr[1] ?></option>      
            <?php }
        ?>
    </select>
    <br><br>
    <label for="">Hình ảnh sản phẩm:</label><br>
    <input type="file" name="image" placeholder="Image"><br>
    <textarea name="note" id="" cols="30" rows="10"></textarea>
    <button type="submit" name="btn-capnhat">Cập nhật</button>
</form>
</div>