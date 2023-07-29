<?php



if(isset($_GET["id"]) ) {
    $id = $_GET ["id"];

    $servername= "localhost";
    $username = "id21003546_khryzza";
    $password = "Ubian_2020";
    $database ="id21003546_accountsreg";

    $connection = new mysqli($servername, $username, $password, $database);
    
    
    $sql = "DELETE FROM kphone WHERE id=$id";
    $connection->query($sql);


}

header("location: phonecontact.php");
exit;
?>