<?php

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'IMCBANCO';
$port = 3306;

$con = mysqli_connect($hostname, $username, $password, $dbname, $port)

    or
        die("<html>
                <script language = 'JavaScript'>
                    alert('Deu merda no banco de dados, tente outra vezzz!.')
            </html>");
//Check connection
if (!$con) {
    die("Connection failed" . mysqli_connect_error());
}


?>