<?php

    session_start();

    // Redirect the derpy user

    if(empty($_SESSION['notification'])){
        header("Location: ./table.php");
        exit; // otherwise the page continues to process
    }

    echo $_SESSION['notification'];

    // Free the memory
    unset($_SESSION['notification']);

?>