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
            
           $nome_resp =$_GET["nome_resp"];
           $cpf_resp = $_GET['cpf_resp'];
           $dn_resp = $_GET['dn_resp'];
           $tel_resp = $_GET['tel_resp'];
           $end_resp = $_GET['end_resp'];
           $email_resp = $_GET['email_resp'];
           $nome_aluno = $_GET['nome_aluno'];
           $cpf_aluno = $_GET['cpf_aluno'];
           $dn_aluno = $_GET['dn_aluno'];
           $grau = $_GET['grau'];
           
            include_once "conectabd.inc";
            $query = "INSERT INTO findschools.tb_pessoa 
           (nome_resp, cpf_resp, dn_resp, tel_resp, email_resp, nome_aluno, cpf_aluno, dn_aluno, grau)
	  values ('$nome_resp', '$cpf_resp','$dn_resp','$tel_resp', '$email_resp','$nome_aluno','$cpf_aluno', '$dn_aluno', '$grau' );";
	  

         $stmt = $conn->prepare($query);
         $stmt->execute();
         
         
	                  
           
          echo "<div id='responsavel'><h3>Dados do Responsável</h3></div>";
          echo "<div id='dados_resp'><p><b>Nome:&nbsp;</b>".$nome_resp."</p>";
          echo "<p><b>CPF:&nbsp;</b>".$cpf_resp."</p>";
          echo "<p><b>Data de Nascimento:&nbsp;</b>".$dn_resp."</p>";
          echo "<p><b>Telefone:&nbsp;</b>".$tel_resp."</p>";
          echo "<p><b>Endereço:&nbsp;</b>".$end_resp."</p>";
          echo "<p><b>E-mail:&nbsp;</b>".$email_resp."</p></div>";
    
          echo "<div id='aluno'><h3>Dados do Aluno</h3></div>";
          echo "<div id='dados_aluno'><p><b>Nome:&nbsp;</b>".$nome_aluno."</p>";
          echo "<p><b>CPF:&nbsp;</b>".$cpf_aluno."</p>";
          echo "<p><b>Data de Nascimento:&nbsp;</b>".$dn_aluno."</p>";
          echo "<p><b>Grau de Parentesco:&nbsp;</b>".$grau."</p></div>";
          
          echo "<div id='confirmar'><a href='protocolo.php?cpf_resp=.$cpf_resp.'><button type='submit' class='btn btn-lg btn-success' style='background-color: #90e265;'>Confirmar</button></a></div>";
         
          
          ?>
<div id="voltar"><button type="button" class="btn btn-lg btn-success" onclick="history.go(-1)"style="background-color: #90e265;">Voltar</button></div>
    

</body>
</html>