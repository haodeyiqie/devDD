<?php
//��̬�ľֲ�����
function text(){
    $i = 1;
    $j = 3;
    echo $i+$j;
}
text();
echo '<hr/>';
// echo $i+$j;
function text1(){
    $i = 1;
    echo $i.'<br/>';
    $i++;
}
text1();
text1();
text1();
text1();
echo '<hr/>';
//��̬�ֲ�����
function text2(){
    static $i = 1;
    echo $i.'<br/>';
    $i++;
}
text2();
text2();
text2();
text2();
echo '<hr/>';

$a = 10;
$b = 'Clive';
$s = false;
$i = 5.5;
//global $a;�ں�������Ҫ����ȫ���ֲ���Ҫ�õ�global�ؼ���
function text3(){
    global $a;
    echo $a;
}
text3();
echo '<hr/>';
//$GLOBALS
print_r($GLOBALS);
echo '<hr/>';
function text4(){
   echo $GLOBALS['a'];
}
text4();









