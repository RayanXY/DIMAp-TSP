<html lang="pt-br">

	<head>
		
		<?php
			include "imports/import.php";
		?>

		<title>Administrator</title>

	</head>

	<body onload="myFunc();">

		<?php
			include "../src/imports/menu_en.php";
		?>

		<div id="wrapper">

			<div class="content">

				<div class="form">

					<h2>Instances Upload</h2>

					<form enctype="multipart/form-data" action="tsp-upload-2.php" method="POST">

						<p>Belong to:</p>
						<select name="instance_type">
								<option value="" selected >Choose...</option>
						<?php

							$mainPath = "../data/instances/";
							$folders = array_slice (scandir($mainPath), 2);

							foreach ($folders as $folder) {
								echo "<option value='".$folder."'>" . $folder . "</option>";	
							}

						?>
						</select>
						
						<input type="submit" value="Enviar" name="submit"/>

					</form>

				</div>

				<div class="form">

					<h2>Instances Remove</h2>

					<form enctype="multipart/form-data" action="tsp-remove.php" method="POST">

						<p>Belong to:</p>
						<select name="instance_type">
								<option value="" selected >Choose...</option>
						<?php

							$mainPath = "../data/instances/";
							$folders = array_slice (scandir($mainPath), 2);

							foreach ($folders as $folder) {
								echo "<option value='".$folder."'>" . $folder . "</option>";	
							}

						?>
						</select>
						
						<input type="submit" value="Enviar" name="submit"/>

					</form>

				</div>

			</div>

			<?php
				include "../src/imports/footer_en.php";
			?>

		</div>

	</body>

</html>