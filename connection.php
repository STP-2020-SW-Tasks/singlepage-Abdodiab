<?php
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);
mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
$server = 'localhost' ;
$username = 'root' ;
$password = '';
$db ='login' ;
        
     
        $connection = new mysqli($server,$username,$password,$db) ;
         if ($connection ->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
         $data = "SELECT * FROM workshops" ;
        $records = $connection->query($data);
 //@$connection = new mysqli($server,$username,$password,$db)  or die ("nooo");
 ?>