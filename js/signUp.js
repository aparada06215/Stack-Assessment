const users = [];

const newUser = (email, password) => {
  const user = new Object();
  user.email = email;
  user.password = password;
  return user;
};

const signUp = () => {
  var emailSignUp = document.getElementById("email").value;
  var passwordSignUp = document.getElementById("password").value;

  if (validateEmail(emailSignUp)) {
    users.push(newUser(emailSignUp, passwordSignUp));
  } else {
    alert("email no valido");
    ``;
  }
};

function validateEmail(email) {
  const re =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}
