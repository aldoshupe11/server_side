<?php
    require_once "../../CSCI343-Public/php/Utilities/functions.php";
    $h = getValue('h', 0);
    $w = getValue('w', 0);
    $cmd = getValue('cmd', 'boop');
    
    if($cmd == 'bmi'){
        bmi($h, $w);
    }else{
        echo
  "
    <pre>
        Command: bmi
      
            Description: calculates body mass index (BMI) 
            
            Parameters: 
                w = weight in lbs (default 0)
                h = height in inches (default 0)

            Example:
                Query string: ?cmd=bmi&w=160&h=72
                Returns: {'w':72,'h':1.8,'bmi':22.222222222222,'status':'healty'}
    </pre>";
    }
    
    //bmi function
    function bmi($h, $w){
        //making sure height doesnt = 0
        if($h == 0){
            echo "reenter a valid height";
        }else{
            //creating the array with the values passed into the function
            $h = $h * 0.025;
            $w = $w * 0.45;
            $bmiAry = array('h' => $h,
                            'w' => $w,
                            'bmi' => $w / ($h * $h)); 
        }
        
        //checking for healthy vs unhealthy bmi
        if($bmiAry['bmi'] >= 19 && $bmiAry['bmi'] <= 25){
            $bmiAry['status'] = 'healthy';
        }else{
            $bmiAry['status'] = 'unhealthy';
        }
        echo json_encode($bmiAry);
    }
?>

