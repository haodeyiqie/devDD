<?php
// $arr =array();
// var_dump($arr);
//�������� �±��Ǵ����ֿ�ʼ��
$arr = array(
    1,
    5.5,
    false,
    'С��'
);
print_r($arr);
echo '<hr/>';
//array(key=>value,key=>value...)
$arr1 = array(
  5=>'clive',
  6=>12,
    9=>false,
    4=>4.4
);
print_r($arr1);
echo '<hr/>';

//�������飬�±����ַ���
//username ���Գƺ�Ϊ���ǵļ�����
//���ǵļ�������Ӧ��ֵ���Ǽ�ֵ
$arr2 = array(
  'username'=>'clive',
    'password'=>123456,
    'age'=>27
);
print_r($arr2);
echo '<hr/>';
//����+�������ʹ��
$arr3 = array(
  1,2,3,4,5,
    'username'=>'51��ѧ��',
    'addr'=>'�ɶ�'
);
print_r($arr3);
echo '<hr/>';
$arr3['username'] = 'clive';
print_r($arr3);






