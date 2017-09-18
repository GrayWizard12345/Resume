<?php
/**
 * Created by PhpStorm.
 * User: hamlet
 * Date: 3/24/17
 * Time: 5:05 PM
 */
$servername = "localhost";
$username = "root";
$password = "tHISpaSSWORDiSvERYsTRONG12345";
$dbName = "Users";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


//Post handling
$Name = $email = $Notes = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $Notes = test_input($_POST["notes"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sql = "INSERT into Contacts (name,email,notes) VALUES ('$Name','$email','$Notes')";
$result = "";
if ($conn->query($sql)==TRUE)
{
    $result = "YOUR REQUEST WAS SENT SUCCESSFULLY!";
}else
{
    $result = "ERROR ".$sql."<br>".$conn->error;
}


echo "<h1>", $result;
$conn->close();
?>


