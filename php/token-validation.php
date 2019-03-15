<?php
    require_once('connection.php');
    require_once('generate-token.php');

    session_start();
    $jwt = $_SESSION['jwt'];    
    $id = $_SESSION['id'];

    validateToken($id, $jwt, $conn);

    function validateToken($id, $userToken, $conn){
        $existingToken = generateToken($id, 1, $conn);

        echo "Existing token: ". $existingToken;

        if($userToken===$existingToken){
            echo "<br> TOKEN IS VALID";
            echo "<br>";
            echo "$userToken";
        }else{
            echo "<br> TOKEN IS INVALID";
            echo "<br>";
            echo "$userToken";
        }
    }
?>