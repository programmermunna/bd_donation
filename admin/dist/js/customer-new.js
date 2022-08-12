const new_customer_form = document.getElementById("new_customer_form");

new_customer_form.addEventListener("submit", (e) => {
  e.preventDefault();
  adjust_active_icon();

  location.replace("all.html");
});
