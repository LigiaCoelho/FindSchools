<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
		$email = $_POST['email'];
		include_once "conectabd.inc";
    $query ="SELECT cpf_resp, nome_resp FROM tb_pessoa WHERE email_resp = '${email}'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt-> fetchall( PDO::FETCH_ASSOC );
	$nome = $result[0]['nome_resp'];
	$cpf = $result[0]['cpf_resp'];
	exit(var_dump(array($nome, $cpf, "Olá $nome, Seu cpf é : $cpf")));
	
		//phpinfo();exit();
		//$mensagem = $_POST['mensagem'];
		
        require 'vendor/autoload.php';

        
// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername('findschools123@gmail.com')
  ->setPassword('qaz123df')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Recuperação de protocolo'))
  ->setFrom(['naoresponda@findschools.com' => 'Find Schools'])
  //->setTo([strtolower($email) => ucwords($nome)])
  ->setTo([strtolower($email)])
  ->setBody("Olá $nome, Seu cpf é : $cpf");
  
  
  

// Send the message
$result = $mailer->send($message);

        //$response = $sg->client->mail()->send()->post($mail);
        echo "Mensagem enviada com sucesso";
		
        ?>
    </body>
</html>
