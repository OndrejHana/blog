<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Můj blogísek</title>
</head>
<body>
	<form action="/php/create.php", method="post">
		<label for="nadpis"></label>
		<input type="text" id="nadpis" name="nadpis">
		<label for="obsah"></label>
		<input type="textarea" id="obsah" name="obsah">
		<input type="submit" value="odeslat">
	</form>
</body>
</html>


<?php
	$conn = mysqli_connect("localhost", "blog", "Password123", "data");

	$nadpis = $_REQUEST["nadpis"];
	$obsah = $_REQUEST["obsah"];
	$insertsql = "INSERT INTO zpravy(nadpis,obsah) values ('$nadpis','$obsah')";
	
	$conn -> query($insertsql)
	header("location: ./../index.html");
?>