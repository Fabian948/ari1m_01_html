
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
//dias de la semana con la R
"Dias de la samana Que tiene la R:<br>";
foreach ($semana as $c){
	if(str.indexOf($c,"r")){
		document.getElementById('S').innerHTML = "$c <br>";
</script>
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
//dias de la semana con la R
echo "Dias de la samana Que tiene la R:<br>";
foreach ($semana as $c){
	if(strpos($c,"r")){
		echo "$c <br>";
	}
}
//dia de la semana random
echo "Dia random de la semana <br>";
echo $semana[rand(0,6)];
echo "<br>";
//mes random
echo "mes random <br>";
echo $mes[rand(0,11)];
?>