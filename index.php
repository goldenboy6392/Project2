<?php session_start();
?>

<!DOCTYPE html>
<head>
<title>P2 Password Generator</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
	<div class="container">
		<h2>Secure Password Generator</h2>
		<h4>Inspired by the xkcd comic 936: <a href="http://xkcd.com/936/"> Password Strength</a></h4>

		<p class="password">
		<?php
			if(isset($_SESSION['password'])){
				$password=$_SESSION['password'];	
			}
			else{
				$password="Lima-Jaguar-Mike-Echo";
			}
		echo $password;
		 ?>
		 </p>

		<form method ="POST" action="password.php">
			<p class="options">
			<label for="number-of-words"> How many Words?</label>
			<input maxlength=1 type="text" name="number-of-words" id="number-of-words" value=""> (Maximum of 9)
			<br>

			<input type="checkbox" name='number' id="number">
			<label for='number'>Include a number</label>
			<br>
			<input type="checkbox" name="symbol" id="symbol" >
			<label for="symbol">Include a symbol</label>
			</p>

			<input type='submit' name='submit' class='btn btn-default' value='Generate A New Password'>
			
			</form>
			<br>
			<p class="isnumber">
			<?php
				if(isset($_SESSION['isnumber'])){
					$isnumber=$_SESSION['isnumber'];	
				}
			else{
				$isnumber='';
			}
			
			echo $isnumber;
			session_unset();
			?>
			</p></div>

</body>