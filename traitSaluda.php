<?php
	trait Saluda
	{

		public function saludo()
		{

			if(isset($this -> nombre)){
				if(gettype($this -> nombre) == "string"){
					echo "Hola soy ".$this -> nombre."</br>";
				} else {
					echo "Hola anónimo</br>";
				}
			} else {
				echo "Hola mundo.</br>";
			}
		}
	}
	class Persona
	{

		use Saluda;
		private $nombre;

		public function darNombre($nombre)
		{

			$this -> nombre = $nombre;
		}
	}
	$persona1 = new Persona();
	$persona1 -> darNombre("Mariano");
	$persona1 -> saludo();
	$persona2 = new Persona();
	$persona2 -> saludo();
	$persona3 = new Persona();
	$persona3 -> darNombre(0);
	$persona3 -> saludo();
	$persona1 = new Persona();
	$persona1 -> darNombre("Pedro");
?>
