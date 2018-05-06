<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<form action="http://localhost/CodeIgniter-3.1.7/index.php/user/add" method="POST">
		<table>
		Username :<input name="username" value=""><br/>
		Password :<input name="password" type="password" value=""><br/>
		Fullname :<input name="fullname" value=""><br/>
		Level :<select name="level">
			<option value="admin">Admin</option>
			<option value="user">User</option>
		<input name="tombol" type="submit" value="simpan">
		</table>		
		</form>
	</center>
</body>
</html>