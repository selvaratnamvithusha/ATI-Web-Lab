function falsyBouncer(arr) {
  return arr.filter(Boolean);
}

console.log(falsyBouncer([7, "ate", "", false, 9]));