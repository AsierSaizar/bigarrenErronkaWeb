
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
