<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pesquisa</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
       
        <style>
            body {background-image: url('tela.jpg');}
            #logo { width:300px;
                    height:100px;
                    position:absolute;
                    top:10%;
                    left:60%;
                    margin-top:-50px;
                    margin-left:-50px;}
            h1 {font-size:40px;
                    color:#1e365c;
                    font-family: calibri;
                    position:absolute;
                    top:10%;
                    left:40%;}
            hr {height: 1px;
                position:absolute;
                top:15%;
                width: 1590px;
                align:center;
                color:#1e365c;}
            table {position:absolute;
                   top:20%;
                   left:40%;
                   border-color: #439dbb;
                   border-style: none; 
  
                   }
            th {font-size:35px;
                    color:#e9482b;
                    font-family: calibri;
                    }
            td {font-size:20px;
                    color:#1e365c;
                    font-family: calibri;
                    
            }
          button {   
               position:absolute;
               left:650px;
               top:70%;}   
          #link{
              font-size: 20px;
              color:red;
          }
        </style>
    </head>
    <body>
        
       <div id = "logo"> <img src = "novo.png" width="70%"> </div> 
       <hr>
<?php 

 if (isset($_GET['cidade'])&&($_GET['ano_letivo'])&& ($_GET['turno'])){
	 
	include_once "conectabd.inc";
	$query = "SELECT id, cidade, ano_letivo, turno, escola, vagas FROM tb_found 
			  WHERE cidade = :cidade OR ano_letivo = :ano_letivo OR turno = :turno;";
	$stmt = $conn->prepare($query);
	$stmt->bindParam(':cidade', $_GET['cidade'], PDO::PARAM_STR);
	$stmt->bindParam(':ano_letivo', $_GET['ano_letivo'], PDO::PARAM_INT);
	$stmt->bindParam(':turno', $_GET['turno'], PDO::PARAM_STR);
	$stmt->execute();
	echo "<table>";
	echo "<tr><th>Escola</th><th>&nbsp;</th><th>Vagas</th><th></th></tr>";
	// busca os dados lidos do banco de dados
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		
		$ano_letivo = $row["ano_letivo"];
		echo "<h1>".$row["cidade"]."</h1>";
		echo "<tr>";
		echo "<td>" . $row["escola"] . "</td>";
                echo "<td>&nbsp;</td>";
		echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["vagas"] . "</td>";
                echo "<td><a href='consulta_escola.php?id={$row['id']}'><div id='link'>Ver Detalhes</div></a></td>";
		echo "</tr>";		
	}
		echo "</table>";
}
	 
?>  
  <a href="form_inicio.php"><button type="submit" class="btn btn-lg btn-success" style="background-color: #90e265;">Voltar</button></a>
        
         </body>
</html>
	

