$(document).ready(function(){ 
	
	
	$("#login").click(function(){
		 
		// test champs rempli
		if($("#nom").val()!="" && $("#email").val()!="" && $("#password").val()!="") {
			var nom = $("#nom").val().trim() ;
			var email = $("#email").val().trim() ;
			var password = $("#password").val().trim() ;


			var send = "nom="+nom+"&email="+email+"&password="+password ;
           
			$.ajax({
				type:"POST",
				url:"Controller/inscription.php",
				data:send,
				
				success: function(data) {
					alert("Enregistrer") ;
					// window.location.href = 'index.php?action=acceuil';
				},
			});
		}
		
	}) ; 


}) ; 