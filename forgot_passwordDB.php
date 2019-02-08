<?php
mysqli_report(MYSQLI_REPORT_ERROR);

define('DB_HOST', 'localhost');
define('DB_USER','root');
define('DB_PASSWORD','root');
define('DB_NAME', 'rfp');

class Database{
    
    public $con;
    
    function __construct(){
        try{
            
            $this->con = mysqli_connect('localhost','root','root','rfp');
                if(!$this->con){
                    echo "CONNECTIONG ERROR".mysqli_connect_error();
                } else {
//                    echo "Database is connected";
                }
            
            } catch(mysqli_sql_exception $e){
                throw $e;
            }

    }
}



?>