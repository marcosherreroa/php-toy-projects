<?php

namespace App\Frontend\Controller;

use App\Repository\PagesRepository;

class NotFoundController extends AbstractController {
  public function error404() {
    return parent::error404();
  }
}