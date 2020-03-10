<?php
$username = "u201016968_tklin";
$password = "darksec33022015";
try {
    $conn = new PDO('mysql:host=mysql.grendelhosting.com;dbname=u201016968_tkli', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>


