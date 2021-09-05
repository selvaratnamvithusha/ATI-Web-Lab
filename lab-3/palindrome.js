    function check_palindrome( str )
    {
      let Strings = str.replace(/\W+|_/g, "").toLowerCase();
      let reverseString = Strings.split("").reverse().join("");
      if (Strings != reverseString){
        console.log("Passed string is not a palindrome");
      }
      console.log("Passed string is a palindrome");
    }

    check_palindrome("eye");
    