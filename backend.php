<?php
    //var_dump($_POST);
    //Űrlap kiértékelése
    if(isset($_POST["szemetem"])){
        $kivSzemet = $_POST["szemetem"];
         if ($kivSzemet == "papír" || $kivSzemet == "tejes doboz"){
            echo "Kék színű gyüjtő";
        }elseif ($kivSzemet == "bab konzerv" || $kivSzemet == "nylon csomagolás"){
            echo "Sárga színű gyüjtő";
        }else{
            echo "Nem színes kuka";
        }
     }
?>