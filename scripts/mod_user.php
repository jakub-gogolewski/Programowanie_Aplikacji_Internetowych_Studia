<?php

//print_r($_POST);

//if (!empty($_POST["firstname"])){
//    echo "ok";
//}else{
//    echo "error";
//}
session_start();
foreach ($_POST as $key => $value){

    if (empty($value)){
        //echo "$key<br/>";
        echo "error";
        echo "<script>history.back();</script>";
        exit();
    }
}

//echo "ok";

require_once "./connect.php";
// $sql = "UPDATE `users` (`id`, `city_id`, `firstname`, `lastname`, `birthday`) VALUES (NULL, '$_POST[city_id]', '$_POST[firstname]', '$_POST[lastname]', '$_POST[birthday]');";
// $conn->query($sql);

$sql = "UPDATE `users` SET `city_id` = '$_POST[city_id]', `firstname` = '$_POST[firstname]', `lastname` = '$_POST[lastname]' WHERE `users`.`id` = '$_SESSION[userIdUpdate]';";
$conn->query($sql);

if ($conn->affected_rows ==0){
    $_SESSION["error"] = "nie zaktualizowano rekodu!";
}else{
    $_SESSION["error"] = "Zaktualizowano rekod!";
}

header("location: ../3_db/5_db_table_add_update.php");

?>