<html>
<head>
<title>Website Login</title>
<link rel="stylesheet" href="http://localhost:3306/Scripts/CSS/Main.css">
<script scr="http://localhost:3306/Scripts/JS/Main.JS"></script>
<link rel="icon" href="http://localhost:3306/Server/Icon.png">
</head>
<body class="Main_Login_Body">
<form name="loginForm" method="POST" action="http://localhost:3306/Pages/Home/Main_Page.php">
<table class="Main_Login_Table" width="20%" align="center">

<tr>
<td colspan=2><center><font size=4><b>Website Login</b></font></center></td>
</tr>

<tr>
<td>Username:</td>
<td><input type="text" size=25 name="Username_Main_Login"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="Password" size=25 name="Password_Main_Login"></td>
</tr>

<tr>
<td ><input type="Reset"></td>
<td><input type="submit" onclick="return check(this.form)" value="Login"></td>
</tr>

</table>
<script>
function check(form)
{

if(form.Username_Main_Login.value == "Skyler" && form.Password_Main_Login.value == "Skyler")
{
	return true;
}
else
{
	alert("Error Password or Username")
	return false;
}
}
</script>
</body>
</html>
