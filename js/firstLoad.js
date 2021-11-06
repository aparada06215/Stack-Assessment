const users = [];

const adminUser = () => {
  const user = new Object();
  user.email = "admin@admin.com";
  user.password = "123";
  return user;
};

localStorage.setItem("users", JSON.stringify(adminUser()));
users.push(JSON.parse(localStorage.getItem("users")));
let isLogin = false;
const load = () => {
  document.getElementById("navbar").style.display = "none";
  document.getElementById("cerrar-sesion").style.display = "none";
  document.getElementById("before-login").innerHTML =
    "Debes estar registrado para ver el menú";
};
