<?php
$string = 'abcde';
$string = '��ѧ��';
//��GBK�����ʽ��һ��������2���ַ�����UTF-8�����ʽ��һ��������3���ַ�
echo strlen($string);
echo '<hr/>';
$str = 'abcde';
echo ucfirst($str);
echo '<hr/>';
echo md5($str);
echo '<hr/>';
$str = 'abcde';
echo strrev($str);