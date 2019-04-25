<?php
/**
 * Created by PhpStorm.
 * User: DIG-项目部-010
 * Date: 2019/4/25
 * Time: 20:42
 */
//直接插入排序
function insertSort(&$arr)
{
    $len=count($arr);
    for($i=1;$i<$len;$i++){
        $tmp=$arr[$i]; //哨兵
        for($j=$i-1;$j>=0 && $tmp>$arr[$j];$j--){
            $arr[$j+1]=$arr[$j];
        }
        $arr[$j+1]=$tmp;
    }
}
$arr=[9,5,7,6,4,3,8,1,2];
insertSort($arr);
print_r($arr);