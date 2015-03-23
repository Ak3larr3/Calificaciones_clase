<?php

class Asignatura{

	private $nombre;
	private $notas;

	public function __construct($nombre){
		$this->set_nombre($nombre);
	}

	public function set_nombre($nombre){
		$this->nombre = $nombre;
	}

	public function get_nombre(){
		return $this->nombre;
	}

	public function insertar_nota($nota){
		$error = "";
		if($nota >= 0 && $nota <= 10){
			$this->notas[] = $nota;
		}else{
			$error = "No es una calificación valida";
		}
		return $error;
	}

	public function promedio(){
		$suma_notas = 0;
		$total_notas = -1;
		foreach ($this->notas as $nota) {
			$suma_notas += $nota;
		}

		if(count($this->notas)>0){
			$total_notas = count($this->notas);
		}

		return ($suma_notas/$total_notas);
	}

	

}
 ?>
