<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div>
    <p>Welcome!</p>
    <p><?php echo session(
        'usuario'
    ); ?></P>
</div>  

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(
          '/Asignaturas'
      ); ?>">Asignaturas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="<?php echo base_url(
          '/Notas'
      ); ?>">Notas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="<?php echo base_url(
          '/Rendimiento'
      ); ?>">Curva de rendimiento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="<?php echo base_url(
          '/Evaluaciones'
      ); ?>">Evaluaciones</a>
        </li>
      </ul>
      <a href="<?php echo base_url(
          '/salir'
      ); ?>" class="btn btn-sm btn-outline-secondary">Salir</a>
    </div>
  </div>
</nav>

    <div id="titulo">
      <h1>PORTAL ESTUDIANTIL STACK ASSESSMENT</h1>
    </div>
    <div style="text-align: center">
      <p id="before-login"></p>      
      <br />
    </div>
    <div class="c-visitor-counter">
      <span id="counter" class="c-visitor-counter__count">10</span> Visitantes
    </div>
    <div id="main-content">
      <h2 class="Titulo">¿Que es Stack assessment?</h2>
      <br />
      <i>
        <b>Es un mecanismo auto-evaluatorio que permite la mejora del
          aprendizaje de las asignaturas en las que tengan fallas los
          estudiantes.</b>
      </i>
      <br />
      <br /><img id="hero" src="public/img/Imagen1.webp" alt="Texto alterno" /><br />
    </div>

    <br />

    <br />    
    <footer>
      <strong
        >Autores: Diana Katherine Romero Melo, William Fernando Vanegas Munevar,
        Andres Enrique Parada Quintero, Andres Felipe Prada Rondon</strong
      >
      <address>
        <a href="https://universidadean.edu.co/">Universidad EAN</a>
      </address>
      <h2>Guia 3 desarrollo web Universidad EAN</h2>

      <p>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
          <img
            style="border: 0; width: 88px; height: 31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="¡CSS Válido!"
          />
        </a>
      </p>

      <p>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
          <img
            style="border: 0; width: 88px; height: 31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
            alt="¡CSS Válido!"
          />
        </a>
      </p>
    </footer>
    <br />
    <script type="text/javascript">
      contador();
    </script>    
