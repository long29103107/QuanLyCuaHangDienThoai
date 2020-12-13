<div class="col-10"  style="background-color: #7cfc005e;">
					</br>
					
					<form action="<?php echo $level.Content.'themtaikhoan.php'?>" method="post" style="color:black;">
						<div class="row">
							<div class="col-2">Tài khoản</div>
							<div class="col-10">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Nhập tài khoản" name="txttaikhoan">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-2">Mật khẩu</div>
							<div class="col-10">
								<div class="form-group">
									<input type="password" class="form-control" id="" placeholder="Nhập mật khẩu" name="txtmatkhau">
								</div>
							</div>
						</div>
						
						
						<div class="row">
							<div class="col-2">Nhập lại khẩu</div>
							<div class="col-10">
								<div class="form-group">
									<input type="password" class="form-control" id="" placeholder="Nhập mật khẩu" name="txtnhaplaimatkhau">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-2">Phân quyền</div>
							<div class="col-10">
							<select name="phanquyen" class="custom-select">			
								<option value="0">Khách hàng</option>
								<option value="1">Admin</option>								
							</select>
							</div>
						</div></br>
						
						<div class="row">
							<div class="col-2 offset-5">
								<input type="submit" class="btn btn-primary" value="Thêm">	
							</div>								
						</div>
					</form>
					
					<div class="row">
						<div class="col-12" style="color:red;font-size:30px;">Thông tin tin tức</div>
						<div class="col-12">
						<table class="table table-hover" style="color:black;">
							<thead>
							<tr>
								<th>Tiêu đề</th>
								<th>Nội dung</th>
								<th>Phân quyền </th>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							
							<tbody>
								<?php
									foreach($ketqua as $tt){
								?>
								<tr>
									<td><?php echo $tt['taikhoan']; ?></td>
									<td><?php echo $tt['matkhau']; ?></td>
									<td><?php if($tt['phanquyen'] == '1') echo 'admin'; else echo  'khách hàng'; ?></td>
									
									<td>
										<form action="<?php echo $level.Content."suataikhoan.php"; ?>" method="GET">
											<input type = "hidden" value= "<?php echo $tt['taikhoan']; ?>" name="id">
											<input type="submit" class="btn btn-success" value="Sửa">
										</form>
									</td>
									<td>
										<form action="<?php echo $level.Content."xoataikhoan.php"; ?>" method="GET">
											<input type = "hidden" value= "<?php echo $tt['taikhoan']; ?>" name="idxoa">
											<input type="submit" class="btn btn-danger" value="Xoá">
										</form>
									</td>
									<td>
										<form action="<?php echo $level.Content."khoataikhoan.php"; ?>" method="POST">
											<input type = "hidden" value= "<?php echo $tt['taikhoan']; ?>" name="taikhoan">
											<input type = "hidden" value= "<?php echo $tt['khoataikhoan'] ?>" name="active">
											<input type="submit" class="btn <?php if($tt['khoataikhoan'] == '0') echo "btn-success"; else echo "btn-danger"?>" value="<?php if($tt['khoataikhoan']=='0') echo "Active"; else echo "Deactive"; ?>">
										</form>
									</td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						</div>
					</div>
					
				</div>