<?php

class Pessoa {

	public $nome; //Atributo

	public function falar(){ //Método

		return "O meu nome é ".$this->nome;

	}

}

$thiago = new Pessoa();
$thiago->nome = "Thiago Luiz";
echo $thiago->falar();

?>