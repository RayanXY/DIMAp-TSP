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

			<form enctype="multipart/form-data" action="Controllers/upload.php" method="POST">

				<p>Instâncias:</p>
				
					<input type="text" id="input-text" class="upload-text" readonly>

					<label class="upload-button">Upload
						<input type="file" id="input-button" name="userfiles[]" onchange="myFiles ()" multiple>
					</label>

				<br/>
				<br/>

				<p>Qual o tipo:</p>
				<select name="instance_size">
						<option value="" selected >Escolha...</option>
					
				<?php

					$instance_type = $_POST["instance_type"];
			
					$path = "_Instances/" . $instance_type . "/";
					$folders = array_slice (scandir($path), 2);

					foreach ($folders as $folder) {
						echo "<option value='".$instance_type."/".$folder."'>" . $folder . "</option>";	
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