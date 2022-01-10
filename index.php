<?php

//premiere partie

$texte = "le texte de votre choix";
echo $texte . "<br><br>";

//deuxieme partie

$textArray = ["le", "texte", "de", "votre choix"];

echo $textArray[1] . "<br><br>";

//troiseme partie

for ($i = 0; $i < 3; $i++) {
    echo $textArray[$i] . "<br>";
}

echo "<br><br>";

// quatrieme partie
?>
<ul>
    <?php
    foreach ($textArray as $string) {
        echo "<li>" . $string . "</li>";
    }
    ?>
</ul>


