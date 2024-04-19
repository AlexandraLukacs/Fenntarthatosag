<?php
    include "backend.php"
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Szelektív hulladékgyűjtés</title>
</head>
<body>
    <?php
        $szemet = array("papír", "bab konzerv", "tejes doboz", "sörös üveg", "nylon csomagolás", "krumpli héja", "elem");
    ?>
    <form action="backend.php" method="post">
        <label for="szemetes">Kidobandó szemét</label>
        <select name="szemetem" id="szemetes">
            <?php
            /* Ha egy label for-ja és a select id-ja egyezik, akkor össze lesznek kötve */
                foreach ($szemet as $ertek){
                    echo "<option vaule='$ertek'>$ertek</option>";
                }
            ?>
        </select>
        <br>
        <input type="image" src="kuka.jpg" alt="kuka" name="kuka">
    </form>
    <a href="vizVedelme.php">Víz védelme</a>
</body>
</html>