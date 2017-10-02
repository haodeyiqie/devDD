<?php
class A{
    public static function text1(){
        echo '我是A类的text1方法';
    }
    public static function text2(){
        echo '我是A类的text2方法'.'<br/>';
        static ::text1();
    }
}
class B extends A{
    public static function text1(){
        echo '我是B类的text1方法';
    }
}
B::text2();
