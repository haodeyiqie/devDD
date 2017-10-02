<?php
/*
 *  function_exists()
  get_defined_functions()
  require/require_once
  include/include_once
  get_include_path()
  set_include_path()
 * */
echo '<pre>';
function text1(){

}
// print_r(get_defined_functions());s
echo '<hr/>';
//require 引用文件出错的时候 是一个报错一个警告
//include 引用文件出错的时候 是两个警告
require 'newfile1.php';
// require 'newfile.php';
echo $i;

echo '</pre>';