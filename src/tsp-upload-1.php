<html>

	<head>
		
		<?php
			include "imports/import.php";
		?>

		<title>Administrator</title>

	</head>

	<body onload="myFunc();">

		<?php
			include "../src/imports/menu.php";
		?>

		<div id="wrapper">

			<div class="content">

				<div class="form">

					<h2>Upload de instâncias</h2>

					<form enctype="multipart/form-data" action="tsp-upload-2.php" method="POST">

						<p>Pertence a:</p>
						<select name="instance_type">
								<option value="" selected >Escolha...</option>
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

					<h2>Remover Instâncias</h2>

					<form enctype="multipart/form-data" action="tsp-remove.php" method="POST">

						<p>Pertence a:</p>
						<select name="instance_type">
								<option value="" selected >Escolha...</option>
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
				include "../src/imports/footer.php";
			?>

		</div>

	</body>

</html>