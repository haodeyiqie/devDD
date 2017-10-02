<?php
$string = 'abcde';
$string = '自学网';
//在GBK编码格式下一个中文是2个字符、在UTF-8编码格式下一个中文是3个字符
echo strlen($string);
echo '<hr/>';
$str = 'abcde';
echo ucfirst($str);
echo '<hr/>';
echo md5($str);
echo '<hr/>';
$str = 'abcde';
echo strrev($str);