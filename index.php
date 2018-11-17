<?php 

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(4);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("aluno");
//echo json_encode($search);

//Carreha um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root","!@#$%");
//echo $usuario;

/*
Craindo um novo usuário
$aluno = new Usuario("hugo4","teste");

$aluno->insert();

echo $aluno;*/

//Alterar um usuário
/*
$usuario = new Usuario();

$usuario->loadById(7);

$usuario->update("professor","!@#$%¨&*");

echo $usuario;*/

$usuario = new Usuario();

$usuario->loadById(6);

$usuario->delete();

echo $usuario;
 ?>