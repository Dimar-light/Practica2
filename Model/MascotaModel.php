<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/Model/UtilitarioModel.php';

function RegistrarClienteModel($cedula, $nombre, $correo)
{
    try {
        $conn = OpenDB();
        $sql = "CALL spRegistrarCliente('$cedula', '$nombre', '$correo')";
        $response = $conn->query($sql);
        CloseDB($conn);
        return $response;
    } catch(Exception $e) {
        AddError($e, 'RegistrarClienteModel', 0);
        return false;
    }
}

function RegistrarMascotaModel($nombre, $especie, $raza, $peso, $cedula)
{
    try {
        $conn = OpenDB();
        $sql = "CALL spRegistrarMascota('$nombre', '$especie', '$raza', $peso, '$cedula')";
        $response = $conn->query($sql);
        CloseDB($conn);
        return $response;
    } catch(Exception $e) {
        AddError($e, 'RegistrarMascotaModel', 0);
        return false;
    }
}

function ConsultarMascotasModel()
{
    try {
        $conn = OpenDB();
        $sql = "CALL spConsultarMascotas()";
        $response = $conn->query($sql);

        $datos = array();
        while($fila = $response->fetch_assoc()) {
            $datos[] = $fila;
        }

        CloseDB($conn);
        return $datos;
    } catch(Exception $e) {
        AddError($e, 'ConsultarMascotasModel', 0);
        return null;
    }
}