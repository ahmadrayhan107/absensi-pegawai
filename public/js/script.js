function hide(id) {
  document.querySelector(id).classList.add("hidden");
}
function show(id) {
  document.querySelector(id).classList.remove("hidden");
}

const overlayBg = document.querySelector("#overlayBg");
function toggleOverlay(id) {
  const item = document.querySelector(id);
  overlayBg.classList.remove("hidden");
  item.classList.remove("hidden");
  overlayBg.addEventListener("click", function (e) {
    if (e.target != item && !item.classList.contains("hidden")) {
      overlayBg.classList.add("hidden");
      item.classList.add("hidden");
    }
  });
}

function toggleVisibility() {
  const visible = document.querySelector("#visible");
  const unvisible = document.querySelector("#unvisible");
  const password = document.querySelector("#password");
  visible.classList.toggle("hidden");
  unvisible.classList.toggle("hidden");
  if (password.getAttribute("type") == "password") {
    password.setAttribute("type", "text");
  } else {
    password.setAttribute("type", "password");
  }
}

function hideSelection(s) {
  const select = document.getElementById(s)
  select.options[0].hidden = true
}