<?php

/*
 * 2.1. В массиве А(N) найти: 
 * а) число элементов, предшествующих первому отрицательному элементу; 
 * б) сумму нечетных элементов массива, следующих за последним отрицательным элементом.
 */
$n = 19;
$a = [112, -12, 32, -12, 123, 123, 4, 2, 12, 56, -1, 12, -23, 12, 134, -5, 2, 5, 2];
$countDo = -1;
$countPosle = -1;
for ($i = 0; $i < $n; $i++) {
    if ($a[$i] < 0) {
        $countPosle = 0;
        if ($countDo < 0) {
            $countDo = $i;
        }
    }else{
        $countPosle++;
    }
}
echo "До $countDo, после $countPosle";
