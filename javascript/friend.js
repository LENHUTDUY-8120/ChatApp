const usersList1 = document.querySelector("#users-list");
const searchBar1 = document.querySelector("#search_kw1");

var flag = false;

setInterval(()=>{
let xhr = new XMLHttpRequest();
xhr.open("GET", "php/request.php", true);
xhr.onload = ()=>{
	if(xhr.readyState === XMLHttpRequest.DONE){
		if (xhr.status === 200) {
			let data = xhr.response;
			console.log(data);
			if(!flag){
          		usersList1.innerHTML = data;	
          	}

		}
	}
}
xhr.send();
}, 1000);

function check1() {
	flag = true;
}

searchBar1.onkeyup = ()=>{
    let searchTerm = searchBar1.value;
    if(searchTerm == ""){
    	flag = false;
  	}
  	let xhr = new XMLHttpRequest();
  	xhr.open("POST", "php/search-nw.php", true);
  	xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          	let data = xhr.response;
          	usersList1.innerHTML = data;	
        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
}