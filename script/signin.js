function isEmpty(input) {
  if (input.value.trim() == '') return true;
  return false;
}

function checkRequire(id) {
  console.log(id);
  var message = document.getElementById(id+"-message").style.display = "none";
  var input = document.getElementById(id);
  input.style.border = "none";
  if (isEmpty(input))
  {
    input.style.border = "1px solid red";
    document.getElementById(id+"-message").style.display = "flex";
  }
}
