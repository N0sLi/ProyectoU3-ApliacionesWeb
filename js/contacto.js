function validarFormulario() {
    var nombre = $("#txtNombreT").val().trim();
    var telefono = $("#txtTelefonoT").val().trim();
    var direccion = $("#txtDireccionT").val().trim();
    var email = $("#txtEmailT").val().trim();
    var ciudad = $("#txtCiudadT").val().trim();
    var cv = $("#CV").val().trim();

    if (nombre === "") {
        alert("Por favor, ingresa tu nombre.");
        return false; // Evita el envío del formulario
    }

    if (telefono === "") {
        alert("Por favor, ingresa tu número de teléfono.");
        return false; // Evita el envío del formulario
    }

    if (direccion === "") {
        alert("Por favor, ingresa tu dirección.");
        return false; // Evita el envío del formulario
    }

    if (email === "") {
        alert("Por favor, ingresa tu correo electrónico.");
        return false; // Evita el envío del formulario
    } else if (!validarEmail(email)) {
        alert("Por favor, ingresa un correo electrónico válido.");
        return false; // Evita el envío del formulario
    }

    if (ciudad === "") {
        alert("Por favor, ingresa tu ciudad.");
        return false; // Evita el envío del formulario
    }

    if (cv === "") {
        alert("Por favor, adjunta tu currículum vitae (CV).");
        return false; // Evita el envío del formulario
    }

    return true; // Envía el formulario si todos los campos están completos
}

function validarEmail(email) {
    // Expresión regular para validar un correo electrónico
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}



document.getElementById('toggleButton').addEventListener('click', function () {
    var barra = document.getElementById('sidebar');
    var boton = document.getElementById('content');

    if (barra.style.left === '-200px') {
        // Si la barra está oculta, mostrarla
        barra.style.left = "0px";
    } else {
        // Si la barra está mostrándose, ocultarla
        barra.style.left = "-200px";
    }


});

function validarFormularioC() {
    var nombre = $("#txtNombre").val().trim();
    var email = $("#txtEmail").val().trim();
    var telefono = $("#txtTelefono").val().trim();
    var mensaje = $("#txtMensaje").val().trim();

    if (nombre === "") {
        alert("Por favor, ingresa tu nombre.");
        return false; // Evita el envío del formulario
    }

    if (email === "") {
        alert("Por favor, ingresa tu correo electrónico.");
        return false; // Evita el envío del formulario
    } else if (!validarEmail(email)) {
        alert("Por favor, ingresa un correo electrónico válido.");
        return false; // Evita el envío del formulario
    }

    if (telefono === "") {
        alert("Por favor, ingresa tu número de teléfono.");
        return false; // Evita el envío del formulario
    }

    if (mensaje === "") {
        alert("Por favor, ingresa tu mensaje.");
        return false; // Evita el envío del formulario
    }

    return true; // Envía el formulario si todos los campos están completos
}

function validarEmail(email) {
    // Expresión regular para validar un correo electrónico
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}





$(document).ready(function(){
    $(".contact-form").hide();
    $(".contact-form").fadeIn(3000);

    $("#btnEnviarC").click(function(){
        if(validarFormularioC()){
            $("#im2").hide();
            $("#ima").slideUp();
            setTimeout(function () {
                $("#im1").slideDown();
            });
        }else{
            $("#im1").hide();
            $("#ima").slideUp();
            setTimeout(function () {
                $("#im2").slideDown();
            });
        }
    });

    $("#btnEnviarT").click(function(){
        if(validarFormulario()){
            $("#im4").hide();
            $("#ima1").fadeOut();
            $("#im3").fadeIn();
        }else{
            $("#im3").hide();
            $("#ima1").slideUp();
            setTimeout(function () {
                $("#im4").slideDown();
            },500);
        }
    })

    

    function displayCountryCard(country) {
        var cardHtml = `
    <div class="country-card">
      <h3>${country.name}</h3>
      <p>Ciudad: ${country.name}</p>
      <p>País: ${country.sys.country}</p>
      <p>Temperatura: ${country.main.temp} °C</p>
      <p>Humedad: ${country.main.humidity}%</p>
      <p>Metros sobre el nivel del mar: ${country.coord.alt} m</p>
    </div>
  `;
        var card = $(cardHtml);
        $("#country-cards").append(card);

        // Aplicar animación slideDown a la tarjeta recién agregada
        card.hide().slideDown(500);
    }

    function fetchCountriesWeather() {
        $("#country-cards").empty(); // Limpiar tarjetas de países anteriores
        // Realizar solicitud a la API de OpenWeatherMap para obtener información del clima de Santo Domingo, Ecuador
        $.ajax({
            url: `https://api.openweathermap.org/data/2.5/weather?q=Santo%20Domingo,EC&appid=85a78b846ebecd1729738bfd0d753f65&units=metric`,
            dataType: "json",
            success: function (data) {
                displayCountryCard(data); // Mostrar la tarjeta con la información de Santo Domingo, Ecuador
            }
        });
    }

    $("#toggleButton").click(function () {
        fetchCountriesWeather(); // Llamar a la función para obtener el clima de Santo Domingo, Ecuador
    });
    

})