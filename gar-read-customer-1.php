<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read Customer</title>
</head>
<body>
<h1>Read Customer</h1>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>address</th>
        <th>postal code</th>
        <th>city</th>
    </tr>
    <?php
    require_once "gar-connect.php";
    $sql = $pdo->prepare("
select  customerid,
        customername,
        customeraddress,
        customerpostalcode,
        customercity
from    customer;");
$sql->execute();
foreach ($sql as $customer) {
    echo
        "<tr>" .
        "<td>" . $customer['customerid']          . "</td>" .
        "<td>" . $customer['customername']        . "</td>" .
        "<td>" . $customer['customeraddress']     . "</td>" .
        "<td>" . $customer['customerpostalcode']  . "</td>" .
        "<td>" . $customer['customercity']        . "</td>" .
        "<tr>";
    }
    ?>
</table>
<a href="index.php">Back to menu</a>
</body>
</html>