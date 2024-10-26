<?php

    $nome = $_GET['nameuser'];
    $email = $_GET['mail'];
    $endereco = $_GET['Ende'];
    $data_nas = $_GET['Datas'];
    $senha = $_GET['password'];
    
   /*fopen Abre uma conexão com o arquivo
     fwrite Escreve em um arquivo TXT
     fclose Fecha a conexão com o arquivo
     (a+ Serve para abrir para leitura escrita e 
     coloca o ponteiro no final do arquivo)
   */

     $senha = fopen('senhas.txt', "a+");
    fwrite($senha, 'senhas.txt');
    fclose('senhas.txt');

?>