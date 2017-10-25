<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/user_login_style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!-- <h1>e-ΕΥΔΟΞΟΣ</h1> -->
       <header>           
            <img src="http://eudoxus.gr/img/logo.png" id="img1">
        </header>
        <div class="login_div">
        <form action="validate_user.php" method="post" class="login_form">
            <fieldset>
                <legend>Προσωπικά στοιχεία:</legend>
                <label for="username">Όνομα χρήστη: </label>
                <input type="text" name="username" />
                <br />
                <label for="password">Κωδικός: </label>
                <input type="password" name="password" />
                <input type="submit" value="Σύνδεση" id="submit" >
            </fieldset>
        </form>
    </body>
    

</html>
