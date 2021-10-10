<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  
    <form method="POST" action="userData.php">
   
         <label for="fname">First name:</label><br>
         <input type="text" id="firstname" name="firstname"><br>
      
          <label for="lname">Last name:</label><br>
          <input type="text" id="lastname" name="lastname"><br>

          <label for="email">Email:</label><br>
          <input type="text" id="email" name='email' ><br>

          <label for="address">Address:</label><br>
         <input type="text" id="address" name="address"><br>

         <label for="age">Age:</label><br>
         <input type="text" id="age" name="age"><br>
         <br>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
  </body>

</html>