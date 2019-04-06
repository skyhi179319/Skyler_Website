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
    <script src="http://localhost:3006/Scripts/JS/Main.js"></script>
    <link rel="stylesheet" href="http://localhost:3306/Scripts/CSS/Main.css">
    <link rel="icon" href="http://localhost:3306/Server/Icon.png">
    //Azure SQL Database - jdbc:sqlserver://skyler.database.windows.net :1433;database=website//
</head>
<body class="Home_Page_Body">
<div class="navbar">
    <a href="#home">Home</a>
    <div class="subnav">
        <button class="subnavbtn">Admin</button>
        <div class="subnav-content">
        <a href="http://localhost:3306/Pages/Admin/Tables.php">Tables</a>
        </div>
    </div>
</div>
<?php
$servername = "skyler.database.windows.net";
$username = "skyhi179319@skyler";
$password = "skyler179319!";
$dbname = "website";
// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "connection on";
}
//$sql = "SELECT Username, Password FROM Users";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "Username: " . $row["Username"]. " - Password: " . $row["Password"]. "<br>";
//    }
//} else {
//    echo "0 results";
//}
//$conn->close();
//
//$sql = "SELECT * FROM persons";
//if($result = mysqli_query($link, $sql)){
//    if(mysqli_num_rows($result) > 0){
//        echo "<table>";
//            echo "<tr>";
//                echo "<th>id</th>";
//                echo "<th>first_name</th>";
//                echo "<th>last_name</th>";
//                echo "<th>email</th>";
//            echo "</tr>";
//        while($row = mysqli_fetch_array($result)){
//            echo "<tr>";
//                echo "<td>" . $row['id'] . "</td>";
//                echo "<td>" . $row['first_name'] . "</td>";
//                echo "<td>" . $row['last_name'] . "</td>";
//                echo "<td>" . $row['email'] . "</td>";
//            echo "</tr>";
//        }
//        echo "</table>";
//        // Free result set
//        mysqli_free_result($result);
//    } else{
//        echo "No records matching your query were found.";
//    }
//} else{
//    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//}
//
//// Close connection
//mysqli_close($link);
//
?>

</body>
</html>
