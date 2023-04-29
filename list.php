<?php require_once 'data/users.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste d'utilisateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <!-- Conteneur général -->
    <div class="container">
        <!-- Elément conteneur de ma grille de cards -->
        <h1>Nombre d'utilisateurs : <?php echo count($users);?></h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
                foreach($users as $user)
                {
                //for($i = 0 ; $i < count($users) ; $i++)
                //{
                    require 'user_card.php';
                }
            ?>
        </div>
     <!-- Fin Elément conteneur de ma grille -->
    </div>
    <!-- Fin Conteneur général -->
</body>
</html>