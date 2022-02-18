<?php

    //phpnet - você pode vizualizar a documentação do array 
    $nomes = array('José da Silva', 'Maria da Silva', 'André Silva');
    /*
        echo() - exibe um texto ou um conteúdo de uma variavel (que não seja um array). 
        Ex:echo ('$nomes') - não é indicado para exibir array - caso você indique qual o índice o array ele será printado na tela (APENAS O ÍNDICE)

        print_r() - exibe um texto ou um conteúdo de uma variavel mesmo sendo um array, sem datalhes técnicos. 
        Ex:print_r ($nomes) - não é muito utlizado para debugar pois mostra apenas o conteúdo

        var_dump () - exibe os dados de um objeto ou array ou variavel trazendo detalhes técnicos (tipos de dados, qtde de caracteres, etc...)
        Ex:var_dump($nomes) - te da mais detalhes sobre o array
    */
    
    // var_dump($nomes); - te da mais detalhes sobre o array

    // $dados = array('José da Silva', 20, 1850.56);
    // var_dump($dados)

    //Declarando um array
    $nomesFuncionarios = array();

    //Atribuindo dados individuais no arrray
    $nomesFuncionarios[0] = 'Luís Silva';
    $nomesFuncionarios[2] = 30;

    // var_dump($nomesFuncionarios);

    $nomesClientes = array ('Francisco', 'Luis', 'Andreia', 'André');

    // Forma 1 de extrair dados com repetição
    echo('Exibindo pelo while<br>');
    $cont = 0;
    $quantidade = count($nomesClientes); // - count retorna quantos elementos tem um array
    while ($cont < $quantidade ) {
        echo($nomesClientes[$cont].'<br>');
        $cont++;
    }

    echo('Exibindo pelo for<br>');
    for ($cont =0; $cont<$quantidade; $cont++) {
        echo($nomesClientes[$cont].'<br>');
    }


    /*
        foreach - permite criar uma copia do array fazendo já a contagem de quantos elementos tem no array e permitindo que
        na exibição dos valores não seja necessario especificar o indice do array
    
    */
    
    echo('Exibindo pelo foreach<br>');
    foreach ($nomesClientes as $cliente) {
        echo($cliente.'<br>');
    }

    //Trabalhando com array (Chave-Valor)
    /*
        Quando utilizamos o metodo de valor chave, somente acessamos
        o valor através da referencia da chave.
                chave          valor
        Ex:    'nome'   =>     'Teclado'
        Para conseguir exibir a palavra teclado, temos que acessa-lá pela chave.
        Ex:      array   chave
        echo ($produtos['nome'])
    
    */
    $produtos = array(
            'nome'          => 'Teclado',
            'descricao'     => 'Teclado da cor preto e cinza',
            'qtde'          => 50,
            'valorUnitario' => 80.45,
            'cor'           => 'Preto'
    );

    echo('<pre>');
        var_dump($produtos);
    echo('</pre>');

    echo ($produtos['nome']);

    //Trabalhando com array de indice, chave e valor
    //Exemplo utilizando a chave como indice no primeiro array
    $produtosInformatica = array(
           'listTeclados' => array (
                'nome' => 'Teclado',
                'descricao' => 'Teclado RGB',
                'cor' => 'Preta',
                'valor' => 100.50,
                'qtde' => 20
            ),
            'listMouse' => array (
                'nome' => 'Mouse',
                'descricao' => 'Mouse com 5 botões',
                'cor' => 'Cinza',
                'valor' => 70.30,
                'qtde' => 100
            )
    
    );

    echo('<pre>');
        var_dump($produtosInformatica);
    echo('</pre>');

    echo($produtosInformatica['listTeclados']["nome"]);
    echo($produtosInformatica['listMouse']['valor']);


    /*
        Para exibir os dados de um array (índice, chave e valor) temos que primeiro
        especificar qual é o índice do array principal, depois colocamos a qual
        chave iremos extrair o valor
    */

    //Exemplo utilizando indices como numeros da ´posição no array
    $produtosInformatica = array(
        array (
             'nome' => 'Teclado',
             'descricao' => 'Teclado RGB',
             'cor' => 'Preta',
             'valor' => 100.50,
             'qtde' => 20
         ),
         array (
             'nome' => 'Mouse',
             'descricao' => 'Mouse com 5 botões',
             'cor' => 'Cinza',
             'valor' => 70.30,
             'qtde' => 100
         )
 
 );
    echo($produtosInformatica[0]["nome"]);
    echo($produtosInformatica[0]['valor']);

    foreach($produtosInformatica as $produtos)  
        echo('<br>'.$produtos['nome'].'<br>');



?>