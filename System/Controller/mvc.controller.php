<?php

require 'System/Model/user.class.php';

class mvc_controller {

  function login(){
       $pagina = $this->load_template('Login');
       $html = $this->load_page('System/views/default/modules/m.login.php');
       $pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);
       $this->view_page($pagina);
     }

     function signUPPTC(){
       $pagina = $this->load_template('Registro de Maestro');
       $html = $this->load_page('System/views/default/modules/m.signUPPTC.php');
       $pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);
       $this->view_page($pagina);
     }

     function signUPAlumno(){
       $pagina = $this->load_template('Registro de Alumno');
       $html = $this->load_page('System/views/default/modules/m.signUpAlumno.php');
       $pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);
       $this->view_page($pagina);
     }

     function editPTC(){
       $pagina = $this->load_template('Modificar PTC');
       $html = $this->load_page('System/views/default/modules/m.editPTC.php');
       $pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);
       $this->view_page($pagina);
     }

     function editAlumno(){
       $pagina = $this->load_template('Modificar Alumno');
       $html = $this->load_page('System/views/default/modules/m.editAlumno.php');
       $pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);
       $this->view_page($pagina);
     }

     function load_template($title='Sin Titulo'){
   		$pagina = $this->load_page('System/views/default/page.php');
   		$header = $this->load_page('System/views/default/sections/s.header.php');
   		$pagina = $this->replace_content('/\#HEADER\#/ms' ,$header , $pagina);
   		$pagina = $this->replace_content('/\#TITLE\#/ms' ,$title , $pagina);
       $section = $this->load_page('System/views/default/sections/s.section.php');
   		$pagina = $this->replace_content('/\#SECTION\#/ms' ,$section , $pagina);
   		return $pagina;
   	}

     private function replace_content($in='/\#CONTENIDO\#/ms', $out,$pagina)
   	{
   		 return preg_replace($in, $out, $pagina);
   	}

     private function load_page($page)
   	{
   		return file_get_contents($page);
   	}

     private function view_page($html)
   	{
   		echo $html;
   	}

}
?>
