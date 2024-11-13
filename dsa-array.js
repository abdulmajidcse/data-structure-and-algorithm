// Min value from an array
const myArray = [7, 15, 12, 5, 14];
let minValue = myArray[0];

for (let i = 0; i < myArray.length; i++) {
  if (myArray[i] < minValue) {
    minValue = myArray[i];
  }
}

console.log(`Lowest value = ${minValue}`);
