<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="" method="post">
		请输入年份:<input type="text" name="year">
		<input type="submit" value="判断">
	</form>
<?php
	if(!empty($_POST['year']))
	{
		$year = $_POST['year']; //永远是字符串，即使啥也不输入也是空字符串
		// var_dump($year);
		if(is_numeric($year))
		{	
			$year2 = (int)$year;
		    if($year2 == $year)   //'4' == 4 相等    '4.33' == 4  不相等  
		    {
		    		if ($year % 4 == 0 && $year %100 !== 0 || $year == 0)
				{
		        	echo "$year 是闰年";
				}else
				{
					echo "$year 不是闰年";
				}
		    }else
		    {
		    	echo "年份请输入整数";
		    }
		}else
		{
			echo "请输入整数";
		}
	}else
	{
		echo "<font color='red'>请输入年份</font>";
	}

?>
</body>
</html>