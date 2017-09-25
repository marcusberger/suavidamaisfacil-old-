<?php
  $servidor = ""host=ec2-107-20-188-239.compute-1.amazonaws.com"";
  $port = "5432";
  $dbname = "d2d21aou17g1i5";
  $usuario = "ppxwnsjkjlvtfb";
  $senha ="6a953ec26f1503028cfed358550049670650a0546d48531a7dd1f8fac74e4419";

  $conexao = pg_connect($servidor, $port, $dbname, $usuario, $senha) or die ("Não foi possível conectar ao servidor PostGreSQL");
  echo "Conexão efetuada com sucesso!!";

  //Configurar Timezone
    date_default_timezone_set('America/Sao_Paulo');

?>
