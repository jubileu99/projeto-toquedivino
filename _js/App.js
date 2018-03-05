$('.btn-enviar').on('click',function(event){
	event.preventDefault(); // Prevenir o botao de ir pra pagina seguinte
	chamarHttp($('#user').val(),$('#pw').val()); // chama a funcao mandados os valores dos inputs da pag de login.
})

var chamarHttp = function(user,pw){ // funcao para fazer req. http de login 
	var http = new XMLHttpRequest();
		
	http.onreadystatechange = function(){
		if(http.readyState == 4 && http.status == 200){
			if(http.responseText == 1){
				location.href='../produtos/consulta_produtos.php';
			}else{
				alert('Ocorreu um erro ao logar.');
			}
		}
	}
	
	var values = 'user='+user+'&pw='+pw; // String para enviar com http.send() 
	
	http.open('POST','verifica_login.php', true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.send(values);
} 

