<?php
session_start();

if (isset($_POST['Cerrar'])) {
    // Eliminar todas las variables de sesión
    $_SESSION = array();

    // Destruir la sesión
    session_destroy();

    // Redirigir al usuario a la página de inicio de sesión o a cualquier otra página
    header("Location: Usuario.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon.jpg">
    <link rel="stylesheet" href="css/styles_Inicio.css">
</head>

<body>
    <header id="headerHome" class="row tex-center justify-content-around p-3">
        <div class="row">
            <div class="col">
                <a href="Inicio.php"><img src="img/StockXLogo.svg.png" width="200px" height="40px" /></a>
                <?php
                ?>


            </div>

            <div class="col ">
                <?php
                if (!isset($_SESSION['username'])) {
                    // La sesión está activa, el usuario no ha iniciado sesión
                    echo "<a href='Usuario.php'><button type='button' class='btn btn-success mdb'>";
                    echo "<span class='glyphicon glyphicon-shopping-cart'></span>";
                    echo "<b> Usuario </b>";
                    echo "</button></a>";
                }
                ?>
                <form method='post' action=''>

                    <button name="botonC" type="submit" class="btn btn-success mdb">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                        <b> Carrito </b>
                    </button>
                    <?php
                    if (isset($_SESSION['username'])) {
                        // La sesión está activa, el usuario ha iniciado sesión
                        echo "<button name='Cerrar' type='submit' class='btn btn-success mdb'>";
                        echo "<span class='glyphicon glyphicon-shopping-cart'></span>";
                        echo "<b> Cerrar sesión </b>";
                        echo "</button>";
                    }
                    ?>
                </form>
                <?php
                if (isset($_SESSION['username'])) {
                    // La sesión está activa, el usuario ha iniciado sesión
                    echo "<h3>Bienvenido, " . $_SESSION['username'] . "!</h3>";
                    // Aquí puedes mostrar el contenido que deseas para un usuario que ha iniciado sesión
                }

                if (isset($_POST['botonC'])) {
                    if (isset($_SESSION['username'])) {
                        // La sesión está activa, el usuario ha iniciado sesión
                        // Redirigir al usuario a la página de inicio de sesión o a cualquier otra página
                        header("Location: Carrito.php");
                    } else {
                        echo "<h3>Inicie sesion primero</h3>";
                    }

                }
                ?>
            </div>
        </div>

    </header>
    <div id="sidebar" class="sidebar">
        <button id="toggleButton" class="content">Toggle</button>
        <div id="country-cards"></div>
    </div>
    <div class="container">
        <section id="navbar" class="row p-2 text-center">
            <div class="col-3 navbar-link">
                <a href="Inicio.php" class="font-weight-light link-unstyled">Inicio</a>
            </div>
            <div class="col-3 navbar-link">
                <a href="Sneakers.php" class="font-weight-light link-unstyled">Sneakers</a>
            </div>
            <div class="col-3 navbar-link">
                <a href="A_cerca_de.php" class="font-weight-light link-unstyled">Acerca de..</a>
            </div>
            <div class="col-3 navbar-link">
                <a href="contacto.php" class="font-weight-light link-unstyled">Contactanos</a>
            </div>
        </section>


        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img\img1.PNG" class="d-block w-100" height="567">
                </div>
                <div class="carousel-item">
                    <img src="img\carrusel1.jpg" class="d-block w-100" height="567">
                </div>
                <div class="carousel-item">
                    <img src="img\carrusel2.jpg" class="d-block w-100" height="567">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="row" style="padding:30px;">
            <div class="col-8">
                <div class="accordion accordion-flush" id="accordionFlushExample" >
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Ventaja #1: Comodidad
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Este zapato deportivo de marca XYZ ofrece una comodidad excepcional gracias a su suave
                                amortiguación y su diseño ergonómico. Diseñado para brindar un ajuste cómodo durante
                                todo el día, te sentirás ligero y ágil en cualquier actividad que realices.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Ventaja #2: Durabilidad
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Una de las principales ventajas de este zapato deportivo es su durabilidad excepcional.
                                Fabricado con materiales de alta calidad y una construcción resistente, este zapato está
                                diseñado para resistir el desgaste diario y mantener su apariencia y rendimiento durante
                                mucho tiempo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Ventaja #3: Estilo
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Además de su comodidad y durabilidad, este zapato deportivo también destaca por su
                                estilo moderno y atractivo. Con un diseño elegante y detalles llamativos, este zapato te
                                permite lucir a la moda mientras te mantienes activo y cómodo.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="img\Yeezy.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Compra Ahora!</h5>

                        <a href="Sneakers.php" class="btn btn-primary">Vamos</a>
                    </div>
                </div>
            </div>


        </div>

        <section style="border-radius: 25%; margin: 4px; padding: 10px; border: 2px solid #000000; background-color: rgb(92, 173, 88); color:white;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-xl-8 text-center">
            <h3 class="mb-4">Experiencia de nuestros clientes</h3>
            <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                En nuestra tienda nos enorgullece ofrecer una experiencia excepcional a cada uno de nuestros clientes. Nuestro compromiso es proporcionar productos de alta calidad y un servicio al cliente excepcional para garantizar su completa satisfacción.
            </p>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-md-4 mb-5 mb-md-0">
            <div class="d-flex justify-content-center mb-4">
                <img src="img/Padre1.jpg" class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3">Maria Smantha</h5>

            <p class="px-xl-3">
                <i class="fas fa-quote-left pe-2"></i>¡La mejor tienda de zapatos que he visitado! Encontré exactamente lo que buscaba y el personal fue increíblemente servicial. Definitivamente volveré a comprar aquí.
            </p>

        </div>
        <div class="col-md-4 mb-5 mb-md-0">
            <div class="d-flex justify-content-center mb-4">
                <img src="img/persona.jpg" class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3">Lisa Cudrow</h5>

            <p class="px-xl-3">
                <i class="fas fa-quote-left pe-2"></i>Increíble selección de zapatos y precios competitivos. La calidad de los productos es excelente y el personal es muy amable. ¡Recomiendo encarecidamente esta tienda!
            </p>

        </div>
        <div class="col-md-4 mb-0">
            <div class="d-flex justify-content-center mb-4">
                <img src="img/Padre 2.jpg" class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3">John Smith</h5>

            <p class="px-xl-3">
                <i class="fas fa-quote-left pe-2"></i>Me encanta comprar en esta tienda de zapatos. Siempre encuentro lo que necesito y la calidad de los productos es excelente. El equipo es muy atento y servicial. Sin duda, mi lugar favorito para comprar zapatos.
            </p>

        </div>
    </div>
</section>

    </div>
    <footer id="bannerHome" class="row align-items-center">
        <div class="col-3">
            <a href="Inicio.php"><img src="img/logonegro2.png" width="100px" height="50px" /></a>
        </div>
        <div class="col-6 row justify-content-center">
            <div class="col">
                <!-- Button to open the modal -->
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#scrollableModal">
                    Terms & Conditions
                </button>
                <!-- Modal -->
                <div class="modal fade" id="scrollableModal" tabindex="-1" role="dialog"
                    aria-labelledby="scrollableModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="scrollableModalLabel" style="color: black;">Terms &
                                    Conditions</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col" style="color: black;">
                                            <b>1. Ownership of the Site</b><br>
                                            Our shoe sales page is owned and operated by
                                            StockX. All intellectual property rights
                                            related to the content and materials used on the site
                                            website are owned by [company name] and are protected by the
                                            copyright laws.<br><br>

                                            <b>2. User Registration</b><br>
                                            To make purchases on our page, you need to register
                                            as user. By doing so, you agree to provide accurate information,
                                            updated and complete about yourself. You are responsible for maintaining
                                            confidentiality of your account and password, and you agree to notify us
                                            immediately any unauthorized use of your account.<br><br>

                                            <b>3. Prices and Payments</b><br>
                                            All product prices are shown in local currency and are not
                                            include taxes or shipping costs, unless otherwise stated.
                                            contrary. We reserve the right to change prices at any
                                            moment without notice. Payments will be made through the
                                            payment methods accepted on our page. All payments are due
                                            complete before the shipment of the products is processed.<br><br>

                                            <b>4. Shipping and Delivery</b><br>
                                            We ship to addresses provided by users. He
                                            Estimated delivery time may vary depending on location and other
                                            factors. We strive to meet delivery deadlines, but do not
                                            We take responsibility for delays caused by circumstances
                                            beyond our control.<br><br>

                                            <b>5. Returns and Refunds</b><br>
                                            We accept returns and exchanges of products within a period of 15 from
                                            the date of delivery, as long as the products are
                                            return them in their original state and without having been used.
                                            Expenses shipping in case of return will be borne by the customer,
                                            unless that the product is defective or has been sent
                                            incorrectly.<br><br>

                                            <b>6. Intellectual Property</b><br>
                                            All intellectual property rights related to the
                                            products and content of our shoe sales page
                                            belong to their respective owners. The
                                            reproduction, distribution or modification of the content without
                                            permission
                                            express written rights holder.<br><br>

                                            <b>7. Limitation of Liability</b><br>
                                            We strive to provide accurate and up-to-date information on
                                            our page, but we do not guarantee the accuracy, completeness or
                                            currency of said information. We are not responsible for
                                            any direct, indirect, incidental, consequential or special damages
                                            that may arise from the use of our website or the purchase of
                                            products through it.<br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <!-- Button to open the modal -->
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#scrollableModal2">
                    Privacy Policy
                </button>
                <!-- Modal -->
                <div class="modal fade" id="scrollableModal2" tabindex="-1" role="dialog"
                    aria-labelledby="scrollableModalLabel2" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="scrollableModalLabel2" style="color: black;">Privacy
                                    Policy</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col" style="color: black;">
                                            At StockX, we value and respect your privacy. This
                                            privacy policy describes how we collect, use,
                                            we share and protect the personal information we obtain through
                                            from our shoe sales page. By using our services,
                                            you accept the practices described in this privacy policy.<br><br>

                                            <b>1. Personal Information Collected</b><br>
                                            To provide you with our services and process your purchases, we may
                                            collect the following personal information:
                                            Contact information: such as your name, email address
                                            email, shipping address and phone number.
                                            Payment information: such as your credit card details or
                                            bank account information.
                                            Demographic information: such as your age, gender, and purchasing
                                            preferences.
                                            Registration information: such as your username and password.<br><br>
                                            <b>2.Use of Personal Information</b><br>
                                            We use the personal information collected for the following
                                            purposes:
                                            Process your orders and complete purchase transactions.
                                            Communicate with you regarding your order, delivery and customer service
                                            customer.
                                            Personalize your shopping experience and offer you recommendations for
                                            products.
                                            Send promotions, special offers or newsletters if
                                            tea
                                            you have subscribed to them.
                                            Improve our products, services and the functionality of our
                                            shoe sales page
                                            Comply with our legal obligations and protect our
                                            rights and
                                            properties.<br><br>
                                            <b>3. Sharing Personal Information</b><br>
                                            We do not sell, rent, or share your personal information with
                                            third parties, except in the following cases:
                                            Service Providers: We may share your information with
                                            third-party service providers who assist us in the operation of
                                            our page and the processing of your orders.
                                            Legal Compliance: We may disclose your personal information if we do so
                                            it
                                            required by law or if we have a good faith belief that such disclosure
                                            is
                                            necessary to comply with ongoing legal process.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 d-flex justify-content-end">
            <img src="img/logo_Adidas.jpg " width="90px" height="74px" />
            <img src="img/logo_nike.jpg " width="90px" height="74px" />
        </div>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<script src="..\ProyectoU2\js\script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="..\ProyectoU3\js\Inicio.js"></script>

</html>