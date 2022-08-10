<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Aqui está o seu retorno!!!</h2>
<div class="retorno">
    <fieldset>
        <?php
        $text = $_POST["texto"];
        $option = $_POST["action"];
        switch ($option) {
            case 'Tudo Maiúsculo':
                $result = strtoupper($text);
                echo $result;
                break;
            case 'Tudo Minúsculo':
                $result = strtolower($text);
                echo $result;
                break;
            case 'Primeira Letra Maiúscula':
                $result = ucfirst($text);
                echo $result;
                break;
            case 'Primeira Letra Maiúscula de cada palavra':
                $result = ucwords($text);
                echo $result;
                break;
            case 'Tudo ao contrário':
                $result = strrev($text);
                echo $result;
                break;
            case 'Quantas palavras o texto possui?':
                $result = str_word_count($text);
                echo $result;
                break;
            case 'Quantos caracteres o texto possui?':
                $result = strlen($text);
                echo $result;
                break;
        }
        ?>
    </fieldset>
</div>
<div class = "return_home">
    <a href="index.php">
        <button>
            clique aqui para retornar
        </button>
    </a>
</div>
</body>
</html>
