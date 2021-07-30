/* alert("Te damos la bienvenida. Escribe tu mensaje")

var nombre; //para añadir una variable//
var edad;
nombre = prompt ("ingresa tu nombre");
edad = prompt ("ingresa tu edad");
document.write ("Te damos la bienvenida," + " " + nombre + "." + " Tu edad es" + " " + edad ); //devuelve los datos que se ingresaron//
 */

var date = new Date();
var d = date.getDate();
var day = (d<10)?'0'+d:d;
var m = date.getMonth()+1;
var month = (m<10)?'0'+m:m;
var yy = date.getYear();
var year = (yy<1000)?yy+1900:yy;

function makeArray(){for(i=0;i<makeArray.arguments.length;i++)this[i+1]=makeArray.arguments[i]}
var months = new makeArray('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
var date=new Date();
var day=date.getDate();
var month=date.getMonth()+1;
var yy=date.getYear();
var year=(yy<1000)?yy+1900:yy;
document.write(". Hoy es "+day+ " de "+months[month]+" del "+year);
