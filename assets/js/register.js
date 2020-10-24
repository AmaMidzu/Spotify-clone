$(document).ready(function() {

  $("#hideLogin").click(function() {
    console.log("login was clicked");
    $("#loginForm").hide();
    $("#registerForm").show();
  });

  $("#hideRegister").click(function() {
    $("#loginForm").show();
    $("#registerForm").hide();
  });
});
