<?php
/*

function createMysqlConnection(){
 $servername = "localhost";
 $username = "root";
 $password = "";
       
        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error) {
             die("Connection failed: ".$conn->connect_error);
        }else {
            echo "Connected successfully <br>";
        }return $conn;
    }                                                                       

    createMysqlConnection();                 //createMysqlConnection                                                    */



/*
function createDataBase(){
    $conn=createMysqlConnection();
        $sql="CREATE DATABASE wbdb";
        if($conn->query($sql)== TRUE)
        {
        echo "DB created Succesfully";
        } 
    }   
    createDataBase();                       //createDataBase                                                    */

    function createDBConnection() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wbdb";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die(" DB Connection failed: ".$conn->connect_error);
        }

        echo "$dbname connected successfully <br>";
        return $conn;
    }   

    createDBConnection();   
    
    /*

    function createTable(){
        $conn=createDBConnection();
        $sql= "CREATE TABLE users(
            id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR (20) NOT NULL,
            lastname VARCHAR (20) NOT NULL,
            email VARCHAR (20) NOT NULL,
            address VARCHAR (100) NOT NULL,
            age  VARCHAR (3) NOT NULL
            )";

            if ($conn->query($sql) == TRUE) {
                echo "table created successfully";
            } else {
                echo "Error: ".$conn->error;
            }
        }
        createTable();                                  //createTable                                     */ 

        function insertUserData($firstname, $lastname, $email,$address,$age) {
            $conn = createDBConnection();
            $sql = "INSERT INTO users (firstname, lastname, email ,address,age) 
            VALUES ('$firstname', '$lastname', '$email','$address','$age')";
            
            $insertId = 0;
            if ($conn->query($sql) == TRUE) {
                echo " User registration completed successfully <br>";
                //print_r($conn);
                $insertId = $conn->insert_id;
            } else {
                echo "Error: ".$conn->error;
            }
            $conn->close();
            return $insertId;
        }                                                                                                         
        

        function getAllUserData(){
            $conn=createDBConnection();
            $sql="SELECT * FROM users";
            $result = $conn->query($sql);

            //print_r($result);
            $users = array();
    
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $users[] = $row;
                }
            } else {
                echo "There is no records in the table";
            }
            $conn->close();
            return $users;
        }

           // getAllUserData();               // getAllUserData();
        
?>