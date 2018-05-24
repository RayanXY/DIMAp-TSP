<?php

	if (!empty($_FILES["userfiles"]) && isset($_POST["submit"])) {

		// Counter
		$i = 0;

		// Path according to size
		$new_size = $_POST["new_size"];
		$exists_size = $_POST["exists_size"];
		$instance_type = $_POST["instance_type"];

		if ($new_size == "yes") {
			$target_dir = $_POST["new_size_text"];
		} else if ($new_size == "no") {
			$target_dir = $exists_size;
		}

		// Defining the path to the upload
		$upload_dir = "../../data/instances/" . $instance_type . "/" . $target_dir."/";

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

 	header("LOCATION: ../../public/index.php");

?>