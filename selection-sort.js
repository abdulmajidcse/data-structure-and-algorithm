"use strict";
// selection sort
let myArray = [64, 34, 25, 12, 22, 11, 90, 5];
console.log("Unsorted array = ", myArray);

const n = myArray.length;
// outer loop run (n-1) times to sort
for (let i = 0; i < n; i++) {
  let minIndex = i;
  for (let j = i + 1; j < n; j++) {
    if (myArray[j] < myArray[minIndex]) {
      minIndex = j;
    }
  }

  // delete min value from the array
  const minValue = myArray.splice(minIndex, 1);
  // move min value to the front of the array
  myArray.splice(i, 0, ...minValue);
}

console.log("Sorted array = ", myArray);
