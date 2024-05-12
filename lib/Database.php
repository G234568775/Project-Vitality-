<?php

class Database
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password;
    private $database = 'booking';
    private $conn;

    public function __construct()
    {
        // $this->servername = $servername;
        // $this->username = $username;
        // $this->password = $password;
        // $this->database = $database;
        $this->connect();
    }

    private function connect()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            exit('Connection failed: '.$this->conn->connect_error);
        }
    }

    public function query($sql, $params = [])
    {
        $stmt = $this->conn->prepare($sql);

        if ($stmt === false) {
            exit('Error preparing statement: '.$this->conn->error);
        }

        if (!empty($params)) {
            $types = str_repeat('s', count($params)); // Assuming all parameters are strings
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();

        $result = $stmt->get_result();
        $stmt->close();

        return $result;
    }

    public function insert($table, $data)
    {
        $columns = implode(', ', array_keys($data));
        $placeholders = implode(', ', array_fill(0, count($data), '?'));
        $values = array_values($data);
        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";

        return $this->query($sql, $values);
    }

    public function error()
    {
        return mysqli_error($this->conn);
    }

    public function close()
    {
        $this->conn->close();
    }
}
