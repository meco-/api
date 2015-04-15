<?php
header('content-type: application/json; charset=utf-8');
include('../includes/dbTools.php');
include('../classes/userControl.php');
$db = new Database();
$db->connect();
$db->select('cal_Users','userName,userLastName,userEmail'); // Table name, Column Names, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
print_r($res);
echo json_encode($res, JSON_PRETTY_PRINT);

