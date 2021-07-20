<?php
/**
 * Created by PhpStorm.
 * User: DIG-项目部-010
 * Date: 2019/4/25
 * Time: 22:19
 */
function randomkeys($length)
{
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz 
    ABCDEFGHIJKLOMNOPQRSTUVWXYZ';
 for($i=0;$i<$length;$i++)
 {
  $key = $pattern{mt_rand(0,35)}; //生成php随机数
 }
 return $key;
}