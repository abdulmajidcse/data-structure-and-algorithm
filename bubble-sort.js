// Bubble sort
let myArray = [64, 34, 25, 12, 22, 11, 90, 5];
console.log("Unsorted array = ", myArray);

// outer loop run (n-1) times to sort
for (let i = 0; i < myArray.length; i++) {
  for (let j = 0; j < myArray.length; j++) {
    if (myArray[j] > myArray[j + 1]) {
      // swaps current and next value
      let currentValue = myArray[j];
      myArray[j] = myArray[j + 1];
      myArray[j + 1] = currentValue;
    }
  }
}

console.log("Sorted array = ", myArray);
