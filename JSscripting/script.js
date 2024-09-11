/*usando constructores en vez de un struct de objeto tradicional*/
/*NOTAS ADICIONALES: 
    PARCEINT: CONVIERTE LOS STRINGS A ENTEROS
    XXX.toString: CONVIERTE UN ELEMENTO ENTERO A STRING
    SETTIMEOUT: AGREGA DILEY
*/
var ElementHover = document.getElementById('smoothmovement');
var elementone = document.getElementById('element-1');
var elementtwo = document.getElementById('element-2');

var positionone = parseInt(elementone.style.top);
var positiontwo = parseInt(elementtwo.style.top);
function smooth_movement(i){
    var x1 = i; 
    var definitive_position_at_time = String(x1);
    elementone.style.top = definitive_position_at_time + "%";
}
function movement(){
    for(i = positionone; i <= 120; i++){
    setTimeout(smooth_movement(i), 12);
    }
}

ElementHover.addEventListener('mouseover', movement());
