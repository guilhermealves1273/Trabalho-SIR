<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="color-scheme" content="dark light" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guilherme Alves</title>
    <!-- FontAwesome -->
    <link
      rel="stylesheet"
      href="./assets/fontawesome-free-6.2.0-web/css/fontawesome.min.css"
    />
    <link
      rel="stylesheet"
      href="./assets/fontawesome-free-6.2.0-web/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="./assets/fontawesome-free-6.2.0-web/css/brands.min.css"
    />
    <link
      rel="stylesheet"
      href="./assets/fontawesome-free-6.2.0-web/css/regular.min.css"
    />
    <link
      rel="stylesheet"
      href="./assets/fontawesome-free-6.2.0-web/css/solid.min.css"
    />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/styles/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/styles/main.css" />
  </head>
  <body>
    <nav class="navbar fixed-bottom navbar-expand-sm">
      <a href="#" class="navbar-brand"></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarCollapse"
        aria-controls="navbarCollapse"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fa-solid fa-bars text-white"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav m-auto ">
          <li class="nav-item">
            <a href="#header" class="nav-link text-white">Início</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link text-white">Sobre Mim</a>
          </li>
          <li class="nav-item">
            <a href="#languages" class="nav-link text-white">Languages</a>
          </li>
          <li class="nav-item">
            <a href="#education" class="nav-link text-white">Educação</a>
          </li>
          <li class="nav-item">
            <a href="#skills" class="nav-link text-white">Skills</a>
          </li>
          <li class="nav-item">
            <a href="#contacts" class="nav-link text-white">Contactos</a>
          </li>
          <li class="nav-item">
            <a href="#form" class="nav-link text-white">Contacta-me</a>
          </li>
          <li class="nav-item">
            <a href="./cms/auth/login.php" class="nav-link text-white">Backoffice</a>
          </li>
        </ul>
        <div class="tema-wrapper">
            <div class="botao-center" onclick="DarkMode()" type="button" id="botao">
                Dark Mode
            </div>
        </div>
        <!--
                <input onclick="DarkMode()" id="botao" type="button" value="Dark"></input>

-->
      </div>
    </nav>

    <!-- Header -->

    <header id="header" class="py-5 w-100 pt-5">
      <div class="header-card text-center">
        <img
          src="./assets/images/minha.jpg"
          alt=""
          class="h-100 rounded shadow-lg rounded-5"
        />
      </div>
      <div class="header-card">
        <h2 class="mb-5">Guilherme Cardoso Alves</h2>

        <p><b>Data de Nascimento: </b> 05/08/2002</p>
        <p><b>Localidade: </b>Melgaço</p>
        <p><b> Profissão: </b>Estudante no curso de Engenharia Informática</p>
      </div>
    </header>

    <hr />

    <section id="about">
      <h2 class="text-center">Sobre mim</h2>

      <div class="p-5">
        <p class="text-center">
          Sou o Guilherme Alves, tenho 20 anos e sou estudante do curso de
          Engenharia Informática na Escola Superior de Tecnologia e Gestão do
          IPVC.
        </p>
        <p class="text-center">
          Atualmente estou a fazer o meu 3º ano do curso e pretendo seguir para
          mestrado.
        </p>
        <p class="text-center">
          Atualmente gosto mais de front-wend e base de dados, tendo utilizado
          já algumas frameworks como por exemplo o vue, laravel, Ionic, entre
          outras.
        </p>
        <p class="text-center">
          Gosto de aprender coisas novas e de estar sempre a melhorar os meus
          conhecimentos.
        </p>
      </div>
    </section>
    <hr />

    <section id="languages">
      <h2 class="text-center">Linguagens</h2>

      
    
