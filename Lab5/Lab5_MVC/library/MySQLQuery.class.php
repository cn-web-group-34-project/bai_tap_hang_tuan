<?php
class MySQLQuery {
    protected $_dbHandle;
    protected $_result;

    /** Connects to database **/
    function connect($db_host, $username, $password, $db_name) {
        try{
            $this->_dbHandle = new PDO("mysql:host=$db_host;dbname=$db_name",$username,$password);
            //echo "Connection successfully";
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }
    function selectAll() {
        $query = "SELECT * FROM `$this->_table`;";
        
        return $this->_dbHandle->query($query);
        
    }
    function select($id) {
        $query = "SELECT * FROM `$this->_table` WHERE id = $id";
        $this->_result =  $this->_dbHandle->query($query);
        return $this->_result->fetch(PDO::FETCH_ASSOC);
    }

    function query($query){
        $this->_dbHandle->exec($query);
    }
}