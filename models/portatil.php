<?php

class ordenador
{
	private $id;
	private $nombre;
	private $tipo;
	private $imagen;
	private $ram;
	private $almacenamiento;
	private $precio_amazon;
	private $precio_pcpcomponentes;
	private $enlace_amazon;
	private $enlace_pccomponetes;

	public function __construct($tipo)
	{
		$this->tipo =$tipo;
	}

	public function getTipo(){
		return $this->tipo;
	}
	
}

