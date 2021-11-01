<?php
    include("function.php");

    if($_POST['submit'] == 'submit'){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $age = $_POST["age"];

    $id = insertUserData($firstname, $lastname, $email, $address, $age);
    echo "Id: $id, First Name: $firstname, Last Name: $lastname, Email: $email, Address: $address, Age: $age";
    }
    else {
        // echo "You selected update";
        $id=$_POST['id'];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $age = $_POST["age"];
              
              updateExistingUser($id,$firstname,$lastname,$email,$age, $address);
              // echo "<script>alert('Data entered successfully' );
              // window.location.href='userForm.php';</script>";
              // header('Location: ' . $_SERVER['HTTP_REFERER']);
              // exit;
      
              echo "
              
                  <label>successfully data updated</label>
      
            
      
          <script>
              document.getElementById('ms-btn-ok').addEventListener('click',
              function(){
                  window.location.href='userDetails.php?userId={$id}';
              }); 
              </script>
              
              ";
          }
     
?>