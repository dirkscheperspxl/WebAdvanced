<?php
var_dump($_POST['getallen']);
print('<br>');

$result = array_values($_POST['getallen']);
$wrongValues = array();
$intValues=array();
foreach ($result as $getal) {
    if (!is_numeric($getal)) {
        $wrongValues[]=$getal;
    }
    else {
        $intValues[]=$getal;
    }
}
echo "Minimum value: ". min($intValues);
print('<br>');
print ("Maximum value: ".  max($intValues));
print('<br>');
var_dump($wrongValues);
?>