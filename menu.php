<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MateAyuda</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!--Van las imagenes a ser usadas como iconos-->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <!--Planitllas css bootstrap-->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<!--Esto sirve para que no se pueda acceder a esta página si no se ha iniciado sesión.-->
<?php
  session_start();
  if (!$_SESSION["logged"]) {
    header("Location: index.php");
  } 
  ?>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <!--Va el navbar de Mateayuda, (la barra negra), los href sirven para navegar por id-->
      <h1 class="logo"><a href="index.html">MateAyuda</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#testimonio">Participantes</a></li>
          <li><a class="nav-link scrollto " href="#blog">Juegos</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!--Presentacion de Mateayuda, data-typed-items se encuentran las palabras de presentacion con efecto de teclado -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/post-5.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">Bienvenido a MateAyuda</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Recuerda, Aprende, Diviertete"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">




    <!-- ======= Testimonials Section ======= -->
    <section id="testimonio">
      <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/post-4.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <!--Swipper permite cambiar con los div que contengan la clase como el efecto carril javascript, sirve para presentar, class author sirve para mostrar el nombre del desarrollador-->

              <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                    <div class="testimonial-box">
                      <div class="author-test">
                        <img src="assets/img/puppy1.jpg" alt="" class="rounded-circle b-shadow-a">
                        <span class="author">Ivan</span>
                      </div>
                      <div class="content-test">
                        <p class="description lead">
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, in voluptatibus? Architecto sit laboriosam impedit commodi dignissimos facere aperiam veniam deleniti cupiditate vel ad esse, similique labore minus quis earum.
                        </p>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-box">
                      <div class="author-test">
                        <img src="assets/img/puppy2.jpg" alt="" class="rounded-circle b-shadow-a">
                        <span class="author">Jorge</span>
                      </div>
                      <div class="content-test">
                        <p class="description lead">
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, in voluptatibus? Architecto sit laboriosam impedit commodi dignissimos facere aperiam veniam deleniti cupiditate vel ad esse, similique labore minus quis earum.
                        </p>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-box">
                      <div class="author-test">
                        <img src="assets/img/puppy1.jpg" alt="" class="rounded-circle b-shadow-a">
                        <span class="author">Alfredo</span>
                      </div>
                      <div class="content-test">
                        <p class="description lead">
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, in voluptatibus? Architecto sit laboriosam impedit commodi dignissimos facere aperiam veniam deleniti cupiditate vel ad esse, similique labore minus quis earum.
                        </p>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->


                </div>
                <div class="swiper-pagination"></div>
              </div>

              <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
          
        </div> -->
            </div>
          </div>
        </div>
      </div><!-- End Testimonials Section -->
    </section>

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                SELECCIONA
              </h3>
              <p class="subtitle-a">
                Memoramas con temas
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <!--Las cartas de presentacion para memorama, en este caso suma, post-1.jpg es la imagen de sumas, h3 esta el tema(suma), y una descripcion simple de que trata el juego-->
              <div class="card-img">
                <a href="Juegos/Memorama/suma_facil.php"><img src="assets/img/post-1.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Memorama</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="Juegos/Memorama/suma_facil.php">Nivel 1 Sumas</a></h3>
                <p class="card-description">
                  Juguemos con cartas de sumas
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <!--Las cartas de presentacion para memorama, en este caso resta, post-2.jpg es la imagen de restas, h3 esta el tema(resta), y una descripcion simple de que trata el juego-->
              <div class="card-img">
                <a href="Juegos/Memorama/resta_facil.php"><img src="assets/img/post-2.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Memorama</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="Juegos/Memorama/resta_facil.php">Nivel 2 Restas</a></h3>
                <p class="card-description">
                  Juguemos con cartas de restas
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card card-blog">
              <!--Las cartas de presentacion para memorama, en este caso multiplicacion, post-3.jpg es la imagen de multiplicacion, h3 esta el tema(multiplicacion), y una descripcion simple de que trata el juego-->
              <div class="card-img">
                <a href="Juegos/Memorama/multi_facil.php"><img src="assets/img/post-3.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Memorama</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="Juegos/Memorama/multi_facil.php">Nivel 3 Multiplicaciones</a></h3>
                <p class="card-description">
                  Juguemos con cartas de multiplicaciones
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <!--Las cartas de presentacion para memorama, en este caso division, post-6.jpg es la imagen de divisones, h3 esta el tema(divison), y una descripcion simple de que trata el juego-->
              <div class="card-img">
                <a href="Juegos/Memorama/divison_facil.php"><img src="assets/img/post-6.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Memorama</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="Juegos/Memorama/divison_facil.php">Nivel 4 Divisiones</a></h3>
                <p class="card-description">
                  Juguemos con cartas de divisiones
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <!--Las cartas de presentacion para numero misterioso, en este caso suma, post-1.jpg es la imagen de sumas, h3 esta el tema(suma), y una descripcion simple de que trata el juego-->
              <div class="card-img">
<<<<<<< HEAD
                <a href="Juegos/Numero misterioso/NM_sum.php"><img src="assets/img/post-1.jpg" alt="" class="img-fluid"></a>
=======
                <a href="NM_sum.php"><img src="assets/img/TN/TNNmisteriossoSum.png" alt="" class="img-fluid"></a>
