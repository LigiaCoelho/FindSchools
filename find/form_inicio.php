<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Find Schools</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
   
   <style>
       body {background-image: url('tela.jpg');}
       #logo { width:400px;
               height:200px;
               position:absolute;
               top:10%;
               left:675px;
               margin-top:-50px;
               margin-left:-50px;}
       .form-group {
               max-width: 330px;
               padding: 200px;
               margin: 0 auto;}
  
       .form-control {
               position: absolute;
               width:300px;
               padding: 10px;
               font-size: 15px;
               left: 625px;}
           
        #pesquisar {   
               position:absolute;
               left:700px;}   
        
      
        </style>
    </head>
    <body>
<!--Logomarca-->
    <div id = "logo"> <img src = "novo.png" width="70%"> </div> 
<!--Formulário-->
<?php
    include_once "conectabd.inc";
    $query ="SELECT cidade, ano_letivo, turno FROM tb_found";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt-> fetchall( PDO::FETCH_ASSOC );
?>
    
    <form class="form-group" action="pesquisa.php" method="GET">
       
        <select class="form-control form-control-lg" name="cidade" required>
            <option value="" hidden>Cidade</option>
           <?php foreach( $result as $row ){ ?>
        <option value="<?php echo $row['cidade'];?>"><?php echo $row['cidade'];?></option>
           <?php } ?>
        </select>
        </br>
        </br>
        <select class="form-control form-control-lg" name="ano_letivo" required>
            <option value="" hidden>Ano</option>
             <?php foreach( $result as $row ){ ?>
        <option value="<?php echo $row['ano_letivo'];?>"><?php echo $row['ano_letivo'];?></option>
           <?php } ?>     
        </select>
        </br>
        </br>           
        <select class="form-control form-control-lg" name="turno" required>
            <option value="" hidden>Turno</option>
             <?php foreach( $result as $row ){ ?>
        <option value="<?php echo $row['turno'];?>"><?php echo $row['turno'];?></option>
           <?php } ?>  
        </select>
        </br>
        </br>
        </br>
        </br>
        <div id = "pesquisar">  <button type="submit" class="btn btn-lg btn-success" style="background-color: #90e265;">Pesquisar</button> </div>
    </form>
<div id = "acompanhar"><a href="acompanhar.php"><button type="button" class="btn btn-danger btn-lg btn-block" style="background-color:#e9482b">Acompanhar Solicitação</button> </a></div>
    </div>
        
       
    </body>
</html>
