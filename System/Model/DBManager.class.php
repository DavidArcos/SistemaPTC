<?php
  include_once "../core/GLOBALS.php";
  require REDBEAN;

  R::setup('mysql:host='.HOSTNAME.';dbname='.DBNAME,DBUSER,DBPASS);
?>
