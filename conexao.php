<?php
$mysqli = new mysqli("localhost", "root", "Bacural_2025", "take1coffe_db");

if ($mysqli->connect_errno) {
    echo "Falha na conexão: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>