<?php
/**
 * Created by PhpStorm.
 * User: DIG-项目部-010
 * Date: 2019/4/26
 * Time: 20:47
 */
//堆排序
function heapSort(&$arr)
{
    //构建初始堆
    $len=count($arr);
    for($i=(floor($len/2)-1);$i>=0;$i--)
    {
        adjust_heap($arr,$i,$len);
    }
    //交换值排序
    for($i=$len-1;$i>=0;$i--)
    {
        swap($arr,0,$i);
        adjust_heap($arr,0,$i-1);
    }
}
function  adjust_heap(&$arr,$i,$len)
{
    $tmp=$arr[$i];
    for($j=2*$i+1;$j<=$len;$j=2*$j+1){
        if($j!=$len && $arr[$j]<$arr[$j+1]){
            $j++;
        }
        if($tmp<$arr[$j]){
            $arr[$i]=$arr[$j];
            $i=$j;
        }
    }
    $arr[$i]=$tmp;
}
function swap(&$arr,$start,$i)
{
     $tmp=$arr[$start];
    $arr[$start]=$arr[$i];
    $arr[$i]=$tmp;
}
$arr=[9,5,7,6,4,3,8,1,2];
heapSort($arr);
print_r($arr);