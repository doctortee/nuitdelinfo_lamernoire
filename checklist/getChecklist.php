<?php header('Content-type: text/xml');
//echo("It's Friday my Dudes");

$fichier = fopen("./checklist.xml");
if ($fichier) {
    while (($buffer = fgets($fichier, 4096)) !== false) {
        echo $buffer;
    }
    if (!feof($fichier)) {
        echo "Erreur: fgets() a échoué\n";
    }
    fclose($fichier);
}
 ?>
