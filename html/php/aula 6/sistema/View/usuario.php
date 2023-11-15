<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
    <div class="container">
        <?php include "../includes/menu.php"; ?>

        <?php
          require_once "../vendor/autoload.php";
          
          $usuario = new Usuario();
          $conexao = new Conexao();

          if(isset($_POST['enviar'])){

            if($usuario->inserirUsuario($_POST) == "ok"){
              echo "<div class='alert alert-success alert-dismissible fade show' role='alert'> Cadastrado com Sucesso <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>";
              header('Refresh:3; url=cidade.php');
              unset($_POST);
            }
          }

        ?>
            <h1>Cadastro Usuario</h1>
            <form method="post" action="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome do Usuario">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email do Usuario">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Senha</label>
                    <input type="password" name="senha" class="form-control" placeholder="Senha do Usuario">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Tipo</label>
                  <select class="form-control" name="tipo" id="tipo">
                    <option value="padrao">Padrão</option>
                    <option value="admin">Admin</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensagem</label>
                <textarea class="form-control" name="mensagem" id="mensagem" rows="3"></textarea>
              </div>
                <input type="submit" name="enviar" value="Cadastrar cliente" class="btn btn-primary">
            </form>

            <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Cliente</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col">Tipo</th>
                <th scope="col">Mensagem</th>
              </tr>
            </thead>

            <tbody>
            <?php

              foreach($usuario->selecionarUsuario() as $resultado){
            ?>

              <tr>
                <th scope="row"> <?php echo $resultado['id']; ?> </th>
                <td> <?php echo $resultado['nome']; ?> </td>
                <td><?php echo $resultado['email'] ?></td>
                <td><?php echo $resultado['senha'] ?></td>
                <td><?php echo $resultado['tipo'] ?></td>
                <td><?php echo $resultado['mensagem'] ?></td>
                <td><button type="button" class="btn btn-warning" onclick="">Editar</button></td>
                <td><input type="submit" value="deletar" name="deletar" class="btn btn-danger"></td>
              </tr>

            <?php } ?>
            
          </tbody>
          </table>

            

            <?php include "../includes/rodape.php"; ?>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>