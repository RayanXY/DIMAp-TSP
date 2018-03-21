<?php

	$file = $_GET["file"];

	header("Content-Length: " . filesize($file));
	header("Content-Type: application/octet-stream");
	header("Content-Disposition: attachment; filename=" . $file);

	readfile($file);

?>