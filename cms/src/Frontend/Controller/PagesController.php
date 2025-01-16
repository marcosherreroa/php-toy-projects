<?php

namespace App\Frontend\Controller;

class PagesController extends AbstractController {
  public function show (string $pageKey){
    $page = $this->pagesRepository->fetchBySlug($pageKey);
    if(empty($page)){
      $this->error404();
      return;
    } 
    $this->render('pages/showPage',['page' => $page]);
  }
}