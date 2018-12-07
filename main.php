<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleIndex.css">
    <title>Nuit de l'info 2018</title>
    <script>

    window.onload = function() {
      document.getElementById("header").className = "hidden";
    }
    function menuAffiche1() {
      document.getElementById("taches").className = "";
      document.getElementById("meteoCockpit").className = "hidden";
      document.getElementById("TVvie").className = "hidden";
    }
    function menuAffiche2() {
      document.getElementById("taches").className = "hidden";
      document.getElementById("meteoCockpit").className = "";
      document.getElementById("TVvie").className = "hidden";
    }
    function menuAffiche3() {
      document.getElementById("taches").className = "hidden";
      document.getElementById("meteoCockpit").className = "hidden";
      document.getElementById("TVvie").className = "";
    }
    </script>
  </head>
  <body onload="loading()">
    <div id="header" >
    	<nav id="menu" class="navbar">
    		<ul>
    			<a href="#" id="menu1" onclick="menuAffiche1()"><li>Gestion des tâches</li></a>
    			<a href="#" id="menu2" onclick="menuAffiche2()"><li>Cockpit</li></a>
    			<a href="#" id="menu3" onclick="menuAffiche3()"><li>Télé-assistance vie</li></a>
    		</ul>
    	</nav>
    </div>
    <div id="meteoCockpit" class="hidden">
      <section>
        <?php include('realTimeWeather.php') ?>
      </section>
      <section>
        <?php include('forecastWeather.php') ?>
      </section>
    </div>
    <div id="taches" class="hidden">
      <section>
        <?php include('checkList.php') ?>
      </section>
    </div>
    <div id="TVvie" class="hidden">
      <section>
        <?php include('tvAss.php') ?>
      </section>
    </div>
  </body>
</html>
