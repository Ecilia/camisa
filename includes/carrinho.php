<?php
include 'head.php';
include 'navbar.php';
?>

<body>
    <div class="container">
        <h1>Carrinho de Compras</h1>
        <hr>
        <ul class="list-group mb-3">
            <li class="list-group-item py-3">
                <div class="row g-3">
                    <div class="col-4 col-md-3 col-lg-2">
                        <a href="#">
                            <img src="..\img\camisa-1.jpg" class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                        <h4><b><a href="#" class="text-decoration-none text-dark"> Kit Camiseta: Combinando Pizza Tumblr</a></b></h4>
                        <h5>
                            <small> Camiseta Casal Pizza Love - Dia dos Namorados | Amigos Combinando Pizza Tumblr.</small>
                        </h5>
                    </div>
                    <div class="col-6 offset-6 col-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-x1-2 align-self-center mt-3">
                        <div class="input-group">
                            <button type="button" class="btn btn-outline-dark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                                    <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                                </svg>
                            </button>
                            <input type="text" class="form-control text-center border-dark" value="4">
                            <button type="button" class="btn btn-outline-dark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                </svg>
                            </button>
                            <button type="button" class="btn btn-outline-danger border-dark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </button>

                        </div>
                        <div class="text-right mt-2">
                            <small class="text-secondary">Valor Unit??rio: R$10,00</small><br>
                            <span class="text-dark"> Valor total: R$40,00</span>

                        </div>

                    </div>
                </div>
            </li>

            <li class="list-group-item py-3">
                <div class="row g-3">
                    <div class="col-4 col-md-3 col-lg-2">
                        <a href="#">
                            <img src="..\img\camisa.jpg" class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                        <h4><b><a href="#" class="text-decoration-none text-dark"> Camisa para Personaliza????o</a></b></h4>
                        <h5>
                            <small> Camisa Toda Branca para Personaliza????o</small>
                        </h5>
                    </div>
                    <div class="col-6 offset-6 col-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-x1-2 align-self-center mt-3">
                        <div class="input-group">
                            <button type="button" class="btn btn-outline-dark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                                    <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                                </svg>
                            </button>
                            <input type="text" class="form-control text-center border-dark" value="2">
                            <button type="button" class="btn btn-outline-dark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                </svg>
                            </button>
                            <button type="button" class="btn btn-outline-danger border-dark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </button>

                        </div>
                        <div class="text-right mt-2">
                            <small class="text-secondary">Valor Unit??rio: R$30,00</small><br>
                            <span class="text-dark"> Valor total: R$60,00</span>

                        </div>

                    </div>
                </div>
            </li>

            <li class="list-group-item py-3">
                <div class="row g-3">
                    <div class="col-4 col-md-3 col-lg-2">
                        <a href="#">
                            <img src="..\img\camisa-2.jpg" class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                        <h4><b><a href="#" class="text-decoration-none text-dark"> Blusa Moletom Casaco Jordan Preto Unissex</a></b></h4>
                        <h5>
                            <small> Tamanho:P; Cor:Preto; Composto por 50% algod??o e 50% poli??ster.</small>
                        </h5>
                    </div>
                    <div class="col-6 offset-6 col-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-x1-2 align-self-center mt-3">
                        <div class="input-group">
                            <button type="button" class="btn btn-outline-dark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                                    <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                                </svg>
                            </button>
                            <input type="text" class="form-control text-center border-dark" value="1">
                            <button type="button" class="btn btn-outline-dark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                </svg>
                            </button>
                            <button type="button" class="btn btn-outline-danger border-dark btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </button>

                        </div>
                        <div class="text-right mt-2">
                            <small class="text-secondary">Valor Unit??rio: R$20,00</small><br>
                            <span class="text-dark"> Valor total: R$20,00</span>

                        </div>

                    </div>
                </div>
            </li>

            <li class="list-group-item py-3">
                <div class="text-right">
                    <h4 class="text-dark mb-3">Valor total R$40,00</h4>
                    <a href="..\includes\index.php" class="btn btn-outline-success btn-lg">Continuar Comprando</a>
                    <button class="btn btn-danger btn-lg">
                        <a href="..\includes\paga.php" class=" text-light mb-3 text-decoration-none">Finalizar Compra</a>
                    </button>
                </div>
            </li>
        </ul>
    </div>

</body>

</html>
<hr>
<?php
include 'footer.php'
?>
