function pwdReveal(toggle) {
  const inputClass = toggle.getAttribute("for");

  const input = document.querySelector("." + inputClass);
  const type = input.getAttribute("type") === "password" ? "text" : "password";
  input.setAttribute("type", type);
  toggle.classList.toggle("bi-eye");
}

function parallax() {
  var s = document.getElementById("lagger");
  var yPos = 0 - window.yPos * 4;
  s.style.top = 50 + yPos + "%";

  //alert(yPos);
}

window.addEventListener("scroll", function () {
  parallax();
});
