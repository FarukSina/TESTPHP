<?php
// If no query string then go away
if(empty($_GET['id'])){
    header("Location: ./table.php");
    exit;
}

// Our databese connection

    include("../.env.php");


    $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'));

//$conn = mysqli_connect('localhost','root',null,'lesson_03');

// Fetch the row Spot
$result = mysqli_query($conn, "SELECT * FROM countries WHERE id = {$_GET['id']}");
$row = mysqli_fetch_assoc($result);
var_dump($row);
?>

<!DOCTYPE html>
    <head>
        <title>Edit Country</title>
    </head>
    <body>
        <header>
            <h1>Edit Country</h1>
        </header>

        <form target="_blank" action="./update.php" method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div>
                <label>
                    Country Name:
                </label><br>
                <input name="name" value="<?= $row['name'] ?>">
            </div>
            <div>
                <label>
                    Country Description:
                </label><br>
                <input name="description" value="<?php echo $row['description'] ?>">
            </div>
            <div>
                <label>
                    Country Population:
                </label><br>
                <input name="population" type="number" value="<?= $row['population'] ?>">
            </div>
            <button type="submit">Update</button>
        </form>
    </body>
</html>