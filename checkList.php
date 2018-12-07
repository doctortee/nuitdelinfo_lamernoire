<?php
//print_r($_POST[test]);
if ($_POST[test]) {
  $fichier = fopen("./txt/checklist.xml", "w");
  if ($fichier)
  {
    $buffer = fwrite($fichier, $_POST[test]);
    fclose($fichier);
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styleIndex.css">
    <!--Link a retirer lors de l'insertion des pages entre-elles-->
    <link rel="stylesheet" href="css/styleCheckList.css">
    <link href="css/vanillaCalendar.css" rel="stylesheet">
    <title>Gestion des tâches</title>
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
  </script>
  </head>
  <body>
    <div id="header">
      <div id="menu">
        <ul>
          <li><a onclick="changeSection(sectionTodoList)" href="#">TO DO List</a></li>
          <li><a onclick="changeSection(sectionPlanning)" href="#">Planning</a></li>
        </ul>
      </div>
    </div>
    <section id="accueilCheckList">
      <table id="tableCheckList">
        <tr>
          <td class="tdCheckList"><a onclick="changeSection(sectionTodoList)" href="#">image notepad</a></td>
          <td class="tdCheckList"><a onclick="changeSection(sectionPlanning)" href="#">image calendrier</a></td>
        </tr>
        <tr>
          <td class="tdCheckList">Ouvrir la liste des choses à faire</td>
          <td class="tdCheckList">Ouvrir le planning</td>
        </tr>
      </table>
    </section>
    <section id="todoList" class="hideCheckList">
      <h2>Liste des choses à faire</h2>
      <!--Ajout d'une table pour ajouter des évènements-->
      <fieldset id="fieldsetTodoList">
        <legend><button type="button" onclick="extend(tableAddEvent)">Nouvel événement</button></legend>

        <table id="tableAddEvent" class="hideCheckList">
          <tr>
            <td>
              <button type="button" onclick="addItemToList('input','input','input');insertToChecklist()" name="button">Ajouter</button>
            </td>
            <td>
              <select id="selectList">
                  <option value="jsListOfTodoListDaily">Tâche journalière</option>
                  <option value="jsListOfTodoListSimple">Tâche simple</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
                <label for="nameInput">Nom : </label>
            </td>
            <td>
              <input type="text" id="nameInput">
            </td>
          </tr>
          <tr>
            <td>
              <label for="descriptionArea">Description : </label>
            </td>
            <td>
              <textarea id="descriptionArea" rows="1" cols="40"></textarea>
            </td>
          </tr>
        </table>
      </fieldset>
      <!--Fin de la table pour ajouter des évènements-->
      <h3>Tâches journalières</h3>
        <ul id="listOfTodoListDaily" class="listOfTodoList"> <!--élement test-->
        </ul>
      <h3>Tâches simples</h3>
        <ul id="listOfTodoListSimple" class="listOfTodoList">

        </ul>
        <!-- ATTENTION  Ajout pour sauvegarder -->
          <form action="http://sigmachine.ca/main.php" method="post" id="fakeform">
          <textarea cols="30" rows="1" wrap="soft" name="test" id="xmlcontent" hidden>
            <?php
            $fichier = fopen("./txt/checklist.xml", "r");
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
          <input type="submit" value="Reload" onclick="loadXMLAndInitChecklist()"/>
        </form>
      <!-- ATTENTION  Ajout pour sauvegarder -->
    </section>
    <section id="planning" class="hideCheckList">
      <button type="button" name="button" id="afficheCalendrier">Sélectionner une date</button>
      <div class="cal">
        <div class="cal__header">
          <button class="btn btn-action btn-link btn-lg" data-calendar-toggle="previous"><svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
          <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path></svg></button>
          <div class="cal__header__label" data-calendar-label="month">
          March 2017
          </div><button class="btn btn-action btn-link btn-lg" data-calendar-toggle="next"> <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
          <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path></svg></button>
        </div>

        <div class="cal__body" data-calendar-area="month"></div>
      </div>
      Date Sélectionnée: <span data-calendar-label="picked"></span>
    </section>
  </body>
  <script src="js/vanillaCalendar.js"></script>

  <script type="text/javascript" src="js/script.js"></script>

      <script src="js/checklist_script.js">
      </script>
    <script>
      loadXMLAndInitChecklist()
      createInterface()
      //saveXMLfromChecklist()
    </script>
</html>
