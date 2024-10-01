<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<meta charset="utf-8">
	<title>Register</title>
</head>
<body>
	<div class="container-lg">
		<h1 style="text-align: center;" class="mt-3">Webboard KakKak</h1>
		<?php include "nav.php" ?>
		<div class="row mt-4">
			<div class="col-sm-10 col-md-8 col-lg-6 mx-auto">
				<div class="card border-primary">
					<h5 class="card-header bg-primary text-white">เข้าสู่ระบบ</h5>
					<form action="register_save.php" method="post">
					<div class="card-body">
						<div class="row mb-3">
							
							<label class="col-lg-3 col-form-label" for="">ชื่อบัญชี :</label>
							<div class="col-lg-9">
								<input id="login" type="text" name="login" class="form-control" required>

							</div>
						</div>

						<div class="row mb-3">
							<label class="col-lg-3 col-form-label" for="">รหัสผ่าน :</label>
							<div class="col-lg-9">
								<input id="pwd" type="text" name="pwd" class="form-control" required>
							</div>
						</div>
							

						<div class="row mb-3">
							<label class="col-lg-3 col-form-label" for="">ชื่อ-นามสกุล :</label>
							<div class="col-lg-9">
								<input id="name" type="text" name="name" class="form-control" required>
						
							</div>
						</div>

						<div class="row mb-3">
							<label class="col-lg-3 col-form-label" for="">เพศ :</label><br>
							<div class="col-lg-9">
								<input type="radio" name="gender" value="m">
								ชาย<br>
								<input type="radio" name="gender" value="f">
								หญิง<br>
								<input type="radio" name="gender" value="o">
								อื่นๆ<br>


							</div>
						</div>
						<div class="row">
							<label class="col-lg-3 col-form-label" for="">อีเมล์ :</label>
							<div class="col-lg-9">
								<input id="email" type="email" name="email" class="form-control" required>

							</div>
						</div>
						

						<div class="row">
							<label class="col-lg-3 col-form-label" for="">รหัสผ่าน :</label>
							<div class="col-lg-9">
								<input id="pwd" type="text" name="pwd" class="form-control" required>
							</div>
						</div>

						<div class="mt-3 d-flex justify-content-center">
						<button type="submit" class="btn btn-primary me-2"><i class="bi bi-box-arrow-in-down"></i>สมัครสมาชิก</button>
						</div>
						</form>


					</div>
				</div>
			</div>
		</div>
	</div>
	<h1 align="center">สมัครสมาชิก</h1>
	<hr>
	<form>
	<table style="border: 2px solid black" align="center" width="40%">
		<tr><td colspan="2" style="background: #6CD2FE">กรอกข้อมูล</td></tr>
		<tr><td>ชื่อบัญชี:</td><td><input type="text" name="username"></td></tr>
		<tr><td>รหัสผ่าน:</td><td><input type="password" name="pass2"></td></tr>
		<tr><td>ชื่อ-นามสกุล:</td><td><input type="text" name="name_surname"></td></tr>
		<tr><td rowspan="3">เพศ:</td><td><input type="radio" name="gender" value="male">ชาย</td></tr>
		<tr><td><input type="radio" name="gender" value="female">หญิง</td></tr>
		<tr><td><input type="radio" name="gender" value="other">อื่น</td></tr>
		<tr><td>อีเมล์:</td><td><input type="text" name="email"></td></tr>
		<tr><td colspan="2" align="center"><input type="submit" value="สมัครสมาชิก">
			</td></tr>
	</table>
	</form><br>
	<div align="center"><a href="index.php">กลับไปหน้าหลัก</a></div>	
</body>
</html>		