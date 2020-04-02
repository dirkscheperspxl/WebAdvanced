<?php

$faculteit= function ($input) {
    $result = 1;

    if ($input == 0) {
        print ('faculteit van 0 is 1');
    } else {
        for ($i = 1; $i <= $input; $i++) {
            $result *= $i;
        }
        print ("faculteit van $input is $result");
    }
}
?>



