<!DOCTYPE html>

<html>
    <head>
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Consulta</title>
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
                    left:15%;}
            hr {height: 1px;
                position:absolute;
                top:15%;
                width: 1590px;
                align:center;
                color:#1e365c;}
            table {position:absolute;
                   top:20%;
                   left:30%;
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
            #prematricula {   
               position:absolute;
               left:575px;
               top:60%;}   
                      
              #voltar {   
               position:absolute;
               left:600px;
               top:70%;}   
                                     
        </style>
    </head>
    <body>
        
       <div id = "logo"> <img src = "novo.png" width="70%"> </div> 
       <hr>
<?php 

if (isset($_GET['id'])){
    
 include_once "conectabd.inc";
 $query = "SELECT id, escola, endereco, telefone, turno,vagas FROM tb_found
                      WHERE id = :id;";
 
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
	
	$stmt->execute();
   
          echo "<table>";

	 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
                  echo "<h1>".$row["escola"]."</h1>";
                  echo "<tr>";
                  echo "<td>" .$row["endereco"]."</td>";
                  echo "</tr>";	
		  echo "<td>Telefone:" .$row["telefone"]. "</td>";
                  echo "</tr>";	
                  echo "<tr>";
                  echo "<td>" . $row["turno"]. ":</td>";
                  echo "<td>" . $row["vagas"]. "</td>";
                  echo "</tr>";
	  }
           echo "</table>";
 }       
	 
           ?> 
 <div id="prematricula"><a href="cadastro.html"><button type="button" class="btn btn-lg btn-success" style="background-color: #90e265;">Pré Matrícula</button></a></div>
 <div id="voltar"><button type="button" class="btn btn-lg btn-success" onclick="history.go(-1)"style="background-color: #90e265;">Voltar</button></div>
    
        
         </body>
</html>     