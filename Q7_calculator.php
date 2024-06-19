<?php
$num1=5;
$num2=10;
$choice=4;
switch($choice){
    case 1:
        echo "Addition: <br>";
        echo $num1. " + ". $num2. " = ". ($num1+$num2);
        break;
    case 2:
        echo "Subtraction: <br>";
        echo $num1. " - ". $num2. " = ". ($num1-$num2);
        break;   
    case 3:
        echo "Multiplication: <br>";
        echo $num1. " * ". $num2. " = ". ($num1*$num2);
         break;    
    case 4:
        echo "Division: <br>";
        echo $num1. " / ". $num2. " = ". ($num1/$num2);
        break;
    default:
        echo "Invalid choice";
        break;
}
?>