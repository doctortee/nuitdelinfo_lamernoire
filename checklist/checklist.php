<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>NDI - CheckList</title>
  <script>
    var UsableJSObject = new Object();
    UsableJSObject.categ = new Object();
    UsableJSObject.categ.daily=new Object();
    UsableJSObject.categ.simple=new Object();
    UsableJSObject.categ.ended=new Object();
    UsableJSObject.categ.daily.name = []
    UsableJSObject.categ.daily.description = []
    UsableJSObject.categ.simple.name = []
    UsableJSObject.categ.simple.description = []
    UsableJSObject.categ.ended.name = []
    UsableJSObject.categ.ended.description = []
</script>
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
