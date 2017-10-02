<?php
$username = 'clive';
$sex = '男';
if($username == 'clive'){
    echo '账号密码正确允许登录<br/>';
    if($sex == '女'){
        echo '欢迎clive先生登录网站';
    }else {
        echo '欢迎clive女士登录网站';
    }
}else {
    echo '账号密码有错';
}