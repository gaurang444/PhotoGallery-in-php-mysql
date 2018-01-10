<!DOCTYPE html>
<html>
<head>
	<title>View Upload</title>
</head>
<body>
<?php
$folder = "uploads";
if (is_dir($folder)) {
	$handler = opendir($folder);
	$output  = "";
	while ($files = readdir($handler)) {
		if (!is_dir($files)) {
			$output .= "<img src=\"uploads/{files}\"width='180' height='180'>";

		}

	}

}
echo $output;

?>
</body>
</html>