<!DOCTYPE html>
<html lang="pl">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<style type>
        
        body{
            background-color: lightseagreen;
            color: snow;
            font-family: 'Roboto', sans-serif;
            font-size: 35px;
            text-shadow: 2px 2px 4px black;
        }
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h4>Użytkownicy z bazy</h4>
<?php

        require_once "../scripts/connect.php";
        $sql = "SELECT * FROM `users`;";
        $result = $conn->query($sql);
        // $user = $result->fetch_assoc();
        // echo $user["firstname"];
        
        while($user = $result->fetch_assoc()){
           
            echo <<< USER
            
            Imie i nazwisko: $user[firstname] $user[lastname]<br>
            Data urodzenia: $user[birthday]<br><br>

            USER;
        }
        
$conn->close();

?>
    
</body>
</html>