<?php

    // If no query string then go away
    if(empty($_POST['id'])){
        header("Location: ./table.php");
        exit;
    }

    var_dump($_POST);

    include("../.env.php");


    $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'));



   // $conn = mysqli_connect('localhost','root',null,'lesson_03');

    $sql = "UPDATE countries SET
            name = '{$_POST['name']}',
            description = '{$_POST['description']}',
            population = {$_POST['population']}
            WHERE id = {$_POST['id']}";
    echo $sql;

    $res = mysqli_query($conn, $sql);

    if($res){
        echo "The country was updated succesfully.";
    }
    else{
        echo "There was an error updating the record: " .mysqli_error($conn);
    }
    
    


?>