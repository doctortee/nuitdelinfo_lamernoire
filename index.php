
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Nuit de l'info 2018</title>
	<link rel="stylesheet" media="screen" href="css/authentication.css">
	<script type="text/javascript" src="js/Authentication.js"></script>
</head>

<body>

	<div class="page-wrapper">
		<header role="banner" >
			<ul class="ulMenu">
			<h1> Nuit de l'info 2018 </h1>
			</ul>
		</header>

		</br>
		</br>
		<h2>Connectez-vous</h2>
<form name="authent" method="POST"  onsubmit="return verif();" action=script/Authentication.php>

		<table class="tableau">

			<tr>
				<td><label>Votre identifiant:</label></td>
				<td vertical-align:text-top> <input type="text" name="user" id="user" style="width:250px;height:20px;text-align:center;font-size:15px;color:black;"> </td>

			</tr>
			<tr>
				<td><label>Code secret:</label></td>
				<td> <input type="password" name="pass" id="password" style="width:250px;height:20px;text-align:center;;font-size:15px;color:black;"></td>
			</tr>


		</table>

		<p><input type="submit" value="Valider" style="width:125px;height:25px"></p>

	</div>
	<div class="erreur" id="errMsg">
	<?php  session_start();
	if (isset($_SESSION['message']))
	{
		$Text = $_SESSION['message'];
   echo "<p style=\"text-align:center;color:red\">".$Text."</p>";
    unset($_SESSION['message']);
	}?></div>
</form>

</div>
</body>

</html>
