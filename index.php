<html>
<head>
    <title>Webpage in PHP</title>
</head>
<body>
 <div style="line-height:40px;">
 <div>
  <form action="adduser.php">
	  Name<br><input type="text" name="name" maxlength="20" size="25" padding: 5px;></form>
		Surname<br><input type="text" name="surname" maxlength="20" size="25"><br>
	  Country<br><input type="text" name="country" maxlength="20" size="25"></form><br>
	  City<br><input type="text" name="city" maxlength="20" size="25"></form><br>
	  Street<br><input type="text" name="street" maxlength="20" size="25"></form><br>
	  Email<br><input type="text" name="email" maxlength="20" size="25"></form><br>
Password<br><input type="text" name="confirm_pass" maxlength="20" size="25"><br>
		<input type="submit" value="Registration">
	</form><br>
	<form enctype="multipart/form-date" action=savefile.php"method="post">
	<input type="hidden name=MAX_FILE_SIZE" value="1000"><br>
	Send this file: <input name="userfile" type="file"><br>
	<input type="submit" Value=Send File">
	</form>
	</div>
<?php
echo'<b>File was save on server name</b>'.
	$_FILES['userfile']['tmp_name'].'<br>';
echo'<b>On your mashin he names:</b>'.
	$_FILES['userfile']['name'].'<br>';
echo'<b>File size is:</b>'.
	$_FILES['userfile']['size'].'<br>';
echo'<b>Mime type of file:</b>'.
	$_FILES['userfile']['type'].'<br>';
move_uploaded_file($_FILES['userfile']['tmp_name'],"images/".$_FILES['userfile']['name']);

?>
</body>
<html>
