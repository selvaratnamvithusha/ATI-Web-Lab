function confirmEnding(str, target) {
var targetLength = target.length;
var sub = str.slice(-targetLength);
if(sub === target){
return true;
}
return false;
}

console.log(confirmEnding("open sesame", "same"));