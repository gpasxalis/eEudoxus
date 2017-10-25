<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    $username = $_SESSION['username'];
    
    if(isset($_POST['submit']))  
    { 
        $db_servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "eeudoxos";
        $table1 = "student";
        $table2 = "books";
        
        $con = mysql_connect("$db_servername", "$db_username", "$db_password")or die("cannot connect");
        mysql_select_db("$db_name")or die("cannot select DB");
        
        mysql_query("SET NAMES utf8");
        
        $ch1 = $_POST["book1C"];
        $ch2 = $_POST["book2C"];
        $ch3 = $_POST["book3C"];
        $ch4 = $_POST["book4C"];
        $ch5 = $_POST["book5C"];
        
        
        $sql = "SELECT AM FROM $table1 WHERE username = '$username'";
        $results = mysql_query($sql);
        $var1 = mysql_fetch_assoc($results); 
        $AM = $var1["AM"];
        
        $sql = "SELECT COUNT(AM) AS sum FROM $table2 WHERE AM = '$AM'";
        $results = mysql_query($sql);
        $var2 = mysql_fetch_assoc($results);
        $var3 = $var2["sum"];	
        
        if($var3 == 1){

            $sql = "DELETE FROM $table2 WHERE AM = '$AM'";
            mysql_query($sql);

            $sql1 = "INSERT INTO $table2 (username,AM,book1,book2,book3,book4,book5) VALUES ('$username','$AM','$ch1','$ch2','$ch3','$ch4','$ch5')";
            mysql_query($sql1); 

        }
        $sql2 = "INSERT INTO $table2 (username,AM,book1,book2,book3,book4,book5) VALUES ('$username','$AM','$ch1','$ch2','$ch3','$ch4','$ch5')";
        mysql_query($sql2);
        
        header("location: request_user_data.php");
        mysql_close($con);
    }
?>