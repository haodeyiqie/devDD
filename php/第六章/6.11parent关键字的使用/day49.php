<?php
class Person{
    public $userName = '我是老爸';
    public $age = 88;

    protected function eat(){
        echo '老爸年龄比较大需要儿子喂他吃饭';
    }
}
class Student extends Person{
    public $userName = '我是学生';
    public $age = 16;
    public function eat(){
        parent::eat();
        echo '学生用筷子吃饭';
    }
}
$stu = new Student();
echo $stu->eat();
