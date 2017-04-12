<?php
    require_once("../../CSCI343-Public/php/Utilities/functions.php");
    session_start();
    
    header("Access-Control-Allow-Origin: *");
    
    $cmd = getValue("cmd", "");
    if ($cmd == "addFlavor"){
        $response = addFlavor();
        header('Content-type: application/json');
        echo json_encode($response);
    }
    
    else if ($cmd == "subFlavor"){
    $response = subFlavor();
    header('Content-type: application/json');
    echo json_encode($response);
        
    }
    else // list all supported commands
    {
  echo
  "
    <pre>
        Command: addFlavors
      
            Description: adds a flavor to the sundae
            
            Parameters: flavor

            Example:
                Query string: ?cmd=addFlavor&hold=Strawberry
                Returns: { Strawberry <br> }
                
        Command: subFlavors
      
            Description: deletes the last flavor added
            
            Parameters: none

            Example:
                Query string: ?cmd=
                Returns:
                
        Command: getFlavors
      
            Description: returns your current flavors
            
            Parameters: none

            Example:
                Query string: ?cmd=
                Returns:  
    </pre>            
  ";
}
    function addFlavor(){
        $flavors = getSessionValue("flavors", "");
        $hold = getValue("addFlavor", "");
        $flavors = $flavors . $hold . "<br>";
        setSessionValue("flavors", $flavors);
        
        return array("Flavors" => $flavors);
    }
    function subFlavor(){
        $flavors = getSessionValue("flavors", "");
        $flavors = $flavors - $flavors[$flavors.length()];
        setSessionValue("flavors", $flavors);
        
        return array("Flavors" => $flavors);
    }
    
?>
    
    