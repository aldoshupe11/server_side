<?php
    require_once"../../../CSCI343-Public/php/Utilities/functions.php";
    
    $cmd = getValue("cmd", "howMuchGas");
    $m = getValue("mpg", 0);
    $t = getValue("tankSize", 0);
    $c = getValue("cost", 0);
    $d = getValue("distance", 1);
    
    echo $cmd;
    echo $m;
    echo $d;
    
    echo "<br>$m $t $c $d<br>";
    
    if($cmd == "howMuchGas"){
        calc($m, $t, $c, $d);
    }else{
        echo
        "<pre>
            Command: howMuchGas
    
        Description: 
            Returns number of tanks you must fill up on a trip 
            and the cost to do so.  NOTE: this assumes that when 
            you add gas to your tank you always fill it up.
        
        Parameters: 
                mpg - miles per gallon of your vehicle
                tankSize - how many gallons your tank holds
                cost = the cost of a gallon of gas
                distance = how many miles you will be traveling
                
                NOTE: An error should be printed if any of these
                paraeters is less than or equal to 0 or not a valid number.
    
        Example:
            Query string: ?cmd=howMuchGas&mpg=1&tankSize=2&cost=10&distance=5
            Returns:  
                {'error':'','tanksFills':3,'totalCost':60}
            </pre>";
    }
    
    function calc($mpg, $tankSize, $cost, $distance){
        //error checking the values
        echo "<br>$mpg $tankSize $cost $distance<br>";
        $error = "";
        if($mpg <= 0 )
             $error = "invalid information for mpg value";
//        if($tankSize <= 0 || !is_int($tankSize))
//            $error = "invalid information for tank size value";
//        if($cost <= 0 || !is_int($cost))
//            $error = "invalid information for cost";
        //if($distance <= 0 $distance))
         //   $error = "invalid information for distance";
        if($tankSize > 0){
            $tankFills = ceil($distance / $tankSize);
        }
        $totCost = $cost * ($mpg / $tankFills);
        
        $infoAry = array('error' => $error,
                      'tank fills' => $tankFills,
                      'total cost' => $totCost);
            
        echo json_encode($infoAry);
    }
   
?>