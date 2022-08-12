const new_seller_form = document.getElementById("new_seller_form");

new_seller_form.addEventListener("submit", (e) => {
  e.preventDefault();
  adjust_active_icon();

  location.replace("all.html");
});
