<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Customer 3</title>
</head>
<body>
<h1>Create Customer 3</h1>
<p>Successfully updated customer</p>
<a href="index.php">Back to menu</a>
</body>
</html>

<?php
$customerid          = $_POST["customerid"];
$customername        = $_POST["customername"];
$customeraddress     = $_POST["customeraddress"];
$customerpostalcode  = $_POST["customerpostalcode"];
$customercity        = $_POST["customercity"];

require_once "gar-connect.php";

$sql = $pdo->prepare("
update customer
set customername       = :customername,
    customeraddress    = :customeraddress,
    customerpostalcode = :customerpostalcode,
    customercity       = :customercity
where customerid = :customerid
");

$sql->execute([
    "customerid"         => $customerid,
    "customername"       => $customername,
    "customeraddress"    => $customeraddress,
    "customerpostalcode" => $customerpostalcode,
    "customercity"       => $customercity
]);
?>