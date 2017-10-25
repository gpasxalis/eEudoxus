function validate(){
    var rad1=document.getElementById('1').checked;
    var rad2=document.getElementById('2').checked;
    var rad3=document.getElementById('3').checked;
    var rad4=document.getElementById('4').checked;
    var rad5=document.getElementById('5').checked;
    var rad6=document.getElementById('6').checked;
    var rad7=document.getElementById('7').checked;
    var rad8=document.getElementById('8').checked;
    var rad9=document.getElementById('9').checked;
    var rad10=document.getElementById('10').checked


    if (((rad1=="")&&(rad2==""))||((rad3=="")&&(rad4==""))||((rad5=="")&&(rad6==""))||((rad7=="")&&(rad8==""))||((rad9=="")&&(rad10=="")))
    {
        alert("Επιλέξτε ένα βιβλίο για το κάθε μάθημα");
        return false;
    }
    return true;
}