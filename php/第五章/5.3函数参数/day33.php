<?php
function createTable($rows,$cols,$bgColor='pink'){
    echo "<table border='1' width='80%' bgcolor='{$bgColor}'>";
    for($i=1;$i<=$rows;$i++){
        echo '<tr>';
        for($j=1;$j<=$cols;$j++){
            echo '<td>xxx</td>';
        }
    }
    echo '</tr>';
    echo '</table>';
}
createTable(3,6,'red');
echo '<hr/>';
createTable(5,2);
echo '<hr/>';

/**
 * 对数字进行相加
 * @param unknown $str1
 * @param unknown $str2
 * @return number
 */
function sum($str1,$str2){
    return $str1+$str2;
}


echo sum(5, 5);


