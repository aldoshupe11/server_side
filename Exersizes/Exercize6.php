<?php
require_once "../../php/Utilities/functions.php";

session_start();
header("Access-Control-Allow-Origin: *");

$cmd = getValue("cmd", "");

if ($cmd == "addNum"){
    
    $response = command_name1();
    header('Content-type: application/json');
    echo json_encode($response);
    
}else{
  echo
  "
    <pre>
        Command: addNum
      
            Description: 
            
            Parameters: 

            Example:
                Query string: cmd=addNum&
                Returns:

    </pre>            
  ";
}

function addNum(){
    
    
    return $response;
}
?>