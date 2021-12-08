<?php

class db {

  //host
  private $host = 'localhost';
  //usuario
  private $usuario = 'root';
  //senha
  private $senha = '';
  //banco de dados
  private $database ='twitter_clone';

  public function conecta_mysql(){

    //criar conexao
   $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

    //ajustar o charset de comunicacao entre a aplicacao e o banco de dados
    mysqli_set_charset($con, 'utf8');

    //verificar se houve erro de conexao
    if(mysqli_connect_error()){
      echo 'Houve um erro ao tentar se conectar ao banco de dados'.mysqli_connect_error();
    }

    return $con;
  }

}


?>