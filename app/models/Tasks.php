<?php
namespace App\models;

class Tasks{
    /*
     * @var \App\models\QueryBuilder
     */
    private $queryBuilder;

    public function __construct(QueryBuilder $queryBuilder){
        $this->queryBuilder = $queryBuilder;
    }
    public function showEditTask(){
        return $this->queryBuilder->where('tasks'," WHERE edit_date is NOT NULL");
    }
    public function showDoneTask(){
        return $this->queryBuilder->where('tasks'," WHERE done='yes'");
    }
    public function allTasks(){
        return $this->queryBuilder->where('tasks'," WHERE edit_date is NULL AND done='no'");
    }
    public function oneTask($id){
        return $this->queryBuilder->getOne('tasks',$id);
    }
    public function editSaveTask($data){
        return $this->queryBuilder->update('tasks',$data);
    }
    public function doneTask($id){
        return $this->queryBuilder->update('tasks',[
            'id'=>$id,
            'done'=>'yes'
        ]);
    }
    public function reDoneTask($id){
        return $this->queryBuilder->update('tasks',[
            'id'=>$id,
            'done'=>'no'
        ]);
    }
    public function delTask($id){
        return $this->queryBuilder->delete('tasks',$id);
    }
    public function addNewTask($data){
        if(($this->validate('email',$data['user_email'])) && ($this->validate('empty',$data))){
            $this->queryBuilder->insert('tasks', $data);
            return true;
        }else{
            return false;
        }
    }
    public function validate($type,$arg){
        if($type=="email"){
            if(filter_var($arg, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
                return false;
            }
        }elseif($type=="empty"){
            if(empty($arg)){
                return false;
            }else{
                return true;
            }
        }
    }
}