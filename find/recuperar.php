<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recuperar protocolo</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
   
   <!--style>
      body {background-image: url('tela.jpg');}
       #logo { width:400px;
               height:200px;
               position:absolute;
               top:20%;
               left:600px;
               margin-top:-50px;
               margin-left:-50px;}
       .form-group {
               max-width: 330px;
               padding: 200px;
               margin: 0 auto;}
       label{
           position:absolute;
           top:35%;
           font-size:20px;
           color:#1e365c;
           left:360px;
       }
       .form-group {
               max-width: 330px;
               padding: 200px;
               margin: 0 auto;}
  
       input {
               position: absolute;
               left: 470px;
               top:42%;
               min-width:400px;
               min-height:40px;}
       
             
        button {   
               position:absolute;
               left:60%;
               top:310px;}   
      
        
      
        </style-->
    </head>
    <body>
<!--Logomarca-->
    <div id = "logo"> <img src = "novo.png" width="70%"> </div> 
<!--Formulário-->
    
<form action="processa.php" method="POST">
        
        <label for="protocolo">Digite abaixo o e-mail 
                               Informado no cadastro
                                    para recuperação 
                                      de protocolo
                                                   </label>
	
         
       <fieldset>
              
      
         <label>Email2</label>
			
			<input type="email" name="email" placeholder="Seu e-mail"><br><br>
			<input type="text" name="nome" placeholder=""><br><br>
        </fieldset>
       <button type="submit" class="btn btn-lg btn-success" style="background-color: #90e265;">Enviar</button> 
    </form>
       
       
    </body>
</html>
