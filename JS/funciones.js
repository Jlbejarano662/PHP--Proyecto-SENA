function Index(){
    var rol,documento,contrasena;
    rol=document.getElementById("rol").value;
    documento=document.getElementById("Documento").value;
    contrasena=document.getElementById("Contraseña").value;
    
    if(documento=="" || contrasena=="" || rol==""){
        alert("Todos los campos son obligatorios");
        return false;
    }else if(rol=="NA" ){
        alert ("Ingrese un tipo de usuario válido");
        return false;
    }
}
//_________________________________________________________________________________
function validar0(){
    var rol,documento,contrasena,nombre,apellido,firma,expresion,expresion1,expresion2,expresion3;
    rol=document.getElementById("rol").value;
    documento=document.getElementById("Documento").value;
    nombre=document.getElementById("Nombres").value;
    apellido=document.getElementById("Apellidos").value;
    unidad=document.getElementById("UniFuncional").value;
    correo=document.getElementById("Correo").value;
    
    expresion1=	/^\d{1,11}$/; //
    expresion2=/\d/;
    expresion3=/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/;//VALIDAR CORREO

    if(documento==""|| nombre=="" || apellido=="" || unidad=="" || correo=="" ){
        alert("Todos los campos son obligatorios");
        return false;
    }else if(rol=="NA" || rol==""){
        alert ("Ingrese un tipo de usuario válido");
        return false;
    }else if(!expresion1.test(documento)){
        alert("El número de documento debe tener máximo 20 caracteres sin espacios en blanco");
        return false;
    }else if(nombre.length>50){
        alert("Los nombres deben tener máximo 50 caracteres");
        return false;
    }else if(expresion2.test(nombre)){
        alert("Los nombres deben contener solo letras");
        return false;
    }
    else if(apellido.length>50){
        alert("Los apellidos deben tener máximo 50 caracteres");
        return false;
    }
    else if(expresion2.test(apellido)){
        alert("Los apellidos deben contener solo letras");
        return false;
    }
    else if(unidad.length>100){
        alert("La unidad funcional debe tener máximo 100 caracteres");
        return false;
    }    
    else if(!expresion3.test(correo)){
        alert("La dirección de correo electrónico no es válida");
        return false;
    }
    else if(correo.length>100){
        alert("El correo debe tener máximo 100 caracteres");
        return false;
    }
    else if(firma.length>300){
        alert("La firma debe tener máximo 300 caracteres");
        return false;
    }

}
//_________________________________________________________________________________
function validar(){
    var rol,documento,contrasena,nombre,apellido,firma,expresion,expresion1,expresion2,expresion3;
    rol=document.getElementById("rol").value;
    documento=document.getElementById("Documento").value;
    contrasena=document.getElementById("Contraseña").value;
    nombre=document.getElementById("Nombres").value;
    apellido=document.getElementById("Apellidos").value;
    unidad=document.getElementById("UniFuncional").value;
    correo=document.getElementById("Correo").value;
    firma=document.getElementById("Firma").value;

    expresion=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$+$-$_$|$;$=$:$¿$¡$°$"$'])[A-Za-z\d$@$!%*?&#.$($)$+$-$_$|$;$=$:$¿$¡$°$"$']{8,20}/;
    expresion1=	/^\d{1,11}$/; //
    expresion2=/\d/;
    expresion3=/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/;//VALIDAR CORREO

    if(documento=="" || contrasena=="" || nombre=="" || apellido=="" || unidad=="" || correo=="" ){
        alert("Todos los campos son obligatorios");
        return false;
    }else if(rol=="NA" || rol==""){
        alert ("Ingrese un tipo de usuario válido");
        return false;
    }else if(!expresion1.test(documento)){
        alert("El número de documento debe tener máximo 20 caracteres sin espacios en blanco");
        return false;
    }else if(nombre.length>50){
        alert("Los nombres deben tener máximo 50 caracteres");
        return false;
    }else if(expresion2.test(nombre)){
        alert("Los nombres deben contener solo letras");
        return false;
    }
    else if(apellido.length>50){
        alert("Los apellidos deben tener máximo 50 caracteres");
        return false;
    }
    else if(expresion2.test(apellido)){
        alert("Los apellidos deben contener solo letras");
        return false;
    }
    else if(unidad.length>100){
        alert("La unidad funcional debe tener máximo 100 caracteres");
        return false;
    }    
    else if(!expresion3.test(correo)){
        alert("La dirección de correo electrónico no es válida");
        return false;
    }
    else if(correo.length>100){
        alert("El correo debe tener máximo 100 caracteres");
        return false;
    }
    else if(firma.length>300){
        alert("La firma debe tener máximo 300 caracteres");
        return false;
    }
    else if(!expresion.test(contrasena)){
        alert("La contraseña debe ser de mínimo 8 caracteres y máximo 20, y debe contener al menos una letra misnuscula, una letra mayuscula, un dígito y un caracter especial");
        return false;
    }

}

