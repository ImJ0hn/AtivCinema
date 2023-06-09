
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet"> 
</head>
<body>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        
        </div>

<h1>Destaques</h1>

        <div class="container-filmes">
          <br>

          <div class="card" style="width: 25rem;">
              <img src="img/slide1.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">A Baleia</h5>
                <p class="card-text">Um professor de inglês recluso que vive com obesidade severa tenta se reconectar com sua distante filha adolescente para uma última chance de redenção..</p>
              </div>
            </div>

            <br>

          <div class="card" style="width: 25rem;">
              <img src="img/slide2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">A decisão de Partir</h5>
                <p class="card-text">Um homem morre depois de uma queda do topo de uma montanha. O detective Hae-Joon, da cidade de Busan, é chamado para investigar esta misteriosa morte. Durante a investigação, o detective conhece Seo-Rae, viúva do homem morto, e trata-a como suspeita, Mas, devido à personalidade misteriosa desta mulher, começa a interessar-se cada vez mais por ela. À medida que o caso avança, as duas personagens tornam-se cada vez mais próximas, mas enquanto Seo-Rae parece esconder as suas verdadeiras intenções e sentimentos, Hae-Joon, apesar de duvidar dela, mantém um desejo forte por aquela que é a sua principal suspeita.</p>
              </div>
            </div>

            <br>

          <div class="card" style="width: 25rem;">
              <img src="img/slide3.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">O Pastor e o Guerrilheiro</h5>
                <p class="card-text">Na virada do milênio, Juliana, filha ilegítima de um coronel que comete suicídio, descobre que seu pai foi torturador durante a ditadura militar no Brasil.</p>
              </div>
            </div>

        </div>




        <h1>Lançamentos</h1>

<div class="container-filmes">
    

    <br>

    <div class="card" style="width: 25rem;">
        <img src="img/card1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">A Pior Pessoa do Mundo</h5>
          <p class="card-text">Uma jovem tem dificuldades para escolher um caminho na carreira e começa a achar sua vida amorosa incerta depois de conhecer um charmoso homem em uma festa.</p>
        </div>
      </div>

      <br>


      <div class="card" style="width: 25rem;">
        <img src="img/card2.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Doutor Estranho no Multiverso da Loucura</h5>
          <p class="card-text">O aguardado filme trata da jornada do Doutor Estranho rumo ao desconhecido. Além de receber ajuda de novos aliados místicos e outros já conhecidos do público, o personagem atravessa as realidades alternativas incompreensíveis e perigosas do Multiverso para enfrentar um novo e misterioso adversário.</p>
        </div>
      </div>

    <br>

      <div class="card" style="width: 25rem;">
        <img src="img/card3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Arremessando Alto</h5>
          <p class="card-text">Um olheiro de basquete azarado encontra um jogador com um grande potencial e se esforça para mostrar ao mundo que os dois merecem chegar à NBA..</p>
        </div>
      </div>

      <br>

      <div class="card" style="width: 25rem;">
        <img src="img/card4.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Órfã 2: A Origem</h5>
          <p class="card-text">Esther consegue escapar de um centro psiquiátrico onde está confinada e viaja para os Estados Unidos se passando por filha desaparecida de uma família rica. No entanto, uma mãe superprotetora fará de tudo por sua família, não importando os meios.</p>
        </div>
      </div>

      <br>

      <div class="card" style="width: 25rem;">
        <img src="img/card5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Homem-Aranha: Sem Volta para Casa</h5>
          <p class="card-text">Peter Parker tem a sua identidade secreta revelada e pede ajuda ao Doutor Estranho. Quando um feitiço para reverter o evento não sai como o esperado, o Homem-Aranha e seu companheiro dos Vingadores precisam enfrentar inimigos de todo o multiverso.</p>
        </div>
      </div>

</div>
        
<h1>Populares</h1>

<div class="container-filmes">
<br>
  <div class="card" style="width: 25rem;">
    <img src="img/card5.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Homem-Aranha: Sem Volta para Casa</h5>
      <p class="card-text">Peter Parker tem a sua identidade secreta revelada e pede ajuda ao Doutor Estranho. Quando um feitiço para reverter o evento não sai como o esperado, o Homem-Aranha e seu companheiro dos Vingadores precisam enfrentar inimigos de todo o multiverso.</p>
    </div>
  </div>

  <br>

  <div class="card" style="width: 25rem;">
    <img src="img/pop1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Adão Negro</h5>
      <p class="card-text">O poderoso Adão Negro é libertado de sua tumba para lançar sua justiça cruel sobre a Terra..</p>
    </div>
  </div>

  <br>

  <div class="card" style="width: 25rem;">
    <img src="img/pop2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Top Gun: Maverick</h5>
      <p class="card-text">Depois de mais de 30 anos de serviço como um dos principais aviadores da Marinha, Pete "Maverick" Mitchell está de volta, rompendo os limites como um piloto de testes corajoso. No mundo contemporâneo das guerras tecnológicas, Maverick enfrenta drones e prova que o fator humano ainda é essencial.</p>
    </div>
  </div>

  <br>

  <div class="card" style="width: 25rem;">
    <img src="img/pop3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Uncharted: Fora do Mapa</h5>
      <p class="card-text">Nathan Drake e seu parceiro canastrão Victor "Sully" Sullivan embarcam em uma perigosa busca para encontrar o maior tesouro jamais encontrado. Enquanto isso, eles também rastreiam pistas que podem levar ao irmão perdido de Nathan..</p>
    </div>
  </div>

  <br>

  <div class="card" style="width: 25rem;">
    <img src="img/pop4.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">MoonFall</h5>
      <p class="card-text">Uma força misteriosa tira a lua de sua órbita e a lança em rota de colisão em direção à Terra.</p>
    </div>
  </div>

</div>

</body>
<style>

    body
    {
        background-color: navy;
    }

    h1
    {
      color: white;
      margin-left: 2%;
    }

    .container-nav
    {
      position: fixed;
      display: flex;
      z-index: 1;
      display: flex;
      justify-content: center;
      width: 100%;
    }

    .container-filmes
    {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        flex-direction: column;
        margin-left: 40%;
    }

    h5
    {
        font-weight: bolder;
        text-align: center;
    }


</style>
</html>
