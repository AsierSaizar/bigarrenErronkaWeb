document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("search-button")
    .addEventListener("click", function (e) {
      e.preventDefault();
      var searchTerm = document.getElementById("search-input").value;
      searchProducts(searchTerm);
    });

  function searchProducts(term) {
    var found = window.find(term, false, false, true, false, true, false);
    if (!found) {
      var aukeraHizkuntzaSelect = $("#selectHizkuntzaAukeratzeko").val();
      switch (aukeraHizkuntzaSelect) {
        case "eus":{
          alert("Ez da aurkitu bilatutakoa.");
          break;
        }
        case "es":{
          alert("No se encontraron coincidencias.");
          break;
        }
        case "en":{
          alert("No matches found.");
          break;
        }
      }

    }
  }
});

//////////////////////////////////////////////////////////////////////////////////////////////////
//      FABORITOTA GEHITZEKOSCRIPTA:

$(document).ready(function () {
  var favoritos = sessionStorage.getItem("favoritos");

  if (favoritos) {
    $("#offcanvas-body").html(favoritos);

    $(".izarBotoia").each(function () {
      var id = $(this).siblings("#id").val();
      if ($("#offcanvas-body #kaja" + id).length > 0) {
        $(this).addClass("yaGehituta");
        $(this).removeClass("addToFavourite");
      }
    });
  }

  $(".izarBotoia").click(function () {
    var id = $(this).siblings("#id").val();
    var modelo = $(this).siblings("#modelo").val();
    var precio = $(this).siblings("#precio").val();
    var offcanvasBody = $("#offcanvas-body");
    if ($("#offcanvas-body #kaja" + id).length > 0) {
      $(this).addClass("addToFavourite");
      $(this).removeClass("yaGehituta");

      $("#kaja" + id).remove();
      sessionStorage.setItem("favoritos", offcanvasBody.html());
    } else {
      var pModelo = $("<div><p>").text("Modelo: " + modelo);
      var pPrecio = $("<p>").text("Precio: " + precio + "€");

      offcanvasBody.append(
        '<div class="faboritotakoKajak" id=\'kaja' + id + "'>"
      );
      var favorites = $("#kaja" + id);
      favorites.append(pModelo);
      favorites.append(pPrecio);
      offcanvasBody.append("</div>");

      $(this).addClass("yaGehituta");
      $(this).removeClass("addToFavourite");

      sessionStorage.setItem("favoritos", offcanvasBody.html());
    }
  });
});

//////////////////////////////////////////////////////////////////////////////////////////////////
//      SASKIA GEHITZEKOSCRIPTA:

