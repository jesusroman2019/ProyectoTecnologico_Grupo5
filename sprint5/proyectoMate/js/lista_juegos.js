var ruta = "http://localhost:8080/servicioProyecto/listarjuegos.php";
fetch(ruta)
  .then((response) => response.json())
  .then((datos) => {
    console.log(datos);
    llenarTabla(datos);
  });

llenarTabla = (datos) => {
  $(datos).each((index, value) => {
    var fila = "<tr>";
    fila += "<td>" + value.codigo + "</td>";
    fila += "<td>" + value.nombre_juego + "</td>";
    fila +=
      "<td> <a class='btn btn-primary' href='lista_suma.php'role='button'>Ver resultados</a> </td>";
    fila += "<tr>";
    $("#tbody-juegos").append(fila);
  });
};
