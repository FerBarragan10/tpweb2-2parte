'use strict'
let templateEquipos;

fetch('js/templates/equipos.handlebars')
.then(response => response.text())
.then(template => {
    templateEquipos = Handlebars.compile(template); // compila y prepara el template

    getEquipos();
});


function getEquipos() {
    fetch("api/equipo")
    .then(response => response.json())
    .then(jsonEquipos => {
        mostrarEquipos(jsonEquipos);
    })
}

function mostrarEquipos(jsonEquipos) {
    let context = { // como el assign de smarty
        Equipos: jsonEquipos,
        otra: "hola"
    }
    let html = templateEquipos(context);
    document.querySelector("#equipos-container").innerHTML = html;
}
