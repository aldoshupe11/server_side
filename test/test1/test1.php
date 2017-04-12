<?php
    require_once("CSCI343-Public/php/Utilities/functions.php");
    
    //setting all of my variables for future use
    $fName = getValue("fName", "John");
    $lName = getValue("lName", "Doe");
    $numAtBat = getValue("numAtBat", "100");
    $numHits = getValue("numHits", "30");
    $numHr = getValue("numHr", "5");
    
    //the at bat function, which takes the hits and divides by the at bats unless there is division by 0, which will return 0.0
    function batting_Avg($hits, $atBat){
        if($atBat <= 0){
            $battingAvg = 0;
            return $battingAvg;
        }else{
            $battingAvg = $hits / $atBat;
            return $battingAvg;
        }
    }
    
    //the home run chance function which takes number of homeruns and divides by at bats, unless there is division by 0, which will return 0.0
    function hr_Chance($hr, $atBat){
        if($atBat <= 0){
            $hrChance = 0;
            return $hrChance;
        }else{    
            $hrChance = $hr / $atBat;
            return $hrChance;
        }
    }
    
    //checking batting average to be at or above the .3 threshold to change the color of the number to red 
    if(batting_Avg($numHits, $numAtBat) >= .3)
        echo "<p style='color: rgb(255,0,0)'>" . batting_Avg($numHits, $numAtBat) . "</p>";
    else
        echo batting_Avg($numHits, $numAtBat) . "<br/>";
        //getting a random extra break in lines when my color turns red? 
    
    echo hr_Chance($numHr, $numAtBat) . "<br/>";
?>