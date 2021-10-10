<?php
    include("function.php");
  //  $firstname = $_POST["firstname"];
 //   $lastname = $_POST["lastname"];
 //   $email = $_POST["email"];
//    $address = $_POST["address"];
 //   $age = $_POST["age"];

 //  $id = insertUserData($firstname, $lastname, $email, $address, $age);
 //  echo "Id: $id, First Name: $firstname, Last Name: $lastname, Email: $email, Address:$address, Age:$age";


    $users = getAllUserData();
    echo "<br>";
    foreach ($users as $user) {  

           echo 

            "<table style='width:350px; background-color:#808080'  align='center' border: 1px solid black; border color:#0000FF;}>

            <tr>
                <th font-size:50px; colspan='7'>".$user['firstname']."     ".$user['lastname']."</th>
            </tr>

            <tr>
                <th align='center' colspan='6'><img src='u.jpg'  width='100' height='120'></th>
        
             </tr>

            <tr>
                <th>Id</th>
                <td align='center'>000".$user['id']."</td>
            </tr>
            <tr>
                <th>First Name</th>
                <td align='center'>".$user['firstname']."</td>
            </tr>

            <tr>
                <th>Last Name</th>
                <td align='center'>".$user['lastname']."</td>
            </tr>

            <tr>
            <th>Email</th>
                <td align='center'>".$user['email']."</td>
            </tr>

            <tr>
                <th>Address</th>
                <td align='center'>".$user['address']."</td>
            </tr>

            <tr>
                <th>Age</th>
                <td align='center'>".$user['age']."</td>
            </tr> " ; 
            echo "<br>";
    }
    echo "</table>";     

?>