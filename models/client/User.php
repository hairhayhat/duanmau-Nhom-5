<?php 
require_once '../connect/connect.php';
class User extends connect{
    public function register($name,$email,$password): bool{
        $hash_password = password_hash(password: $password, algo: PASSWORD_DEFAULT);
        $sql = 'INSERT INTO users(name, email, password,role_id) VALUES (?,?,?,2)';
        $stmt = $this->connect()->prepare(query:$sql);
        return $stmt->execute(params: [$name, $email, $hash_password]);
    }

    public function login($email, $password): mixed{
        $sql = 'SELECT * FROM users WHERE email = ?';
        $stmt = $this->connect()->prepare(query: $sql);
        $stmt->execute(params: [$email]);
        $user = $stmt->fetch();

        if($user && password_verify(password: $password, hash: $user['password'])){
            return $user;
        }
        return false;
    }
}