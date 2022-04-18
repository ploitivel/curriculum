<?php

if(isset($_GET['paginas'])){//si existe la variable $_GET['paginas']
    $pagina = $_GET['paginas'];//que $pagina tome ese valor
}else{//si no
    $pagina = "";//que $seccio tome el valor por defecto
} 

//Agregar archivo de configuracion dependiendo del tipo de puesto 

if(
    $pagina == "cv-sistemas" || 
    $pagina == "cv-developer" || 
    $pagina == "cv-hacking" 
    //Agrega mas directorios con el nombre del archivo
){
    require_once "oficios/".$pagina.".cfg.php";
}else{
    require_once "oficios/cv-sistemas.cfg.php";
}

//Agregar archivo de configuracion de los datos basicos del usuario
require_once "datospersonales.cfg.php";

//Agregar la plantilla del curriculum
require_once "plantilla/curriculum.php";