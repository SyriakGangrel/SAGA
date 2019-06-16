  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  });

$(function aviso_cancel_ok() {
  var txt;
  if (confirm("Press a button!")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
});
