<?php
  

function selection_sort($data){
  for($i=0; $i<count($data)-1; $i++) {
    $min = $i;
    for($j=$i+1; $j<count($data); $j++) {
             if ($data[$j]<$data[$min]) {
                   $min = $j;
              }
     }
    $data = swap_positions($data, $i, $min);
   }
 return $data;
}

function swap_positions($data1, $left, $right) {
    $backup_old_data_right_value = $data1[$right];
    $data1[$right] = $data1[$left];
    $data1[$left] = $backup_old_data_right_value;
    return $data1;
}

$my_array = array(27,35,6,15,51,2,64,11,93,38,80);
echo "array awal :<br/>";
echo implode(', ',$my_array );
echo "<br/>setelah dilakukan sorting :<br/>";
echo implode(', ',selection_sort($my_array));