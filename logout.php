<?php
    if (isset($_COOKIE['userEmail']))
    {
        unset($_COOKIE['userEmail']);
        setcookie('userEmail', '', time() - 3600, '/');
        header("Location: index.php");
    }
    else if (isset($_COOKIE['ownerEmail']))
    {
        unset($_COOKIE['ownerEmail']);
        setcookie('ownerEmail', '', time() - 3600, '/');
        header("Location: index.php");
    }