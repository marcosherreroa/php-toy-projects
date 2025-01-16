<?php

use App\Admin\Controller\LoginController;
use App\Admin\Controller\PagesAdminController;
use App\Admin\Support\AuthService;
use App\Frontend\Controller\NotFoundController;
use App\Frontend\Controller\PagesController;
use App\Repository\PagesRepository;
use App\Support\Container;
use App\Admin\Support\CsrfHelper;

require __DIR__ . '/inc/all.inc.php';



$container = new Container();
$container->bind('pdo', function (){
  return require __DIR__ . '/inc/db-connect.inc.php';
});
$container->bind('pagesRepository', function () use ($container){
  return new PagesRepository($container->get('pdo'));
});
$container->bind('pagesController', function () use ($container){
  return new PagesController($container->get('pagesRepository'));
});
$container->bind('notFoundController', function () use ($container){
  return new NotFoundController($container->get('pagesRepository'));
});
$container->bind('pagesAdminController', function () use ($container){
  return new PagesAdminController($container->get('authService'),$container->get('csrfHelper'),$container->get('pagesRepository'));
});
$container->bind('authService', function() use ($container){
  return new AuthService($container->get('pdo'));
});
$container->bind('csrfHelper',function() {
  return new CsrfHelper();
});
$container->bind('loginController',function () use ($container) {
  return new LoginController($container->get('authService'),$container->get('csrfHelper'));
});

$container->get('csrfHelper')->handle();

$route = (string) ($_GET['route'] ?? 'pages');

if ($route === 'pages'){
  $page = (string) ($_GET['page'] ?? 'index');
  $container->get('pagesController')->show($page);
}
else if ($route === 'admin/login'){
  $loginController = $container->get('loginController')->login();
}
else if ($route === 'admin/logout'){
  $loginController = $container->get('loginController')->logout();
}
else if ($route === 'admin/pages'){
  $container->get('authService')->ensureLoggedIn();
  $container->get('pagesAdminController')->index();
}
else if ($route === 'admin/pages/create'){
  $container->get('authService')->ensureLoggedIn();
  $container->get('pagesAdminController')->create();
}
else if ($route === 'admin/pages/edit'){
  $container->get('authService')->ensureLoggedIn();
  $page = (string) ($_GET['page'] ?? 'index');
  $container->get('pagesAdminController')->edit($page);
}
else if ($route === 'admin/pages/delete'){
  $container->get('authService')->ensureLoggedIn();
  $container->get('pagesAdminController')->delete();
}
else {
  $container->get('notFoundController')->error404();
}