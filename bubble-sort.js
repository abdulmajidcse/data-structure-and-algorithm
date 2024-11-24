// Bubble sort
// let myArray = [64, 34, 25, 12, 22, 11, 90, 5];
let myArray = [7, 3, 9, 12, 11];
console.log("Unsorted array = ", myArray);

const length = myArray.length;
// outer loop run (n-1) times to sort
for (let i = 0; i < length; i++) {
  // to improve performance
  let isSwapped = false;
  for (let j = 0; j < length - i; j++) {
    if (myArray[j] > myArray[j + 1]) {
      // swaps current and next value
      let currentValue = myArray[j];
      myArray[j] = myArray[j + 1];
      myArray[j + 1] = currentValue;
      isSwapped = true;
    }
  }

  if (isSwapped == false) {
    // to improve performance
    break;
  }
}

console.log("Sorted array = ", myArray);
