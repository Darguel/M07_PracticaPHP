<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nombre = 'Kurt';
        $apellido = 'Cagle';
        $edad = 40;
        $cumpleaños = new DateTime();
        $cumpleaños -> setDate(1983, 5, 12);
        $telefono = array("654332211", "933332211");
        $postal = 'Carrer de turin, 15';
        $email = 'kurt.cagle@example.com';
        $trabaja = true;
        $altura = 1.67;
    ?>
    <div>
        <h1>
            Descrivint a <?php echo $nombre,' ',$apellido?>
        </h1>
        <h2>
            Les dades de <?php echo $nombre ?> son:
        </h2>
        <ul>
            <li>
                Es diu: <?php echo $nombre ?>
            </li>
            <li>
                Te <?php echo $edad ?> anys
            </li>
            <li>
                Va neixer l'any: <strong><?php echo date_format($cumpleaños, 'Y-m-d');?></strong>
            </li>
            <li>
                Els seus telèfons són: <?php echo $telefono[0] ?> - <?php echo $telefono[1] ?>
            </li>
            <li>
                Viu a: <?php echo $postal ?>
            </li>
            <li>
                El seu email és: <?php echo $email ?>
            </li>
            <li>
                Treballa: <?php if($trabaja) echo 'Si'; else echo 'No' ?>
            </li>
            <li>
                I medeix: <?php echo $altura ?>
            </li>
        </ul>
    </div>
</body>
</html>