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
      alert("No se encontraron coincidencias.");
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

    alert(modelo + " saskian Sartu da");
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
      "€</div><div id='proBorratzeko" +id +"''><button class='botoiaBorratzekoIndi' id='proBorratzekoBotoia" +id +"'><i class='fa-solid fa-trash'></i></button></div><hr>";

    setInPHPSession("saskikoGauzak", saskikoProductuakGordetzekoLekua, id);
  });

  $("#borratzekoBotoia").click(function () {
    var postDir = $("#postDir").val();
    var sessionKey = "saskikoGauzak";

    $.ajax({
      url: postDir,
      type: "POST",
      data: { action: "denaBorratu", key: sessionKey },
    });
    location.reload();
  });

  $("#metodoDePago").hide();
  $("#paypalPago").hide();
  $("#bizumPago").hide();
  $("#visaPago").hide();

  $("#erostekoBotoia").click(function () {
    $("#metodoDePago").show();
  })
  $("#paypal").click(function () {
    $("#paypalPago").hide();
    $("#bizumPago").hide();
    $("#visaPago").hide();
    $("#paypalPago").show();
  })
  $("#bizum").click(function () {
    $("#paypalPago").hide();
    $("#bizumPago").hide();
    $("#visaPago").hide();
    $("#bizumPago").show();
  })
  $("#visa").click(function () {
    $("#paypalPago").hide();
    $("#bizumPago").hide();
    $("#visaPago").hide();
    $("#visaPago").show();
  })

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
    var postDir = $("#postDir").val();
    var idDelBoton = $(this).attr("id");
    var idDelBotonZenbakia = idDelBoton.match(/\d$/);

    $.ajax({
      url: postDir,
      type: "POST",
      data: { action: "proBorratu",id: idDelBotonZenbakia},
    });
    location.reload();
  });
}
