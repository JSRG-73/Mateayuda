//inicializacion de variables
let targetasDestapadas = 0;
let tarjeta1 = null;
let tarjeta2 = null;
let primerResultado = null;
let segundoResultado = null;
let movimientos = 0;
let aciertos = 0
let temporizador = false;

//apuntando a html

let mostrarMovimientos = document.getElementById('movimientos');
let mostrarAciertos = document.getElementById('aciertos');
//generacion numeros aleatorios

//deben de ser dos objetos similares en operacion y resultado, pues cada carta tiene un objeto
let numeros = [{"primera":"5+1","segunda":"6"},{"primera":"5+1","segunda":"6"},{"primera":"5+2","segunda":"7"},{"primera":"5+2","segunda":"7"},{"primera":"5+3","segunda":"8"},{"primera":"5+3","segunda":"8"},{"primera":"5+4","segunda":"9"},{"primera":"5+4","segunda":"9"},{"primera":"1+1","segunda":"2"},{"primera":"1+1","segunda":"2"},{"primera":"1+2","segunda":"3"},{"primera":"1+2","segunda":"3"},{"primera":"1+3","segunda":"4"},{"primera":"1+3","segunda":"4"},{"primera":"1+4","segunda":"5"},{"primera":"1+4","segunda":"5"}]


numeros = numeros.sort(()=>{return Math.random() - 0.5})


//funcion principal
function destapar(id){
        targetasDestapadas++;
        

        if (targetasDestapadas == 1){
            //mostrar primer numero
            tarjeta1 = document.getElementById(id);
            primerResultado = numeros[id];
            tarjeta1.innerHTML = primerResultado.primera;

            //desabilitar boton
            tarjeta1.disabled = true;


        }else if(targetasDestapadas == 2){
            tarjeta2= document.getElementById(id);
            segundoResultado = numeros[id];
            tarjeta2.innerHTML = segundoResultado.segunda;

            tarjeta2.disabled = true;

            //incrementar movimientos
            movimientos++;
            mostrarMovimientos.innerHTML = 'Movimientos: '+ movimientos;

            if(primerResultado.primera == segundoResultado.primera){
                //contador tarjetas destapadas
                tarjetasDestapadas = 0;

                //aumentar aciertos
                aciertos++;
                mostrarAciertos.innerHTML = 'Aciertos: '+aciertos;
                if(aciertos==8){
                    mostrarAciertos.innerHTML = 'Aciertos: '+aciertos+'👌';
                    mostrarMovimientos.innerHTML = 'Movimientos: '+movimientos+'🙂';
                    setTimeout(()=>{
                        location.reload()
                    },200);
                }

            } else{
                //mostar y volver a tapar
                setTimeout(()=>{
                    tarjeta1.innerHTML = ' ';
                    tarjeta2.innerHTML = ' ';
                    tarjeta1.disabled = false;
                    tarjeta2.disabled = false;
                    targetasDestapadas = 0;
                    //window.alert(targetasDestapadas)
                },200);

            }
            targetasDestapadas = 0

        }
}
