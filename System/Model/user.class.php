<?
  require_once "db.class.php";

  /**
   *
   */
  class user extends db
  {
    //iniciar sesión
    function userLogi($claveUser, $pass){
      //conexion a la base de datos
      $this->conectar();
      $query = $this->consulta("SELECT * FROM USER WHERE clave='$claveUser' and contraseña='$pass';");
      $this->disconnect();
      if($this->usuario($query) > 0){
        //se llenan los datos en un array
        while ( $tsArray = $this->fetch_assoc($query) )
        $data[] = $tsArray;
        //A la pagina que corresponda
        if($data[5] == 1){
          //Admin
          return 1;
        }else if($data[5] == 2){
          //PTC
          return 2;
        }else if($data[5] == 3){
          //Alumno
          return 3;
        }
      }else{
        return 0;
      }
    }

    //Insertar PTC
    function insertarPTC(){
      this.conectar();
      $query =
    }

    //Consultar la bd
    function consulting($){

    }

    //Editar
    function editarUser(){

    }

    //Eliminar
  }

?>
