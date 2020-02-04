<?php
class Database {
    //DB params
private $host = '41.76.109.49';
private $db_name = 'sirtch_dev';
private $username = 'postgres';
private $password = '10548047';
private $conn;

//DB Connect
public function connect(){
    $this->conn=null;

    try{

        $this->conn=new PDO('pgsql:host=' . $this->host .
         ';dbname=' . $this->db_name, $this->username,
         $this->password);
         $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         
    }catch(PdoException $e){

        echo 'Connection Error: ' . $e->getMessage();

     }

     return $this->conn;
   }
}