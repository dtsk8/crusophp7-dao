<?php

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
echo "<br/>";

$root = new Usuario();

$root->loadbyId(4);

echo $root;



echo "<br/>";
echo "<br/>";
$lista = Usuario::getList(); 

echo json_encode($lista);
echo "<br/>";
echo "<br/>";
//Busca
$search = Usuario::search("u");
echo json_encode($search);

*/
//login
$usuario = new Usuario();
$usuario->login("user","123456");
echo $usuario;
?>