


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="background-color: <?php $color = $_POST['color']; echo $color ?> "
<?php
$name = $_POST['name'];
$color = $_POST['color'];
echo "<h1>hello $name<h1>";
?>

</body>
</html>
