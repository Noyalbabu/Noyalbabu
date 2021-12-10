var form = document.querySelector("frmRegister");
var forename = document.getElementById("frmForename");
var surname = document.getElementById("frmSurname");
var gender = document.getElementById("frmGender");
var dob = document.getElementById("frmDOB");
var age = document.getElementById("frmage");
var course = document.getElementById("frmCourse");

var re = /^[A-Za-z]{2,}$/;

function validateInput(){
    var today = new Date();
    var regdate = today.getDate();
    document.getElementById("frmDateReg")= regdate;
    var checkAge = parseInt(age.value); 
    document.getElementById("")
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

document.querySelector("button")
.addEventListener("click",(event)=>{
    event.preventDefault();
    validateInput();
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