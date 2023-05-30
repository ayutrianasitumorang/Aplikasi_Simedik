<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>SIMEDIK | Sistem Informasi Digital Medical Clinic</title>
	<link rel="stylesheet" type="text/css" href="login/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="container">
        <div class="box form-box">
            <?php 
             
              include("koneksi.php");
              if(isset($_POST['submit'])){
                $id = mysqli_real_escape_string($con,$_POST['Username']);
                $Password = mysqli_real_escape_string($koneksi,$_POST['Password']);

                $pegawai = mysqli_query($con,"SELECT * FROM pegawai WHERE Username='$Username' AND Password='$Password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($pegawai);

                if(is_array($row) && !empty($row)){
                    $_SESSION['Username'] = $row['Username'];
                    $_SESSION['Password'] = $row['Password'];
                }else{
                    echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                   echo "<a href='index.php'><button class='btn'>Go Back</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: index.php");
                }
              }else{

            
            ?>
	<img class="wave" src="login/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="login/img/bg.svg">
		</div>
		<div class="login-content">
			<form action="index.php">
				<img src="login/img/avatar.svg">
        <form class="form-signin" action="cek_login.php" method="POST">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
                  <input type="text" name="Username" placeholder="Username" class="form-control"></div>
           		   
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" name="Password" placeholder="Password" class="form-control"></div>
            	</div>
            	
            	<input type="submit" class="btn" value="Login">
            
              <div class="login-help">
            <a href="form/registrasi.php">Register</a>
             </div>
         
            </form>
        </div>
        <?php } ?>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>