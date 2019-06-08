<!DOCTYPE html>
<html>
<head>
	<title>First PHP Program</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		body{
			font-size: 120%;
			background: #F8F8FF;
		}
		#header{
			width: 30%;
            margin: 50px auto 0px;
            color: white;
            background: blue;
            text-align: center;
            border:1px solid #b0c4de;
            border-bottom: none;
            border-radius: 10px 10px 0px 0px;
            padding: 20px;
		}
		#space{
			margin: 10px 10px 10px 10px;
		}
		#space label{
			display: block;
			text-align: left;
			margin: 3px;
		}
		#space input{
			height: 20px;
			width:90%;
			padding: 5px 10px;
			font-size: 16px;
			border-radius: 5px;
			border:1px solid gray;
		}
		form{
			width: 30%;
			margin: 0px auto;
			padding: 20px;
			border: 1px solid #b0c4de;
			background: white;
			border-radius: 0px 0px 10px 10px;
		}
		

	</style>
</head>
<body>
<div id="header">
<h2>Register</h2>
</div>

<form method="POST" action="EasyPHP.php">

<div id="space" >
<label>Username</label>
<input type="text" name="username"/>
</div>


<div id="space" >
<label>Password</label>
<input type="text" name="Password_1"/>
</div>


<div id="space" >
<label>Address</label>
<input type="text" name="address"/>
</div>

<button type="submit" name="reg_user" class="btn">Register</button>
<br/>
<p>
	Already have an account? 
	<a href="login.php">Sign in.</a>
</p>

</form>
</body>
</html>