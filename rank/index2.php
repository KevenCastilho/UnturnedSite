<html>
  <head>
    <title>rank</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
	body{
		font-family: 'Roboto', sans-serif;
	}
      table {
          border-collapse: collapse;
          width: 100%;
 
      }
      th, td {
          text-align: left;
          padding: 8px;text-align: center;
      }
      tr:nth-child(even){background-color: #ffffff}
      th {
          background-color: #1CC7E3;
          color: white;
      }
.ouro {
	/*color:#FFD700;
	text-shadow: 0 0 2px #000000;
	font-weight: bold;*/
	text-shadow: 1px 0px 0px Gold, -1px 0px 0px Gold, 0px 1px 0px Gold, 0px -1px 0px Gold; font-weight: bold; color: #FFF;
}
.prata {
	/*color:#C0C0C0;
	text-shadow: 0 0 2px #000000;
	font-weight: bold;*/
	text-shadow: 1px 0px 0px Silver, -1px 0px 0px Silver, 0px 1px 0px Silver, 0px -1px 0px Silver; font-weight: bold; color: #FFF;
}
.bronze {
	/*color:#FFFFFF;
	text-shadow: 0 0 1px #F4A460;
	font-weight: bold;*/
	text-shadow: 1px 0px 0px SandyBrown, -1px 0px 0px SandyBrown, 0px 1px 0px SandyBrown, 0px -1px 0px SandyBrown; font-weight: bold; color: #FFF;
}
.outro {
 
	/*text-shadow: 0 0 4px #000000;
	font-weight: bold;
	color:#03FFEE;*/
	text-shadow: 1px 0px 0px DeepSkyBlue, -1px 0px 0px DeepSkyBlue, 0px 1px 0px DeepSkyBlue, 0px -1px 0px DeepSkyBlue; font-weight: bold; color: #FFF;
}
.extra {
 
	/*text-shadow: 0 0 4px #000000;
	font-weight: bold;
	color:#03FFEE;*/
	text-shadow: 1px 0px 0px red, -1px 0px 0px red, 0px 1px 0px Black, 0px -1px 0px red; font-weight: bold; color: #FFF;
}
.staff-member {
 
	/*text-shadow: 0 0 4px #000000;
	font-weight: bold;
	color:#03FFEE;*/
	text-shadow: 1px 0px 0px DarkOrchid, -1px 0px 0px DarkOrchid, 0px 1px 0px DarkOrchid, 0px -1px 0px DarkOrchid; font-weight: bold; color: #FFF;
}
 
.bpg {
	-moz-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	-webkit-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	background-color:#79bbff;
	-webkit-border-top-left-radius:6px;
	-moz-border-radius-topleft:6px;
	border-top-left-radius:6px;
	-webkit-border-top-right-radius:6px;
	-moz-border-radius-topright:6px;
	border-top-right-radius:6px;
	-webkit-border-bottom-right-radius:6px;
	-moz-border-radius-bottomright:6px;
	border-bottom-right-radius:6px;
	-webkit-border-bottom-left-radius:6px;
	-moz-border-radius-bottomleft:6px;
	border-bottom-left-radius:6px;
	text-indent:0;
	border:1px solid #84bbf3;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:33px;
	line-height:33px;
	width:76px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #528ecc;
}.bpg:hover {
	background-color:#378de5;
}.bpg:active {
	position:relative;
	top:1px;
}
.bpgactive {
	-moz-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	-webkit-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	background-color:#79bbff;
	-webkit-border-top-left-radius:6px;
	-moz-border-radius-topleft:6px;
	border-top-left-radius:6px;
	-webkit-border-top-right-radius:6px;
	-moz-border-radius-topright:6px;
	border-top-right-radius:6px;
	-webkit-border-bottom-right-radius:6px;
	-moz-border-radius-bottomright:6px;
	border-bottom-right-radius:6px;
	-webkit-border-bottom-left-radius:6px;
	-moz-border-radius-bottomleft:6px;
	border-bottom-left-radius:6px;
	text-indent:0;
	border:1px solid #84bbf3;
	display:inline;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:33px;
	line-height:33px;
	width:76px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #528ecc;
}.bpgactive:hover {
	background-color:#378de5;
}.bpgactive:active {
	position:relative;
	top:1px;
}
    </style>
  </head>
<body>
<?php
  $num_registro = 10;
  $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 0;
  if(empty($pagina)){
    $pagina = 1;
  }
  $inicio = ($pagina * $num_registro) - $num_registro;
  $mysqli = new mysqli("localhost", "unturned", "password", "unturned");
  $resultado = $mysqli->query("SELECT points,lastDisplayName FROM ranks ORDER BY points DESC LIMIT $inicio, $num_registro");
  $numCont = $resultado->num_rows;
  $sqlTotal = $mysqli->query("SELECT points,lastDisplayName FROM ranks");
  $numTotal = $sqlTotal->num_rows;
  $coluna = $inicio+1; 
  $classe = "extra";
  if($resultado) {
      echo '<table border="1"><tr><th>Posição</th><th>Rank</th><th>Points</th><th>Nome</th></tr>';
      while($row2 = $resultado->fetch_row() ) {
        echo '<tr>';
        foreach($row2 as $key=>$value) {
          if($key == 'points'){
			if($value >= 100000){
				$classe = "staff-member";
				echo '<td class="staff-member"><img width="25px" src="./rank/original/'.$coluna.'.png"/></td>';
				$coluna++;
				echo '<td class="staff-member">STAFF Member</td>';
			}elseif($value >= 500){
	      $classe = "ouro";
              echo '<td class="ouro"><img width="25px" src="./rank/ouro/'.$coluna.'.png"/></td>';
              $coluna++;
              echo '<td class="ouro">Membro de Ouro</td>';
            }elseif($value >= 200){
	      $classe = "prata";
              echo '<td class="prata"><img width="25px" src="./rank/prata/'.$coluna.'.png"/></td>';
              $coluna++;
              echo '<td class="prata">Membro de Prata</td>';
            }elseif($value >=100){
	      $classe = "bronze";
              echo '<td class="bronze"><img width="25px" src="./rank/bronze/'.$coluna.'.png"/></td>';
              $coluna++;
              echo '<td class="bronze">Membro de Bronze</td>';
            }else{
	      $classe = "outro";
              echo '<td class="outro"><img width="25px" src="./rank/original/'.$coluna.'.png"/></td>';
              $coluna++;
              echo '<td class="outro">Desconhecido</td>';
            }
          }
          echo '<td class="',$classe,'">',$value,'</td>';
        }
        echo '</tr>';
      }
      echo '</table><br />';
    }
 
  if($numCont > 0){
    if($numTotal>$num_registro){
      $totalPag = Ceil($numTotal / $num_registro);
      echo '<a href="?pagina=1" class="bpg"> Primeiro </a>&nbsp;&nbsp;';
      for($i=1; $i <= $totalPag; $i++){
        if($pagina == $i){
          echo "<a href='#' class='bpg'>&nbsp; ".$i." &nbsp;</a>&nbsp;&nbsp;";
        }else{
          $indice = "&pagina=".$i;
          echo '<a href="?'.$indice.'" class="bpg">&nbsp; '.$i.' &nbsp;</a>&nbsp;&nbsp;';
        }
      }
      echo '<a href="?pagina='.$totalPag.'" class="bpg">&nbsp; Ultimo &nbsp;</a>';
    }
  }
 
  $mysqli->close();
?>
</table>
</body>
</html>