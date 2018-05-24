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

					<h2>Remover Instâncias</h2>

					<form enctype="multipart/form-data" action="controllers/remove.php" method="POST">

						<p>Qual o tipo:</p>
						<select name="instance_size">
								<option value="" selected >Escolha...</option>
							
						<?php

							$instance_type = $_POST["instance_type"];
					
							$path = "../data/instances/" . $instance_type . "/";
							$folders = array_slice (scandir($path), 2);

							foreach ($folders as $folder) {
								echo "<option value='".$instance_type."/".$folder."'>" . $folder . "</option>";	
							}
			

						?>
						</select>
						
						<input type="submit" value="Enviar" name="submit_remove"/>

					</form>

				</div>

			</div>

		</div>

		<?php
			include "../src/imports/footer.php";
		?>

	</body>

</html>