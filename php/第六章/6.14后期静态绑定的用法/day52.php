<?php
class Conductor{
    public $i = 100;
    public function sold(){
        $a = $this->i--;
        echo '我卖了一张票出去，现在还有'.$a.'<br/>';
    }
}
$a = new Conductor();
$a->sold();
$a->sold();
$b = new Conductor();
$b->sold();
$b->sold();
