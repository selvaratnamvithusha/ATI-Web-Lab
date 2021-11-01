<?php
    include ("function.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Create Users</title>
<style>
ul li{
    list-style: none;
    display: inline;
    margin-left: 20px;
    margin-right: 20px;
    font-family: serif;
}
li a{
    text-decoration: none;
    text-transform: uppercase;
    color: white;
    
}
.navbar{
    width: 85%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 0 100px;
    padding-top: 25px;
}
    body{
    background :linear-gradient(120deg,#2980b9,#8e44ad);
    font-family: sans-serif;
}
.box{
    width:550px;
    height:520px;
    margin:auto;
    background-color:white;
    border-radius:10px;
}
h2{
    text-align:center;
    padding-top: 15px;
}
h3{
    text-align: center;
}
form label{
    display:flex;
    margin-top:20px;
    font-size:18px;
    margin-left: 25px;

}
form input{
    width: 480px;
    padding: 7px;
    border:black;
    border:1px solid gray;
    outline:indigo;
    margin-left: 25px;
    
}
input[type="submit"]{
    width:500px;
    height:35px;
    margin-top:20px;
    border:none;
    background-color: blue;
    color:white;
    font-size:18px;
}
input[type="submit"]:hover{
    background-color: black;
    color: white;
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
<div class="box">
<?php
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
            $url = "htpps://";
        else
            $url = "http://";

        $url.= $_SERVER['HTTP_HOST'];

        $url.= $_SERVER['REQUEST_URI'];

        if (stripos($_SERVER['REQUEST_URI'], 'userId')!==false){
            $uId=$_GET['userId'];
            $Z=getUserDetails($uId,"users");
            $frName=$Z[0]['firstname'];
            $lsName=$Z[0]['lastname'];
            $userMail=$Z[0]['email'];
            $userAge=$Z[0]['age'];
            $userAddress=$Z[0]['address'];

            echo"
            <h2>Update existing User  : $frName</h2>
            <h3>You can edit User details</h3>
            <form method='POST' action='userData.php'>
                <label>First Name</label>
                <input type='text' name='id' id='firstname' value='$uId' style='display:none;'>
                <input type='text' name='firstname' id='firstname' value='$frName'required><br>
                <label>Last Name</label>
                <input type='text' name='lastname' id='lastname' value='$lsName' required><br>
                <label>E-mail</label>
                <input type='email' name='email' id='email' value='$userMail' required><br>
                <label>Address</label>
                <input type='text' name='address' id='address' value='$userAddress' required><br>
                <label>Age</label>
                <input type='number' name='age' id='age' value='$userAge'required><br> 
                <input type='submit' value='Update' name='submit'>
            </form>";
            }
        
        else{
            echo"
        <h2>Create User</h2>
        <form method='POST' action='userData.php'>
            <label>First Name</label>
            <input type='text' name='firstname' id='firstname' required><br>
            <label>Last Name</label>
            <input type='text' name='lastname' id='lastname' required><br>
            <label>E-mail</label>
            <input type='email' name='email' id='email' required><br>
            <label>Address</label>
            <input type='text' name='address' id='address' required><br>
            <label>Age</label>
            <input type='number' name='age' id='age' required><br> 
            <input type='submit' value='Submit' name='submit'>
        </form>";
        }
        ?>
    </div>
</body>
</html>