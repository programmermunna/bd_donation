const new_product_form = document.getElementById("new_product_form");

new_product_form.addEventListener("submit", (e) => {
  e.preventDefault();
  adjust_active_icon();

  location.replace("all.html");
});
