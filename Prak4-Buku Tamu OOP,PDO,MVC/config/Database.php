<<<<<<< HEAD
<?php
class Database {
    private $host = "localhost";
    private $db_name = "buku_tamu";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" .$this->host. ";dbname=" .$this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Koneksi error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
=======
<?php
class Database {
    private $host = "localhost";
    private $db_name = "buku_tamu";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" .$this->host. ";dbname=" .$this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Koneksi error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
>>>>>>> d968932075b22fb6571310b4d6d6ac57703269c6
