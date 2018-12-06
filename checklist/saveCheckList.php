<?php
print_r($_POST);
$fichier = fopen("./checklist.xml", "w");
if ($fichier) {
    //$buffer = fwrite($fichier, $dataToSave)) !== false)
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
