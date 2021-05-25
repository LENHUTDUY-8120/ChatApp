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



// REGISTER
const formSignup = document.querySelector(".signup form"),
continueBtnSignup = formSignup.querySelector(".submitSignup button"),
errorTextSignup = formSignup.querySelector(".error-txt-signup");

formSignup.onsubmit = (e)=>{
    e.preventDefault(); // preventing form from submitting
}

continueBtnSignup.onclick = ()=>{
    
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "Success"){
                    location.href = "users.php";
                }else{
                    errorTextSignup.textContent = data;
                    errorTextSignup.style.display = "block";
                }            
            }
        }
    }
    // We have to send the form data through ajax to php
    let formData = new FormData(formSignup); // Creating new formData Object
    xhr.send(formData); // sending the form data to php
}



// LOGIN
const formLogin = document.querySelector(".login form"),
continueBtnLogin = formLogin.querySelector(".submitLogin button"),
errorTextLogin = formLogin.querySelector(".error-txt-login");

formLogin.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtnLogin.onclick = ()=>{
    
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "Success"){
                    location.href = "users.php";
                }else{
                    errorTextLogin.textContent = data;
                    errorTextLogin.style.display = "block";
                }         
            }
        }
    }
    // We have to send the form data through ajax to php
    let formData = new FormData(formLogin); // Creating new formData Object
    xhr.send(formData); // sending the form data to php
}



