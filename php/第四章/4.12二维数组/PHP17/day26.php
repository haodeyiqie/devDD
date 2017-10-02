<?php
echo '<pre>';
$arr = array(
   array(
        1,
       5.5,
       'clive',
       true
   ),array(
        2,
       6.6,
       '自学网',
       false
   )
);
print_r($arr);
echo $arr[0][2];
echo '<hr/>';

$arr1[] = array(
    1,
    5.5,
    'clive',
    true
);
$arr1[] = array(
    'id'=>0,
    'username'=>'clive',
    'password'=>123456,
    'addr'=>'成都'
);

print_r($arr1);
echo '<hr/>';
echo $arr1[1]['username'].'<br/>';
echo $arr1[1]['password'];








echo '</pre>';