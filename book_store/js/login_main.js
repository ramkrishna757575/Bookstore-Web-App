(function(){
	var form = document.getElementsByTagName("form")[0];
	form.onsubmit = function(){
		var useridval = document.getElementById("userid").value;
		var passwdval = document.getElementById("passwd").value;
		var url = form.getAttribute("action");
		var li = document.getElementsByTagName("li")[14];
		ajaxLib.ajax(url,{
			method: "POST",
			data: {
				userid: useridval,
				passwd: passwdval
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