<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
  <title>Projeto Bootstrap</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Empresa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contato</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>

<section class="banner">
  <div class="container text-center">
    <h2><?php echo htmlentities('<'); ?>Empresa<?php echo htmlentities('>'); ?></h2>
      <p>Phasellus id tempus mauris, sit amet cursus quam. Nulla pellentesque sem a ex 
      pulvinar vulputate. </p>
      <a href="#">Saiba mais</a>
  </div>
</section>

<section class="cadastro-lead">
  <div class="container">
    <div class="row text-center">
        <div class="col-md-6">
          <h2><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Entre na nossa lista!</h2>
        </div>
        <div class="col-md-6">
          <form method="post">
            <input type="text" name="nome" /><input type="submit" value="Enviar" />
          </form>
        </div>
    </div>
  </div>
</section>  
 
<section class="depoimento text-center">
  <div class="container">
    <div class="row">
      <div class="col-nd-12">
        <h2>Depoimento</h2>
          <blockquote>
          <hr>
          <p class="nb-0">"Phasellus id tempus mauris, sit amet cursus quam. Nulla pellentesque 
          sem a ex pulvinar vulputate. Quisque quis volutpat quam, nec suscipit mi. Nunc ac 
          varius arcu. Fusce rhoncus ligula vel leo molestie cursus. Vivamus id bibendum tortor, 
          nec aliquet tellus. Donec tincidunt elementum odio, at auctor diam egestas ac. Nulla 
          dictum sapien augue, nec vulputate est dictum in. Donec a eros dui. Nulla nec 
          sollicitudin enim. Praesent rutrum elementum leo sit amet posuere."</p>
          </blockquote>
      </div>
    </div>
  </div>
</section>

<section class="diferenciais text-center">
  <h2>Conheça nossa empresa!</h2>
    <div class="container diferenciais-container">
      <div class="row">
        <div class="col-md-4">
          <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
          </svg></h3>
          <h2>Diferencial #1</h2>
          <p>Phasellus id tempus mauris, sit amet cursus quam. Nulla pellentesque 
              sem a ex pulvinar vulputate. Quisque quis volutpat quam, nec suscipit mi. Nunc ac 
              varius arcu. Fusce rhoncus ligula vel leo molestie cursus. Vivamus id bibendum tortor, 
              nec aliquet tellus. Donec tincidunt elementum odio, at auctor diam egestas ac. Nulla 
              dictum sapien augue, nec vulputate est dictum in. Donec a eros dui. Nulla nec 
              sollicitudin enim. Praesent rutrum elementum leo sit amet posuere.</p>
        </div>

        <div class="col-md-4">
          <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trophy" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
          </svg></h3>
          <h2>Diferencial #2</h2>
          <p>Phasellus id tempus mauris, sit amet cursus quam. Nulla pellentesque 
              sem a ex pulvinar vulputate. Quisque quis volutpat quam, nec suscipit mi. Nunc ac 
              varius arcu. Fusce rhoncus ligula vel leo molestie cursus. Vivamus id bibendum tortor, 
              nec aliquet tellus. Donec tincidunt elementum odio, at auctor diam egestas ac. Nulla 
              dictum sapien augue, nec vulputate est dictum in. Donec a eros dui. Nulla nec 
              sollicitudin enim. Praesent rutrum elementum leo sit amet posuere.</p>
        </div>

        <div class="col-md-4">
          <h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
          </svg></h3>
          <h2>Diferencial #3</h2>
          <p>Phasellus id tempus mauris, sit amet cursus quam. Nulla pellentesque 
              sem a ex pulvinar vulputate. Quisque quis volutpat quam, nec suscipit mi. Nunc ac 
              varius arcu. Fusce rhoncus ligula vel leo molestie cursus. Vivamus id bibendum tortor, 
              nec aliquet tellus. Donec tincidunt elementum odio, at auctor diam egestas ac. Nulla 
              dictum sapien augue, nec vulputate est dictum in. Donec a eros dui. Nulla nec 
              sollicitudin enim. Praesent rutrum elementum leo sit amet posuere.</p>
        </div>
      </div>
    </div>
</section>

  <section class="equipe">
    <h2>Equipe</h2>
    <div class="container equipe-container">
      <div class="row">
        <div class="col-md-6">
          <div class="equipe-single">
            <div class="row">
              <div class="col-md-2">
                <div class="user-picture">
                  <div class="user-picture-child"></div>
                </div>
              </div>  
              <div class="col-md-10">
                <h3>João da Silva</h3>
                <p>Phasellus id tempus mauris, sit amet cursus quam. Nulla pellentesque 
              sem a ex pulvinar vulputate.</p>
              </div>  
            </div>  
          </div>
        </div>
        <div class="col-md-6">
            <div class="equipe-single">
            <div class="row">
              <div class="col-md-2">
                <div class="user-picture">
                  <div class="user-picture-child"></div>
                </div>
              </div>  
              <div class="col-md-10">
                <h3>Joaquina Moreira</h3>
                <p>Phasellus id tempus mauris, sit amet cursus quam. Nulla pellentesque 
              sem a ex pulvinar vulputate.</p>
              </div>  
            </div> 
          </div>
        </div>
      </div>  
    </div>
  </section>

<section class="final-site">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>Fale Conosco</h3>
        <form>
          <div class="form-group">
            <label for="email">Nome:</label>
            <input type="text" name="nome" class="form-control" id="nome">
          </div>
          
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" class="form-control" id="email">
          </div>

          <div class="form-group">
            <label for="email">Mensagem:</label>
            <textarea class="form-control"></textarea>
          </div>
          <button type="button" class="btn btn-secondary">Enviar</button>
        </form>
      </div>  

      <div class="col-md-6">
        <h3>Nossos Planos</h3>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">Diário</th>
                  <th scope="col">Semanal</th>
                  <th scope="col">Mensal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>R$199,00</td>
                  <td>R$299,00</td>
                  <td>R$399,00</td>
                </tr>
                <tr>
                  <td>R$199,00</td>
                  <td>R$299,00</td>
                  <td>R$399,00</td>
                </tr>
                <tr>
                  <td>R$199,00</td>
                  <td>R$299,00</td>
                  <td>R$399,00</td>
                </tr>
              </tbody>
            </table>
        </div>     
    </section>

<!-- Footer -->
<footer class="page-footer font-small blue">
  <div class="footer-copyright text-center">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
</footer>

</body>
</html>