>>>>>>> da49d775a6d12199640a0674bc10e31ec51ac443
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Numero misterioso</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="Juegos/Numero misterioso/NM_sum.php">Nivel 5 Sumas</a></h3>
                <p class="card-description">
                  ¿Faltan números en las sumas?
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card card-blog">
              <!--Las cartas de presentacion para numero misterioso, en este caso resta, post-2.jpg es la imagen de resta, h3 esta el tema(resta), y una descripcion simple de que trata el juego-->
              <div class="card-img">
<<<<<<< HEAD
                <a href="Juegos/Numero misterioso/NM_res.php"><img src="assets/img/post-2.jpg" alt="" class="img-fluid"></a>
=======
                <a href="NM_res.php"><img src="assets/img/TN/TNNmisteriossoRes.png" alt="" class="img-fluid"></a>
>>>>>>> da49d775a6d12199640a0674bc10e31ec51ac443
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">numero misterioso</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="Juegos/Numero misterioso/NM_res.php">Nivel 6 Restas</a></h3>
                <p class="card-description">
                  ¿Faltan números en las restas?
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <!--Las cartas de presentacion para numero misterioso, en este caso multiplicacion, post-3.jpg es la imagen de mutiplicacions, h3 esta el tema(multiplicacion), y una descripcion simple de que trata el juego-->
              <div class="card-img">
<<<<<<< HEAD
                <a href="Juegos/Numero misterioso/NM_mul.php"><img src="assets/img/post-3.jpg" alt="" class="img-fluid"></a>
=======
                <a href="NM_mul.php"><img src="assets/img/TN/TNNmisteriossomul.png" alt="" class="img-fluid"></a>
>>>>>>> da49d775a6d12199640a0674bc10e31ec51ac443
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">numero misterio</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="Juegos/Numero misterioso/NM_mul.php">Nivel 7 Multiplicaciones</a></h3>
                <p class="card-description">
                  ¿Faltan números en las multiplicaciones?
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <!--Las cartas de presentacion para numero misterioso, en este caso division, post-6.jpg es la imagen de divisiones, h3 esta el tema(division), y una descripcion simple de que trata el juego-->
              <div class="card-img">
<<<<<<< HEAD
                <a href="Juegos/Numero misterioso/NM_div.php"><img src="assets/img/post-6.jpg" alt="" class="img-fluid"></a>
=======
                <a href="NM_div.php"><img src="assets/img/TN/BGNmisteriossoDiv.png" alt="" class="img-fluid"></a>
>>>>>>> da49d775a6d12199640a0674bc10e31ec51ac443
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">numero misterioso</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="Juegos/Numero misterioso/NM_div.php">Nivel 8 Divisones</a></h3>
                <p class="card-description">
                  ¿Faltan números en las divisiones?
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card card-blog">
              <!--Las cartas de presentacion para numeros revueltos, en este caso suma, post-1.jpg es la imagen de suma, h3 esta el tema(suma), y una descripcion simple de que trata el juego-->
              <div class="card-img">
                <a href="Juegos/Ordenamiento/OrdenamientoSumas.php"><img src="assets/img/TN/SumaTN.png" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Numeros revueltos</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="Juegos/Ordenamiento/OrdenamientoSumas.php">Nivel 9 Sumas</a></h3>
                <p class="card-description">
                  Resuelve las sumas y ordena las fichas de menor a mayor.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <!--Las cartas de presentacion para numeros revueltos, en este caso resta, post-2.jpg es la imagen de restas, h3 esta el tema(resta), y una descripcion simple de que trata el juego-->
              <div class="card-img">
                <a href="Juegos/Ordenamiento/OrdenamientoRestas.php"><img src="assets/img/TN/RestaTN.png" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Numeros revueltos</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="Juegos/Ordenamiento/OrdenamientoRestas.php">Nivel 10 Restas</a></h3>
                <p class="card-description">
                  Resuelve las restas y ordena las fichas de menor a mayor.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <!--Las cartas de presentacion para numeros revueltos, en este caso multiplicacion, post-3.jpg es la imagen de multiplicaciones, h3 esta el tema(multiplicacion), y una descripcion simple de que trata el juego-->
              <div class="card-img">
                <a href="Juegos/Ordenamiento/OrdenamientoMulti.php"><img src="assets/img/TN/MultiplicacionTN.png" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Numeros revueltos</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="Juegos/Ordenamiento/OrdenamientoMulti.php">Nivel 11 Multiplicaciones</a></h3>
                <p class="card-description">
                  Resuelve las multiplicaciones y ordena las fichas de menor a mayor.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card card-blog">
              <!--Las cartas de presentacion para numeros revueltos, en este caso division, post-6.jpg es la imagen de division, h3 esta el tema(division), y una descripcion simple de que trata el juego-->
              <div class="card-img">
                <a href="Juegos/Ordenamiento/OrdenamientoDiv.php"><img src="assets/img/TN/DivisionTN.png" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Numeros revueltos</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="Juegos/Ordenamiento/OrdenamientoDiv.php">Nivel 12 Divisiones</a></h3>
                <p class="card-description">
                  Resuelve las diviciones y ordena las fichas de menor a mayor.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <!--Seccion de contacto, mostramos que es Mateayuda y su objetivo-->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/post-4.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <p>Este es un software educativo con la finalidad de ayudar a los niños a aprender matematicas jugando</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!--Parte final, aqui esta el copyright-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright"> Copyright &copy; MateAyuda - Plataforma Web Educativa - Proyecto Modular 2022 | CUCEI | Universidad de Guadalajara.
            <div class="credits">

            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <!--JS definidos para el funcionamiento del menu-->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>