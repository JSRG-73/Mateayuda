
aciertos = 0;

function inicio(){
    var boton_recargar = document.getElementById('Boton_recargar');
    boton_recargar.disabled = true;
    //console.log(boton_recargar.disabled);
    const collection = document.getElementsByClassName("number");
    //console.log(collection[2].getAttribute("id"));
}


function allowDrop(ev) {
    ev.preventDefault()
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}


function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
    document.getElementById(data).style.height = "100%";
    document.getElementById(data).style. width = "100%";
  



    var respuesta = document.getElementById("respuesta").getAttribute("value");
    
    document.getElementById("mensaje_respuesta").style.opacity = '1';
    document.getElementById("mensaje_respuesta").style.borderRadius = "30px";

    //console.log(respuesta);

    if (respuesta == data) {
        document.getElementById("mensaje_respuesta").style.background = "rgba(127, 255, 212, 0.5)";
        document.getElementById("mensaje_respuesta").style.color = "green";
        document.getElementById("mensaje_respuesta").innerHTML = "¡Correcto! &#128049;";
        aciertos ++;
        //console.log(aciertos);
    } else {
        document.getElementById("mensaje_respuesta").style.backgroundColor = "rgba(255, 140, 0, 0.3)";
        document.getElementById("mensaje_respuesta").style.color = "red";
        document.getElementById("mensaje_respuesta").innerHTML = "Incorrecto &#128576; <br> La respuesta es " + respuesta;
    }

    var boton_recargar = document.getElementById('Boton_recargar');
    boton_recargar.disabled = false ;
    
    const collection = document.getElementsByClassName("number");
    

    for(var i = 0; i<collection.length;i++){
        console.log(collection[i].getAttribute("id"));
        document.getElementById(collection[i].getAttribute("id")).draggable=null;
    }

    document.getElementById("ecuacion").draggable=null;

}

function myFunction(){
    console.log("qazqaz");
}