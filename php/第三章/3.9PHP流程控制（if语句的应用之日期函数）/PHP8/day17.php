<?php
echo date('Y年m月d日 h:i:s');
echo '<hr/>';
echo date_default_timezone_get();
echo '<hr/>';
echo date_default_timezone_set('PRC');
echo date_default_timezone_get();
echo '<hr/>';
// echo date('w');
$day = date('w');
if($day == 0){
    $day = '星期天';
}elseif ($day ==1){
    $day = '星期一';
}
elseif ($day ==2){
    $day = '星期二';
}
elseif ($day ==3){
    $day = '星期三';
}
elseif ($day ==4){
    $day = '星期四';
}elseif ($day ==5){
    $day = '星期五';
}elseif ($day ==6){
    $day = '星期六';
}
echo date('Y年m月d日 h:i:s ').$day;
