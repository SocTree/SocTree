<?php 
extract($_REQUEST);
$sql = "UPDATE `tbl_events` SET `eve_estat` = 'actiu' WHERE `tbl_events`.`eve_name` = $eve_name;";
?>