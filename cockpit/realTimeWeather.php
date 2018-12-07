<HTML>
  <HEAD>
    <TITLE>Météo en temps Réel</TITLE>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="../cockpit/style/style.css">
    <script type="text/javascript">
    window.onload=function() {
      horloge('div_horloge');
    };

    function horloge(el) {
      if(typeof el=="string") { el = document.getElementById(el); }
      function actualiser() {
        var date = new Date();
        var str = date.getHours();
        str += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
        el.innerHTML = str;
      }
      actualiser();
      setInterval(actualiser,1000);
    }
    </script>
  </HEAD>
  <BODY>
    <!-- Section d'implémentation du Saint API, Amen -->
    <TABLE id="horloge">
      <tr>
        <td>
          <img src="../cockpit/img/clock.png">
          <div id="div_horloge"></div>
        </td>
        <td>
        </td>
      </tr>
      <tr>
        <td>
        </td>
        <td>
        </td>
      </tr>
    </table>
    <center><div id="openweathermap-widget-15"></div></center>
    <script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 15,cityid: '524901',appid: 'de8663b0aceffceb84a3ecf406e37659',units: 'metric',containerid: 'openweathermap-widget-15',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script></HTML>
