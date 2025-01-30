<?php

namespace App\Admin\Controller;

use App\Admin\Support\AuthService;
use App\Admin\Support\CsrfHelper;
use App\Repository\PagesRepository;

class PagesAdminController extends AbstractAdminController {
  
  public function __construct(AuthService $authService, CsrfHelper $csrfHelper, private PagesRepository $pagesRepository){
    parent::__construct($authService,$csrfHelper);
  }

  public function index(){
    $entries = $this->pagesRepository->get();
    $this->render('pages/index',['entries' => $entries]);
  }

  public function create(): void{
    $errors = [];

    if(!empty($_POST)){
      $title = (string) ($_POST['title'] ?? '');
      $slug = (string) ($_POST['slug'] ?? '');
      $content = (string) ($_POST['content'] ?? '');

      $slug = strtolower($slug);
      $slug = str_replace(['/',' ','.'],'-',$slug);
      $slug = preg_replace('/[^a-z0-9\-]/','',$slug);

      if (!empty($title) && !empty($slug) && !empty($content)){
        if(!$this->pagesRepository->getSlugExists($slug)){
          $this->pagesRepository->create($title,$slug,$content);
          header('Location: index.php?route=admin/pages');
          return;
        }
        else $errors[] = 'Slug already exists';
      }
      else $errors[] = 'Some fields are empty';
    }
    $this->render('pages/create',['errors' => $errors]);
  }

  public function edit(string $slug): void{
    $errors = [];

    $page = $this->pagesRepository->fetchBySlug($slug);
    if(empty($page)){ 
      $this->error404();
      die();
    }

    if(!empty($_POST)){
      $page->title = (string) ($_POST['title'] ?? '');
      $page->content = (string) ($_POST['content'] ?? '');

      if (!empty($page->title) && !empty($page->content)){
        $this->pagesRepository->update($page->id,$page->title,$page->content);
        header('Location: index.php?route=admin/pages');
        return;
      }
      else $errors[] = 'Some fields are empty';
    }

    $this->render('pages/edit',['page' => $page, 'errors' => $errors]);
  }

  public function delete(): void{
    $id = (int) ($_POST['id'] ?? 1);
    if (!empty($id)) $this->pagesRepository->delete($id);
    header('Location: index.php?route=admin/pages');
    return;
  }

}