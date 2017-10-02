<?php
//这个是if的第一种写法
// if(false)
//     echo '欢迎来到51自学网<br/>';
//     echo '欢迎来到51自学网<br/>';
// echo 'hello world';
//if的第二种写法
// $a = 3;
// if($a>1){
//     echo '欢迎来到51自学网<br/>';
//     echo '欢迎来到51自学网<br/>';
//     echo '欢迎来到51自学网<br/>';
//     echo '欢迎来到51自学网<br/>';
//     echo '欢迎来到51自学网<br/>';

// }
//if的第三种写法
$username = 'clive';
// if($username == 'clive123131'){
//     echo '这里是为真的时候回执行的代码';
// }else {
//     echo '这里是为假的时候回执行的代码';
// }
//if的第四种写法
$username = 'zxwhahaha';
if($username == 'clive'){
    echo '账号输入正确允许登录';
}elseif ($username == 'zxw'){
    echo '欢迎来到51自学网';
}else {
    echo '没有这个网站';
}









