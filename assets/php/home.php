<?php
$nome = "Gabriel Lourencetti";
$secondName = "Gabriel L.";

$arquivo = 'arquivo.txt';
$linhas = file($arquivo);
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
  <div class="header"><a href="#home">
      <h1 class="title">Portfólio</h1>
    </a>
    <div class="menu">
      <a href="#projetos">
        <h1 class="title2">Projetos</h1>
      </a>
      <a href="#curriculo">
        <h1 class="title2">Currículo</h1>
      </a>
    </div>
  </div>

  <main>
    <div id="home" class="dados">
      <div class="teste">
        <div class="container1">
          <h1 class="sobreeu">Olá, Eu sou <br><span class="nome"><?= $secondName ?></span></h1>
          <p class="eu">Sou um <strong><span class="p1">Desenvolvedor de Sistemas</span></strong>, Com alguns
            projetos finalizados, e Atualmente trabalho
            com o cargo de <strong><span class="p2">FullStack.</span></strong></p>
        </div>
        <div class="botoes">
          <a href="#projetos">
            <div class="botao1">
              <p class="cor99">Projetos</p>
            </div>
          </a>

          <a href="#curriculo">
            <div class="botao2">
              <p class="cor98">Sobre</p>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="container2">
      <div class="container3">
        <img class="ilustracao" src="../imagens/Imagem Ilustrativa.png" alt="">
      </div>
    </div>
  </main>

  <div class="sec2" id="projetos">
    <h1 class="cor">Projetos</h1>
    <div class="projetos">
      <div class="ps">
        <h1 class="corp">Otomo Restaurante</h1>
        <img class="fotopro" src="../imagens/site.png" alt="">
      </div>
      <div class="ps">
        <h1 class="corp">Senai Games</h1>
        <img class="fotopro" src="../imagens/site2.png" alt="">
      </div>
    </div>
  </div>

  <section id="curriculo">
    <div class="curriculo">
      <div class="blocao">
        <div class="bloco">
          <h1 class="meunome"><?= $nome ?></h1>
        </div>
        <div class="bloco2">
          <h1 class="t1">Informações pessoais</h1>
          <ul class="lista-personal">
            <li class="listinha"><?= ($linhas[0]) ?></li>
            <li class="listinha"><?= ($linhas[1]) ?></li>
            <li class="listinha"><?= ($linhas[2]) ?></li>
            <li class="listinha"><?= ($linhas[3]) ?></li>
            <li class="listinha"><?= ($linhas[4]) ?></li>
          </ul>
        </div>
        <div class="bloco3">
          <h1 class="t1">Sobre mim:</h1>
          <p class="paragrafo">
            Sou Gabriel Lourencetti, desenvolvedor apaixonado por tecnologia desde cedo. Tenho experiência na criação de
            sites e aplicações utilizando HTML, CSS e PHP.
          </p>
        </div>
      </div>

      <div class="blocao2">
        <div class="bloco4">
          <h1 class="t1">Experiência Profissional</h1>
          <div class="exp">
            <h2>2024 <span class="coisa">-</span> Comércio e Vendas</h2>
            <h2>2025 <span class="coisa">-</span> e-commerce</h2>
          </div>
        </div>
        <div class="bloco5">
          <h1 class="t1">Projetos</h1>
          <div class="projeto">
            <li class="listinha">
              <a target="_blank" href="../projetos/site" class="link-projeto">Otomo Restaurante</a>
            <li class="listinha"> <a target="_blank" href="../Projetos/Projeto Empresa2" class="link-projeto">Senai
                Games</a></li>
            </li>
          </div>
        </div>
      </div>

      <div class="blocao3">
        <div class="bloco6">
          <h1 class="t1">Cursos extracurriculares</h1>
          <ul class="lista-cursos">
            <li class="listinha"><a target="_blank" href="../Certificados/excel.pdf">Excel Básico</a></li>
            <li class="listinha"><a target="_blank" href="../Certificados/etica.pdf">Ética na inteligência
                Artificial</a></li>
            <li class="listinha"><a target="_blank" href="../Certificados/seg.pdf">Segurança no Trabalho</a></li>
            <li class="listinha"><a target="_blank" href="../Certificados/por.pdf">Por dentro da Segurança
                Cibernetica</a></li>
            <li class="listinha"><a target="_blank"
                href="../Certificados/Certificado_Competência Transversal - Tecnologia da Informação e Comunicaçã.pdf">Tecnologia
                Da Informação e Comunicação</a></li>
            <li class="listinha"><a target="_blank"
                href="../Certificados/Certificado_Implantação de Serviços em Nuvem - Google Cloud Foundation.pdf">Implantação
                de Serviços em Nuvem - Google Cloud Foundation</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <h1 class="mini">© 2025 Gabriel Lourencetti. Todos os direitos reservados.</h1>
  </footer>
</body>

</html>