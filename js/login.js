const ingreso = () => {
  var email = document.getElementById("email").value;
  var pass = document.getElementById("password").value;
  for (let user of users) {
    if (pass === user.password && email === user.email) {
      isLogin = true;
      document.getElementById("before-login").innerHTML = "";
      document.getElementById("navbar").style.display = "block";
      document.getElementById("cerrar-sesion").style.display = "block";
    }
  }
  if (!isLogin) {
    Swal.fire("password no valido");
  }
};
