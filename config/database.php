<?php
// used to get mysql database connection
class Database{
    // specify your own database credentials
    private $host = "randion.es";
    private $db_name = "mortega_login";
    private $username = "mortegamarti";
    private $password = "Fpsuperiordaw2022#";
    public $conn;
    // get the database connection
    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("pgsql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>

