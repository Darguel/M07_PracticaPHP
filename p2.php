<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practica 2</title>
    </head>
    <body>

        <!-- Parte individual -->
        <div>
            <ul>
                <?php
                // Creamos un array con valores aleatorios en todas la posiciones
                $mesas = array();
                for ($x = 0; $x <= 9; $x++) {
                    $comensales = rand(0, 5);
                    array_push($mesas, $comensales);
                }
                // Con un bucle imprimiremos cada una de las mesas y cons los IF's
                // comprobamos que el echo sera el que deseamos
                for ($x = 0; $x <= 9; $x++) {
                ?>

                    <li>
                        <?php
                        if ($mesas[$x] == 0) {
                            echo "La taula " . ($x + 1) . " està buida";
                        } else if ($mesas[$x] == 5) {
                            echo "La taula " . ($x + 1) . " està plena";
                        } else {
                            echo "La taula " . ($x + 1) . " té " . $mesas[$x] . " comensals";
                        }
                        ?>
                    </li>

                <?php
                }
                ?>
            </ul>
        </div>

        <!-- Parte Grupal (con Harpreet) -->
        <?php
            // declaracion de la array hotel con planta y habitaciones
            $hotel = array();
            for ($i = 0; $i <= 4; $i++) {
                for ($j = 0; $j <= 9; $j++) {
                    $randomNum = rand(0, 4);
                    array_push($hotel, $randomNum);
                }
            }
        ?>

        <div>
            <?php
            // imprimir todo por partes
            for ($i = 0; $i <= 4; $i++) {
                for ($j = 0; $j <= 9; $j++) {
            ?>
                <ul>
                    <li>
                        <?php
                        if ($hotel[$j] == 0) {
                            echo "A l'habitació " . $j . " de la planta " . $i . " está buida";
                        } elseif ($hotel[$j] == 4) {
                            echo "A l'habitació " . $j . " de la planta " . $i . " está plena";
                        } else {
                            echo "A l'habitació " . $j . " de la planta " . $i . " té " . $hotel[$j] . " persones";
                        }
                        ?>
                    </li>
                </ul>
            <?php 
                    }
                }
            ?>
        </div>
    </body>
</html>