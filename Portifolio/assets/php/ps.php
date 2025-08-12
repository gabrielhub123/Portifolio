<?php
$nome = "Gabriel Lourencetti";
$cursos = ["HTML", "CSS", "PHP"];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Currículo</title>
</head>

<body>
    <div class="header">
        <h1 class="title">Portfólio</h1>
        <div class="menu">
            <h1 onclick="scrolar()" class="title2">Currículo</h1>
            <h1 class="title2">Contato</h1>
        </div>
    </div>

    <script>

        function scrolar() {
            window.scrollBy({
                top: 950,
                behavior: 'smooth'
            });
        }
    </script>

    <main>
        <div class="dados">
            <div class="teste">
                <div class="container1">
                    <h1 class="sobreeu">Olá, Eu sou <br><span class="nome"><?= $nome ?></span></h1>
                    <p class="eu">Sou um <strong><span class="p1">Desenvolvedor de Sistemas</span></strong>, Com alguns
                        projetos finalizados, e Atualmente trabalho
                        com o cargo de <strong><span class="p2">FullStack.</span></strong></p>
                </div>
                <div class="botoes">
                    <a href="#">
                        <div onclick="scrolar()" class="botao1">
                            <p class="cor99">Projetos</p>
                        </div>
                    </a>

                    <a href="#">
                        <div onclick="scrolar()" class="botao2">
                            <p class="cor98">Sobre</p>
                        </div>
                </div></a>
            </div>
        </div>

        <div class="container2">
            <div class="container3">
                <img class="ilustracao" src="../imagens/Imagem Ilustrativa.png" alt="">
            </div>
        </div>

    </main>

        <div class="curriculo">
        <?= $nome ?>
        </div>

</body>

</html>
