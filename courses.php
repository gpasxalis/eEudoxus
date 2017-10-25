<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="el">
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
        <link href="css/courses_style.css" rel="stylesheet" type="text/css" />
        <script src="js/courses.js"></script>
    </head>
    <body>
        <header>           
            <img src="http://eudoxus.gr/img/logo.png" id="img1">            
            <form action="logout.php"><input type="submit" name="LogOut_button" value="Αποσύνδεση" id="submit" style="font-size : 17px;"></form>
        </header>
    
    <h2>Μαθήματα Ζ εξαμήνου:</h2>
        <form action="courses_books.php" method="POST">
            <h3>Ηλεκτρονικό Eπιχειρείν</h3>
            <p>
                <input type="radio" name="book1C" id="1" value = '"Ηλεκτρονικό εμπόριο 2008",Turban E., King D., McKay J., Marshall P., Lee J., Viehland D., Volonino L., Cheung Ch., Lai L., Pollard C., Εκδόσεις Α. Γκιούρδα, ISBN 960-512-543-9, 2008' />
                "Ηλεκτρονικό εμπόριο 2008",Turban E., King D., McKay J., Marshall P., Lee J., Viehland D., Volonino L., Cheung Ch., Lai L., Pollard C., Εκδόσεις Α. Γκιούρδα, ISBN 960-512-543-9, 2008"
                <br />
                <input type="radio" name="book1C" id="2" value = '"ΗΛΕΚΤΡΟΝΙΚΟ ΕΠΙΧΕΙΡΕΙΝ ΚΑΙ ΗΛΕΚΤΡΟΝΙΚΟ ΕΜΠΟΡΙΟ",DAVE CHAFFEY, Εκδόσεις Κλειδάριθμος, ISBN 978-960-461-171-3, 2008' />
                "ΗΛΕΚΤΡΟΝΙΚΟ ΕΠΙΧΕΙΡΕΙΝ ΚΑΙ ΗΛΕΚΤΡΟΝΙΚΟ ΕΜΠΟΡΙΟ",DAVE CHAFFEY, Εκδόσεις Κλειδάριθμος, ISBN 978-960-461-171-3, 2008
            </p>
            <br />
            <h3>Προσομοίωση και Μοντελοποίηση</h3>
            <p>
                <input type="radio" name="book2C" id="3" value = '"Προσομοίωση διακριτών συστημάτων",Khoshnevis Behrokh, Εκδόσεις Δίαυλος, ISBN 978-960-531-031-8, 1999' />
                "Προσομοίωση διακριτών συστημάτων",Khoshnevis Behrokh, Εκδόσεις Δίαυλος, ISBN 978-960-531-031-8, 1999
                <br />
                <input type="radio" name="book2C" id="4" value = '"Προσομοίωση δικτύων υπολογιστών",Πομπόρτσης Ανδρέας Σ., Τσουλφάς Ανέστης Γ., Εκδόσεις ΤΖΙΟΛΑ, ISBN 978-960-8050-37-2, 2001'/>
                "Προσομοίωση δικτύων υπολογιστών",Πομπόρτσης Ανδρέας Σ., Τσουλφάς Ανέστης Γ., Εκδόσεις ΤΖΙΟΛΑ, ISBN 978-960-8050-37-2, 2001
            </p>
            <br />
            <h3>Πληροφοριακά Συστήματα και Εφοδιαστική Αλυσίδα</h3>
            <p>
                <input type="radio" name="book3C" id="5" value = '"Ολοκληρωμένα συστήματα διαχείρισης επιχειρησιακών πόρων"Σύγγραμμα, Ιωάννου Γεώργιος, 2006, Εκδόσεις Σταμούλη Α.Ε., ISBN: 960-351-634-1' />
                "Ολοκληρωμένα συστήματα διαχείρισης επιχειρησιακών πόρων"Σύγγραμμα, Ιωάννου Γεώργιος, 2006, Εκδόσεις Σταμούλη Α.Ε., ISBN: 960-351-634-1
                <br />
                <input type="radio" name="book3C" id="6" value = '"Πληροφοριακά Συστήματα Διαχείρισης Επιχειρησιακών Πόρων:Στρατηγικές &amp; Εφαρμογές", Γιάννης Πολλάλης, Αθανάσιος Βοζίκης, 2009, Εκδόσεις Utopia, ISBN: 978-960-98123-3-7' />
                "Πληροφοριακά Συστήματα Διαχείρισης Επιχειρησιακών Πόρων:Στρατηγικές &amp; Εφαρμογές", Γιάννης Πολλάλης, Αθανάσιος Βοζίκης, 2009, Εκδόσεις Utopia, ISBN: 978-960-98123-3-7
            </p>
            <br />
            <h3>Διαχείριση Έργων Πληροφορικής</h3>
            <p>
                <input type="radio" name="book4C" id="7" value = '"Διαχείριση έργων πληροφορικής",Κιουντούζης Ευάγγελος Α., Εκδόσεις Σταμούλη, ISBN 978-960-351-235-4, 1999' />
                "Διαχείριση έργων πληροφορικής",Κιουντούζης Ευάγγελος Α., Εκδόσεις Σταμούλη, ISBN 978-960-351-235-4, 1999
                <br />
                <input type="radio" name="book4C" id="8" value = '"Διαχείριση έργου - project management",Burke Rory, Εκδόσεις Κριτική, 978-960-218-289-5, 2002' />
                "Διαχείριση έργου - project management",Burke Rory, Εκδόσεις Κριτική, 978-960-218-289-5, 2002
            </p>
            <br />
            <h3>Λογικός Προγραμματισμός</h3>
            <p>
                <input type="radio" name="book5C" id="9" value = '"Από τη λογική στο λογικό προγραμματισμό και την Prolog", Μητακίδης Γιώργος, Εκδόσεις ΚΑΡΔΑΜΙΤΣΑ, 1992'/>
                "Από τη λογική στο λογικό προγραμματισμό και την Prolog", Μητακίδης Γιώργος, Εκδόσεις ΚΑΡΔΑΜΙΤΣΑ, 1992
                <br />
                <input type="radio" name="book5C" id="10" value = '"ΠΡΟΓΡΑΜΜΑΤΙΖΟΝΤΑΣ ΣΤΗ ΛΟΓΙΚΗ – PROLOG Α' ΕΚΔΟΣΗ", ΝΟΤΟΠΟΥΛΟΣ ΠΑΝΑΓΙΩΤΗΣ, Εκδοσεις ΑΝΙΚΟΥΛΑ, 2008' />
                "ΠΡΟΓΡΑΜΜΑΤΙΖΟΝΤΑΣ ΣΤΗ ΛΟΓΙΚΗ – PROLOG Α' ΕΚΔΟΣΗ", ΝΟΤΟΠΟΥΛΟΣ ΠΑΝΑΓΙΩΤΗΣ, Εκδοσεις ΑΝΙΚΟΥΛΑ, 2008
            </p>
            <br />
            <input class = "submit1" type="submit" name="submit" value="Επιβεβαίωση" style="font-size: 17px;">
        </form>
        <br />
        <br />
        <br />
    </body>

</html>
