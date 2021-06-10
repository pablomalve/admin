<?php

include_once "controllers/PlantillaController.php";
include_once "controllers/UsuariosController.php";
include_once "models/UsuariosModel.php";

$index = new PlantillaController();
$index -> GetPlantilla();

