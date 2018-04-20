<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Car 2</title>
</head>
<body>
<h1>Create Car 2</h1>
<?php
$carbrand       = $_POST["carbrand"];
$carmileage     = $_POST["carmileage"];
$carnumberplate = $_POST["carnumberplate"];
$cartype        = $_POST["cartype"];
$customerid     = $_POST["customerid"];

require_once "gar-connect.php";

$sql = $pdo->prepare("insert into car values(
:carbrand, :carmileage, :carnumberplate, :cartype, :customerid)");

$sql->execute([
    "carbrand"       => $carbrand,
    "carmileage"     => $carmileage,
    "carnumberplate" => $carnumberplate,
    "cartype"        => $cartype,
    "customerid"     => $customerid
]);
?>
<p>Successfully created car</p>
<a href="index.php">Back to menu</a>
</body>
</html>