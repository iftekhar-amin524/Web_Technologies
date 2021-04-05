<!DOCTYPE HTML>
<html>
<head> 
	<title> Registration</title> 

</head>
<body>

<form class="form" onsubmit="return validateForm()">

<table>
<tr> <td> First Name: </td>
<td><input type="text" id = "fname"> </td> </tr>
<tr><td> Last Name: </td>
	<td><input type="text" id = "lname"> </td> </tr>
<tr><td> Email: </td>
	<td><input type="Email" id = "email"> </td> </tr>
<tr><td> Username: </td>
	<td><input type="text" id = "uname"> </td> </tr>
	<tr><td> Password: </td>
	<td><input type="Password" id = "password"> </td> </tr>
<tr><td> Confirm Password: </td>
	<td><input type="ConPassword" id = "cpassword"> </td> </tr>

</table>

	Gender
	<input type="radio" name="Gender">
	Male
	<input type="radio" name="Gender">
	Female 
	<input type="radio" name="Gender">
	Other  
	<br>

Date of Birth:
  <input type="date" id="birthday" name="birthday">
  <br>

  <input type="submit" name="submit" >
  <input type="Reset" name="Reset">
</form>

</body>
</html>

<script>
const form = document.querySelector('.form');
const fName = document.querySelector("#fname").value
const lName = document.querySelector("#lname").value
const uName = document.querySelector("#uname").value
const pass = document.querySelector("#password").value
const cpass = document.querySelector("#cpassword").value

function validateForm(){
	if(fName === "" || lName === "" || uName === "" || pass === "" || cpass === ""){
		alert("Please Fill All Info!");
		return false;
	}
	if(pass !== cpass) {
		alert("Password Doesn't Match!");
		return false;
	}
	return true;

}
</script>