<?php

namespace App\Admin\Support;

use PDO;

class AuthService {

  public function __construct(private PDO $pdo){}

  private function ensureSession(){
    if (session_id() === '') session_start();
  }

  public function handleLogin(string $username, string $password): bool {
    if(empty($username) || empty($password)) return false;

    $stmt = $this->pdo->prepare('SELECT * FROM users WHERE username = :username');
    $stmt->bindValue(':username',$username,PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if(empty($user)) return false;

    if(password_verify($password,$user['password'])){
      $this->ensureSession();
      $_SESSION['adminUserId'] = $user['id'];
      session_regenerate_id();
      return true;
    }

    return false;
  }

  public function isLoggedIn(): bool {
    $this->ensureSession();
    return !empty($_SESSION['adminUserId']);
  }

  public function ensureLoggedIn() {
    if(!$this->isLoggedIn()){
      header('Location: index.php?'.http_build_query(['route' => 'admin/login']));
      die();
    }
  }

  public function logout(){
    $this->ensureSession();
    unset($_SESSION['adminUserId']);
    session_regenerate_id(); 
  }
}