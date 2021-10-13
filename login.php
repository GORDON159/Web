  
<html>
<head><title>Login</title>
</head>
<body>

<form action="actionlogin.php" method="POST">
Account :<br />
<input type="text" name="account">
<br />
Password :<br />
<input type="password" name="password">
<br />
<input type="submit" name="submit" value="Login">
<input type="hidden" name="refer" value="<?php echo (isset($_GET['refer'])) ? $_GET['refer'] : 'index.php'; ?>">
<a href="register.html">註冊會員</a><br>
</form>
</body>
</html>