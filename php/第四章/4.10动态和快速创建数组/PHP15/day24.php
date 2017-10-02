<?php
//动态创建索引数组
$arr[] = 1;
$arr[] = 2.2;
$arr[] = true;
$arr[] = '小明';
echo print_r($arr).'<br/>';
echo '<hr/>';
//指定下标创建的索引数组
$arr1[] = 1;
$arr1[3] = 2.2;
$arr1[5] = true;
$arr1[] = '小明';
echo print_r($arr1).'<br/>';
echo '<hr/>';
//创建关联数组+混合使用
$arr2[] = '小明';
$arr2['username'] = 'clive';
$arr2['password'] = 123;
$arr2['addr'] = '成都';
echo print_r($arr2).'<br/>';
echo '<hr/>';
//快速创建索引数组
echo print_r(range(5, 10,2));
echo '<hr/>';
$username = 'clive';
$password = 123456;
$addr = '成都';
echo print_r(compact('username','password','addr'));
echo '<hr/>';
$arr[] = array();


