<?php
class Person{
    public $age;

    public function eat(){
        echo '这里是人类的方法';
    }
}
class Student extends Person{

}
$stu = new Student();
echo $stu->eat();
