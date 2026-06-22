<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/Model/MascotaModel.php';

if(isset($_POST["btnRegistrarCliente"]))
{
    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    $datos = RegistrarClienteModel($cedula, $nombre, $correo);

    if($datos) {
        $_POST["MensajeExito"] = "Cliente registrado con éxito.";
    } else {
        $_POST["MensajeError"] = "No se ha podido registrar el cliente.";
    }
}

if(isset($_POST["btnRegistrarMascota"]))
{
    $nombre = $_POST["nombre"];
    $especie = $_POST["especie"];
    $raza = $_POST["raza"];
    $peso = $_POST["peso"];
    $cedula = $_POST["cedula"]; 

    $datos = RegistrarMascotaModel($nombre, $especie, $raza, $peso, $cedula);

    if($datos) {
        $_POST["MensajeExito"] = "Mascota registrada con éxito.";
    } else {
        $_POST["MensajeError"] = "Error: Verifique si la cédula del cliente existe.";
    }
}