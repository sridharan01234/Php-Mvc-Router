<?php
var_dump($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>hi This is from Index page</h1>

    <form action="../home" method="post">
        <label for="">home Page</label>
        <input type="submit" value="Click here">
    </form>
    <form action="../products" method="post">
        <label for="">Products Page</label>
        <input type="submit" value="Click here">
    </form>
    <form action="../products/show" method="post">
        <label for="">Products List Page</label>
        <input type="submit" value="Click here">
    </form>
</body>
</html>