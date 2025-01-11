// 1. GLOBAL SCOPE
let greeting = 'Hello world!';
console.log(greeting);
// Output: Hello world!
function sayHello() {
  console.log(greeting);
}
sayHello();
// Output: Hello world!


// 2. LOCAL SCOPE
function sayHello() {
    let greeting = 'Hello world!';
    console.log(greeting);
  }
sayHello();
// Output: Hello world!


// 3. BLOCK SCOPE
let score = 70;
if (score >= 70) {
  let isPass = 'Yes';
  console.log(isPass);
}
// Output: Lulus


// 4. LEXICAL SCOPE
function checkScore() {
    let score = 70;
    
    function printScore() {
      console.log(score);
    }
  
    printScore();
  }
  
  checkScore();
  // Output: 70
