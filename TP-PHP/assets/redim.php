<?php

    // Le fichier
    $img = (int)$_GET['img'];
    $filename = 'assets/images/'.$img.'.jpg';

    // Définition de la largeur et de la hauteur maximale
    $largeur = 200;

    // Content type
    header('Content-Type: image/jpeg');

    // Cacul des nouvelles dimensions
    list($largeur_orig, $hauteur_orig) = getimagesize($filename);
    $ratio = $largeur_orig/$largeur;
    $hauteur = $hauteur_orig/$ratio;

    // Redimensionnement
    $image_p = imagecreatetruecolor($largeur, $hauteur);
    $image = imagecreatefromjpeg($filename);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $largeur, $hauteur, $largeur_orig, $hauteur_orig);

    // Affichage
    imagejpeg($image_p, null, 200);

?>