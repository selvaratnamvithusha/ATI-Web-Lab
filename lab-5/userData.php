<?php
    include("function.php");
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $age = $_POST["age"];

    $id = insertUserData($firstname, $lastname, $email, $address, $age);
    //echo "Id: $id, First Name: $firstname, Last Name: $lastname, Email: $email, Address:$address, Age:$age";
?>