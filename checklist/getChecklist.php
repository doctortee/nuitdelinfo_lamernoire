<?php header('Content-type: text/xml');
header('Content-Type: text/html; charset=utf-8');
header('Access-Control-Allow-Origin: *');
//echo("It's Friday my Dudes");

$fichier = fopen("./checklist.xml", "r");
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
