<?php

require_once('Asignatura.php');

class Alumno{

	private $nombre;
	private $apellidos;
	private $dni;
	private $asignatura;

	public function __construct($nombre, $apellidos, $dni){
		$this->set_nombre($nombre);
		$this->set_apellidos($apellidos);
		$this->set_dni($dni);		
	}

	public function set_nombre($nombre){
		$this->nombre = $nombre;
	}

	public function get_nombre(){
		return $this->nombre;
	}

	public function set_apellidos($apellidos){
		$this->apellidos = $apellidos;
	}

	public function get_apellidos(){
		return $this->apellidos;
	}

	public function set_dni($dni){
		$this->dni = $dni;
	}

	public function get_dni(){
		return $this->dni;
	}

	public function set_asignatura($asignatura){
		$this->asignatura = $asignatura;
	}

	public function __tostring(){
		$retorno = "";
		if($this->asignatura == null){
			$retorno .= "Alumno:<br />".$this->get_nombre()." ".$this->get_apellidos()." ".$this->get_dni()."<br/>";
		}else{
			$retorno .= "Alumno:<br />".$this->get_nombre()." ".$this->get_apellidos()." ".$this->get_dni()."<br/>Asignatura: ".$this->asignatura->get_nombre()."<br />Promedio: ".$this->asignatura->promedio()."<br />";
		}
		return $retorno;
	}
}
 ?>
