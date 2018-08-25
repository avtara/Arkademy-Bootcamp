<html>
<head>
<title>Check</title>
</head>
<body>

<table>
<tr>
<form method="POST">
<td>
<label>Username :</label>
</td>
<td>
<input type="text" name="username" placeholder="Insert Username"> 
</td>
</tr>
<tr>
<td>
<label>Email : </label>
</td>
<td>
<input type="email" name="email" placeholder="Insert Email">
</td>
</tr>

<tr>
<td>
<label>Phone Number :</label>
</td>
<td>
<input type="text" name="phoneNumber" placeholder='Insert Phonenumber'>
</td>
</tr>
<td>	
<input type="submit" name="submit" value="SUBMIT">
</td>
</form>
</table>

<br>



<?php
if(isset($_POST['submit'])){
	if(ctype_lower($_POST['username'])){
		echo "Valid Username<br>";
	}else{
		echo "<script>alert('Username Must Be Lower');</script>";
	}
	if(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST['email'])) {
	  echo 'Valid Email<br>';
	} else {
	  echo "<script>alert('Invalid Email');</script>";
	}
	if (preg_match("/^[\+0-9\-\(\)\s]*$/", $_POST['phoneNumber'])) {
		echo "Valid Phone Number<br>";
	}else{
		echo "<script>alert('Invalid Phone Number');</script>";
	}
}else{
	echo "Tolong isi Data diatas";
}
?>


</body>
</html>
