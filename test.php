 <?php
 function plusMinus($arr) {

        $neg_count = 0;
        $zero_count = 0;
        $pos_count = 0;
        $size = count($arr);
        foreach ($arr as $key => $value) {
        if ($value<0) {
            $neg_count++;
        }elseif($value==0){
            $zero_count++;
        }else{
           $pos_count++;
        }

    }

      $n[1] = ($pos_count/$size);
      $n[0] = ($neg_count/$size);
      $n[2] = ($zero_count/$size);
        return $n;
    }
    $arr = [-4, 3, -9, 0, 4, 1];
    $tet = plusMinus($arr);
    foreach ($tet as $value) {

        echo $numberAsString = number_format($value, 6);echo '</br>';
    ;

    }
