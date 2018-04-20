<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Customer 3</title>
</head>
<body>
<h1>Delete Customer 3</h1>
<?php
session_start();
$customerid = $_SESSION['customerid'];
session_destroy();
if(isset($_POST['delete'])){
    require_once "gar-connect.php";

    $sql = $pdo->prepare("
    delete
    from customer
    where customerid = :customerid
    ");
    $sql->execute(["customerid" => $customerid]);

    echo "Successfully deleted customer with id " . $customerid . "<br>";
}
else{
    echo "You cancelled the deleting operation, no data has been changed";
}
?>
<a href="index.php">Back to menu</a>
</body>
</html>