<?php
namespace App\controllers;
use App\models\QueryBuilder;
use App\models\Tasks;
use App\models\Users;
use League\Plates\Engine;

class HomeController
{
    private $view;
    private $builder;
    /**
     * @var Tasks
     */
    private $tasks;
    /**
     * @var Users
     */
    private $users;
    public function url(){
        return "http://".$_SERVER['SERVER_NAME'];
    }
    public function __construct(Engine $view,QueryBuilder $builder,Tasks $tasks,Users $users)
    {
        $this->view = $view;
        $this->builder = $builder;
        $this->tasks = $tasks;
        $this->users = $users;
        $this->users->isLogin();
    }
    public function index(){
        $tasks = $this->tasks->allTasks();
        $tasksEdit = $this->tasks->showEditTask();
        $tasksDone = $this->tasks->showDoneTask();
        echo $this->view->render('tasks',['url'=>$this->url(),'tasks'=>$tasks,'tasksEdit'=>$tasksEdit,'tasksDone'=>$tasksDone]);
    }
    public function edit($id){
        $show = $this->tasks->oneTask($id);
        echo $this->view->render('edit',['url'=>$this->url(),'task'=>$show,'id'=>$id]);
    }
    public function editSave(){
        $result = $this->tasks->editSaveTask($_POST);
        if(empty($result)){
            header('Location: ' .$this->url());
        }
    }
    public function done($id){
        $result = $this->tasks->doneTask($id);
        if(empty($result)){
            header('Location: ' .$this->url());
        }
    }
    public function reDone($id){
        $result = $this->tasks->reDoneTask($id);
        if(empty($result)){
            header('Location: ' .$this->url());
        }
    }
    public function delete($id){
        $result = $this->tasks->delTask($id);
        if(empty($result)){
            header('Location: ' .$this->url());
        }
    }
    public function showAddForm(){
        echo $this->view->render('addTask');
    }
    public function add(){
        $result = $this->tasks->addNewTask($_POST);
        if($result==true){
            header('Location: ' .$this->url());
        }else{
            header('Location: ' .$this->url()."/add");
        }
    }
    public function loginView(){
        $errorLogin =$_SESSION['errorLog'];
        $errorPass = $_SESSION['errorPass'];
        echo $this->view->render('login',['url'=>$this->url(),'errorLogin'=>$errorLogin,'errorPass'=>$errorPass]);
    }
    public function login(){
        $this->users->login($_POST);
    }
    public function logout(){
        $this->users->logoutUser();
    }
}