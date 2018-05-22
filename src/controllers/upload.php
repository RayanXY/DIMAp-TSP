<?php

	if (!empty($_FILES["userfiles"])) {

		// Counter
		$i = 0;

		// Defining the path to the upload
		$upload_dir = "../_Instances/" . $_POST["instance_size"]."/";

		// Creating the path if not exists
		if (!file_exists($upload_dir)){
			mkdir($upload_dir, 0777, true);
		}

		// Uploading each file selected
		foreach ($_FILES["userfiles"]["name"] as $filename) {

			$tmp = $_FILES["userfiles"]["tmp_name"][$i];
			$path = $upload_dir . basename($filename);

			if (move_uploaded_file ($tmp, $path)) {
				echo "The file " . basename ($filename) . " has been uploaded. </br>";
			} else {
				echo "Error, please try again! </br></br>";
			}

			$i++;

		}

	}

	header("LOCATION: ../index.php");

?>