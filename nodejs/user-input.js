const readline = require("readline");

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout,
});

// single input
// rl.question(`What's your name? `, (answer) => {
//   console.log(`Welcome ${answer}!`);
//   rl.close();
// });

let count = 0;

// multiple input
const getMultipleInput = () => {
  if (count < 2) {
    rl.question(`${count + 1}. What's your name? `, (answer) => {
      console.log(`Welcome ${answer}!`);
      count++;
      getMultipleInput();
    });
  } else {
    rl.close();
  }
};

getMultipleInput();
