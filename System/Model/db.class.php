<?php
  class database {
    private $conn;
      /* Open connection with db */
      public function conectar(){
        if(!isset($this->conn)){
          $this->conn = (mysql_connect("localhost","user","pass")) or die(mysql_error());
          mysql_select_db("bd",$this->conn) or die(mysql_error());
        }
      }

      public function consulta($sql){
        $resultado = mysql_query($sql,$this->conexion);
        if(!$resultado){
          echo 'MySQL Error: ' . mysql_error();
          exit;
        }
        return $resultado;
      }

      public function update($sql){
      }

     /* close conection with db */
     public function disconnect(){
       mysql_close();
     }
   }
?>
