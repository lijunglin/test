<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Formulaire</title>
	</head>

	<body>
		<form action="reponse.php" method="POST">
			Nom: <input type="text" name="nom" /><br />
			Prénom: <input type="text" name="prenom" /><br />
			Nombre d'éléments: <select name="nombre"><br />
			<?php
					for ($i = 1; $i <= 10; $i++) {
						echo '<option value="' . $i . '">' . $i . ' élément';
						if ($i > 1) {
							echo 's';
						}
						echo '</option>';
					}
				?>
			</select><br />
			Nombre de lignes: <select name="ligne" ><br />
			<?php
					for ($i = 1; $i <= 10; $i++) {
						echo '<option value="' . $i . '">' . $i . ' ligne';
						if ($i > 1) {
							echo 's';
						}
						echo '</option>';
					}
				?>
				</select><br />
			Nombre de colonnes: <select name="colonne" ><br />
			<?php
					for ($i = 1; $i <= 10; $i++) {
						echo '<option value="' . $i . '">' . $i . ' colonne';
						if ($i > 1) {
							echo 's';
						}
						echo '</option>';
					}
				?>
				</select><br />
			<input type="submit" value="Valider" />
		</form>
	</body>
</html>