<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "q_generator";

$conn = mysqli_connect($server, $username, $password, $db);

if($conn) {
    ?>
    <script>
        alert("Connected successfully");
    </script>

    <?php
} else {
    ?>
    <script>
        alert("Can't connect to the database");
    </script>
    <?php
}

?>