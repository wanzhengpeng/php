<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<?php
if(isset($_POST['chengji']))
{
	$cj = $_POST['chengji'];
	// var_dump($cj);  //表单上不管输入什么都是字符串
	// 如果输入的是数字
	if(is_numeric($cj))
	{
		if($cj >= 60)
		{
			echo "及格了";
		}else
		{
			echo "不及格，补考吧";
		}
    }else
    {
    	echo "你别瞎搞了";
    }
}else
{
	echo "请输入成绩";
}


?>
<body>
<form action="" method="post">
	请输入成绩:
	<input type="text" name="chengji">
	<input type="submit" name="提交">

</form>
</body>
</html>

<!--  判断是否有数据
if($n)  
{
	echo "有数据";
}else
{
	echo "没有数据";
}

 -->