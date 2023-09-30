<?php
require_once __DIR__ . '/../conexao/Conexao.php';
require_once __DIR__ . '/../model/Usuario.php';
require_once __DIR__ . '/../dao/UsuarioDAO.php';

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

//pega todos os dados passado por POST

$d = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){ 
    
    $remove = preg_replace('/[^A-Za-z0-9]/', '', $d['cpf']);

    $usuario->setNome($d['nome']);
    $usuario->setSobrenome($d['sobrenome']);
    $usuario->setIdade($d['idade']);
    $usuario->setCep($d['cep']);
    $usuario->setEstado($d['estado']);
    $usuario->setnumero($d['numero']);
    $usuario->setRua($d['rua']);
    $usuario->setCidade($d['cidade']);
    $usuario->setComplemento($d['complemento']);
    $usuario->setCPF($remove);
    $usuario->setGenero($d['genero']);


    $usuariodao->create($usuario);

    header("Location:logadouro.php");
    
} 
else if(isset($_GET['del'])){

    $usuario->setId($_GET['del']);

    $usuariodao->delete($usuario);

    header("Location: logadouro.php");
}else{
    header("Location: logadouro.php");
}

?>