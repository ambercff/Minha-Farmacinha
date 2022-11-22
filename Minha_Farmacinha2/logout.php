<?php
    session_start();
    
    foreach ($_SESSION as $key => $value)
        unset($_SESSION[$key]);

    unset($_SESSION);

    session_destroy();

    header ('location: Index.php');
?>