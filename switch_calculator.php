<?php

$a =3;
$b = 4;

$choice = '-';

switch($choice){
    case '+':{
        $result = $a + $b;
        break;
    }
    case '-':{
        $result = $a - $b;
        break;
    }
    case '*':{
        $result = $a * $b;
        break;
    }

    default : {
        $result = "Please enter valid number";
    }
}

echo $result;

?>