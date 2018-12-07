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
  alert(txt)
}

function createInterface(){
  for (i = 0; i < UsableJSObject.categ.simple.name.length; i++) {
    alert(UsableJSObject.categ.simple.name[i] + "\t" + UsableJSObject.categ.simple.description[i])
  }
  for (i = 0; i < UsableJSObject.categ.daily.name.length; i++) {
    alert(UsableJSObject.categ.daily.name[i] + "\t" + UsableJSObject.categ.daily.description[i])
  }
}
