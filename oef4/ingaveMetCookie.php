<?php
$kleurcode=$_POST['color'];
if (!empty($kleurcode)) {
    setcookie('kleur',$kleurcode, time() + 24 * 60 * 60);
}
else {
    setcookie('kleur', '#bbb000', time() + 24 * 60 * 60);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="toonMetCookie.php" method="post">
    <input type="text" name="name">
    <input type="color" name="color">
    <input type="submit">
</form>
</body>
</html>

