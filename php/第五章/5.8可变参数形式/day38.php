<?php
// function text(){

// }
// text();
$str = function (){
    echo '这里是匿名函数';
};
$str();
echo '<hr/>';
$str1 = function ($usernaem){
    echo '这里是有参数的匿名函数';
    echo $usernaem;
};
$str1('Clive');
echo '<hr/>';
$str2 = function ($username){
    return $username;
};
echo $str2('51zxw');
echo '<hr/>';

/*
 *  func_num_args()
     func_get_arg()
     func_get_args()
 * */
function text(){
    echo func_num_args();
    echo '<hr/>';
    echo func_get_arg(0);
    echo '<hr/>';
    print_r(func_get_args());
    
}
text('clive','12312','成都');

















