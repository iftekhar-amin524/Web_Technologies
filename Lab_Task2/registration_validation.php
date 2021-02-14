<!DOCTYPE HTML>  
<html>
<head>
<title>Registration Page</title>
</head>
<body>  
<h1>My Registration Page</h1>

<?php

$validatename="";
$validateemail="";
$validateusername="";
$validatepass="";
$validategender="";


$gender="";


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name=$_REQUEST["fname"];
    if (empty($_POST["fname"])) {
    $validatename = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $validatename = "Only letters and white space allowed";
    }
  }
  
  $email=$_REQUEST["email"];
  if (empty($_POST["email"])) {
    $validateemail = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validateemail = "Invalid email format";
    }
  }
    
  
  $username=$_REQUEST["uname"];
  if (empty($_POST["uname"])) {
    $validateusername = "username is required";
  } else {
    $username = test_input($_POST["uname"]);
    // check if e-mail address is well-formed
    if(preg_match('/^[a-zA-Z0-9]{5,}$/', $username)) { // for english chars + numbers only
        $validateusername= "only alphanumeric & longer than or equals 5 chars";
    }
  }

  if (empty($_POST["gender"])) {
    $validategender = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

?>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post"> 
  Name: <input type="text" name="fname"> <?php echo $validatename; ?>
  <br><br>
  E-mail: <input type="text" name="email"> <?php echo $validateemail; ?>
  <br><br>
  Username: <input type="text" name="uname"> <?php echo $validateusername; ?>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <?php echo $validategender; ?>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $username;
echo "<br>";
echo $gender;
?>

</body>
</html>