<?php
//echo date('Y-m-d H:i:s');
//echo('<br>');
//readfile('content.html');

$conn = mysqli_connect('localhost', 'root', '', 'test') or die ("error");

$sql = "INSERT INTO `ajaxdata` ( `firstName`, `lastName`, `age`) VALUES ( '" . $_POST["firstName"] . "', 'Default', '50');";
if(mysqli_query($conn, $sql)) {
    echo 'success<br>';
} else {
    echo 'failed<br>';
}

echo $_POST["firstName"] . ' post recvd <br>';

$arrlength = count($_POST);
echo 'Items received: ' . $arrlength . '<br>';
echo '<ol>';
foreach($_POST as $x => $x_value) {
    echo "<li>" . "Key=" . $x . ", Value=" . $x_value . "</li>";
}
echo '</ol>';
?>