<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Php OOP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 class="header">Hello World</h1>
<h1 style="text-align: center; padding-bottom: 20px;">
<?php 


require_once 'Class/Car.php';

$current = new Car('Nissan', 'GT-R 35');
echo $current->getText();



?></h1>
<img src="gif.gif" class = "header-image"> 
</body>
</html>