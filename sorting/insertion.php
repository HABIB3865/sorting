<?php
function insertion_sort($array)
{
    for ($i = 0; $i < count($array); $i++) {
        $val = $array[$i];
        $j = $i-1;
        while ($j>=0 && $array[$j] > $val) {
            $array[$j+1] = $array[$j];
            $j--;
        }
        $array[$j+1] = $val;
    }
 
    return $array;
}
$angka = array(27,35,6,15,51,2,64,11,93,38,80);
$hasil = insertion_sort($angka);
print_r($hasil);