<html>
<head>
    <style>
        .navbar {
            overflow: hidden;
            background-image: linear-gradient(to bottom, darkgoldenrod, gold, darkgoldenrod);
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: darkgoldenrod;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .subnav {
            float: left;
            overflow: hidden;
        }

        .subnav .subnavbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: darkgoldenrod;
            padding: 14px 16px;
            background-image: linear-gradient(to bottom, darkgoldenrod, gold, darkgoldenrod);
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover, .subnav:hover .subnavbtn {
            background-color: gold;
        }

        .subnav-content {
            display: none;
            position: absolute;
            left: 0;
            background-image: linear-gradient(to bottom, darkgoldenrod, gold, darkgoldenrod);
            width: 100%;
            z-index: 1;
        }

        .subnav-content a {
            float: left;
            color: darkgoldenrod;
            text-decoration: none;
        }

        .subnav-content a:hover {
            background-image: linear-gradient(to bottom, darkgoldenrod, gold, darkgoldenrod);
            color: black;
        }

        .subnav:hover .subnav-content {
            display: block;
        }
    </style>
    <title>Admin Page</title>
    <script src="http://localhost:3306/Scripts/JS/Main.js"></script>
    <link rel="stylesheet" href="http://localhost:3306/Scripts/CSS/Main.css">
    <link rel="icon" href="http://localhost:3306/Server/Icon.png">
</head>
<body class="Home_Page_Body">
<div class="navbar">
    <a href="#home">Home</a>
    <div class="subnav">
        <button class="subnavbtn">Admin</button>
        <div class="subnav-content"
             <a href="">INACTIVE</a>
        </div>
    </div>
</div>
<div>
<?php
$connectionInfo = array("UID" => "skyhi179319@skyler", "pwd" => "skyler179319!", "Database" => "website", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "jdbc:sqlserver://skyler.database.windows.net :1433;database=website";
$conn = mysqli_connect($serverName, $connectionInfo);

// Create connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    printf("Client library version: %s\n", mysqli_get_client_info($conn));
    echo "<br>";
    print_r("Client library version: %s\n",mysqli_get_connection_stats($conn));
    echo "<br>";
    mysqli_close($conn);
}
?>
</div>
</body>
</html>