<?php
//ð�ݷ���
// 1.ѭ����� i
// 2.�ڲ�ѭ�� j���ж�������j=i+1;j<arr.length;j++
// 3.�ڲ���� arr[i].arr[j] > arr[j].arr[i] ����λ��
function Number2($arr)
{
    $length=count($arr);

    for($i=0;$i<$length;$i++){

        for($j=$i+1;$j<$length;$j++){

            if(($arr[$i].''.$arr[$j])>($arr[$j].''.$arr[$i])){
                $temp=$arr[$i];

                $arr[$i]=$arr[$j];

                $arr[$j]=$temp;
            }
        }
    }
    return (implode('',$arr));
}
$arr = [43,12,443];
$result=Number2($arr);

echo "2:".$result;
