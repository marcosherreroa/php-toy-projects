<?php

namespace App\Admin\Controller;

use App\Admin\Support\AuthService;
use App\Admin\Support\CsrfHelper;

class AbstractAdminController {

  public function __construct(protected AuthService $authService, protected CsrfHelper $csrfHelper){}

  protected function render($view, $params) {
    extract($params);
    $csrf_token = $this->csrfHelper->generateToken();

    ob_start();
    require __DIR__ . '/../../../views/admin/' . $view . '.view.php';
    $contents = ob_get_clean();

    $isLoggedIn = $this->authService->isLoggedIn();

    require __DIR__ . '/../../../views/admin/layouts/main.view.php';
  }

  protected function error404() {
    http_response_code(404);

    $this->render('abstract/error404',[]);
  }
}