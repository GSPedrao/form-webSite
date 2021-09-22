<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <style>
        body {
            background-color: rgb(245, 245, 245);
        }

        #sobres {
            color: white;
        }

        #sobres:hover {
            color: red;
        }
    </style>
</head>

<body>
    <!--MENU-->
    <header class="pb-3 bg-dark text-white mb-5">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start" id="menu">
                <img src="img/the room.png" width="100" height="100" class="">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <a href="home.html" class="text-decoration-none" id="sobres">
                        <li class="nav px-3">Home</li>
                    </a>
                    <a href="#sobre" class="text-decoration-none" id="sobres">
                        <li class="nav px-3">Sobre</li>
                    </a>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control-dark form-control" id="search" placeholder="Search..." aria-label="Search">
                </form>

                <div class="text-end">
                    <a href="login.html"><button class="btn btn-outline-light me-2">Logar</button></a>
                    <button class="btn btn-outline-danger">Cadastrar</button>
                </div>
            </div>
        </div>
    </header>

    <main class="container">

        <!--Cadastro-->
        <section class="container">
            <h1 class="text-center fw-bolder">Cadastre-se</h1>

            <form method="post" onsubmit="return ( verifica() )" name="fmrEnvia" action="cadastro.php">
                <!--Nome-->
                <div class="input-group ">
                    <input type="text" placeholder="Nome" class="form-control" id="nome" name="nome">

                    <input type="text" placeholder="Sobrenome" class="form-control mx-4" width="100px" id="sobren" name="sobren">

                </div>
                <br>
                <!--Email-->
                <div class="input-group ">
                    <input type="email" id="email" placeholder="nome@exemplo.com" class="form-control" name="email" onblur="checarEmail();">
                </div>
                <br>
                <!--Senha-->
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha">

                </div>
                <br>
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Confirmar Senha" id="csenha">

                </div>
                <br>
                <!--CPF-->
                <div class="input-group">
                    <input type="number" placeholder="CPF" class="form-control" id="cpf" name="cpf">

                </div>
                <br>
                <!--Nascimento-->
                <div class="input-group">
                    <input type="date" placeholder="Data de Nascimento" class="form-control" id="ddn" name="ddn">

                </div>
                <br>
                <!--Número-->
                <div class="input-group">
                    <input type="number" class="form-control" placeholder="Número" id="tel" required name="numero">


                </div>
                <br>
                <div class="input-group ">
                    <!--CEP-->
                    <input type="number" placeholder="CEP" class="form-control" id="cep" name="cep">
                    <!--RUA-->
                    <input type="text" placeholder="Rua" class="form-control mx-4" width="100px" id="endereco" name="rua">
                </div>
                <br>
                <div class="input-group ">
                    <!--Bairro-->
                    <input type="text" placeholder="Bairro" class="form-control" id="bairro" name="bairro">
                    <!--Cidade-->
                    <input type="text" placeholder="Cidade" class="form-control mx-4" width="100px" id="cidade" name="cidade">
                </div>
                <br>
                <div class="input-group ">
                    <!--Estado-->
                    <input type="text" placeholder="Estado" class="form-control" id="estado" name="estado">
                    <!--Complemento-->
                    <input type="text" placeholder="Complemento" class="form-control mx-4" width="100px" name="comp">
                </div>
                <br>
          
            <br>
                 <div id="botao">
            <input type="submit" class="btn_enviar btn btn-success container" name="cadastrar" onclick="Confirmacao()" value="cadastrar">
            </div>
            </form>
            
        </section>

    </main>


    
    <footer class="container text-center mt-5">
        <p class="fs-5">&copy Gabriel Souza Pedrão</p>
        <p id="sobre">Cadastre-se e venha conhecer <strong>THE ROOM</strong>, nós alugamos Salões vazios, como: </p>
        <p>Salões normais - Salões de festas - Quadras vazias - Ruas vazias - Saguão vazio - Pista de dança vazia - ringue vazio.</p>
    </footer>

    <script src="index.js"></script>
    <script src="CEP.js"></script>
</body>

</html>