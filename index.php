<!-- Insira as informações do Livro aqui -->
<!-- PROTOTIPAR E SUGERIR INSERÇÃO DE SUBTÍTULO -->
<?php 
$tituloLivro = "Química Aplicada"; 
$autorLivro1 = "Prof. Dr. Josimar Ribeiro";
$autorLivro2 = "Prof. Dr. Rafael de Queiroz Ferreira";
$autorLivro3 = "Profa. Dra. Geiza Esperandio de Oliveira";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $tituloLivro; ?></title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <?php include 'components/preload.php' ?>

  <link rel="stylesheet" href="css/index.min.css">

  <meta name="theme-color" content="#6827AB"/>
  <link rel="manifest" crossorigin="use-credentials" href="manifest.json">
  <link rel="apple-touch-icon" href="img/icon-192.png">
</head>

<body id="index">
  <a href="#cover" id="ir-para-conteudo" title="Pular para o conteúdo" class="navegacao-teclado">Pular para o conteúdo</a>
  <nav class="navbar">
    <div class="container">
      <div class="nav-title"><?php echo $tituloLivro; ?></div>

      <button id="nav-ajustes" class="btn-terciary" data-modal="#modal-ajustes"><span>Ajustes de leitura</span></button>
      <a class="nav-logo" href="https://sead.ufes.br/" target="_blank" title="Abrir site da Sead em nova aba">
        <span>Sead</span><?php include('svg/sead.svg'); ?>
      </a>
    </div>
  </nav>

  <?php include 'components/modal.php' ?>

  <main>
    <section id="cover">
      <div class="container">
        <div class="cover-img"></div>
        <header class="cover-header">

          <span>Livro Digital</span>
          <span>2021</span>
          <h1 class="cover-title"><?php echo $tituloLivro; ?></h1>
          <p class="cover-author"><?php echo $autorLivro1; ?><br><?php echo $autorLivro2; ?><br><?php echo $autorLivro3; ?></p>
          <p class="cover-info">Essa página é um livro digital publicado pela Superintendência de Educação à Distância, com conteúdo produzido e revisado pelos professores associados à Universidade Federal do Espírito Santo. Aproveite!</p>

          <a class="btn-primary" id="iniciar-leitura" href="cap1.php">Iniciar leitura</a>
        </header>
      </div>
    </section>

    <section id="info">
      <div class="container container-content">
        <h2>Como usar esse livro?</h2>

        <!-- <div class="info-item">
          <p class="info-text">Disponibilizamos esse livro também em um formato adequado para <strong>impressão</strong>.</p>
          <a id="link-download" class="info-btn btn-secondary" href="" target="_blank">Baixar PDF</a>
        </div> -->

        <div class="info-item" id="app-install" hidden>
          <p class="info-text">Adicione esse livro ao seu celular como um <strong>aplicativo</strong> para acessá-lo offline.</p>
          <button id="btn-app-install" class="info-btn btn-secondary">Instalar App</button>
        </div>

        <div class="info-item">
          <p class="info-text">A Sead também disponibiliza outros <strong>materiais didáticos</strong> em seu acervo digital.</p>
          <a id="link-acervo" class="info-btn btn-secondary" href="https://acervo.sead.ufes.br/" target="_blank">Visitar acervo</a>
        </div>
      </div>
    </section>


    <section id="toc">
      <div class="container container-content">
        <div id="barra-de-busca"></div>
        <p id="erro">Erro: digite, no mínimo, três caracteres para fazer a pesquisa.</p>
        
        <h2>Sumário</h2>
        <?php include 'components/sumario.php' ?>
      </div>
    </section>

    <section id="credits">
      <div class="container container-content">
        <h2>Créditos</h2>

        <div class="credits-licence">
          <img src="img/licenca.png" alt="Licença CC BY-NC-SA">
          <p>Esta licença permite que outros remixem, adaptem e criem a partir do seu trabalho para fins não comerciais, desde que atribuam o devido crédito e que licenciem as novas criações sob termos idênticos.</p>
          <p>A reprodução de imagens nesta obra tem caráter pedagógico e científico, amparada pelos limites do direito de autor, de acordo com a lei nº 9.610/1998, art. 46, III (citação em livros, jornais, revistas ou qualquer outro meio de comunicação, de passagens de qualquer obra, para fins de estudo, crítica ou polêmica, na medida justificada para o fim a atingir, indicando-se o nome do autor e a origem da obra). Toda reprodução foi realizada com amparo legal do regime geral de direito de autor no Brasil.</p>
        </div>

        <div class="credits-gov">
          <p><strong>Presidente da República</strong><br>Jair Messias Bolsonaro</p>
          <p><strong>Ministro da Educação</strong><br>Milton Ribeiro</p>
          <p><strong>Diretoria de Educação a Distância DED/CAPES/MEC</strong><br>Carlos Cézar Modernel Lenuzza</p>
        </div>

        <div class="credits-team">
          <div class="team-ufes">
            <span>Universidade Federal do Espírito Santo</span>

            <p><strong>Reitor</strong><br>Paulo Sérgio de Paula Vargas</p>
            <p><strong>Superintendente de Educação a Distância – SEAD</strong><br>Maria Auxiliadora de Carvalho Corassa</p>
            <p><strong>Diretora Acadêmico – SEAD</strong><br>Andréia Chiari Lins</p>
            <p><strong>Coordenadora UAB da UFES</strong><br>Maria Auxiliadora de Carvalho Corassa</p>
            <p><strong>Coordenadora Adjunta UAB da UFES</strong><br>Andréia Chiari Lins</p>

          </div>

          <div id="team-ldi">
            <span>Laboratório de Design Instrucional</span>

            <p>
              <strong>Gerência</strong><br>
              <em>Coordenação:</em><br>
              Lorena Silva Zanette<br>
              <em>Equipe:</em><br>
              Yasmin Moreto
            </p>

            <p>
              <strong>Diagramação</strong><br>
              <em>Coordenação:</em><br>
              Diana Klippel<br>
              <em>Equipe:</em><br>
              Arí Souza<br>
            </p>

            <p>
              <strong>Ilustração</strong><br>
              <em>Coordenação:</em><br>
              Diana Klippel<br>
              <em>Equipe:</em><br>
              ATUALIZAR
            </p>

            <p>
              <strong>Desenvolvimento</strong><br>
              <em>Coordenação:</em><br>
              Edson Rufino<br>
              <em>Equipe:</em><br>
              Paulo Serpa<br>
              Isabela Oliveira<br>
            </p>
          </div>

        </div>
      </div>
    </section>

  </main>

  <a id="voltar-topo" title="Voltar ao topo" href="#topo"><span>Voltar ao topo</span></a>

  <footer>
    <span>2021 Sead Ufes. Todos os direitos reservados.</span>
    <a href="https://ldi.ufes.br/" target="_blank" title="Abrir site do LDI em nova aba">Desenvolvido por LDI</a>
  </footer>

  <div class="overlay" id="atualizacao">
    <div class="caixa">
      <div class="container">
        <div class="info">
          <div class="info-titulo">
            <h4>Notificação</h4>
            <button id="fecha" type="button" tabindex="0"></button>
          </div>
          <div class="info-action">
            <p>Uma nova versão do livro <span>está disponível</span> e <span>será atualizada automaticamente</span> assim que você fechar o aplicativo.</p>
            <button id="reload">Atualizar agora</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

<script src="js/focus-visible.min.js"></script>
<script type="text/javascript" src="js/app.min.js"></script>
<script type="text/javascript" src="js/index.min.js"></script>

</html>