var ruta = "http://localhost:8080/servicioProyecto/listarsuma.php";
fetch(ruta)
  .then((response) => response.json())
  .then((datos) => {
    console.log(datos);
    llenarTabla(datos);
  });

llenarTabla = (datos) => {
  $(datos).each((index, value) => {
    var fila = "<tr>";
    //fila += "<td>" + value.codigo_suma + "</td>";
    fila += "<td>" + value.codigo_alumno + "</td>";
    fila += "<td>" + value.nombre + "</td>";
    fila += "<td>" + value.apellido + "</td>";
    fila += "<td>" + value.puntaje + "</td>";
    fila += "<td>" + value.tiempo + "</td>";
    fila += "<tr>";
    $("#tbody-lista_suma").append(fila);
  });
};
