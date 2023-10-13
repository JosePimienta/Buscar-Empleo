$(function(){

      $('a.boton').hover(function(){
        $(this).addClass('animate__animated animate__pulse').one('animationend oAnimationEnd mozAnimatoinEnd webkitAnimationEnd', function(){
          $(this).removeClass('animate__animated animate__pulse');
        });
      });
    });

$(function(){

  $('.uno').hover(function(){
    $(this).addClass('animate__animated animate__pulse').one('animationend oAnimationEnd mozAnimatoinEnd webkitAnimationEnd', function(){
      $(this).removeClass('animate__animated animate__pulse');
    });
  });
});


$(function(){

  $('.ico').hover(function(){
    $(this).addClass('animate__animated animate__jello').one('animationend oAnimationEnd mozAnimatoinEnd webkitAnimationEnd', function(){
      $(this).removeClass('animate__animated animate__jello');
    });
  });
});

$(function(){

  $('a.mm').hover(function(){
    $(this).addClass('animate__animated animate__bounceIn').one('animationend oAnimationEnd mozAnimatoinEnd webkitAnimationEnd', function(){
      $(this).removeClass('animate__animated animate__bounceIn');
    });
  });
});

let animado = document.querySelectorAll(".trabajos");

function mostrarScroll(){
  let scrollTop = document.documentElement.scrollTop;
  for(var i=0; i<animado.length; i++){
    let alturaAnimado = animado[i].offsetTop;
    if(alturaAnimado - 530 < scrollTop){
      animado[i].style.opacity = 1;
      animado[i].classList.add("mostraArriba");
    }
  }

  for(var i=0; i<animado.length; i++){
    let alturaAnimado = animado[i].offsetTop;
    if(alturaAnimado - 530 > scrollTop){
      animado[i].style.opacity = 0;
      animado[i].classList.add("mostraArriba");
    }
  }
}

window.addEventListener("scroll", mostrarScroll);

let animadot = document.querySelectorAll(".trabajos2");

function mostrarScrollt(){
  let scrollTopt = document.documentElement.scrollTop;
  for(var i=0; i<animadot.length; i++){
    let alturaAnimadot = animadot[i].offsetTop;
    if(alturaAnimadot - 530 < scrollTopt){
      animadot[i].style.opacity = 1;
      animadot[i].classList.add("mostraArribat");
    }
  }

  for(var i=0; i<animadot.length; i++){
    let alturaAnimadot = animadot[i].offsetTop;
    if(alturaAnimadot - 530 > scrollTopt){
      animadot[i].style.opacity = 0;
      animadot[i].classList.add("mostraArribat");
    }
  }
}
window.addEventListener("scroll", mostrarScrollt);


let animado2 = document.querySelectorAll(".shoucase");

function mostrarScroll2(){
  let scrollTop2 = document.documentElement.scrollTop;
  for(var i=0; i<animado2.length; i++){
    let alturaAnimado2 = animado2[i].offsetTop;
    if(alturaAnimado2 - 400 < scrollTop2){
      animado2[i].style.opacity = 1;
     }
  }

  for(var i=0; i<animado2.length; i++){
    let alturaAnimado2 = animado2[i].offsetTop;
    if(alturaAnimado2 - 530 > scrollTop2){
      animado2[i].style.opacity = 0;
      animado2[i].classList.add("mostraArriba2");
    }
  }

  for(var i=0; i<animado2.length; i++){
    let alturaAnimado2 = animado2[i].offsetTop;
    if(alturaAnimado2 < scrollTop2 - 400){
      animado2[i].style.opacity = 0;
    }
  }
}
window.addEventListener("scroll", mostrarScroll2);


let animado3 = document.querySelectorAll(".seccion");

function mostrarScroll3(){
  let scrollTop3 = document.documentElement.scrollTop;
  for(var i=0; i<animado3.length; i++){
    let alturaAnimado3 = animado3[i].offsetTop;
    if(alturaAnimado3 - 400 < scrollTop3){
      animado3[i].style.opacity = 1;
      animado3[i].classList.add("mostraArriba3");
     }
  }

  for(var i=0; i<animado3.length; i++){
    let alturaAnimado3 = animado3[i].offsetTop;
    if(alturaAnimado3 - 400 > scrollTop3){
      animado3[i].style.opacity = 0;
      animado3[i].classList.add("mostraArriba3");
    }
  }

  for(var i=0; i<animado3.length; i++){
    let alturaAnimado3 = animado3[i].offsetTop;
    if(alturaAnimado3 < scrollTop3 - 300){
      animado3[i].style.opacity = 0;
      animado3[i].classList.add("mostraArriba3");
    }
  }
}
window.addEventListener("scroll", mostrarScroll3);

