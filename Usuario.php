<?php
session_start();
include 'conexion.php';
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
    <link rel="stylesheet" href="css/styles_Usuarios.css">
    <link rel="shortcut icon" href="img/favicon.jpg">
</head>

<body>
    <header id="headerHome" class="">
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
            <div class="login">
                <h3>Ingresar</h3>
                <form method="post" action="Usuario.php">
                    <label>Nombre de usuario</label>
                    <input type="text" name="username" class="form-control" placeholder="Usuario" value="" />
                    <label>Contraseña de usuario</label>
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" value="" />
                    <br>
                    <button type="submit" name="login" class="btn btn-success">Ingresar</button>
                    <button type="button" id="regis" class="btn btn-success">Registrarse</button>
                    <br>
                </form>
                <?php
                if (isset($_POST['login'])) {
                    // Verificar si los campos no están vacíos
                    if (!empty($_POST['username']) && !empty($_POST['password'])) {
                        // Si no están vacíos, entonces procesar los datos del formulario
                        global $con;
                        $usuario = mysqli_real_escape_string($con, $_POST['username']);
                        $contraseña = mysqli_real_escape_string($con, $_POST['password']);
                        $contraseña_md5 = md5($contraseña); // Aplicar MD5 a la contraseña
                
                        // Buscar el usuario en la base de datos
                        $query = "SELECT * FROM UsuariosD WHERE nombreUsuario = '$usuario' AND contraUsuario = '$contraseña_md5'";
                        $results = mysqli_query($con, $query);

                        if (mysqli_num_rows($results) == 1) {
                            // Inicio de sesión válido
                            $_SESSION['username'] = $usuario;
                            header('location: Inicio.php');
                            exit; // Importante para evitar que el código PHP continúe ejecutándose después de la redirección
                        } else {
                            // Usuario no encontrado o contraseña incorrecta
                            echo "Nombre de usuario/contraseña inválidos";
                        }
                    } else {
                        // Si los campos están vacíos, mostrar un mensaje de error
                        echo "Por favor, completa todos los campos";
                    }
                }

                ?>

                <div class="registro" id="cajaR">
                    <h3>Registrarse</h3>
                    <form method="post" action="Usuario.php">
                        <input type="text" name="usuR" class="form-control" placeholder="Usuario" />
                        <label>Contraseña de usuario</label>
                        <input type="password" name="contraR" class="form-control" placeholder="Contraseña" />
                        <input type="password" name="CcontraR" class="form-control"
                            placeholder="Confirmar Contraseña" />
                        <label>Correo Electronico</label>
                        <input type="email" name="correoR" class="form-control" placeholder="aaa@aaa.aaa" />
                        <br>
                        <button type="submit" name="nuevoU" class="btn btn-success">Registrarse</button>
                        <label id="registrado" style="cursor: pointer;"> ya tengo cuenta </label>
                    </form>
                </div>
                <?php
                if (isset($_POST['nuevoU'])) {
                    if (!empty($_POST['usuR']) && !empty($_POST['contraR']) && !empty($_POST['correoR'])) {
                        // Verificar si las contraseñas coinciden
                        if ($_POST['contraR'] !== $_POST['CcontraR']) {
                            echo "Las contraseñas no coinciden";
                        } else {
                            // Obtener y limpiar los datos del formulario
                            $usuario = mysqli_real_escape_string($con, $_POST['usuR']);
                            // Aplicar MD5 a la contraseña
                            $contraseña = md5(mysqli_real_escape_string($con, $_POST['contraR']));
                            $email = mysqli_real_escape_string($con, $_POST['correoR']);

                            // Insertar los datos en la base de datos
                            $query = "INSERT INTO UsuariosD(nombreUsuario, contraUsuario, correoUsuario) 
                      VALUES ('$usuario', '$contraseña', '$email')";
                            $results = mysqli_query($con, $query);

                            if ($results) {
                                echo "Registro exitoso";
                            } else {
                                echo "Error al registrar";
                            }
                        }
                    } else {
                        // Si los campos están vacíos, mostrar un mensaje de error
                        echo "Por favor, completa todos los campos";
                    }
                }
                ?>

            </div>
            <img src="https://cdn2.iconfinder.com/data/icons/flat-style-svg-icons-part-1/512/user_login_man-512.png"
                class="d-block w-100" height="567">
        </div>
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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
<script src="..\ProyectoU2\js\script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="..\ProyectoU3\js\Usuario.js"></script>

</html>