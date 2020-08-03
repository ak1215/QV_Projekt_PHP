<?php
//Verbindung von DB
function connectDataBase(){
    $db_host = "localhost";
    $db_name = "p8a3d93";
    $db_username = "cms_www";
    $db_password = "#cms!topSECRet";

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);


if(mysqli_connect_error()){
    echo "Fehler bei der Verbindung";
    echo mysqli_connect_error();
} else {
    return $conn;
}
}