let animado4 = document.querySelectorAll(".seccion2");

function mostrarScroll4(){
  let scrollTop4 = document.documentElement.scrollTop;
  for(var i=0; i<animado4.length; i++){
    let alturaAnimado4 = animado4[i].offsetTop;
    if(alturaAnimado4 - 400 < scrollTop4){
      animado4[i].style.opacity = 1;
      animado4[i].classList.add("mostraArriba4");
     }
  }

  for(var i=0; i<animado4.length; i++){
    let alturaAnimado4 = animado4[i].offsetTop;
    if(alturaAnimado4 - 400 > scrollTop4){
      animado4[i].style.opacity = 0;
      animado4[i].classList.add("mostraArriba4");
    }
  }

  for(var i=0; i<animado4.length; i++){
    let alturaAnimado4 = animado4[i].offsetTop;
    if(alturaAnimado4 < scrollTop4 - 300){
      animado4[i].style.opacity = 0;
      animado4[i].classList.add("mostraArriba4");
    }
  }
}
window.addEventListener("scroll", mostrarScroll4);


var entradas = document.getElementsByClassName('formulario-entrada');

for (var i = 0; i < entradas.length; i++) {
  entradas[i].addEventListener('keyup', function(){
    if(this.value.length >= 1){
      this.nextElementSibling.classList.add('fijar');
    }
    else {
      this.nextElementSibling.classList.remove('fijar');
    }
    document.querySelector('#cerrar').addEventListener('click', () => {
    this.nextElementSibling.classList.remove('fijar');});

    document.querySelector('#cerrar2').addEventListener('click', () => {
    this.nextElementSibling.classList.remove('fijar');});

    document.querySelector('#cerrar3').addEventListener('click', () => {
    this.nextElementSibling.classList.remove('fijar');});
  });
}


var ent = document.getElementsByClassName('formulario-entrada');

for (var i = 0; i < ent.length; i++) {
  ent[i].addEventListener('keyup', function(){
    if(this.value.length == 0){
      this.nextElementSibling.classList.add('rojo');
    }
    else {
      this.nextElementSibling.classList.remove('rojo');
    }
    document.querySelector('#cerrar').addEventListener('click', () => {
    this.nextElementSibling.classList.remove('rojo');});

    document.querySelector('#cerrar2').addEventListener('click', () => {
    this.nextElementSibling.classList.remove('rojo');});

    document.querySelector('#cerrar3').addEventListener('click', () => {
    this.nextElementSibling.classList.remove('rojo');});

    document.querySelector('.contacto-boton').addEventListener('click', () => {
    this.nextElementSibling.classList.remove('rojo');});
  });

}

document.querySelector('.contacto-boton').addEventListener('click', () => {
document.querySelector('.formulario2').classList.toggle('show');
document.getElementById("Form2").reset();
});

document.querySelector('.registrate-boton').addEventListener('click', () => {
document.querySelector('.registrate-boton-op').classList.toggle('show');
});

document.querySelector('.bt-estud').addEventListener('click', () => {
  Swal.fire({
  icon: 'info',
  iconColor: '#6161FC',
  title: 'Nuevo Usuario',
  text: 'Al enviar este formulario se rejistrará en el sistema y podrá iniciar sesion con su correo y contraseña',
  footer: 'Podrá mirar todas las ofertas de trabajos.<br> Asegurate de llenar todos los campos.',
  background: '#DAD8D7'
});
  document.querySelector('.formulario').classList.toggle('show');
document.querySelector('.registrate-boton-op').classList.toggle('show');
});

document.querySelector('.bt-empre').addEventListener('click', () => {
  Swal.fire({
  icon: 'info',
  iconColor: '#6161FC',
  title: 'Añadir Empleo',
  text: 'Al enviar este formulario se añadirá un nuevo empleo con los datos ingresados',
  footer: 'Lo podrá ver iniciando sesion como empresa.<br> Asegurate de llenar todos los campos.',
  background: '#DAD8D7'
});
  document.querySelector('.formulario3').classList.toggle('show');
  document.querySelector('.registrate-boton-op').classList.toggle('show');
});

