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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon.jpg">
    <link rel="stylesheet" href="css/styles_Acerca.css">
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

        <div class="row" style="margin: 10px">
            <div class="col-6">
                <div class="card mb-3" style="max-width: 700px; max-height: 300px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/steven.jpg" class="img-fluid rounded-start" alt="Foto de Steven">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Steven</h5>
                                <p class="card-text">
                                    Steven es un estudiante de ingeniería en sistemas. Apasionado por la programación
                                    web y el desarrollo de aplicaciones, está siempre buscando aprender nuevas
                                    tecnologías y mejorar sus habilidades en el campo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="accordion accordion-flush" id="accordionFlushExample"
                    style="border: 1px solid rgb(202, 201, 201); border-radius: 10%;">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Estudios
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Steven está cursando su último año de Ingeniería en Sistemas en la Universidad de
                                Tecnología del Futuro. Durante sus estudios, ha realizado investigaciones sobre
                                inteligencia artificial aplicada a la optimización de procesos industriales.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Puesto
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Steven ha trabajado como pasante en una startup de tecnología emergente, donde participó
                                en el desarrollo de una aplicación móvil para la gestión de tareas. Actualmente, está
                                buscando oportunidades laborales como desarrollador de software junior.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Contacto
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Si deseas ponerte en contacto con Steven para oportunidades laborales o colaboraciones,
                                puedes enviarle un correo electrónico a steven@example.com o contactarlo a través de su
                                perfil en LinkedIn.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin: 10px">
            <div class="col-6">
                <div class="card mb-3" style="max-width: 700px; max-height: 300px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/wilo.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Ramirez Wilson</h5>
                                <p class="card-text">
                                    Wilson es un desarrollador web apasionado por la tecnología y la innovación. Con una
                                    amplia experiencia en el diseño y desarrollo de aplicaciones web, está siempre
                                    buscando nuevos desafíos para expandir sus habilidades y conocimientos.
                                    Aplicaciones de Tecnologias Web.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseOne">
                                Estudios
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingOne"
                            data-bs-parent="#accordionPanelsStayOpenExample">
                            <div class="accordion-body">
                                Wilson se graduó en Ingeniería en Sistemas de la Universidad Nacional Autónoma de México
                                (UNAM). Durante sus estudios, adquirió sólidos conocimientos en programación web, bases
                                de datos y desarrollo de software.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo">
                                Puesto
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingTwo"
                            data-bs-parent="#accordionPanelsStayOpenExample">
                            <div class="accordion-body">
                                Actualmente, Wilson trabaja como desarrollador web senior en una reconocida empresa de
                                tecnología. Su experiencia y habilidades lo han llevado a liderar proyectos importantes
                                y a colaborar en el desarrollo de soluciones innovadoras para clientes de diversas
                                industrias.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseThree">
                                Contacto
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingThree"
                            data-bs-parent="#accordionPanelsStayOpenExample">
                            <div class="accordion-body">
                                Si deseas ponerte en contacto con Wilson para discutir oportunidades de colaboración o
                                proyectos, puedes enviarle un correo electrónico a wilson@example.com o comunicarte con
                                él a través de LinkedIn.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin: 10px">
            <div class="col-6">
                <div class="card mb-3" style="max-width: 700px; max-height: 300px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/Mishell.jpg" class="img-fluid rounded-start" alt="Foto de Mishell">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Castellano Mishell</h5>
                                <p class="card-text">
                                    Mishell es una entusiasta desarrolladora web con experiencia en el diseño y
                                    desarrollo de aplicaciones utilizando las últimas tecnologías. Apasionada por
                                    aprender y mejorar continuamente sus habilidades en el campo de las tecnologías web.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Estudios
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Mishell obtuvo su título en Ingeniería de Software en la Universidad Tecnológica de su
                                ciudad natal. Durante sus estudios, se especializó en el desarrollo de aplicaciones web
                                y adquirió habilidades sólidas en programación.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Experiencia Laboral
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Mishell ha trabajado como desarrolladora web en una agencia digital durante los últimos
                                dos años, donde ha participado en el desarrollo de diversos proyectos web para clientes
                                de diferentes industrias.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Contacto
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Si deseas ponerte en contacto con Mishell para discutir oportunidades laborales o
                                proyectos de desarrollo web, puedes enviarle un correo electrónico a mishell@example.com
                                o conectarte con ella a través de LinkedIn.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>



</body>
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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
<script src="..\ProyectoU2\js\script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="..\ProyectoU3\js\AcercaDe.js"></script>

</html>