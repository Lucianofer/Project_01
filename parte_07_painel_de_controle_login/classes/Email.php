<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class Email
{
    private $mailer;

    public function __construct($host,$username,$senha,$name)
    {
        //Load Composer's autoloader
        require 'vendor/autoload.php';

        //Create an instance; passing `true` enables exceptions
        $this->mailer = new PHPMailer(true);


        //Server settings
        $this->mailer->SMTPDebug = 0;                      //Enable verbose debug output
        $this->mailer->isSMTP();                                            //Send using SMTP
        $this->mailer->Host       = $host;                     //Set the SMTP server to send through
        $this->mailer->SMTPAuth   = true;                                   //Enable SMTP authentication
        $this->mailer->Username   = $username;                     //SMTP username
        $this->mailer->Password   = $senha;                               //SMTP password
        $this->mailer->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $this->mailer->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $this->mailer->setFrom($username, $name);

        //Content
        $this->mailer->isHTML(true);                                  //Set email format to HTML
        $this->mailer->CharSet = "UTF-8";
    }

    public function adicionarEndereco($email,$nome){
        $this->mailer->addAddress($email,$nome);
    }

    public function formatarEmail($info){
        $this->mailer->Subject = $info['assunto'];
        $this->mailer->Body    = $info['corpo'];
        $this->mailer->AltBody = strip_tags($info['corpo']);
    }

    public function enviarEmail(){
        if($this->mailer->send()){
            return true;
        }else{
            return false;
        }
    }        

    
}


?>