<?php
echo $_POST;
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
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>NDI - CheckList</title>
</head>
<body>
  <h1>Saved</h1>
</body>
</html>
