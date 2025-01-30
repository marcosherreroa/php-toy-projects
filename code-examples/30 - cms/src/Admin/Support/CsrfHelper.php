<?php

namespace App\Admin\Support;

class CsrfHelper {
  private function ensureSession(){
    if (session_id() === '') session_start();
  }

  public function handle(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $this->ensureSession();
      if(empty($_SESSION['csrfToken']) || empty($_POST['_csrf']) || $_SESSION['csrfToken'] !== $_POST['_csrf']){
        http_response_code(419);
        echo 'Error: CSRF token mismatch';
        die();
      }

      unset($_SESSION['csrfToken']);
    };
  }

  public function generateToken(): string {
    $this->ensureSession();
    if(empty($_SESSION['csrfToken'])){
      $_SESSION['csrfToken'] = $token = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrfToken'];
  }
}