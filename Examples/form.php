<!DOCTYPE html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <header>
            <h1>New Country</h1>
        </header>

        <form target="_blank" action="./insert.php" method="post">
            <div>
                <label>
                    Country Name:
                </label><br>
                <input name="name">
            </div>
            <div>
                <label>
                    Country Description:
                </label><br>
                <input name="description">
            </div>
            <div>
                <label for="">
                    Country Population:
                </label><br>
                <input name="population" type="number">
            </div>
            <button type="submit">Create</button>
        </form>
    </body>
</html>