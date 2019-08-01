$(document).ready(function(){ 
	

	$("#login").click(function(){
		 
		// test champs rempli
		if($("#email").val()!="" && $("#password").val()!="") {
			
			$.ajax({
				type:"POST",
				url:"Controller/login.php",
				data:$("#loginForm").serializeArray(),
				dataType : "json",
			
				success: function(data) 
				{
					console.log(data);
					if(data["user_logged"])
					{
					  document.location.href =  "index.php?action=page";
					}else
					{
					  alert(data["message"]);
					}
					//document.location.href =  "View/front/page.php";
				},
			});
		}
	}) ; 
}) ;  