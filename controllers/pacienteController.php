<?php

require_once("./models/paciente.php");

class PacienteController
{

    public $paciente;

    public function __construct()
    {
        $this->paciente = new Paciente();
    }

    public function listar()
    {
        $pacientes = $this->paciente->listar();
        include 'views/listado.php';
    }

    public function inicio()
    {
        include 'views/inicio.php';
    }

    public function agregar()
    {
        include 'views/agregar.php';
    }

    public function agregarPaciente($pacienteNuevo)
    {
      $this->paciente->agregar($pacienteNuevo);
      $pacientes = $this->paciente->listar();
      include 'views/listado.php';
    }

    public function eliminar($rut)
    {
        $this->paciente->eliminar($rut);
        $pacientes = $this->paciente->listar();
        include 'views/listado.php';
    }

    public function editar($rut)
    {
        $paciente = $this->paciente->buscar($rut);
        include 'views/editar.php';
    }

    public function editarPaciente($paciente)
    {
      $this->paciente->editar($paciente);
      $pacientes = $this->paciente->listar();
      include 'views/listado.php';
    }

    public function buscar()
    {   $paciente = null;
        include 'views/buscar.php';
    }

    public function buscarApellido($apellido)
    {
        $paciente = $this->paciente->buscarApellido($apellido);
        include 'views/buscar.php';
    }

}
