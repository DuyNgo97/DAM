<!-- <?php
	$vaitro = $_SESSION['vaitro'];
	$arr = ['ADMIN','QTV'];
	if(!in_array($vaitro,$arr)){
		// header('location: http://localhost/mvc-training/home');
		echo '
			<script>
			alert("Bạn không đủ quyền truy cập!");
			window.location = "http://localhost/dam/home";
			</script>
		';
	}
?> -->
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Admin</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../Imagae/logoweb.png" type="image/x-icon"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <base href="http://localhost/dam/">
	<script src="./public/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<link rel="stylesheet" href="./public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./public/assets/css/atlantis.min.css">
	<link href="./publicassets/styles.css" rel="stylesheet" />
	<link href="./publicassets/prism.css" rel="stylesheet" />
    <style>
        tr td{
            font-size: 1.2rem;
            color: black;
        }
    </style>
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header" data-background-color="light-blue2">
				<a href="home" class="logo" target="_self">
					<img src="./public/image/Logo1.png" alt="" height="50px" width="150px">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="light-blue2">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item">
							<a href="admin" class="nav-link">
								Chức vụ: <span style="font-size: 1.5rem; color: orange; margin: 0 5px;"><?= $_SESSION['vaitro'] ?></span>
							</a>
							<a href="admin" class="nav-link">
								Hello: <span style="font-size: 1.5rem; color: orange; margin: 0 5px;"><?= $_SESSION['user'] ?></span>
							</a>
						</li>
                        <li class="nav-item">
                        <form action="login/dangxuat" method="POST" target="_self">
                        <button type="submit" name="logout">
        Đăng xuất
    </button>
    </form>
                        </li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-info">
						<li class="nav-item active">
							<a href="admin">
								<i class="fas fa-home"></i>
								<p>Home</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu</h4>
						</li>
						<li class="nav-item">
							<a href="admin/viewQLND">
								<span class="letter-icon">Us</span>
								<p>Quản Lí Người Dùng</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="admin/viewaddUser">
								<span class="letter-icon">Add</span>
								<p>Thêm Thành Viên</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="admin/viewDanhMuc">
								<span class="letter-icon">Add</span>
								<p>Quản Lý Danh Mục</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="admin/ViewAddSanPham">
								<span class="letter-icon">Add</span>
								<p>Thêm Sản Phẩm</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="admin/viewquanlysanpham">
								<span class="letter-icon">MG</span>
								<p>Quản Lý Sản Phẩm</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content content-documentation">
				<div class="container-fluid">
					<div class="card card-documentation">
						<div class="card-header bg-info-gradient text-white bubble-shadow">
							<h4><?= $data['title'] ?></h4>
							
						</div>
						<div class="card-body">
							<?php
								require_once'mvc/views/page/'.$data["user"].'.php';
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="./public/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="./public/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="./public/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="./public/assets/js/core/popper.min.js"></script>
<script src="./public/assets/js/core/bootstrap.min.js"></script>
<script src="./public/assets/js/plugin/chart.js/chart.min.js"></script>
<script src="./public/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="./public/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="./public/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script type="text/javascript" src="./public/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js" charset="utf-8"></script>
<script src="./public/assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="./public/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="./public/assets/js/atlantis.min.js"></script>
<script src="./publicassets/prism.js"></script>
<script src="./publicassets/prism-normalize-whitespace.min.js"></script>
<script type="text/javascript">
	// Optional
	Prism.plugins.NormalizeWhitespace.setDefaults({
		'remove-trailing': true,
		'remove-indent': true,
		'left-trim': true,
		'right-trim': true,
	});
	
	// handle links with @href started with '#' only
	$(document).on('click', 'a[href^="#"]', function(e) {
		// target element id
		var id = $(this).attr('href');

		// target element
		var $id = $(id);
		if ($id.length === 0) {
			return;
		}

		// prevent standard hash navigation (avoid blinking in IE)
		e.preventDefault();

		// top position relative to the document
		var pos = $id.offset().top - 80;

		// animated top scrolling
		$('body, html').animate({scrollTop: pos});
	});
</script>
</html>