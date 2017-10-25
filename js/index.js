

function evaluateForm() {
    // get the selected item
    var x = document.getElementById("institutionSelect").selectedIndex;
    var y = document.getElementById("institutionSelect").options;
    
    // get the warning message
    var warningMessage = document.getElementById("warning_message");
    
    // chech if the user selection
    if (y[x].text === "Ιόνιο Πανεπιστήμιο") {
        // all good, get to the next page
        window.location.href = "user_login.php";
    } // end if
    else {
        // wrong selection, show error message
        warningMessage.textContent = "Πρέπει να επιλέξετε το Ιόνιο Πανεπιστήμιο για να συνεχίσετε!";
    } // end else
} // end evaluateForm method