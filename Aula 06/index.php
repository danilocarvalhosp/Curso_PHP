<?php

    /*
    ----- PRIMEIRA MANEIRA
    $nome = array('Guilherme', 'João', 'Felipe');
    echo $nome[2];
    
    ----- SEGUNDA MANEIRA
    $nome[] = 'João';
    $nome[] = 'Felipe';
    echo $nome[1];
    
    ----- TERCEIRA MANEIRA
    $nome[0] = 'João';
    $nome[100] = 'Marcelo';
    echo $nome[100];

    ----- QUARTA MANEIRA
    $variaveis = ['Guilherme', 'João', 'Felipe'];
    echo $variaveis[0];
    
    ----- QUARTA MANEIRA
    $variaveis = array('Guilherme', 23, true, 10.09);
    echo $variaveis[3]
    */

    $informacao['nome'] = 'Guilherme';
    $informacao['idade'] = 23;
    $informacao['cidade'] = 'Florianópolis';

    echo $informacao['nome'];
    echo '<br />';
    echo $informacao['idade'];
    echo '<br />';  
    echo $informacao['cidade'];
    echo '<br />';
?>