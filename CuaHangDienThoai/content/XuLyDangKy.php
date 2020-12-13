<?php
	$level="../";
	include ($level."config.php");
	include($level.LIB."DB.php");
	
	if(isset($_POST['dangky'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirm =$_POST['confirm'];
		
		if($username != '' && $password != '' && $confirm != ''){
			//Kiểm tra tên đăng nhập có tồn tại không
			$KiemTra= DP::run_query('SELECT * FROM taikhoan where taikhoan = ?',[$username],2);
			
			if (isset($KiemTra[0])) 
				echo "Tên đăng nhập này đã tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
			else
			{
				if($password == $confirm){
					$ketqua = DP::run_query("insert into taikhoan values (?,?,?,?)",[$username,$password,0,0],1);
					echo "Đăng ký thành công bạn muốn đăng nhâp? <a href=".$level.PAGE.'Dangnhap.php'.">Đăng nhập</a>";
				}
				else {
					echo "Mật khẩu nhập lại không giống. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
				}
			}
		}
		else{
			echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
		}
	}
?>