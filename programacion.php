<!DOCTYPE html>

<html>
	<head>
	
	</head>
	
	<body>
					<form>
						<label> Ancho del Jardin:</label> <br/>
						<input id="r" name="r" onkeyup="calculo()" value="<?=$_GET['r']?>"/> <br/>
						<label> Diametro de la fuente:</label> <br/>
						<input id="d" name="diam" onkeyup="calculo()" value="<?=$_GET['diam']?>"/> <br/>
						<button> calcular</button>
					</form>
					<div id="S"></div>
					<form>
						<label> lado del hexagono :</label> <p>
						<input id="l" name="l" value="<?=$_GET['l']?>" onkeyup="calculo2()"/> <p>
						<button>Calcular</button>
					</form>
					<p id="s2"></p>
					<script>
				
function calculo(){
	r=document.getElementById("r").value;
	d=document.getElementById("d").value;
	ad=2*3.14*d;
	ar=2*3.14*r;
	q=ad-ar;
	document.getElementById('S').innerHTML = q +" m2";
} calculo();
function calculo2(){
	l=document.getElementById("l").value;
	p=6*l;
	ap=Math.sqrt(l+l/2);
	a=p*ap/2;
	document.getElementById('s2').innerHTML ="En js: " + p +' cm '+ a + 'cm2';
}	calculo2();
</script>
		<?php 
		if(!isset($l)){
		$_GET['l']=6;
		}
		$l = $_GET ['l'];
		$p= 6*$l;
		$ap=sqrt($l+$l/2);
		echo "en php: " . $p . ' cm ' . $ap . 'cm2';
		if(!isset($diam)){
		$_GET['r']=1;
		$_GET['diam']=4;
		}
		$r = $_GET ['r'];
		$d = $_GET ['diam'];
		$q= 2*3.14*$d-2*3.14*$r;
		echo "en php " . $q . " m2."  ;
		?>	
	$u	= $_GET[u'];
	$x	= 2*$u/12;
	$y	= $u-(4*$x);
	$v	= $x*$x*$y;
	echo "En php: Tiene un volumen de " . $v . " cm^3";


</body>
</html>
























	</body>
</html>