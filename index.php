<?php 
	
	// masukan koneksi.php kedalam index.php
	require_once('inc/koneksi.php'); 

	// inisialisasi class Database kedalam variable
	$db = new Database();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Belajar CRUD dengan OOP pada PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="container">
	<h2 class="title">Belajar CRUD dengan OOP pada PHP</h2>
	<div class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php?action=add">Tambah Data</a></li>
		</ul>
	</div>
	
	<?php 
		// masukan default.php kedalam index.php
		require_once 'page/default.php';
	 ?>
</div>

</body>
</html>
