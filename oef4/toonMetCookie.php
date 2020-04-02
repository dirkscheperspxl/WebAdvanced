

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="background-color: <?php print($_COOKIE['kleur']) ?>">
<?php
$name = $_POST['name'];
print($_COOKIE['kleur']);
echo "<h1>hello $name<h1>";
?>

</body>
</html>
