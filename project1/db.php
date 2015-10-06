<?php
    $db = new mysqli("localhost", "root", "", "Madlibs");
    if ($db->connect_errno) {
        echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $mysqli->connect_error;
    }
?>
