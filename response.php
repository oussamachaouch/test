<!DOCTYPE html>
<html>
<head>
	<title>Response page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header><h1>Ceci les résultats</h1></header>
	<section>
		<?php
			if (isset($_POST['lastname']) AND isset($_POST['firstname']) AND isset($_POST['age'])) {
				echo 'vous etes'.$_POST['firstname'].' '.$_POST['lastname'];
			}else {
				echo 'there is nothing';
			}
	?>
	</section>
<footer><h1>Merci encore</h1></footer>
</body>
</html>