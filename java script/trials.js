function greet(name, lname){
    console.log ('Hello ' + name + lname);
}
greet('Lys', ' Christa');
greet('Christa ', 'Anais');


function add(a, b){
    console.log(a+b);
}
function subtract(a,b){
    console.log(a-b);

}
function multiply(a, b){
    console.log(a*b);
}
add(2,4);
subtract(4, 5);
multiply(2, 4);

let colors = ['red', 'blue'];
console.log (colors [1]);
let num1 = 42;
let num2 = 42;
console.log(num1 === num2); // true
console.log(x); // undefined (hoisted)
var x = 5;
sayHello(); // "Hello!"

function sayHello() {
  console.log("Hello!");
}
function test() {
  var x = 10;
  console.log(x); // 10
}
function okay(x, y){
   
    console.log (x + ' is great' + y + 'is sick');
    
}

okay ('Bios', 'chem');
