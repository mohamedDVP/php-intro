<?php 
require_once 'data/users.php';
$title = 'Liste des utilisateurs';
require_once 'layout/header.php';
?>

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

<?php  require_once 'layout/footer.php';?>