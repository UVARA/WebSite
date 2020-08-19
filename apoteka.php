<?php
require_once "apotekaracun.php";
$apoteka = new Racun;
$apoteka->stampajRacun();
?>
<!DOCTYPE html>
<html>
<head>
	<title>apoteka</title>
</head>
<body>
	<form action="" method="POST">
		<div>
			<div>
				<div style="float: left;width: 300px;">
					Artikal
				</div>
				<div style="float: left;">
					Kolicina
				</div>
				<div style="clear: both;"></div>
			</div>
			<div>
				<div style="float: left;width: 300px;">
					Andol
				</div>
				<div style="float: left;">
					<input type="text" name="andol">
				</div>
				<div style="clear: both;"></div>
			</div>
			<div>
				<div style="float: left;width: 300px;">
					Aspirin
				</div>
				<div style="float: left;">
					<input type="text" name="aspirin">
				</div>
				<div style="clear: both;"></div>
			</div>
			<div>
				<div style="float: left;width: 300px;">
					Vitamin C
				</div>
				<div style="float: left;">
					<input type="text" name="vc">
				</div>
				<div style="clear: both;"></div>
			</div>
			<div>
				<div style="float: left;width: 300px;">
					Kako ste saznali za nasu apoteku
				</div>
				<div style="float: left;">
					<select name="select">
						<option value="1">Ja sam redovan kupac</option>
						<option value="2">TV reklama</option>
						<option value="3">Halo oglas</option>
					</select>
				</div>
				<div style="clear: both;"></div>
			</div>
			<div>
				<div style="float: left;">
					<input type="submit" name="submit" value="Naruci">
				</div>
				<div style="clear: both;"></div>
			</div>
	</form>
	<a href="home.php">home</a>
</body>
</html>