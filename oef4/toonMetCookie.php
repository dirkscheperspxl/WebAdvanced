
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toon mbv Cookie</title>
</head>
<body style="background-color: <?php echo "$_COOKIE('kleurcode')" ?>">
<?php
$name = $_POST['name'];
$selectedColor = $_COOKIE['kleurcode'];
echo "<h1>hello $name<h1>";
echo "<h2>you choose $selectedColor</h2>"
?>

</body>
</html>
