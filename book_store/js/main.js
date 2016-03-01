(function(){
	var elem = document.getElementById("email");
	elem.oninput = function(){
		var emailval = document.getElementById("email").value;
		var url = "../others/ajax.php";
		var li = document.getElementsByTagName("li")[15];
		ajaxLib.ajax(url,{
			method: "POST",
			data: {
				email: emailval
			},
			before: function(){
				li.innerHTML = "<p>Validating...</p>";
			},
			complete: function(response){
				li.innerHTML = response;
			}
		});
		return false;
	};
})();