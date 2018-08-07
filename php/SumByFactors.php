  <?php
  function primes($max)
  {
      $sqrt = sqrt($max);
      $S = array_fill(2, $max-1, true);
      for ($i=2;$i<=$sqrt;$i++) {
          if ($S[$i]===true) {
              for ($j=$i*$i; $j<=$max; $j+=$i) {
                  $S[$j]=false;
              }
          }
      }
      $res = array();

      foreach ($S as $key => $value) {
          if ($value == 1) {
              $res[] = $key;
          }
      }
      return $res;
  }
  function sumOfDivided($lst)
  {
      if(empty($lst)) return array();
      $P = array();
      $max = max($lst);
      $min = min($lst);
      if ($max < abs($min)) {
          $primes = primes(abs($min));
      } else {
          $primes = primes($max);
      }

      foreach ($primes as $prime) {
          foreach ($lst as $value) {
              if ((abs($value) >= $prime) && (abs($value) % $prime == 0)) {
                  if (empty($P[$prime])) {
                      $P[$prime] = 0;
                  }
                  $P[$prime] +=  $value;
              }
          }
      }
      $res = [];
      foreach ($P as $key => $value) {
          $res[] = [$key, $value];
      }
      return $res;
  }

   sumOfDivided([136, 69, 60, 42, 11, -26]);
/*       0 => Array (
        0 => 2
        1 => 136
    )
    1 => Array (
        0 => 3
        1 => 69
    )
    2 => Array (
        0 => 5
        1 => 60
    )
    3 => Array (
        0 => 7
        1 => 42
    )
    4 => Array (
        0 => 11
        1 => 11
    )
    5 => Array (
        0 => 13
        1 => -26
    )
    6 => Array (
        0 => 19
        1 => -38
    )
    */
