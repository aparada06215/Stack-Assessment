const newUser = (email, password) => {
  const user = new Object();
  user.email = email;
  user.password = password;
  return user;
};

const signUp = () => {
  var emailSignUp = document.getElementById("email").value;
  var passwordSignUp = document.getElementById("password").value;

  if (validateEmail(emailSignUp) && passwordSignUp) {
    users.push(newUser(emailSignUp, passwordSignUp));
    localStorage.setItem("users", JSON.stringify(users));
    Swal.fire({
      position: "center",
      icon: "success",
      title: "Registro Exitoso",
      showConfirmButton: false,
      timer: 1500,
    });
    ingreso();
  } else if (!emailSignUp) {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "email no puede ser vacio",
    });
  } else if (!passwordSignUp) {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "password no puede ser vacio",
    });
  } else {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "email formato invalido",
    });
  }
};

function validateEmail(email) {
  const re =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}
