<html>
<body>


<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "[ThisPAsswordIsVeryStrong12345]";
$dbName = "Users";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


<?php
// define variables and set to empty values
$name = $password = "";
$isLoggedIn = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $password = test_input($_POST["password"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


$sql = "SELECT * FROM admins";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc())
    if($row["name"] == $name && $row["password"] == $password && $row["Permission"] == 1)
    {
        $isLoggedIn = true;
    }
    if ($isLoggedIn)
    {
        echo "Welcome";
        /*
         * index.php;
         * */
    }
    else if($row["Permission"] == 1)
    {
        echo "<H1><br/><br/>Wrong Password or UserName!";

    }
    else{
        echo "<H1><br/><br/> P ermission Denied!";
    }
} else {
    echo "0 results";
}
$conn->close();

?>



</body>
</html>