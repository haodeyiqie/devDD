<?php
function text1(){
    echo '�����text1';

}
function text2($username){
    echo '�����text2'.'<br/>'.'������username��ֵ��'.$username;
}
//�ص�����:�������ڵ����������Ǵ���Ĳ���������
function callBack($call,$str){
    $call($str);
}
//�ص�������ʹ�þ��Ǵ���Ĳ���������Ҫ�ص��ĺ�������
callBack('text2','С��');
echo '<hr/>';
call_user_func('text2','����');
