<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
ob_start();
echo "Some String";
$var = ob_get_clean();
 ?>
</body>
</html>