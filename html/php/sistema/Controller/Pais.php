<?php
    require_once __DIR__  . "../../vendor/autoload.php";

    class Pais {
        
        private $pais;

        /**
         * Get the value of pais
         */
        public function getPais()
        {
                return $this->pais;
        }

        /**
         * Set the value of pais
         */
        public function setPais($pais): self
        {
                $this->pais = $pais;

                return $this;
        }

        
        
        //Instanciar a Classe de Conexao com o Banco de dados
        public function __construct(){
            $this->con = new Conexao();
        }

        //Gravar no Banco de dados
        public function  inserirPais($dados) {
            try{

                $this->pais = $dados['pais'];

                if(empty(trim($this->pais))){
                    //echo "<script> alert('campo nome em branco'); windows.location.href='../View/cliente.php' </script>";
                    echo "<html> <div class='alert alert-danger alert-dismissible fade show' role='alert'> Campo país em branco <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div></html>";
                    
                }else{
                    $cst = $this->con->conectar()->prepare("INSERT INTO pais (pais) VALUES(:pais)");
                    $cst->bindParam(":pais", $this->pais, PDO::PARAM_STR);


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
        public function  selecionarPais() {
            try{
                $cst = $this->con->conectar()->prepare("SELECT * FROM pais");
                $cst->execute();

                return $cst->fetchALL();
            }
            catch(PDOException $ex){
                echo $ex;
            }
        }

    }