$(document).ready(function () {
  getInPHPSession("saskikoGauzak", idatziSaskian); /////////////////

  $(".saskiaBotoia").click(function () {
    var id = $(this).siblings("#id").val();
    var modelo = $(this).siblings("#modelo").val();
    var precio = $(this).siblings("#precio").val();
    var saskikoProductuakGordetzekoLekua = "";

    var kajaId = "#kajasaskia" + id;

    var aukeraHizkuntzaSelect = $("#selectHizkuntzaAukeratzeko").val();
    switch (aukeraHizkuntzaSelect) {
      case "eus":{
        alert(modelo + " saskian Sartu da");
        break;
      }
      case "es":{
        alert(modelo + " se agrego a la cesta");
        break;
      }
      case "en":{
        alert(modelo + " add to cart");
        break;
      }

    }

    var pModelo = $("<div><p>").text("Modelo: " + modelo);
    var pPrecio = $("<p>").text("Precio: " + precio + "€");

    saskikoProductuakGordetzekoLekua =
      saskikoProductuakGordetzekoLekua +
      '<div class="saskikoKajak" id="' +
      kajaId.substring(1) +
      '">';

    saskikoProductuakGordetzekoLekua =
      saskikoProductuakGordetzekoLekua +
      "<div>" +
      modelo +
      "</div><div id='prezioa" +
      id +
      "' class='kantitateaPro prezioaEskubitanJartzeko'></div><div class='prezioaEskubitanJartzeko prezioProBakoitz'>" +
      precio +
      "€</div><div id='proBorratzeko" +
      id +
      "''><button class='botoiaBorratzekoIndi' id='proBorratzekoBotoia" +
      id +
      "'><i class='fa-solid fa-trash'></i></button></div><hr>";

    setInPHPSession("saskikoGauzak", saskikoProductuakGordetzekoLekua, id);
  });

  $("#borratzekoBotoia").click(function () {
    if (!$("#metodoDePago").is(":hidden")) {
      var aukeraHizkuntzaSelect = $("#selectHizkuntzaAukeratzeko").val();
      switch (aukeraHizkuntzaSelect) {
        case "eus":{
          alert("Ordainketa martxan dago, ezin dituzu produktuak orain ezabatu");
          break;
        }
        case "es":{
          alert("La compra esta en proceso, no puedes borrar articulos en este momento");
          break;
        }
        case "en":{
          alert("Purchase is in process, you can't delete items right now");
          break;
        }
      }
    } else {
      var postDir = $("#postDir").val();
      var sessionKey = "saskikoGauzak";

      $.ajax({
        url: postDir,
        type: "POST",
        data: { action: "denaBorratu", key: sessionKey },
      });
      location.reload();
    }
  });

  $("#metodoDePago").hide();
  $("#paypalPago").hide();
  $("#bizumPago").hide();
  $("#visaPago").hide();

  $("#erostekoBotoia").click(function () {
    if ($("#sasProGord").children().length > 0) {
      $("#metodoDePago").show();
    } else {
      var aukeraHizkuntzaSelect = $("#selectHizkuntzaAukeratzeko").val();
      switch (aukeraHizkuntzaSelect) {
        case "eus":{
          alert("Ez dago produkturik erosketa burutzeko");
          break;
        }
        case "es":{
          alert("No hay ningun articulo para comprar");
          break;
        }
        case "en":{
          alert("There is no item to buy");
          break;
        }
      }
    }
  });
  $("#paypal").click(function () {
    $("#paypalPago").hide();
    $("#bizumPago").hide();
    $("#visaPago").hide();
    $("#paypalPago").show();
  });
  $("#bizum").click(function () {
    $("#paypalPago").hide();
    $("#bizumPago").hide();
    $("#visaPago").hide();
    $("#bizumPago").show();
  });
  $("#visa").click(function () {
    $("#paypalPago").hide();
    $("#bizumPago").hide();
    $("#visaPago").hide();
    $("#visaPago").show();
  });

  //erosketa egitekobotoian logica
  // Paypaleko ordainketa logika
  $(".botonPagar_1").click(function () {
    if (verificarInputs("#paypalPago")) {
      var nombre = $("#nombre_1").val();
      var abizena1 = $("#abizena1_1").val();
      var abizena2 = $("#abizena2_1").val();
      var telefono = $("#telefono_1").val();
      var helbidea = $("#helbidea_1").val();
      var dni = $("#dni_1").val();

      var datosArray = {};

      // Iterar sobre cada div con la clase 'saskikoKajak'
      $(".saskikoKajak").each(function (index) {
        var id = $(this).attr("id").replace("kajasaskia", "");
        var cantidad = $(this)
          .find('div[id^="prezioa"]')
          .text()
          .replace("x", "");

       
        datosArray[id] = parseInt(cantidad);
      });

      console.log(datosArray);

      // Realizar la llamada AJAX a post.php
      $.ajax({
        type: "POST",
        url: "../../../required/post.php",
        data: {
          erosketaData:datosArray,
          action: "erosi1Paypal",
          nombre: nombre,
          abizena1: abizena1,
          abizena2: abizena2,
          telefono: telefono,
          helbidea: helbidea,
          dni: dni,
        },
        success: function (response) {
          // Aquí puedes manejar la respuesta del servidor si es necesaria
          console.log(response);
        },
      }).done(function (data) {
        alert(data);
        $("#nombre_1").val("");
        $("#abizena1_1").val("");
        $("#abizena2_1").val("");
        $("#telefono_1").val("");
        $("#helbidea_1").val("");
        $("#dni_1").val("");

        $("#paypalPago").hide();
        $("#metodoDePago").hide();
        $.ajax({
          url: "../../../required/post.php",
          type: "POST",
          data: { action: "denaBorratu", key: "saskikoGauzak" },
        });
        location.reload();
      });
    }
  });

  // Bizumeko ordainketa logika
  $(".botonPagar_2").click(function () {
    if (verificarInputs("#bizumPago")) {
      var nombre = $("#nombre_2").val();
      var abizena1 = $("#abizena1_2").val();
      var abizena2 = $("#abizena2_2").val();
      var telefono = $("#telefono_2").val();
      var helbidea = $("#helbidea_2").val();
      var dni = $("#dni_2").val();


      var datosArray = {};

      // Iterar sobre cada div con la clase 'saskikoKajak'
      $(".saskikoKajak").each(function (index) {
        var id = $(this).attr("id").replace("kajasaskia", "");
        var cantidad = $(this)
          .find('div[id^="prezioa"]')
          .text()
          .replace("x", "");

       
        datosArray[id] = parseInt(cantidad);
      });

      console.log(datosArray);

      // Realizar la llamada AJAX a post.php
      $.ajax({
        type: "POST",
        url: "../../../required/post.php",
        data: {
          erosketaData:datosArray,
          action: "erosi2Bizum",
          nombre: nombre,
          abizena1: abizena1,
          abizena2: abizena2,
          telefono: telefono,
          helbidea: helbidea,
          dni: dni,
        },
        success: function (response) {
          // Aquí puedes manejar la respuesta del servidor si es necesaria
          console.log(response);
        },
      }).done(function (data) {
        alert(data);
        $("#nombre_2").val("");
        $("#abizena1_2").val("");
        $("#abizena2_2").val("");
        $("#telefono_2").val("");
        $("#helbidea_2").val("");
        $("#dni_2").val("");

        $("#bizumPago").hide();
        $("#metodoDePago").hide();
        $.ajax({
          url: "../../../required/post.php",
          type: "POST",
          data: { action: "denaBorratu", key: "saskikoGauzak" },
        });
        location.reload();
      });
    }
  });

  // Viasko ordainketa logika
  $(".botonPagar_3").click(function () {
    if (verificarInputs("#visaPago")) {
      var nombre = $("#nombre_3").val();
      var abizena1 = $("#abizena1_3").val();
      var abizena2 = $("#abizena2_3").val();
      var telefono = $("#telefono_3").val();
      var banku_zenb = $("#banku_zenb_3").val();
      var helbidea = $("#helbidea_3").val();
      var dni = $("#dni_3").val();


      var datosArray = {};

      // Iterar sobre cada div con la clase 'saskikoKajak'
      $(".saskikoKajak").each(function (index) {
        var id = $(this).attr("id").replace("kajasaskia", "");
        var cantidad = $(this)
          .find('div[id^="prezioa"]')
          .text()
          .replace("x", "");

       
        datosArray[id] = parseInt(cantidad);
      });

      console.log(datosArray);

      // Realizar la llamada AJAX a post.php
      $.ajax({
        type: "POST",
        url: "../../../required/post.php",
        data: {
          erosketaData:datosArray,
          action: "erosi3Visa",
          nombre: nombre,
          abizena1: abizena1,
          abizena2: abizena2,
          telefono: telefono,
          banku_zenb: banku_zenb,
          helbidea: helbidea,
          dni: dni,
        },
        success: function (response) {
          // Aquí puedes manejar la respuesta del servidor si es necesaria
          console.log(response);
        },
      }).done(function (data) {
        alert(data);
        $("#nombre_3").val("");
        $("#abizena1_3").val("");
        $("#abizena2_3").val("");
        $("#telefono_3").val("");
        $("#banku_zenb_3").val("");
        $("#helbidea_3").val("");
        $("#dni_3").val("");

        $("#visaPago").hide();
        $("#metodoDePago").hide();
        $.ajax({
          url: "../../../required/post.php",
          type: "POST",
          data: { action: "denaBorratu", key: "saskikoGauzak" },
        });
        location.reload();
      });
    }
  });

  // denak beteta daudela egiaztatzeko funtzioa
  function verificarInputs(formId) {
    var inputs = $(
      formId + " input[type='text'], " + formId + " input[type='number']"
    );
    var allFilled = true;

    inputs.each(function () {
      if ($(this).val() === "") {
        allFilled = false;
        return false;
      }
    });

    if (!allFilled) {
      var aukeraHizkuntzaSelect = $("#selectHizkuntzaAukeratzeko").val();
      switch (aukeraHizkuntzaSelect) {
        case "eus":{
          alert("Bete hutsune guztiak mesedez.");
          break;
        }
        case "es":{
          alert("Por favor, rellene todos los campos.");
          break;
        }
        case "en":{
          alert("Fill all the gaps please");
          break;
        }
      }

    }

    return allFilled;
  }
});

