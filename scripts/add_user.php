<?php

//print_r($_POST);

//if (!empty($_POST["firstname"])){
//    echo "ok";
//}else{
//    echo "error";
//}

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
$sql = "INSERT INTO `users` (`id`, `city_id`, `firstname`, `lastname`, `birthday`) VALUES (NULL, '$_POST[city_id]', '$_POST[firstname]', '$_POST[lastname]', '$_POST[birthday]');";
$conn->query($sql);


header("location: ../3_db/5_db_table_add_update.php");

?>