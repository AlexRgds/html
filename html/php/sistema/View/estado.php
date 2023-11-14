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
          
          $estado = new Estado();
          $conexao = new Conexao();

          if(isset($_POST['enviar'])){

            if($estado->inserirEstado($_POST) == "ok"){
              echo "Cadastrado com sucesso";
            }
          }

        ?>
            <h1>Cadastro estado</h1>
            <form method="post" action="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Estado</label>
                    <input type="text" name="estado" class="form-control" placeholder="Nome do estado">
                </div>
                <input type="submit" name="enviar" value="Cadastrar Estado" class="btn btn-primary">
            </form>

            <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Estado</th>
                <td>@mdo</td>
              </tr>
            </thead>

            <tbody>
            <?php

              foreach($estado->selecionarEstado() as $resultado){
            ?>

              <tr>
                <th scope="row"> <?php echo $resultado['id']; ?> </th>
                <td> <?php echo $resultado['estado']; ?> </td>
                <td>@mdo</td>
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