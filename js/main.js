'use strict';


let templateEquipos;
let templateComentarios;

/*
fetch('js/templates/equipos.handlebars')
.then(response => response.text())
.then(template => {
    templateEquipos = Handlebars.compile(template); // compila y prepara el template
    getEquipos();
});*/
fetch('js/templates/comentarios.handlebars')
.then(response => response.text())
.then(template => {
    templateComentarios = Handlebars.compile(template); // compila y prepara el template
    getComentarios();
});
fetch('js/templates/comentarioLogueado.handlebars')
.then(response => response.text())
.then(template => {
    templateComentarios = Handlebars.compile(template); // compila y prepara el template
    getComentarios();
});


function getEquipos() {
    fetch("api/equipo")
    .then(response => response.json())
    .then(jsonEquipos => {
        mostrarEquipos(jsonEquipos);
    })
}
function getComentarios() {
    fetch("api/comentario")
    .then(response => response.json())
    .then(jsonComentarios=> {
        mostrarComentarios(jsonComentarios);

          document.querySelector("#js-addComentario").addEventListener("click",create);
    })
}


function mostrarComentarios(jsonComentarios) {
    let context = { // como el assign de smarty
        Comentarios: jsonComentarios,
    //    otra: "hola"
    }
    let html2 = templateComentarios(context);
    document.querySelector("#comentarios-container").innerHTML = html2;
    asignarEventoBorrarComentario();
}

function mostrarEquipos(jsonEquipos) {
    let context = { // como el assign de smarty
        Equipos: jsonEquipos,
    //    otra: "hola"
    }
    let html = templateEquipos(context);
    document.querySelector("#equipos-container").innerHTML = html;
}
function asignarEventoBorrarComentario(){

  var botones = document.querySelectorAll('.js-delComentario');
  botones.forEach(function(boton) {
    var z = boton.value;
    boton.addEventListener('click', function() {borrarComentario(z);});

  });
}
function borrarComentario(z){
  alert(z);
  let id=z;
  let url= "api/comentario/" +id;
  fetch(url, {
    method: 'DELETE',
    mode: 'cors',
    headers: {
      'Content-Type': 'application/json'
    },
  })
  .then(r=>{console.log(r);});//refresh a la pagina
}

function create(){

  let comentario=document.querySelector("#comentario").value;
  let id_usuario=document.querySelector("#id_usuario").value;
  //let jugador=document.querySelector("#jugador").value;
  let imagen=document.querySelector("#imagen").value;
  let publicacion ={
    "comentario":comentario,
    "id_usuario":"8",//aca tiene  q ir el usuario logueado.
    "id_jugador":"12",//aca va el id de un jugador q exista, sino da error
    "imagen":imagen
  }
 alert(comentario);
 alert(JSON.stringify(publicacion));
  let url= "api/comentario";
  fetch(url, {
    method: 'POST',
    mode: 'cors',
    headers: {
      'Content-Type':'application/json'
    },
    body: JSON.stringify(publicacion)


  })
  .then(r=>{console.log(r);});//refresh;
}

/*
document.querySelector('#refresh').addEventListener(event => {
    event.preventDefault();
	getEquipos();
});




template({arreglo:equipos});

let context = {
tasks: [{"id_tarea":"21","titulo":"Hacer la API",...},
       {"id_tarea":"23","titulo":"zxc",...],
otraVariable: “valor”
}
let html = templateEquipos(context); //acá tenemos el HTML final!!

//Reemplazar el html generado por handlebars

document.querySelector("#equipos-container").innerHTML = html
///////////////////////////////////////




////////////////////////////////////////////////////////
function cargarEquipos() {
      fetch("api/equipo")
       .then(response => response.json())
       .then(equiposJSON =>  {
              document.querySelector('#listaEquipos').innerHTML = "";
              for (const equipo of equiposJSON) {
                  document.querySelector('#listaEquipos').append(crearEquipo(equipo));
              }
          })
          .catch(function() {
              document.querySelector('#listaEquipos').append('<li>Imposible cargar la lista de equipos</li>');
          });
  }
function crearEquipo(equipo){
   var element = '<li id="equipo' + equipo.id_equipo + '"class="list-group-item">'
   element += equipo.nombre;
  // element += '<a href="borrarEquipo/' + equipo.id_equipo + '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
   element += '</li>';
   return element;
}
*/
