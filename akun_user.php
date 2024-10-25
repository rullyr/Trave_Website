<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<title>User Account</title>
</head>
<body>
	<h1>Welcome <?=	$_SESSION['nama_user'] ?> ! <a href="main.php"> Silahkan ke Menu Utama</a></h1>

	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.js"></script>
</body>
</html>
