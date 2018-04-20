<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Customer 2</title>
</head>
<body>
<h1>Search Customer 2</h1>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>address</th>
        <th>postal code</th>
        <th>city</th>
    </tr>

<?php
$customerid = $_POST["customerid"];

require_once "gar-connect.php";
$sql = $pdo->prepare("
select  customerid,
        customername,
        customeraddress,
        customerpostalcode,
        customercity
from    customer
where   customerid = :customerid");
$sql->execute(["customerid" => $customerid]);
foreach ($sql as $row) {
    echo
        "<tr>" .
        "<td>" . $row['customerid']          . "</td>" .
        "<td>" . $row['customername']        . "</td>" .
        "<td>" . $row['customeraddress']     . "</td>" .
        "<td>" . $row['customerpostalcode']  . "</td>" .
        "<td>" . $row['customercity']        . "</td>" .
        "<tr>";
}
?>

</table>
<a href="index.php">Back to menu</a>
</body>
</html>