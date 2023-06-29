<?php
    session_start();
    unset($_SESSION['acctype']);
    header("Location: index.php");
    exit();
?>
