<?php 

require "Sql.php" ; 

class ValidarLogin extends Sql { 

    public function __construct(public string $email,public string $senha)
    {
        $this->consultaSql();         
    }

    public function consultaSql(){ 
        
    }
}