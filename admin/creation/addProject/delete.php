<?php
    require_once('controller.php');
    checkIfConnected();
    delete($_GET['id']);
?>