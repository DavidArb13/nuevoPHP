<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body class="ho">
    <div class="cajitas">
        <div class="dentro">
            <?php

            $N1 = $_POST["Numero1"];
            $N2 = $_POST["Numero2"];

            $suma = null;
            $multiplicacion = null;
            $division = null;
            $resta = null;

            if ($N2 != null || $N1 != null) {
                $resta = $N1 - $N2;
                $multiplicacion = $N1 * $N2;
                $suma = $N1 + $N2;
            } else {
                echo "Ingrese valores";
            }

            if ($N2 != 0 && $N1 != null || $N2 != null) {
                $division = $N1 / $N2;
            } else {
                echo "<br> Ingrese un numero diferente de cero en Numero 2";
            }
            ?>
            <div class="text-center"> <?php echo ("<br> Suma: " . $suma . "<br>");
                                        echo ("resta: " . $resta . "<br>");
                                        echo ("multiplicación: " . $multiplicacion . "<br>");
                                        echo ("division: " . $division); ?>
            </div>
            <br>
            <a href="ejercicio2.html">Atras</a>
        </div>

    </div>
   
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>