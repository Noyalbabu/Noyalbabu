
 function validateForm()
 { 
    
    var re = /^[A-Za-z]{2,}$/;
    var checkForename = document.getElementById("frmForename").value;
    var checkSurname = document.getElementById("frmSurname");
    if(re.test(checkForename) && (re.test(check))){
        return true;
    }
    else
    {
        document.getElementById("errormsg").innerHTML= "Enter a valid name";
        return false;
    }
 }

 // error change