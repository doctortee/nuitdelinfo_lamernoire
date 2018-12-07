var buttonAfficheCalendrei

var sectionPlanning = document.getElementById("planning"),
    sectionTodoList = document.getElementById("todoList"),
    sectionAccueilCheckList = document.getElementById("accueilCheckList");

var jsListOfTodoListDaily = document.getElementById("listOfTodoListDaily"),
    jsListOfTodoListSimple = document.getElementById("listOfTodoListSimple");


function changeSection(sectionName)
{
  sectionPlanning.className = "hideCheckList";
  sectionTodoList.className = "hideCheckList";
  sectionAccueilCheckList.className = "hideCheckList";

  sectionName.className = "";
}

function addItemToList(list,name,description)
{


  if (list == "input")
  {
    let listSelected = document.getElementById("selectList");
    list = eval(listSelected.children[listSelected.selectedIndex].value);
    let jsNameInput = document.getElementById("nameInput");
    name = nameInput.value;
    name = name.replace(/ /g, "_");//name.replace(" ", "_")
    let jsDescriptionInput = document.getElementById("descriptionArea");
    description = descriptionArea.value;
  }

  let listElement = document.createElement("LI");
  let inputCheckbox = document.createElement("INPUT");
  inputCheckbox.type = "checkbox";
  inputCheckbox.setAttribute("onclick","delElementToList("+list+","+list.children.length+")");
  listElement.appendChild(inputCheckbox);

  let labelElement = document.createElement("LABEL");
  let labelTextNode = document.createTextNode(name);
  name = name.replace(/ /g, "_");//name.replace(" ", "_")
  labelElement.appendChild(labelTextNode);
  let aElement = document.createElement("A");
  aElement.href = "#"+name;
  aElement.setAttribute("onclick","extend("+name+")");
  let aTextElement = document.createTextNode(" +");
  aElement.appendChild(aTextElement);
  labelElement.appendChild(aElement);
  listElement.appendChild(labelElement);

  let descriptionElement = document.createElement("P");
  descriptionElement.id = name;
  descriptionElement.className = "hideCheckList";
  let descriptionElementText = document.createTextNode(description);
  descriptionElement.appendChild(descriptionElementText);
  listElement.appendChild(descriptionElement);

  list.appendChild(listElement);
}

function delElementToList(list,position)
{
  list.children[position].remove();
}


function extend(node)
{
  if (node.className == "hideCheckList")
  {
    node.className = "";
  }
  else {
    node.className = "hideCheckList";
  }
}

window.addEventListener('load', function () {
  vanillacalendar.init();
});
