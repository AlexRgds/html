<?php
    require_once __DIR__  . "../../vendor/autoload.php";

    class Estado {
        
        private $estado;


        /**
         * Get the value of estado
         */
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         */
        public function setEstado($estado): self
        {
                $this->estado = $estado;

                return $this;
        }

        //Instanciar a Classe de Conexao com o Banco de dados
        public function __construct(){
            $this->con = new Conexao();
        }

        //Gravar no Banco de dados
        public function  inserirEstado($dados) {
            try{

                $this->estado = $dados['estado'];

                if(empty(trim($this->estado))){
                    //echo "<script> alert('campo nome em branco'); windows.location.href='../View/cliente.php' </script>";
                    echo "<html> <div class='alert alert-danger alert-dismissible fade show' role='alert'> Campo estado em branco <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div></html>";
                    
                }else{
                    $cst = $this->con->conectar()->prepare("INSERT INTO estado (estado) VALUES(:estado)");
                    $cst->bindParam(":estado", $this->estado, PDO::PARAM_STR);


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
        public function  selecionarEstado() {
            try{
                $cst = $this->con->conectar()->prepare("SELECT * FROM estado");
                $cst->execute();

                return $cst->fetchALL();
            }
            catch(PDOException $ex){
                echo $ex;
            }
        }
    }