function setInPHPSession(sessionKey, sessionValue, idProduct) {
  var postDir = $("#postDir").val();
  var balioa = "setInSession";

  $.ajax({
    url: postDir,
    type: "POST",
    data: {
      action: balioa,
      key: sessionKey,
      value: sessionValue,
      idPro: idProduct,
    },
    dataType: "json",
  })
    .done(function (data) {})
    .fail(function () {
      console.error("Error: AJAX request failed.");
    });
}

function getInPHPSession(sessionKey, funtzioIzena) {
  var postDir = $("#postDir").val();
  var balioa = "getInSession";

  $.ajax({
    url: postDir,
    type: "POST",
    data: { action: balioa, key: sessionKey },
  })

    .done(function (data) {
      if (data) {
        var parsedData = JSON.parse(data);

        funtzioIzena(parsedData);
      } else {
        console.error("Error: No data received from the server.");
      }
    })
    .fail(function () {});
}

function idatziSaskian(parsedSaskiZerrenda) {
  for (var i = 0; i < Object.keys(parsedSaskiZerrenda).length; i++) {
    var id = Object.keys(parsedSaskiZerrenda)[i];

    var zenbValue = parsedSaskiZerrenda[id]["zenb"];
    var htmlValue = parsedSaskiZerrenda[id]["html"];

    $("#sasProGord").append(htmlValue);
    $("#prezioa" + id).html("x" + zenbValue);
  }

  var total = 0;

  $(".prezioProBakoitz").each(function () {
    var cantidadText = $(this).siblings(".kantitateaPro").text();

    var cantidad = parseInt(cantidadText.replace("x", ""));

    var precio = parseFloat($(this).text());

    total += cantidad * precio;
  });

  $("#prezioTotalaZenbakia").text(total.toFixed(2) + "€");

  if (total >= 100) {
    $("#BidalketakoGastuakZenbakia").text("0.00€");
  } else {
    $("#BidalketakoGastuakZenbakia").text("5.99€");
  }
  var bidalketakoGastuakValue = parseFloat(
    $("#BidalketakoGastuakZenbakia").text().replace("€", "")
  );

  total += bidalketakoGastuakValue;

  $("#prezioTotalaZenbakiaDefini").text(total.toFixed(2) + "€");

  $(".botoiaBorratzekoIndi").click(function () {
    if (!$("#metodoDePago").is(":hidden")) {
      var aukeraHizkuntzaSelect = $("#selectHizkuntzaAukeratzeko").val();
      switch (aukeraHizkuntzaSelect) {
        case "eus":{
          alert("Ordainketa martxan dago, ezin dituzu produktuak orain ezabatu");
          break;
        }
        case "es":{
          alert("La compra esta en proceso, no puedes borrar articulos en este momento");
          break;
        }
        case "en":{
          alert("Purchase is in process, you can't delete items right now");
          break;
        }
      }
      
    } else {
      var postDir = $("#postDir").val();
      var idDelBoton = $(this).attr("id");
      var idDelBotonZenbakia = idDelBoton.replace(/[^0-9]/g, "");

      $.ajax({
        url: postDir,
        type: "POST",
        data: { action: "proBorratu", id: idDelBotonZenbakia },
      });
      location.reload();
    }
  });
}
