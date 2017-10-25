<?php 
    if(!isset($_SESSION))
        {
            session_start();
        }
    $username = $_SESSION['username'];
    if(isset($_POST["submit"]))  
    { 
        $db_servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "eeudoxos";

        $table1="student";

        $con = mysql_connect("$db_servername", "$db_username", "$db_password")or die("cannot connect");
        mysql_select_db("$db_name")or die("cannot select DB");
            
        mysql_query("SET NAMES utf8");

        /*$sql = "SELECT * FROM $table1 WHERE username = '$username'";

        $result = mysql_query($sql);*/
        
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        
        $sql1 = "INSERT INTO $table1 (phone,email) VALUES ('$phone','$email') WHERE username = '$username'";
        mysql_query($sql1); 
        
        
        mysql_close($con);
        //header("location: last_courses.php");
    }
        ?>