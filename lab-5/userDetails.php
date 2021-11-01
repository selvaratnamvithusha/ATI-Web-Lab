<?php
include("function.php");
$uId=$_GET['userId'];
$user = getUserDetails($uId,"users");
 echo "
<html>
    <head>
        <title>User Details</title>
        <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='userdetails.css'>
    </head>
<body>
    <div class='user-box' style='margin-left: 600px; margin-top: 150px; height: 400px;'>
  
        <form name='loginForm' >
        <h2>USER 000".$user['0']['id']."</h2>
            <div class='img'>
                 <img src='avatar.jpg' width='80px' height='80px'></div>
                 <li>
                 <ul>Fullname: ".$user['0']['firstname'].' '.$user['0']['lastname']."</ul>
                 <ul>E-mail: ".$user['0']['email']."</ul>
                 <ul>Address: ".$user['0']['address']."</ul>
                 <ul>Age: ".$user['0']['age']."</ul>
                </li>
           
        </form>
        <a href='userForm.php?userId={$uId}'><input type='button' value='Edit' style='margin-bottom: 10px;'></a>
        <a id='btn-delete' onclick='openDeleteMessage()'><input type='button' value='Delete'></a>
    </div>
    <div class='message-delete'>
            <div class='message-head-delete'>
                <h2>Delete User</h2>
                <label>Are you sure you want to delete this user?</label>
    
                <div class='line'></div>
                <form action='' method='post'>
                <div class='msg-btns-del'>
                    <a href='#' class='ms-btn-cancel' id='ms-btn-cancel' onclick='closeDeleteMessage()' name='cancel'>Cancel</a>
                    <a href='#' class='ms-btn-delete' id='ms-btn-delete' onclick='deleteRecord()' name='delete'>Delete</a>
                </div>
                </form>
                
            </div>
        </div>

        

    </div>
    
    
</body>
</html>";
?>


<script>
function openDeleteMessage(){
    document.querySelector('.message-delete').style.display='flex';
}
function closeDeleteMessage(){
    document.querySelector('.message-delete').style.display='none';
}
function deleteRecord(){

    <?php
        echo "
        window.location.href='deleteUser.php?userId={$uId}';
        ";
    ?>
        
}
    
    
</script>
