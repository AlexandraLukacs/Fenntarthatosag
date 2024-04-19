<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fenntarthatóság</title>
</head>
<body>
    <?php
    echo "<h2>Fenntarthatóság</h2>";
    echo "<h2>1. Feladat</h2>";
    $elsoSzint = "Ökoszisztéma";
    $masodikSzint = "Társadalom";
    $harmadikSzint = "Gazdaság";
    $negyedikSzint = "Pénz";
    ?>
	<div id="tartalom">
	    <div id="bal">
            <?php
            echo "<div><img src='fenntart.png' alt='Fenntarthatóság szintjei'></div>";
            ?>
        </div>
        <div id="jobb">
            <ul>
                <?php
                echo "<h2>A fenntarthatóság szintjei</h2>";
                echo "<li>$elsoSzint</li>";
                echo "<li>$masodikSzint</li>";
                echo "<li>$harmadikSzint</li>";
                echo "<li>$negyedikSzint</li>";
                ?>
            </ul>
        </div>
    </div>
    <?php
    echo "<h2>2. Feladat</h2>";
    $tomb1 = array("A megújuló erőforrások fogyasztása","több, mint amit a természet újratermelni képes",
    "a természet újratermelő kapacitásával azonos mértékű","kevesebb, mint amit a természet újratermelni képes");
    
    $tomb2[0] = "A környezet helyzete";
    $tomb2[1] = "a környezet pusztul";
    $tomb2[2] = "környezeti egyensúly";
    $tomb2[3] = "a környezet megújul";
    
    $tomb3 = array("Fenntarthatóság");
    array_push($tomb3, "nem fenntartható");
    array_push($tomb3, "fenntartható, nem változó állapot");
    array_push($tomb3, "fenntartható fejlődés");
    
        echo "<h2>Fogyasztás, környezet és fenntarthatóság kapcsolata</h2>";
        echo "<table>";
		echo "<tr>";
		echo "<th>$tomb1[0]</th><th>$tomb2[0]</th><th>$tomb3[0]</th>";
		echo "</tr>";
		for ($index = 1; $index < count($tomb1); $index++) 
		{
			echo "<tr>";
			echo "<td>$tomb1[$index]</td><td>$tomb2[$index]</td><td>$tomb3[$index]</td>";
			echo "</tr>";
	    }
		echo "</table>";

        echo "<p><b>$tomb1[0] - $tomb2[0] -	$tomb3[0]</b><p>";
	    for ($index = 1; $index < count($tomb1); $index++) 
		{
			echo "<p>$tomb1[$index] - $tomb2[$index] - $tomb3[$index]<p>";
	    }
    ?>
    <?php
    echo "<h2>3. Feladat</h2>";
    echo "<h2>Megújuló energiaforrás</h2>";
    echo "<p>Megújuló energiaforrásnak nevezzük az energiahordozók azon csoportját, amelyek emberi időléptékben képesek 
    megújulni, azaz nem fogynak el, ellentétben a nem megújuló energiaforrásokkal. A megújuló energiaforrások a napenergia 
    közvetlen termikus és fotoelektromos hasznosítása, a biomassza, szélenergia, vízenergia, a tenger hullámzásából 
    kinyerhető energia, a geotermikus energia, valamint a Holddal összefüggésben az árapály energia. A geotermikus energia 
    a Nappal való kapcsolat, a földfelszín Napból és a magmából származó energiaáram jelentős különbsége alapján sorolható 
    a megújuló energiaforrások közé.</p>";

    $megUjAr = array("EU-átlag"=>"20", "Belgium"=>"13", "Bulgária"=>"16", "Dánia"=>"30", 
    "Németorazág"=>"18", "Észtország"=>"25", "Finnország"=>"36");

    /*echo "<table>";
		echo "<tr>";
		echo "<th>Ország</th><th> Eu-cél 2020</th>";
		echo "</tr>";
		for ($index = 1; $index < count($megUjAr); $index++) 
		{
			echo "<tr>";
			echo "<td>$megUjAr[$index]</td><td>$megUjAr[$index]</td>";
			echo "</tr>";
	    }
		echo "</table>";*/
    ?>
    <a href="kuka.php">Kuka</a>
</body>
</html>