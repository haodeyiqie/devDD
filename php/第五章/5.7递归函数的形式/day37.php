<?php
//错误的写法.不要让我们的递归函数变成死循环。
// function text(){
//     text();
//     /*function text(){
//      *  text();
//      * }
//      * */
// }
// text();
//$i= 5;
function text($i){
    echo '这里是$i的值为：'.$i.'<br/>';
    $i--;//$i的值为4；
    if($i>=0){
        text($i);
        /*  $i=4
         * function text($i){
                echo '这里是$i的值为：'.$i.'<br/>';
                $i--;//$i的值为3；
                if($i>=0){
                    text($i);
                    $i=3
                    function text($i){
                        echo '这里是$i的值为：'.$i.'<br/>';
                        $i--;//$i的值为4；
                        if($i>=0){
                            text($i);
    }
}
    }
}
         * */
    }
}
text(5);