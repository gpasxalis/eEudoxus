<?php

// set variables for database
$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "eeudoxos";

$student_tbl="student";

mysql_connect("$db_servername", "$db_username", "$db_password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$username = $_POST["username"];
$password = $_POST["password"];


// sql statement to set character set
//$sql_char_command = "set names 'utf8'";

// sql statement
$sql = "SELECT * FROM $student_tbl WHERE username = '$username' AND password = '$password'";

// perform the sql statement and get results
$result = mysql_query($sql);

$count=mysql_num_rows($result);
// check if result is valid
if ($count == 1) {
    // output data of each row
    session_start();
    $_SESSION["username"] = $_POST['username'];
    header("location: courses.php");
    // end while
} // end if
else {
    echo "Wrong Username or Password";
    header("Location: user_login.php");
    } // end else
    

// close connection to database
//mysqli_close($connection);
/*
function test_input($data) {
    
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    
    return $data;
}
*/
?>