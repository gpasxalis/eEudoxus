<!DOCTYPE html>
<html lang="el">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf8">
    <title></title>
    <link href="css/courses_style.css" rel="stylesheet" type="text/css" />
    <script src="js/courses.js"></script>
    <?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    $username = $_SESSION['username']; 
    $db_servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "eeudoxos";
    

    $table1="books";

    $database_connection = mysql_connect("$db_servername", "$db_username", "$db_password")or die("cannot connect");
    mysql_select_db("$db_name")or die("cannot select DB");
    
    mysql_query( "SET NAMES utf8", $database_connection );
    mysql_query( "SET CHARACTER SET utf8", $database_connection );
    
    $sql = "SELECT book1,book2,book3,book4,book5 FROM $table1 WHERE username = '$username'";

    $result = mysql_query($sql);
    
    
    $book1='book1';
    $book2='book2';
    $book3='book3';
    $book4='book4';
    $book5='book5';
    
?>

</head>
<body>
    <header>           
        <img src="http://eudoxus.gr/img/logo.png" id="img1">            
        <form action="logout.php"><input type="submit" name="LogOut_button" value="Αποσύνδεση" id="submit" style="font-size : 17px;"></form>
        <form action="cards.html"><input type="submit" value="Copyrights" id="cards" style="font-size : 17px;"></form>
    </header>
    <h2 class = "h2N1">Τελική δήλωση</h2>
    <div class = "page_title">
    <?php 
        if (mysql_num_rows($result) > 0) {
            // output data of each row
            while($row = mysql_fetch_assoc($result)) {
            echo '<table><tr><td><b><font color=blue>&nbspΗλεκτρονικό Eπιχειρείν:&nbsp</font></b></td><td>&nbsp' .$row[$book1].'&nbsp</td></tr><br></br>
            <tr><td><b><font color=blue>&nbspΠροσομοίωση και Μοντελοποίηση:&nbsp</font></b></td><td>&nbsp'.$row[$book2] .'&nbsp</td></tr><br></br>
            <tr><td><b><font color=blue>&nbspΠληροφοριακά Συστήματα και Εφοδιαστική Αλυσίδα:&nbsp</font></b></td><td>&nbsp'.$row[$book3].'&nbsp</td></tr><br></br>
            <tr><td><b><font color=blue>&nbspΔιαχείριση Έργων Πληροφορικής:&nbsp</font></b></td><td>&nbsp'.$row[$book4].'&nbsp</td></tr><br></br>
            <tr><td><b><font color=blue>&nbspΛογικός Προγραμματισμός:&nbsp</font></b></td><td>&nbsp'.$row[$book5].'&nbsp</td></tr></table>';
            }
        } else {
            echo "0 results";
        }?>
    </div>
    
    <div class = "frame">        
        <h3>Μπορείτε να παραλάβετε τα βιβλία σας απο το παρακάτω βιβλιοπωλείο:<h3>
        <iframe class = "frameN1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3073.1083281563238!2d19.92013670797946!3d39.62476466012668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x336534b7085854c!2zzqDOu86_z4XPgiDOks65zrLOu865zr_PgM-JzrvOtc65zr8tzrrOsc-GzrUgUGxvdXMgQm9va3MgJiBjb2ZmZWU!5e0!3m2!1sel!2sgr!4v1474231941983" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</body>
</html>
    