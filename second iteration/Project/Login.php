<!DOCTYPE html>
<html>
	<head>
		<title>Login.php</title>
	</head>
	<style>
		table
		{
			border-collapse:collapse;
		}
		table
		{
			border:1px solid green;
		}
		table
		{
			background-color:white;
			color:black;
		}
		table
		{
			align:center;
		}
		th
		{
			text-align:left;
		}
		td
		{
			text-align:center;
		}
		td,th
		{
			vertical-align:middle;
		}
		p.heading1{font-family: "Copperplate Gothic Light", sans-serif;font-size:1.8em;color:#ccecd8;} 
		p.heading2{font-family:"Times New Roman";font-size:1.5em; color:#ccecd8;} 	
		p.head{font-family:"Century Gothic", sans-serif;font-size:1.1em;} 
		p.one{font-family:"Times New Roman";} 
		p.two{font-family:"Times New Roman";} 
		p.three{font-family:"Times New Roman";font-size:1.5em; color:#ccecd8;} 
	</style>
	<body>
		<p class = "heading1" align = "center"><b>ONLINE RECUITMENT PORTAL</b></p>
		<p class = "heading2" align = "center">IIT INDORE</p>
		<body background = "Background.jpg">
		<br><br><br><br><br>
		<form method = "post" action = "validate.php">
		<table align="center" >
			<tr>
				<th height = "40" width = "150"><p class = "head">&nbsp;&nbsp;&nbsp;&nbsp;Member Login</p></th>
			</tr>
			<tr>
				<td width = "80" height = "50" ><p class = "one"><u>U</u>sername</p></td>
				<td width = "7">:</td>
				<td width = "200"><input name="username" type="text" id="username" value = "Username"></td>
			</tr>
			<tr>
				<td height = "50" ><p class = "two"><u>P</u>assword</p></td>
				<td>:</td>
				<td><input name="password" type="password" id="password" value = "Password"></td>
			</tr>
				<td></td>	
				<td>&nbsp;</td>
				<td  height = "50" ><input type="image" src="login_button.gif" alt="Login" width="85" height="30"></td>
			</tr>
		</table> 
		</form>
		<p  class ="three" align = "center" >Don't have an account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "SignUp.php"><img src = "sign.png" alt = "SignUp" width = "75" height = "30"></a></p>
	</body>
</html>