document.querySelector('#cerrar').addEventListener('click', () => {
  document.querySelector('.formulario').classList.toggle('show');
  document.getElementById("Form").reset();
});

document.querySelector('#cerrar2').addEventListener('click', () => {
  document.querySelector('.formulario2').classList.toggle('show');
  document.getElementById("Form2").reset();
});

document.querySelector('#soyE').addEventListener('click', () => {
  document.querySelector('.formulario2').classList.toggle('show');
  document.getElementById("Form2").reset();
});

/*nuevo*/
document.querySelector('#cerrar3').addEventListener('click', () => {
document.querySelector('.formulario3').classList.toggle('show');
document.getElementById("form").reset();
});


document.querySelector('#soyE').addEventListener('click', () => {
document.querySelector('.formularioEmpresa').classList.toggle('show');
document.querySelector('.enviarE').classList.toggle('show');
});

document.querySelector('#cerrarE').addEventListener('click', () => {
document.getElementById("FormEmpresa").reset();
document.querySelector('.formularioEmpresa').classList.toggle('show');

});







function confirmarCierre(){
  var res = confirm("¿Estás seguro de cerrar sesion?");

  if (res == true) {
return true;
  }
  else{
    return false;
  }

}

var no = document.getElementById('nom1');
var ap = document.getElementById('ape1');
var te = document.getElementById('tel1');
var di = document.getElementById('dir1');
var un = document.getElementById('uni1');
var un2 = document.getElementById('uni12');
var ema = document.getElementById('email1');
var pas = document.getElementById('pass1');
var conpas = document.getElementById('conpass1');
var error1 = document.getElementById('error1');
var valiema = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var ccc = false;
var ot = false;
var confi = document.getElementById('cof');


