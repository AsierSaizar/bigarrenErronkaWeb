
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
      alert("aaaaaaaaaaaa");
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
//      FABORITOTA GEHITZEKOSCRIPTA:

$(document).ready(function () {
  var saskikoGauzak = sessionStorage.getItem("saskikoGauzak");

  if (saskikoGauzak) {
    $("#saskikoProductuakGordetzeko").html(saskikoGauzak);

    $(".saskiaBotoia").each(function () {
      var id = $(this).siblings("#id").val();
      if ($("#saskikoProductuakGordetzeko #kajasaskia" + id).length > 0) {
        $(this).addClass("yaGehitutasaskia");
        $(this).removeClass("addToSaskia");
      }
    });
  }

  $(".saskiaBotoia").click(function () {
    
    var id = $(this).siblings("#id").val();
    var modelo = $(this).siblings("#modelo").val();
    var precio = $(this).siblings("#precio").val();
    alert(modelo + " saskian Sartu da");
    var saskikoProductuakGordetzekoLekua = $("#saskikoProductuakGordetzeko");
    if ($("#saskikoProductuakGordetzeko #kajasaskia" + id).length > 0) {
      alert("aaaaaaaaaaaasaskia");                          //TO DO: alert hau ez du egiten ez delako zesta paginan ezer imprimitzen
      $(this).addClass("addToSaskia");
      $(this).removeClass("yaGehitutasaskia");

      $("#kajasaskia" + id).remove();
      sessionStorage.setItem("saskikoGauzak", saskikoProductuakGordetzekoLekua.html());
    } else {
      var pModelo = $("<div><p>").text("Modelo: " + modelo);
      var pPrecio = $("<p>").text("Precio: " + precio + "€");

      saskikoProductuakGordetzekoLekua.append(
        '<div class="saskikoKajak" id=\'kajasaskia' + id + "'>"
      );
      var cartProducts = $("#kajasaskia" + id);
      cartProducts.append(pModelo);
      cartProducts.append(pPrecio);
      saskikoProductuakGordetzekoLekua.append("</div>");

      $(this).addClass("yaGehitutasaskia");
      $(this).removeClass("addToSaskia");

      sessionStorage.setItem("saskikoGauzak", saskikoProductuakGordetzekoLekua.html());
    }
  });
});

