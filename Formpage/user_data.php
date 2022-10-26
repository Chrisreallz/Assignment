<?php

if(isset($_POST['submit'])){
     
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email     = $_POST['email'];
    $number    = $_POST['number'];
    $dob       = $_POST['dob'];
    $sex       = $_POST['sex'];
    $state     = $_POST['state'];
    $country   = $_POST['country'];

    $data = [$firstname, $lastname, $email, $number, $dob, $sex, $state, $country];

    $file = fopen('userdata.csv', 'a');
    fputcsv($file, $data);
    fclose($file);

    var_dump($data);
    print_r($data);
 
} else{
    echo "No data";
}


?>