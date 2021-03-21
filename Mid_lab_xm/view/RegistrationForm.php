<?php include "control/validation.php"; ?>

<!DOCTYPE html>
<html>
<body>
<h1>Employee Registration Form </h1>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
Employee ID:
<br>
<input type="text" name="fid"> <?php echo $validateid; ?>
<br>
Employee name:
<br>
<input type="text" name="fname"> <?php echo $validatename; ?>
<br>
Email:
<br>
<input type="text" name="email"> <?php echo $validateemail; ?>
<br>

Date of Birth:
<br>
<input type="date" name="date">
<br>
Street:
<br>
<input type="text" name="street">
<br>
State:
<br>
<input type="text" name="state">
<br>
Post Code:
<br>
<input type="number" name="pcode">
<br>
Country:
<br>
<input type="country" name="country">
<br>
Profile Picture:
<br>
<input type="file" name="picture">
<br>

<input type="submit" value="SUBMIT">
</form>
</body>
</html>
