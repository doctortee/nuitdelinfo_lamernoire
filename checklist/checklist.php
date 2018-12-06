<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>NDI - CheckList</title>
</head>
<body>
  <form action="http://sigmachine.ca/checklist/saveCheckList" method="post">
  <textarea cols="60" rows="10" wrap="soft" name="test">
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
  </textarea><br>
  <input type="submit" value="Valider" />
  <input type="reset" value="Reload" />
</form>
</body>
<footer>
  <script>
var xhr = new XMLHttpRequest();
xhr.open('POST', 'http://sigmachine.ca/checklist/getCheckList.php');
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.addEventListener('readystatechange', function() {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        alert("Really ?")
    }
});
xhr.send('param1=' + 42 + '&param2=' + 27);
</script>
</footer>
</html>