function Registro(){

   var numerotel = /^[0-9]+$/;

  error1.innerHTML = "";
  var mensajeError1 = [];

  if (no.value.length >= 1) {
    var nn = [];
  errorn.innerHTML = "";

  }
  else {

      var nn = [];
    errorn.innerHTML = "";
      nn.push('Error: ingrese el nombre');

    errorn.innerHTML = nn.join('.\<br>');
    document.querySelector('#cerrar').addEventListener('click', () => {
    errorn.innerHTML = "";});
  }

  if (ap.value.length >= 1) {
    var app = [];
  errora.innerHTML = "";

  }
  else {

      var app = [];
    errora.innerHTML = "";
      app.push('Error: ingrese el (los) apellido (s)');

    errora.innerHTML = app.join('.\<br>');
    document.querySelector('#cerrar').addEventListener('click', () => {
    errora.innerHTML = "";});
  }

  if (te.value.length >= 1) {
    var tee = [];
  errort.innerHTML = "";

  if (te.value.length >= 10) {
    var tee = [];
  errort.innerHTML = "";

  }
  else {

      var tee = [];
    errort.innerHTML = "";
      tee.push('Error: el numero de telefono debe tener 10 numeros');

    errort.innerHTML = tee.join('.\<br>');
    document.querySelector('#cerrar').addEventListener('click', () => {
    errort.innerHTML = "";});
  }


  }
  else{

      var tee = [];
    errort.innerHTML = "";
      tee.push('Error: ingrese un numero de telefono');

    errort.innerHTML = tee.join('.\<br>');
    document.querySelector('#cerrar').addEventListener('click', () => {
    errort.innerHTML = "";});
  }

  if (di.value.length >= 1) {
    var dii = [];
  errord.innerHTML = "";

  }
  else {

      var dii = [];
    errord.innerHTML = "";
      dii.push('Error: ingrese una direccion');

    errord.innerHTML = dii.join('.\<br>');
    document.querySelector('#cerrar').addEventListener('click', () => {
    errord.innerHTML = "";});
  }

  if (un.value.length >= 1) {
    var unii = [];
  erroru.innerHTML = "";

  }
  else {

      var unii = [];
    erroru.innerHTML = "";
      unii.push('Error: ingrese la universidad en que estudia');

    erroru.innerHTML = unii.join('.\<br>');
    document.querySelector('#cerrar').addEventListener('click', () => {
    erroru.innerHTML = "";});
  }

  if (un2.value.length >= 1) {
    var unii2 = [];
  erroru2.innerHTML = "";

  }
  else {

      var unii2 = [];
    erroru2.innerHTML = "";
      unii2.push('Error: ingrese la carrera que estudia');

    erroru2.innerHTML = unii2.join('.\<br>');
    document.querySelector('#cerrar').addEventListener('click', () => {
    erroru2.innerHTML = "";});
  }

  if (ema.value.length >= 1) {
    var emaa = [];
  errore.innerHTML = "";

  }
  else {

      var emaa = [];
    errore.innerHTML = "";
      emaa.push('Error: ingrese el correo');

    errore.innerHTML = emaa.join('.\<br>');
    document.querySelector('#cerrar').addEventListener('click', () => {
    errore.innerHTML = "";});
  }

  if (pas.value.length >= 1) {
    var pasa = [];
  errorc.innerHTML = "";

  if (pas.value.length >= 6) {
    var pasa = [];
  errorc.innerHTML = "";

  }
  else {

      var pasa = [];
    errorc.innerHTML = "";
      pasa.push('Error: la contraseña debe tener mas de 6 caracteres');

    errorc.innerHTML = pasa.join('.\<br>');
    document.querySelector('#cerrar').addEventListener('click', () => {
    errorc.innerHTML = "";});
  }

  }
  else {

      var pasa = [];
    errorc.innerHTML = "";
      pasa.push('Error: ingrese la contraseña');

    errorc.innerHTML = pasa.join('.\<br>');
    document.querySelector('#cerrar').addEventListener('click', () => {
    errorc.innerHTML = "";});
  }

  if (conpas.value.length >= 1) {
    var conpasa = [];
  errorcp.innerHTML = "";

  if (conpas.value.length >= 6) {
    var conpasa = [];
  errorcp.innerHTML = "";

  }
  else {

      var conpasa = [];
    errorcp.innerHTML = "";
      conpasa.push('Error: la contraseña debe tener mas de 6 caracteres');

    errorcp.innerHTML = conpasa.join('.\<br>');
    document.querySelector('#cerrar').addEventListener('click', () => {
    errorcp.innerHTML = "";});
  }

  }
  else {

      var conpasa = [];
    errorcp.innerHTML = "";
      conpasa.push('Error: ingrese la confirmacion de contraseña');

    errorcp.innerHTML = conpasa.join('.\<br>');
    document.querySelector('#cerrar').addEventListener('click', () => {
    errorcp.innerHTML = "";});
  }


if(no.value.length >= 1 && ap.value.length >= 1 && te.value.length >= 10 && numerotel.test(te.value) && di.value.length >= 1 && un.value.length >= 1 && un2.value.length >= 1 && ema.value.length >= 1 && pas.value.length >= 6 && conpas.value.length >= 6 && pas.value === conpas.value){

//window.alert("EMPRESA AÑADIDA CORRECTAMENTE");

      ccc = true;
      document.querySelector('.formulario').classList.toggle('show');

        }
        else {

          if(no.value.length == 0){
          mensajeError1.push('Error: ingrese el nombre');
          }

          if(ap.value.length == 0){
          mensajeError1.push('Error: ingrese el apellido');
          }

          if(te.value.length == 0){
          mensajeError1.push('Error: ingrese el telefono');
          }

          if(te.value.length >= 1 && te.value.length < 10){
          mensajeError1.push('Error: el telefono numero de telefono debe tener 10 numeros');
          }

          if(di.value.length == 0){
          mensajeError1.push('Error: ingrese una direccion');
          }

          if(un.value.length == 0){
          mensajeError1.push('Error: ingrese la universidad en que estudia');
          }

          if(un2.value.length == 0){
          mensajeError1.push('Error: ingrese la carrera que estudia');
          }

          if(ema.value.length == 0){
          mensajeError1.push('Error: ingrese el correo');
          }

          if(pas.value.length == 0){
          mensajeError1.push('Error: ingrese la contraseña');
          }

          if(conpas.value.length == 0){
          mensajeError1.push('Error: ingrese la contraseña');
          }

          if(pas.value.length < 6){
          mensajeError1.push('Error: la contraseña debe tener mas de 6 caracteres');
          }

          if (pas.value != conpas.value) {
           mensajeError1.push('Error: las contraseñas no coinciden.');
          }
        }

        document.querySelector('#cerrar').addEventListener('click', () => {
        error1.innerHTML = "";});

        error1.innerHTML = mensajeError1.join('.\<br>');

        if (ccc) {

        return (true);
        }
        else {
        return (false);
        }
}

