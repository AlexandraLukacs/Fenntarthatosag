<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    
    echo "<div><img src='fenntart.png'></div>";
    echo "<h2>A fenntarthatóság szintjei</h2>";
    echo $elsoSzint;
    echo $masodikSzint;
    echo $harmadikSzint;
    echo $negyedikSzint;
    
    
    echo "<h2>2. Feladat</h2>";
    $tomb = array("A megújuló erőforrások fogyasztása","több, mint amit a természet újratermelni képes",
    "a természet újratermelő kapacitásával azonos mértékű","kevesebb, mint amit a természet újratermelni képes");
    
    $tomb2[0] = "A környezet helyzete";
    $tomb2[1] = "a környezet pusztul";
    $tomb2[2] = "környezeti egyensúly";
    $tomb2[3] = "a környezet megújul";
    
    $tomb = array("Fenntarthatóság");
    array_push($tomb2, "nem fenntartható");
    array_push($tomb2, "fenntartható, nem változó állapot");
    array_push($tomb2, "fenntartható fejlődés");
    
    
    echo "<h2>3. Feladat</h2>";
    echo "<h2>Megújuló energiaforrás</h2>";
    echo "<p>Megújuló energiaforrásnak nevezzük az energiahordozók azon csoportját, amelyek emberi időléptékben képesek 
    megújulni, azaz nem fogynak el, ellentétben a nem megújuló energiaforrásokkal. A megújuló energiaforrások a napenergia 
    közvetlen termikus és fotoelektromos hasznosítása, a biomassza, szélenergia, vízenergia, a tenger hullámzásából 
    kinyerhető energia, a geotermikus energia, valamint a Holddal összefüggésben az árapály energia. A geotermikus energia 
    a Nappal való kapcsolat, a földfelszín Napból és a magmából származó energiaáram jelentős különbsége alapján sorolható 
    a megújuló energiaforrások közé.</p>";

    $megUjAr = array("Oszag"=>"Eu-cél 2020", "EU-átlag"=>"20", "Belgium"=>"13", "Bulgária"=>"16", "Dánia"=>"30", 
    "Németorazág"=>"18", "Észtország"=>"25", "Finnország"=>"36");
    ?>
</body>
</html>