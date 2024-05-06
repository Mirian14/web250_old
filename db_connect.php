<?php 
    function connectDB()
    {
        $conn = new mysqli('localhost','root','','web250',3306);
    
        if ($conn->connect_error)
            die("Connection failure: conn->connect_error");
        return $conn;
    }
?>
