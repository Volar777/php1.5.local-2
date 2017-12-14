<html>
<head>
	<title>Гостевая книга</title>
</head>
<body>
<?php
foreach ($data as $s){ // вывод построчно))
	echo $s, '<br>';
}
?>
<form action="index.php" method="post">
	<input type="text" name="text_inp">
	<input type="submit" >
</form>

</body>
</html>

