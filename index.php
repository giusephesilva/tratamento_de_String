<!DOCTYPE html>
<html lang="pt-">
<head>
    <meta charset="UTF-8">
    <title>Sistema de conversão de texto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Conversão de texto</h2>
<h3>Basta digitar o seu texto e escolher uma das opções abaixo para converter o seu texto:</h3>
<div class="formulario">
    <form method ="post" action="retorno.php">
        <textarea name="texto" cols="50" rows="10"></textarea></br>
        <input type="submit" name="action" class = "button" value="Tudo Maiúsculo">
        <input type="submit" name="action" class = "button" value="Tudo Minúsculo">
        <input type="submit" name="action" class = "button" value="Primeira Letra Maiúscula">
        <input type="submit" name="action" class = "button" value="Primeira Letra Maiúscula de cada palavra">
        <input type="submit" name="action" class = "button" value="Tudo ao contrário">
        </br>
        </br>
        <h3>Caso queira saber alguns detalhes do texto, pode escolher uma das seguintes opções:</h3>
        <input type="submit" name="action" class = "button" value="Quantas palavras o texto possui?">
        <input type="submit" name="action" class = "button" value="Quantos caracteres o texto possui?">
    </form>
</div>
</body>
</html> 