var tacorreo = document.getElementById('entradacorreo');
var tacontrasena = document.getElementById('entradacontrasena');
var error2 = document.getElementById('error2');
var verificar = false;

function iniciar(){
  error2.innerHTML = "";
  var mensajeError2 = [];

  if (tacorreo.value.length >= 1) {
    var corn = [];
  errorcorreo.innerHTML = "";

  }
  else {

      var corn = [];
    errorcorreo.innerHTML = "";
      corn.push('Campo requerido*');

    errorcorreo.innerHTML = corn.join('.\<br>');
    document.querySelector('#cerrar2').addEventListener('click', () => {
    errorcorreo.innerHTML = "";});

    document.querySelector('.contacto-boton').addEventListener('click', () => {
    errorcorreo.innerHTML = "";});

  }

  if (tacontrasena.value.length >= 1) {
    var coi = [];
  errorcontrasena.innerHTML = "";

  }
  else {

      var coi = [];
    errorcontrasena.innerHTML = "";
      coi.push('campo requerido*');

    errorcontrasena.innerHTML = coi.join('.\<br>');
    document.querySelector('#cerrar2').addEventListener('click', () => {
    errorcontrasena.innerHTML = "";});

    document.querySelector('.contacto-boton').addEventListener('click', () => {
    errorcontrasena.innerHTML = "";});
  }


  if(tacorreo.value.length >= 1 && tacontrasena.value.length >= 1){

    verificar = true;
    document.querySelector('.formulario2').classList.toggle('show');
  }
  else {

    if(tacorreo.value.length == 0){
    mensajeError2.push('Error: ingrese el correo');
    }

    if(tacontrasena.value.length == 0){
    mensajeError2.push('Error: ingrese la cantraseña');
    }

  }

  document.querySelector('#cerrar2').addEventListener('click', () => {
  error2.innerHTML = "";
  });

  document.querySelector('.contacto-boton').addEventListener('click', () => {
  error2.innerHTML = "";});

  error2.innerHTML = mensajeError2.join('.\<br>');


  if (verificar) {

  return true;
  }
  else {
  return false;
}

}


var an1 = document.getElementById('ann1');
var an2 = document.getElementById('ann2');
var an3 = document.getElementById('ann3');
var an4 = document.getElementById('ann4');
var an5 = document.getElementById('ann5');
var an6 = document.getElementById('ann6');
var an7 = document.getElementById('ann7');
var an8 = document.getElementById('ann8');
var form = document.getElementById('form');
var error3 = document.getElementById('error3');
var bool = false;


