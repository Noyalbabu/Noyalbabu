var form = document.querySelector("frmRegister");
var forename = document.getElementById("frmForename");
var surname = document.getElementById("frmSurname");
var gender = document.getElementById("frmGender");
var dob = document.getElementById("frmDOB");
var age = document.getElementById("frmage");
var course = document.getElementById("frmCourse");
var today = new Date();
var date = today.getDate()+"-"+(today.getMonth()+1) + "-"+ today.getFullYear();
document.getElementById("frmDateReg").value = date;
var re = /^[A-Za-z]{2,}$/;

function validateInput(){
    
    var checkAge = parseInt(age.value); 
    
    if(re.test(forename.value.trim())){
        success(forename);      
    }
    else{
        fail(forename,"Enter a valid name");
    }

    if(re.test(surname.value.trim())){
        success(surname);
    }
    else{
        fail(surname,"Enter a valid name");
    }
    
    if((checkAge >12) && (checkAge < 150)){
            success(age);
    }else{
        fail(age,"You are not eligible to apply");
    }
           
}
function userConfirmation(){
    var displaytxt;
    var pop = confirm("Are you sure?");
    if(pop==true){
        displaytxt = "You pressed ok";
    }else{
        displaytxt = "You pressed cancel";
    }
    document.getElementById("display").innerHTML = displaytxt;
}

document.querySelector("button")
.addEventListener("click",(event)=>{
    event.preventDefault();
    validateInput();
    alert("Going to submit");
});

function success(input){
    let parent = input.parentElement;
    let errorMsg = parent.querySelector("small");
    errorMsg.style.visibility = "hidden";
    errorMsg.innerHTML ="";  
}
function fail(input,msg){
    let parent = input.parentElement;
    let errorMsg = parent.querySelector("small");
    errorMsg.style.visibility = "visible";
    errorMsg.innerHTML = msg;  
}