const usersList = document.querySelector(".users-list");
const searchBar = document.querySelector(".search input");

var flag = false;

setInterval(()=>{
let xhr = new XMLHttpRequest();
xhr.open("GET", "php/users.php", true);
xhr.onload = ()=>{
	if(xhr.readyState === XMLHttpRequest.DONE){
		if (xhr.status === 200) {
			let data = xhr.response;
			if(!flag){
          		usersList.innerHTML = data;	
          	}

		}
	}
}
xhr.send();
}, 500);

function check() {
	flag = true;
}

searchBar.onkeyup = ()=>{
    let searchTerm = searchBar.value;
    if(searchTerm == ""){
    	flag = false;
  	}
  	let xhr = new XMLHttpRequest();
  	xhr.open("POST", "php/search.php", true);
  	xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          	let data = xhr.response;
          	usersList.innerHTML = data;	
        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
}



// Switch Frame
var FormAdd = document.getElementById("form-add");
var FormChat = document.getElementById("form-chat");

function chat(){
    FormChat.style.transform = "translateX(0px)";
    FormAdd.style.transform = "translateX(0px)";
}
function add(){
    FormChat.style.transform = "translateX(-470px)";
    FormAdd.style.transform = "translateX(-470px)";
}
