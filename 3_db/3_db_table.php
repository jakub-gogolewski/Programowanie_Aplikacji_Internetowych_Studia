<!DOCTYPE html>
<html lang="pl">
<head>

    <link rel=stylesheet type=text/css href=../css/table.css>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>

</head>

<body>
<div style="text-align: center;"><h1>Użytkownicy</h1></div>

<?php

if(isset($_GET["userDelete"])){
if($_GET["userDelete"]==0){
    echo "<h4>Nie usunięto użytkownika</h4>";
}else{
    echo "<h4>Usunięto użytkownika o ID=$_GET[userDelete]!</h4>";
}}

?>
        <table>

        <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            <th>Miasto</th>
            <th>Województwo</th>
            <th>Państwo</th>
        </tr>


    <?php

        
        require_once "../scripts/connect.php";
        $sql = "SELECT u.id as userId, `u`.`firstname` as `firstname`, `u`.`lastname`, `u`.`birthday`, `c`.`city`, `s`.`state`, `co`.`country` FROM `users` u JOIN `cities` c ON `u`.`city_id`=`c`.`id` JOIN `states` s ON `c`.`state_id`=`s`.`id` JOIN `countries` co ON `s`.`country_id`=`co`.`id`;";
        $result = $conn->query($sql);

        //echo $result->num_rows;
        // $user = $result->fetch_assoc();
        // echo $user["firstname"];
        if ($result->num_rows == 0){
            echo "<h4>LUDZIE TU NIKOGO NIE MA</h4>";
            echo "<tr><td colspan='6'>Brak użytkowników</td></tr>";
        }else{
            while($user = $result->fetch_assoc()){

                echo <<< TABLEUSERS
            
            <tr>
                <td>$user[firstname]</td>
                <td>$user[lastname]</td>
                <td>$user[birthday]</td>
                <td>$user[city]</td>
                <td>$user[state]</td>
                <td>$user[country]</td>
                <td><a href="../scripts/delete_user.php?userIdDelete=$user[userId]">Usuń</a></td>
            </tr>

            TABLEUSERS;
            }
        }

        echo "</table>";

$conn->close();


    ?>

</body>
</html>

