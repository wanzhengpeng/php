<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<script>
	document.write('万正鹏');
	var a1 = 23;
	document.write('a1');
	</script>
</head>
<body>

<h2>万正鹏</h2>
<h3>js变量的命名规范 var = 23;
	
</h3>
</body>
</html>
 -->
<?php
// class Student
//  {
//  	public function showInfo($name,$age)
//  	{
//  		echo "{$name}的年龄是{$age}";
//  	}
//  }
// $obj = new Student();
// var_dump($obj ->showInfo('万正鹏',23));

?>

<?php
class Student
{
	//定义一个成员属性
	public static $name = '万正鹏';

	//定义一个成员方法
	public static function showInfo()
	{
		echo self::$name;
	}

}

$obj = new Student();
echo $obj::$name;