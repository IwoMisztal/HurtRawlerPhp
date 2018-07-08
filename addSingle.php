<?php
require_once('db.php');
$link = $_POST["link"];
$sql = "INSERT INTO Entries (Link) Values ('$link')";

if ($con->query($sql) === TRUE) {
    echo "success";
header('Location: http://localhost/HurtRawlerPhp');

}
?>