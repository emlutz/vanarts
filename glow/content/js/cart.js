function openNav() {
  document.getElementById("cart").style.width = "400px";
  // document.getElementById("cart").style.opacity = "0.7"
}

function closeNav() {
  document.getElementById("cart").style.width = "0";
}

function openMenu() {
  document.getElementById("sm_menu").style.width = "400px";
  // document.getElementById("cart").style.opacity = "0.7"
}

function closeMenu() {
  document.getElementById("sm_menu").style.width = "0";
}

window.onload = function() {
  // console.log(hola);
  const sold = $(".sold").text().trim();
  const qty = $(".qty");
  if (sold == 0 || !sold.length) {
    qty.addClass("hide");
  }
}