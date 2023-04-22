<?php

//print_r($_GET);
//var_dump($_GET)

require_once "./connect.php";
$sql = "DELETE FROM users WHERE `users`.`id` = $_GET[userIdDelete];";
$conn->query($sql);
//echo $conn->affected_rows;

if ($conn->affected_rows == 0){
    header("location: ../3_db/5_db_table_add_update.php?userDelete=$_GET[userIdDelete]");
}else{
    header("location: ../3_db/5_db_table_add_update.php?userDelete=$_GET[userIdDelete]");
}

?>
