<?php
//��̬������������
$arr[] = 1;
$arr[] = 2.2;
$arr[] = true;
$arr[] = 'С��';
echo print_r($arr).'<br/>';
echo '<hr/>';
//ָ���±괴������������
$arr1[] = 1;
$arr1[3] = 2.2;
$arr1[5] = true;
$arr1[] = 'С��';
echo print_r($arr1).'<br/>';
echo '<hr/>';
//������������+���ʹ��
$arr2[] = 'С��';
$arr2['username'] = 'clive';
$arr2['password'] = 123;
$arr2['addr'] = '�ɶ�';
echo print_r($arr2).'<br/>';
echo '<hr/>';
//���ٴ�����������
echo print_r(range(5, 10,2));
echo '<hr/>';
$username = 'clive';
$password = 123456;
$addr = '�ɶ�';
echo print_r(compact('username','password','addr'));
echo '<hr/>';
$arr[] = array();


