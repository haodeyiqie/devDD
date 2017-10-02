<?php
// function text(){
//       //被static所修饰的属性是存放在静态的内存当中
//       static $i = 1;
//       echo $i."<br/>";
//       $i++;
//}
//text();
//text();
//text();
class Person{
    public static $i = 1;
    public static function eat(){
        echo self::$i;
    }
}
Person::eat();