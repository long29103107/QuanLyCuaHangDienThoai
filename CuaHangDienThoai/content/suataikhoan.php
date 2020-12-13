<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$id = $_GET['id'];
	include($level.Content."data-suataikhoan.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trang Web Bán Điện Thoại Di Động</title>
		<link rel="stylesheet" href=<?php echo $level.Vendor."bootstrap-4/css/bootstrap.min.css";?>>
		<link href=<?php echo $level.Vendor."fontawesome-free-5.8.2\css\all.min.css";?> rel="stylesheet" type="text/css"/>
		<link href=<?php echo $level.CSS."style.css";?> rel="stylesheet" type="text/css" media="screen,print" />
		<script src=<?php echo $level.Vendor."js/jquery-3.2.1.slim.min.js";?>></script>
		<script src=<?php echo $level.Vendor."js/popper.min.js";?>></script>
		<script src=<?php echo $level.Vendor."bootstrap-4/js/bootstrap.min.js";?>></script>	
	</header>
	<body>
		<?php
			include( $level.Header."Header-Admin.php");
			include( $level.Header."Menu.php");
		?>
		<div class="container">
			<div class="row">
				<?php
					include($level.Content."admin-taikhoan-form.php");
				?>
				<div class="col-10"  style="background-color: #7cfc005e;">
					</br>
					
					<form action="<?php echo $level.Content.'sua-data-suataikhoan.php'?>" method="post" style="color:black;">
						<div class="row">
							<div class="col-2">Tài khoản</div>
							<div class="col-10">
								<div class="form-group">
									<input type="text" class="form-control" value="<?php echo $taikhoan[0]['taikhoan']; ?>" name="txttaikhoan">
									<input type="hidden" value="<?php echo $id;?>" name="idsua">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-2">Mật khẩu</div>
							<div class="col-10">
								<div class="form-group">
									<input type="password" class="form-control" id="" value="<?php echo $taikhoan[0]['matkhau'] ?>" name="txtmatkhau">
								</div>
							</div>
						</div>
						
						
						<div class="row">
							<div class="col-2">Phân quyền</div>
							<div class="col-10">
							<select name="phanquyen" class="custom-select">
								<?php 
									if($taikhoan[0]['phanquyen']=='0')
										echo "<option value='0'>Khách hàng</option>";
									else echo "<option value='1'>Admin</option>";
								?>
							</select>
							</div>
						</div></br>
						
						<div class="row">
							<div class="col-2 offset-5">
								<input type="submit" class="btn btn-primary" value="Thêm">	
							</div>								
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>