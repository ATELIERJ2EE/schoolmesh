<?php

abstract class Model{
    protected $table;
    public $db;
    public function __construct($table){
        $this->table=$table;
        $this->db=new Zebra_Database();
        $this->db->connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    }

}


 ?>