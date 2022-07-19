$(document).ready(function () {
  dataTable = $("#example").DataTable({
    ajax: {
      url: "http://localhost:8080/servicioProyecto/listarsuma.php",
      type: "jsonp",
      // data: {
      //   filter_data: function () {
      //     return $("#filter-form").serialize();
      //   },
      // },
    },
    columns: [
      { data: "codigo_alumno" },
      { data: "nombre" },
      { data: "apellido" },
      { data: "puntaje" },
      { data: "tiempo" },
      { data: "hora" },
      { data: "fecha" },
    ],
    ordering: false,
    columnDefs: [{ searchable: false, targets: [1, 3, 4, 5, 6] }],
    language: {
      search: "Buscar:",
      lengthMenu: "Mostrar _MENU_ entradas",
      info: "Mostrando _START_ hasta _END_ de _TOTAL_ entradas",
      paginate: {
        next: ">",
        previous: "<",
      },
      searchPlaceholder: "Código o Apellido",
    },
  });
});

/*
leerDatos = () => {
  var ruta = "http://localhost:8080/servicioProyecto/listarsuma.php";
  fetch(ruta)
    .then((response) => response.json())
    .then((datos) => {
      console.log(datos);
      llenarTabla(datos);
    });
};*/

//leerDatos();

leerDatos1 = () => {
  var ruta = "http://localhost:8080/servicioProyecto/menorPromedio.php";
  fetch(ruta)
    .then((response) => response.json())
    .then((datos) => {
      console.log(datos);
      llenarTabla1(datos);
    });
};

leerDatos1();

leerDatos2 = () => {
  var ruta = "http://localhost:8080/servicioProyecto/promedioTotal.php";
  fetch(ruta)
    .then((response) => response.json())
    .then((datos) => {
      console.log(datos);
      llenarNumero(datos);
    });
};

leerDatos2();
/*
llenarTabla = (datos) => {
  $(datos).each((index, value) => {
    var fila = "<tr>";
    //fila += "<td>" + value.codigo_suma + "</td>";
    fila += "<td>" + value.codigo_alumno + "</td>";
    fila += "<td>" + value.nombre + "</td>";
    fila += "<td>" + value.apellido + "</td>";
    fila += "<td>" + value.puntaje + "</td>";
    fila += "<td>" + value.tiempo + "</td>";
    fila += "<td>" + value.hora + "</td>";
    fila += "<td>" + value.fecha + "</td>";
    fila += "<tr>";
    $("#tbody-lista_suma").append(fila);
  });
};*/

llenarTabla1 = (datos) => {
  $(datos).each((index, value) => {
    var fila = "<tr>";
    //fila += "<td>" + value.codigo_suma + "</td>";
    fila += "<td>" + value.codigo_alumno + "</td>";
    fila += "<td>" + value.nombre + "</td>";
    fila += "<td>" + value.apellido + "</td>";
    fila += "<td>" + value.puntos + "</td>";
    fila += "<tr>";
    $("#tbody-menor_promedio").append(fila);
  });
};

llenarNumero = (datos) => {
  $(datos).each((index, value) => {
    var avgNumber = value.promedio;

    document.getElementById("avg-number").innerHTML = avgNumber;
  });
};
