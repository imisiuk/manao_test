<?php

/*
 * 16. Натуральное число называют совершенным, если оно равно сумме всех своих делителей, не считая его самого. 
 * Например, 6=1+2+3. Найти все совершенные числа в диапазоне от N до M.
 */

$n = 1;
$m = 1000;

for ($i = $n; $i <= $m; $i++) {
    $summ = 0;
    for ($i2 = 1; $i2 < $i; $i2++) {
        if (($i % $i2) == 0) {
            $summ += $i2;
        }
    }
    if ($summ == $i) {
        $res[] = $i;
    }
}
print_r($res);
