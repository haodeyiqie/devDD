<?php
class RandString{
    //������Ա�ʾ���ǵ�������ĳ���Ҳ���Ǹ���
    private $length;
    //type:1:�������ǵ��������͵������,2:��ĸ���������3:��ĸ+����������
    private $type;

    public function __construct($length,$type){
        $this->length = $length;
        $this->type = $type;
    }

    public function randNum(){
        switch ($this->type){
            case 1:
                return join(array_rand(range(0, 9),$this->length));
                break;
            case 2:
                return join(array_rand(array_flip(array_merge(range('a', 'z'),range('A', 'Z'))),$this->length));
                break;
            case 3:
                return join(array_rand(array_flip(array_merge(range(0, 9),range('a', 'z'),range('A', 'Z'))),$this->length));
                break;
        }
    }
}
$strNum = new RandString(4, 3);
echo $strNum->randNum();



