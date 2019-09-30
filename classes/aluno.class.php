<?php
    require_once("banco.class.php");
    Class Aluno{
        private $conexao;
        private $matricula;
        private $nome;

        public function __construct()
        {
            $this->conexao = new Banco();            
        }

        public function __set($atributo, $valor){
            $this->$atributo  = $valor;
        }

         public function __get($atributo){
    
            return $this->$atributo;
        }
        
        public function inserirAluno($dados){
        try{
          $this->matricula = $dados['matricula'];
          $this->nome = $dados['nome'];
          $robo = $this->conexao->conectar()->prepare("INSERT INTO
                                    tabela_aluno(matricula,nome)VALUES(?,?);");
          $robo->bindParam(1,$this->matricula);
          $robo->bindParam(2,$this->nome);  
          if($robo->execute()){
                return 'ok';
          }else{
            return 'erro';
          }
         }catch(PDOException $ex){
                return 'Erro:' .$ex->getMessage();
             }

        }// Fim do método inserirAluno()

        public function selecionarAlunos(){
            try{
                $sql = "SELECT * FROM tabela_aluno";
                $busca = $this->conexao->conectar()->prepare($sql);
                $busca->execute();
                return $busca->fetchAll(PDO::FETCH_OBJ);
            }catch(PDOException $erro){
                echo "Erro:" . $erro->getMessage();
            }
           
        }

        

       
       
    }

?>