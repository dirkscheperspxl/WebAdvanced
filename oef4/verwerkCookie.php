<?php
setcookie('kleurcode',$_POST['color'], time()+60*60);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form>
De geselecteerde kleur is <?php echo $_COOKIE['kleurcode']?>
<form action="toonMetCookie.php" method="post">
    <input type="hidden" name="name" value="<?php print($_POST['name']) ?>">
    <input type="hidden" name="color" value="<?php print($_POST['color']) ?>">
    <input type="submit">

</form>
</body>
</html>