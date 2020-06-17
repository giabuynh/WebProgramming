function resetMessage() {
  var messages = document.getElementsByClassName('message');
  for (var i = 0; i < messages.length; i++)
  {
    console.log(i);
    messages[i].style.display = "none";
  }
}

// function isEmpty(input) {
//   if (input.value.trim() == '') return true;
//   return false;
// }

function isEmail(input) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(input.value))
    return true;
  return false;
}

function isPhone(input) {
  var tmp = input.value;
  if (!/\d{10}/.test(tmp)) return false;
  // if (input.value.length != 5 || isNaN(input.value)) return false;
  return true;
}

function checkRegister() {
  resetMessage();
  var tmp = document.getElementById("inp-fname");
  var message;
  if (isEmpty(tmp))
  {
    document.getElementById("inp-fname-message").style.display = "flex";
    tmp.focus(); console.log("name");
    return false;
  }

  tmp = document.getElementById("inp-email");
  if (isEmpty(tmp))
  {
    document.getElementById("inp-email-message").style.display = "flex";
    tmp.focus();
    return false;
  }
  else
    if (!isEmail(tmp))
    {
      document.getElementById('inp-notemail-message').style.display = "flex";
      tmp.focus();
      return false;
    }

  tmp = document.getElementById("inp-pass");
  if (isEmpty(tmp))
  {
    document.getElementById("inp-pass-message").style.display = "flex";
    tmp.focus();
    return false;
  }

  var confirm = document.getElementById("inp-confirm");
  if (tmp.value != confirm.value)
  {
    document.getElementById("inp-notmatch-message").style.display = "flex";
    confirm.focus();
    return false;
  }

  var tmp = document.getElementById("inp-phone");
  if (!isPhone(tmp))
  {
    document.getElementById("inp-notphone-message").style.display = "flex";
    tmp.focus();
    return false;
  }

  console.log("run");

  return true;
}
