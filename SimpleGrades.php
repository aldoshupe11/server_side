<?php
    require_once"../CSCI343-Public/php/Utilities/functions.php";
    
    $grade1 = getValue('grade1', "N/A");
    $grade2 = getValue('grade2', "N/A");
    $grade3 = getValue('grade3', "N/A");
    $grade4 = getValue('grade4', "N/A");
    $grade5 = getValue('grade5', "N/A");
    $grades = array($grade1, $grade2, $grade3, $grade4, $grade5);
    
    //$grades = array((getValue('grade1', "no grade entered"), getValue('grade2', "no grade entered"), getValue('grade3', "no grade entered"), getValue('grade4', "no grade entered"), getValue('grade5', "no grade entered"));
    //unsure why the above code didn't work.
    //dont initialize $avg so not to mess with the total.
    $avg;
    $min = $grades[0];
    $max = $grades[0];
    
    //setting min to the lowest value & max to the highest & get the total of all grades in the $avg variable
    foreach($grades as $grd){
        if($min < $grd){
            $min = $grd;
        }
        if($max > $grd){
            $max = $grd;
        }
        $avg += $grd;
    }
    //dividing the total of all grades against he size of the array. 
    $avg = $avg / (sizeOf($grades));
    
    //formatting and echoing the answer to browser.
    echo"<h1> Lowest Grade: " . $min . " Highest Grade: " . $max . " Average Grade: " . $avg . ".</h1>";
    
?>
    
    
    
