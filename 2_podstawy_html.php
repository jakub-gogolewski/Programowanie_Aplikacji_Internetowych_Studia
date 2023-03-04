<!DOCTYPE html>
<html lang="pl">
<head>
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
    
<ul>
    <li>Poznań</li>
    <li>Gniezno</li>
    <li>Jarocin</li>
</ul>

    <?php
    $city = "Września";
    echo <<< LIST
        <ul>
        <li>Poznań</li>
        <li>Gniezno</li>
        <li>Jarocin</li>
        <li>$city</li>
        </ul>
    LIST;

    ?>

    <h3>ZAWARTOŚĆ SKRYPTU </h3>

    <?php

        //include, include_once, require, require_once
        //include "./scripts/script1.php";
        @include "./scripts/script1.php";
        include_once "./scripts/script.php";

        //require "./scripts/script1.php";

        echo "Zawartość po skrypcie";

    ?>

</body>
</html>