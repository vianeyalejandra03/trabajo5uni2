<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ConstruWeb</title>
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
			<h3>Mis tres Ejercicios de PHP</h3>
			<article class="serv1">
				<h4>PRIMER EJERCICIO:OPERADORES LOGICOS</h4>
				
				<p><b>
				¿QUE SON LOS OPERADORES LOGICOS?
				Segun nuestro libro de actividades:Los operadores lógicos  
				son usados para evaluar varias comparaciones, combinando
				los posibles valores de estas. 
				Y segun la internet:Los operadores lógicos nos
				 proporcionan un resultado a partir de que
				  se cumpla o no una cierta 
				condición, producen un resultado booleano, y 
				sus operandos son también valores
				 lógicos o asimilables a ellos.
				 Entonces... <H4>¿QUE SE ENTIENDE ?</H4>
				 UN OPERADOR LOGICO SE ENTIENDE COMO AQUELLOS CARACTERES QUE NOS DEFINEN UNA 
				 COMPARACION ENTRE DOS DATOS O MAS PROPORCIONANDONOS ASI UN RESULTADO BOOLEANO (CIERTO O FALSO)
				 EL CUAL NOS AYUDA PARA REALIZAR EVALUACIONES EN NUESTRAS ESTRUCTURAS (FOR,WHILE,ETC).
</p>
				<h4>Conclusiones </h4>
				<p>
				Como un repaso rapido:
				OPERADOR:QUE REALIZA CIERTA OPERACION DENTRO NUESTRA ESTRUCTURA O CODIGO
				LOGICO: QUE ESTA EN CASOS DE DECISION LOGICA COMO POR EJEMPLO: 
				8 ES MAYOR A 1 EL CUAL TRADUCIDO A CODIGO SERIA 8>1 Y VEMOS
				QUE ESTA EVALUACION ES CORRECTA EL CUAL NOS LANZARIA UN BOOLEANO DE VERDADERO
				 O OTRO EJEMPLO COMO: VARIABLE A CON VALOR DE 3
				 ES IGUAL A VARIABLE B CON VALOR DE 4 EL CUAL TRADUCIDO A CODIGO SERIA  A==B EL CUAL 
				 VEMOS QUE ESTA EVALUACION ES INCORRECTA Y NOS ARROJARIA UN BOOLEANO DE FALSO.
				 </b></p>
				<figure>
					<img src="imagenes/logico.png" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>SEGUNDO EJERCICIO:ARRAYS</h4>
				<b><p>¿QUE ES UN ARRAY? SEGUN INTERNET:Un array, es un tipo de dato 
				estructurado que permite almacenar un conjunto de datos homogeneo, 
				es decir, todos ellos del mismo tipo y relacionados. Cada uno de
				 los elementos que componen un vector pueden ser de tipo 
				simple como caracteres, entero o real, o de tipo compuesto
				 o estructurado como son vectores, estructuras, listas..
				 lo cual podemos definir como una variable que guarda multiples datos pero 
				 OJO estos deben ser del mismo tipo por lo tanto si estas usando numeros 
				 no puedes colocarle letras.
				</p>
				<img src="imagenes/array1.png" alt="">

				<h4>Conclusiones </h4>
				<p>
				como repaso rapido:
				EL ARRAY ES COMO UN TREN QUE TIENE VAGONES Y DENTRO DE ESOS VAGONES
				SE GUARDA INFORMACION, PERO TODA LA INFORMACION QUE LLEVE NUESTRO TREN (ARRAY)
				DEBE SER DEL MISMO TIPO ASI COMO LO ES POR EJEMPLO UN TREN QUE LLEVE PUROS
				 PASAJEROS (TRADUCIDOS A CARACTERES) Y OTRO TREN QUE LLEVE PUROS MATERIALES
				 DE CONSTRUCCION (TRADUCIDOS COMO ENTEROS).
</b></p>
				<figure>
					<img src="imagenes/array.png" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>TERCER EJERCICIO:FOR</h4>
				<b><p>¿QUE ES LA ESTRUCTURA FOR?
				El bucle for o ciclo for es una estructura de control en programación
				 en la que se puede indicar de antemano el número mínimo de
				  iteraciones que la instrucción realizará
				  OTRO CONCEPTO SERIA: en que el for es una estructura que define desde un principio
				  una variable que sera nuestro contador y el cual tiene un limite y el como este empezara
				  a ejecutarse si este disminuira o aumentara cierta cantidad que tambien
				  se puede colocar.
				</p>
				<img src="imagenes/for1.png" alt="">

				<h4>Conclusiones </h4>
				<p>
				como repaso rapido: UNA ESTRUCTURA FOR COMO DIFERENCIA DE UN MIENTRAS O 
				UN REPETIR ES QUE ESTE EVALUACIONLA CONDICION 
				DESDE UN INICIO SIN LA NECESIDAD QUE PASE MINIMO UNA VEZ, COMO UN EJEMPLO
				PARA COMPRENDER MEJOR , IMAGINA QUE LA ESTRUCTURA FOR ES ALGUIEN QUE EVALUA 
				CIERTO TIPO DE COSAS PERO PARA LOGRAR EVALUARLO NECESITA LAS CARACTERISTICAS
				QUE VA A EVALUAR COMO LO SON: -EL INDICE O EL OBJETO A EVALUAR -DESPUES EL
				LIMITE QUE TIENE PARA EVALUAR A NUESTRO OBJETO Y POR ULTIMO - SI ESTE VA A IR CAMBIANDO CADA 
				QUE REVISE .
</b></p>
				<figure>
					<img src="imagenes/for.png" alt="">
				</figure>
			</article>
		</section>
		
		<?php
			include "includes/footer.php";
		?>
</body>
</html>