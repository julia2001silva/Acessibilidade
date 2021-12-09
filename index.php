<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300;400;700&family=M+PLUS+1+Code:wght@300;400;700&family=Montserrat:wght@200;400;500;700&family=Poppins:wght@300;400;500;600;900&display=swap" rel="stylesheet">
  
  <!-------------------css-------------------->
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <!------------------bootstrap----------------->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <!----------------- Nav------------------->
  <div class="container-fluid">
    <nav>
      <div class="row">
        <?php include('includes/nav.php'); ?>
      </div>
    </nav>
  </div>
  <!--------------------js---------------------->
  <script type="text/javascript" src="bootstrap.min.js"></script>

  <header id="content">
    <img src="./image/banner.webp" class=" img-fluid "
      alt="Você que é programador e quer aprender mais sobre acessibilidade na web, conheça agora as melhores dicas para deixar seu site mais acessivel." />
  </header>


  <!---------------------main-------------------------->
  <main>
    <article>

      <!-------------card 1---------------------->
      <div class="container">
        <div class="row mt-3 g-4">
          <aside class="col-xl-4 col-md-4 col-sm-12">
            <div class="card text-white card-1">
              <div class="card-body">
                <h5 class="card-title"> Dica 1</h5>
                <p class="card-text">É muito importante que seu site seja acessivel para que pessoas com deficiência
                  possam ter mais acesso aos conteúdos disponiveis na web. </p>
              </div>
            </div>
          </aside>
          <aside class="col-xl-4 col-md-4 col-sm-12">
            <div class="text-white card-2" >
              <div class="card-body">
                <h5 class="card-title">Dica 2</h5>
                <p class="card-text">Quando você se preocupa com a acessibilidade do seu site, você demonstra que tem
                  empatia e que se preocupa com o próximo.</p>
              </div>
            </div>
          </aside>
          <aside class="col-xl-4 col-md-4 col-sm-12">
            <div class="card text-white card-3">
              <div class="card-body">
                <h5 class="card-title">Dica 3</h5>
                <p class="card-text">A acessibilidade é um diferencial grande no mercado, quando seu site é acessivel,
                  ele fica em uma boa posição nas procuras. </p>
              </div>
            </div>
          </aside>
        </div>

        <!----------------------card 2------------------------------------->


        <div class="card text-center card border-secondary mt-3">
          <div class="card-header">
          </div>
          <div class="card-body justify">
            <h5 class="card-title"> Deixe seu site acessivel</h5>
            <p class="card-text">Quando um site não está acessível, milhões de usuários são impedidos de consumir
              informação, de realizar compras e, até mesmo, de se comunicar com outras pessoas. Ou seja, é sinônimo de
              fechar portas em uma sociedade que se orgulha em dizer que é globalizada e digitalmente conectada.
            </p>
            <div class="row">
              <p class="col-xl-6 col-md-6 col-sm-12">Além de deixar de ganhar dinheiro, já que pessoas com deficiência
                também são
                consumidores ativos, a empresa demonstra falta de empatia e de humanidade para com outros usuários.
                Vale lembrar, ainda, que um site acessível é mais bem ranqueado pelos algoritmos do Google, já que o
                buscador é capaz de reconhecer esse tipo de prática, o que o torna mais relevante nas pesquisas.
              </p>

              <p class="col-xl-6 col-md-6 col-sm-12">Tendo esse contexto em evidência, em 2016, foi imposta a Lei
                Brasileira de Inclusão,
                exigindo que todas as páginas da web estejam acessíveis, sejam elas privadas, sejam elas públicas.
                Resumindo, acessibilidade na web não é apenas uma forma de cumprir com exigências legais, mas também é
                uma maneira de garantir um diferencial competitivo para a sua empresa.
              </p>
            </div>
            <div class="row">
              <p class="col-xl-12 col-md-12 col-sm-12">Ter um website acessível permitirá que a sua marca amplie o
                público que visita o seu
                site e atraia novos usuários. Esse público, por sua vez, promoverá a sua empresa, aumentando a
                relevância e o ranqueamento nos mecanismos de busca e divulgando o seu negócio.
              </p>
            </div>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
          <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card">
              <img src="./image/imagemum.webp" class="card-img-top" alt="representação gráfica de html semantico">
              <div class="card-body">
                <h5 class="card-title">Html Semântico</h5>
                <p class="card-text">É muito importante o uso da semântica HTML que pode ser chamada de POSH ou plain
                  old semantic HTML. Usar o HTML semântico é usar de forma correta os elementos HTML.</p>
                <a href="acessibilidade.php" class="btn btn-primary">Ler mais</a>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card">
              <img src="./image/imagemdois.webp" class="card-img-top" alt="representação gráfica de uma página de papel">
              <div class="card-body">
                <h5 class="card-title">Layout de Páginas</h5>
                <p class="card-text">Antigamente os layouts das páginas eram criados utilizando tabelas HTML, utilizando
                  as células da tabela para se comportarem como cabeçalho, rodapé, barra lateral,
                  etc.</p>
                <a href="acessibilidade.php" class="btn btn-primary">Ler mais</a>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card">
              <img src="./image/imagemtres.webp" class="card-img-top" alt="representação gráfica de figuras e fotos">
              <div class="card-body">
                <h5 class="card-title">Uso de Alt</h5>
                <p class="card-text">É muito importante usar o elemento alt nas imagens para que as pessoas com
                  deficiência visual possam saber do que se trata a imagem, com o uso de leitores de tela por exemplo.
                </p>
                <a href="acessibilidade.php" class="btn btn-primary">Ler mais</a>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card">
              <img src="./image/imagemquatro.webp" class="card-img-top"
                alt="representação gráfica de linhas que representam a linguagem utilizada">
              <div class="card-body">
                <h5 class="card-title">Uso de linguagem clara</h5>
                <p class="card-text">A linguagem usada também pode afetar a acessibilidade, por isso é importante usar
                  uma linguagem clara que não use jargões e gírias. O uso de uma linguagem complexa acaba atrapalhando.
                </p>
                <a href="acessibilidade.php" class="btn btn-primary">Ler mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </article>
  </main>

  <footer class="col-12">
    <?php include('includes/footer.php'); ?>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>