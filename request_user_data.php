<!DOCTYPE html>
<html>
    <?php
        if(!isset($_SESSION))
        {
            session_start();
        }
        $username = $_SESSION['username']; 
    ?>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/user_data.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>           
            <img src="http://eudoxus.gr/img/logo.png" id="img1">
        </header>
        <div class = "user_data_div">
        <form action="store_user_data.php" class = "user_data_form" method="POST">
            <fieldset>
                <legend>Εισαγωγή στοιχείων επικοινωνίας φοιτητή:</legend>
                <br />
                <label for="phone">Κινητό τηλέφωνο:</label>
                <input type="text" name="phone" id="phone">
                <br />
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
                <br />
                <input type="submit" value="Επιβεβαίωση" id = "submit" name="submit">
            </fieldset>
        </form>
        </div>
    </body>
</html>
