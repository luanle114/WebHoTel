<?php
$username = "root"; // Khai báo username
$password = ""; 
$password2 = "";     // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "hotel"; // Khai báo database

// Kết nối database tintuc
$connect = new mysqli($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$username = "";
$password = "";
$password2 = "";
$email = "";
$age = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["username"])) { $username = $_POST['username']; }
    if(isset($_POST["password"])) { $password = $_POST['password']; }
    if(isset($_POST["password2"])){$password2 = $_POST['password2'];}
    
    if(isset($_POST["age"])) { $age = $_POST['age']; }

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO user(username, password,password2, age)
    VALUES ('$username', '$password','$password2', '$age')";

    if($_POST['password2'] != $_POST['password']){
    	echo  "The two passwords do not match";
    }
    else
    if ($connect->query($sql) === TRUE) {
        echo "Đăng kí tài khoản thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
//Đóng database
$connect->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>
	Register | APEX RESORT 
	</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet"style="text/css" href="hotel.css">
	<style>
		table,td{
			border: 3px solid black;
			background: #ffcc66;
			
		}
		th{
			display: block;
			margin: 0 auto;
		}
		table{
			border-collapse: collapse;
			width: 20%
		}
		button{
			display: block;
			margin: auto;
			width: 15%
		}
		form{
			display: inline-block;
		}
		body{
			text-align: center;
		}
	</style>
</head>

<header>
	<nav id="thanhnav" class="navbar navbar-expand" >
	<a id="NameHotel" class="navbar-brand" href="hotel.php"><img id="logo" src="../New folder/images/logo.jpg">Apex Resort - Bring you to heaven</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse">
		<ul class="navbar-nav ml-auto">
			
			<li class="nav-item">
				<a class="nav-link" href="gallery.php">Gallery</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="contact.php">Contact</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="login.php">Login</a>
			</li>

		</ul>
	</div>
</nav>
</header>

<body>
<div id="hinhnen">
	<section class="register">
		<div class="tieuderegister" style="text-align: center"><h1>Đăng Kí Tài Khoản</h1></div>
		
			<form action="" method="post" >
				<table align="center">
					<td>
						<h4>Tên tài khoản:</h4>
						<input type="text" name="username" value="" required title="Username required" placeholder="Username" data-icon="U" style="margin-bottom:18px">
						<div class="dangkivaquenpass">
							
						</div>
						
						<h4>Mật khẩu:</h4>
						<input type="password" name="password" value="" required title="Password required" placeholder="Password" data-icon="x" style="margin-bottom:18px">
						<div class="dangkivaquenpass">
							
						</div>

						<h4>Xác nhận mật khẩu:</h4>
						<input type="password" name="password2" value="" required title="Password required" placeholder="Confirm Password" data-icon="x" style="margin-bottom:18px">
						<div class="dangkivaquenpass">
							
						</div>
						
						<h4>Tuổi:</h4>
						<input type="text" name="age" value="" required title="Age required" placeholder="Age" data-icon="U" style="margin-bottom:18px">
						<div class="dangkivaquenpass">
							
						</div>
					</td>
				</table>
				<button type="submit" class="enviar">Đăng kí</button>
			</form>
		
	</section>
</div>
</body>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-3">
					<img style="height: 250px" src="../New folder/images/logo.jpg">
				</div>
				
				<div class="col-3">

				</div>
				
				<div class="col-3">
				</div>
				
				<div id="LH" class="col-3">
					<h4>APEX RESORT</h4>
							<br> Khu đô thị biển An Viên, TP.Nha Trang, tỉnh Khánh Hòa
							<br> MST: 123456789 <br>SĐT: (028)3997998
							<br> Website: <a href="#">apexheaven.vn</a>
							<br>Email: apexheaven@gmail.com</p>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</html>