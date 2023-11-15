<?php
    require_once __DIR__  . "../../vendor/autoload.php";

    class Usuario {
       
        private $nome;
        private $email;
        private $senha;
        private $tipo;
        private $mensagem;

            /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of email
         */
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         */
        public function setEmail($email): self
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of senha
         */
        public function getSenha()
        {
                return $this->senha;
        }

        /**
         * Set the value of senha
         */
        public function setSenha($senha): self
        {
                $this->senha = $senha;

                return $this;
        }

        /**
         * Get the value of tipo
         */
        public function getTipo()
        {
                return $this->tipo;
        }

        /**
         * Set the value of tipo
         */
        public function setTipo($tipo): self
        {
                $this->tipo = $tipo;

                return $this;
        }

        /**
         * Get the value of mensagem
         */
        public function getMensagem()
        {
                return $this->mensagem;
        }

        /**
         * Set the value of mensagem
         */
        public function setMensagem($mensagem): self
        {
                $this->mensagem = $mensagem;

                return $this;
        }

        //Instanciar a Classe de Conexao com o Banco de dados
        public function __construct(){
            $this->con = new Conexao();
        }


        //Gravar no Banco de dados
        public function  inserirUsuario($dados) {
            try{
               
                $this->nome = $dados['nome'];
                $this->email = $dados['email'];
                $this->senha = sha1($dados['senha']);
                $this->tipo = $dados['tipo'];
                $this->mensagem = $dados['mensagem'];

                
                if(empty(trim($this->nome))){
                    echo "<html> <div class='alert alert-danger alert-dismissible fade show' role='alert'> Campo nome em branco <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div></html>";
                    
                }else if(empty(trim($this->email))){
                    echo "<html> <div class='alert alert-danger alert-dismissible fade show' role='alert'> Campo email em branco <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div></html>";
                
                }else if(empty(trim($this->senha))){
                    echo "<html> <div class='alert alert-danger alert-dismissible fade show' role='alert'> Campo senha em branco <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div></html>";
                
                }else if(empty(trim($this->tipo))){
                    echo "<html> <div class='alert alert-danger alert-dismissible fade show' role='alert'> Campo tipo em branco <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div></html>";
                
                }else if(empty(trim($this->mensagem))){
                    echo "<html> <div class='alert alert-danger alert-dismissible fade show' role='alert'> Campo mensagem em branco <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div></html>";
                
                }else{
                    $cst = $this->con->conectar()->prepare("INSERT INTO usuario (nome, email, senha, tipo, mensagem) VALUES(:nome, :email, :senha, :tipo, :mensagem)");
                    $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
                    $cst->bindParam(":email", $this->email, PDO::PARAM_STR);
                    $cst->bindParam(":senha", $this->senha, PDO::PARAM_STR);
                    $cst->bindParam(":tipo", $this->tipo, PDO::PARAM_STR);
                    $cst->bindParam(":mensagem", $this->mensagem, PDO::PARAM_STR);

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


        //Selecionar do Banco de dados
        public function  selecionarUsuario() {
            try{
                $cst = $this->con->conectar()->prepare("SELECT * FROM usuario");
                $cst->execute();

                return $cst->fetchAll();

            }catch(PDOException $ex){
                    echo $ex;
            }
        }

    }