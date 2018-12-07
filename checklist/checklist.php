<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>NDI - CheckList</title>
  <script src="checklist_script.js">
  </script>
</head>
<body>
  <form action="http://sigmachine.ca/checklist/saveCheckList" method="post">
  <textarea cols="60" rows="10" wrap="soft" name="test" id="xmlcontent" hidden>
    <?php
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
  </textarea>
  <br>
  <input type="submit" value="Valider" onclick="saveXMLfromChecklist()"/>
  <input type="reset" value="Reload" onclick="loadXMLAndInitChecklist()"/>
</form>
</body>
</html>
