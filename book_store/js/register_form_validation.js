function validateForm() 
{
	var username = document.getElementById('username').value;
	var userid = document.getElementById('userid').value;
	var passwd = document.getElementById('passwd').value;
	var passwdc = document.getElementById('passwdc').value;
	var email = document.getElementById('email').value;
	var phone = document.getElementById('phone').value;
	var addr = document.getElementById('addr').value;

	if (username == "" || userid == "" || passwd == "" || 
			passwdc == "" || email == "" || phone == "" || addr == "")
	{
		if(event.preventDefault)
		{
        event.preventDefault();
    }else
    {
       event.returnValue = false; // for IE as dont support preventDefault;
    }
    alert("Please fill in all the fields");
    return false;
	}
	else
	{
		if(passwd != passwdc)
		{
			alert("Passwords do not match. Please try again");
			document.getElementById('passwd').value = "";
			document.getElementById('passwdc').value = "";
			event.preventDefault();
			event.returnValue = false;
			return false;
		}
	}
}