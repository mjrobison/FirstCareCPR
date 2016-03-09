<?php
require_once('header.html');
$name = htmlspecialchars($_POST['name']);
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = date("m-d-Y", strtotime($_POST['date']));
$location = $_POST['location'];
$class = $_POST['class_needed'];
$formcontent= "From: $name \n Phone: $phone \n Call Back: $call \n Location Requested: $location \n Date(s) Requested: $date \n Class(es) Requested:"; 
for ($i=0; $i < count($class); $i++)
{ 
    $formcontent .= $class[$i] . '\n';
}
$recipient = "baseballrocks0412@gmail.com";
//$subject = "New Client Registration";
//$mailheader = "From: $email \r\n";
//mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo ('<main><section><br /><br /><br /><br /><br /><br /><br /><p>');
for ($i=0; $i < count($class); $i++)
{
    echo $class[$i] . '<br />';
}
 
echo ('</p><p>'.$formcontent.'</p></section></main>');

echo '<br /><br /><br /><br /><br /><br /><br />  <br /><br /><br /><br /> <br /> <br /> <br />';
echo '<br /><br /><br /><br /><br /><br /><br /><br />';

require_once('footer.html');
//window.open("https://squareup.com/market/first-care-cpr/cpr-class-registration-fee?square_lead=item_embed", "_blank");
?>
