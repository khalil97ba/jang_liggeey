<!DOCTYPE html>
<html>
<head>
    <title>Détermination de la Mention</title>
    <!-- Inclusion des styles de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <?php
            // Définir la variable moyenne
            $moyenne = 10; // Remplacez cette valeur par la moyenne réelle de l'élève

            // Définir les variables décision et mention
            $decision = ($moyenne >= 10) ? "Admis" : "Éliminé";

            if ($moyenne >= 17) {
                $mention = "Excellent";
                $mention = "<span class='text-primary' >Excellent</span>" ;
            } elseif ($moyenne >= 16) {
                $mention = "Très Bien";
                $mention ="<span class = 'text-info'>Très Bien</span>" ;
            } elseif ($moyenne >= 14) {
                $mention = "Bien";
                $mention = "<span class = 'text-success'>Bien </span>";
            } elseif ($moyenne >= 12) {
                $mention = "Assez Bien";
                $mention = "<span class= 'text-warning' >Assez Bien</span>";
            } else {
                $mention = "Passable";
                $mention = "<span class='text-danger'>Passable</span> ";
            }
        ?>

        <!-- Affichage de la décision -->
        <h4>Décision: <?php echo $decision; ?></h4>

        <!-- Affichage de la mention avec une classe de couleur Bootstrap -->
        <h4 class="<?php echo $mention; ?>">Mention: <span style="font-size: 14px;"><?php echo $mention; ?></span></h4>
    </div>

    <!-- Inclusion des scripts de Bootstrap (facultatif si vous n'utilisez pas de composants interactifs) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
