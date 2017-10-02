<?php
class RandString{
    //这个属性表示我们的随机数的长度也就是个数
    private $length;
    //type:1:就是我们的数字类型的随机数,2:字母的随机数，3:字母+数组的随机数
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



