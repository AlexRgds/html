<?php
    require_once __DIR__  . "../../vendor/autoload.php";

    class Cidade {
        
        private $cidade;

        /**
         * Get the value of cidade
         */
        public function getCidade()
        {
                return $this->cidade;
        }

        /**
         * Set the value of cidade
         */
        public function setCidade($cidade): self
        {
                $this->cidade = $cidade;

                return $this;
        }

        //Instanciar a Classe de Conexao com o Banco de dados
        public function __construct(){
            $this->con = new Conexao();
        }

        //Gravar no Banco de dados
        public function  inserirCidade($dados) {
            try{

                $this->cidade = $dados['cidade'];

                if(empty(trim($this->cidade))){
                    //echo "<script> alert('campo nome em branco'); windows.location.href='../View/cliente.php' </script>";
                    echo "<html> <div class='alert alert-danger alert-dismissible fade show' role='alert'> Campo cidade em branco <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div></html>";
                    
                }else{
                    $cst = $this->con->conectar()->prepare("INSERT INTO cidade (cidade) VALUES(:cidade)");
                    $cst->bindParam(":cidade", $this->cidade, PDO::PARAM_STR);


                    if($cst->execute()){
                        return 'Ok';
                    }else{
                        echo 'Não deu';
                    }
                }

                
            }
            catch(PDOException $ex){
                echo $ex;
            }
        }

        //Selecionar  no Banco de dados
        public function  selecionarCidade() {
            try{
                $cst = $this->con->conectar()->prepare("SELECT * FROM cidade");
                $cst->execute();

                return $cst->fetchALL();
            }
            catch(PDOException $ex){
                echo $ex;
            }
        }
    }