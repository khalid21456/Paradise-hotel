<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue à l'Hotel Paradise, où le raffinement rencontre la sérénité </title>
    <link rel="shortcut icon" type="image/png" href="../img/icon-paradise.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/cstyle.css">

    <link href="https://fonts.googleapis.com/css2?family=Vollkorn+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@800&family=Vollkorn+SC&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Inter:wght@800&family=Vollkorn+SC&display=swap"
        rel="stylesheet">
    <style>
        /* pictures slider section  */
        .sliderr {
            position: relative;
            width: 100%;
            overflow: hidden;
            border-radius: 15px;
        }

        .images {
            display: flex;
            width: 100%;
        }

        .images img {
            height: 500px;
            width: 100%;
            transition: all 0.15s ease;
        }

        .images input {
            display: none;
        }

        .dots {
            display: flex;
            justify-content: center;
            margin: 5px;
        }

        .dots label {
            height: 20px;
            width: 20px;
            border-radius: 50%;
            border: solid red 3px;
            cursor: pointer;
            transition: all 0.15s ease;
            margin: 5px;
        }

        .dots label:hover {
            background-color: red;
        }

        #img1:checked~.m1 {
            margin-left: 0;
        }

        #img2:checked~.m2 {
            margin-left: -100%;
        }

        #img3:checked~.m3 {
            margin-left: -200%;
        }

        #img4:checked~.m4 {
            margin-left: -300%;
        }

        #description {
            font-size: 20px;

        }

        /* testimonials section */
        #testimonials {
            text-align: center;
            background-color: rgb(242, 127, 82);

        }

        h2 {
            color: white;
            font-size: 3rem;
            line-height: 1.5;
            font-family: 'Fira Sans', sans-serif;
        }

        em {
            font-family: 'Vollkorn SC', serif;
            font-weight: bold
        }

        .testimonial-image {
            width: 100px;
            height: 100px;
            border-radius: 100%;
        }

        .carousel-item {
            padding: 7% 15%;
        }

        .footer-clean {
            padding: 50px 0;
            background-color: #fff;
            color: #4b4c4d;
        }

        .footer-clean h3 {
            margin-top: 0;
            margin-bottom: 12px;
            font-weight: bold;
            font-size: 16px;
        }

        .footer-clean ul {
            padding: 0;
            list-style: none;
            line-height: 1.6;
            font-size: 14px;
            margin-bottom: 0;
        }

        .footer-clean ul a {
            color: inherit;
            text-decoration: none;
            opacity: 0.8;
        }

        .footer-clean ul a:hover {
            opacity: 1;
        }

        .footer-clean .item.social {
            text-align: right;
        }

        @media (max-width:767px) {
            .footer-clean .item {
                text-align: center;
                padding-bottom: 20px;
            }
        }

        @media (max-width: 768px) {
            .footer-clean .item.social {
                text-align: center;
            }
        }

        .footer-clean .item.social>a {
            font-size: 24px;
            width: 40px;
            height: 40px;
            line-height: 40px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            border: 1px solid #ccc;
            margin-left: 10px;
            margin-top: 22px;
            color: inherit;
            opacity: 0.75;
        }

        .footer-clean .item.social>a:hover {
            opacity: 0.9;
        }

        @media (max-width:991px) {
            .footer-clean .item.social>a {
                margin-top: 40px;
            }
        }

        @media (max-width:767px) {
            .footer-clean .item.social>a {
                margin-top: 10px;
            }
        }

        .footer-clean .copyright {
            margin-top: 14px;
            margin-bottom: 0;
            font-size: 13px;
            opacity: 0.6;
        }
    </style>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.min.js"></script>
</head>

