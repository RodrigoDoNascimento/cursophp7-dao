<?php

require_once("config.php");

// Carrega um usuário
/* $root = new Usuario();
$root->loadById(3); 
echo $root;
*/

// Carrega uma lista de usuários
/* $lista = Usuario::getList();
echo json_encode($lista); */

// Carrega uma lista de usuários buscando pelo login
/* $search = Usuario::search("e");
echo json_encode($search); */

// Carrega um usuário usando o login e a senha
/* $usurario = new Usuario();
$usurario->login("rodrigo", "197538");
echo $usurario; */

$aluno = new Usuario();

$aluno->setDeslogin("aluno");
$aluno->setDessenha("@luno0");
$aluno->insert();
echo $aluno;


?>