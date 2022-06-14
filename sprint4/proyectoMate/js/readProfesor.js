leerDatos = () => {
  var ruta = "http://localhost:8080/servicioProyecto/readProfesor.php";
  fetch(ruta)
    .then((response) => response.json())
    .then((datos) => {
      console.log(datos);
      llenarTabla(datos);
    });
};

leerDatos();

llenarTabla = (datos) => {
  $("#tbody-lista_prof").html("");
  $(datos).each((index, value) => {
    var fila = "<tr>";
    fila += "<td>" + value.codigo + "</td>";
    fila += "<td>" + value.nombre + "</td>";
    fila += "<td>" + value.apellido + "</td>";
    fila += "<td>" + value.usuario + "</td>";
    fila += "<td>" + value.telefono + "</td>";
    fila += "<td>" + value.email + "</td>";
    fila += "<td>" + value.fecha + "</td>";
    fila += "<td>" + value.creador + "</td>";
    fila +=
      "<td> <a class='btn btn-success boton-actualizar' data-bs-toggle='modal' data-bs-target='#modal-actualizar' role='button'>Actualizar</a> </td>";
    fila +=
      "<td> <a class='btn btn-danger boton-eliminar' role='button'>Eliminar</a> </td>";
    fila += "</tr>";
    $("#tbody-lista_prof").append(fila);
  });

  $(".boton-eliminar").click(function () {
    //alert("test");
    var filaActual = $(this).parent().parent();
    var posicion = filaActual.index();
    console.log(posicion);
    var codigo = datos[posicion].codigo;
    var respuesta = confirm("¿Está seguro que desea eliminar?");
    if (respuesta == true) {
      eliminarProfesor(codigo);
    }
  });

  $(".boton-actualizar").click(function () {
    var filaActual = $(this).parent().parent();
    var posicion = filaActual.index();
    $("#txtCodigo").val(datos[posicion].codigo);
    $("#txtNombre1").val(datos[posicion].nombre);
    $("#txtApellido1").val(datos[posicion].apellido);
    $("#txtEmail1").val(datos[posicion].email);
    $("#txtTelefono1").val(datos[posicion].telefono);
    $("#txtUsuario1").val(datos[posicion].usuario);
    $("#txtPassword1").val(datos[posicion].password);
    $("#confirm_password1").val(datos[posicion].password);
  });
};

eliminarProfesor = (codigo) => {
  var ruta = "http://localhost:8080/servicioProyecto/deleteProfesor.php";

  var formData = new FormData();
  formData.append("codigo", codigo);

  fetch(ruta, {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then(() => {
      var ruta = "http://localhost:8080/servicioProyecto/readProfesor.php";
      fetch(ruta)
        .then((response) => response.json())
        .then((datos) => {
          //console.log(datos);
          llenarTabla(datos);
        });
    });
};

$("#btnActualizar").click(() => {
  var codigo = $("#txtCodigo").val();
  var nombre = $("#txtNombre1").val();
  var apellido = $("#txtApellido1").val();
  var usuario = $("#txtUsuario1").val();
  var password = $("#txtPassword1").val();
  var telefono = $("#txtTelefono1").val();
  var email = $("#txtEmail1").val();
  var ruta = "http://localhost:8080/servicioProyecto/updateProfesor.php";

  var formData = new FormData();
  formData.append("codigo", codigo);
  formData.append("nombre", nombre);
  formData.append("apellido", apellido);
  formData.append("usuario", usuario);
  formData.append("password", password);
  formData.append("telefono", telefono);
  formData.append("email", email);

  fetch(ruta, {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then(() => {
      leerDatos();
    });
});

$("#btnRegistrar").click(() => {
  var nombre = $("#txtNombre").val();
  var apellido = $("#txtApellido").val();
  var usuario = $("#txtUsuario").val();
  var password = $("#txtPassword").val();
  var telefono = $("#txtTelefono").val();
  var email = $("#txtEmail").val();
  var ruta = "http://localhost:8080/servicioProyecto/insertProfesor.php";

  var formData = new FormData();
  formData.append("nombre", nombre);
  formData.append("apellido", apellido);
  formData.append("usuario", usuario);
  formData.append("password", password);
  formData.append("telefono", telefono);
  formData.append("email", email);

  fetch(ruta, {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((datos) => {
      console.log(datos);
      leerDatos();
    });

  $("#modal-registrar").on("hidden.bs.modal", function () {
    $(".modal-body input").val("");
  });
});
