<?php
/**
 * Created by PhpStorm.
 * User: hamlet
 * Date: 3/23/17
 * Time: 3:04 PM
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


//data base Info vars:
$greeting = $name = $fullName = $littleInfo =
$smallIntro = $workExperience = $whoIam = $projectOutlines = $achievements = "";
$myAims = "";
$Quote1 = $Quote2 = $Quote3 = "";
$quoter1 = $quoter2 = $quoter3 = "";
$quoterPic1 = $quoterPic2 = $quoterPic3 = "";
//data base projectInfo vars:
$currentProjectName = $projInfo = $company = $companyInfo = "";
$image = "";


//Data base sql statements
$Info = "SELECT * FROM Info";
$projectInfo =  "SELECT * FROM projectInfo";
$Quotes = "SELECT * FROM Quotes";

$result = $conn ->query($Info);
$row = $result->fetch_assoc();

//There is only one row is supposed to be
//in a database tables.
//The reason is that the site is single user
if ($result->num_rows > 0)
{
    $greeting = $row["greeting"];
    $name = $row["name"];
    $fullName = $row["fullName"];
    $littleInfo = $row["littleInfo"];
    $smallIntro = $row["smallIntro"];
    $workExperience = $row["workExperience"];
    $projectOutlines  = $row["projectOutlines"];
    $achievements = $row["achievements"];
    $whoIam = $row["whoIam"];
    $myAims = $row["myAims"];
}

$result = $conn->query($projectInfo);
$row = $result->fetch_assoc();


if ($result->num_rows > 0)
{
    $currentProjectName = $row["currentProjectName"];
    $projInfo = $row["projectInfo"];
    $company = $row["company"];
    $companyInfo = $row["companyInfo"];
    $image = '<img src="data:image/jpeg;base64,'.base64_encode($row["picture"]).'" width="290" height="290">';


}
$result = $conn->query($Quotes);


if ($result->num_rows > 0)
{
    $row  =$result->fetch_assoc();
    {
        $Quote1 = $row["Quote"];
        $quoter1 = $row["quoter"];
        $quoterPic1 = '<img src="data:image/jpeg;base64,'.base64_encode($row["picture"]).'" alt=\'\' class=\'img-u image-responsive img-circle\' width="290" height="290">';
    }
    $row  =$result->fetch_assoc();
    {
        $Quote2 = $row["Quote"];
        $quoter2 = $row["quoter"];
        $quoterPic2 = '<img src="data:image/jpeg;base64,'.base64_encode($row["picture"]).'" alt="" class="img-u image-responsive" width="290" height="290">';
    }
    $row  =$result->fetch_assoc();
    {
        $Quote3 = $row["Quote"];
        $quoter3 = $row["quoter"];
        $quoterPic3 = '<img src="data:image/jpeg;base64,'.base64_encode($row["picture"]).'" alt="" class="img-u image-responsive" width="290" height="290">';
    }
        //$Quote3 = $row["MyQuotes"];
}

$conn->close();