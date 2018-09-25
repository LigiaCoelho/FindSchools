<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Acompanhar Solicitação</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
   
   <style>
      body {background-image: url('tela.jpg');}
       #logo { width:400px;
               height:200px;
               position:absolute;
               top:20%;
               left:565px;
               margin-top:-50px;
               margin-left:-50px;}
       .form-group {
               max-width: 330px;
               padding: 200px;
               margin: 0 auto;}
       label{
           position:absolute;
           top:41%;
           font-size:35px;
           color:#1e365c;
           left:350px;
       }
       .form-group {
               max-width: 330px;
               padding: 200px;
               margin: 0 auto;}
  
       input {
               position: absolute;
               left: 525px;
               top:42%;
               min-width:400px;
               min-height:40px;}
       
             
        button {   
               position:absolute;
               left:63%;
               top:310px;}   
        p{
            position:absolute;
            top:350px;
            left:40%;
            font-size: 25px;
            color: red;
        }
        
      
        </style>
    </head>
    <body>
<!--Logomarca-->
    <div id = "logo"> <img src = "novo.png" width="70%"> </div> 
<!--Formulário-->
    
    <form class="form-group" action="acomp.php" method="GET">
        
        <label for="protocolo">Protocolo:</label>
         
        <input clas="form-control form-control-lg" type="text" name="protocolo"> 
        <a href="recuperar.php"><p>Esqueci meu protocolo</p></a>
         
 
     
      
       
      <button type='submit' class='btn btn-lg btn-success' style='background-color: #90e265;'>OK</button>
              
    </form>
    </body>
</html>

