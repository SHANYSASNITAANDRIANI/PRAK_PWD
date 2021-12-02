<?php
echo "<h2>Login</h2> // sebuat form pengirian untuk data
<form method=post action=cek_login.php>
<table>
<tr><td>Email</td><td> : <input name='email' type='email'></td></tr>//input email
<tr><td>Username</td><td> : <input name='id_user' type='text'></td></tr>//input username
<tr><td>Password</td><td> : <input name='password' type='text'></td></tr>//input password
<tr><td>Captcha<br>
<img src='captcha.php' /></td><td> : <input name='captcha_code' type='text'></td></tr>//pemanggilan captcha
<tr><td colspan=2><input type='submit' value='LOGIN'></td></tr>//submit
</table>
</form>";
?>