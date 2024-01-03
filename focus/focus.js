// 6. Write a javascript and/or JQuery statement that would hide the words “<div class="makeInvisible">this text should be invisible.” Then, change the text “<div class="makeBold">this text should be bold</div>” to bold. *

const invisibleDiv = document.querySelector('.makeInvisible');
invisibleDiv.style.display = 'none';

const boldDiv = document.querySelector('.makeBold');
boldDiv.style.fontWeight = 'bold';

// 9. Write a javascript function isEmpty() that will return true if an object is empty and false if it is not (excluding default prototype properties). Assume you do not have access to Lodash or other libraries. <br> Example: <script> let empty_object = {}; console.log(isEmpty(empty_object)); // true let not_empty_object = { foo : 'bar' }; console.log(isEmpty(not_empty_object)); // false </script> *

function isEmpty(objectToCheck) {
  if (Object.keys(objectToCheck).length > 0) {
    return false;
  } else {
    return true;
  };
};

// 15. Write a jQuery event handler that will fire when a form with ID #foo is submitted and prevents the form from submitting. *

$(document).ready(function() {
  var form = $('#foo');
  form.on('submit', function(event) {
      event.preventDefault();
  });
});

// 17. Write a javascript function checkString(foo) which takes a parameter `foo`. The function should return a Promise that resolves if `foo` is equal to "hello", otherwise the Promise should reject. Below this function, write code that invokes checkString() and outputs (in the console) "Good!" upon Promise success or "Bad!" upon Promise failure. Do not use jQuery. *

function checkString(foo) {
  return new Promise((resolve, reject) => {
      if (foo === "hello") {
          resolve();
      } else {
          reject();
      };
  });
};

async function testCheckString(value) {
  try {
      await checkString(value);
      console.log("Good!");
  } catch {
      console.log("Bad!");
  };
};

testCheckString("hello");
testCheckString("world");