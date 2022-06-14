$().ready(function () {
  $("#registro").validate({
    rules: {
      name: { required: true, minlength: 3 },
      lastname: { required: true, minlength: 3 },
      email: { required: true, email: true },
      phone: { required: true, minlength: 7, maxlength: 9 },
      username: { required: true, minlength: 8, maxlength: 9, number: true },
      password: { required: true, minlength: 7 },
      confirm_password: {
        required: true,
        equalTo: "#txtPassword",
        minlength: 7,
      },
    },

    messages: {
      name: "Por favor, introduzca su nombre",
      lastname: "Por favor, introduzca su apellido",
      email: "Por favor, introduzca su correo electrónico",
      phone: "Por favor, introduzca su teléfono",
      username: "Por favor, introduzca su usuario",
      password: "Por favor, introduzca su contraseña",
      confirm_password: "Por favor, introduzca la misma contraseña",
    },
  });
});

let today = new Date();

let date =
  today.getFullYear() + "-" + (today.getMonth() + 1) + "-" + today.getDate();

let firstName = document.getElementById("nombre").innerHTML;
let lastName = document.getElementById("apellido").innerHTML;

let admin = firstName + " " + lastName;

let state = 0;

// function goToLogin1() {
//   var login = "http://localhost:8080/xampp/proyectoMate/";
//   window.location.replace(login);
// }

function goToLogin() {
  var login =
    "http://localhost:8080/xampp/proyectoMate/Main_app/Admin/readAdmin.php";
  window.location.replace(login);
}

$("#btnRegistrar").click(() => {
  var nombre = $("#txtNombre").val();
  var apellido = $("#txtApellido").val();
  var usuario = $("#txtUsuario").val();
  var password = $("#txtPassword").val();
  var telefono = $("#txtTelefono").val();
  var email = $("#txtEmail").val();
  var fecha = date;
  var creador = admin;
  var estado = state;
  var ruta = "http://localhost:8080/servicioProyecto/insertAdmin.php";

  var formData = new FormData();
  formData.append("nombre", nombre);
  formData.append("apellido", apellido);
  formData.append("usuario", usuario);
  formData.append("password", password);
  formData.append("telefono", telefono);
  formData.append("email", email);
  formData.append("fecha", fecha);
  formData.append("creador", creador);
  formData.append("estado", estado);

  //completar
  if (
    nombre != "" &&
    apellido != "" &&
    usuario != "" &&
    password != "" &&
    telefono != "" &&
    email != ""
  ) {
    fetch(ruta, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((datos) => {
        console.log(datos);
        goToLogin();
      });
  }
});

// $("#btnRegistrar1").click(() => {
//   var nombre = $("#txtNombre").val();
//   var apellido = $("#txtApellido").val();
//   var usuario = $("#txtUsuario").val();
//   var password = $("#txtPassword").val();
//   var telefono = $("#txtTelefono").val();
//   var email = $("#txtEmail").val();
//   var ruta = "http://localhost:8080/servicioProyecto/insertAdmin.php";

//   var formData = new FormData();
//   formData.append("nombre", nombre);
//   formData.append("apellido", apellido);
//   formData.append("usuario", usuario);
//   formData.append("password", password);
//   formData.append("telefono", telefono);
//   formData.append("email", email);

//   fetch(ruta, {
//     method: "POST",
//     body: formData,
//   })
//     .then((response) => response.text())
//     .then((datos) => {
//       console.log(datos);
//       goToLogin();
//     });
// });
