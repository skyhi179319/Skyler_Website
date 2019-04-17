<html>
<head>
    <title>Website Login</title>
    <link rel="stylesheet" href="http://localhost:3306/Scripts/CSS/Main.css">
    <link rel="icon" href="http://localhost:3306/Server/Icon.png">
</head>
<body class="Main_Login_Body">
<form name="loginForm" method="POST" action="http://localhost:3306/Scripts/PHP/Login_Config.php">
    <table class="Main_Login_Table" width="20%" align="center">

        <tr>
            <td colspan=2><center><font size=4><b>Admin Login</b></font></center></td>
        </tr>

        <tr>
            <td>Username:</td>
            <td><input type="text" size=25 name="Username_Admin_Login"></td>
        </tr>

        <tr>
            <td>Password:</td>
            <td><input type="Password" size=25 name="Password_Admin_Login"></td>
        </tr>

        <tr>
            <td ><input type="Reset"></td>
            <td><input type="submit"></td>
        </tr>

    </table>
</body>
</html>

