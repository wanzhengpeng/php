<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<?php
	$n1 = '';
	$n2 = '';
	$result = '';
	if(isset($_POST['num1']))// 如果里面有数据，就进行判断
	{
	$n1 = $_POST['num1'];
	$n2 = $_POST['num2'];
	$result = $n1 + $n2;
	}
?>
<body>
	<form accept="" method="post">
	数组1<input type="text" name="num1"  value="<?php echo $n1; ?>">
	+
	数字2<input type="text" name="num2" value="<?php echo $n2; ?>">
	<input type="submit" value="=">
	<input type="text" name="result" value="<?php echo $result; ?>">
</body>
</html>




