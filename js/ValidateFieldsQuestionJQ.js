

//$("#botonEnviar").click(function(){
	
	
//})

$(document).ready(function(){
	$('#botonEnviar').click(function(){
		   var emailER = /^([\w-\.]+@([\w-]+\.)+[\w-](2,4))?$/;
		   var email = $('#email').val();
		   if ($.trim(email).length == 0){
			   alert ('direccion vacio');
			   return false;
		   }
	if (emailER.test(email)){
			   return true;
		   }
	else {
			   alert('d incorrecta');
			   return false;
			   )));
		   });