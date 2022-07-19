const option1 = document.getElementById("option1"),
  option2 = document.getElementById("option2"),
  option3 = document.getElementById("option3"),
  empieza = document.getElementById("btnStart"),
  pausa = document.getElementById("btnPause"),
  limpia = document.getElementById("btnReStart"),
  puntos = document.getElementById("score-nmb"),
  //options = document.querySelectorAll("options"),
  audio = document.getElementById("myAudio"),
  audio2 = document.getElementById("myAudio2"),
  mostrar = document.getElementById("mensaje"),
  timer = document.getElementById("stopwatch");

var answer = 0;
var score = 0;
var count = 1;
var texto = "";
var tiempo_usado = "";

var count2 = 1;

//var hr = 0;
var min = 0;
var sec = 0;
var stoptime = true;

var music = document.getElementById("musicBack");

let code = document.getElementById("codigo").innerHTML;
let firstName = document.getElementById("nombre").innerHTML;
let lastName = document.getElementById("apellido").innerHTML;
//let timer = document.getElementById("stopwatch").innerHTML;
let today = new Date();
let time =
  today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

let date =
  today.getFullYear() + "-" + (today.getMonth() + 1) + "-" + today.getDate();

//let time = document.getElementById("tiempo").innerHTML;

//console.log(empieza);

// inicia ecuacion
function generate_equation() {
  var num1 = Math.floor(Math.random() * 13),
    num2 = Math.floor(Math.random() * 13),
    dummyAnswer1 = Math.floor(Math.random() * 10),
    dummyAnswer2 = Math.floor(Math.random() * 10),
    allAnswers = [],
    switchAnswers = [];

  answer = eval(num1 * num2);

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
  if (count == 10 || count2 == 60) {
    var codigoAlumno = code;
    var nombre = firstName;
    var apellido = lastName;
    var puntaje = score;
    var tiempo = tiempo_usado;
    var hora = time;
    var fecha = date;
    var ruta = "http://localhost:8080/servicioProyecto/insertMulti.php";

    var formData = new FormData();
    formData.append("codigo_alumno", codigoAlumno);
    formData.append("nombre", nombre);
    formData.append("apellido", apellido);
    formData.append("puntaje", puntaje);
    formData.append("tiempo", tiempo);
    formData.append("hora", hora);
    formData.append("fecha", fecha);

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
  if (count > 10 || count2 > 59) {
    if (score > 0 && score <= 4) {
      mostrar.style.display = "block";
      texto = "No te desanimes, sigue practicando!";
      document.getElementById("message").innerHTML = texto;
      //alert("debes mejorar");
    } else if (score > 4 && score <= 8) {
      mostrar.style.display = "block";
      texto = "Vas por buen camino, sigue practicando!";
      document.getElementById("message").innerHTML = texto;
      //alert("vas por un buen camino");
    } else if (score > 8 && score <= 10) {
      mostrar.style.display = "block";
      texto = "Muy bien, sigue practicando!";
      document.getElementById("message").innerHTML = texto;
      //alert("muy bien");
    }
  }
}

function startTimer() {
  if (stoptime == true) {
    stoptime = false;
    timerCycle();
    console.log(time);
  }
  // if (count == 2) {
  //   stoptime = false;
  //   timerCycle();
  // }
}

function stopTimer() {
  if (stoptime == false) {
    stoptime = true;
  }
  // if (count > 10) {
  //   stoptime = true;
  // }
}

function stopTimer2() {
  if (count > 10) {
    stoptime = true;
  }
}

function resetTimer() {
  timer.innerHTML = "00 minutos : 00 segundos";
  stoptime = true;
  sec = 0;
  min = 0;
  puntos.innerHTML = "0";
  score = 0;
  mostrar.style.display = "none";
  time = time;
}

function timerCycle() {
  if (stoptime == false) {
    sec = parseInt(sec);
    min = parseInt(min);
    // hr = parseInt(hr);

    sec = sec + 1;

    if (sec == 60) {
      min = min + 1;
      sec = 0;
      //console.log(min);
    }
    if (min == 60) {
      hr = hr + 1;
      min = 0;
      sec = 0;
    }

    if (sec < 10 || sec == 0) {
      sec = "0" + sec;
    }
    if (min < 10 || min == 0) {
      min = "0" + min;
    }
    // if (hr < 10 || hr == 0) {
    //   hr = "0" + hr;
    // }

    //timer.innerHTML = hr + ":" + min + ":" + sec;

    timer.innerHTML =
      min + " " + "minutos" + " " + ":" + " " + sec + " " + "segundos";

    tiempo_usado = timer.innerHTML;

    if (count2 < 60) {
      setTimeout("timerCycle()", 1000);
      count2++;
      //console.log(count2);
    } else {
      insertar();
      mensaje();
    }

    //setTimeout("timerCycle()", 1000);
  }
}
/*
options.forEach(function (option) {
  option.addEventListener("click", function () {
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
    startTimer();
  });
});
*/

function setHalfVolume() {
  music.volume = 0.2;
}

option1.addEventListener("click", function () {
  if (stoptime == false) {
    if (count <= 10 && count2 <= 59) {
      if (option1.innerHTML == answer) {
        generate_equation();
        score++;
        document.getElementById("score-nmb").innerHTML = score;
        audio2.play();
      } else {
        generate_equation();
        audio.play();
      }
      insertar();
      count++;
      console.log(count);
      //stopTimer();
    }
  }
  mensaje();
  stopTimer2();
});

option2.addEventListener("click", function () {
  if (stoptime == false) {
    if (count <= 10 && count2 <= 59) {
      if (option2.innerHTML == answer) {
        generate_equation();
        score++;
        document.getElementById("score-nmb").innerHTML = score;
        audio2.play();
      } else {
        generate_equation();
        audio.play();
      }
      insertar();
      count++;
      console.log(count);
      //stopTimer();
    }
  }
  mensaje();
  stopTimer2();
});

option3.addEventListener("click", function () {
  if (stoptime == false) {
    if (count <= 10 && count2 <= 59) {
      if (option3.innerHTML == answer) {
        generate_equation();
        score++;
        document.getElementById("score-nmb").innerHTML = score;
        audio2.play();
      } else {
        generate_equation();
        audio.play();
      }
      insertar();
      count++;
      console.log(count);
      //stopTimer();
    }
  }
  mensaje();
  stopTimer2();
});

empieza.addEventListener("click", function () {
  //console.log(count);
  startTimer();
});

pausa.addEventListener("click", function () {
  stopTimer();
});

limpia.addEventListener("click", function () {
  resetTimer();
});

generate_equation();
insertar();
mensaje();
setHalfVolume();
//stopTimer();
