<?php
include'connect.php';
	$username = $_POST['username'];
	$password = md5 ($_POST['password']);

if (!empty($username) && !empty($password)){
	mysqli_query($connection, "INSERT INTO login (username, password) VALUES ('$username', '$password')");
	$data = mysqli_query($connection, "SELECT * FROM login where username='$username' AND password='$password' ");
	$result = mysqli_num_rows($data);
	if ($result) {
		echo "Register Behasil";
		header("location:index.php");
	}else{
		echo "<script>window.alert('Terjadi Kesalahan Saat Proses Registrasi')
		window.location='register.php'</script>";
		
	}
	
}
?>