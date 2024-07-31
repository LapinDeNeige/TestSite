<?php
function sendEmail($from,$message)
{
$email_to='gelboffice@yahoo.com';
$subject='This message was received from testing site';

$header=array('From'=>$from,'Reply-To'=>'gelboffice@yahoo.com','X-Mailer'=>'PHP/'.phpversion());
mail($email_to,$subject,$message,$header);


}

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['message'];

echo sendEmail($email,$msg);

//echo 'kuku';
//$header='From:'.$email.'\r\n Reply-To:me@mai.com:\r\n';
//echo $header;


?>