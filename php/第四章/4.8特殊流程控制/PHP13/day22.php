<?php
//break��������forѭ��
for($i=1;$i<10;$i++){
    if($i==3){
        break;
    }
    echo '������$i��ֵ��'.$i.'<br/>';
}
echo '<hr/>';
//continue������ǰѭ��
for($i=1;$i<10;$i++){
    if($i==3){
        continue;
    }
    echo '������$i��ֵ��'.$i.'<br/>';
}
echo '<hr/>';


echo '�����ǿ�ʼ����';
goto jump;
echo '������jump����Ĵ���';
jump:
echo '������jump����Ĵ���';

echo '<hr/>';
echo '�����ǽ�������';




