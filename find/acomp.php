<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Protocolo</title>
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
               position:absolute;
               font-size:25px;
               color:#1e365c;
               top:30%;
               left:5%;
               }
               h4 {
               position:absolute;
               font-size:25px;
               color:red;
               top:40%;
               left:5%;
               }
                      
              #inicio {   
               position:absolute;
               left:550px;
               top:400px;}  
              
        </style>
            </head>
            <body>
            <h1>Acompanhamento</h1>
            <div id = "logo"> <img src = "novo.png" width="70%"> </div> 
            <hr>
            
            
            <?php
            
 
             
            echo "<h2><b>Protocolo:&nbsp;20171128225608</b></b><h2>";
          
            echo "<h3><b>Período de Entrega dos Documentos na Escola Selecionada 01/01/2018 a 30/01/2018</b></h3>";
            echo "<h4><b>Atenção: A matrícula só será efetivada 
após a entrega dos documentos necessários
na escola na data informada acima. Caso a matrícula 
não seja efetuada no período acima o aluno perderá 
o registro de pré-matrícula.
</b></h4>";    
            ?>

 <div id="inicio"><a href="form_inicio.php"><button type="button" class="btn btn-lg btn-success"style="background-color: #90e265;">Início</button></a></div>
    

</body>
</html>

