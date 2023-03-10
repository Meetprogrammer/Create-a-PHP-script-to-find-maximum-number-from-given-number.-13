<?php
function findMax($numbers) {
  $max = $numbers[0];
  foreach ($numbers as $number) {
    if ($number > $max) {
      $max = $number;
    }
  }
  return $max;
}

$numbers = array(3, 7, 1, 9, 4, 6);
$max = findMax($numbers);
echo "The maximum number is: " . $max;
?>
