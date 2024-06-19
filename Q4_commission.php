<?php
$sales=40000;
if ($sales >= 50000){
    $com=2*$sales/100;
}
else if ($sales < 50000 && $sales >=25000){
    $com=1.5*$sales/100;
}
else if ($sales < 25000 && $sales >=10000){
    $com=1*$sales/100;
}
else{
    $com=0.5*$sales/100;
}
echo "Commission is Rs.".$com;
?>