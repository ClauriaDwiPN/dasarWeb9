<?php
	$name ="mahasiswa";
	$value = "Clauria Dwi Putri Nabillah";
	setcookie($name, $value, time()+600);
	
	setcookie("kelas", "MI-1F", time()+3600);
?>
<html>
<body>
<?php
	echo "Cookies telah diubah";
?>
</body>
</html>