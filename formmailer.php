<?php
require_once('header.html');
/*
$servername = "localhost"
$username = ""
$password = ""
$dbname = "registrations"
try 
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
}
catch
{
    echo $sql . "<br>" . $e->getMessage();    
}


$name = htmlspecialchars($_POST['name']);
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = date("m-d-Y", strtotime($_POST['date']));
$location = $_POST['location'];
$class = $_POST['class_needed'];
$formcontent= "From: $name \r\n Phone: $phone \r\n Call Back: $call \r\n Location Requested: $location \r\n Date(s) Requested: $date \r\n Class(es) Requested:"; 
for ($i=0; $i < count($class); $i++)
{ 
    $formcontent .= $class[$i] . '\n';
    try
    {
        $sql = "INSERT INTO registration (Name, Email, PhoneNumber, DatesRequested, Location, class, confirmed
                VALUES (" . $name.", ". $email. ", ".$phone.", " . $date .", ". $location . ", " . $class[$i] .  ", 0)"
    }

}
$recipient = "baseballrocks0412@gmail.com";
$subject = "New Client Registration";
//$mailheader = "From: $email \r\n";
//mail($recipient, $subject, $formcontent) or die("Error!");


catch
{
    echo "Your Registration could not be completed at this time, Please contact us at firstcarecpr@gmail.com for futher assistancte.";
}

$conn = null
--
*/
header("Location:https://squareup.com/market/first-care-cpr/cpr-class-registration-fee?square_lead=item_embed");
require_once('footer.html');
?>
