<?php
/*php5.5�Ժ������ħ��������д���ǵĹ��캯��
function __constrct([�����б�]){

������//ͨ�������Գ�Ա���Խ��г�ʼ����ֵ

}
 * */
class Person{
    public $userName;
    public $age;

    function __construct($userName,$age){
        echo '���ǹ��캯��������new�����ʱ��ᱻ����';
        $this->userName = $userName;
        $this->age = $age;
    }
    function __destruct(){
        echo '�����������������ڶ������ٵ�ʱ�����';
    }
}
// $p = new Person();
$p = new Person("Clive", 27);
echo '<hr/>';
echo $p->age;
echo '<hr/>';
echo $p->userName;
$p = null;

/*��������
 * function __destruct() {

}
 *
 * */

