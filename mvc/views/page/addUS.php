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
<div class="table-content">
    <h1>
        <?php
        if(isset($data['kq'])){
            $kq = json_decode($data["kq"]);
            if($kq){
                echo "Đăng ký thành công!";
            }else{
                echo "Đăng ký thất bại";
            }
        }   
        ?>
    </h1>
                            <form action="admin/insertUser" method="post" name="form1">
        							<label for="">Username</label><br>
									<input type="text" name="username"><br>
									<label for="">Password</label><br>
									<input type="password" name="password"><br>
        							<label for="">Email</label><br>
        							<input type="text" name="email"><br>
        							<label for="">Vai trò</label><br>
                                    <label for="">USER</label>
                                    <input type="radio" value="USER" name="vaitro" checked> --
                                    <label for="">QTV</label>
                                    <input type="radio" value="QTV" name="vaitro"> --
                                    <label for="">ADMIN</label>
                                    <input type="radio" value="ADMIN" name="vaitro"> <br> 
									<button type="submit" name="btn-submit">Đăng ký</button>
    </form>
							</div>