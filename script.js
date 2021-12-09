var form = document.querySelector("frmRegister");
var forename = document.getElementById("frmForename");
var surname = document.getElementById("frmSurname");
var gender = document.getElementById("frmGender");
var dob = document.getElementById("frmDOB");
var age = document.getElementById("age");
var course = document.getElementById("frmCourse");
var registerdate = document.getElementById("frmDateReg");

function validateInput(){
    var re= /^[A-Za-z]{2,}$/;
    
    if(re.test(forename)){

    }
}

document.getElementById("button")
.addEventListener("click",(event)=>{
    event.preventDefault();
    validateInput();
});
