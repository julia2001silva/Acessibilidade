<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Acessibilidade</title>


</head>

<body>

    <header class="container-fluid">
        <nav>
            <div class="row">
                <?php include('includes/nav.php'); ?>
            </div>
        </nav>
    </header>

    <div class="content-acessibilidade container-fluid d-flex flex-sm-column flex-md-row flex-lg-row flex-wrap">

        <div class="col-sm-12 col-md-2 col-lg-2 py-3">
            <nav class="navbar navbar-expand-md navbar-light sticky-top px-1">
                <div class="container-fluid px-0">
                    <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class=" nav nav-pills mb-2  flex-column w-100 py-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="btn-target nav-link active w-100 text-start" id="pills-introducao-tab" data-bs-toggle="pill" data-bs-target="#pills-introducao" type="button" role="tab" aria-controls="pills-introducao" aria-selected="true">Introdução<a class="get-content" href="#content">ir para o conteudo da guia introdução</a></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="btn-target nav-link w-100 text-start" id="pills-estruturas-tab" data-bs-toggle="pill" data-bs-target="#pills-estruturas" type="button" role="tab" aria-controls="pills-estruturas" aria-selected="false">Estruturas<a class="get-content" href="#content1">ir para o conteudo da guia estruturas</a></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="btn-target nav-link w-100 text-start" id="pills-cores-tab" data-bs-toggle="pill" data-bs-target="#pills-cores" type="button" role="tab" aria-controls="pills-cores" aria-selected="false">Cores<a class="get-content" href="#content2">ir para o conteudo da guia cores</a></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="btn-target nav-link w-100 text-start" id="pills-tipografia-tab" data-bs-toggle="pill" data-bs-target="#pills-tipografia" type="button" role="tab" aria-controls="pills-tipografia" aria-selected="false">Tipografia<a class="get-content" href="#content3">ir para o conteudo da guia tipografia</a></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="btn-target nav-link w-100 text-start" id="pills-imagens-tab" data-bs-toggle="pill" data-bs-target="#pills-imagens" type="button" role="tab" aria-controls="pills-imagens" aria-selected="false">Imagens<a class="get-content" href="#content4">ir para o conteudo da guia imagens</a></button>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>

        <main class="col-sm-12 col-md-10 col-lg-10 vh-100 ">
            <div class="tab-content position-relative p-0 p-md-3 ms-1 border-start" id="pills-tabContent">

                <section id="pills-introducao" class="tab-pane fade show active " role="tabpanel" aria-labelledby="pills-introducao-tab">
                    <div class="d-flex">

                        <article id="content" class="content col-md-12 col-lg-10 p-3">
                            <div class="mb-5 ">
                                <h1>Introdução</h1>
                                <p class="fw-light fs-5">
                                    Todo profissional qualificado para desenvolver websites utiliza princípios de design que tornam o site funcional e fácil de navegar, ou seja, usa princípios de usabilidade.
                                    Além de visualmente atraente, um website deve ser simples, intuitivo e permitir que os usuários acessem a informação rápida e facilmente.
                                    Um website acessível vai um pouco além.
                                </p>
                            </div>

                            <div class="mb-5">
                                <h2 id="item1-introducao">O Que é Um Website Acessível?</h2>
                                <p>
                                    A acessibilidade na web é a solução que permite a qualquer pessoa navegar entender, perceber e interagir com o conteúdo de forma eficaz ao utilizá-lo.
                                    Um website acessível beneficia pessoas com qualquer tipo de deficiência, bem como pessoas idosas ou com conexões lentas, por exemplo. Uma web acessivel permite com que pessoas com alguma deficiência nao só utilize, mas tambem contribuam com a web.
                                </p>
                            </div>

                            <a class="get-content" href="#nav-topicos-introducao">navegar entre os tópicos da página</a>

                            <div class="mb-5 ">
                                <h2 id="item2-introducao">Quais os beneficios de um site acessível?</h2>
                                <p>Um website acessivel tras inumeros beneficios, tanto para as organizações quanto para a sociedade. Entre os beneficios para as organizações estao o carregamento mais rapido, uma maior facilidade para navegar incluindo mais usuários em seus acessos diarios, alem de um melhor ranqueamento nos motores de buscas. </p>

                                <p>Entre os beneficios para a sociedade podemos listar, por exemplo, a autonomia para pessoas com deficiencia acessarem para consumir e contribuir com os conteudos da web, uma eficiente utilização de um leitor de tela, por exemplo, esta diretamente ligada a um site bem otimizado com recursos de acessibilidade.</p>
                            </div>

                            <a class="get-content" href="#nav-topicos-introducao">navegar entre os tópicos da página</a>



                            <div class="mb-5">
                                <h2 id="item3-introducao">Os primeiros passos para a acessibilidade</h2>
                                <p>Está meio perdido e não sabe por onde começar? Separamos algumas dicas bem simples e práticas para você ir aquecendo os motores e tornando seu site mais acessível pouco a pouco. São pequenos detalhes, mas que fazem toda a diferença para quem precisa!</p>
                                <p>Continue a leitura e confira as melhores dicas para deixar se site acessivel para todos.</p>
                                <a class="get-content" href="#pills-estruturas-tab">Ir para o próximo tópico</a>
                            </div>
                            <a class="get-content" href="#nav-topicos-introducao">navegar entre os tópicos da página</a>
                        </article>

                        <aside class="tab-navigation d-none d-lg-block col-lg-2">
                            <div class="sticky-top py-4">
                                <nav id="nav-topicos-introducao">
                                    <p class="fw-bold">Nesta página</p>
                                    <hr>
                                    <ul class="list-group list-group-flush" title="navegar pelo conteudo da guia introdução">
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#item1-introducao">O Que é Um Website Acessível?</a>
                                            </small>
                                        </li>
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#item2-introducao">Quais os beneficios de um site acessível?</a>
                                            </small>
                                        </li>
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#item3-introducao">Os primeiros passos para a acessibilidade</a>
                                            </small>
                                        </li>
                                    </ul>

                                </nav>
                            </div>
                        </aside>
                    </div>

                </section>

                <section id="pills-estruturas" class="tab-pane fade " role="tabpanel" aria-labelledby="pills-estruturas-tab">
                    <div class="d-flex">
                        <article id="content1" class="content col-md-12 col-lg-10 p-3">
                            <div class="mb-5">
                                <h1>Estruturas</h1>
                                <p class="fw-light fs-5">Confira aqui as melhores dicas sobre estruturas para acessibilidade e deixe seus sites mais acessiveis hoje mesmo.</p>
                            </div>

                            <div class="mb-5">
                                <h2 id="item1-estruturas">HTML Semântico</h2>
                                <p>
                                    Nos dias de hoje, a tecnologia possibilita que usuários deficientes visuais também possam acessar um site e absorver seu conteúdo através de leitores de tela. O HTML semântico torna as páginas da web acessíveis, isso ocorre porque os leitores de tela e navegadores são capazes de interpretar melhor o código.
                                </p>

                                <div class="col-12 my-3">
                                    <img class="img-fluid" src="./image/htmlsemantico.jpeg" alt="estrutura de uma pagina com html semantico">
                                </div>

                                <p>
                                    Ao invés deste leitor interpretar tudo como um amontoado de DIVs, ele entende toda a hierarquia do conteúdo existente entre cada parte, como cabeçalho, seções, artigos e rodapés, etc.
                                    Então, o entendimento do usuário não visual que acessa o conteúdo do site se torna bastante acessível.
                                </p>
                            </div>
                            <a class="get-content" href="#nav-topicos-estruturas">navegar entre os tópicos da página</a>


                            <div class="mb-5">
                                <h2 id="item2-estruturas">Formulários</h2>
                                <p>
                                    Por envolver a interação do visitante, seja para acesso restrito de determinada área, ou envio de informações privadas, os formulários devem possibilitar o acesso às informações durante o preenchimento não apenas para leitores de tela, mas por pessoas que utilizam navegadores gráficos.
                                </p>

                                <p>Para formulários acessíveis, deve-se atentar aos seguintes elementos: Label, FIELDSET, LEGEND e OPTGROUP. Uma boa dica é definir o mesmo ID do input para o FOR do label, pois desta forma, o elemento label ficará diretamente relacionado com o input.</p>
                            </div>
                            <a class="get-content" href="#nav-topicos-estruturas">navegar entre os tópicos da página</a>



                            <div class="mb-5">
                                <h2 id="item3-estruturas">Links e atalhos de navegação</h2>
                                <p>Os links de uma página devem ser navegáveis por teclado para a acessibilidade de pessoas com deficiência visual ou mobilidade reduzida, que não utilizam dispositivos apontadores (mouses, por exemplo).</p>


                                <p>Para isso, são utilizados atalhos de navegação pelo teclado, como o TAB, ALT ou SHIFT + AL, utilizadas para percorrer links, que devem seguir uma ordem lógica.</p>


                                <p>O atributo tabindex permite definir essa ordem dentro de HTML linear, com uma ordem lógica de navegação. Há três tipos de teclas de atalho para a navegação na web, que podem ser usadas de forma combinada ou isoladamente.No caso dos navegadores, cada um deles possuem conjuntos de atalhos próprios. O mesmo ocorre com leitores de telas e outras tecnologias assistivas, que possuem atalhos próprios.</p>
                            </div>
                            <a class="get-content" href="#nav-topicos-estruturas">navegar entre os tópicos da página</a>


                            <div>
                                <h2 id="item4-estruturas">Tabelas</h2>
                                <p>
                                    A seguir veremos os elementos e atributos disponíveis para a formatação de tabelas
                                    acessíveis:
                                </p>

                                <div>
                                    <h5>CAPTION para o título da tabela</h5>
                                    <p>
                                        O elemento CAPTION é o título da tabela. O uso de outros elementos como H1, P, TD ou
                                        TH pode ter “visualmente” o sentido de título, mas não são semanticamente corretos, e
                                        tampouco, acessíveis.
                                        No código HTML o elemento CAPTION deve ser colocado após a marcação TABLE e antes
                                        de qualquer outra marcação que seguir.
                                        Por padrão, o elemento CAPTION é mostrado centralizado logo acima da tabela. Para
                                        modificações no visual deve ser usado o CSS.
                                    </p>
                                </div>

                                <div>
                                    <h5>Atributo summary para a finalidade da tabela</h5>
                                    <p>
                                        O atributo “summary” deve vir dentro do elemento TABLE servindo como informação
                                        auxiliar para entendimento da tabela para leitores de tela e displays Braille, não sendo
                                        visível em navegadores de interface gráfica.
                                        O atributo “summary” descreve a finalidade da tabela e dá uma indicação da estrutura
                                        geral, sendo necessário para compreensão de tabelas complexas.
                                    </p>
                                </div>

                                <div>
                                    <h5>TH para identificar os cabeçalhos, TR para linha e TD para dado de tabela</h5>
                                    <p>
                                        Para tabelas simples, o uso apropriado do elemento TH é essencial para tornar a tabela
                                        acessível. Utilize o elemento TH para a identificação de cabeçalhos em linhas e colunas
                                        pelos leitores de tela. O elemento TR marca a linha da tabela e o elemento TD marca o
                                        conteúdo da célula como dado.
                                        Deve-se evitar o uso de colunas com células vazias, pois elas atrapalham a leitura dos
                                        dados pelos leitores de tela. As folhas de estilo devem ser utilizadas para fins de
                                        apresentação diferenciada da tabela ao invés de colunas e linhas de células vazias.

                                    </p>
                                </div>

                                <div>
                                    <h5>THEAD, TBODY e TFOOT grupos de linhas para tabelas extensas</h5>
                                    <p>
                                        O elemento THEAD agrupa uma ou mais linhas de cabeçalho da tabela. O elemento TFOOT
                                        agrupa linhas com informações de rodapé. No código HTML o elemento TFOOT deve
                                        aparecer antes do elemento TBODY.
                                        O elemento TBODY define o corpo da tabela que contém as células de dados. Uma tabela
                                        pode conter mais de um elemento TBODY separando os diferentes grupos de dados. Os elementos THEAD, TFOOT e TBODY de uma tabela devem ter o mesmo número de
                                        colunas.

                                    </p>
                                </div>

                                <a class="get-content" href="#pills-cores-tab">Ir para o próximo tópico</a>


                            </div>
                            <a class="get-content" href="#nav-topicos-estruturas">navegar entre os tópicos da página</a>

                        </article>

                        <aside class="tab-navigation d-none d-lg-block col-lg-2">
                            <div class="sticky-top py-4">

                                <nav id="nav-topicos-estruturas">
                                    <p class="fw-bold">Nesta página</p>
                                    <hr>
                                    <ul class="list-group list-group-flush" title="navegar pelo conteudo da guia estruturas">
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#item1-estruturas">HTML semântico</a>
                                            </small>
                                        </li>
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#item2-estruturas">Formulários</a>
                                            </small>
                                        </li>
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#item3-estruturas">Links e atalhos de navegação</a>
                                            </small>
                                        </li>
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#item4-estruturas">Tabelas</a>
                                            </small>
                                        </li>

                                    </ul>

                                </nav>
                            </div>
                        </aside>
                    </div>

                </section>

                <section id="pills-cores" class="tab-pane fade " role="tabpanel" aria-labelledby="pills-cores-tab">
                    <div class="d-flex">
                        <article id="content2" class="content col-md-12 col-lg-10 p-3">
                            <div class="mb-5">
                                <h1>Cores</h1>
                                <p class="fw-light fs-5">Confira aqui as melhores dicas sobre cores em acessibilidade e deixe seu site mais acessivel agora mesmo.</p>
                            </div>

                            <div class="mb-5">
                                <h2 id="item1-cores">A importância do contraste entre elementos da interface</h2>
                                <p>Devemos proporcionar, através das cores, um contraste suficiente para que as pessoas consigam enxergar elementos importantes e que garanta uma boa leitura. Isso serve para qualquer tipo de projeto, sejam eles projetos impressos, interfaces digitais ou embalagens.</p>

                                <p>
                                    Quando falamos sobre cores entendemos que o contraste é a distinção que percebemos em relação a matiz, saturação ou luminosidade da cor.
                                    Ou seja, nestas relações, quanto mais alto for o contraste maior a diferença entre as cores e mais fácil a distinção. E quando menor o contraste mais difícil distingui-las.
                                </p>

                                <p>No livro Sintaxe da Linguagem Visual, a autora Donis A. Dondis argumenta que a principal estratégia para induzir e reforçar a mensagem visual é o contraste. Os elementos de uma composição devem garantir que existe uma diferença marcante e perceptível entre eles.</p>
                            </div>
                            <a class="get-content" href="#nav-topicos-cores">navegar entre os tópicos da página</a>


                            <div class="mb-5">
                                <h2 id="item2-cores">Propriedades das cores</h2>
                                <p>Entendemos Matiz, como a propriedade da cor que classifica e distingue uma cor de outra. Ou seja, vermelho que é diferente de azul, que é diferente de verde.
