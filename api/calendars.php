<?php
header('content-type: application/json; charset=utf-8');
include('../includes/dbTools.php');
include('../classes/calendarControl.php');
$db = new Database();
$db->connect();
$db->select('cal_Calendars','calendarID,calendarTitle,calendarDescription');
$res = $db->getResult();
print_r($res);
echo json_encode($res, JSON_PRETTY_PRINT);