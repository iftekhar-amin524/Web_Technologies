<?php
$validateid="";
$validatename="";
$validateemail="";
$name=$email="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$id=$_REQUEST["fid"];
$name=$_REQUEST["fname"];
$email=$_REQUEST["email"];
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatename= "you must enter name";

}
else
{
    $name=$_REQUEST["fname"];
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email";
}
else{
    $validateemail= "your email is ".$email;
}

}
?>