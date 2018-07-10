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

					<form enctype="multipart/form-data" action="controllers/upload.php" method="POST">

						<p>Instances:</p>
						
							<input type="text" id="input-text" class="upload-text" readonly>

							<label class="upload-button">Upload
								<input type="file" id="input-button" name="userfiles[]" onchange="myFiles ()" multiple>
							</label>

						<br/>
						<br/>

						<?php

							$instance_type = $_POST["instance_type"];

							echo "<input type = 'text' name='instance_type' value = '" . $instance_type . "' hidden>";

						?>

						<p>Of what size:</p>

						<select name="exists_size" id="size_select">
								<option value="" selected >Choose...</option>
							
						<?php

							$instance_type = $_POST["instance_type"];
					
							$path = "../data/instances/" . $instance_type . "/";
							$folders = array_slice (scandir($path), 2);

							foreach ($folders as $folder) {
								echo "<option value='".$folder."'>" . $folder . "</option>";	
							}
			

						?>
						</select>

						New size? 
						<input type="radio" name="new_size" value="yes" onchange = "showText ()">Yes
						<input type="radio" name="new_size" value="no" onchange = "showText ()" checked>No

						<br/>

						<div id="new_size_text" style="visibility: hidden">
							Which?
							<input type="text" name="new_size_text" >
						</div>

						<br/>
						<br/>
						
						<input type="submit" value="Submit" name="submit"/>

					</form>

				</div>

			</div>

		</div>

		<?php
			include "../src/imports/footer_en.php";
		?>

	</body>

</html>