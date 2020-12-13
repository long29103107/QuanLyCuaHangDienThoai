<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$taikhoan=$_POST['txttaikhoan'];
	$matkhau=$_POST['txtmatkhau'];
	$phanquyen=$_POST['phanquyen'];
	$taikhoancu=$_POST['idsua'];
	$soluongtaikhoan = DP::run_query("select count(*) from taikhoan where taikhoan = ?",[$taikhoan],2);
	if($soluongtaikhoan[0][0]=='0')
	{
		$ketqua=DP::run_query("update taikhoan set taikhoan=?,matkhau=?,phanquyen=? where taikhoan=?",[$taikhoan,$matkhau,(int)$phanquyen,$taikhoancu],1);
		header('location:'.$level.PAGE.'admin-taikhoan.php');
	}
	else 
	{
		echo "Tài khoản tồn tại. <a href='javascript: history.go(-1)'>Trở lại</a>";
	}

?>