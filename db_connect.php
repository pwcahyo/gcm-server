<?php  
class DB_Connect {
  
    function __construct() {
  
    }
  
    function __destruct() {
        
    }
  
    //create database conn
    public function connect() {
        require_once 'config.php';
        
        $conn = mysql_connect(DB_HOST, DB_USER, DB_PASS, DB_PORT);        
        mysql_select_db(DB_NAME); 
        
        return $conn;
    }
  
    // close database conn
    public function close() {
        mysql_close();
    }
  
} 
?>
