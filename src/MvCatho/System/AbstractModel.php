<?php

namespace MvCatho\System;

abstract class AbstractModel
{
    protected $db;
    protected $table;
    
    public function __construct()
    {
        $this->db = new \PDO("mysql:host=localhost;dbname=aeskaeno", 'root', 'root');
        
        var_dump($this->db);
    }
    
    public function getAll()
    {
        return $this->$db->query("select * from $this->table");
    }
    
    public function delete($id)
    {
        return $this->$db->query("delete from $this->table where id = {$id}");
    }
    
    public function getById($id)
    {
        return $this->$db->query("select * from $this->table where id = {$id}");
    }
    
    public function save($dados)
    {
        if(!isset($dados['id']) || !$dados['id']) {
            $this->db->query (
            "INSERT INTO $this->table " . implode(', ', array_keys($dados)) . ")
                VALUES ('" . implode("','", $dados) . "')");
            return $this->db->lastInsertId();
        }
        else
        {
            $id = $dados['id'];
            unset($dados['id']);
            $last = count($dados) -1;
            $set = '';
            $c = 0;
            foreach($dados as $campo => $valor)
            {
                if($c == $last)
                   $set .= "{$campo} = '{$valor}'";
                else
                   $set .= "{$campo} = '{$valor}' , ";
                $c++;
            }
            //die("UPDATE {$this->_table} SET {$set} WHERE id={$id}");
            return $this->db->query("UPDATE $this->table SET $set WHERE id=$id");
        }
    }
    
}