<?php
include 'db.php';

if (isset($_POST["submit"])) 
{
   // echo "Yes, clicked";    

$name=$_POST['email'];
$location=$_POST['password'];

//echo "$email", "$password";


 $sql = "INSERT INTO  credentials  (email, password)
VALUES ('$email', '$password')";
if (mysqli_query($conn, $sql)) {
  echo "New information saved successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


}


?>




<html>
	<head>
	<title>3D Flip login and registration</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<div class="container">
		 <div class="card">
		 <div class="inner-box">
		 <div class="card-front">
		 	<h2>Login</h2>
		 	<form method="POST">
		 		<input type="email" class="input-email" placeholder="Enter your email" required><br>
		 		<input type="password" class="input-password" placeholder="password"><br> 	
		 		<button type="submit" class="submit-btn">Submit</button><br>
		 		<input type="checkbox"><span>Remember Me</span>
		 	</form>
		 	<button type="button" class="btn">I'm new here</button>
		 	<a href="send to email">Forgot password</a>

		 </div>
	<div class="card-back"></div>
	

           
	  </div>
	</div>
</div>

</body>
</html>