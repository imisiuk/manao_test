<?php

/*
 * 7. Выяснить, есть ли в записи натурального числа N две одинаковые цифры.
 */
$n = 124;
echo haveNumber($n)?'Есть одинаковые цифры':'Нет одинаковых цифр';
//находит числа в записи которых присутствуют одинаковые цифры
//$n
function haveNumber($n, $i=NULL) {
    $numb = $n;
    while ($numb > 0) {
        $cifra = $numb % 10;
        if($cifra === $i){
            return true;
        }
        $numb /= 10;
        $numb = (int)$numb;
    }
    if($n<11){
        return false;
    }
    $ost = $n%10;
    $n = $n/10;
    $n = (int)$n;
    if(haveNumber($n, $ost)==true){
        return true;
    }else{
        return false;
    }
}
