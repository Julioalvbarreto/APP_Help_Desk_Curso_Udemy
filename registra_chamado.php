<?php

    // echo '<prev>';
    // print_r($_POST);
    // echo '</prev>';

    $arquivo = fopen('arquivo.txt', 'a');

    $texto = '-Titulo: ' . $_POST['titulo'] . '-Categoria: ' . $_POST['categoria'] . '-Descrição: ' . $_POST['descricao'] . PHP_EOL;
    
    fwrite($arquivo, $texto);
    fclose($arquivo);

    header('Location: consultar_chamado.php')
    
?>