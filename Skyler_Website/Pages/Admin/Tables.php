<html>
<head>
    <style>
  .navbar {
            overflow: hidden;
            background-image: linear-gradient(to bottom, darkgoldenrod, gold, darkgoldenrod);
            border-radius: 16px;
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
            border-radius: 16px;
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
            background-color: goldenrod;
            border-radius: 16px;
        }

        .subnav-content {
            display: none;
            position: absolute;
            left: 0;
            background-image: linear-gradient(to bottom, darkgoldenrod, gold, darkgoldenrod);
            width: 100%;
            z-index: 1;
            border-radius: 16px;
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
        .li {
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
    <a href="http://localhost:3306/Pages/Admin/Main_Admin_Page.php">Home</a>
    <div class="subnav">
        <button class="subnavbtn">Admin</button>
        <div class="subnav-content">
        <li class="li"><a href="http://localhost:3306/Pages/Admin/xml_chart_users.php">Users</a></li>
        <li class="li"><a href="">Add Users (Coming Soon)</a></li>
            <li class="li"><a href="">Add Users (Coming Soon)</a></li>
        </div>
    </div>
</div>
<div>
</div>
</body>
</html>