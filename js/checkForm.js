

function checkForm(form){

  var allGood = true;

  if (form.inputfield.value == "") {
    console.log("Invalid Name Input");
    alert("You must enter your name");
    form.inputfield.focus();
    allGood = false;
    return false;
  }

  // expression taken from http://emailregex.com/ to check for valid email addresses
  var exp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  var email = form.emailfield.value;

  if (!exp.test(email)){
    console.log("Invalid Email Input");
    console.log(email);
    alert("You must enter a valid email address.");
    form.emailfield.focus();
    allGood = false;
    return false;
  }

  /*
  if (form.messagebox.value == ""){
    console.log("Invalid Message Input");
    alert("You must put something in the message box.");
    form.message.focus();
    allGood = false;
    return false;
  }
  */

  /*
  if (allGood)
    alert("Thank you for your feedback. We will get back to you shortly")
    */

}
