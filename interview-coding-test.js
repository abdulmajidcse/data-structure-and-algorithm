/**
 * A live coding test about problem-solving:
 * suppose, you have a round array.
 * Arrays have two parts or one.
 * Which can I start to traverse to sort this array?
 */

let myArray = [10, 11, 12, 5, 6, 7];

// [5,6,3,4] = 2
// [10,11,12,5,6,7] = 3

// [1, 2, 4, 5]

let startIndex = 0;
for (let index = 0; index < myArray.length - 1; index++) {
  const current = myArray[index];
  const next = myArray[index + 1];

  if (current > next) {
    startIndex = index + 1;
    break;
  }
}

console.log(startIndex);
