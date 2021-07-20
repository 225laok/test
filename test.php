<?php
$dbms = 'mysql';     //数据库类型
$host = 'localhost'; //数据库主机名
$dbName = 'laravel';    //使用的数据库
$user = 'root';      //数据库连接用户名
$pass = 'HYXBYY';          //对应的密码
$dsn = "$dbms:host=$host;dbname=$dbName";
try {
    $coon = new PDO($dsn, 'root', $pass);
    echo '链接成功！';
    for ($i = 1; $i < 10000; $i++) {
        // 在 $str 中随机取 $length 个数组元素键名
        $name=randomkeys(5);
        $birthday= date('Y-m-d',rand(strtotime('-1 year'),time()));
        $phone_number=rand(1241151,12412411);
        $country=randomkeys(6);
        $sql = "insert into person_info (name,birthday,phone_number,country) values('$name','$birthday','$phone_number','$country')";
        //echo $sql;die;
        $res = $coon->exec($sql);
        echo $res;
    }


} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}

function randomkeys($length)
{
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz 
    ABCDEFGHIJKLOMNOPQRSTUVWXYZ';
    $key='';
    for($i=0;$i<$length;$i++)
    {
        $key =$key. $pattern{mt_rand(0,35)}; //生成php随机数
    }
    return $key;
}