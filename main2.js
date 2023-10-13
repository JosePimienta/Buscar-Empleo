var p1 = document.getElementById('p1');
var p2 = document.getElementById('p2');
var verificarcontra = false;

function nuevaC(){
  var re1 = [];
  errorN.innerHTML = "";

  if (p1.value.length >= 1 && p2.value.length >= 1) {

      if (p1.value.length >= 6 && p2.value.length >= 6) {

          if (p1.value == p2.value) {

              verificarcontra = true;

          }else {

          re1.push('LAS CONTRASEÑAS NO COINCIDEN');

          verificarcontra = false;
          }
      }else {

       re1.push('LA CONTRASEÑA DEBE TENER MAS DE SEIS CARACTERES');

       verificarcontra = false;
      }

  }
  else {

      re1.push('Campos requeridos*');
  }

 errorN.innerHTML = re1.join('.\<br>');

  if (verificarcontra) {
  return true;
  }
  else {
  return false;
}

}
