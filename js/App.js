$('button').on('click',function(event){
	chamarHttp();
	
});

var chamarHttp = function(){
	var http = new XMLHttpRequest();
	http.onreadystatechange = function(){
		if(http.readyState == 4 && http.status == 200){
			
		}
	}
	http.open('POST','verifica-login.php',true);
	http.send();
} 