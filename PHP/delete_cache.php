<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
// https://stackoverflow.com/questions/1037249/how-to-clear-browser-cache-with-php
?>


<html>
<head>
</head>
<body>
<h2>Your cache should be cleared</h2>
</body>
</html>
