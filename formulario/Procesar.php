<?php

$enlace= mysqli_connect('localhost', 'root', 'mysql2017', 'catastral', 3306);

$cadena="INSERT INTO `catastral`.`estudiante`
(`nombre`,
`edad`,
`codigo-estudiante`)
VALUES
('".$_REQUEST['nombre']."',".$_REQUEST['edad'].",".$_REQUEST['codigoestudiante'].")";

mysqli_query($enlace, $cadena);

