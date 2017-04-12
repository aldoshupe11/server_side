<?php
require_once "functions.php";
require_once 'dblogin.php';

session_start();
header("Access-Control-Allow-Origin: *");

// Create connection
$conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$cmd = getValue("cmd", "");
if ($cmd == "getClass"){
    $response = getClass($conn);
    header('Content-type: application/json');
    echo json_encode($response);
}
else{ // list all supported commands
  echo
  "
    <pre>
        Command: 
      
            Description: 
            
            Parameters: 

            Example:
                Query string: 
                Returns: 

        Command: 
      
            Description:
            
            Parameters:

            Example:
                Query string: 
                Returns: 

    </pre>            
  ";
}

function getClass($conn){
    $userInput = getValue("userResponse", "");
    $result = $conn->query("SELECT * FROM Classes WHERE Professor = $userInput");
    return $result;
}
?>
