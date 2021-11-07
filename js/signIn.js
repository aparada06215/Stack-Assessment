const signIn = (registro = false) => {
  var email = document.getElementById("email").value;
  var pass = document.getElementById("password").value;
  for (let user of JSON.parse(localStorage.getItem("users"))) {
    if (email === user.email && pass === user.password) {
      document.getElementById("before-login").innerHTML = "";
      document.getElementById("navbar").style.display = "block";
      document.getElementById("sign-out").style.display = "block";
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Bienvenido",
        showConfirmButton: false,
        timer: 1500,
      });
      return;
    } else if (!email) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "se requiere email",
      });
    } else if (!validateEmail(email)) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Email formato invalido",
      });
    } else if (!pass) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Se requiere password",
      });
    } else {
      Swal.fire({
        icon: "error",
        title: "Usuario no existe",
        text: "Debes registrarte como nuevo usuario",
      });
    }
  }
};
