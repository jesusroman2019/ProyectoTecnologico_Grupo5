const option1 = document.getElementById("option1"),
  option2 = document.getElementById("option2"),
  option3 = document.getElementById("option3"),
  audio = document.getElementById("myAudio");
var answer = 0;
var score = 0;
var count = 1;
var texto = "";

let code = 12345678;
let firstName = "Pepito";
let lastName = "Perez Estrada";

console.log(count);

// inicia ecuacion
function generate_equation() {
  var num1 = Math.floor(Math.random() * 13),
    num2 = Math.floor(Math.random() * 13),
    dummyAnswer1 = Math.floor(Math.random() * 10),
    dummyAnswer2 = Math.floor(Math.random() * 10),
    allAnswers = [],
    switchAnswers = [];

  answer = eval(num1 + num2);

  document.getElementById("num1").innerHTML = num1;
  document.getElementById("num2").innerHTML = num2;

  allAnswers = [answer, dummyAnswer1, dummyAnswer2];

  for (i = allAnswers.length; i--; ) {
    switchAnswers.push(
      allAnswers.splice(Math.floor(Math.random() * (i + 1)), 1)[0]
    );
  }

  option1.innerHTML = switchAnswers[0];
  option2.innerHTML = switchAnswers[1];
  option3.innerHTML = switchAnswers[2];
}
// termina ecuacion

function insertar() {
  if (count == 10) {
    var codigoAlumno = code;
    var nombre = firstName;
    var apellido = lastName;
    var puntaje = score;
    var ruta = "http://localhost:8080/servicio/insertSuma.php";

    var formData = new FormData();
    formData.append("codigo_alumno", codigoAlumno);
    formData.append("nombre", nombre);
    formData.append("apellido", apellido);
    formData.append("puntaje", puntaje);

    fetch(ruta, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((datos) => {
        console.log("Se guardo esto" + " " + datos);
      });
  }
}

function mensaje() {
  if (count > 10) {
    if (score > 0 && score <= 4) {
      texto = "No te desanimes, sigue practicando!";
      document.getElementById("message").innerHTML = texto;
      //alert("debes mejorar");
    } else if (score > 4 && score <= 8) {
      texto = "Vas por buen camino, sigue practicando!";
      document.getElementById("message").innerHTML = texto;
      //alert("vas por un buen camino");
    } else if (score > 8 && score <= 10) {
      texto = "Muy bien, sigue practicando!";
      document.getElementById("message").innerHTML = texto;
      //alert("muy bien");
    }
  }
}

option1.addEventListener("click", function () {
  if (count <= 10) {
    if (option1.innerHTML == answer) {
      generate_equation();
      score++;
      document.getElementById("score-nmb").innerHTML = score;
    } else {
      generate_equation();
      audio.play();
    }
    insertar();
    count++;
    console.log(count);
  }
  mensaje();
});

option2.addEventListener("click", function () {
  if (count <= 10) {
    if (option2.innerHTML == answer) {
      generate_equation();
      score++;
      document.getElementById("score-nmb").innerHTML = score;
    } else {
      generate_equation();
      audio.play();
    }
    insertar();
    count++;
    console.log(count);
  }
  mensaje();
});

option3.addEventListener("click", function () {
  if (count <= 10) {
    if (option3.innerHTML == answer) {
      generate_equation();
      score++;
      document.getElementById("score-nmb").innerHTML = score;
    } else {
      generate_equation();
      audio.play();
    }
    insertar();
    count++;
    console.log(count);
  }
  mensaje();
});

generate_equation();
insertar();
mensaje();
