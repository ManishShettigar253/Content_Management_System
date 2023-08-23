let sendOTP = document.getElementById("sendOTP");

sendOTP.addEventListener("click", () => {
  document.cookie = "cms-v-email=" + document.getElementById("email").value;
  window.open("./otp-verification.php", "_self");
});
