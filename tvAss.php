<!DOCTYPE html>

<!--
__         ______         __       __  ________  _______         __    __   ______   ______  _______   ________
|  \       /      \       |  \     /  \|        \|       \       |  \  |  \ /      \ |      \|       \ |        \
| $$      |  $$$$$$\      | $$\   /  $$| $$$$$$$$| $$$$$$$\      | $$\ | $$|  $$$$$$\ \$$$$$$| $$$$$$$\| $$$$$$$$
| $$      | $$__| $$      | $$$\ /  $$$| $$__    | $$__| $$      | $$$\| $$| $$  | $$  | $$  | $$__| $$| $$__
| $$      | $$    $$      | $$$$\  $$$$| $$  \   | $$    $$      | $$$$\ $$| $$  | $$  | $$  | $$    $$| $$  \
| $$      | $$$$$$$$      | $$\$$ $$ $$| $$$$$   | $$$$$$$\      | $$\$$ $$| $$  | $$  | $$  | $$$$$$$\| $$$$$
| $$_____ | $$  | $$      | $$ \$$$| $$| $$_____ | $$  | $$      | $$ \$$$$| $$__/ $$ _| $$_ | $$  | $$| $$_____
| $$     \| $$  | $$      | $$  \$ | $$| $$     \| $$  | $$      | $$  \$$$ \$$    $$|   $$ \| $$  | $$| $$     \
\$$$$$$$$ \$$   \$$       \$$      \$$ \$$$$$$$$ \$$   \$$       \$$   \$$  \$$$$$$  \$$$$$$ \$$   \$$ \$$$$$$$$


-->



<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tvAss.css">
    <title>Test1</title>

  </head>
  <body>
    <section id="SectionTvAss">

      <div id="d1">
        <table id="t1">
          <tr>
            <td>
              <img src="img/heart.png" id="icon">
            </td>
            <td>
              80 BPM
            </td>
            <td id="chartContainer2" style="height: 100%; width:90%;">
            </td>
          </tr>
        </table>
      </div>

      <div id="d1">
        <table id="t1">
          <tr>
            <td>
              <img src="img/boots.png" id="icon">
            </td>
            <td>
              1600 Feet
            </td>
          </tr>
        </table>
      </div>

      <div id="d1">
        <table id="t1">
          <tr>
            <td>
              <img src="img/burger.png" id="icon">
            </td>
            <td>
              Food
            </td>
            <td id="chartContainer1" style="height: 100%; width:90%;">
            </td>
          </tr>
        </table>
      </div>

      <div id="d1">
        <table id="t1">
          <tr>
            <td>
              <img src="img/flash.png" id="icon">
            </td>
            <td>
              Last sleep: 210 min
            </td>
          </tr>
        </table>
      </div>

      <div id="d1">
        <table id="t1">
          <tr>
            <td>
              <img src="img/thermometer.png" id="icon">
            </td>
            <td>
              37.5 °C
            </td>
          </tr>
        </table>
      </div>

      <div id="d1">
        <table id="t1">
          <tr>
            <td>
              <img src="img/water.png" id="icon">
            </td>
            <td>
              Last drink:
            </td>
            <td>
              50 min
            </td>
          </tr>
        </table>
      </div>

    </section>
    <footer>
      <p>Footer</p>
    </footer>

    <script>
    window.onload = function () {

    var chart1 = {
    	animationEnabled: true,
      backgroundColor:"lightblue",

    	data: [{
    		type: "doughnut",
    		innerRadius: "40%",
    		indexLabel: "{label}: #percent%",
    		dataPoints: [
    			{ label: "Calories dépensées", y: 692917 },
    			{ label: "", y: 900000 }
    		]
    	}]
    };

      var chart2 = {
      	animationEnabled: true,
        backgroundColor:"lightblue",
      	data: [
      	{
      		type: "splineArea",
          color: "red",
      		dataPoints: [
      			{ y: 100 },
      			{ y: 106 },
      			{ y: 114 },
      			{ y: 112 },
      			{ y: 90 },
      			{ y: 100 },
      			{ y: 105 },
      			{ y: 100 },
      			{ y: 80 }
      		]
      	}
      	]
      };
      $("#chartContainer1").CanvasJSChart(chart1);
      $("#chartContainer2").CanvasJSChart(chart2);

      var canvas1et2 = document.getElementsByClassName("canvasjs-chart-canvas");
      console.log(canvas1et2);
      //canvas1et2[0].style.position="";
      canvas1et2[1].style.position="";
      //canvas1et2[2].style.position="";
      canvas1et2[3].style.position="";
      }
      </script>

<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
  </body>
</html>
