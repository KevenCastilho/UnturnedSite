<html><head><title>rank</title></head>
<body>
<?
// Mensagens de Erro
$msg[0] = "Conexão com o banco falhou!";
$msg[1] = "Não foi possível selecionar o banco de dados!";

// Fazendo a conexão com o servidor MySQL
$conexao = mysql_pconnect("localhost","unturned","password") or die($msg[0]);
mysql_select_db("unturned",$conexao) or die($msg[1]);


// Colocando o Início da tabela
?>
<table border="1"><tr>
   <td><b>Rank</b></td>
   <td><b>Nome</b></td>
   <td><b>Points</b></td>
</tr>
<?

// Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML
$query = "SELECT points,lastDisplayName FROM ranks ORDER BY points";
$resultado = mysql_query($query,$conexao);
while ($linha = mysql_fetch_array($resultado)) {
   ?>
   <tr>
      <td><? echo $linha['rank']; ?></td>
      <td><? echo $linha['lastDisplayName']; ?></td>
      <td><? echo $linha['points']; ?></td>
   </tr>
   <?
}
?>
</table>
</body>
</html>