<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Numeros Aleatorios</title>
</head>
<body>
    <main>
        <h1>Rolagem de Dados pro RPG</h1>
        <p>Gerando um número aleatorio entre 1 e 20...</p>
        <p>Seu numero aleatorio é:

        <?php 
            $numero = rand(1, 20);
            echo $numero."<br>";
            if($numero < 5 ){
                echo "<p>Que azar.</p>";
            } elseif($numero >= 6 && $numero <= 10 ){
                echo "<p>Não é tão ruim, mas é ruim.</p>";
            } elseif($numero >= 11 && $numero <= 15 ){
                echo "<p>Deu Certo!</p>";
            } elseif($numero >= 16 && $numero <= 20 ){
                echo "<p>Critocooo!!! boa.</p>";
            };
        ?>
        </p>
        <button id="reloadButton">Recarregar Página</button>
    </main>
    <script src="seu_script.js"></script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>