function validation()
{


	var mob=document.getElementById("mob").value.length;
	var email=document.getElementById("email").value.indexOf("@"&&".");
	var count=1;
	
	

	
	if(mob != 10)
	{
		count++;
		alert("ENTER VALID MOBILE NUMBER");
	}
	if(email == -1)
	{
		count++;
		alert("ENTER VALID E-MAIL ID");
	}
	if(count == 1)
	{
		alert("YOU ARE SUCCESSFULLY REGISTERED");
		window.open("http://localhost/Associate/contact.html");
		
	}
			
}