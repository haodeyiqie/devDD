<?php
var_dump(3>1);
var_dump(3<1);
var_dump(3<=3);
var_dump(3==3);
var_dump(3!=1);
//ȫ������Ҫ�Ƚ���ֵ�Ƿ���ȶ��һ�Ҫ�Ƚ������Ƿ����
var_dump(3===3);
$a = '51zxw';
echo '<hr/>';
echo strpos($a, 'z');
echo '<hr/>';
if(strpos($a,'5')!==FALSE){
    echo '���ҵ���Z';
}else {
    echo 'û���ҵ�Z';
}