<?php
require_once 'Conexion.php';

class Rol {
	public $id;
	public $NombreP;
    public $precio;
    public $categoria;
    public $stock;
    public $fechaC;
    public $fechaV;
	public $referencia;
	private $conexion;

	public function __construct () {
		$this->id = 0;
        $this->nombreP = '';
        $this->precio = 0;
        $this->categoria = '';
        $this->stock = 0;
        $this->fechaC = '';
        $this->fechaV = '';
		$this->referencia = 0;
		$this->conexion = new Conexion();
	}

	public static function listar () {
		$conexion = new Conexion ();
		$listado = $conexion->consultar('SELECT * FROM base');
		$conexion->cerrar();
		return $listado;
	}

	public static function obtenerPorId ($id) {
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM base WHERE id = $id");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () {
		$s = "INSERT INTO base (nombreP,precio,categoria,stock,fechaC,fechaV,referencia) VALUES ('$this->nombreP','$this->precio','$this->categoria','$this->stock','$this->fechaC','$this->fechaV','$this->referencia')";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () {
		$s = "DELETE FROM base WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () {
		$s = "UPDATE base SET nombreP = '$this->nombreP', precio = '$this->precio',categoria = '$this->categoria',stock = '$this->stock',fechaC ='$this->fechaC',fechaV = '$this->fechaV',referencia = '$this->referencia' WHERE id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
}