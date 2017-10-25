<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/index_style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>           
            <img src="http://eudoxus.gr/img/logo.png" id="img1">
        </header>
        <p>
            Προκειμένου να προχωρήσετε, θα πρέπει να επιλέξετε τον Οικείο Φορέα σας από τον παρακάτω κατάλογο.
        </p>
        <form action="user_login.php">
            <select id="institutionSelect">
                <optgroup label="Πανεπιστήμια">
                    <?php
                    
                    // set variables for database
                    $db_servername = "localhost";
                    $db_username = "root";
                    $db_password = "";
                    $db_name = "eeudoxos";
                    
                    
                    
                    // sql statement
                    $sql = "SELECT name FROM institution ";
                    
                    // sql statement to set character set
                    $sql_char_command = "set names 'utf8'";
                    
                    // Create connection
                    $connection = new mysqli($db_servername, $db_username, $db_password, $db_name);
                    
                    // check connection
                    if ($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    } // end if
                    
                    // connection is successful, set encoding to utf8
                    if ($connection->query($sql_char_command)) {
                        // do nothing
                    } // end if
                    else {
                        echo "Error: " . $sql_char_command . "<br>" . $connection->error;
                    } // end else
                    
                    // perform the sql statement and get results
                    $result = $connection->query($sql);
                    
                    // check if result is valid
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            if ($row["name"] === "Ιόνιο Πανεπιστήμιο") {
                                echo "<option style='font-weight: bold' selected='selected'>".$row["name"]."</option>\n";
                            } // end if
                            else {
                                echo "<option>".$row["name"]."</option>\n";
                            } // end else
                        } // end while
                    } // end if
                    else {
                        echo "0 results";
                    } // end else
                    
            
                    // close connection to database
                    $connection->close();
                    
                    ?>
                </optgroup>
            </select>
            <br />
            <!--<input class="input" type="submit" onclick="evaluateForm()" value="Επιβεβαίωση" >-->
        </form>
        <div class="submit_message">
            <button class="button1" type="button" onclick="return evaluateForm()">Επιβεβαίωση</button>
            <p id="warning_message"></p>
        </div>
        <script src="js/index.js"></script>
    </body>
</html>
