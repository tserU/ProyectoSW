

$("#botonEnviar").click(function(){
	var email = $('#email').val();
		   if ($.trim(email).length == 0){
			   alert ('introduce email');
			   return false;
		   }
		   
	var emailER = /^([A-Za-z]+\d{3}@ikasle\.ehu\.(eus|es)|[A-Za-z]+(\.[A-Za-z]+)?@ehu\.(eus|es))$/;
	        if (emailER.test(email)){
		      
			   return true;
		    }
	        else {
			 
		   
			   alert('dirección no válida');
			   return false;
	        }
	
	
	var enunciado = $('#enunciado').val();
	        if ($.trim(enunciado).length == 0){
				alert ('enunciado vacío');
				return false;
			}else if ($.trim(enunciado).length < 10){
				alert ('enunciado corto');
				return false;
			}
			
	var correcta = $('#correcta').val();
	        if ($.trim(correcta).length == 0){
				alert ('introduce una respuesta correcta');
				return false;
			}
	var incorrecta1 = $('#incorrecta1').val();
	        if ($.trim(incorrecta1).length == 0){
				alert ('introduce la respuesta incorrecta1');
				return false;
			}
	var incorrecta2 = $('#incorrecta2').val();
	        if ($.trim(incorrecta2).length == 0){
				alert ('introduce la respuesta incorrecta2');
				return false;
			}
	var incorrecta3 = $('#incorrecta3').val();
	        if ($.trim(incorrecta3).length == 0){
				alert ('introduce la respuesta incorrecta3');
				return false;
			}
	var tema = $('#tema').val();
	        if ($.trim(tema).length == 0){
				alert ('introduce un tema');
				return false;
			}
	alert("boton")
})
