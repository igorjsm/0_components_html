<?php

    //captura de variaveis
    $codigo_hidden = $_POST['hddCodigo'];
    $codigo = $_POST['txtCodigo'];
    $nome = $_POST['txtNome'];
    $email = trim($_POST['txtEmail']);
    $arquivo = $_FILES['txtArquivo'];
    $mensagem = $_POST['txaMensagem'];
    $f1 = $_POST['slcF1'];
    $equipe = $_POST['slcEquipe'];
    $pilotos = $_POST['slcListaDePilotos'];
    $piloto_campeao = $_POST['rdbPilotos'];
    $construtor_campeao = $_POST['rdbConstrutores'];
    
    $senha = 'Desabilitada';
    if (isset($_POST['txtSenha'])) {
        $senha = $_POST['txtSenha'];
    }

    //exibicao de variaveis
    echo 'C&oacute;digo escondido   : ' . $codigo_hidden . '<br>';
    echo 'C&oacute;digo: ' . $codigo . '<br>';

    if (empty($nome)) {
        echo 'Nome n&atilde;o informado<br>';
    } else {
        echo 'Nome: ' . $nome . '<br>';
    }

    if (empty($senha)) {
        echo 'Senha n&atilde;o informada<br>';
    } else {
        echo 'Senha: ' . $senha . '<br>';
    }

    echo 'Email: ' . $email . '<br>';

    $datanasc = 'N&atilde;o informada';
    if (!empty($_POST['txtDataNasc'])) {
        $datanasc = date('d/m/Y', strtotime($datanasc));
    }

    echo 'Data de Nascimento: ' . $datanasc . '<br>';
    echo 'Arquivo: ' . $arquivo['name'] . ' - Tamanho: ' . $arquivo['size'] . ' KB<br>';

    $renda = 'N&atilde;o informada';
    if (isset($_POST['rdbRenda'])) {
        $renda = $_POST['rdbRenda'];
    }

    if ($renda == 1) {
        $renda = "Pobre";
    } else if ($renda == 2) {
        $renda = "Muito Pobre";
    } else if ($renda == 3) {
        $renda = "Miser&aacute;vel";
    }

    echo 'Renda: ' . $renda . '<br>';

    $macacos = '';
    if (isset($_POST['chkGorila'])) {
        $macacos .= ' Gorila';
    }
    if (isset($_POST['chkOrangotango'])) {
        $macacos .= ' Orangotango';
    }
    if (isset($_POST['chkChimpaze'])) {
        $macacos .= ' Chimpaz&eacute;';
    }
    if (isset($_POST['chkBonobo'])) {
        $macacos .= ' Bonobo';
    }

    echo 'Macacos favoritos: ' . $macacos . '<br>';
    echo 'Mensagem: ' . $mensagem  . '<br>';
    echo 'F1: ' . $f1  . '<br>';
    echo 'Equipe: ' . $equipe  . '<br>';
    echo 'Pilotos favoritos: ';

    $lastKey = array_key_last($pilotos);
    foreach ($pilotos as $key => $piloto) {
        echo $piloto;
        if ($key == $lastKey) {
            echo '.';
        } else {
            echo ', ';
        }
    }
    echo '<br>';

    echo 'Piloto campeão: ' . $piloto_campeao  . '<br>';
    echo 'Construtor campeão: ' . $construtor_campeao  . '<br>';

?>