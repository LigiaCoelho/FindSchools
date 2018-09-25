<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Confirmação</title>
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
             hr {height: 1px;
                position:absolute;
                top:15%;
                width: 1590px;
                align:center;
                color:#1e365c;}
             h1 {font-size:40px;
                    color:#1e365c;
                    font-family: calibri;
                    position:absolute;
                    top:10%;
                    left:5%;}
             h2 {font-size:35px;
                    color:#1e365c;
                    font-family: calibri;
                    position:absolute;
                    top:20%;
                    left:5%;}
               h3 {
               font-size:25px;
               color:red;
               }
               #responsavel{
               position: absolute;
               width:300px;
               left:5%;
               top:30%;
               }
               #dados_resp {
               font-size: 20px;
               position:absolute;
               left:5%;
               top:35%;
               color:white;
               }

               #aluno{
               position: absolute;
               width:300px;
               left: 600px;
               top:30%;
               }
               #dados_aluno {
               font-size: 20px;
               position:absolute;
               left:600px;
               top:35%;
               color:white;
               }
               #confirmar {   
               position:absolute;
               left:710px;
               top:70%;}   
                      
              #voltar {   
               position:absolute;
               left:725px;
               top:80%;}  
        </style>
            </head>
            <body>
            <h1>Confirmação de Dados</h1>
            <div id = "logo"> <img src = "novo.png" width="70%"> </div> 
            <hr>
            
            <h2>Verifique se os dados digitados estão corretos:</h2>
            
            <?php
		$nome_escola =$_GET["nome_escola"];
        $tel_escola = $_GET['tel_escola'];
        $end_escola = $_GET['end_escola'];
		$turno_escola =$_GET['turno_escola'];
		$vagas =$_GET['vagas'];
		$cidade =$_GET['cidade'];
		
		include_once "conectabd.inc";
            $query = "INSERT INTO findschools.tb_escolas 
           (nome_escola, tel_escola,end_escola ,turno_escola,vagas)
	  values ('$nome_escola', '$tel_escola','$end_escola','$turno_escola','$vagas');";
	  
	  $query = "INSERT INTO findschools.tb_found (cidade)
	  values ('$cidade');";
	  
         $stmt = $conn->prepare($query);
         $stmt->execute();
         
         
	                  
           
			echo "<div id='dadoescola'><h3>Dados da Escola</h3></div>";
			echo "<div id='nome_escola'><p><b>Nome Escola:&nbsp;</b>".$nome_escola."</p>";
			echo "<div id='tel_escola'><p><b>Telefone:&nbsp;</b>".$tel_escola."</p>";
			echo "<div id='end_escola'><p><b>Endereço:&nbsp;</b>".$end_escola."</p>";
			echo "<div id='turno_escola'><p><b>Turno:&nbsp;</b>".$turno_escola."</p>";
			echo "<div id='vagas'><p><b>Vagas:&nbsp;</b>".$vagas."</p>";
			echo "<div id='cidade'><p><b>Cidade:&nbsp;</b>".$cidade."</p>";
            echo "<div id='confirmar'><a href='confescola.php?nome_escola=.$nome_escola.'><button type='submit' class='btn btn-lg btn-success' style='background-color: #90e265;'>Confirmar</button></a></div>";
         
          
          ?>
<div id="voltar"><button type="button" class="btn btn-lg btn-success" onclick="history.go(-1)"style="background-color: #90e265;">Voltar</button></div>
    

</body>
</html>
           