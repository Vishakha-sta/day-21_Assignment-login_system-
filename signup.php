<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include '_dbconnect.php';
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $existsql = "SELECT * FROM `users` WHERE username = '$username'";
        $result = mysqli_query($conn,$existsql);
        $numExistRows = mysqli_num_rows($result);
        if($numExistRows>0){
            // $showError = "Username already exists.";
            echo '<script>
            alert("Username already exists.");
            </script>';

            // echo "Username already exists.";
        }
        else{
            
         $sql = "INSERT INTO `users`( `f_name`, `l_name`, `username`, `email`, `password`) VALUES ('$fname','$lname','$username','$email','$password')";

         $result = mysqli_query($conn,$sql);
         if($result){
            echo '<script>
            alert("Result is inserted");
            </script>';
            //  echo "Result is inserted";
         }

        }
    }
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" media="screen" href="signup_style.css" />
	<title>signup Page</title>
	<style>
		body {
			background-image: url(b6.jpg);
			background-size: cover;
			background-attachment: scroll;
			background-repeat: no-repeat;
		}
        h1{
    text-align:center;
    color:rgb(250, 77, 9) !important;
    margin-top:10%;
    font:60px Lobster;
    text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
               0px 8px 13px rgba(0,0,0,0.1),
               0px 18px 23px rgba(0,0,0,0.1);
  }
  
  p{
    color:rgb(250, 77, 9);
    text-align:center;
    font:15px Lobster;
    text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
               0px 8px 13px rgba(0,0,0,0.1),
               0px 18px 23px rgba(0,0,0,0.1);
  }
  
.key{
  background: rgba(190, 176, 170, 0.3);
}
.btn-wrap{
    margin:0 auto;
    width:200px;
    padding-top:50px;
  }
  
  .btn-wrap a{
    background:rgb(240, 102, 22);
    color:#FFF;
    position:relative;
    margin-left: 16%;
    padding:15px;
    font-weight:900 !important;
    text-transform:uppercase;
    border-radius:5px;
    font:14px lato;
    opacity:0.9;
    letter-spacing:1px;
    text-decoration:none;
    
  }
  
  .btn-wrap a:hover{
    opacitY:1;
  }
  .btn-wrap a:active{
    top:4px;
  }
  
  
  a:hover, a:focus {
    color: rgb(240, 102, 22) !important;
    text-decoration: none;
  }
  
  
  
  
  li {
      float: left;
  }
  
  li a, .dropbtn {
      display: inline-block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
  }
  
  
  li a:hover, .dropdown:hover .dropbtn {
    background-color: #ffffff !important;
  }
  
  
  li.dropdown {
      display: inline-block;
  }
  
  .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
  }
  
  .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
  }
  
  .dropdown-content a:hover {background-color: #f1f1f1}
  
  .dropdown:hover .dropdown-content {
      display: block;
  }
  
  .btn-wrap-go a {
    background: rgb(240, 102, 22);
    color: #FFF;
    position: relative;
    margin-left: 10%;
    /* margin-bottom: -10%; */
    padding: 15px;
    font-weight: 900 !important;
    text-transform: uppercase;
    border-radius: 5px;
    font: 14px lato;
    opacity: 0.8;
    letter-spacing: 1px;
    text-decoration: none;
  }
  
 div.one{  
 background-position: center;
		width:400px;
        height:150px;
		background-color:rgba(29, 20, 20, 0.712);
		color:rgb(255, 255, 255);
     }
	</style>
</head>

<body>
	<div class="one container my-3" style="width: 600px; height: auto; border-radius:3%;">
		<h1 class="p-2">Reg<span style="color:blue; font-size:70px;">i</span>ster</h1>
		<hr>
		<form class="g-3 p-2" action="/php/web_training/day-21_Assignment(login_system)/signup.php" method="POST" onsubmit="return checkForm(this);">
			<div class="row g-3 p-2">
				<div class="col">
					<div class="form-group">
						<label for="inputFname" class="form-label">First name</label>
						<input type="text" class="form-control" id="fname" name="fname" placeholder="First name" aria-label="First name">
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="inputLname" class="form-label">Last name</label>
						<input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" aria-label="Last name">
					</div>
				</div>
			</div>
			<div class="form-group p-2">
				<label for="username" class="form-label">Username</label>
				<input type="text" maxlength="25" class="form-control" placeholder="Username" id="username" name="username" aria-describedby="emailHelp">
			</div>
			<div class="form-group p-2">
				<label for="inputEmail4" class="form-label">Email</label>
				<input type="email" class="form-control" placeholder="Email" id="email" name="email">
			</div>
			<div class="form-group p-2">
				<label for="inputPassword4" class="form-label">Password</label>
				<input type="password" class="form-control" placeholder="Password" id="password" name="password">
			</div>

			<div class="align-left">
				<p>Already signed up? <a href="login.php">Login</a>.</p>
			</div>
			<center>
				<div class="container form-group col p-2">
					<button type="submit" name="signup" class="btn btn-primary">Register Now</button>
				</div>
				<center>
		</form>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<!-- Option 2: Separate Popper and Bootstrap JS -->

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
<!-- 
<script>
    function checkForm(form) {
        if(form.username.value==""){
            alert("Error: Username cannot be blank!");
            form.username.focus();
            return false;
        }
        re = /^\w+$/;
        if(!re.test(form.username.value)){
            alert("Error: username must contain only letters, numbers and underscores!");
            form.username.focus();
            return false;
        }
        if(form.password.value!=""){
            if(form.password.value.length<10){
                alert("Error: Password must contain at least ten characters!");
                form.password.focus();
                return false;
            }
            if(form.password.value == form.username.value){
                alert("Error: Password must be different from username!");
                form.password.focus();
                return false;
            }
            re = /[0-9]/;
            if(!re.test(form.password.value)) {
                alert("Error: password must contain at least one number (0-9)!");
                form.password.focus();
                return false;
            }
            re = /[a-z]/;
            if(!re.test(form.password.value)) {
                alert("Error: password must contain at least one lowercase letter (a-z)!");
                form.password.focus();
                return false;
            }
            re = /[A-Z]/;
            if(!re.test(form.password.value)) {
                alert("Error: password must contain at least one uppercase letter (A-Z)!");
                form.password.focus();
                return false;
            }
        }
        else {
            alert("Error: Please check that you've entered and confirmed your password!");
            form.password.focus();
            return false;
            }
            alert("You entered a valid password: " + form.password.value);
             return true;
    }
</script> -->