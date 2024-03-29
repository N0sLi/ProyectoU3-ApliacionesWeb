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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sneakers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon.jpg">
    <link rel="stylesheet" href="css/styles_Contacto.css">

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

        <div class="containerR">
            <div class="Formularios">
                <div class="container contact-form">
                    <form method="post" id="contacto">
                        <h3>Envíanos un Mensaje</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="txtNombre" class="form-control" placeholder="Tu Nombre *"
                                        value="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" id="txtEmail" class="form-control"
                                        placeholder="Tu Correo Electrónico *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="tel" id="txtTelefono" class="form-control"
                                        placeholder="Tu Número de Teléfono *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="button" id="btnEnviarC" class="btnContact" value="Enviar Mensaje" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea id="txtMensaje" class="form-control" placeholder="Tu Mensaje *"
                                        style="width: 100%; height: 150px;"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <br>
                <div class="container contact-form">
                    <form method="post" id="trabajar">
                        <h3>Trabaja Con Nosotros</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="txtNombreT" class="form-control" placeholder="Tu Nombre *" />
                                </div>

                                <div class="form-group">
                                    <input type="tel" id="txtTelefonoT" class="form-control"
                                        placeholder="Tu Número de Teléfono *" />
                                </div>

                                <div class="form-group">
                                    <input type="text" id="txtDireccionT" class="form-control"
                                        placeholder="Tu Dirección *" />
                                </div>

                                <div class="form-group">
                                    <h2>Currículum Vítae (CV)</h2>
                                    <input type="file" class="form-control" id="CV" accept=".pdf,.doc,.docx">
                                </div>

                                <div class="form-group">
                                    <input type="button" id="btnEnviarT" class="btnContact" value="Enviar Aplicación" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" id="txtEmailT" class="form-control"
                                        placeholder="Tu Correo Electrónico *" />
                                </div>
                                <div class="form-group">
                                    <input type="text" id="txtCiudadT" class="form-control" placeholder="Tu Ciudad *" />
                                </div>
                                <select id="puesto" class="form-control">
                                    <option value="asociado">Asociado de Ventas</option>
                                    <option value="visual">Visual Merchandiser</option>
                                    <option value="almacen">Personal de Almacén/Logística</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="ImgF">
                <img src="https://www.shutterstock.com/image-photo/call-center-customer-service-telemarketing-600nw-2220833443.jpg"
                    class="w-100 imagen" id="ima" height="320">
                <img src="data:image/png;base64,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"
                    class="w-100 imagenS" id="im1" height="320">
                <img src="https://definicion.de/wp-content/uploads/2009/02/error.png" class="w-100 imagenF" id="im2"
                    height="320">
                <br>
                <br>
                <div>
                    <img src="https://uth.espe.edu.ec/wp-content/uploads/2023/01/trabaja-con-nosotors.jpg"
                        class="w-100 imagen" id="ima1" height="320">
                    <img src="https://cdn-icons-png.flaticon.com/512/12440/12440389.png" class="w-100 imagenS" id="im3"
                        height="320">
                    <img src="https://previews.123rf.com/images/magurok/magurok1711/magurok171100004/89046409-sobre-y-documento-con-signo-de-exclamaci%C3%B3n-nuevo-correo-electr%C3%B3nico-recibido-correo-electr%C3%B3nico.jpg"
                        class="w-100 imagenF" id="im4" height="320">
                </div>
            </div>
        </div>



        <!--FOOTER-->
        <footer id="bannerHome" class="row align-items-center">
            <div class="col-3">
                <a href="Inicio.html"><img src="img/logonegro2.png" width="100px" height="50px" /></a>
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
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
<script src="..\ProyectoU2\js\script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="..\ProyectoU3\js\contacto.js"></script>


</html>