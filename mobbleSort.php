<?php
/**
 * Created by PhpStorm.
 * User: DIG-项目部-010
 * Date: 2019/4/25
 * Time: 20:21
 */
//冒泡排序
function mobbleSort(&$arr)
{
    $len=count($arr);
    static $flag=true;
    for($i=0;$i<$len && $flag;$i++){ //排序的躺数
     for($j=$len-2;$j>=$i;$j--){  //交换
         $flag=false;
         if($arr[$j]>$arr[$j+1]){
             swap($arr,$j,$j+1);
             $flag=true;
         }
     }
    }
}
function swap(&$arr,$i,$j)
{
    $tmp=$arr[$i];
    $arr[$i]=$arr[$j];
    $arr[$j]=$tmp;
}
$arr=[9,5,7,6,4,3,8,1,2];
mobbleSort($arr);
print_r($arr);