const usersList = document.querySelector(".users-list");
const searchBar = document.querySelector(".search input");

setInterval(()=>{
let xhr = new XMLHttpRequest();
xhr.open("GET", "php/users.php", true);
xhr.onload = ()=>{
	if(xhr.readyState === XMLHttpRequest.DONE){
		if (xhr.status === 200) {
			let data = xhr.response;
			console.log(data);
			if(!searchBar.classList.contains("active")){
          		usersList.innerHTML = data;	
          	}

		}
	}
}
xhr.send();
}, 1000);

function check() {
	searchBar.classList.add("active");
}

searchBar.onkeyup = ()=>{
    let searchTerm = searchBar.value;
    if(searchTerm == ""){
    	searchBar.classList.remove("active");
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
