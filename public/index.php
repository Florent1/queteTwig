<?php
require '../vendor/autoload.php';

$products = ['montre connectée', 'appareil photo', 'lecteur mp4', 'pc portable', 'télévision', 'pc de bureau'];


$loader = new Twig\Loader\FilesystemLoader('/home/florent/PhpstormProjects/quete_twig/src/View/');


$twig = new Twig\Environment($loader, [
    'cache' => false
]);
echo $twig->render('index.html.twig', ['products'=> $products]);

