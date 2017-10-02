<?php
//break跳出整个for循环
for($i=1;$i<10;$i++){
    if($i==3){
        break;
    }
    echo '这里是$i的值：'.$i.'<br/>';
}
echo '<hr/>';
//continue跳出当前循环
for($i=1;$i<10;$i++){
    if($i==3){
        continue;
    }
    echo '这里是$i的值：'.$i.'<br/>';
}
echo '<hr/>';


echo '这里是开始部分';
goto jump;
echo '这里是jump下面的代码';
jump:
echo '这里是jump里面的代码';

echo '<hr/>';
echo '这里是结束部分';