<body style="height:3100px;">
    <div id="vue">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" style="cursor:default;">
                <p class="paradise">Paradise</p>
            </a>
            <ul class="navbar-nav ms-auto" style="margin-right:20px;">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="color:white; font-size:30px;">
                        <p class="sign">Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact" style="color:white; font-size:30px;">
                        <p class="sign">Contact</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" style="color:white; font-size:30px;">
                        <p class="sign">About</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../reserve/book.php" style="color:white; font-size:30px;">
                        <p class="sign">Réserver</p>
                    </a>
                </li>
            </ul>
        </nav>

        <div id="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12" style="margin-top:80px;">
                        <div class="container" style="margin-left:35px;">
                            <p class="def" style="color:rgb(240, 240, 240);cursor: default;">
                                Bienvenue à l'Hotel Paradise, où le raffinement rencontre la sérénité.
                            </p><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="caract">
        <div class="container" style="margin-top:60px;">
            <div class="row" style="margin-right:100px;">
                <div class="col-lg-4 col-sm-12" style="margin-bottom: 100px;">
                    <img class="propr1" src="../assets/etiquette-de-prix.png"><br>
                    <h3 style="margin-left:25px; margin-top:15px;">Prix génial</h3><br>
                </div>
                <div class="col-lg-4 col-sm-12" style="margin-bottom: 100px;">
                    <img class="propr2" src="../assets/des-lits.png"><br>
                    <h3 style="margin-left:-58px; margin-top:15px;">Chambres confortables</h3><br>
                </div>
                <div class="col-lg-4 col-sm-12" style="margin-bottom: 100px;">
                    <img class="propr3" src="../assets/serveuse.png"><br>
                    <h3 style="margin-left:-8px; margin-top:15px;">Services parfaits</h3><br>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sliderr">
                    <div class="images">
                        <input type="radio" name="sld" id="img1" checked>
                        <input type="radio" name="sld" id="img2">
                        <input type="radio" name="sld" id="img3">
                        <input type="radio" name="sld" id="img4">
                        <img src="../img/chambre.jpg" class="m1">
                        <img src="../img/image.jpg" class="m2">
                        <img src="../img/main.jpeg" class="m3">
                        <img src="../img/hotel-background.jpg" class="m4">
                    </div>
                    <div class="dots">
                        <label for="img1"></label>
                        <label for="img2"></label>
                        <label for="img3"></label>
                        <label for="img4"></label>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <h1 style="font-family:'Vollkorn SC', serif; margin-top: 50px; color:red;">Bienvenue ...<h1>
                        <p id="description">
                            Bienvenue à l'Hotel Paradise, votre refuge exclusif où le luxe et l'élégance
                            se rencontrent pour créer une expérience inoubliable. Niché au cœur d'un cadre
                            idyllique, notre hôtel offre un mélange parfait entre confort moderne et charme
                            traditionnel.
                            Que vous soyez en quête d'une escapade relaxante, d'un voyage d'affaires ou d'une
                            célébration
                            spéciale, l'Hotel Paradise est l'adresse par excellence.<br><br>
                            Dès que vous franchirez nos portes, vous serez accueilli par notre équipe dévouée, prête à
                            rendre votre séjour exceptionnel. Explorez nos chambres somptueusement aménagées, offrant
                            des vues spectaculaires et un confort absolu. Laissez-vous séduire par notre cuisine
                            raffinée dans nos restaurants élégants, et détendez-vous dans nos espaces bien-être conçus
                            pour revitaliser votre esprit et votre corps.
                        </p>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width:18rem;">
                    <img class="card-img-top" src="../img/chambre.jpg" alt="chambre Confort" />
                    <div class="card-body">
                        <h5 class="card-title">Confort</h5>
                        <p class="card-text">
                            Chambres avec un lit et un douche et une sofa
                        </p>
                    </div>
                    <a href="../reserve/book.php" class="btn btn-danger">399.99 MAD</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width:18rem;">
                    <img class="card-img-top" style="height:192px;" src="../img/Deluxe_Room_1.jpg"
                        alt="chambre Deluxe" />
                    <div class="card-body">
                        <h5 class="card-title">Deluxe</h5>
                        <p class="card-text">
                            Chambres de haut qualité avec un douche très special
                        </p>
                    </div>
                    <a href="../reserve/book.php" class="btn btn-danger">599.99 MAD</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width:18rem;">
                    <img class="card-img-top" src="../img/Family-Room.jpeg" style="height:192px;"
                        alt="chambre Familiale" />
                    <div class="card-body">
                        <h5 class="card-title">Familiale</h5>
                        <p class="card-text">
                            Chambres ideals pour les couples avec un bon vue dans le balcone
                        </p>
                    </div>
                    <a href="../reserve/book.php" class="btn btn-danger">749.99 MAD</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card" style="width:18rem;">
                    <img class="card-img-top" src="../img/Economique.jpg" style="height:192px;"
                        alt="chambre Economique" />
                    <div class="card-body">
                        <h5 class="card-title">Economique</h5>
                        <p class="card-text">
                            Chambres très convenables à rester pour les voyageurs
                        </p>
                    </div>
                    <a href="../reserve/book.php" class="btn btn-danger">349.99 MAD</a>
                </div>
            </div>

        </div>
    </div>
    <!-- testimonial section -->
    <section id="testimonials" style="margin-top:100px;">
        <div id="testimonial-carousel" class="carousel slide" data-bs-touch="false">
            <div class="carousel-inner">
                <div class="carousel-item ">
                    <h2>
                        j'ai passé une bonne vacance dans ce hôtel, il offre des services magnéfiques aux clients
                    </h2>
                    <img class="testimonial-image" src="../img/kojima.jpg" alt="Snake picture" />
                    <em>Hideo Kojima</em>
                </div>
                <div class="carousel-item active">
                    <h2>
                        Paradise c'est l'un des meilleurs hôtels que j'ai visité au maroc
                    </h2>
                    <img class="testimonial-image" src="../img/bill-gates.jpg" alt="Snake picture" />
                    <em>Bill Gates</em>
                </div>
                <div class="carousel-item">
                    <h2>
                        J'ai visité le maroc avec ma famille, nous avons passé une bonne moment à l'hôtel Paradise
                    </h2>
                    <img class="testimonial-image" src="../img/messi.jpg" alt="Snake picture" />
                    <em>Lionel Messi</em>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <a name="contact">
        <div class="footer-clean" style="margin-top:100px;">
            <footer>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-4 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="../reserve/book.php">Booking</a></li>
                                <li><a href="#">Consulting</a></li>
                                <li><a href="#">Hosting</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Legacy</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 item">
                            <h3>Careers</h3>
                            <ul>
                                <li><a href="#">Job openings</a></li>
                                <li><a href="#">Employee success</a></li>
                                <li><a href="#">Benefits</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a
                                href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i
                                    class="icon ion-social-snapchat"></i></a><a href="#"><i
                                    class="icon ion-social-instagram"></i></a>
                            <p class="copyright">Paradise © 2023</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>