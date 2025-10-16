<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <h1>Resultado do Prcessamento</h1>
    </header>
    <main>
        <?php
        $nome = $_GET["nome"]; //($_request)junção de superglobais Get e Post
        $sobrenome = $_GET["sobrenome"];
        echo "<P>É um prazer te conhecer, $nome $sobrenome! Este é o meu site!</p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior.</a></p>
    </main>
</body>

</html>