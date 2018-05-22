<html>

	<head>
		
		<?php
			include "Controllers/import.php";
		?>

		<title>Administrator</title>

	</head>

	<body onload="myFunc();">

		<?php
			include "Controllers/menu.php";
		?>

		<div class="form">

			<h2>Upload de instâncias</h2>

			<form enctype="multipart/form-data" action="upload_instances.php" method="POST">

				<p>Pertence a:</p>
				<select name="instance_type">
						<option value="" selected >Escolha...</option>
				<?php

					$mainPath = "_Instances/";
					$folders = array_slice (scandir($mainPath), 2);

					foreach ($folders as $folder) {
						echo "<option value='".$folder."'>" . $folder . "</option>";	
					}

				?>
				</select>
				
				<input type="submit" value="Enviar" name="submit"/>

			</form>

		</div>

		<?php
			include "Controllers/footer.php";
		?>

	</body>

</html>