<?php

	$file = $_GET["file"];

	header("Content-Type: application/octet-stream");
	header("Content-Transfer-Enconding: Binary");
	header("Content-disposition: attachment; filename=\"" . basename($file) . "\"");
	readfile($file);

?>