<?php

/*
 * 2. Дан массив А(N). 
 * Получить массив В(N), i-элемент которого равен  среднему арифметическому первых i элементов массива  А.  
 */

$n = 4;
$a = [1, 2, 3, 4];
$b = [];

for ($i = 1; $i <= $n; $i++) {
    $b[] = srArifm($a, $i);
}

function srArifm($a = [], $n = -1) { //среднее арифметическое первых N елементов массива A
    $summ = 0;
    for ($i = 0; $i < $n; $i++) {
        $summ += $a[$i];
    }
    return $summ/$n;
}

?>
<pre>
    <?php print_r($a) ?>
</pre>
<pre>
    <?php print_r($b) ?>
</pre>