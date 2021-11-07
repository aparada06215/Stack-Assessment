const adminUser = () => {
  const admin = new Object();
  admin.email = "admin@admin.com";
  admin.password = "123";
  return admin;
};

if (localStorage.getItem("users") === null) {
  localStorage.setItem("users", JSON.stringify(adminUser()));
  const users = Array.from(JSON.parse(localStorage.getItem("users")));
  users.push(adminUser());
  localStorage.setItem("users", JSON.stringify(users));
}

const load = () => {
  document.getElementById("navbar").style.display = "none";
  document.getElementById("sign-out").style.display = "none";
  document.getElementById("before-login").innerHTML =
    "Debes estar registrado para ver el menú";
};
