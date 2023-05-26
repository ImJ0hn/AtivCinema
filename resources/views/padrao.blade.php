<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cinema Adm</title>
</head>
<body>
<header>
<div class="container-nav">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/mostrar-pag-filme">Filmes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastro-poltrona">Reservar</a>
              </li>
            <li class="nav-item">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Cadastrar</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{'/cadastro-filme'}}">Filme</a></li>
                    <li><a class="dropdown-item" href="{{'/cadastro-funcionario'}}">Funcionário</a></li>
                </ul>
              </li>
            </li>
            <li class="nav-item">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Gerenciar</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{'/gerenciar-filme'}}">Filme</a></li>
                    <li><a class="dropdown-item" href="{{'/gerenciar-funcionario'}}">Funcionário</a></li>
                    <li><a class="dropdown-item" href="{{'/gerenciar-poltrona'}}">Poltrona</a></li>
                </ul>
              </li>
            </li>
          
          
        </div>
      </div>
    </nav> 
  </div>
    
<div class="container">

@yield('content')    

</div>

    </header>

    <footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>   
   
</footer>

</body>
</html>

<style>
.container-nav
{
  position:fixed;
  top:0;
}
  </style>