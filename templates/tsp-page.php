<html>

	<head>

		<?php
			include "imports/import.php";
		?>
		<title>Template</title>

	</head>

	<body onload="accordion()">

		<?php
			include "../src/imports/menu.php";
		?>

		<div class="content">
			
			<h2>Title</h2>

			content

			<h3>Instâncias:</h3>

		<?php

			/// Reading every folder in the Main Path.
			$mainPath = "";
			$folders = array_slice(scandir($mainPath), 2);

			foreach ($folders as $folder) {

				echo "<button class=\"accordion\">" . $folder . "</button>";
				echo "<div class=\"panel\">";

					/// Reading every file present in each folder.
					$filePath = $mainPath . $folder ."/";
					$files = array_slice(scandir($filePath), 2);
					
					foreach ($files as $file){

						$fullPath = $filePath . $file;

						echo 
							"<div class=\"panel_options\">
								<a href=\"" . $fullPath . "\">" . $file . "</a>
								<a href=\"Controllers/download.php?file=../" . $fullPath . "\"id=\"download\"> Download</a>
							</div>";

					}

				echo "</div>";

			}

		?>

		</div>

		<?php
			include "../src/imports/footer.php";
		?>

	</body>

</html>