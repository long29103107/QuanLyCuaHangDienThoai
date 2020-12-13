<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$khoataikhoan = $_POST['active'];
	$taikhoan = $_POST['taikhoan'];
	if($khoataikhoan == 0)
		$khoataikhoan = 1;
	else
	{
		if($khoataikhoan == 1)
		$khoataikhoan=0;
	}
	$ketqua = DP::run_query("UPDATE taikhoan SET khoataikhoan=? WHERE taikhoan=?",[$khoataikhoan,$taikhoan],1);
	header('location:'.$level.PAGE."admin-taikhoan.php");
?>