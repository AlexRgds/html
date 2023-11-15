<?php
    require_once __DIR__  . "../../vendor/autoload.php";

    class Cliente {
        
        private $cliente;
        private $endereco;


        /**
         * Get the value of cliente
         */
        public function getCliente()
        {
                return $this->cliente;
        }

        /**
         * Set the value of cliente
         */
        public function setCliente($cliente): self
        {
                $this->cliente = $cliente;

                return $this;
        }

        /**
         * Get the value of endereco
         */
        public function getEndereco()
        {
                return $this->endereco;
        }

        /**
         * Set the value of endereco
         */
        public function setEndereco($endereco): self
        {
                $this->endereco = $endereco;

                return $this;
        }
        
        //Instanciar a Classe de Conexao com o Banco de dados
        public function __construct(){
            $this->con = new Conexao();
        }

        public function imprimeCliente(){
            echo "Teste de Cliente com Conexa com o Banco de Dados";
        }

        //Gravar no Banco de dados
        public function  inserirCliente($dados) {
            try{

                $this->cliente = $dados['cliente'];
                $this->endereco = $dados['endereco'];

                
                if(empty(trim($this->cliente))){
                    //echo "<script> alert('campo nome em branco'); windows.location.href='../View/cliente.php' </script>";
                    echo "<html> <div class='alert alert-danger alert-dismissible fade show' role='alert'> Campo nome em branco <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div></html>";
                    
                }else if(empty(trim($this->endereco))){
                    echo "<html> <div class='alert alert-danger alert-dismissible fade show' role='alert'> Campo endereço em branco <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div></html>";
                }else{
                    $cst = $this->con->conectar()->prepare("INSERT INTO cliente (cliente, endereco) VALUES(:cliente, :endereco)");
                    $cst->bindParam(":cliente", $this->cliente, PDO::PARAM_STR);
                    $cst->bindParam(":endereco", $this->endereco, PDO::PARAM_STR);

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

        //Editar no Banco de dados
        public function  editarCliente() {

        }

         //Deletar  no Banco de dados
        public function  deletarCliente() {
            try{
                $this->cliente = $dados['cliente'];
                $cst = $this->con->conectar()->prepare("DELETE FROM cliente (cliente, endereco) WHERE(:id)");

                if($cst->execute()){
                    return 'Ok';
                }else{
                    echo 'Não deu';
                }
            }
            catch(PDOException $ex){
                echo $ex;
            }
        }

        //Selecionar  no Banco de dados
        public function  selecionarCliente() {
            try{
                $cst = $this->con->conectar()->prepare("SELECT * FROM cliente");
                $cst->execute();

                return $cst->fetchALL();
            }
            catch(PDOException $ex){
                echo $ex;
            }
        }


        
    }