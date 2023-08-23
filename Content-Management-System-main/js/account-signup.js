let signUpBtn = document.getElementById("signUp");
let logInAccSlideBtn = document.getElementById("loginAccSlideBtn");

signUpBtn.addEventListener("click", () => {
  document.cookie =
    "cms-create-name=" + document.getElementById("fullname").value;
  document.cookie =
    "cms-create-phone=" + document.getElementById("phone").value;
  window.open("./email-verify.php", "_self");
});

logInAccSlideBtn.addEventListener("click", () => {
  window.open("./account-login.php", "_self");
});
