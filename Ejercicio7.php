<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>
    <link rel="stylesheet" href="stylos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body class="ho">
    <div class="cajitas">
        <div class="dentro">
            <?php
            $placab1 = $_POST["PlacaNro1"];
            $pasengers1 = $_POST["CantPasajeros1"];
            $valorpasaje = $_POST["ValorPasaje"];
            $placab2 = $_POST["PlacaNro2"];
            $pasengers2 = $_POST["CantPasajeros2"];

            $plata1 = $pasengers1 * $valorpasaje;
            $plata2 = $pasengers2 * $valorpasaje;

            if ($plata1 > $plata2) {
                echo "el que mas vendio fue: " . $placab1 . "el dinero fue de: " . $plata1 . "<br>";
            } else {
                echo "el que mas vendio fue: " . $placab2 . "el dinero fue de: " . $plata2;
            }
            ?>
            <br>
            <a href="ejercicio7.html">Atras</a>
        </div>
    </div>

    
   


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>