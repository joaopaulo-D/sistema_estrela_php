<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<title>Sistema de estrelas - PHP</title>
</head>
<body style="background: #191919; color: #fff;">
	<h1>Sistema de estrela do JP</h1>
	<h1>Avilie</h1>

	<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
	?>

	<form action="avaliar.php" method="post" enctype="multipart/form-data">
		<div class="estrelas">
			<input type="radio" id="vazio" name="estrela" value="" checked>

			<label for="estrela-um"><i class="fa"></i></label>
			<input type="radio" id="estrela-um" name="estrela" value="1">

			<label for="estrela-dois"><i class="fa"></i></label>
			<input type="radio" id="estrela-dois" name="estrela" value="2">

			<label for="estrela-tres"><i class="fa"></i></label>
			<input type="radio" id="estrela-tres" name="estrela" value="3">

			<label for="estrela-quatro"><i class="fa"></i></label>
			<input type="radio" id="estrela-quatro" name="estrela" value="4">

			<label for="estrela-cinco"><i class="fa"></i></label>
			<input type="radio" id="estrela-cinco" name="estrela" value="5">
			<br>
			<br>

			<input type="submit" value="Avaliar">
		</div>
	</form>
</body>
</html>