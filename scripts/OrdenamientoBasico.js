//Declaracion de constantes
//Selecciona todos los elementos .box

//Fichas
const totalDraggableItems = 5;
const min = 1;
const max = 9;
const op = document.querySelector(".section1");
let operator;
switch(op.id)
{
  case "sumas":
    operator="+";
    break;
  case "restas":
    operator="-";
    break;
  case "multiplicaciones":
    operator="*";
    break;
  case "diviciones":
    operator="/";
    break;
  default:
    operator="+";
}
const fichas = document.querySelector(".Fichas");
const colors = ["#ff6384", "#eb8836", "#ffce56", "#9966ff", "#4bc0c0"];
//variables
let operations = [];
let answer = [];
let boxElements;
//Botones ingame
const gameBtns = document.querySelector(".inGameBtns");
const verifyBtn = gameBtns.querySelector("#verify");
const againBtn = gameBtns.querySelector("#again");
//Listener Botones
againBtn.addEventListener("click", reStart);
verifyBtn.addEventListener("click", verify);
//Query
const instructions = document.querySelector(".instrucciones")
const initialMessage = instructions.textContent;
const scoreSection = document.querySelector(".estadisticas");
const correctSpan = scoreSection.querySelector(".correct");
const triesSpan = document.querySelector(".tries");

//Funcion para inicializar el juego, genera fichas
function initiateGame() {
  verifyBtn.style.display = "block";
  againBtn.style.display = "none";
  //for(let i=0; i<totalDraggableItems; i++) {
  //  operations.push(randomOperation(operator));
  //}
  operations = randomOperationArray();
  answer = getAnswer(operations);
  //Si se trata de una multiplicacion, se remplaza el "*"" por un "×" en las fichas para una mejor comprecion
  if(operator == '*')
  for(let i=0; i<totalDraggableItems; i++) {
    fichas.insertAdjacentHTML("beforeend", `
    <div class="box" draggable="true" style="background-color: ${colors[i%colors.length]};" id="box-${i}"><span>${operations[i].replace('*', '×')}</span></div>
    `);
  }
  else
  for(let i=0; i<totalDraggableItems; i++) {
    fichas.insertAdjacentHTML("beforeend", `
    <div class="box" draggable="true" style="background-color: ${colors[i%colors.length]};" id="box-${i}"><span>${operations[i]}</span></div>
    `);
  }
  boxElements = document.querySelectorAll(".box");
  addListenersToBoxElements(boxElements);
}

//Funcion para agregar Listener a los elementos Box
function addListenersToBoxElements(boxElements)
{
  //A cada elemento le agrega un Listener con su respectiva funcion a ejecutar
boxElements.forEach(elem => {
  elem.addEventListener("dragstart", dragStart);
  // elem.addEventListener("drag", drag);
  elem.addEventListener("dragend", dragEnd);
  elem.addEventListener("dragenter", dragEnter);
  elem.addEventListener("dragover", dragOver);
  elem.addEventListener("dragleave", dragLeave);
  elem.addEventListener("drop", drop);
});
}
//Verifica si esta correcto el orden de las fichas
function verify()
{
  triesSpan.textContent = parseInt(triesSpan.textContent) + 1;
  const elements = document.querySelectorAll(".box");
  var score = 0;
  //Si el operador es "×" lo convierte en "*" para que la computadora lo pueda resolver
  if(operator == '*')
  {
  let string;
  for (let i = 0; i < elements.length; i++) {
    string = elements[i].querySelector("span").textContent;
    if(eval(string.replace('×', '*')) == answer[i])
      score++;
  }
  }
  else
  for (let i = 0; i < elements.length; i++) {
    if(eval(elements[i].querySelector("span").textContent) == answer[i])
      score++;
  }
  correctSpan.textContent = score;
  if(score == totalDraggableItems)
  {
    gameOver();
  }
  else{
    var wrong = totalDraggableItems-score; 
    instructions.textContent = "Tienes " + wrong + " de " + totalDraggableItems + " fichas en el orden incorrecto";
  }
}
//Finaliza el juego y muestra los resultados en los elementos box
function gameOver()
{
  verifyBtn.style.display = "none";
  againBtn.style.display = "block";
  for(let i = 0; i < boxElements.length; i++)
  {
    boxElements[i].querySelector("span").textContent = answer[i];
    boxElements[i].style.backgroundColor = "#76c04b";
  }
  instructions.textContent = "¡Correcto!";
}
//Funcion para reiniciar variables e inicialzar el juego de nuevo
function reStart()
{
  againBtn.style.display = "none";
  instructions.textContent = initialMessage;
  operations = [];
  answer= [];
  triesSpan.textContent = 0;
  correctSpan.textContent = 0;
  while (fichas.firstChild) fichas.removeChild(fichas.firstChild);
  initiateGame();
}

