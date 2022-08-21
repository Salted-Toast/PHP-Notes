<?php
    session_start();

    session_destroy();
    header('Location: /PHP-Notes/Syntax/15_sessions.php')
?>