<!--     
    <div id="languages1"> 
      <img src="./assets/images/portugal.webp" class="rounded float-left h-25" alt="...">
      <img src="./assets/images/ingles.jpg" class="rounded float-right h-25" alt="...">
    </div>  -->
    </section>

    <hr/>





    <section id="education">
      <h2 class="text-center mb-5">Educação</h2>

      <div id="education-wrapper">
        <div class="card">
          <img
            src="./assets/images/Escola_Melgaco01a-300x158.jpg"
            alt=""
            class="img-card-top"
          />
          <div class="card-body">
            <div class="card-text text-center">
              <u>Escola Básica e Secundária de Melgaço</u>
            </div>
            <p class="text-justify pt-5">
              No ano de 2012, entrei nesta escola que foi onde realizei a maior
              parte do meu percurso escolar, do 5º ao 12º ano. Do 10º ao 12º ano
              realizei o curso de Ciências e Tecnologias, e foi nessa altura que
              comecei a ter o gosto pela programação.
            </p>
          </div>
        </div>
        <div id="education-wrapper">
          <div class="card">
            <img src="./assets/images/estg.jpg" alt="" class="img-card-top" />
            <div class="card-body text-center">
              <div class="card-text">
                <u>Escola Superior de Tecnologia e Gestão - IPVC</u>
              </div>
              <p class="text-justify pt-5">
                Em 2020, entrei na escola onde estou, até hoje, a frequentar o
                curso de Engenharia Informática.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr />
    <section id="skills">
      <h4 class="text-center">Soft Skills</h4>

      <div class="soft-skills pb-5">
        <div class="list-group text-center pt-3 w-50">
          <a class="list-group-item list-group-item-action"
            >Trabalho em Equipa</a
          >
          <a class="list-group-item list-group-item-action">Organizado</a>
          <a target="_blank" class="list-group-item list-group-item-action"
            >Flexibilidade</a
          >
          <a class="list-group-item list-group-item-action">Comunicativo</a>
          <a class="list-group-item list-group-item-action">Criativo</a>
        </div>
      </div>

      <h4 class="p-5 text-center">Hard Skills</h4>

      <div>
        <h5 class="pb-3">Linguagens de Programação</h5>

        <div id="hard-skills">
          <div class="pb-3">
            <label>C#</label>
            <div class="progress">
              <div
                class="progress-bar"
                role="progressbar"
                aria-label="Example with label"
                style="width: 40%"
                aria-valuenow="40"
                aria-valuemin="0"
                aria-valuemax="100"
              >
                40%
              </div>
            </div>
          </div>

          <div class="pb-3">
            <label>Java</label>
            <div class="progress">
              <div
                class="progress-bar"
                role="progressbar"
                aria-label="Example with label"
                style="width: 70%; background: rgb(235, 70, 70)"
                aria-valuenow="70"
                aria-valuemin="0"
                aria-valuemax="100"
              >
                70%
              </div>
            </div>
          </div>

          <div class="pb-3">
            <label>Python</label>
            <div class="progress">
              <div
                class="progress-bar"
                role="progressbar"
                aria-label="Example with label"
                style="width: 45%;"
                aria-valuenow="45"
                aria-valuemin="0"
                aria-valuemax="100"
              >
                45%
              </div>
            </div>
          </div>

          <div class="pb-3">
            <label>HTML/CSS/JS</label>
            <div class="progress">
              <div
                class="progress-bar"
                role="progressbar"
                aria-label="Example with label"
                style="width: 60%; background: rgb(235, 70, 70)"
                aria-valuenow="60"
                aria-valuemin="0"
                aria-valuemax="100"
              >
                60%
              </div>
            </div>
          </div>

          <div class="pb-3">
            <label>PHP</label>
            <div class="progress">
              <div
                class="progress-bar"
                role="progressbar"
                aria-label="Example with label"
                style="width: 55%"
                aria-valuenow="55"
                aria-valuemin="0"
                aria-valuemax="100"
              >
                55%
              </div>
            </div>
          </div>
        </div>

        <h5 class="pt-5">Frameworks</h5>

        <div class="frameworks">
          <div class="list-group text-center pt-3 w-50">
            <a
              href="https://ionicframework.com/"
              target="_blank"
              class="list-group-item list-group-item-action"
              >Ionic</a
            >
            <div>
              <a
                href="https://laravel.com/"
                target="_blank"
                class="list-group-item list-group-item-action"
                >Laravel</a
              >
            </div>
            <a
              href="https://dotnet.microsoft.com/en-us/apps/aspnet/mvc"
              target="_blank"
              class="list-group-item list-group-item-action"
              >Asp.net mvc</a
            >
            <div>
              <a
                href="https://br.vuejs.org/"
                target="_blank"
                class="list-group-item list-group-item-action"
                >Vue</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr />

    <section id="contacts">
      <h2 class="text-center mb-5">Contactos</h2>

      <div id="contacts-wrapper">
        <div class="contact-card">
          <div class="contact-image">
            <i class="fa-solid fa-envelope"></i>
          </div>
          <div class="contact-text">guilhermealves@ipvc.pt</div>
          <div class="contact-button">
            <a href="mailto:guilhermealves@ipvc.pt"> Contactar </a>
          </div>
        </div>

        <div class="contact-card">
          <div class="contact-image">
            <i class="fa-solid fa-phone"></i>
          </div>
          <div class="contact-text">+351 934 032 627</div>
          <div class="contact-button">
            <a href="tel:+351934032627"> Contactar </a>
          </div>
        </div>

        <div class="contact-card">
          <div class="contact-image">
            <i class="fa-brands fa-linkedin"></i>
          </div>
          <div class="contact-text">Guilherme Alves</div>
          <div class="contact-button">
            <a href="https://www.linkedin.com/in/guilherme-alves-148351224/" target="_blank">
              Visitar
            </a>
          </div>
        </div>

        <div class="contact-card">
          <div class="contact-image">
           <i class="fa-brands fa-github"></i>
          </div>
          <div class="contact-text">guilhermealves1273</div>
          <div class="contact-button">
            <a href="https://github.com/guilhermealves1273" target="blank"> Visitar </a>
          </div>
        </div>
      </div>

      


      
    </section>
    <hr />

    <section id="form">
      <h2>Para me contactar, preencher este formulário</h2>

      <form action="#" method="post" autocomplete="off">
        <div class="grupo">
          <label for="nome">Nome <span class="required">*</span></label>
          <input type="text" name="nome" id="nome" required />
        </div>
        <div class="grupo">
          <label for="nome">E-mail <span class="required">*</span></label>
          <input type="email" name="email" id="email" required />
        </div>
        <div class="grupo">
          <label for="info">Informação <span class="required">*</span></label>
          <textarea name="info" id="info" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Enviar</button>
      </form>
    </section>

    <hr />

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="./index.js"></script>
 
  </body>
</html>


<?php
include 'db/connect.php' ;
$pdo=pdo_connect_mysql();
?>
