<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio6</title>
    <link rel="stylesheet" href="stylos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body class="ho">
    <div class="cajitas">
        <div class="dentro">
            <?php
            $nombt1 = $_POST["NombreTr1"];
            $salariobrutot1 = $_POST["Salariobr1"];
            $deduccionest1 = $_POST["deduc1"];
            $bonificacionest1 = $_POST["Boni1"];
            $nombt2 = $_POST["NombreTr2"];
            $salariobrutot2 = $_POST["Salariobr2"];
            $deduccionest2 = $_POST["deduc2"];
            $bonificacionest2 = $_POST["Boni2"];

            $nuevosal1 = $salariobrutot1 - $deduccionest1 + $bonificacionest1;
            $nuevosal2 = $salariobrutot2 - $deduccionest2 + $bonificacionest2;

            if ($nuevosal1 > $nuevosal2) {
                echo ("El que gana mas es: " . $nombt1 . "<br>");
            } else {
                echo ("El que gana mas es: " . $nombt2);
            }
            ?>
            <br>
            <a href="ejercicio6.html">Atras</a>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>