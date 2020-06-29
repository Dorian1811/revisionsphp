<?php

// Inclusion des dépendances ( pour avoir accès à la fonction dump() )
require '../vendor/autoload.php';

/*
Exercice : Créer une fonction getGoogleLogo() qui téléchargera le logo à l'adresse suivante : " https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png " et le rangera dans un sous dossier "logos/" sous le nom "logo_google.png" (dossier qui devra être créé par la fonction si ce dernier n'existe pas).
*/

// Fonction à créer ici
//-------------------------------------------------------------------------

function getGoogleLogo()
{

    /*$logo = mkdir("/laragon/www/revisionsphp/logo/", 0700);*/
            
    define('TARGET', 'laragon/www/revisionsphp/logo');

    $url = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';

    $fichier = $_SERVER['DOCUMENT_ROOT'].'/revisionsphp/logo/logo_google.png';

    copy($url, $fichier);

}


//-------------------------------------------------------------------------


// Ne doit rien afficher à l'écran, par contre doit avoir créé le sous dossier "logos" s'il n'existe pas déjà, avec un fichier "logo_google.png" à l'intérieure
getGoogleLogo();