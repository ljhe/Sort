<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/4
 * Time: 17:37
 */
require "Sort.php";
// 生成一个10位随机数字
$tmp = '';
for ($i=0;$i<10;$i++){
    $tmp[] = mt_rand(0,100);
}
echo '生成的10位随机数是：' . var_export($tmp,true) . '<br>';
$sort = new Sort();
$result = $sort->insertSort($tmp);
echo '排序后10位随机数是：' . var_export($result,true) . '<br>';