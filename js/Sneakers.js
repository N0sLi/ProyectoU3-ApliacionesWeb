
const products = [];
document.getElementById('toggleButton').addEventListener('click', function () {
    var barra = document.getElementById('sidebar');
    var boton = document.getElementById('content');

    if (barra.style.left === '-200px') {
        // Si la barra está oculta, mostrarla
        barra.style.left = "0px";
    } else {
        // Si la barra está mostrándose, ocultarla
        barra.style.left = "-200px";
    };
});


$(document).ready(function () {
    
  
    $("#pagina1").click(function () {
        $(".pag2").hide();
        $(".pag3").hide();
        $(".pag1").show();
    });

    $("#pagina2").click(function () {
        $(".pag1").hide();
        $(".pag3").hide();
        $(".pag2").show();
    });

    $("#pagina3").click(function () {
        $(".pag2").hide();
        $(".pag1").hide();
        $(".pag3").show();
    });

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


    $(".addToCart").on("click", function () {
        const name = $(this).data("name");
        const price = $(this).data("price");
        const description = $(this).data("description");

        // Crear un objeto para almacenar los datos del producto
        const productData = {
            name: name,
            price: price,
            description: description
        };

        // Agregar el objeto al array de productos
        products.push(productData);

        // Mostrar el array de productos en la consola (opcional)
        console.log(products);
    });


});


