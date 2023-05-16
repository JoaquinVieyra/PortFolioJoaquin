<?php

DEFINE('TEMPLATES_URL', __DIR__ . '/templates/');
DEFINE('FUNCIONES_URL', __DIR__ . 'funciones.php');
DEFINE ('CARPETA_IMAGENES', __DIR__. '/../public/build/img/');

function incluirTemplate($nombre, $inicio = false)
{
    include TEMPLATES_URL . "$nombre.php";
}