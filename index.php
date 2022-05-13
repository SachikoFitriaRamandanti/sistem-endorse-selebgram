<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<body>
	<h1 align="center"> Selamat Datang di Web Endorse Selebgram kami, Silahkan Login </h1>
<div class="login">
<form action="ceklogin.php" method="POST">
	<table>
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="login" value="LOG IN "><a href="register.php"><input type="button" name="register" value="REGISTER"></a></td>
		</tr>
	</table>
	
</form>
</div>
</body>
</html>