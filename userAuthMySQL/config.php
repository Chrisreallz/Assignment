<?php 
   /* // Enable us to use Headers
    ob_start();
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }*/
    function db() {
        $host = "localhost";
        $user = " root";
        $password = "";
        $db = "zuriphp";
       
        //create connection
        $conn = mysqli_connect("localhost", "root", "", "zuriphp");
        //check connection
        if ($conn){
            die("Database connection not established:" . $conn);
        }
        else{
            echo "connected successfully";
        }
        return $conn;
    }
   
    /*
    close the connection
    mysqli_close($conn);
    */
?>