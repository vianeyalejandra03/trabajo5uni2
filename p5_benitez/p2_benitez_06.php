<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	<section class="contenido">
				<h3>Problema 2 de ALEJANDRA BENITEZ</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/p2.png" alt="">
					</figure>
					<h4>P2 Resultado del codigo</h4>

					<div align=center><b><font color=#000000 size=10>
					<?php
					include "p5_benitez_06_php/arrays.php";

					?>
					</div></b></font>

					<h4> Explicacion del codigo</h4>
					<img src="imagenes/explica.png" alt="">

					<B><p>	HOLA Y BIENVENIDO A LA EXPLIACION DEL EJERCICIO 
					UTILIZANDO UN ARRAY<BR>
					(ESTA EXPLICACION SERA DE LINEA POR LINEA PARA
					 ASI EVITAR PIERDE EN SU EXPLICACION).<BR>
					<BR> LINEA 1-6:<br> DAMOS LO QUE ES NUESTRA CABECERA Y LOS TITULOS
					 DE NUESTRO PHP <BR>
					 LINEA 7:<br> EN ESTA LINEA (LA CUAL TERMINA EL FONT EN LA
					 LINEA NUMERO 13) ES PARA EDITAR NUESTRO RESULTADO 
					 Y QUE ESTE SE REMARQUE CON UN COLOR ROJO SEPARANDOLO
					 ASI DE EL RESTO DE TEXTO.<BR>

					 LINEA 10:<br> EN ESTA LINEA ES DONDE SUCEDE NUESTRO LLENADO 
					 DE NUESTRO ARRAY, COMO YA SABEMOS, UN ARRAY ES UNA LINEA
					 O VARIABLE QUE ESTA LLENA DE DATOS DE UN SOLO TIPO, LOS CUALES
					 EN ESTE CASO SERAN LOS DIAS DE LA SEMANA INICIANDO ASI CON
					 LA DEFINICION DEL NOMBRE DEL ARRAY ($DIA) SEGUIDO DE UN SIGNO
					 IGUAL Y DE LA PALABRA "array", JUSTO ENSEGUIDA COLOCAREMOS 
					 PARENTESIS QUE  DENTRO DE LO QUE SON ESTAOS TENEMOS LOS DATOS QUE ESTARAN DENTRO DE NUESTRO
					 ARRAY LOS CUALES AL SER TEXTO LLEVA COMILLAS 
					 Y ESTAN SEPARADOS POR COMAS (NO OLVIDEMOS QUE ESTA 
					 LINEA TERMINA CON PUNTO Y COMA).<BR></p>
					 <img src="imagenes/ej2.png" alt="">
<p>
					 LINEA 12:<br> EN ESTA PARTE TENEMOS UN ECHO QUE NOS MOSTRARA
					 EL RESULTADO DE NUESTRO ARRAY COLOCANDO EL NOMBRE DE LA VARIABLE
					 Y DENTRO DE LOS CORCHETES EL NUMERO DE LA OPCION 
					 QUE QUEREMOS QUE SEA VISIBLE COMO ES EN EL CASO DE EL 
					 NUMERO 3 QUE REPRESENTA EL DIA MIERCOLES, O EL NUMERO 6
					 QUE REPRESENTA AL DIA SABADO .<BR>

					 NOTA: SI SE DESEA COLOCAR TEXTO DEN MEDIO DE ESTOS LLAMADOS
					 EL TEXTO DEBE SER SEPARADO DE LOS LLAMADOS 
					 POR MEDIO DE COMAS. <BR>
					 LINEA 13-15: <br>YA EN ESTAS ULTIMAS LINEAS TENEMOS LO QUE SON LOS
					 CIERRES DE EL FONT, EL BODY Y DE NUESTRO HTML DANDO FIN
					 A NUESTRO CODIGO.
					<B></p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>