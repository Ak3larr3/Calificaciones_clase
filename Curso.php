<?php

require_once('Alumno.php');

class Curso{

	private $alumnos;

	public function __construct(){
		$this->alumnos = array();
	}

	public function inscribir_alumno($alumno){
		$this->alumnos[] = $alumno;				
	}

	public function __tostring(){
		$retorno = "";		
		foreach($this->alumnos as $alumno){			
			$retorno .= $alumno;			
		}		
		return $retorno;
	}

}

 ?>