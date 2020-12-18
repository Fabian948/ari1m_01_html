<!DOCTYPE html>
<html>
	<head>
	
	</head>
	<body>
		<h1>Ley de ohm</h1>
			<form>
			<input id="v" name="v" placeholder="Voltaje" value="1" onkeyup="calculo()"/>
			<input id="r" name="r" placeholder="Resistencia" value="1" onkeyup="calculo()"/>
		<button onclick="calculo()">Calcular</button>
		</form>
		<div id="I" style="
			padding:20px;
			background-color:pink;
		">
			Resultado
		</div>
		<script>
		//alert('hola mundo');
		//console.log('hola otra vez');
		function calculo(){
			v=document.getElementById("v").value;
			r=document.getElementById("r").value;
			i=v/r;
			document.getElementById('I').innerHTML=i+" Amperios";
		}
		calculo();
		</script>

		<?php
		//esto no se ve en el cliente.
		if(isset($_GET)) print_r($_GET);





		?>

























	</body>
</html>