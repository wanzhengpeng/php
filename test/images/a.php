<?php
#1.冒泡排序从头到位两两比较并交换位置的次数为$n-1次,$n是总个数（数组长度）
#2.每次对相邻的两个数据进行大小比较，如果需要，就交换他们
#3.每趟比较的次数都比前一趟少一次$n-1
#4.外部循环的次数就是趟数
$arr1 = array(18, 22, 12, 15, 23, 9);
$n = count($arr1);


// 控制要循环的趟数
for($i=0;$i<$n-1;$i++)
{
 	//控制要循环的次数
 	for($k=0;$k<$n-1-$i;$k++)    //一定要注意$k<$n-1-$i,这里一定要先考虑第一次循环的次数为5次,小于5进行了5次
 	{    
 		//如果前一项比后一项大，就交换位置
 		if($arr1[$k] > $arr1[$k+1])
 		{
 			$temp = $arr1[$k];
 			$arr1[$k] = $arr1[$k+1];
 			$arr1[$k+1] = $temp;
 		}else{
 			//如果不是这样什么也不做
 		}
 	}
}
echo "<pre>";
print_r($arr1);
echo "</pre>";

#交换原理
//1.普通变量交换
$a = 3;
$b = 4;
$temp = $a;
$a = $b;
$b = $temp;

$arr1 = [2=>15,3=>18,6=>20];
//数组单元交换,把键位2和建为6的进行交换
$temp = $arr1[2];
$arr1[2] = $arr1[6];
$arr1[6] = $temp;



#2.数组排序(概述)算法
$arr2 = array('a'=>8,'b'=>2,'c'=>5,'x'=>3,'e'=>6);
sort($arr2);  //从低到高(不保留键值)
print_r($arr2);
#3.数字查找算法
#4.选择排序算法
// 1.从头到尾其中找最大值（及其下标），并进行交换的堂数为$n-1,$n为数据长度
// 2.每一趟要做的事情是在剩余数里面找到最大值，并跟最后一项进行交换,
// 3.每一趟找到的最大值的次数都要比前一趟少一次，其中第一堂有$n个，
