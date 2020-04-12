<?php


class usuarioClass {
    
    public function login($email, $senha){
        global $pdo;
        
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            
            $_SESSION['email'] = $dado['email'];
            $_SESSION['tipo'] =$dado['tipo'];
            $_SESSION['nome'] = $dado['nome'];
            
            return true;            
        }else{
            return false;
        }
    
    }
    
}
