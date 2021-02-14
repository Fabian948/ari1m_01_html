<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maxium-scale=2">
	<style>
		body{
			text-align: center;
			
		}
		.t{
			text.align: left;
		}
		.g{
			text.align: left;
		}
		.p{
			display:inline-block;
			text-align: left;
			width: 500px;
			padding-left:40px;
			padding-right:40px;
		}
	</style>
</head>


<body>
<div class="g">
<div>

	<h1 class="t">Muestra el listado ordenado de días de la semana que contengan la letra R</h1>
		<br/><br/><br/>
		
<div class="p">

	Dias de la semana Que tiene la R (con JS):<br/>
		<br/>
	<div id="se"></div>
	<script>
			semana = [
				'lunes',
				'martes',
				'miercoles',
				'jueves',
				'viernes',
				'sabado',
				'domingo',
			];
		//dias de la semana con la R
			for (i = 0; i < semana.length ; i++){
				n = semana[i].indexOf("r");
				if(n > 0){
					document.getElementById('se').innerHTML += semana[i] + "<br/>";
			}	}
	</script>
</div>

<div class="p">
	<?php
			$semana = [
				'lunes',
				'martes',
				'miercoles',
				'jueves',
				'viernes',
				'sabado',
				'domingo',
			];
		//dias de la semana con la R
			echo "Dias de la samana Que tiene la R (con PHP):<br/><br/>";
			foreach ($semana as $c){
				if(strpos($c,"r")){
					echo "$c <br/>";
			}	}
	?>
</div>
</div>


		<br/><br/><br/>


<div>
	<h1 class="t"> Crea un array con los meses del año y muestra uno de los meses seleccionándolo al azar </h1>
		<br/><br/><br/>
<div class="p">
	Dia random de la semana <br/>
		<br/>
<div id=si></div>
	<script>
			semana = [
				'lunes',
				'martes',
				'miercoles',
				'jueves',
				'viernes',
				'sabado',
				'domingo',
			];
		//dia de la semana random
			v = Math.round(Math.random() * ((semana.length - 1) - 0) + 0);
			document.getElementById('si').innerHTML= semana[v];
	</script>
</div>
<div class="p">
	<?php
			$semana = [
				'lunes',
				'martes',
				'miercoles',
				'jueves',
				'viernes',
				'sabado',
				'domingo',
			];
		//dia de la semana random
			sort($semana);
			shuffle($semana);
			echo "Dia random de la semana (en PHP): <br/><br/>" . $semana[1];
	?>
</div>
</div>


		<br/><br/><br/>


<div>
	<h1 class="t">Crea un array con los días de la semana y muestra uno de los días seleccionándolo al azar</h1>
		<br/><br/><br/>
<div class="p">
	Mes random (en JS):<br/>
			<br/>
	<div id="so"></div>
	<script>
		mes = [
			'enero',
			'febrero',
			'marzo',
			'abril',
			'mayo',
			'junio',
			'julio',
			'agosto',
			'septiembre',
			'octubre',
			'noviembre',
			'diciembre',
		];
	//mes random
		b = Math.round(Math.random() * ((mes.length - 1) - 0) + 0);
		document.getElementById('so').innerHTML= mes[b];
	</script>
</div>
<div class="p">
	<?php 
		$mes = [
			'enero',
			'febrero',
			'marzo',
			'abril',
			'mayo',
			'junio',
			'julio',
			'agosto',
			'septiembre',
			'octubre',
			'noviembre',
			'diciembre',
		];
	//mes random
		sort($mes);
		shuffle($mes);
		echo "Dia random de la mes (en PHP) <br/><br/>" . $mes[1];
	?>
</div>
</div>
</div>
		<br/><br/><br/>
</body>