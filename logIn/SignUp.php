<html>
<head>
    <meta charset="UTF-8">
    <title>SignUp</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<div class="container">
    <section id="content">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h1>Sign Up</h1>
            <div>
                <input type="text" placeholder="Username" id="name" required="" />
            </div>
            <div>
                <input type="password" placeholder="Password" id="password" required="" />
            </div>
            <div>
                <input type="password" placeholder="Confirm Password" id="confirm_password" required="" />
            </div>
            <div>
                <input type="text" placeholder="Unique ID" id="id" required="" />
            </div>
            <div>
                <input type="submit" value="Sign Up" />
            </div>
        </form><!-- form -->
    </section><!-- content -->
</div><!-- container -->




<?php
/**
 * Created by PhpStorm.
 * User: hamlet
 * Date: 3/13/17
 * Time: 9:45 PM
 */

// define variables and set to empty values
$retrievedName = $retrievedPassword = $confirm_password = $id = "";
$isOkay = false;
$permission = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $retrievedName = test_input($_POST["name"]);
    $retrievedPassword = test_input($_POST["password"]);
    $confirm_password = test_input($_POST["confirm_password"]);
    $id = test_input($_POST["id"]);

}

if ($retrievedName != "" && $retrievedPassword != "" && $confirm_password  != "")
{
    if ($retrievedPassword == $confirm_password)
    {
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

        $sql = "SELECT name FROM admins WHERE name = '$retrievedName'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "This User name exists. Please Try another one.";
        }
        else
        {
            $sql =  "SELECT id FROM admins WHERE name = '$id'";
            $result = $conn->query($sql);
            if($result->num_rows > 0)
                echo "This ID allready exist. Please try another one";
            else
            {
                $sql = "INSERT INTO admins (name,password,id,Permission) VALUES ('$retrievedName','$retrievedPassword','$id','$permission')";
                if ($conn->query($sql) === TRUE)
                {
                    echo "New record created successfully <br />";
                    header("Location: login.html");
                }
                else
                {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
    }
    else
    {
        echo "Password Doesnot Mach!";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function connectToDB()
{
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
}


?>

<script>
    function goToLogIn() {
        window.location.href = "login.php";
    }
</script>


</body>
</html>
