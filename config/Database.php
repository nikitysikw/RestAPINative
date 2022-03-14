<?php
class Database {

    private $host = "127.0.0.1";
    private $login = "apisite";
    private $password = "apisite";
    private $db_name = "apisite";
    private $port = 3306;
    public $conn;

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new mysqli($this->host, $this->db_name, $this->login, $this->password, $this->port);
        } catch (mysqli_sql_exception $exception) {
            echo "Connect error:{}" . $exception->getMessage();
    }
        return $this->conn;
    }

	function __destruct()
	{
		$this->conn->close();
	}

}