<?php
    session_start();
    setcookie($cookie_name, "", time() - $cookie_time);

    session_destroy();
    // or session_detroy();
    header('location: index.php');

?>