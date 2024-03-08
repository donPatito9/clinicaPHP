<?php

require("controllers/pacienteController.php");

$pacienteController= new PacienteController();

$validacion = (isset($_GET['op']) && !empty($_GET['op']));

if(!$validacion){
    $pacienteController->inicio();
}else{

    $op=$_GET["op"];

    if($op=="listar"){
        $pacienteController->listar();
    }

    if($op=="agregar"){
        $pacienteController->agregar();
    }

    if($op=="agregarPaciente"){
        $rut = $_POST['txtRut'];
        $nombre = $_POST['txtNombre'];
        $apellido = $_POST['txtApellido'];
        $direccion = $_POST['txtDireccion'];
        $ciudad = $_POST['txtCiudad'];
        $telefono = $_POST['txtTelefono'];
        
        $pacienteNuevo = new Paciente();
        
        $pacienteNuevo->setRut($rut);
        $pacienteNuevo->setNombre($nombre); 
        $pacienteNuevo->setApellido($apellido);   
        $pacienteNuevo->setDireccion($direccion);   
        $pacienteNuevo->setCiudad($ciudad);   
        $pacienteNuevo->setTelefono($telefono);  


        $pacienteController->agregarPaciente($pacienteNuevo);
    }

    if($op=="inicio"){
        $pacienteController->inicio();
    }

    if($op=="eliminar"){
        $rut = $_GET['rut'];
        $pacienteController->eliminar($rut);
    }

    if($op=="editar"){
        $rut = $_GET['rut'];
        $pacienteController->editar($rut);
    }

    if($op=="editarPaciente"){
        $rut = $_POST['rutEditar'];
        $nombre = $_POST['txtNombre'];
        $apellido = $_POST['txtApellido'];
        $direccion = $_POST['txtDireccion'];
        $ciudad = $_POST['txtCiudad'];
        $telefono = $_POST['txtTelefono'];
        
        $paciente = new Paciente();
        
        $paciente->setRut($rut);
        $paciente->setNombre($nombre); 
        $paciente->setApellido($apellido);   
        $paciente->setDireccion($direccion);   
        $paciente->setCiudad($ciudad);   
        $paciente->setTelefono($telefono);  


        $pacienteController->editarPaciente($paciente);
    }

    if($op=="buscarApellido"){
        $pacienteController->buscar();
    }

    if($op=="busquedaApellidoImpl"){
        $apellido = $_POST['txtApellido'];
        $pacienteController->buscarApellido($apellido);
    }
}





?>