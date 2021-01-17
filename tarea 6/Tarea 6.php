<!DOCTYPE html>
<html>
	<head>
	
	</head>
	<body>
		<table border="1">
			<tr>
				<td width="25%">
					<h1>
						Problema 1
					</h1>
						</td><td width="25%">
					<h1>
						Problema 2
					</h1>
						</td><td width="25%">
					<h1>
						Problema 3
					</h1>
						</td><td width="25%">
					<h1>
						Problema 4
					</h1>
				</td>
			</tr><tr>
				<td>
					<h2>
						<img src="img\tarea_6_e1.png" width="100%"/>
					</h2>
						</td><td>
					<h2>
						<img src="img\tarea_6_e2 .png" width="100%"/>
					</h2>
						</td><td>
					<h2>
						En el año 2010 la edad de Ana era el triple de la de su hija María. En 2015, sus edades sumaban 54 años. ¿Qué edad tenía María en 2010? ¿En qué año nació María? ¿Qué años tenía su madre cuando nació María?
					</h2>
						</td><td>
					<h2>
						<img src="img\tarea_6_e4.png" width="100%"/>
					</h2>
				</td>
			</tr><tr>
				<td>
					<form>
						<label> Ancho del Jardin:</label> <p>
						<input id="r" name="r" onkeyup="calculo()" value="<?=$_GET['r']?>"/> <p>
						<label> Diametro de la fuente:</label> <p>
						<input id="d" name="diam" onkeyup="calculo()" value="<?=$_GET['diam']?>"/> <p>
						<button>calcular</button>
					</form>
						<p id="S"></p>
						</td><td>
					<form>
						<label> lado del hexagono :</label> <p>
						<input id="l" name="l" value="<?=$_GET['l']?>" onkeyup="calculo2()"/> <p>
						<button>Calcular</button>
					</form>
						<p id="s2"></p>
						</td><td>
					<form>
						<label> Año de entrada:</label> <p>
						<input id="an1" name="an1" value="<?=$_GET['an1']?>" onkeyup="calculo3()"/> <p>
						<label> diferencia de edad: </label> <p>
						<input id="dif" name="dif" value="<?=$_GET['dif']?>" onkeyup="calculo3()"/> <p>
						<label> Año de salida:</label> <p>
						<input id="an2" name="an2" value="<?=$_GET['an2']?>" onkeyup="calculo3()"/> <p>
						<label> suma de edad:</label> <p>
						<input id="su" name="su" value="<?=$_GET['su']?>" onkeyup="calculo3()"/> <p>
						<p id="S3"></p>
						<button>Calcular</button>
					</form>
						</td><td>
					<form>
						<label> suma perimetro de base y altura:</label> <p>
						<input id="u" name="u" value="<?=$_GET['u']?>" onkeyup="calculo4()"/> <p>
						<p id="s4"></p>
						<button>Calcular</button>
					</form>
				</td>
			</tr><tr>
				
			</tr>
		</table>
		<script>
function calculo(){
	r=document.getElementById("r").value;
	d=document.getElementById("d").value;
	ad=2*3.14*d;
	ar=2*3.14*r;
	q=ad-ar;
	
	document.getElementById('S').innerHTML ="en js: " + q +" m2";
}	calculo();

function calculo2(){
	l=document.getElementById("l").value;
	p=6*l;
	ap=Math.sqrt(l+l/2);
	a=p*ap/2;
	document.getElementById('s2').innerHTML ="En js: " + p +' cm '+ a + 'cm2';
}	calculo2();

function calculo3(){
	an1=document.getElementById("an1").value;
	dif=document.getElementById("dif").value;
	an2=document.getElementById("an2").value;
	su=document.getElementById("su").value;
	ano=an2-an1;
	ano1=2*ano;
	em1=su-ano1;
	cons= 1;
	em2= cons+parseInt(dif);
	em=em1/em2;
	ea=3*em;
	amn=an1-em;
	eanm=ea-em;
	document.getElementById('S3').innerHTML = 'En js: Ana tiene ' + ea + ' años y su hija ' + em + ' años. Maria nacio en ' + amn + ' y su madre tenia ' + eanm + ' años';
}	calculo3();


function calculo4(){
	u=document.getElementById("u").value;
	x=2*u/12;
	y=u-(4*x);
	v=x*x*y;
	document.getElementById('s4').innerHTML = "En js: Tiene un volumen de " + v + " cm^3";
	}	calculo4();
</script>
		<?php 
		if(!isset($l)){
			$_GET['l']=6;
		}
		$l = $_GET ['l'];
		$p= 6*$l;
		$ap=sqrt($l+$l/2);
		echo "1.- En php: " . $p . ' cm ' . $ap . 'cm2 <br/>';
		if(!isset($diam)){
			$_GET['r']=1;
			$_GET['diam']=4;
		}
		$r = $_GET ['r'];
		$d = $_GET ['diam'];
		$q= 2*3.14*$d-2*3.14*$r;
		echo "        2.- En php " . $q . " m2. <br/>"  ;
		if(!isset($an1)){
			$_GET['an1']=2010;
			$_GET['dif']=3;
			$_GET['an2']=2015;
			$_GET['su']=54;
		}
		$an1 	= $_GET['an1'];
		$dif 	= $_GET['dif'];
		$an2 	= $_GET['an2'];
		$su 	= $_GET['su'];
		$ano 	= $an2-$an1;
		$ano1 	= 2*$ano;
		$em1	= $su-$ano1;
		$em2	= 1+$dif;
		$em		= $em1/$em2;
		$ea		= 3*$em;
		$amn	= $an1-$em;
		$eanm	= $ea-$em;
		echo  '       3.- En PHP: Ana tiene ' . $ea . ' años y su hija ' . $em . ' años. Maria nacio en ' . $amn . ' y su madre tenia ' . $eanm . ' años <br/>';
		if(!isset($u)){
			$_GET['u']=60;
		}
		$u	= $_GET['u'];
		$x	= 2*$u/12;
		$y	= $u-(4*$x);
		$v	= $x*$x*$y;
		echo " 4.- En php: Tiene un volumen de " . $v . " cm3 <br/>";
		?>	
	</body>
</html>