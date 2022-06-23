<?php
	$vaitro = $_SESSION['vaitro'];
	$arr = ['ADMIN'];
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
    $a1 = json_decode($data['arrUS']);
?>

<div class="table-content">
                            <section>
    <form action="admin/updateUser" method="POST" style="overflow: auto;">
    <table border="1" style="width: 100%; text-align: center;">
        <tr>
            <td>ID</td>
            <td>Họ và tên</td>
            <td>Địa chỉ</td>
            <td>User name</td>
            <td>PassWord</td>
            <td>Email</td>
            <td>Vai trò (USER/QTV/ADMIN)</td>
        </tr>
        <?php
            foreach ($a1 as $key => $a1) { ?>
                <tr>
                    <td><input type="text" style="text-align: center;" readonly='readonly' name="id" value="<?= $a1[0]?>"></td>
                    <td><input type="text" style="text-align: center;" value="<?= $a1[1]?>" name="name"></td>
                    <td><input type="text" style="text-align: center;" value="<?= $a1[2]?>" name="diachi"></td>
                    <td><input type="text" style="text-align: center;" value="<?= $a1[4]?>" name="taikhoan"></td>
                    <td><input type="text" style="text-align: center;" value="<?= $a1[5]?>" name="password"></td>
                    <td><input type="text" style="text-align: center;" value="<?= $a1[3]?>" name="email"></td>
                    <td><input type="text" style="text-align: center;" value="<?= $a1[6]?>" name="vaitro"></td>
                </tr> 
            <?php }
        ?>
    </table>
    <button type="submit" name="btn-capnhat" style="margin-left: 42%; margin-top: 3%; border-radius: 5px; border: 1px solid black; width: 100px; height: 30px;">Cập nhật</button>
    </form>
    </section> 
							</div>
                            