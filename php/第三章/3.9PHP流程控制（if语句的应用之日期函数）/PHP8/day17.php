<?php
echo date('Y��m��d�� h:i:s');
echo '<hr/>';
echo date_default_timezone_get();
echo '<hr/>';
echo date_default_timezone_set('PRC');
echo date_default_timezone_get();
echo '<hr/>';
// echo date('w');
$day = date('w');
if($day == 0){
    $day = '������';
}elseif ($day ==1){
    $day = '����һ';
}
elseif ($day ==2){
    $day = '���ڶ�';
}
elseif ($day ==3){
    $day = '������';
}
elseif ($day ==4){
    $day = '������';
}elseif ($day ==5){
    $day = '������';
}elseif ($day ==6){
    $day = '������';
}
echo date('Y��m��d�� h:i:s ').$day;
