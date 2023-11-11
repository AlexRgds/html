<?php
    require_once __DIR__  . "../../vendor/autoload.php";

    class Cliente {
        
        private $cliente;

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
                $cst = $this->con->conectar()->prepare("INSERT INTO cliente (cliente) VALUES(:cliente)");
                $cst->bindParam(":cliente", $this->cliente, PDO::PARAM_STR);

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

        //Editar no Banco de dados
        public function  editarCliente() {

        }

         //Deletar  no Banco de dados
        public function  deletarCliente() {
            try{
                $cst = $this->con->conectar()->prepare("DELETE FROM cliente WHERE(:cliente)");

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