<?php
namespace App\models;
use App\models\QueryBuilder;
use App\models\Tasks;
class Users{
    /*
     * @var \App\models\QueryBuilder
     */
    private $queryBuilder;

    public function __construct(QueryBuilder $queryBuilder){
        $this->queryBuilder = $queryBuilder;
    }
    public function loginUrl(){
        return "http://".$_SERVER['SERVER_NAME']."/login";
    }
    public function login($data){
        if(
            $this->queryBuilder->existInfo('users',['login'=>$data['email']])!=false &&
            $this->queryBuilder->existInfo('users',['password'=>$data['password']])!=false
        ){
            $_SESSION['user']='admin';
            $_SESSION['errorPass']="";
            $_SESSION['errorLog']="";
            header('Location: ' . "http://".$_SERVER['SERVER_NAME']);
        }else{
            if($this->queryBuilder->existInfo('users',['login'=>$data['email']])==false){
//              Login
                $_SESSION['errorPass']="";
                $_SESSION['errorLog']="Have Error in Login";

            }
            if($this->queryBuilder->existInfo('users',['password'=>$data['password']])==false){
//              Password
                $_SESSION['errorLog']="";
                $_SESSION['errorPass']="Have Error in Password";

            }
            if($this->queryBuilder->existInfo('users',['login'=>$data['email']])==false && $this->queryBuilder->existInfo('users',['password'=>$data['password']])==false){

                $_SESSION['errorLog']="Have Error in Login";
                $_SESSION['errorPass']="Have Error in Password";

            }
            $_SESSION['user']='admin';
            header('Location: ' . $this->loginUrl());
        }
    }
    public function isLogin(){
            if($_SESSION['user']!='admin'){
                if($this->loginUrl()!="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"){
                    header('Location: ' . $this->loginUrl());
                }
            }
    }
    public function logoutUser(){
        session_destroy();
        header('Location: ' . $this->loginUrl());
    }
}