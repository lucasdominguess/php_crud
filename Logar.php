<?php 
require 'sql.php' ; 

$email = $_POST['email']; 
$senha = $_POST['senha']; 


$db = new Sql(); 
$stmt=$db->prepare("Select * from usuarios where email = :email"); 
$stmt->bindValue(":email",$email);
$stmt->execute();

$retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(!isset($retorno[0]['id_adm'])){
    sleep(1);
    echo json_encode(['status'=>'fail','msg'=>'Usuario nao encontrado']);
    exit(); 

}
if(!password_verify($senha,$retorno[0]['senha'])){
    sleep(1);
    echo json_encode(['status'=>'fail','msg'=>'Usuario nao encontrado']);
    
    exit();
}
session_start();
$_SESSION['id_usuario']= $retorno[0]['id_adm'];
$_SESSION['email']= $retorno[0]['email'];
$_SESSION['id']= $retorno[0]['id_adm'];
$_SESSION['nome']= $retorno[0]['nome'];
echo json_encode(['status'=>'ok','msg'=>'logado com sucesso','nome'=>$retorno[0]['nome']]);



