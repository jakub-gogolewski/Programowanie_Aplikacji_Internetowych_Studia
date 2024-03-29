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
<h4>Użytkownicy</h4>
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
    $sql = "SELECT `u`.`firstname` as `firstname`, `u`.`lastname`, `u`.`birthday`, `c`.`city`, `s`.`state`, `co`.`country` FROM `users` u JOIN `cities` c ON `u`.`city_id`=`c`.`id` JOIN `states` s ON `c`.`state_id`=`s`.`id` JOIN `countries` co ON `s`.`country_id`=`co`.`id`;";
        $result = $conn->query($sql);
        // $user = $result->fetch_assoc();
        // echo $user["firstname"];
        
        while($user = $result->fetch_assoc()){
           
            echo <<< TABLEUSERS
            
            <tr>
                <td>$user[firstname]</td>
                <td>$user[lastname]</td>
                <td>$user[birthday]</td>
                <td>$user[city]</td>
                <td>$user[state]</td>
                <td>$user[country]</td>
            </tr>

            TABLEUSERS;
        }
        echo "</table>";

$conn->close();


    ?>

</body>
</html>

