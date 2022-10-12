<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Jhonattas Henrique - Sou Criador</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/plugin-whatsapp.css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style type="text/css">
        section {
            color: #2d364b;
        }
            html.scheme-1 nav{
                border-top: solid 4px #a5e4dd;
                background-color: #2d364b !important;
                color:  #a5e4dd;
            }
            html.scheme-1 .navbar-brand, .link-journey, .link-mail{
                color:  #a5e4dd;
            }

            html.scheme-1 #mainHeader{
                background-color: #2d364b !important;
            }
            

            html.scheme-2 nav{
                border-top: solid 4px #d3cfa8;
                background-color: #2c303c !important;
            }

            html.scheme-2 .navbar-brand, .link-journey, .link-mail{
                color:  #d3cfa8;
            }

            html.scheme-3 nav{
                border-top: solid 4px #6eb08d;
                background-color: #2c303c !important;
            }

            html.scheme-3 .navbar-brand, .link-journey, .link-mail{
                color:  #6eb08d;
            }

            html.scheme-4 nav{
                border-top: solid 4px #918fa8;
                background-color: #2c303c !important;
            }

            html.scheme-4 .navbar-brand, .link-journey, .link-mail{
                color:  #918fa8;
            }

            html.scheme-5 nav{
                border-top: solid 4px #ffcccc;
                background-color: #2c303c !important;
            }

            html.scheme-5 .navbar-brand, .link-journey, .link-mail{
                color:  #ffcccc;
            }


        </style>
    </head>
    <body class="">
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Sou Criador</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Clientes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Painel</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header - set the background image for the header in the line below-->
        <header class="py-5 bg-image-full" id="mainHeader" style="background-color: #2c303c; background-image: url('assets/img/bg.png');">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" id="avatar" src="" alt="..."
                    style="max-width: 400px;" />
                <h1 class="text-white fs-3 fw-bolder">Jhonattas Henrique</h1>
                <p class="text-white-50 mb-0">Desenvolvedor de Experiências</p>
            </div>
        </header>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>O que é a Sou Criador?</h2>
                        <p class="lead">A <b>Sou Criador</b> esta aqui para auxiliar você a realizar a parte tecnológica do seu projeto, seja um site, um aplicativo, adaptação de ferramentas e soluções ou construção de uma própria para auxiliar o seu sucesso.</p>
                        <p class="mb-0">Na sessão <b><a class="link-journey" href="#">jornada</a></b> é possível ver o caminho que trilhei até agora, e algumas coisinhas que participei ou venho participando, nos detalhes de cada um também é possível entender tecnologias e conceitos que foram aplicados. Se você não encontrar exatamente o que procurava quando entrou aqui no site, você também pode mandar um email pra mim (<a class="link-mail" href="#">jhonattas@soucriador.com</a>) ou me chamar no botãozinho do #whatsapp que deve estar piscando na sua tela .</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image element - set the background image for the header in the line below-->
        <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>
        </div>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Engaging Background Images</h2>
                        <p class="lead">The background images used in this template are sourced from Unsplash and are open source and free to use.</p>
                        <p class="mb-0">I can't tell you how many people say they were turned off from science because of a science teacher that completely sucked out all the inspiration and enthusiasm they had for the course.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Jhonattas Henrique 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <?php require_once('components/jquery.php'); ?>
        <!-- Core theme JS-->
        
        <script type="text/javascript">
            $( document ).ready(function() {
                var listOfClasses = ["scheme-1","scheme-2","scheme-3","scheme-4","scheme-5"];
                var randomNum = Math.floor(Math.random() * listOfClasses.length); 

                $("html").addClass(listOfClasses[randomNum]);

                switch(randomNum) {
                    case 0:
                        $("#avatar").attr("src","<?php echo URL_BASE; ?>assets/img/blue.png");
                        break;
                    case 1:
                        $("#avatar").attr("src","<?php echo URL_BASE; ?>assets/img/yellow.png");
                        break;
                    case 2:
                        $("#avatar").attr("src","<?php echo URL_BASE; ?>assets/img/green.png");
                        break;
                    case 3:
                        $("#avatar").attr("src","<?php echo URL_BASE; ?>assets/img/purple.png");
                        break;
                    case 4:
                        $("#avatar").attr("src","<?php echo URL_BASE; ?>assets/img/pink.png");
                        break;

                    default:
                 // code to be executed if n is different from case 1 and 2
            }    
        });
        </script>
    </body>
</html>
