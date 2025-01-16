<?php

namespace App\Admin\Controller;

use App\Admin\Support\AuthService;

class LoginController extends AbstractAdminController {

  public function logout(){
    $this->authService->logout();
    header('Location: index.php?'. http_build_query(['route' => 'admin/pages']));
    return;
  }

  public function login(){
    if($this->authService->isLoggedIn()){
      header('Location: index.php?'. http_build_query(['route' => 'admin/pages']));
      return;
    }
    
    $errors = [];

    if(!empty($_POST)){
      $username = (string) ($_POST['username'] ?? '');
      $passsword = (string) ($_POST['password'] ?? '');

      if($this->authService->handleLogin($username,$passsword)){
        header('Location: index.php?'. http_build_query(['route' => 'admin/pages']));
        return;
      }
      else $errors[] = 'User or password are incorrect';
    }

    $this->render('login/login',['errors' => $errors]);
  }
}