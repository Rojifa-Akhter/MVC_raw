<?php 
class database{
    public $host = DB_HOST;
    public $user = USER;
    public $database = DATABASE;
    public $password = PASSWORD;
    public $con;
    public $result;

    // Database connection
    public function __construct() {
        try {
            $this->con = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->user, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Set error mode to exception
        } catch (PDOException $e) {
            echo "Database Connection Error: " . $e->getMessage();
        }
    }

    //SELECT * FROM mvcdb where id = 5
    //INSERT INTO users (name,email, password) VALUES ('Rojifa', 'user@gmail.com' ,'123456')
    public function Query($qry, $params = []) {
        if (empty($params)) {
            $this->result = $this->con->prepare($qry);
            return $this->result->execute();
        } else {
            $this->result = $this->con->prepare($qry);
            return $this->result->execute($params);
        }
    }

    // Returns the number of affected rows
    public function rowCount() {
        return $this->result->rowCount();
    }

    // Fetches all rows as an array of objects
    public function fetchAll() {
        return $this->result->fetchAll(PDO::FETCH_OBJ);
    }

    // Fetches a single row as an object
    public function fetch() {
        return $this->result->fetch(PDO::FETCH_OBJ);
    }
}
?>
