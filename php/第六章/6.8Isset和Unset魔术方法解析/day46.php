<?php
/*
 * __isset�����ⲿ����isset����������ⲻ�ɷ��ʵ����Ի��߲����ڵ�����ʱ�Զ�����
   __unset���������ⲿ����unset���ٲ��ɷ�������ʱ�Զ�����
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
        echo '���ⲿ����isset����������ⲻ�ɷ��ʵ����Ի��߲����ڵ�����ʱ�Զ�����';
        return isset($name);
    }
    public function __unset($name){
        echo '�������ⲿ����unset���ٲ��ɷ�������ʱ�Զ�����';
        unset($name);
    }
}
$p = new Person('Clive',15);
var_dump(isset($p->abc));
echo '<hr/>';
unset($p->abc);