Vermelho, azul e verde são termos que classificam e distinguem um Matiz dos outros.</p>

                                <div class="col-12 d-flex justify-content-center my-3">
                                    <img class="img-fluid" src="./image/matiz.png" alt="amostra de matiz com varias cores">
                                </div>

                                <p>A saturação se dá pela proporção de quantidade de uma cor em relação à cor cinza. A cor se torna mais saturada quando reduzimos a quantidade de cinza. A saturação é referente à intensidade da cor. Uma cor saturada é muito viva e intensa.</p>

                                <div class="col-12 d-flex justify-content-center my-3">
                                    <img class="img-fluid" src="./image/saturacao.png" alt="amostra de saturacao com varias cores">
                                </div>

                                <p>Já a luminosidade é uma propriedade que está ligada a percepção de brilho. Do claro, ao escuro. Aumente a luminosidade de uma cor e ela se aproximará do branco. Diminua e se aproximará do preto.</p>

                                <div class="col-12 d-flex justify-content-center my-3">
                                    <img class="img-fluid" src="./image/luminosidade.png" alt="amostra de matiz com varias cores">
                                </div>
                            </div>
                            <a class="get-content" href="#nav-topicos-cores">navegar entre os tópicos da página</a>



                            <div class="mb-5">
                                <h2 id="item3-cores">Evitar elementos que piscam ou mudam de cores rapidamente</h2>
                                <p>Não usar elementos que façam a página piscar ou mudar de cor em frequências superiores a 2Hz e inferiores a 55Hz (1Hz = 1 rotação/oscilação/imagem por segundo). Ou seja, não usar nada que "pisque" mais do que 3 vezes por segundo.</p>


                                <p>Cinco por cento dos epiléticos são foto-sensíveis e podem ter ataques causados por determinadas frequências de elementos a piscar.</p>


                                <p>Se for inevitável o uso destes elementos que piscam, deve-se avisar o utilizador antes de mostrar esse elemento com uma mensagem do género: "AVISO: Este link abre uma página que contém elementos que piscam e como tal não deve ser visualizada por pessoas com epilepsia fotossensível".</p>
                            </div>

                            <a class="get-content" href="#nav-topicos-cores">navegar entre os tópicos da página</a>

                        </article>

                        <aside class="tab-navigation d-none d-lg-block col-lg-2">
                            <div class="sticky-top py-4">

                                <nav id="nav-topicos-cores">
                                    <p class="fw-bold">Nesta página</p>
                                    <hr>
                                    <ul class="list-group list-group-flush" title="navegar pelo conteudo da guia cores">
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#item1-cores">A importância do contraste entre elementos da interface</a>
                                            </small>
                                        </li>
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#item2-cores">Propriedades das cores</a>
                                            </small>
                                        </li>
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#item3-cores">Evitar elementos que piscam ou mudam de cores rapidamente</a>
                                            </small>
                                        </li>
                                    </ul>

                                </nav>
                            </div>
                        </aside>
                    </div>

                </section>

                <section id="pills-tipografia" class="tab-pane fade " role="tabpanel" aria-labelledby="tipografia-tab">
                    <div class="d-flex">
                        <article id="content3" class="content col-md-12 col-lg-10 p-3">
                            <div class="mb-5">
                                <h1>Tipografia</h1>
                                <p class="fw-light fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>

                            <div class="mb-5">
                                <h2 id="html-semantico">HTML Semântico</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>

                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>

                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
                            <a class="get-content" href="#nav-topicos-tipografia">navegar entre os tópicos da página</a>


                            <div class="mb-5">
                                <h2 id="teste2">Teste2</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>

                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
                            <a class="get-content" href="#nav-topicos-tipografia">navegar entre os tópicos da página</a>



                            <div class="mb-5">
                                <h2 id="teste3">Teste 3</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>


                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>


                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
                            <a class="get-content" href="#nav-topicos-tipografia">navegar entre os tópicos da página</a>


                            <div>
                                <h2 id="teste4">Teste 4</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>


                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>


                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
                            <a class="get-content" href="#nav-topicos-tipografia">navegar entre os tópicos da página</a>

                        </article>

                        <aside class="tab-navigation d-none d-lg-block col-lg-2">
                            <div class="sticky-top py-4">

                                <nav id="nav-topicos-tipografia">

                                    <p class="fw-bold">Nesta página</p>
                                    <hr>
                                    <ul class="list-group list-group-flush" title="navegar pelo conteudo da guia tipografia">
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#html-semantico">HTML semântico</a>
                                            </small>
                                        </li>
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#teste2">Teste 2</a>
                                            </small>
                                        </li>
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#teste3">Teste 3</a>
                                            </small>
                                        </li>
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#teste4">Teste 4</a>
                                            </small>
                                        </li>
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="">Teste 5</a>
                                            </small>
                                        </li>
                                    </ul>

                                </nav>
                            </div>
                        </aside>
                    </div>

                </section>

                <section id="pills-imagens" class="tab-pane fade " role="tabpanel" aria-labelledby="pills-imagens-tab">
                    <div class="d-flex">
                        <article id="content4" class="content col-md-12 col-lg-10 p-3">
                            <div class="mb-5">
                                <h1>Imagens</h1>
                                <p class="fw-light fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>

                            <div class="mb-5">
                                <h2 id="html-semantico">HTML Semântico</h2>
                                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>

                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>

                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
                            <a class="get-content" href="#nav-topicos-imagens">navegar entre os tópicos da página</a>


                            <div class="mb-5">
                                <h2 id="teste2">Teste2</h2>
                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>

                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
                            <a class="get-content" href="#nav-topicos-imagens">navegar entre os tópicos da página</a>



                            <div class="mb-5">
                                <h2 id="teste3">Teste 3</h2>
                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>


                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>


                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
                            <a class="get-content" href="#nav-topicos-imagens">navegar entre os tópicos da página</a>


                            <div>
                                <h2 id="teste4">Teste 4</h2>
                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>


                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>


                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
                            <a class="get-content" href="#nav-topicos-imagens">navegar entre os tópicos da página</a>

                        </article>

                        <aside class="tab-navigation d-none d-lg-block col-lg-2">
                            <div class="sticky-top py-4">

                                <nav id="nav-topicos-imagens">

                                    <p class="fw-bold">Nesta página</p>
                                    <hr>
                                    <ul class="list-group list-group-flush" title="navegar pelo conteudo da guia imagens">
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#html-semantico">HTML semântico</a>
                                            </small>
                                        </li>
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#teste2">Teste 2</a>
                                            </small>
                                        </li>
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#teste3">Teste 3</a>
                                            </small>
                                        </li>
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#teste4">Teste 4</a>
                                            </small>
                                        </li>
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="">Teste 5</a>
                                            </small>
                                        </li>
                                    </ul>

                                </nav>
                            </div>
                        </aside>
                    </div>

                </section>
            </div>
        </main>




    </div>

    <footer class="col-12">
        <?php include('includes/footer.php'); ?>
    </footer>












    <script src="./js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>