//Funciones auxiliares

//Regresa un arreglo cons las respuestas en su respectivo orden
function getAnswer(array)
{
  var answer = [];
  array.forEach(elem => {
    answer.push(eval(elem))
  });
  answer.sort(function(a, b){return a - b});
  return answer;
}
//Regresa un string con una operacion al azar
function randomOperation(){
  let number1 = Math.floor(Math.random() * max) + min;
  let number2;
  switch(operator) {
    case "+":
      number2 = Math.floor(Math.random() * max) + min;
      break;
    case "-":
      number2 = Math.floor(Math.random() * number1) + min;
      break;
    case "*":
      number2 = Math.floor(Math.random() * max) + min;
      break;
    case "/":
        number2 = number1;
        number1 = number2 * (Math.floor(Math.random() * (max - min) + min));
        break;
    default:
      // code block
  }
  var operation = number1+operator+number2;
  return operation;
}

//Genera un arreglo de string con operaciones
function randomOperationArray()
{
  let cont = 0;
  let operation;
  let array = [];
  while(cont < totalDraggableItems)
  {
    operation = randomOperation();
    if(!array.includes(operation))
    {
      array.push(operation)
      cont++;
    }
  }
  return array;
}
//Drag and drop funciones

//Funcion cuando se hace click al elemento para emoezar a arrastrar
function dragStart(event) {
  event.target.classList.add("drag-start");
  event.dataTransfer.setData("text", event.target.id);
}
  // Funcion cuando se suelta el click del elemento que se esta arrastrando
function dragEnd(event) {
  event.target.classList.remove("drag-start");
}
//Funcion cuando un elemento arrastrado entra en el area de otro un elemento para soltar
function dragEnter(event) {
  if(!event.target.classList.contains("drag-start")) {
    event.target.classList.add("drag-enter");
  }
}
  //Funcion cuando un elemento arrastrado su mueve dentro del area de soltar
function dragOver(event) {
  event.preventDefault();
}
  //Funcion cuando el elemento arrastrado sale del area de soltado de otro elemento
function dragLeave(event) {
  event.target.classList.remove("drag-enter");
}
  //Funcion cuando se suelta el elemento arrastrado dentro del area de soltar
function drop(event) {
  event.preventDefault();
  event.target.classList.remove("drag-enter");
  const draggableElementId = event.dataTransfer.getData("text");
  const droppableElementId = event.target.id;
  //Verifica que no sea puesto en el mismo lugar al que estaba
  if(draggableElementId !== droppableElementId) {
    const draggableElement = document.getElementById(draggableElementId);
    const droppableElementBgColor = event.target.style.backgroundColor;
    const droppableElementTextContent = event.target.querySelector("span").textContent;
    
    event.target.style.backgroundColor = draggableElement.style.backgroundColor;
    event.target.querySelector("span").textContent = draggableElement.querySelector("span").textContent;
    event.target.id = draggableElementId;
    draggableElement.style.backgroundColor = droppableElementBgColor;
    draggableElement.querySelector("span").textContent = droppableElementTextContent;
    draggableElement.id = droppableElementId;
  }
}

initiateGame();