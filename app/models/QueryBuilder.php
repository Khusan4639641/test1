<?php
namespace App\models;
class QueryBuilder
{
    public $pdo;
    /**
     * @var Users
     */
    private $users;
    /**
     * @var Users
     */
    public function __construct()
    {
        $this->pdo = new \PDO("mysql:host=localhost; dbname=test", "root", "");
    }
    //Список задач
    public function all($table) /// posts , articles, tasks
    {
        $sql = "SELECT * FROM $table ORDER BY id DESC";
        $statement = $this->pdo->prepare($sql); //подготовить
        $statement->execute(); //true || false
        $results = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $results;
    }
    public function where($table,$role){
        $sql = "SELECT * FROM $table $role ORDER BY id DESC";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $result;
    }
    // Вывод одной задачи
    public function getOne($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(":id", $id);
        $statement->execute();
        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        return $result;
    }
    public function existInfo($table,$data){
        // 1. Ключи массива
        // 1. Ключи массива
        $keys = array_keys($data);
        // 2. Сформировать строку title, content
        $stringOfKeys = implode(',', $keys);
        //3. Сформировать метки
        $placeholders = ":" . implode(', :', $keys);
        $sql = "SELECT * FROM $table WHERE $stringOfKeys=$placeholders";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);
        if(!empty($result)){
            $result=true;
        }else{
            $result=false;
        }
        return $result;
    }
    //Сохранение новой задачи
    public function insert($table, $data)
    {
        // 1. Ключи массива
        $keys = array_keys($data);
        // 2. Сформировать строку title, content
        $stringOfKeys = implode(',', $keys);
        //3. Сформировать метки
        $placeholders = ":" . implode(', :', $keys);

        $sql = "INSERT INTO $table ($stringOfKeys) VALUES ($placeholders)";

        $statement = $this->pdo->prepare($sql);
        $statement->execute($data); //true || false
    }
    //Изменение\обновление существующей задачи
    public function update($table, $data)
    {
        $fields = '';

        foreach($data as $key => $value) {

            $fields .= $key . "=:" . $key . ",";
        }

        $fields = rtrim($fields, ',');


        $sql = "UPDATE $table SET $fields WHERE id=:id";

        $statement = $this->pdo->prepare($sql);
        $statement->execute($data); // true || false
    }
    //Удаление задачи
    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
}