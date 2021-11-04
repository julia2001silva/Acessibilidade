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

<div class="container-fluid">
    <nav>
      <div class="row">
        <?php include('includes/nav.php'); ?>
      </div>
    </nav>
  </div>
    
    <div class="container-fluid d-flex flex-sm-column flex-md-row flex-lg-row">

        <div class="col-sm-12 col-md-2 col-lg-2 py-3">
           
            <nav class="navbar navbar-expand-md navbar-light sticky-top px-1">
                <div class="container-fluid px-0">
                  <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarText">
                    <ul class=" nav nav-pills mb-2  flex-column w-100 py-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active w-100 text-start" id="pills-introducao-tab" data-bs-toggle="pill" data-bs-target="#pills-introducao" type="button" role="tab" aria-controls="pills-introducao" aria-selected="true">Introdução</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link w-100 text-start" id="pills-estruturas-tab" data-bs-toggle="pill" data-bs-target="#pills-estruturas" type="button" role="tab" aria-controls="pills-estruturas" aria-selected="false">Estruturas</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link w-100 text-start" id="pills-cores-tab" data-bs-toggle="pill" data-bs-target="#pills-cores" type="button" role="tab" aria-controls="pills-cores" aria-selected="false">Cores</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link w-100 text-start" id="pills-tipografia-tab" data-bs-toggle="pill" data-bs-target="#pills-tipografia" type="button" role="tab" aria-controls="pills-tipografia" aria-selected="false">Tipografia</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link w-100 text-start" id="pills-imagens-tab" data-bs-toggle="pill" data-bs-target="#pills-imagens" type="button" role="tab" aria-controls="pills-imagens" aria-selected="false">Imagens</button>
                      </li>
                    </ul>

                  </div>
                </div>
              </nav>
        </div>
    
        <main class="col-sm-12 col-md-10 col-lg-10 vh-100 ">
            <div class="tab-content p-0 p-md-3 ms-1 border-start" id="pills-tabContent">

                <section id="pills-introducao" class="tab-pane fade show active "  role="tabpanel" aria-labelledby="pills-introducao-tab">     
                    <div class="d-flex">

                        <article class="content col-md-12 col-lg-10 p-3">
                            <div class="mb-5 ">
                                <h1>Introdução</h1>
                                <p class="fw-light fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
                            <div class="mb-5">
                                <h2 id="teste1">Teste 1</h2>
                                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
                                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
                                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
                            <div class="mb-5 ">
                                <h2 id="teste2">Teste2</h2>
                                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
                                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
    
                            <div class="mb-5">
                                <h2 id="teste3">Teste 3</h2>
                                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
                            <div class="mb-5">
                                <h2 id="teste4">Teste 4</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
                        </article>
    
                        <aside class="tab-navigation d-none d-lg-block col-lg-2">
                            <div class="sticky-top py-4">
                                <p class="fw-bold">Nesta página</p>
                                <hr>
                                <nav>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item border-bottom-0 ps-0 pt-0">
                                            <small>
                                                <a class="text-decoration-none text-secondary" href="#teste1">Teste 1</a>
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
                                  </ul>
            
                                </nav>
                            </div>               
                        </aside>
                    </div>

                </section>

                <section id="pills-estruturas" class="tab-pane fade "  role="tabpanel" aria-labelledby="pills-estruturas-tab">          
                    <div class="d-flex">
                        <article class="content col-md-12 col-lg-10 p-3">
                            <div class="mb-5">
                                <h1>Estruturas</h1>
                                <p class="fw-light fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
                            <div class="mb-5">
                                <h2 id="html-semantico">HTML Semântico</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
                            <div class="mb-5">
                                <h2 id="teste2">Teste2</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
    
                            <div class="mb-5">
                                <h2 id="teste3">Teste 3</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
                            <div class="mb-5 ">
                                <h2 id="teste4">Teste 4</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
                        </article>
    
                        <aside class="tab-navigation d-none d-lg-block col-lg-2">
                            <div class="sticky-top py-4">
                                <p class="fw-bold">Nesta página</p>
                                <hr>
                                <nav>
                                    <ul class="list-group list-group-flush">
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

                <section id="pills-cores" class="tab-pane fade "  role="tabpanel" aria-labelledby="pills-cores-tab">          
                    <div class="d-flex">
                        <article class="content col-md-12 col-lg-10 p-3">
                            <div class="mb-5">
                                <h1>Cores</h1>
                                <p class="fw-light fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
                            <div class="mb-5">
                                <h2 id="html-semantico">HTML Semântico</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
                            <div class="mb-5">
                                <h2 id="teste2">Teste2</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
    
                            <div class="mb-5">
                                <h2 id="teste3">Teste 3</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
                            <div class="mb-5 ">
                                <h2 id="teste4">Teste 4</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
                        </article>
    
                        <aside class="tab-navigation d-none d-lg-block col-lg-2">
                            <div class="sticky-top py-4">
                                <p class="fw-bold">Nesta página</p>
                                <hr>
                                <nav>
                                    <ul class="list-group list-group-flush">
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

                <section id="pills-tipografia" class="tab-pane fade "  role="tabpanel" aria-labelledby="tipografia-tab">          
                    <div class="d-flex">
                        <article class="content col-md-12 col-lg-10 p-3">
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
    
                            <div class="mb-5">
                                <h2 id="teste2">Teste2</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
    
                            <div class="mb-5">
                                <h2 id="teste3">Teste 3</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
                            <div class="mb-5 ">
                                <h2 id="teste4">Teste 4</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
                        </article>
    
                        <aside class="tab-navigation d-none d-lg-block col-lg-2">
                            <div class="sticky-top py-4">
                                <p class="fw-bold">Nesta página</p>
                                <hr>
                                <nav>
                                    <ul class="list-group list-group-flush">
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

                <section id="pills-imagens" class="tab-pane fade "  role="tabpanel" aria-labelledby="pills-imagens-tab">          
                    <div class="d-flex">
                        <article class="content col-md-12 col-lg-10 p-3">
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
    
                            <div class="mb-5">
                                <h2 id="teste2">Teste2</h2>
                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
    
                            <div class="mb-5">
                                <h2 id="teste3">Teste 3</h2>
                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
                            <div class="mb-5 ">
                                <h2 id="teste4">Teste 4</h2>
                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
                        </article>
    
                        <aside class="tab-navigation d-none d-lg-block col-lg-2">
                            <div class="sticky-top py-4">
                                <p class="fw-bold">Nesta página</p>
                                <hr>
                                <nav>
                                    <ul class="list-group list-group-flush">
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

                <section id="extras" class="tab-pane fade "  role="tabpanel" aria-labelledby="extras-tab">          
                    <div class="d-flex">
                        <article class="content col-md-12 col-lg-10 p-3">
                            <div class="mb-5">
                                <h1>Extras</h1>
                                <p class="fw-light fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
                            <div class="mb-5">
                                <h2 id="html-semantico">HTML Semântico</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
                            <div class="mb-5">
                                <h2 id="teste2">Teste2</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
    
                            <div class="mb-5">
                                <h2 id="teste3">Teste 3</h2>
                                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
    
                            <div class="mb-5 ">
                                <h2 id="teste4">Teste 4</h2>
                                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
    
    
                                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore maxime laboriosam neque totam voluptatibus incidunt delectus porro corrupti quis eius, odit ipsum nesciunt, sapiente numquam! Impedit qui debitis autem animi doloribus neque voluptas maxime dolores sapiente, laudantium provident nihil commodi eos tempora ea? Id laudantium velit alias quisquam nesciunt.</p>
                            </div>
                        </article>
    
                        <aside class="tab-navigation d-none d-lg-block col-lg-2">
                            <div class="sticky-top py-4">
                                <p class="fw-bold">Nesta página</p>
                                <hr>
                                <nav>
                                    <ul class="list-group list-group-flush">
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

    

    
    



    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>




