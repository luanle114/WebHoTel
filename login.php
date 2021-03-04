<!DOCTYPE html>
<html>
<head>
  <title>
  APEX RESORT !
  </title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet"style="text/css" href="room.css">
  <link href="signin.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  button{
      display: block;
      margin: auto;
      width: 15%
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

     

      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      
      
    </ul>
  </div>
</nav>
</header>
<body>

 <form action="" method="POST" class="form-signin">
  <table align="center">
    <td>
     <label for="inputEmail">Account</label>
      <input type="text" placeholder="Enter account" name="username" class="form-control" required autofocus="">

      <label for="inputPassword">Password</label>
      <input type="password" placeholder="Enter Password" name="password" required class="form-control">
    </td>
      <?php
        session_start();
        if (isset($_POST['username']) && isset($_POST['password'])) {
          require_once("conn.php");
          
          $username = $_POST['username'];
          
          $sql = "SELECT * FROM user WHERE username = '$username'";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          
          if ($_POST['password'] == $row['password']) {
            $_SESSION['isLoggedIn'] = true;
            header("Location: hotel2.php");
          } else {
            echo "<div class='alert alert-danger'> Invalid username or password </div>";
          }
        }
        ?>
  </table>
      <button class="enviar" type="submit">Sign in</button>
    </form>
  
 
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
</body>
</html>
