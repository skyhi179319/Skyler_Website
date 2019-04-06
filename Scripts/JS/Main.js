function check(form)
{

if(form.userid.value == "Skyler" && form.pwd.value == "Skyler")
{
	return true;
}
else
{
	alert("Error Password or Username")
	return false;
}
}