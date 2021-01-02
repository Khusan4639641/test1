<?php
//Router
$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r){
    $r->addRoute('GET', '/', ["App\controllers\HomeController", "index"]);
    $r->addRoute('GET', '/edit/{id}', ["App\controllers\HomeController", "edit"]);
    $r->addRoute('POST', '/save', ["App\controllers\HomeController", "editSave"]);
    $r->addRoute('GET', '/done/{id}', ["App\controllers\HomeController", "done"]);
    $r->addRoute('GET', '/redone/{id}', ["App\controllers\HomeController", "redone"]);
    $r->addRoute('GET', '/del/{id}', ["App\controllers\HomeController", "delete"]);
    $r->addRoute('GET', '/add', ["App\controllers\HomeController", "showAddForm"]);
    $r->addRoute('GET', '/login', ["App\controllers\HomeController", "loginView"]);

    $r->addRoute('POST', '/login', ["App\controllers\HomeController", "login"]);
    $r->addRoute('GET', '/logout', ["App\controllers\HomeController", "logout"]);

    $r->addRoute('POST', '/addtask', ["App\controllers\HomeController", "add"]);
});