function AnanadirT(){

error3.innerHTML = "";
var mensajeError = [];

if (an1.value.length >= 1) {
  var empresa1 = [];
errorempresa.innerHTML = "";

}
else {

  var empresa1 = [];
  errorempresa.innerHTML = "";
  empresa1.push('Error: ingrese el nombre');

  errorempresa.innerHTML = empresa1.join('.\<br>');
  document.querySelector('#cerrar3').addEventListener('click', () => {
  errorempresa.innerHTML = "";});
}

if (an2.value.length >= 1) {
  var trabajo1 = [];
errortrabajo.innerHTML = "";

}
else {

  var trabajo1 = [];
  errortrabajo.innerHTML = "";
  trabajo1.push('Error: ingrese el trabajo');

  errortrabajo.innerHTML = trabajo1.join('.\<br>');
  document.querySelector('#cerrar3').addEventListener('click', () => {
  errortrabajo.innerHTML = "";});
}

if (an3.value.length >= 1) {
  var destrabajo1 = [];
  errordestrabajo.innerHTML = "";

}
else {

  var destrabajo1 = [];
  errordestrabajo.innerHTML = "";
  destrabajo1.push('Error: ingrese la descripcion');

  errordestrabajo.innerHTML = destrabajo1.join('.\<br>');
  document.querySelector('#cerrar3').addEventListener('click', () => {
  errordestrabajo.innerHTML = "";});
}

if (an7.value.length >= 1) {
  var sala1 = [];
 errorsalario.innerHTML = "";

}
else {

  var sala1 = [];
  errorsalario.innerHTML = "";
  sala1.push('Error: ingrese el salario');

  errorsalario.innerHTML = sala1.join('.\<br>');
  document.querySelector('#cerrar3').addEventListener('click', () => {
  errorsalario.innerHTML = "";});
}

if (an4.value.length >= 1) {
  var ubi1 = [];
  errorubicacion.innerHTML = "";

}
else {

  var ubi1 = [];
  errorubicacion.innerHTML = "";
  ubi1.push('Error: ingrese la direccion');

  errorubicacion.innerHTML = ubi1.join('.\<br>');
  document.querySelector('#cerrar3').addEventListener('click', () => {
  errorubicacion.innerHTML = "";});
}

if (an5.value.length >= 1) {
  var hor1 = [];
  errorhorario.innerHTML = "";

}
else {

  var hor1 = [];
  errorhorario.innerHTML = "";
  hor1.push('Error: ingrese el horario');

  errorhorario.innerHTML = hor1.join('.\<br>');
  document.querySelector('#cerrar3').addEventListener('click', () => {
  errorhorario.innerHTML = "";});
}

if (an8.value.length >= 1) {
  var cierre1 = [];
errorconv.innerHTML = "";

}
else {

  var cierre1 = [];
  errorconv.innerHTML = "";
  cierre1.push('Error: ingrese la fecha de cierre');

  errorconv.innerHTML = cierre1.join('.\<br>');
  document.querySelector('#cerrar3').addEventListener('click', () => {
  errorconv.innerHTML = "";});
}


if (an6.value.length >= 1) {
  var conta1 = [];
  errorcontacto.innerHTML = "";

}
else {

  var conta1 = [];
  errorcontacto.innerHTML = "";
  conta1.push('Error: ingrese el contacto');

  errorcontacto.innerHTML = conta1.join('.\<br>');
  document.querySelector('#cerrar3').addEventListener('click', () => {
  errorcontacto.innerHTML = "";});
}


 if(an1.value.length >= 1 && an2.value.length >= 1 && an3.value.length >= 1 && an7.value.length >= 1 && an4.value.length >= 1 && an5.value.length >= 1 && an8.value.length >= 1 && an6.value.length >= 1){

  Swal.fire({
    //position: 'top-end',
    //icon: 'success',
    title: 'EMPLEO AÑADIDO CORRECTAMENTE',
    showConfirmButton: false,
    timer: 1500,
    background: 'rgba(109, 250, 84, 0.5)'
 })
//window.alert("EMPRESA AÑADIDA CORRECTAMENTE");

   bool = true;
   document.querySelector('.formulario3').classList.toggle('show');
   document.querySelector('.barra-menu').classList.toggle('show');

 }
 else {
   if(an1.value.length == 0){
   mensajeError.push('Error: ingrese el nombre');
   }

   if(an2.value.length == 0){
   mensajeError.push('Error: ingrese el trabajo');
   }

   if(an3.value.length == 0){
   mensajeError.push('Error: ingrese la descripcion');
   }

   if(an7.value.length == 0){
   mensajeError.push('Error: ingrese el salario');
   }

   if(an4.value.length == 0){
   mensajeError.push('Error: ingrese la ubicacion');
   }

   if(an5.value.length == 0){
   mensajeError.push('Error: ingrese el horario');
   }

   if(an8.value.length == 0){
   mensajeError.push('Error: ingrese la fecha de cierre');
   }

   if(an6.value.length == 0){
   mensajeError.push('Error: ingrese el contacto');
   }

 }

document.querySelector('#cerrar3').addEventListener('click', () => {
error3.innerHTML = "";
});

error3.innerHTML = mensajeError.join('.\<br>');

if (bool) {

return true;
}
else {
return false;
}

}


/*ScrollReveal().reveal('.shoucase');
ScrollReveal().reveal('.shoucase', {delay: 500});
ScrollReveal().reveal('.trabajos', {delay: 500});
ScrollReveal().reveal('.seccion', {delay: 500});
ScrollReveal().reveal('.seccion2', {delay: 500});*/
