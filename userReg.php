<!DOCTYPE html>
<html>
<body>

<!--form-->
<form action = "registration.php" method = "post" autocomplete = "off">
	<p>Fields with an asterisk are required</p>
	<!--First name-->
	<p>First Name* <input type = "text" name = "first"/ required> </p>
	
	<!--Last name-->
	<p>Last Name* <input type = "text" name = "last"/ required> </p>
	
	<!--Address 1-->
	<p>Address 1* <input type = "text" name = "add1"/ required> </p>
	
	<!--Address 2, not required-->
	<p>Address 2 <input type = "text" name = "add2"/> </p>
	
	<!--City-->
	<p>City* <input type = "text" name = "city"/ required> </p>
	
	<!--State-->
	<p>State* <input type = "text" name = "state"/ required> </p>
	
	<!--Zip-->
	<p>Zip* <input type = "text" name = "zip"/ required> </p>
	
	<!--Country-->
	<p>Country* <input type = "text" name = "country"/ required> </p>
	
	<!--Submit-->
	<p><input type = "submit" value = "Submit"/ required> </p>
</form>

</body>
</html>