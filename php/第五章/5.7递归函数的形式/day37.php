<?php
//�����д��.��Ҫ�����ǵĵݹ麯�������ѭ����
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
    echo '������$i��ֵΪ��'.$i.'<br/>';
    $i--;//$i��ֵΪ4��
    if($i>=0){
        text($i);
        /*  $i=4
         * function text($i){
                echo '������$i��ֵΪ��'.$i.'<br/>';
                $i--;//$i��ֵΪ3��
                if($i>=0){
                    text($i);
                    $i=3
                    function text($i){
                        echo '������$i��ֵΪ��'.$i.'<br/>';
                        $i--;//$i��ֵΪ4��
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