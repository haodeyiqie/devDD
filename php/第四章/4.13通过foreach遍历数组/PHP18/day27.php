<?php
echo '<pre>';
$arr = array(
    1,2,3,4,5,
    'username'=>'clive',
    'password'=>123456,
    'age'=>27
);
print_r($arr);
echo '<hr/>';
foreach ($arr as $key=>$val){
    echo '����ļ���Ϊ:'.$key.',����ļ�ֵΪ��'.$val.'<br/>';
}
echo '<hr/>';
$arr1[] = array(
  'id'=>0,
  'username'=>'clive',
   'password'=>1,
    'age'=>1
);
$arr1[] = array(
    'id'=>1,
    'username'=>'clive1',
    'password'=>2,
    'age'=>2
);
$arr1[] = array(
    'id'=>2,
    'username'=>'clive2',
    'password'=>3,
    'age'=>3
);
print_r($arr1);
echo '<hr/>';
foreach ($arr1 as $key=>$val){
//     echo '����ļ���Ϊ:'.$key.',����ļ�ֵΪ��'.$val.'<br/>';
       echo '����ļ���Ϊ:'.$key.',username��ֵΪ��'.$val['username'].'<br/>';
}




echo '</pre>';