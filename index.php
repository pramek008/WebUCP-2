<?php
require('config.php');

if(isset($_POST['submit'])){
	if(isset($_POST['username'])){
		if(isset($_POST['password'])){
			$username = $database->escape($_POST['username']);
			$password = $database->escape($_POST['password']);

			$sql = "SELECT * FROM admin WHERE username='$username'";
			$results = $database->select($sql);
			if(is_array($results) && count($results)>0){
				$password_hash = $results[0]['password'];
				if($password_hash==($password)){
					// Username & password correct
					session_start();
					$_SESSION['id'] = $results[0]['id'];
					header('location:main.php');
				}
				else $ermsg = "Password Salah !";
			}
			else $ermsg = "User Tidak Ditemukan !";
		}
		else $ermsg = "Password Kosong !";
	}
	else $ermsg = "Username Kosong !";
}
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> <!-- Required meta tags --> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Bootstrap CSS --> 

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
   -->
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">"
  <title>Login</title> 
</head> 
<body> 


<div class="container">
		<?php 
		if(isset($ermsg) && !empty($ermsg)) {
			echo '<div class="alert alert-danger" role="alert">'.$ermsg.'</div>';
		}
		?>
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login</h3>
			</div>

			<div class="wrapper">
				<div class="logo"> 
					<img src="https://www.pngitem.com/pimgs/m/648-6485759_books-podcasts-on-divorce-and-co-parenting-reading.png" alt=""> 
				</div>
				<div style="margin: 15px" class="text-center mt-4 name"> BarokahBook Store </div>
				<form action="index.php" method="post" class="p-3 mt-3">
					<div class="form-field d-flex align-items-center"> 
						<span class="far fa-user">
							<input type="text" name="username" class="form-control" placeholder="Username"> 
						</span>
					</div>
					<div class="form-field d-flex align-items-center"> 
						<span class="fas fa-key"> 
							<input type="password" name="password" class="form-control" placeholder="Password"> 
						</span>
					</div> 
					<button type="submit" name="submit" class="btn mt-3">Login</button>
				</form>
			</div>
            <!-- <div class="text-center fs-6"> <a href="#">Forget password?</a> or <a href="#">Sign up</a> </div> -->
       		 
			
			<!-- <div class="card-body">
				<form method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="password">
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div> -->
		</div>
	</div>
</div>


  <!-- Optional JavaScript --> <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body> 
</html>
