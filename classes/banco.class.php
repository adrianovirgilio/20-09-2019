<?php
    class Banco{
        private $servidor;
        private $usuario;
        private $senha;
        private $banco;
        private $pdo;
     
        public function __construct()
        {
            $this->servidor = "localhost";
            $this->usuario = "root";
            $this->senha = "usbw";
            $this->banco = "banco_php";
        }


        public function conectar(){
            try{              
                $pdo = new PDO("mysql:host=" .$this->servidor .":3307;dbname=". $this->banco,$this->usuario,$this->senha);
                return $pdo;
            }catch(PDOException $ex){
                echo $ex;
            }
        } 
        
        
    }

   
    


?>