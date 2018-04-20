<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Customer 2</title>
</head>
<body>
<h1>Create Customer 2</h1>
<?php
$customerid          = NULL;
$customername        = $_POST["customername"];
$customeraddress     = $_POST["customeraddress"];
$customerpostalcode  = $_POST["customerpostalcode"];
$customercity        = $_POST["customercity"];

require_once "gar-connect.php";

$sql = $pdo->prepare("insert into customer values(
:customerid, :customername, :customeraddress, :customerpostalcode, :customercity)");

$sql->execute([
    "customerid"         => $customerid,
    "customername"       => $customername,
    "customeraddress"    => $customeraddress,
    "customerpostalcode" => $customerpostalcode,
    "customercity"       => $customercity
]);
?>
<p>Successfully created customer</p>
<a href="index.php">Back to menu</a>
</body>
</html>