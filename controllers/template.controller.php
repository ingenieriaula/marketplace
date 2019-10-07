<?php 

class Template {

	public function getTemplate (){

		/* 
		la funcion include permite incluir todo el contenido de un archivo. 
		Tambien existe su simil requiere, include_once y 
		requiere_once: incluye o requiere una sola vez
		el requiere: cuando hay un error trunca todo el contenido. 
		include: cuando hay un error trunca solo una parte del contenido.
		*/

		include ("views/template.php");
	
	}
}