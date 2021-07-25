<?php 

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=david_escudero", "root","");

		$link->exec("set names utf8");

		return $link;

	}

}
