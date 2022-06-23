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
    if(isset($data['deleteUS'])){
        $del = json_decode($data['deleteUS']);
        if($del){
            echo "Xóa thành công!";
        }else{
            echo "Xóa thất bại!";
        }
    }
?>
<div class="table-content">
                            <section>
    <form action="" method="POST">
    <table border="1" style="width: 100%; text-align: center;">
        <tr>
            <td>ID</td>
            <td>Họ và tên</td>
            <td>Địa chỉ</td>
            <td>User name</td>
            <td>PassWord</td>
            <td>Email</td>
            <td>Vai trò</td>
            <td colspan="2">Tác vụ</td>
        </tr>
        <?php
            $a = json_decode($data['arrUS']);
            // var_dump($a);
            foreach ($a as $key => $a1) { ?>
                <tr>
                    <td><?= $a1[0]?></td>
                    <td><?= $a1[1]?></td>
                    <td><?= $a1[2]?></td>
                    <td><?= $a1[4]?></td>
                    <td><?= $a1[5]?></td>
                    <td><?= $a1[3]?></td>
                    <td><?= $a1[6]?></td>
                    <td></td>
                    <td><a href="admin/viewEdit/<?= $a1[0] ?>">Edit</a></td>
                    <td><a href="admin/viewXoaUS/<?= $a1[0] ?>">Xoa</a></td>
                </tr> 
            <?php }
        ?>
    </table>
    </form>
    </section> 
							</div>
                            