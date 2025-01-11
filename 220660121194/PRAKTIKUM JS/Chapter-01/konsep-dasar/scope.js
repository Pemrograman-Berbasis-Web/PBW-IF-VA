// 1. Global Scope
// let greeting = "Hello world!";

// // code yang lain
// // code yang lain

// console.log(greeting);

// // Output: Hello world!

// function sayHello() {
//   console.log(greeting);
// }

// sayHello();

// // Output: Hello world!

// 2. Local Scope
// function sayHello() {
//   let greeting = 'Hello world!';
//   console.log(greeting);
// }
// sayHello();

// // Output: Hello world!

// 3. Block Scope
// let score = 70;

// if (score >= 70) {
//   let isPass = 'Yes';
//   console.log(isPass);
// }

// // Output: Lulus

// 4. Lexical Scope
// function checkScore() {
//   let score = 70;

//   function printScore() {
//     console.log(score);
//   }

//   printScore();
// }

// checkScore();

// // Output: 70