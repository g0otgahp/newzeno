<?php
$conn = new mysqli('localhost', 'root', '', 'db_newzeno');
            if(!$conn){
                echo "Error : can not connect database" . $conn->connect_error();
                exit();
            }
$conn->set_charset("utf8");
?>
