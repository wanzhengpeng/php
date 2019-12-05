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
	if(isset($_REQUEST['num1']))// 如果里面有数据，就进行判断
	{
		$n1 = $_REQUEST['num1'];
		$n2 = $_REQUEST['num2'];
		$result = $n1 + $n2;
		echo $_REQUEST['userName'];
	}
?>
<body>
	<form accept="293.php?id=10&userName=zhangshang" method="post">
	数组1<input type="text" name="num1"  value="<?php echo $n1; ?>">
	+
	数字2<input type="text" name="num2" value="<?php echo $n2; ?>">
	<input type="submit" value="=">
	<input type="text" name="result" value="<?php echo $result; ?>">
</body>
</html>




