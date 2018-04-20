<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Customer 2</title>
</head>
<body>
<h1>Delete Customer 2</h1>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>address</th>
        <th>postal code</th>
        <th>city</th>
    </tr>

<?php
session_start();
$customerid = $_POST["customerid"];
$_SESSION['customerid'] = $customerid;

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

foreach ($sql as $customer) {
    echo
        "<tr>" .
        "<td>" . $customer['customerid']         . "</td>" .
        "<td>" . $customer['customername']       . "</td>" .
        "<td>" . $customer['customeraddress']    . "</td>" .
        "<td>" . $customer['customerpostalcode'] . "</td>" .
        "<td>" . $customer['customercity']       . "</td>" .
        "<tr>";
}
?>

</table>
<form action="gar-delete-customer-3.php" method="post">
    <label for="delete">Check the checkbox to confirm</label>
    <input type="checkbox" name="delete" id="delete">
    <input type="submit" value="Confirm Delete">
</form>
<a href="index.php">Back to menu</a>
</body>
</html>