<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Forms Registar</title>

	<style>
		body {
			
			background-color:#bfaf6b; 
			margin: 0;
			padding: 16px;
		}
		#form-reg {
			width:600px;
			height: 700px;
			margin-left: auto;
			margin-right: auto;
			background-color: white;
			padding-left: 60px;
		}

		form {
			padding-top: 20px;
		}
		h1 {
			text-align: center;
			padding-top: 48px;
			color: #eabd02;
		}
		.lable {
			width: 550px;
			border:0;
			border-bottom: 1px solid lightgray;
			font-size: 17px;
			padding-bottom: 10px;
		}
		.lable:hover {
           background-color: lightyellow;
		}
		.lable:focus:required {
			background-color: rgb(255,0,0,0.2);
		}
		.submit_button {
			background-color: #949289;
			margin-left: 210px;
			margin-top: 35px;
			width: 150px;
			height: 60px;
			color: white;
			font-size: 20px;
			font-weight: bold;
			border: 0;
			border-radius: 14px;
			outline: none;
			cursor: pointer;
			padding: 15px 20px;
			box-shadow: 0px 5px 10px gray
		}
		.submit_button:hover {
			font-size:28px;
			background-color:#bfaf6b;
		}
		.header {
			width: 660px;
			height: 90px;
			margin-left:-60px;
			margin-bottom: 60px;
			background-color:#bfaf6b;
		}
		.icon {
			width: 80px;
			height: 80px;
			display: inline-block;
			padding-left: 105px;

			padding-top: 10px;
		}
	</style>
</head>

<body>
	<div id="form-reg">
		<h1> Register Form </h1>
		<div class="header">
	 		<img src="img/google.png" alt="Google" class="icon" width="20" height="20">
	 		<img src="img/fecbook.png" alt="Fecebook" class="icon">
	 		<img src="img/getHub.png" alt="GetHub" class="icon">
	 	</div>
	 <form action="control_arm.php" method="post">
       
	   <p>
	 	<input type="ssid" name="ssid" class="lable" placeholder="SSID" required>
	   </p>
        
       <p>
	 	<input type="password" name="password" class="lable" placeholder="password" >
	   </p>

	   <p> 
	 	<input type="submit" name="login" class="submit_button" value="log in">
	   </p>

	 </form>
	</div>
</body>