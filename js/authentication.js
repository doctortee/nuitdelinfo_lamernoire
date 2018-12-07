function verif(){
	
	
	if ((document.getElementById("user").value)=="" || (document.getElementById("password").value)=="")
	{
	alert("Il faut saisir l'identifiant ET le code secret");
	
	return false;
	}
	else return true;
}
