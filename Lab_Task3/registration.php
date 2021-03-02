<html>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method = "post">
	<table>
	<tr> <td> Full Name: </td>
	<td> <input type="text" name ="fname"> </td></tr>
	<tr> <td> Email</td>
	<td> <input type="text" name="email"> </td>
	<tr> <td> Username </td>
	<td> <input type="text" name ="uname"> </td></tr>
<tr> <td> Password </td>
	<td> <input type="Password" name ="pass"> </td></tr>
	<tr> <td> Confirm Password: </td>
	<td> <input type="Password" name ="Cpass"> </td></tr>
</tr>
</table>

	
<br>
	<br> <input type = "submit" value="Register">
<input type="Reset" name="Reset" >
</form>

<?php
$validateemail="";
$validatename="";
$validatepassword="";
$validateradio="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$uname=$_REQUEST["uname"];
	$email=$_REQUEST["email"];
	$fname=$_REQUEST["fname"];
    $pw=$_REQUEST["pass"];
	if(empty($uname) && (preg_match("/^[a-zA-Z-' ]*$/",$uname)) && $uname<5)
	{
		$validatename="Please Enter Valid name!";
	}
	else
	{
		$validatename= "your name is " .$uname;
	}

	if (empty($email) ||!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$validateemail= "Please Enter valid email!";
	}
	else
	{
		$validateemail="your email is " .$email;
	}

}

$servername="localhost";
$username="root";
$password="";
$conn = new mysqli($servername,$username,$password);
if($conn->connect_error){
	die ("Connection failed: ". $conn->connect_error);
}
echo "Connected successfully";

$sql = "CREATE DATABASE wtdb";
if(mysqli_query($conn,$sql))
{
	echo "Database Created Successfuly";
}
else {
	echo "Error Creating database ".mysqli_error($conn);
}

$dbname="wtdb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE user (
id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Fullname VARCHAR(100) NOT NULL,
Username VARCHAR(100) NOT NULL,
email VARCHAR(100),
pass VARCHAR(100),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($conn->query($sql)=== TRUE)
{
	echo "Table CREATED ";
}
else 
{
	echo "Error creating table ".$conn->error;
}



$sql = "INSERT INTO user (Fullname, Username, email,pass)
VALUES ('$fname', '$uname', '$email','$pw')";
if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
} else {
            echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

</body>
</html>