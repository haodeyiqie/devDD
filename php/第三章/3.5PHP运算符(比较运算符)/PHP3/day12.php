<?php
var_dump(3>1);
var_dump(3<1);
var_dump(3<=3);
var_dump(3==3);
var_dump(3!=1);
//全等于是要比较数值是否相等而且还要比较类型是否相等
var_dump(3===3);
$a = '51zxw';
echo '<hr/>';
echo strpos($a, 'z');
echo '<hr/>';
if(strpos($a,'5')!==FALSE){
    echo '我找到了Z';
}else {
    echo '没有找到Z';
}