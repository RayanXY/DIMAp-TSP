<?php

	function delete_dir($path){

		$files = array_diff (scandir ($path), array ('.', '..'));

		foreach ($files as $file) {
			(is_dir("$path/$file")) ? delete_dir("$path/$file") : unlink("$path/$file");
		}

		return rmdir($path);

	}

	if (isset($_POST["submit_remove"])) {

		$remove_dir = "../../data/instances/" . $_POST["instance_size"]."/";
		if(file_exists($remove_dir)){
			delete_dir($remove_dir);
		} else {
			echo "Não.";
		}

	}

	header("LOCATION: ../../public/index.php");

?>