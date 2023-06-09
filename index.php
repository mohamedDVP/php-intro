<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Studi</title>
</head>
<body>
    <h1>
        <?php echo "Hello Studi"; ?>
    </h1>
    <?php
    //constante 
        const SOFTWARE_VERSION = "1.0.0";
        // Le "=" est un opérateur d'affectation
        // Il fonctionne de droite à gauche
        $age = 38;
        // Le "." est un opérateur de concaténation
        // On pourra chainer l'affichage de plusieurs données à la suite
        echo 'J\'ai ' . $age . ' ans';
    ?>
    <br/>
    <?php
        echo "J'ai " . $age . " ans";
        $numero = 1;
        echo "<br/>" . $numero;
        $numero += 3; // Equivalent : $numero = $numero + 3;
        echo "<br/>" . $numero;
        $numero ++; //Equivalent : $numero +=1;
        echo "<br/>". $numero;
    ?>
    <footer>
        <p id="version">
            Version : 
            <?php
                echo SOFTWARE_VERSION;
            ?>
        </p>
    </footer>
</body>
</html>