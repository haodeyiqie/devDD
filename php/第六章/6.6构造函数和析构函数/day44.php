<?php
/*php5.5以后用这个魔术常量来写我们的构造函数
function __constrct([参数列表]){

方法体//通常用来对成员属性进行初始化赋值

}
 * */
class Person{
    public $userName;
    public $age;

    function __construct($userName,$age){
        echo '我是构造函数，我在new对象的时候会被调用';
        $this->userName = $userName;
        $this->age = $age;
    }
    function __destruct(){
        echo '我是析构函数，我在对象被销毁的时候调用';
    }
}
// $p = new Person();
$p = new Person("Clive", 27);
echo '<hr/>';
echo $p->age;
echo '<hr/>';
echo $p->userName;
$p = null;

/*析构函数
 * function __destruct() {

}
 *
 * */

