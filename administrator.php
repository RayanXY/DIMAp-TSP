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
						<input type="file" id="input-button" name="files[]" onchange="myFiles ()" multiple>
					</label>

				<label>Pertence a:</label>
				<select name="Types of instances">
						<option value="" selected >Escolha...</option>
						<option value="allan">Allan</option>
						<option value="bruno">Bruno</option>
						<option value="ygor">Ygor</option>
					</select>
				<input type="submit" value="Enviar" name="submit"/>

			</form>

		</div>

		<?php
			include "Controllers/footer.php";
		?>

	</body>

</html>