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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Sneakers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles_Sneakers.css">
    <link rel="shortcut icon" href="img/favicon.jpg">
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

        <div class="row">
            <div class="card pag1">
                <img src="img/Jordan1Retro.jpg" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Zapato Casual</h5>
                    <h5>35.99$</h5>
                    <p class="card-text">Nuestro zapato casual es perfecto para cualquier ocasión. Confeccionado con
                        materiales de alta calidad, su diseño elegante y moderno te hará destacar en cualquier evento.
                        Además, su comodidad excepcional te permitirá llevarlo durante horas sin sentir molestias.</p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>
            </div>

            <div class="card pag1">
                <img src="img/NewBalance.jpg" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Zapatilla Deportiva</h5>
                    <h5>49.99$</h5>
                    <p class="card-text">Nuestra zapatilla deportiva es ideal para entrenamientos intensivos. Su diseño
                        ergonómico se adapta perfectamente a tu pie, proporcionando un soporte óptimo y reduciendo el
                        riesgo de lesiones. Además, su suela resistente ofrece una tracción excepcional en todo tipo de
                        terrenos.</p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>
            </div>

            <div class="card pag1">
                <img src="img/Yeezy.jpg" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Botín de Cuero</h5>
                    <h5>59.99$</h5>
                    <p class="card-text">Nuestro botín de cuero es una combinación perfecta de estilo y durabilidad.
                        Fabricado con cuero genuino de alta calidad, este botín te brinda un aspecto elegante y una
                        resistencia excepcional. Su diseño clásico lo convierte en un complemento versátil para
                        cualquier outfit.</p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>

            </div>

            <div class="card pag1">
                <img src="img/zapato4.png" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Sandalia de Verano</h5>
                    <h5>29.99$</h5>
                    <p class="card-text">Nuestra sandalia de verano te ofrece comodidad y estilo en un solo calzado. Su
                        diseño ligero y transpirable te mantiene fresco durante los días más cálidos, mientras que su
                        suela flexible proporciona una pisada suave y natural. ¡Ideal para tus aventuras de verano!</p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>

            </div>

            <div class="card pag1">
                <img src="img/zapato5.png" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Bota de Montaña</h5>
                    <h5>69.99$</h5>
                    <p class="card-text">Nuestra bota de montaña es tu compañera perfecta para explorar la naturaleza.
                        Construida con materiales resistentes al agua y una suela antideslizante, te ofrece protección y
                        tracción en terrenos difíciles. Su diseño robusto y cómodo garantiza un rendimiento excepcional
                        en cualquier aventura al aire libre.</p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>

            </div>

            <div class="card pag1">
                <img src="img/zapato6.jpg" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Zapatilla Urbana</h5>
                    <h5>45.99$</h5>
                    <p class="card-text">Nuestra zapatilla urbana es la combinación perfecta de estilo y confort. Con su
                        diseño moderno y detalles elegantes, este calzado eleva tu look casual a otro nivel. Además, su
                        suela amortiguada y transpirable te brinda una sensación de ligereza y frescura en cada paso.
                    </p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>
            </div>

            <div class="card pag2">
                <img src="img/zapato7.jpg" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Mocasín Clásico</h5>
                    <h5>39.99$</h5>
                    <p class="card-text">Nuestro mocasín clásico es una opción elegante y versátil para cualquier
                        ocasión. Fabricado con cuero de primera calidad y una suela duradera, este mocasín ofrece
                        comodidad y estilo duraderos. Su diseño atemporal lo convierte en un imprescindible para tu
                        armario.</p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>
            </div>

            <div class="card pag2">
                <img src="img/zapato8.jpg" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Sneaker Retro</h5>
                    <h5>59.99$</h5>
                    <p class="card-text">Nuestra sneaker retro te lleva de vuelta a los clásicos con su diseño vintage y
                        su estilo icónico. Fabricada con materiales de alta calidad y una suela resistente, este calzado
                        ofrece un rendimiento excepcional y un aspecto inigualable. ¡Revive la nostalgia con cada paso!
                    </p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>
            </div>

            <div class="card pag2">
                <img src="img/zapato9.jpg" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Bota de Combate</h5>
                    <h5>79.99$</h5>
                    <p class="card-text">Nuestra bota de combate es una declaración de estilo y actitud. Con su diseño
                        robusto y detalles militares, este calzado agrega un toque de rebeldía a cualquier outfit.
                        Fabricada con materiales de alta resistencia y una suela resistente, esta bota está lista para
                        enfrentarse a cualquier desafío.</p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>

            </div>

            <div class="card pag2">
                <img src="img/zapato10.jpg" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Zapato Formal</h5>
                    <h5>55.99$</h5>
                    <p class="card-text">Nuestro zapato formal es el complemento perfecto para tus eventos más
                        elegantes. Confeccionado con cuero de alta calidad y una suela resistente, este calzado ofrece
                        una combinación de estilo y durabilidad. Su diseño clásico y refinado te hará destacar en
                        cualquier ocasión.</p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>

            </div>

            <div class="card pag2">
                <img src="img/zapato11.jpg" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Bota de Trabajo</h5>
                    <h5>69.99$</h5>
                    <p class="card-text">Nuestra bota de trabajo está diseñada para ofrecerte protección y comodidad en
                        entornos laborales exigentes. Con su puntera reforzada y una suela antideslizante, este calzado
                        te brinda seguridad y estabilidad en cada paso. ¡Confía en nuestra bota para cumplir mas de tus
                        tareas!</p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>

            </div>

            <div class="card pag2">
                <img src="img/zapato12.jpg" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Zapatilla de Lona</h5>
                    <h5>25.99$</h5>
                    <p class="card-text">Nuestra zapatilla de lona es la opción perfecta para un estilo casual y cómodo.
                        Con su diseño ligero y transpirable, este calzado te mantiene fresco y relajado durante todo el
                        día. Ideal para tus actividades diarias y tus momentos de relax y de tranquilidad.</p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>

            </div>

            <div class="card pag3">
                <img src="img/zapato13.jpg" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Botín de Cuero</h5>
                    <h5>49.99$</h5>
                    <p class="card-text">Nuestro botín de cuero es una combinación perfecta de estilo y resistencia.
                        Fabricado con cuero genuino y una suela duradera, este calzado ofrece un aspecto elegante y una
                        durabilidad excepcional. Con su diseño versátil, es ideal para cualquier ocasión.</p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>

            </div>

            <div class="card pag3">
                <img src="img/zapato14.jpg" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Sandalia de Playa</h5>
                    <h5>15.99$</h5>
                    <p class="card-text">Nuestra sandalia de playa es la opción perfecta para disfrutar del sol y la
                        arena. Con su diseño ligero y resistente al agua, este calzado te brinda comodidad y estilo en
                        tus días de descanso. Su suela antideslizante proporciona seguridad en terrenos húmedos.</p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>

            </div>

            <div class="card pag3">
                <img src="img/zapato15.jpg" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Zapato Deportivo</h5>
                    <h5>34.99$</h5>
                    <p class="card-text">Nuestro zapato deportivo te ofrece rendimiento y estilo en cada paso. Con su
                        diseño aerodinámico y suela amortiguada, este calzado es perfecto para tus actividades físicas y
                        tu estilo de vida activo. Disfruta del confort y la versatilidad que te brinda nuestro zapato.
                    </p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>

            </div>

            <div class="card pag3">
                <img src="img/zapato16.jpg" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Bota de Invierno</h5>
                    <h5>64.99$</h5>
                    <p class="card-text">Nuestra bota de invierno te protege del frío con estilo y funcionalidad. Con su
                        forro térmico y suela antideslizante, este calzado te mantiene abrigado y seguro en condiciones
                        climáticas adversas. Prepárate para enfrentar el invierno con confianza y comodidad.</p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>

            </div>

            <div class="card pag3">
                <img src="img/zapato17.jpg" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Zapatilla de Running</h5>
                    <h5>49.99$</h5>
                    <p class="card-text">Nuestra zapatilla de running está diseñada para ofrecerte el máximo rendimiento
                        en cada carrera. Con su tecnología de amortiguación y suela flexible, este calzado te brinda
                        comodidad y estabilidad en todo tipo de terrenos. ¡Alcanza tus metas con nuestra zapatilla!</p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>

            </div>

            <div class="card pag3">
                <img src="img/zapato18.jpg" class="card-img-top" width="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Sandalia Casual</h5>
                    <h5>19.99$</h5>
                    <p class="card-text">Nuestra sandalia casual es la elección perfecta para tus días de verano. Con su
                        diseño ligero y transpirable, este calzado te mantiene fresco y cómodo en los días calurosos. Su
                        estilo versátil combina fácilmente con cualquier atuendo de temporada.</p>
                </div>
                <button type="button" class="btn btn-success addToCart" style="margin: 4px;
                    width: 100%;" data-name="Bambas M1" data-price="20.5"
                    data-description="¡Presentamos el zapato perfecto para cualquier ocasión!">
                    Añadir
                </button>

            </div>

            <div class="pagination-container">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                        <li class="page-item"><a class="page-link" id="pagina1" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" id="pagina2" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" id="pagina3" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>

    <footer class="row align-items-center">
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
<script src="..\ProyectoU3\js\script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
<script src="..\ProyectoU3\js\Sneakers.js"></script>

</html>