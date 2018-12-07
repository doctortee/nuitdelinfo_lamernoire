function loadXMLAndInitChecklist() {
  var indexA = 0
  var indexB = 0
  var text = document.getElementById("xmlcontent").value;
  var parser = new DOMParser();
  var xmlDoc = parser.parseFromString(text, "text/xml")
  x = xmlDoc.documentElement.getElementsByTagName("checklist");
  for (i = 0; i < x.length; i++) {
    catName = x[i].attributes[0].value
    y = x[i].getElementsByTagName("task")
    for (j = 0; j < y.length; j++) {
      z = y[j].attributes
      for (k = 0; k < z.length; k++) {
        switch (catName) {
          case "daily":
            switch (z[k].name) {
              case "name":
                UsableJSObject.categ.daily.name[indexA] = z[k].value;
                break;
              case "value":
                UsableJSObject.categ.daily.description[indexA] = z[k].value;
                indexA += 1
                break;
              default:
                break;
            }
            break;
          case "simple":
            switch (z[k].name) {
              case "name":
                UsableJSObject.categ.simple.name[indexB] = z[k].value;
                break;
              case "value":
                UsableJSObject.categ.simple.description[indexB] = z[k].value;
                indexB += 1
                break;
              default:
                break;
            }
            break;
          default:
            break;
        }
      }
    }
  }
}

function saveXMLfromChecklist() {
  var textPointer = document.getElementById("xmlcontent");
  var txt = "<xml>\n<checklist name=\"daily\">\n"
  for (i = 0; i < UsableJSObject.categ.daily.name.length; i++) {
    txt=txt+"<task name=\""+UsableJSObject.categ.daily.name[i]+"\" value=\""+UsableJSObject.categ.daily.description[i]+"\" />\n"
  }
  txt = txt+"</checklist>\n<checklist name=\"simple\">\n"
  for (i = 0; i < UsableJSObject.categ.simple.name.length; i++) {
    txt=txt+"<task name=\""+UsableJSObject.categ.simple.name[i]+"\" value=\""+UsableJSObject.categ.simple.description[i]+"\" />\n"
  }
  txt=txt+"</checklist>\n</xml>"
  textPointer.value = txt
  //alert(txt)
}

function insertToChecklist()
{

  var jsListOfTodoListDaily = document.getElementById("listOfTodoListDaily"),
      jsListOfTodoListSimple = document.getElementById("listOfTodoListSimple");
  var listSelected = document.getElementById("selectList");
  listSel = eval(listSelected.children[listSelected.selectedIndex].value);
  if (listSet == jsListOfTodoListDaily) {
    listSel = "daily"
  }
  else {
    listSel = "simple"
  }
  var name = document.getElementById("nameInput").value;
  var desc = document.getElementById("descriptionArea").value;
  if (listSel == "simple") {
    UsableJSObject.categ.simple.name[UsableJSObject.categ.simple.name.length] = name
    UsableJSObject.categ.simple.description[UsableJSObject.categ.simple.description.length] = desc
  }
  else
  {
    UsableJSObject.categ.daily.name[UsableJSObject.categ.simple.name.length] = name
    UsableJSObject.categ.daily.description[UsableJSObject.categ.simple.description.length] = desc
  }
}

function removeFromChecklist()
{

}

function createInterface(){
  for (i = 0; i < UsableJSObject.categ.simple.name.length; i++) {
    addItemToList(jsListOfTodoListSimple, UsableJSObject.categ.simple.name[i], UsableJSObject.categ.simple.description[i])
    //alert(UsableJSObject.categ.simple.name[i] + "\t" + UsableJSObject.categ.simple.description[i])
  }
  for (i = 0; i < UsableJSObject.categ.daily.name.length; i++) {
    addItemToList(jsListOfTodoListDaily, UsableJSObject.categ.daily.name[i], UsableJSObject.categ.daily.description[i])
    //alert(UsableJSObject.categ.daily.name[i] + "\t" + UsableJSObject.categ.daily.description[i])
  }
}
