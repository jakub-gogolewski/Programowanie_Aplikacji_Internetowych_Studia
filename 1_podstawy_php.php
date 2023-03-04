<html lang="pl" dir="ltr">

<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<meta charset="UTF-8">
    <style type>
        
        body{
            background-color: lightseagreen;
            color: snow;
            font-family: 'Roboto', sans-serif;
            font-size: 35px;
            text-shadow: 2px 2px 4px black;
        }
        </style>
    
    <title></title>
</head>
<body>
    <?php
    
        $firstName = "Janusz";
        $lastName = "Nowak";

        echo "Imię i nazwisko: $firstName $lastName<br>";
        echo 'Imię i nazwisko: $firstName $lastName<br>';

        //heredoc

        echo <<< DATA
            <hr>
            Imię: $firstName<br>
            Nazwisko: $lastName<br>
        DATA;

        $data = <<< DATA
        <hr>
        Imię: $firstName<br>
        Nazwisko: $lastName<br>
    DATA;

    echo $data;

    //nowdoc
    echo <<< 'DATA'
    <hr>
    Imię: $firstName<br>
    Nazwisko: $lastName<br>
DATA;

$bin = 0b1010;
echo "$bin \n"; //10

$oct = 0o10; //8
echo "$oct \n" ;

$hex = 0x1A; //26
echo "$hex \n" ;

    ?>
</body>
</html>