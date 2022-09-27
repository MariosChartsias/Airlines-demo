<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="images/login.png">
		<meta charset="utf-8" name="viewport" content="width=device-width, user-scalable=no"/>
		<title> Login</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	</head>
<body style="background:linear-gradient(to bottom,#AFEEEE,#3399ff) fixed;">
<p id='error' style="text-align:center; color:red; margin-top:9cm;"></p>
<div style="position:absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); border: none; background-color:white; max-width:50%; max-height:50%; min-width:20%; min-height:25%; overflow:auto; box-shadow: 0 0 1px 1px #8A2BE2;">
<div style="position:absolute; left:30%;">

	<form method="post" action="PSQL/sign_up_sql.php" style="margin:auto; padding:auto;">
		<table>
			<tr>
				<th></th>
				<th style="text-align:center;"><h3>Login</h3></th>
			</tr>
			<tr>
				<th><img src="images/login.png" style="width:80px;"></th>
				<th><input type="email" name="email" id="email" placeholder="email"></th>
				<th></th>
			</tr>
			<tr>
				<th></th>
				<th><input type="password" name="password" placeholder="password"></th>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" name="login" id="Login" value="Login"><a href="sign_up.php" style="margin-left:10px;"><input type="button" name="sign_up" id="sign_up" value="Sign up"></a></td>
			</tr>
		</table>
	</form>
	<script src="JavaScript/login.js"></script>
</div>
</div>
</body>
</html>
