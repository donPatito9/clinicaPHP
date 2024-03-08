<?php
require_once("db.php");

class Paciente {

    //Declaración de Atributos
    private $rut;
    private $nombre;
    private $apellido;  
    private $direccion;  
    private $ciudad; 
    private $telefono;
   
    //Declaración de constructor

    public function __construct(){

    }

    //Declaración de accesadores y mutadores
    public function getRut(){
        return  $this->rut;
    }

    public function setRut($rut){
        $this->rut = $rut;
    }

    public function getNombre(){
        return  $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellido(){
        return  $this->apellido;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function getDireccion(){
        return  $this->direccion;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function getCiudad(){
        return  $this->ciudad;
    }

    public function setCiudad($ciudad){
        $this->ciudad = $ciudad;
    }

    public function getTelefono(){
        return  $this->telefono;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    

    //método de Mantenedor
    public function agregar($paciente){

        $rut= $paciente->getRut();
        $nombre= $paciente->getNombre(); 
        $apellido= $paciente->getApellido();   
        $direccion= $paciente->getDireccion();   
        $ciudad= $paciente->getCiudad();   
        $telefono=$paciente->getTelefono();

        $db= new DB();
        $stmt =  $db->getConexion()->prepare("INSERT INTO paciente (rut, nombre, apellido, direccion, ciudad, telefono) VALUES (?,?,?,?,?,?)");
        $stmt->bindParam(1,  $rut);
        $stmt->bindParam(2,  $nombre);
        $stmt->bindParam(3,  $apellido);
        $stmt->bindParam(4,  $direccion);
        $stmt->bindParam(5,  $ciudad);
        $stmt->bindParam(6,  $telefono);

        $stmt->execute();
    }

    public function buscar($rut){
        $db= new DB();
        $stmt =  $db->getConexion()->prepare("SELECT * FROM paciente WHERE rut = ?");
        $stmt->bindParam(1, $rut);
        $stmt->execute();
        $resultado = $stmt -> fetch();
    
        $rut = $resultado['rut'];
        $nombre = $resultado['nombre'];
        $apellido = $resultado['apellido'];
        $direccion = $resultado['direccion'];
        $ciudad = $resultado['ciudad'];
        $telefono = $resultado['telefono'];
    
        $paciente = new Paciente();
        
        $paciente->setRut($rut);
        $paciente->setNombre($nombre); 
        $paciente->setApellido($apellido);   
        $paciente->setDireccion($direccion);   
        $paciente->setCiudad($ciudad);   
        $paciente->setTelefono($telefono);  

        return $paciente;

    }
    public function editar($paciente){
        $rut= $paciente->getRut();
        $nombre= $paciente->getNombre(); 
        $apellido= $paciente->getApellido();   
        $direccion= $paciente->getDireccion();   
        $ciudad= $paciente->getCiudad();   
        $telefono=$paciente->getTelefono();

        $db= new DB();
        $stmt =  $db->getConexion()->prepare("UPDATE paciente set  nombre =?, apellido=?, direccion=?, ciudad=?, telefono=? WHERE rut=?");
        $stmt->bindParam(1,  $nombre);
        $stmt->bindParam(2,  $apellido);
        $stmt->bindParam(3,  $direccion);
        $stmt->bindParam(4,  $ciudad);
        $stmt->bindParam(5,  $telefono);
        $stmt->bindParam(6,  $rut);

        $stmt->execute();
    }

    public function eliminar($rut){
        $db= new DB();
        $stmt =  $db->getConexion()->prepare("DELETE FROM paciente WHERE rut = ?");
        $stmt->bindParam(1, $rut);
        $stmt->execute();
    }

    public function listar(){
        $db= new DB();
        $sql = "SELECT * FROM paciente";
        $stmt = $db->getConexion()->prepare($sql);
        $stmt->execute();
        $rs= $stmt->fetchAll();
        foreach ($rs as $fila) { 
           $paciente= new Paciente();
           $paciente->setRut($fila["rut"]);
           $paciente->setNombre($fila["nombre"]); 
           $paciente->setApellido($fila["apellido"]);   
           $paciente->setDireccion($fila["direccion"]);   
           $paciente->setCiudad($fila["ciudad"]);   
           $paciente->setTelefono($fila["telefono"]);          
        
           $pacientes[] =$paciente;
        }
        return $pacientes;
    
    }

    public function buscarApellido($apellido){
        $db= new DB();
        $stmt =  $db->getConexion()->prepare("SELECT * FROM paciente WHERE apellido = ?");
        $stmt->bindParam(1, $apellido);
        $stmt->execute();
        $resultado = $stmt -> fetch();
    
        $rut = $resultado['rut'];
        $nombre = $resultado['nombre'];
        $apellido = $resultado['apellido'];
        $direccion = $resultado['direccion'];
        $ciudad = $resultado['ciudad'];
        $telefono = $resultado['telefono'];
    
        $paciente = new Paciente();
        
        $paciente->setRut($rut);
        $paciente->setNombre($nombre); 
        $paciente->setApellido($apellido);   
        $paciente->setDireccion($direccion);   
        $paciente->setCiudad($ciudad);   
        $paciente->setTelefono($telefono);  

        return $paciente;

    }
}
   
?>