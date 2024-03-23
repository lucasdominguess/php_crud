<?php 

require_once 'Sql.php' ; 


class VerificarLogin { 
    public function __construct($email,$senha)
    {
       $this->logar($email,$senha); 
    }

    protected function logar($email,$senha){ 
    
    $db2 = new Sql();
    $stmt=$db2->prepare("Select * from usuarios where email = :email");
    $stmt->bindValue(":email",$email);
    $stmt->execute();

    $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(!isset($retorno[0]['id_adm'])){
        sleep(1);
        bloqueio($email,$senha);
    
        
        echo json_encode(['status'=>'fail','msg'=>'Usuario ou Senha invalida']);
        exit(); 

    }
    if(!password_verify($senha,$retorno[0]['senha'])){
        sleep(1);
        bloqueio($email,$senha);
    
        echo json_encode(['status'=>'fail','msg'=>'Usuario ou Senha invalida']);
        
        exit();
}
    
    // Iniciar sessão 
    session_start();
    $_SESSION['id_usuario']= $retorno[0]['id_adm'];
    $_SESSION['email']= $retorno[0]['email'];
    $_SESSION['id']= $retorno[0]['id_adm'];
    $_SESSION['nome']= $retorno[0]['nome'];
    $_SESSION['sessao'] = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
    $_SESSION['tempo30'] = $ver = date_add($_SESSION['sessao'],date_interval_create_from_date_string('+30 minutes'));


    // $addtime = date_add($_SESSION['sessao'],date_interval_create_from_date_string('+30 minutes'));
    // // $sessao_usuario = $addtime->format('H:i:s');
    // $_SESSION['tempo30'] = $addtime->format('H:i:s');

    echo json_encode(['status'=>'ok','msg'=>'logado com sucesso','nome'=>$retorno[0]['nome']]);
}    
}
