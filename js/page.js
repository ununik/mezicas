function openPage(page){
	var mypostrequest=new ajaxRequest()
	mypostrequest.onreadystatechange=function(){
	 if (mypostrequest.readyState==4){
	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
			  document.getElementById("page").innerHTML=mypostrequest.responseText
	  }
	  else{
	   alert("An error has occured making the request")
	  }
	 }
	}
	
	var parameters = "";//"login=" + login + "&password=" + password;
	mypostrequest.open("POST", "controllers/" + page, true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}

function openSubpage(page){
	var mypostrequest=new ajaxRequest()
	mypostrequest.onreadystatechange=function(){
	 if (mypostrequest.readyState==4){
	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
			  document.getElementById("subpage").innerHTML=mypostrequest.responseText
	  }
	  else{
	   alert("An error has occured making the request")
	  }
	 }
	}
	
	var parameters = "";//"login=" + login + "&password=" + password;
	mypostrequest.open("POST", "controllers/" + page, true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}

function saveNewStart(){
	var mypostrequest=new ajaxRequest()
	mypostrequest.onreadystatechange=function(){
	 if (mypostrequest.readyState==4){
	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
			  document.getElementById("status").innerHTML=mypostrequest.responseText
			  document.getElementById('loading').style.backgroundImage = "";
	  }
	  else{
	   alert("An error has occured making the request")
	  }
	 }  else {
		 document.getElementById('loading').style.backgroundImage = "url('images/load.gif')";
	 }
	}
	var date = document.getElementById('date').value;
	var category = document.getElementById('category').value;
	var firstNumber = document.getElementById('firstNumber').value;
	var lastNumber = document.getElementById('lastNumber').value;
	var sequence = document.getElementById('sequence').value;
	var timeFirst = document.getElementById('timeFirst').value;
	
	var parameters = "date=" + date + "&category=" + category + "&firstNumber=" + firstNumber + "&lastNumber=" + lastNumber + "&sequence=" + sequence + "&timeFirst=" + timeFirst;
	mypostrequest.open("POST", "controllers/startList/saveNew.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}

function addName(td, id){
	var name = prompt("Vlozit jmeno", "");
	if (name != null) {
	    td.innerHTML = name;
	    var mypostrequest=new ajaxRequest()
		mypostrequest.onreadystatechange=function(){
		 if (mypostrequest.readyState==4){
		  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
		  }
		  else{
		   alert("An error has occured making the request")
		  }
		 }
		}
		var parameters = "name=" + name + "&id=" + id;
		mypostrequest.open("POST", "controllers/startList/saveName.php", true)
		mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
		mypostrequest.send(parameters)
	}
}

function mezicasClick(){
	var mypostrequest=new ajaxRequest()
	mypostrequest.onreadystatechange=function(){
	 if (mypostrequest.readyState==4){
	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
			  document.getElementById("subpage").innerHTML=mypostrequest.responseText
			  document.getElementById('loading').style.backgroundImage = "";
			  document.getElementById('number').value = parseInt(document.getElementById('number').value) + 1;
	  }
	  else{
	   alert("An error has occured making the request")
	  }
	 } else {
		 document.getElementById('loading').style.backgroundImage = "url('images/load.gif')";
	 }
	}
	var number = parseInt(document.getElementById('number').value);
	var timestamp = parseInt(Math.floor(Date.now() / 1000));
	var cisloMezicasu = parseInt(document.getElementById('cisloMezicasu').value);
	var parameters = "number=" + number + "&timestamp=" + timestamp + "&cisloMezicasu=" + cisloMezicasu;
	mypostrequest.open("POST", "controllers/mezicas/new.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}
function showResultsCategory(select){
	var category = parseInt(select.value);
	var mypostrequest=new ajaxRequest()
	mypostrequest.onreadystatechange=function(){
	 if (mypostrequest.readyState==4){
	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
			  document.getElementById("results").innerHTML=mypostrequest.responseText
			  document.getElementById('loading').style.backgroundImage = "";
			  var timeout = setTimeout(function(){ showResultsCategoryAgain(category, 1);  clearTimeout(timeout);  }, 10000);
			  clearTimeout(timeout);
	  }
	  else{
	   alert("An error has occured making the request")
	  }
	 }
	}
	
	var parameters = "category=" + category+ "&mezicas=" + 1;
	mypostrequest.open("POST", "controllers/mezicas/showCategoryResults.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}
function showResultsCategoryAgain(category, mezicas)
{
	showResultsCategoryAndMezicas(category, mezicas)
}
function showResultsCategoryAndMezicas(category, mezicas){
	var mypostrequest=new ajaxRequest()
	mypostrequest.onreadystatechange=function(){
	 if (mypostrequest.readyState==4){
	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
		  document.getElementById("results").innerHTML=mypostrequest.responseText
		  var timeout = setTimeout(function(){ showResultsCategoryAgain(category, mezicas); clearTimeout(timeout); }, 10000);
	  }
	  else{
	   alert("An error has occured making the request")
	  }
	 }
	}
	
	var parameters = "category=" + category + "&mezicas=" + mezicas;
	mypostrequest.open("POST", "controllers/mezicas/showCategoryResults.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}

function nextNumber(){
	if(document.getElementById('number').value != ""){
		var number = parseInt(document.getElementById('number').value);
	}else{
		var number = 0;
	}
	number++;
	document.getElementById('number').value = number;
}
function previousNumber(){
	if(document.getElementById('number').value != ""){
		var number = parseInt(document.getElementById('number').value);
	}else{
		var number = 2;
	}
	number--;
	document.getElementById('number').value = number;
}