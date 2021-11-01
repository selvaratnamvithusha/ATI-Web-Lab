<!DOCTYPE html>
<html>
    <head>
        <title>Lab-5</title>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            *{
    font-family: serif;
}
ul li{
    list-style: none;
    display: inline;
    margin-left: 20px;
    margin-right: 20px;
}
li a{
    text-decoration: none;
    text-transform: uppercase;
    color: black;
}
.navbar{
    width: 85%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 0 100px;
    padding-top: 25px;
}
        </style>
    </head>
    <body>
        <div class="main">
            <nav class="navbar">
                <div></div>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="userForm.php">Create User</a></li>
                    <li><a href="users.php">Users</a></li>
                </ul>
            </nav>
        </div>
    </body>
</html>
<?php
    include("function.php");
    //   $lastname = $_POST["lastname"];
    //   $email = $_POST["email"];
    //    $address = $_POST["address"];
    //   $age = $_POST["age"];
    //  $firstname = $_POST["firstname"];

 //  $id = insertUserData($firstname, $lastname, $email, $address, $age);
 //  echo "Id: $id, First Name: $firstname, Last Name: $lastname, Email: $email, Address:$address, Age:$age";


    $users = getAllUserData();
    echo "<br>";
    foreach ($users as $user) {  

           echo

           "<html>
            <head>
                <title>Users</title>
                <link rel='stylesheet' href='users.css'>
            </head>
            <body>
                <div class='user-box'>
                    <form name='user' action='userDetails.php'>
                    <h2>PROFILE</h2>
                        <div class='img'>
                            <img src='avatar.jpg' width='80px' height='80px'></div>
                            <li>
                            <ul>Fullname: ".$user['firstname'].' '.$user['lastname']."</ul>
                            <ul>E-mail: ".$user['email']."</ul>
                            <ul>Address: ".$user['address']."</ul>
                            <ul>Age: ".$user['age']."</ul>
                            </li>
                        
                    </form>
                    <a href='userDetails.php?userId={$user["id"]}'><input type='button' value='Open'></a>
                </div>
            </body>
            </html>";
    }
?>