//_________________________________________________________________
function Validar1(){
    var cono,dArena,dMaxMaterial,porcentaje,expresion;
    cono=document.getElementById("ConstanteDelCono").value;
    dArena=document.getElementById("DensidadDeLaArena").value;
    dMaxMaterial=document.getElementById("DensidadMáximaDelMaterial").value;
    porcentaje=document.getElementById("PorcentajeDeCompactación").value;
    expresion= /^(\d+)?([.]?\d{0,2})?$/;
    if (cono=="" || dArena=="" || dMaxMaterial=="" || porcentaje==""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(cono==0 || dArena==0 || dMaxMaterial==0 || porcentaje==0){
        alert("Ingrese valores númericos válidos. Recuerde redondear a dos decimales y utilizar la coma (,) para indicar decimales");
        return false;
    }
    else if(!expresion.test(cono)){
        alert("Ingrese valores númericos válidos. Recuerde redondear a dos decimales y utilizar la coma (,) para indicar decimales");
        return false;
    }
    else if(!expresion.test(dArena)){
        alert("Ingrese valores númericos válidos. Recuerde redondear a dos decimales y utilizar la coma (,) para indicar decimales");
        return false;
    }
    else if(!expresion.test(dMaxMaterial)){
        alert("Ingrese valores númericos válidos. Recuerde redondear a dos decimales y utilizar la coma (,) para indicar decimales");
        return false;
    }
    else if(!expresion.test(porcentaje) ){
        alert("Ingrese valores númericos válidos. Recuerde redondear a dos decimales y utilizar la coma (,) para indicar decimales");
        return false;
    }

}

//_________________________________________________________________
function Validar2(){
    var localizacion,pesoInicial,pesoFinal,pesoHumedo,humedad,registroFotografico,expresion,expresion1;
    localizacion=document.getElementById("Localizacion").value;
    pesoInicial=document.getElementById("PesoInicial").value;
    pesoFinal=document.getElementById("PesoFinal").value;
    pesoHumedo=document.getElementById("PesoHumedo").value;
    humedad=document.getElementById("Humedad").value;
    registroFotografico=document.getElementById("registroFotografico").value;
    expresion= /^(\d+)?([.]?\d{0,2})?$/;
    if (localizacion=="" || pesoInicial=="" || pesoFinal=="" || pesoHumedo=="" || humedad==""){
        alert("Todos los campos exceptuando registro fotográfico son obligatorios");
        return false;
    }
    else if(pesoInicial==0 || pesoFinal==0 || pesoHumedo==0 || humedad==0){
        alert("Ingrese valores númericos válidos. Recuerde redondear a dos decimales y utilizar la coma (,) para indicar decimales");
        return false;
    }
    else if(!expresion.test(pesoInicial)){
        alert("Ingrese valores númericos válidos. Recuerde redondear a dos decimales y utilizar la coma (,) para indicar decimales");
        return false;
    }
    else if(!expresion.test(pesoFinal)){
        alert("Ingrese valores númericos válidos. Recuerde redondear a dos decimales y utilizar la coma (,) para indicar decimales");
        return false;
    }
    else if(!expresion.test(pesoHumedo)){
        alert("Ingrese valores númericos válidos. Recuerde redondear a dos decimales y utilizar la coma (,) para indicar decimales");
        return false;
    }
    else if(!expresion.test(humedad) ){
        alert("Ingrese valores númericos válidos. Recuerde redondear a dos decimales y utilizar la coma (,) para indicar decimales");
        return false;
    }
    else if(registroFotografico.length>=300){
        alert("El campo registro fotográfico debe tener máximo 300 caracteres");
        return false;
    }

}
//_________________________________________________________________
function ConfirmDemo() {
    //Ingresamos un mensaje a mostrar
    var mensaje = confirm("¿Esta seguro de salir?. No se guardarán cambios");
    //Detectamos si el usuario acepto el mensaje
    if (mensaje) {
     //alert("¡Gracias por aceptar!");
        window.open('Desktop.php', '_self');
        //window.history.back();
    }
    //Detectamos si el usuario denegó el mensaje
}
//_________________________________________________________________
function ConfirmDemo1() {
    //Ingresamos un mensaje a mostrar
    var mensaje = confirm("¿Esta seguro de salir?. No se guardarán cambios");
    //Detectamos si el usuario acepto el mensaje
    if (mensaje) {
        window.open('administrarUsuarios.php', '_self');

    }
    //Detectamos si el usuario denegó el mensaje
}
//_________________________________________________________________
function ConfirmEliminar() {
    //Ingresamos un mensaje a mostrar
    //Ingresamos un mensaje a mostrar
    var mensaje = confirm("¿Esta seguro de que desea continuar?");
    //Detectamos si el usuario acepto el mensaje
    if (mensaje) {
        return fieldset.disabled = false, true;          
    } else{
        return false;
    }
}

//_________________________________________________________________
function ConfirmGuardar1() {
    //Ingresamos un mensaje a mostrar
    var mensaje = confirm("¿Esta seguro de que desea continuar?");
    //Detectamos si el usuario acepto el mensaje
    if (mensaje) {
        var doc1,doc2;
        doc1=document.getElementById("Documento").value;
        doc2=document.getElementById("BuscarDocumento").value;
        if (doc1===doc2){
            return Documento.disabled = false, true;          
        }else{
            alert("El número de documento no se puede cambiar"); 
            return false;          
        }
    } else{
        return false;
    }

}

//_________________________________________________________________
function ConfirmGuardar() {
    //Ingresamos un mensaje a mostrar
    var mensaje = confirm("¿Esta seguro de que desea continuar?");
    //Detectamos si el usuario acepto el mensaje
    if (mensaje) {
        return true;
    } else{
        return false;
    }
    //Detectamos si el usuario denegó el mensaje
}
//_________________________________________________________________
function Cancelar() {
    //Ingresamos un mensaje a mostrar
    var mensaje = confirm("¿Esta seguro de que desea continuar?. No se guardaran datos de este ensayo");
    //Detectamos si el usuario acepto el mensaje
    if (mensaje) {
        return true;
    }else{
        return false;
    }
    //Detectamos si el usuario denegó el mensaje
}
//___________________________________________________________________
function Busqueda(){
    var buscar,expresion;
    buscar=document.getElementById("BuscarDocumento").value;
    expresion=/^\d{1,11}$/;

    if(!expresion.test(buscar) || buscar==""){
        alert("Ingrese un número de documento válido"); 
        return false;
    }
}
//___________________________________________________________________
function Busqueda1(){
    var buscar;
    buscar=document.getElementById("buscar1").value;
    if(buscar==""){
        alert("Por favor ingrese parámetros de búsqueda válidos"); 
        return false;
    }
}
//___________________________________________________________________
function Busqueda2(){
    var buscar1,buscar2,buscar3;
    buscar1=document.getElementById("buscar1").value;
    buscar2=document.getElementById("buscar2").value;
    buscar3=document.getElementById("buscar3").value;
    if(buscar1=="" && buscar2=="" && buscar3==""){
        alert("Por favor ingrese parámetros de búsqueda válidos"); 
        return false;
    }
}
//_____________________________________________________________________
function EditarUsuario(){
    return fieldset.disabled = false, Guardar.disabled = false,Guardar.className= 'boton1',Editar.disabled =true, Editar.className= 'boton1 disabled';

}

