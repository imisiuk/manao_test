﻿<?php
//1. Определить  количество  цифр,  меньших  5,  используемых  при  записи натурального числа N.
$n = 7812319846585;
$res = 0;
while ($n > 0) {
    $cifra = $n % 10;
    if($cifra <5){
        $res++;
    }
    $n /= 10;
    $n = (int)$n;
}
echo $res;
