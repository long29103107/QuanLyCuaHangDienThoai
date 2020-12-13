<?php
		$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	if(isset($_POST['txttaikhoan'])==true)
	{
		$taikhoan = $_POST['txttaikhoan'];
		$matkhau = $_POST['txtmatkhau'];
		$nhaplaimatkhau = $_POST['txtnhaplaimatkhau'];
		$phanquyen = $_POST['phanquyen'];
		if($matkhau == $nhaplaimatkhau)
		{
			$taikhoantontai=DP::run_query("SELECT count(*) FROM taikhoan WHERE taikhoan=?",[$taikhoan],2);	
			if($taikhoantontai[0][0]=='0')
			{
				$ketqua=DP::run_query("INSERT INTO taikhoan(taikhoan, matkhau, phanquyen, khoataikhoan) VALUES (?,?,?,?)",[$taikhoan,$matkhau,(int)$phanquyen,0],1);
				header('location:'.$level.PAGE."admin-taikhoan.php");
			}
			else
			{
				echo "Tài khoản đã tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
			}
		}
		else
		{
			echo "Nhập mật khẩu không trùng nhau. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
		}
	}
	else
	{
		echo "Chưa nhập tài khoản. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
	}
?>