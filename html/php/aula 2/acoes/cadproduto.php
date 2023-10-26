<?php

    if(isset($_POST['cadastrar'])){
        $categoria = $_POST['categoria'];
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        $observacao = $_POST['observacao'];
        $fornecedor = $_POST['fornecedor'];
        $quantidade = $_POST['quantidade'];
        //cadastro de arquivo
        $foto = $_FILES['foto']['name'];
        $foto_tamanho = $_FILES['foto']['size'];
        $foto_tipo = $_FILES['foto']['type'];
        $caminho = "imagem/";
        $md5 = md5(time());
        //função para envio de arquivos

        move_uploaded_file($_FILES['foto']['tmp_name'] , $caminho . $md5 . $_FILES['foto']['name']);

        if(empty(trim($categoria)) || $categoria == 'Escolher...'){
            echo "Campo Categoria em branco";
        }else if(empty(trim($codigo))){
            echo "Campo Código em branco";
        }else if(empty(trim($nome))){
            echo "Campo Nome em branco";
        }else if(empty(trim($fornecedor)) || $fornecedor == 'Escolher...'){
            echo "Campo Fornecedor em branco";
        }else if(empty(trim($quantidade))){
            echo "Campo Quantidade em branco";
        }else{
            echo $categoria . " " . $codigo . " " . $nome . " " . $fornecedor . " " . $quantidade . " " . $observacao
        }
    }