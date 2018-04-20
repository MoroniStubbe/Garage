<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
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
?>

<form action="gar-update-customer-3.php" method="post">

<?php
foreach ($sql as $customer){
echo "
customerid:         <input type=\"hidden\" name=\"customerid\"         value=\"" . $customer['customerid']         . "\"><br>
customername:       <input type=\"text\"   name=\"customername\"       value=\"" . $customer['customername']       . "\"><br>
customeraddress:    <input type=\"text\"   name=\"customeraddress\"    value=\"" . $customer['customeraddress']    . "\"><br>
customerpostalcode: <input type=\"text\"   name=\"customerpostalcode\" value=\"" . $customer['customerpostalcode'] . "\"><br>
customercity:       <input type=\"text\"   name=\"customercity\"       value=\"" . $customer['customercity']       . "\"><br>
<input type=\"submit\">
";
}
?>

</form>
</body>
</html>