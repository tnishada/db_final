<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Result</title>
</head>

<body>

<?php

require 'connector.php';

if(isset($_POST['requested_date'])){
$date = $_POST["requested_date"];

print_r (explode("-",$date));

}

?>
</body>
</html>