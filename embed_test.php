<html>
	<head>
		<title>Embedding Test</title>
		<script type="text/javascript">
			window.createPokeWindow = function()
			{
				var body = document.activeElement;
				var pokeWindow = document.createElement("iframe");
				pokeWindow.id = "pokeWindow";
				body.appendChild(pokeWindow);
				var pokeCurtain = document.createElement("div");
				pokeCurtain.id = "pokeWindowCurtain";
				pokeCurtain.onclick = function()
				{
					window.hidePokeWindow();
				}
				body.appendChild(pokeCurtain);
			}
			window.showPokeWindow = function(page,val)
			{
				if(!document.getElementById("pokeWindow"))
					{ window.createPokeWindow(); }
				var urladd = "?a=b";
				var pokeWindow = document.getElementById("pokeWindow");
				var pokeCurtain= document.getElementById("pokeWindowCurtain");
				pokeWindow.src = "http://tpoke.koneko-chan.net/embeded/" + urladd + "&url=" + encodeURIComponent(document.location);
				pokeWindow.style.visibility = "visible";
				pokeCurtain.style.visibility= "visible";
			}
			window.hidePokeWindow = function()
			{
				var pokeWindow = document.getElementById("pokeWindow");
				var pokeCurtain= document.getElementById("pokeWindowCurtain");
				pokeWindow.style.visibility = "hidden";
				pokeCurtain.style.visibility= "hidden";
			}
			document.onload = function()
			{
				window.createPokeWindow();
			}
		</script>
		<link rel="stylesheet" href="/static/twitter.css" type="text/css" />
	</head>
	<body>
		<a href="#" onclick="window.showPokeWindow('index');return false;">Window</a>
	</body>
</html>