$( document ).ready(function() {
	//sign up form
	$("#signUpForm").submit(function(e) {
		e.preventDefault();
		var email = $('#signUpEmail').val();
		if (email == ""){
			$("#modalLabel").html("Email Newsletter");
			$("#modalContent").html("Please enter your email address.");
			$("#smallModal").modal('show');
			return;
		}
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))  
		{  
			saveEmail(email);
			return;
		}  
		$("#modalLabel").html("Email Newsletter");
		$("#modalContent").html("Please enter a valid email address.");
		$("#smallModal").modal('show');
		return;	
		

	});
	
	//comment form
	$("#commentForm").submit(function(e) {
		e.preventDefault();
		var name = $("#name").val();
		var email = $("#InputEmail1").val();
		var comment = $("#comment").val();
		var val_name = valid_input(name);
		var val_email = valid_email(email);
		var val_comment = valid_input(comment);
		if (!(val_name && val_comment && val_email)) {
			$("#modalLabel").html("Comments");
			$("#modalContent").html("Please check your inputs and try again.");
			$("#smallModal").modal('show');
			return;
		}
		saveComment(name, email, comment);
		return;
	});

	function valid_input(input) {
		console.log('testing: '+input);
		if (input === '' || input.indexOf("<script>") >= 0) {
			console.log(input+" was bad");
			return false;
		}
		return true;
	}

	function valid_email(email) {
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {  
			return true;
		}
		return false;
	}
});

function saveEmail(email){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			if(xhttp.responseText == 0){
		  //save sucessful
		  $("#modalLabel").html("Email Newsletter");
		  $("#modalContent").html("Thanks for signing up to our newsletter!");
		  $("#smallModal").modal('show');
		} else if(xhttp.responseText == 1){
			$("#modalLabel").html("Email Newsletter");
			$("#modalContent").html("Please enter a valid email address.");
			$("#smallModal").modal('show');
		} else if(xhttp.responseText == 2){
		 //email already registered
		 $("#modalLabel").html("Email Newsletter");
		 $("#modalContent").html("You are already signed up!");
		 $("#smallModal").modal('show');
		}
	}
};
var param = "email="+email;
xhttp.open("POST", "scripts/registerEmail.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
xhttp.send(param);	
}

function saveComment(name, email, comment){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			if(xhttp.responseText == 0){
		  //save sucessful
		  $("#modalLabel").html("Comments");
		  $("#modalContent").html("Comment submitted.");
		  $("#smallModal").modal('show');
		} else if(xhttp.responseText == 1){
		  //email not valid
		  $("#modalLabel").html("Comments");
		  $("#modalContent").html("Please enter a valid email address.");
		  $("#smallModal").modal('show');
		}
	}
};
var param = "name="+name+"&"+"email="+email+"&"+"comment="+comment;
xhttp.open("POST", "scripts/saveComment.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
xhttp.send(param);	
}

//social media buttons
//link -> db insert -> actual website
$("#fb").click(function(){
	window.location.assign("scripts/toFb.php")
});

$("#tw").click(function(){
	window.location.assign("scripts/toTwitter.php")
});

$("#in").click(function(){
	window.location.assign("scripts/toInstagram.php")
});