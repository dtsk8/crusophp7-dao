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


//login
$usuario = new Usuario();
$usuario->login("user","123456");
echo $usuario;
*/
/*INSERT
$aluno = new Usuario("aluno", "@alinu");
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@alun0");

$aluno->insert();
echo $aluno;
*/
//Alterar usuarioa UPDATE
/*
$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor","iadhaosdhal");

echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(9);

$usuario->delete();

echo $usuario;
?>