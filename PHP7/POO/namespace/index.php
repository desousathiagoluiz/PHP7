<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Tyo Yan");
$cad->setEmail("tyoyan@github.com");
$cad->setSenha("tyo123");

$cad->registrarVenda();

?>