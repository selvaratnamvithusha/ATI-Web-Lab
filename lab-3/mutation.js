function mutation(arr) {
  word = arr[0].toLowerCase();
  letters = arr[1].toLowerCase().split("");
  wrong = false;
  
  
  letters.map(function(letter){
      if(word.indexOf(letter) == -1){
      wrong = true; 
      }
    
  });
  
  if (wrong){
    return false;
  }
 
  return true;
}

console.log(mutation(["hello", "hey"]));