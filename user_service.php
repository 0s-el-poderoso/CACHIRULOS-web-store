<?php
session_start();

if (!isset($_SESSION['usr'])) {
    header("location: users/login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>CACHIRULO'S</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <style>
        /* Media query for mobile viewport */
        @media screen and (max-width: 400px) {
            #paypal-button-container {
            width: 100%;
            }
        }
    
        /* Media query for desktop viewport */
        @media screen and (min-width: 400px) {
            #paypal-button-container {
            width: 250px;
                display: inline-block;
            }
        }
    </style>
</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h nav-logo" href="index.php">
                        <p style="text-align: center; font-family: Impact; color: black; font-size: 30px;">CACHIRULO'S</p>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset nav-options" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <?php include('header_user.php'); ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Bienvenido <?php echo $_SESSION['usr']; ?>!</h2> <br><br>
                    <h3 style="color: white; font-size: 1rem;">Mira el nuevo catalogo de la tienda</h3>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Offer Area =================-->
    <section class="offer_area p_120">
        <div class="container">
            <div class="offer_title">
                <h5>Nosotros contamos con los mejores paquetes, equipos y servicios</h5>
                <p><b>Paga de manera cómoda y práctica</b></p>
                <p>Consulta, paga y descarga tu Recibo Cachirulo's; además, guarda y
                    administra tus tarjetas de crédito o débito.</p>
            </div>
            <div class="row offer_inner" id="0">
                <div class="col-lg-4">
                    <div class="offer_item">
                        <img class="img-fluid" src="img/offer/compu.jpg" alt="">
                        <div class="offer_text">
                            <h4>Computer MacBook Pro</h4>
                            <img src="img/offer/carrito.jpg" width="15%" height="auto" alt="" align="left">

                            <a href="#0" onclick="mostrar('divTexto1'); return false">DETALLES...</a>
                            <div id="divTexto1" style="visibility:hidden"> <br>
                                <p>
                                    <center><b>$25,000</b></center>

                                    Hp: Laptop 15-BS031WM 15.6" Intel CI3 2.4 GHz 1 TB Disco Duro 4GB SDRAM
                                    por Hp:
                                    Precio: $7,499.00 Envío GRATIS.

                                    LAPTOP HP 15-BS031WM 15.6 Intel Core i3 1TB Ram 4GB PLATA
                                    Procesador Intel Core i3-7100U Velocidad (frecuencia base de 2,4 GHz, 2 núcleos)
                                    Cache 3 MB
                                    RAM 4GB Tipo SDRAM DDR4-2133 Disco Duro 1 TB HDD
                                    1 lector de tarjetas de medios SD de formato múltiple - 2 USB 3.1 Gen 1 (sólo
                                    transferencia de datos); 1 USB 2.0;
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="offer_item"><img class="img-fluid" src="img/offer/consola.jpg">
                        <div class="offer_text">
                            <h4>Video Games Playing Xbox One S</h4>
                            <img src="img/offer/carrito.jpg" width="15%" height="auto" alt="" align="left">

                            <a href="#0" onclick="mostrar('divTexto2'); return false">DETALLES...</a>
                            <div id="divTexto2" style="visibility:hidden"> <br>
                                <p>
                                    <center><b>$6,000</b></center>

                                    Paquete Xbox One S 1TB + Gears 5 - Bundle Edition
                                    por Microsoft
                                    Plataforma : Xbox One
                                    Precio: $6,983.10 Envío GRATIS
                                    Ahorras: $515.90 (7%)
                                    Este paquete incluye un Xbox One S; la descarga completa del juego Gears 5; descarga
                                    completa de Gears of War Ultimate Edition; descargas completas de Gears of War 2, 3
                                    y 4; un mes de prueba de Xbox Game Pass; 1 mes de Xbox Live Gold y un control
                                    inalámbrico Xbox. Nunca hubo un mejor momento para jugar con Xbox One.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="offer_item">
                        <img class="img-fluid" src="img/offer/Captura.png" alt="">
                        <div class="offer_text">
                            <h4>TCL 40A325 Smart TV (Android TV)</h4>
                            <img src="img/offer/carrito.jpg" width="15%" height="auto" alt="" align="left">

                            <a href="#0" onclick="mostrar('divTexto3'); return false">DETALLES...</a>
                            <div id="divTexto3" style="visibility:hidden"> <br>
                                <p>
                                    <center><b>$12,000</b></center>

                                    RCA, TV 55 Pulgadas 4K UDH LED HDTV Mod. RTU5540 con Entrada HDMI
                                    Precio: $6,099.00 Envío GRATIS
                                    VARIAS ENTRADAS HDMI: Este televisor tiene cuatro entradas HDMI y una entrada de
                                    video componente. Que también se duplica como una entrada de video compuesto.
                                    GRAN TAMAÑO: El RCA RTU5540 mide 30 pulgadas de alto por 48.75 pulgadas de ancho por
                                    11 pulgadas de profundidad, incluida su base. El panel en sí tiene 3,2 pulgadas de
                                    grosor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row offer_inner" id="1">
                <div class="col-lg-4">
                    <div class="offer_item">
                        <a href="productos.html"><img class="img-fluid" src="img/offer/extensor1.jpg" alt=""></a>
                        <div class="offer_text">
                            <h4>TP-LINK TL-WA850RE Extensor universal</h4>
                            <img src="img/offer/carrito.jpg" width="15%" height="auto" alt="" align="left">

                            <a href="#1" onclick="mostrar('divTexto4'); return false">DETALLES...</a>
                            <div id="divTexto4" style="visibility:hidden"> <br>
                                <p>
                                    <center><b>$2,500</b></center>
                                    TP-LINK TL-WA850RE Extensor universal de cobertura inalámbrica
                                    Precio: $366.68 y Envío GRATIS
                                    El extensor de cobertura impulsa fácilmente la señal inalámbrica a áreas previamente
                                    inalcanzables o difíciles de cablear
                                    Su tamaño pequeño y diseño para instalar en pared le permiten al usuario instalar
                                    instantáneamente.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="offer_item">
                        <img class="img-fluid" src="img/offer/pantalla.jpg" alt="">
                        <div class="offer_text">
                            <h4>Pantalla Samsung 65" UN65RU7400FXZX UHD</h4>
                            <img src="img/offer/carrito.jpg" width="15%" height="auto" alt="" align="left">

                            <a href="#1" onclick="mostrar('divTexto5'); return false">DETALLES...</a>
                            <div id="divTexto5" style="visibility:hidden"> <br>
                                <p>
                                    <center><b>$10,500</b></center>
                                    TV Samsung 55 Pulgadas 4K Ultra HD Smart TV LED UN55NU7090FXZX
                                    Marca Samsung

                                    Verdadera resolución UHD 4K

                                    Una TV inteligente Smart TV

                                    HDR con mejor claridad y una expresión de color precisa
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="offer_item">
                        <img class="img-fluid" src="img/offer/modem3.jpg" alt="">
                        <div class="offer_text">
                            <h4>Linksys EA9300 MAX-Stream AC4000 Router WiFi de Tres Bandas</h4>
                            <img src="img/offer/carrito.jpg" width="15%" height="auto" alt="" align="left">

                            <a href="#1" onclick="mostrar('divTexto6'); return false">DETALLES...</a>
                            <div id="divTexto6" style="visibility:hidden"> <br>
                                <p>
                                    <center><b>$2,090</b></center>
                                    Linksys MAX-Stream AC2200 MU-MIMO - Enrutador inalámbrico de Tres Bandas

                                    Este producto reacondicionado certificado es reacondicionado por el fabricante, con
                                    o sin desgaste, y incluye todos los accesorios, además de una garantía de 90 días.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 5rem;">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <form class="row contact_form" action="actions/action_addpurchase.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-4">
                            <p>Empresa</p>
                            <select name="empresa" id="emp_d" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <p>Producto</p>
                            <select name="producto" id="prod_d" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <p>Cantidad</p>
                            <p><input class="form-control" type="number" name="cant" id="cant" step="1" min="0" max="999" value="0"></p>
                            <input type="hidden" name="tot" id="tot" value="0">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center" style="margin: auto;">
                    <h4><b>Total: </b><i id="resultado">$0</i></h4><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center" style="margin: auto;">
                    <div id="paypal-button-container" class="text-center;" style="margin: auto;"></div>
                </div>
            </div>
        </div>

    </section>
    <!--================End Offer Area =================-->
    
    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Acerca de Cachirulo's</h6>
                        <p>El mundo se ha cobnvertido tan actualizado en las personas ya que no quieren tener una vida fuera de la red de Internet, prefieren mantenerse conectadas por medio de aplicaciones, páginas web o bien entender mensajes por medio de imágenes. Ha llegado al punto de convertirse en la herramienta principal y por eso Cachirulo's te ofrece las mejores ofertas a los mejores precios.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Enlaces de Navegación</h6>
                        <div class="row">
                            <div class="col-4">
                                <ul class="list">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Feature</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul class="list">
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Boletín Informativo</h6>
                        <p>Para profesionales de negocios atrapados entre los altos precios de Internet </p>
                        <div id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                    <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h6 class="footer_title">InstaFeed</h6>
                        <ul class="list instafeed d-flex flex-wrap">
                            <li><img src="img/instagram/Image-01.jpg" alt=""></li>
                            <li><img src="img/instagram/Image-02.jpg" alt=""></li>
                            <li><img src="img/instagram/Image-03.jpg" alt=""></li>
                            <li><img src="img/instagram/Image-04.jpg" alt=""></li>
                            <li><img src="img/instagram/Image-05.jpg" alt=""></li>
                            <li><img src="img/instagram/Image-06.jpg" alt=""></li>
                            <li><img src="img/instagram/Image-07.jpg" alt=""></li>
                            <li><img src="img/instagram/Image-08.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border_line"></div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-md-8 footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-md-4 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">    
        function mostrar(id) {
            obj = document.getElementById(id);
            obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
        }

        $(document).ready(function() {
            var precio, cant, tot, id_e, id_p;

            $.ajax({
                type: 'POST',
                url: 'actions/lista_empresa.php'
            })
            
            .done(function(listas_emp) {
                $('#emp_d').html(listas_emp);
            })

            .fail(function() {
                alert('Hubo un error al cargar_emp');
            })

            $('#emp_d').change(function () {
                id_e = $('#emp_d').val();
                console.log("id_emp = " + id_e + "\n");

                $.ajax({
                    type: 'POST',
                    url: 'actions/lista_producto.php',
                    data: {'id': id_e}
                })
                
                .done(function(listas_prod) {
                    $('#prod_d').html(listas_prod);
                })

                .fail(function() {
                    alert('Hubo un error al productos');
                })
            })

            $('#prod_d').change(function () {
                id_p = $('#prod_d').val();
                precio = $('#prod_d option:selected').data('precio');
                var mx = $('#prod_d option:selected').data('cant');
                
                $('#cant').attr('max', mx);
            })

            $('#cant').change(function () {
                cant = $('#cant').val();

                tot = cant * precio;
                $('#resultado').html("$" + tot);
                $('#tot').val(tot);
            })

            paypal.Button.render({
                env: 'sandbox',             // sandbox | production
                style: {
                    label: 'checkout',      // checkout | credit | pay | buynow | generic
                    size:  'responsive',    // small | medium | large | responsive
                    shape: 'rect',          // pill | rect
                    color: 'black'         // gold | blue | silver | black
                },
        
                // PayPal Client IDs - replace with your own
                // Create a PayPal app: https://developer.paypal.com/developer/applications/create
        
                client: {
                    sandbox:    'AWQ2RUtpWrP_cz08Lrmsu94ktNr2d0tbNRzf82PNU7NHLMc76DUf0CU-5CO4rSDD9sswPm9h8h5CMIll',
                    production: ''
                },
        
                // Wait for the PayPal button to be clicked
        
                payment: function(data, actions) {
                    return actions.payment.create({
                        payment: {
                            transactions: [
                                {
                                    amount: { total: tot, currency: 'MXN' }
                                }
                            ]
                        }
                    });
                },
        
                // Wait for the payment to be authorized by the customer
        
                onAuthorize: function(data, actions) {
                    return actions.payment.execute().then(function() {
                        console.log('\n > Pago completado... Procesando en base de datos \n');

                        console.log("ID_P: " + id_p + " Cant: " + cant + " Precio(c/u): " + precio + " Total: " + tot);

                        $.ajax({
                            type: 'POST',
                            url: 'actions/action_addpurchase.php',
                            data: {'id_prod': id_p, 'cant': cant, 'tot': tot }
                        })
                        
                        .done(function(data) {
                            window.alert(data)
                        })
                        
                        .fail(function(data) {
                            console.log(data.responseText)
                            window.alert(data)
                            location.reload()
                        })
                    });
                }
            }, '#paypal-button-container');
        })
    </script>
</body>

</html>