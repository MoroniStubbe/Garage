<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Car 2</title>
</head>
<body>
<h1>Delete Car 2</h1>
<table>
    <tr>
        <th>numberplate</th>
        <th>brand</th>
        <th>type</th>
        <th>mileage</th>
        <th>customerid</th>
    </tr>

<?php
session_start();
$numberplate = $_POST["numberplate"];
$_SESSION['numberplate'] = $numberplate;

require_once "gar-connect.php";
$sql = $pdo->prepare("
select  carnumberplate,
        carbrand,
        cartype,
        carmileage,
        customerid
from    car
where   carnumberplate = :carnumberplate");
$sql->execute(["carnumberplate" => $carnumberplate]);

foreach ($sql as $customer) {
    echo
        "<tr>" .
        "<td>" . $customer['carnumberplate'] . "</td>" .
        "<td>" . $customer['carbrand']       . "</td>" .
        "<td>" . $customer['cartype']        . "</td>" .
        "<td>" . $customer['carmileage']     . "</td>" .
        "<td>" . $customer['customerid']     . "</td>" .
        "<tr>";
}
?>

</table>
<form action="gar-delete-car-3.php" method="post">
    <label for="delete">Check the checkbox to confirm</label>
    <input type="checkbox" name="delete" id="delete">
    <input type="submit" value="Confirm Delete">
</form>
<a href="index.php">Back to menu</a>
</body>
</html>