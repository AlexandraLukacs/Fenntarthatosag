<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Víz védelme</title>
</head>
<body>
    <form action="vizBackend.php" method="post">
        <label for="V">A folyadékáram sebessége:</label>
        <input type="number" name="sebesseg" id="V" value=1>
        <label for="A">A folyadékáram keresztmetszete (m2):</label>
        <input type="number" name="keresztMetszet" id="A" value=1>
        <input type="submit" value="Számol" name="szamol">
    </form>
    <a href="index.php">Főoldal</a>
</body>
</html>