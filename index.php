<?php ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Vida boa</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/sidebar.css">
  <link rel="stylesheet" type="text/css" href="css/general.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <script src="jquery/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="js/validacao.js"></script>
  <script src="js/generico.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Analytics-->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-106963166-1', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body>

  <div id="sidebarFixo">
    <div class="div-logo">
      <img id="logo-blog" src="img/Logo_SuaVidaMaisFacil_Black.png" class="img-responsive">
      <p class="sidebar-text" id="descricao" >Facilite ainda mais a sua vida!<br>
        <b>Baixe o nosso e-book grátis com dicas surpreendentes.</b>
      </p>

      <!-- Incluir aqui o PHP, cadastrar nome e e-mail-->
      <form id="form-side-bar" method="POST" action="insert.php">
        <input type="hidden" name="id_leads" value="" />
        <div class="alert alert-danger" role="alert"  id="alert-obrigatorio" hidden="true">
          <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
          <span class="sr-only"></span> Preencha todos os campos.
        </div>
        <div class="alert alert-danger" role="alert"  id="alert-email-invalido" hidden="true">
          <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
          <span class="sr-only"></span> Endereço de e-mail inválido.
        </div>
        <div class="form-group">
          <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" />
        </div>
        <div class="form-group">
          <input type="text" id="email" name="email" class="form-control" placeholder="e-mail" />
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Quero meu e-book grátis</button>
        </div>
      </form>
    </div>
  </div>

  <!-- post 1 -->
  <div id="conteudo">
    <section class="container" id="post">
      <figure id="post-container" class="jumbotron post-responsive" >
        <img id="img" class="img-responsive" src="img/3-apps-que-vao-mudar-a-sua-vida.jpeg">
        <div class="separador">
        </div>
        <figcaption class='caption' id="caption">
          <h4 data-toggle="collapse" data-target="#post1">3 Apps que vão mudar a sua vida!</h4>
          <p id="post-body" >Chega de tentar fingir que o celular não é uma extensão do nosso corpo.
          Ao invés de lutar contra isso é hora de aproveitar o que eles...
          </p>
          <div id="divBtnREAD">
            <button id="btnREAD" name="botao"><a href="3-apps-que-vao-mudar-a-sua-vida-para-melhor.html">Leia Mais</a></button>
          </div>
        </figcaption>
      </figure>
    </section>
  </div>

  <!-- post 2 -->
    <div id="conteudo">
      <section class="container" id="post">
        <figure id="post-container" class="jumbotron post-responsive" >
          <img id="img" class="img-responsive" src="img/15-mitos-e-verdades-sobre-a-bateria-do-seu-celular.jpeg">
          <div class="separador">
          </div>
          <figcaption class='caption' id="caption">
            <h4 data-toggle="collapse" data-target="#post1">Lorem Ipsum</h4>
            <p id="post-body" >
              Hoje em dia a maioria das pessoas são companheiras inseparáveis de seus celulares,
              mas você sabe tudo mesmo sobre seu fiel companheiro?
              Claro que nem todo mundo sabe que todas as...
            </p>
            <div id="divBtnREAD">
              <button id="btnREAD" name="botao"><a href="15-mitos-e-verdades-sobre-a-bateria-do-seu-celular.html">Leia Mais</a></button>
            </div>
          </figcaption>
        </figure>
      </section>
    </div>

    <!-- post 3 -->
      <div id="conteudo">
        <section class="container" id="post">
          <figure id="post-container" class="jumbotron post-responsive" >
            <img id="img" class="img-responsive" src="img/25-lugares-pet-friendly.jpg">
            <div class="separador">
            </div>
            <figcaption class='caption' id="caption">
              <h4 data-toggle="collapse" data-target="#post1">25 bares e restaurantes pet friendly</h4>
              <p id="post-body" >
                Cachorros têm apenas um defeito: vivem pouco. Vamos aproveitar ao máximo esse tempo e ficar grudado neles!
                E que atire o primeiro biscrok quem tem um bichinho e nunca ficou com o coração na mão ao ver a carinha
                de triste quando...
              </p>
              <div id="divBtnREAD">
                <button id="btnREAD" name="botao"><a href="25-bares-e-restaurantes-pet-friendly.html">Leia Mais</a></button>
              </div>
            </figcaption>
          </figure>
        </section>
      </div>

      <!-- post 4 -->
        <div id="conteudo">
          <section class="container" id="post">
            <figure id="post-container" class="jumbotron post-responsive" >
              <img id="img" class="img-responsive" src="img/a-check-list-perfeita-para-fazer-uma-road-trip-sem-stress.jpg">
              <div class="separador">
              </div>
              <figcaption class='caption' id="caption">
                <h4 data-toggle="collapse" data-target="#post1">A check-list perfeita para fazer uma road trip sem stress</h4>
                <p id="post-body" >
                  E aquele dia tão desejado ta chegando? Você tem mesmo certeza que ta tudo certo?
                  Ainda não sabe do que eu estou falando, não é?
                  Eu to falando daquela ROAD TRIP que você tem sonhado há muito tempo. E agora, meu amigo, ela vai sair do papel.
                  Aqui vão algumas dicas para você se planejar melhor.
                </p>
                <div id="divBtnREAD">
                  <button id="btnREAD" name="botao"><a href="a-check-list-perfeita-para-fazer-uma-road-trip-sem-stress.html">Leia Mais</a></button>
                </div>
              </figcaption>
            </figure>
          </section>
        </div>

</body>
</html>
