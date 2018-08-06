<?php
function bonusTime($salary, $bonus) {
  return $bonus ? '$'.($salary * 10) : '$'.$salary;
}

echo bonusTime(1000, fal);
?>
