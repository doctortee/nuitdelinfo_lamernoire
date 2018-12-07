<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleIndex.css">
    <title>Test</title>

  </head>
  <body>
    <div id="header">
    	<nav id="menu" class="navbar">
    		<ul>
    			<a href="#" class=""><li>Gestion des tâches</li></a>
    			<a href="#" class=""><li>Cockpit</li></a>
    			<a href="#" class=""><li>Télé-assistance vie</li></a>
    		</ul>
    	</nav>
    </div>
    <section>
      <?php include('../cockpit/realTimeWeather.php') ?>
    </section>
    <section>
      <?php include('../cockpit/forecastWeather.php') ?>
    </section>
    <footer>
      <p>Footer</p>
    </footer>
  </body>
</html>
