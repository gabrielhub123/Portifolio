<?php
$nome = "Gabriel Lourencetti";
$secondName = "Gabriel L.";
$cursos = ["HTML", "CSS", "PHP"]
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

    <div class="sec">
        <div class="curriculo">
            <div class="blocao">
                <div class="bloco">
                    <h1 class="meunome">Gabriel Lourencetti</h1>
                </div>
                <div class="bloco2">
                    <h1> Informações pessoais </h1>
                    <li>idade</li>
                    <li>endereço</li>
                    <li>cidade</li>
                    <li>numero</li>
                    <li>email</li>
                </div>
                <div class="bloco3">
                    <h1>sobre mim:</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, veritatis maiores. Pariatur
                        inventore,
                        laboriosam quo ea reprehenderit voluptatibus dolorum iusto sunt eaque commodi sequi, ad odit
                        illum.
                        Magnam, quas debitis.</p>
                </div>
            </div>
            <div class="blocao2">

                <div class="bloco4">
                    <h1>Experiencia Profissional</h1>
                </div>
                <div class="bloco5">
                    <h1>Interesses</h1>
                </div>

            </div>
            <div class="blocao3">
                <div class="bloco6">
                    <h1>projetos</h1>
                </div>
                <div class="bloco7"><h1>Cursos extracurriculares</h1></div>
            </div>
        </div>

</body>

</html>