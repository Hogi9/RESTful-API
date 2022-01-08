<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<div style="display:block; text-align:center; margin-top:10em;">
	<h2>Login</h2>
	<div style="display:inline-block; text-align:left;">
		<form action="<?php echo base_url(); ?>index.php/karyawan/do_login" method="POST">
			Email : <br><input type="text" name="email"> <br>
			Password : <br><input type="password" name="password"> <br>
			<input type="submit" name="submit" value="Login" style="float:right;margin-top:1em;">
		</form>
	</div>
</div>
</body>
</html>