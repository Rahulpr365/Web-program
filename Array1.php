<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Indexed Array</title>
</head>
<body style="display: flex; justify-content: center; align-items: center;">
<center>
<fieldset>
<h2>Student Names</h2>
<?php
$stud=array("Ayyoob","Favaz","Nasik","Alfi","Irfan");
echo '<ol>';
foreach ($stud as $a) {
    echo '<li>' . $a . '</li>';
}
echo '</ol>';
?>
</center>
</fieldset>
</body>
</html>
