<?php
/*
 * __isset：当外部调用isset（）函数检测不可访问的属性或者不存在的属性时自动调用
   __unset：当在类外部调用unset销毁不可访问属性时自动调用
 * */
class Person{
    private $userName;
    private $age;
    public $abc;
    public function __construct($userName,$age){
        $this->userName = $userName;
        $this->age = $age;
    }
    public function __isset($name){
        echo '当外部调用isset（）函数检测不可访问的属性或者不存在的属性时自动调用';
        return isset($name);
    }
    public function __unset($name){
        echo '当在类外部调用unset销毁不可访问属性时自动调用';
        unset($name);
    }
}
$p = new Person('Clive',15);
var_dump(isset($p->abc));
echo '<hr/>';
unset($p->abc);





