function validateForm() 
{
	var userid = document.getElementById('userid').value;
	var passwd = document.getElementById('passwd').value;

	if (userid == "" || passwd == "")
	{
		if(event.preventDefault)
		{
        event.preventDefault();
    }else
    {
       event.returnValue = false; // for IE as dont support preventDefault;
    }
    alert("Please fill in all the fields");
    document.getElementById('passwd').value = "";
    return false;
	}
}