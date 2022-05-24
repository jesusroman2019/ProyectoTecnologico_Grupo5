jQuery(document).on("submit", "#formlg", function (event) {
  event.preventDefault();

  jQuery
    .ajax({
      url: "http://localhost:8080/servicioProyecto/login.php",
      type: "POST",
      dataType: "json",
      data: $(this).serialize(),
      beforeSend: function () {
        $(".botonlg").val("Validando...");
      },
    })
    .done(function (respuesta) {
      console.log(respuesta);
      if (!respuesta.error) {
        if (respuesta.tipo == "Alumno") {
          location.href = "Main_app/Alumno/index.php";
        } else if (respuesta.tipo == "Profesor") {
          location.href = "Main_app/Profesor/index.php";
        }
      } else if (respuesta.error && respuesta.errorPassword == true) {
        $(".error").slideDown("slow");
        setTimeout(function () {
          $(".error").slideUp("slow");
        }, 3000);
        $(".botonlg").val("Iniciar Sesión");
      } else if (respuesta.error && respuesta.errorUser == true) {
        $(".error1").slideDown("slow");
        setTimeout(function () {
          $(".error1").slideUp("slow");
        }, 3000);
        $(".botonlg").val("Iniciar Sesión");
      } else if (respuesta.error && respuesta.errorBoth == true) {
        $(".error2").slideDown("slow");
        setTimeout(function () {
          $(".error2").slideUp("slow");
        }, 3000);
        $(".botonlg").val("Iniciar Sesión");
      }
    })
    .fail(function (resp) {
      console.log(resp.responseText);
      //debugger;
    })
    .always(function () {
      console.log("complete");
    });
});
