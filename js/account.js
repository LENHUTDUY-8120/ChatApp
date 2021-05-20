var LoginForm = document.getElementById("LoginForm");
var Register = document.getElementById("Register");
var Indicator = document.getElementById("Indicator");

function login(){
    Register.style.transform = "translateX(0px)";
    LoginForm.style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(-80px)";
}
function register(){
    Register.style.transform = "translateX(400px)";
    LoginForm.style.transform = "translateX(400px)";
    Indicator.style.transform = "translateX(80px)";
}

function hide_show(id, tagid){
    pwdField = document.getElementById(id);
    toggleBtn = document.getElementById(tagid);
    
    if(pwdField.type == "password"){
        pwdField.type = "text";
        toggleBtn.classList.add("active");
    }else{
        pwdField.type = "password";
        toggleBtn.classList.remove("active");
    }
}


const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".submit button"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.preventDefault(); // preventing form from submitting
}

continueBtn.onclick = ()=>{
    
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "Success"){
                    location.href = "listuser.html";
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }            
            }
        }
    }
    // We have to send the form data through ajax to php
    let formData = new FormData(form); // Creating new formData Object
    xhr.send(formData); // sending the form data to php
}