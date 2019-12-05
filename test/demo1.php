
<?php
class Student
{

	const DB_HOST = 'localhost';
	//创建公共的属性
	public $name = '张三四';

	//创建方法
	public function showINfo()
	{
		echo Student::DB_HOST;
		// echo DB_HOST; 错误
	}

	public function show()
	{
		return "姓名为:$this->name";
	}

}

//创建学生对象
$obj = new Student;
//修改属性:给成员重新赋值
echo $obj->name;
echo $obj->showINfo();
echo Student::DB_HOST;  //常量这东西类名加双冒号直接就可以访问
$str = 'b';
$str .= '';
$str .= 'aa';
$str .= 'aa';
$str .= 'aa';
var_dump($str);
echo $obj->show();