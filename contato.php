<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/f81c81ae7b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Contato</title>
</head>

<body>

    <header>
        <?php include('includes/nav.php'); ?>
    </header>




    <div class="container mt-3">
        <main>
            <article class="mb-5">
                <div class="mb-5">
                    <hgroup>
                        <h1>Fale Conosco</h2>
                            <h2>Estamos prontos para te ouvir.</h3>
                    </hgroup>
                    <p class="fw-light">Você pode enviar uma dúvida técnica, fazer uma reclamação ou dar uma sugestão.
                        Escolha o assunto e fale conosco.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 d-flex flex-column justify-content-between">
                        <div>
                            <h3 class="fw-normal">Tire as suas Dúvidas</h3>
                            <p>It is a long established fact that a reader will be distracted by the
                                readable
                                content of a page when looking at its layout.</p>
                        </div>

                        <div>
                            <h3 class="fw-normal">Faça uma Sugestão</h3>
                            <p>It is a long established fact that a reader will be distracted by the
                                readable
                                content of a page when looking at its layout.</p>
                        </div>

                        <div>
                            <h3 class="fw-normal">Você pode Fazer uma Reclamação</h3>
                            <p>It is a long established fact that a reader will be distracted by the
                                readable
                                content of a page when looking at its layout.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <form class="d-flex flex-column justify-content-between gap-2">
                            <div class="form-group">
                                <label>Nome Completo <span id="ocultar" class="position-absolute">(Obrigatório)</span></label>
                                <input type="text" class="form-control" placeholder="Digite seu nome" required>
                            </div>

                            <div class="form-group">
                                <label>E-mail <span id="ocultar" class="position-absolute">(Obrigatório)</span></label>
                                <input type="email" class="form-control" placeholder="Digite seu email" required>
                            </div>

                            <div class="form-group">
                                <label for="select">Escolha um Assunto</label>
                                <select class="form-select col-6" id="select">
                                    <option selected value="1">Dúvidas Técnica</option>
                                    <option value="2">Sugestão</option>
                                    <option value="3">Reclamação</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Mensagem <span id="ocultar" class="position-absolute">(Obrigatório)</span></label>
                                <textarea class="form-control" rows="5" required></textarea>
                            </div>



                            <div class="form-group">
                                <button type="submit" class="btn btn-primary justify-content-end">Enviar</button>
                                <button type="reset" class="btn btn-outline-secondary justify-content-end">Limpar</button>
                            </div>

                        </form>
                    </div>
            </article>


            <aside class="mt-5 d-flex flex-column flex-md-row gap-3 justify-content-between">

                <div class="mt-4 col-lg-4">
                    <a class="d-block py-3 btn btn-outline-success d-flex flex-column justify-content-center align-items-center" href="https://wa.me/5511969123654">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                        <p class="m-0">Atendimento Via WhatAapp</p>
                    </a>
                </div>

                <div class="mt-4 col-lg-4">
                    <a class="d-block py-3 btn btn-outline-warning d-flex flex-column justify-content-center align-items-center" href="tel:47186325">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <p class="m-0">Atendimento Por Telefone</p>
                    </a>
                </div>

                <div class="mt-4 col-lg-4">
                    <a class="d-block py-3 btn btn-outline-primary d-flex flex-column justify-content-center align-items-center" href="mailto:acessibilidadena web@gmail.com">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                        </svg>
                        <p class="m-0">Atendimento Pelo Email</p>
                    </a>
                </div>
            </aside>
        </main>
    </div>


    <footer class="col-12">
        <?php include('includes/footer.php'); ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>